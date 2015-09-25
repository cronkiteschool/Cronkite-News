if (typeof Object.create !== 'function') {
    Object.create = function(o){
        var F = function(){};
        F.prototype = o;
        return new F();
    }
}

var SlideGallery = {
    jq_item         : null,
    _width          : 500,
    _height         : 330,
    slide_cnt       : 0,
    cur_index       : 1,
    return_width    : 500,
    return_height   : 330,
    _full_called    : false,
    set_size        : function(width, height){
        this.return_height = this._height;
        this.return_width = this._width;
        this._width = width;
        this._height = height;
        var gal_clip = height - 30;
        $(".gallery_clip", this.jq_item).height(gal_clip);
        $(".gallery_clip", this.jq_item).width(width);
        $(".gallery_clip ul", this.jq_item).height(gal_clip);
        //ul sized to hold all the list items
        $(".gallery_clip ul", this.jq_item).width(width * this.slide_cnt);
        $(".gallery_clip ul li", this.jq_item).height(gal_clip);
        $(".gallery_clip ul li", this.jq_item).width(width);
    },
    click_next      : function(e){
        e.preventDefault();
	var self = this;
        //EXIT IF AT THE END
        if (self.cur_index >= self.slide_cnt){
	    //alert("at end");
            return;
        }

        //ROTATE THE CAROUSEL
        $('.gallery_clip ul', this.jq_item).animate({left: "-=" + this._width.toString()});

        //STYLE THE CURRENT INDEX
        $('span.click_' + this.cur_index.toString(), this.jq_item).removeClass("current_thumb");
        self.cur_index += 1;
        $('span.click_' + this.cur_index.toString(), this.jq_item).addClass("current_thumb");
    },
    click_item      : function(item_id){
        //STYLE THE CURRENT INDEX
        $('span.click_' + this.cur_index.toString(), this.jq_item).removeClass("current_thumb");
        this.cur_index = item_id;
        $('span.click_' + this.cur_index.toString(), this.jq_item).addClass("current_thumb");

        $('.gallery_clip ul', this.jq_item).animate({left: "-" + (this._width * (this.cur_index - 1)).toString()});
    },
    click_prev      : function(e){
        e.preventDefault();
	var self = this;
        //EXIT IF AT THE BEGINNING
        if (self.cur_index <= 1){
            return;
        }

        //ROTATE THE CAROUSEL
        $('.gallery_clip ul', this.jq_item).animate({left: "+=" + this._width.toString()});

        //STYLE THE CURRENT INDEX
        $('span.click_' + this.cur_index.toString(), this.jq_item).removeClass("current_thumb");
        self.cur_index -= 1;
        $('span.click_' + this.cur_index.toString(), this.jq_item).addClass("current_thumb");
    },
    click_shadow    : function(e){
	var content = '<div class="gallery_slide">' + this.jq_item.html() + '</div>';
    	Shadowbox.open({
       	    player:     "html",
            content:   content,
	    title:      "",
            height:     400,
            width:      600,
	    options: {
		onFinish: function(){
			$('div#sb-player div.gallery_slide').hide();
	           	$('div#sb-player div.gallery_slide').removeClass('gallerified').addClass('fullScreen');
			var shadow_gallery = make_slide_gallery($('div#sb-player div.gallery_slide'), 600, 400);
		//	shadow_gallery.set_size(600, 400);
			$('div#sb-player .gallery_clip ul').animate({left: 0});	
			$('div#sb-player div.gallery_clip img.small').hide();
		        $('div#sb-player div.gallery_clip img.big').show();
			$("div#sb-player .mycarousel-full").hide();
			$('div#sb-player div.gallery_slide').show();
			$('div#sb-player .thumb_click').removeClass("current_thumb");
		        $('div#sb-player span.click_1').addClass("current_thumb");
		}
	    }
    	});
    },
    click_full      : function(e){
        if (!this._full_called){
            var self = this;
            this.set_size($(window).width(), $(window).height());
            $('.gallery_clip ul', this.jq_item).animate({left: "-" + (this._width * (this.cur_index - 1)).toString()});

            this._full_called = true;
            $('div.gallery_clip img.small').hide();
            $('div.gallery_clip img.big').show();
            this.jq_item.fullScreen({callback: function(e){return self.exit_full(e);}});
            $(".mycarousel-full", this.jq_item).html("Exit Fullscreen");
            e.preventDefault();
        } else {

            $(".mycarousel-full", this.jq_item).css({backgroundImage: 'url(../img/fullscreen.png) no-repeat;'});
            /*
            this.jq_item.fullScreen();
            $(document).off( 'fullscreenchange mozfullscreenchange webkitfullscreenchange' );
            this.jq_item.toggleClass("fullScreen");
            //this.jq_item.cancel();
            this.exit_full(false);
            e.preventDefault();
            */
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            }
            $(document).off( 'fullscreenchange mozfullscreenchange webkitfullscreenchange' );
            var prnt = this.jq_item.parent();
            this.jq_item.removeClass("fullScreen").insertBefore(prnt);
            prnt.remove();

            this.exit_full(false);
        }
    },
    exit_full       : function(status){

		self = this;
         if (status == false){
            if (this._full_called){
                $(".mycarousel-full", this.jq_item).html("Fullscreen");
                $('div.gallery_clip img.big').hide();
                $('div.gallery_clip img.small').show();
                this.set_size(this.return_width, this.return_height);

                $('.gallery_clip ul', this.jq_item).animate({left: "-" + (this._width * (this.cur_index - 1)).toString()});
                this._full_called = false;
                //$(".mycarousel-full", this.jq_item).bind('click', function(e){return self.click_full(e);});
				$(".mycarousel-full", this.jq_item).show();
            }
        }
    },
    init            : function(){
        var self = this;
        $(".mycarousel-next", this.jq_item).bind('click', function(e){return self.click_next(e);});
        $(".mycarousel-prev", this.jq_item).bind('click', function(e){return self.click_prev(e);});
        if ($.support.fullscreen){
            $(".mycarousel-full", this.jq_item).bind('click', function(e){return self.click_full(e);});
	    //$(".mycarousel-full", this.jq_item).bind('click', function(e){return self.click_shadow(e);});
        } else{
            //$(".mycarousel-full", this.jq_item).hide();
            $('.mycarousel-full', this.jq_item).bind('click', function(e){return self.click_shadow(e);});
        }
        $(".thumb_click", this.jq_item).bind('click', function(e){
            var classList =$(this).attr('class').split(/\s+/);
            $.each( classList, function(index, item){
                if (item.indexOf("click_") != -1){
                    {
                        var item_id = parseInt(item.slice(6));
                        return self.click_item(item_id);
                    }
                }
            });

        });


    }
}

function make_slide_gallery(jq_item, width, height){
	if (jq_item.hasClass("gallerified")){
		return null;
	}
    var slide_cnt = $('div.image_area', jq_item).length;
    var new_slide = Object.create(SlideGallery);
    new_slide.jq_item = jq_item;
    new_slide.slide_cnt = slide_cnt;
    new_slide.set_size(width, height);
    new_slide.init();
	jq_item.addClass("gallerified");
    return new_slide;
}

