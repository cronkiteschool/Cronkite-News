<div style="padding-bottom: 20px;">

	<div style="float: left; display: inline;">
	<div class="fb-like" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false" data-action="recommend" data-font="arial"></div>
	</div>
	<div style="float: left; display: inline; width: 90px;">
	<a href="https://twitter.com/share" class="twitter-share-button" data-via="cronkitenews">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
	
	<div style="float: left; display: inline; width: 80px;">
	<g:plusone></g:plusone>
	</div>
	
	<?php
	
	$emailtheurl = get_the_title() . '&body=You might enjoy reading this story from Cronkite News:%0D%0A%0D%0A' . get_the_title() . '%0D%0A%0D%0A';
	?>
	<div style="display: inline;">
	<a href="mailto:?subject=<?php echo $emailtheurl; echo the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/email-icon-at.jpg" height="24" alt="Email this story" title="Email this story" /></a>
	</div>
	
		<div style="display: inline; padding-left: 10px;">
		<a href="javascript:window.print();"><img src="<?php bloginfo('template_directory'); ?>/img/print-icon.png" width="24" height="24" alt="Print this story" title="Print this story" /></a>
	</div>

</div> <!-- social-sharing -->