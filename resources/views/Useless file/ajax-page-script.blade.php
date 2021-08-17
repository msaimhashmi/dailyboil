<?php
if(isset($url) && isset($mediaData['found']) && $mediaData['found'] == 1) {
	?>
	<div id="scripts">
		<?php
		if(isset($mediaData['scriptFiles']) && !empty($mediaData['scriptFiles'])) {
			echo $mediaData['scriptFiles'];
		}
		?>
		<script type="text/javascript" src="<?php echo base_url("assets/js/popup.js"); ?>"></script>
		<script type="text/javascript">
			var videoUrl = "<?php echo $url; ?>";
			$(document).ready(function() {
				$('.share-link').on("click", function(e) {
					$(this).customerPopup(e,$(this).attr('data-width'),$(this).attr("data-height"),"yes");
				});
				<?php
				if(isset($mediaData['videosOnly']) && count($mediaData['videosOnly']) > 0) {
					?>
					$('.show-btn').on('click', function(event) {
						var table = $('.video-only-table');
						var btn = $('.show-btn');
						if (table.hasClass('hide')) {
							table.removeClass('hide');
							btn.html(lang_vars['less']+' <i class="fa fa-caret-up"></i>');
						}
						else {
							table.addClass('hide');
							btn.html(lang_vars['more']+' <i class="fa fa-caret-down"></i>');
						}
					});
					<?php
				}
				if(isset($mediaData['script']) && !empty($mediaData['script'])) {
					echo $mediaData['script'];
				}
				?>
			});
		</script>
		<script type="text/javascript" src="<?php echo base_url("assets/js/main.js"); ?>"></script>
	</div>
	<?php
}
?>