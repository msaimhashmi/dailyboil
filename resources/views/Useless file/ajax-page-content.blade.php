<?php
if(isset($url)) {
	?>
	<div class="container">
		<?php
		if(isset($mediaData['found']) && $mediaData['found'] == 1 && $error == false) {
			$pageUrl = base_url("?url=".$url);
			$title = "Download ".$mediaData['title']." From ".$source." - ".$settings['title'];
			
			if($settings['allowDirectLink'] == 1 && $source == "dailymotion") {
				?>
				<div id="download-modal" data-backdrop="static" data-keyboard="false" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">
									<?php echo showLanguageVar($languageValues,"download"); ?> : <?php echo $mediaData['title']; ?>
								</h4>
							</div>
							<form method="post" id="download-dailymotion-form">
								<div class="modal-body">
									<p><?php echo showLanguageVar($languageValues,"dm_download_guide_heading"); ?><p>
									<ol>
										<li>
											<p><?php echo showLanguageVar($languageValues,"dm_download_guide_step_1",true); ?> <a target="_blank" href="<?php echo $url; ?>"><?php echo showLanguageVar($languageValues,"here"); ?></a></p>
										</li>
										<li>
											<p><?php echo showLanguageVar($languageValues,"dm_download_guide_step_2",true); ?></p>
										</li>
										<li>
											<p><?php echo showLanguageVar($languageValues,"dm_download_guide_step_3",true); ?></p>
										</li>
										<li>
											<p><?php echo showLanguageVar($languageValues,"dm_download_guide_step_4",true); ?></p>
										</li>
										<li>
											<p><?php echo showLanguageVar($languageValues,"dm_download_guide_step_5",true); ?></p>
										</li>
									</ol>
									<div class="form-group">
										<textarea id="source-dm" class="form-control" rows="6" placeholder="<?php echo showLanguageVar($languageValues,"paste_source_code_here"); ?>" required="required"></textarea>
									</div>
								</div>
								<div class="modal-footer">
									<button id="submit-dm-source" type="submit" class="btn btn-success"><?php echo showLanguageVar($languageValues,"generate_link"); ?></button>
									<a download="download" id="download-dm-video" class="btn btn-primary hide"></a>
									<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo showLanguageVar($languageValues,"close"); ?></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<?php
			}
			
			if(isset($mediaData['embedIframe']) && !empty($mediaData['embedIframe'])) {
				?>
				<div id="embedModal" class="modal fade" role="dialog">
					<button type="button" class="cross-modal close" data-dismiss="modal">&times;</button>
					<div class="modal-dialog">
						<div class="modal-content">
							<div id="player-body" class="modal-body">
								<?php 
								if(isset($mediaData['embedIframeDirect']) && $mediaData['embedIframeDirect'] == "true") {
									echo $mediaData['embedIframe']; 
								}
								?>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
			?>
			<div class="video-holder">
				<div class="coll-left">
					<div <?php echo(isset($mediaData['embedIframe']) && !empty($mediaData['embedIframe']) ? 'data-toggle="modal" data-target="#embedModal"' : ""); ?> class="video-thumb">
						<?php
						if(isset($mediaData['time']) && $mediaData['time'] != "empty") {
							?>
							<span class="time"><?php echo $mediaData['time']; ?></span>
							<?php
						}
						?>
						<img class="img-responsive" src="<?php echo $mediaData['image']; ?>" />
						<?php
						if(isset($mediaData['embedIframe']) && !empty($mediaData['embedIframe'])) {
							?>
							<div class="playIcon"><i aria-hidden="true" class="fa fa-play-circle"></i></div>
							<?php
						}
						?>
					</div>
					<div class="video-details">
						<div class="title">
							<?php echo $mediaData['title']; ?>
						</div>
						<div class="source">
							<?php echo showLanguageVar($languageValues,"source"); ?>:<span><?php echo $source; ?></span>
						</div>
						<div class="share-btns">
							<a data-width="560" data-height="662" class="share-link fb" href="https://www.facebook.com/sharer/sharer.php?display=popup&u=<?php echo urlencode($pageUrl); ?>">
								<i class="fa fa-facebook"></i> <span><?php echo showLanguageVar($languageValues,"share_on_facebook"); ?></span>
							</a>
							<a data-width="560" data-height="450" class="share-link tw" href="http://twitter.com/share?url=<?php echo urlencode($pageUrl); ?>&text=<?php echo $title; ?>">
								<i class="fa fa-twitter"></i> <span><?php echo showLanguageVar($languageValues,"share_on_twitter"); ?></span>
							</a>
							<a data-width="410" data-height="520" class="share-link gp" href="https://plus.google.com/share?url=<?php echo urlencode($pageUrl); ?>">
								<i class="fa fa-google-plus"></i> <span><?php echo showLanguageVar($languageValues,"share_on_googleplus"); ?></span>
							</a>
							<a data-width="567" data-height="567" class="share-link vk" href="http://vkontakte.ru/share.php?url=<?php echo urlencode($pageUrl); ?>">
								<i class="fa fa-vk"></i> <span><?php echo showLanguageVar($languageValues,"share_on_vk"); ?></span>
							</a>
							<?php
							if(isset($isMobile) && $isMobile == true) {
								?>
								<a class="wa" href="whatsapp://send?text=*<?php echo $title; ?>* %0A %0A <?php echo $pageUrl; ?>">
									<i class="fa fa-whatsapp"></i> <span><?php echo showLanguageVar($languageValues,"share_on_whatsapp"); ?></span>
								</a>
								<?php
							}
							?>
						</div>
					</div>
					<?php
					if($adsSettings['displayOnHomePage'] == 1 && $adsSettings['ad250x250Status'] == 1) {
						$this->load->view("includes/ad250x250");
					}
					?>
				</div>
				<div class="coll-right">
					<?php
					if(isset($mediaData['videos']) && count($mediaData['videos']) > 0) {
						?>
						<div class="type-divider">
							<div class="video"><span><?php echo showLanguageVar($languageValues,"video"); ?></span></div>
						</div>
						<div class="table-responsive p-b-30">
							<table class="formats-table table">
								<thead>
									<tr>
										<th class="quality" width="25%">
											<?php echo showLanguageVar($languageValues,"quality"); ?>
										</th>
										<th class="format" width="25%">
											<?php echo showLanguageVar($languageValues,"format"); ?>
										</th>
										<th class="size" width="25%">
											<?php echo showLanguageVar($languageValues,"size"); ?>
										</th>
										<th class="downloads" width="25%">
											<?php echo showLanguageVar($languageValues,"downloads"); ?>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach($mediaData['videos'] as $video) {
										?>
										<tr>
											<td><?php echo $video['data']['resolution']; ?></td>
											<td><?php echo strtoupper($video['data']['ext']); ?></td>
											<td id="format-id-size-<?php echo $video['formatId']; ?>">
												<?php echo($video['size'] != "unknown" ? $video['size'] : '<img width="27" src="'.base_url("assets/images/loader.svg").'" />'); ?>
											</td>
											<td>
												<?php $downloadUrl = ($settings['allowDirectLink'] == 1 ? $video['url'] : base_url("main/download?source=".$source."&id=".$mediaData['id']."&format=".$video['formatId']."&url=".urlencode($video['url'])."&title=".urlencode($video['title']))); ?>
												<a <?php echo($settings['allowDirectLink'] == 1 ? 'download="'.$video['title'].'"' : ""); ?> data-size="<?php echo $video['size']; ?>" data-formatId="<?php echo $video['formatId']; ?>" data-href="<?php echo $video['url']; ?>" href="<?php echo $downloadUrl; ?>" class="vd-down btn btn-default btn-download"><?php echo showLanguageVar($languageValues,"download"); ?></a>
											</td>
										</tr>
										<?php
									}
									?>
								</tbody>
							</table>
						</div>
						<?php
					}
					if(isset($mediaData['videosOnly']) && count($mediaData['videosOnly']) > 0) {
					?>
						<div class="video-only">
							<span class="head-title"><?php echo showLanguageVar($languageValues,"video_only"); ?>
								<span class="fa-stack">
									<i class="fa fa-volume-up fa-stack-1x"></i>
									<i class="fa fa-ban fa-stack-2x text-danger"></i>
								</span>
								<a class="pull-right show-btn"><?php echo showLanguageVar($languageValues,"more"); ?> <i class="fa fa-caret-down"></i></a>
							</span>
							<div class="video-only-table hide">
								<div class="table-responsive">
									<table class="formats-table table">
										<thead>
											<tr>
												<th class="quality" width="25%">
													<?php echo showLanguageVar($languageValues,"quality"); ?>
												</th>
												<th class="format" width="25%">
													<?php echo showLanguageVar($languageValues,"format"); ?>
												</th>
												<th class="size" width="25%">
													<?php echo showLanguageVar($languageValues,"size"); ?>
												</th>
												<th class="downloads" width="25%">
													<?php echo showLanguageVar($languageValues,"downloads"); ?>
												</th>
											</tr>
										</thead>
										<tbody>
											<?php
											foreach($mediaData['videosOnly'] as $video) {
												?>
												<tr>
													<td><?php echo $video['data']['resolution']; ?></td>
													<td><?php echo strtoupper($video['data']['ext']); ?></td>
													<td id="format-id-size-<?php echo $video['formatId']; ?>">
														<?php echo($video['size'] != "unknown" ? $video['size'] : '<img width="27" src="'.base_url("assets/images/loader.svg").'" />'); ?>
													</td>
													<td>
														<?php $downloadUrl = ($settings['allowDirectLink'] == 1 ? $video['url'] : base_url("main/download?source=".$source."&id=".$mediaData['id']."&format=".$video['formatId']."&url=".urlencode($video['url'])."&title=".urlencode($video['title']))); ?>
														<a <?php echo($settings['allowDirectLink'] == 1 ? 'download="'.$video['title'].'"' : ""); ?> data-size="<?php echo $video['size']; ?>" data-formatId="<?php echo $video['formatId']; ?>" data-href="<?php echo $video['url']; ?>" href="<?php echo $downloadUrl; ?>" class="btn btn-default btn-download"><?php echo showLanguageVar($languageValues,"download"); ?></a>
													</td>
												</tr>
												<?php
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<?php
					}
					if(isset($mediaData['audios']) && count($mediaData['audios']) > 0) {
					?>
						<div class="type-divider">
							<div class="audio"><span><?php echo showLanguageVar($languageValues,"audio"); ?></span></div>
						</div>
						<div class="table-responsive">
							<table class="formats-table table">
								<thead>
									<tr>
										<th class="quality" width="25%">
											<?php echo showLanguageVar($languageValues,"quality"); ?>
										</th>
										<th class="format" width="25%">
											<?php echo showLanguageVar($languageValues,"format"); ?>
										</th>
										<th class="size" width="25%">
											<?php echo showLanguageVar($languageValues,"size"); ?>
										</th>
										<th class="downloads" width="25%">
											<?php echo showLanguageVar($languageValues,"downloads"); ?>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach($mediaData['audios'] as $audio) {
										?>
										<tr>
											<td><?php echo $audio['data']['resolution']; ?></td>
											<td><?php echo strtoupper($audio['data']['ext']); ?></td>
											<td id="format-id-size-<?php echo $audio['formatId']; ?>">
												<?php echo($audio['size'] != "unknown" ? $audio['size'] : '<img width="27" src="'.base_url("assets/images/loader.svg").'" />'); ?>
											</td>
											<td>
												<?php $downloadUrl = ($settings['allowDirectLink'] == 1 ? $audio['url'] : base_url("main/download?source=".$source."&id=".$mediaData['id']."&format=".$audio['formatId']."&url=".urlencode($audio['url'])."&title=".urlencode($audio['title']))); ?>
												<a <?php echo($settings['allowDirectLink'] == 1 ? 'download="'.$audio['title'].'"' : ""); ?> data-size="<?php echo $audio['size']; ?>" data-formatId="<?php echo $audio['formatId']; ?>" data-href="<?php echo $audio['url']; ?>" href="<?php echo $downloadUrl; ?>" class="btn btn-default btn-download"><?php echo showLanguageVar($languageValues,"download"); ?></a>
											</td>
										</tr>
										<?php
									}
									?>
								</tbody>
							</table>
						</div>
						<?php
					}
					if(isset($mediaData['gifs']) && count($mediaData['gifs']) > 0) {
					?>
						<div class="type-divider">
							<div class="gif"><span><?php echo showLanguageVar($languageValues,"gif"); ?></span></div>
						</div>
						<div class="table-responsive">
							<table class="formats-table table">
								<thead>
									<tr>
										<th class="quality" width="25%">
											<?php echo showLanguageVar($languageValues,"quality"); ?>
										</th>
										<th class="format" width="25%">
											<?php echo showLanguageVar($languageValues,"format"); ?>
										</th>
										<th class="size" width="25%">
											<?php echo showLanguageVar($languageValues,"size"); ?>
										</th>
										<th class="downloads" width="25%">
											<?php echo showLanguageVar($languageValues,"downloads"); ?>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach($mediaData['gifs'] as $gif) {
										?>
										<tr>
											<td><?php echo $gif['data']['resolution']; ?></td>
											<td><?php echo strtoupper($gif['data']['ext']); ?></td>
											<td id="format-id-size-<?php echo $gif['formatId']; ?>">
												<?php echo($gif['size'] != "unknown" ? $gif['size'] : '<img width="27" src="'.base_url("assets/images/loader.svg").'" />'); ?>
											</td>
											<td>
												<?php $downloadUrl = ($settings['allowDirectLink'] == 1 ? $gif['url'] : base_url("main/download?source=".$source."&id=".$mediaData['id']."&format=".$gif['formatId']."&url=".urlencode($gif['url'])."&title=".urlencode($gif['title']))); ?>
												<a <?php echo($settings['allowDirectLink'] == 1 ? 'download="'.$gif['title'].'"' : ""); ?> data-size="<?php echo $gif['size']; ?>" data-formatId="<?php echo $gif['formatId']; ?>" data-href="<?php echo $gif['url']; ?>" href="<?php echo $downloadUrl; ?>" class="btn btn-default btn-download"><?php echo showLanguageVar($languageValues,"download"); ?></a>
											</td>
										</tr>
										<?php
									}
									?>
								</tbody>
							</table>
						</div>
						<?php
					}
					?>
				</div>
				<div class="clearfix"></div>
			</div>
			<?php
		}
		else {
			?>
			<div class="alert alert-<?php echo $errorType; ?> alert-dismissable">
				<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong><?php echo showLanguageVar($languageValues,"error"); ?> !</strong> <?php echo $errorMsg; ?>
			</div>
			<?php
		}
		?>
	</div>
	<?php
}
?>