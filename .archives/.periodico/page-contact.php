<?php
  include_once './layout/header.php';
?>
			<div class="container-fluid">
				<div class="container">
					<div class="primary margin-15">
					<div class="row">
						<div class="col-md-12">
							<article class="section_margin">
								<div class="post-content">
									<div class="single-header">
										<h3 class="alith_post_title">CONTACTANOS</h3>
										<div class="post_meta">
											<a class='meta_author_avatar' href='page-author.php'><img src="assets/images/author-avatar.png" alt="author details"/></a>
											<span class="meta_author_name"><a class='author' href='page-author.php'>Nombre del Autor</a></span>
											<span class="meta_categories"><a href="archive.php">Politica</a>, <a href="archive.php">Noticias</a></span>
											<span class="meta_date"><?php echo $fblog; ?></span>
										</div>
									</div>
									<div class="single-content animate-box">

										<div class="column-1 animate-box">
											<div class="row">
												<div class="col-sm-12">
													<div id="map" class="section_margin_40"></div> <!--Google map-->
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<h2>Contactanos</h2>
													<p><strong><?php echo $lorem2; ?></strong></p>
													<p></p>
													<p><i class="fa fa-map-o"></i> Direccion:<?php echo $lorem4; ?></p>
													<p><i class="fa fa-envelope-o"></i> <?php echo $correo; ?></p>
													<p><i class="fa fa-mobile-phone"></i> telefono: <?php echo $telefono; ?></p>
													<p><i class="fa fa-clock-o"></i> ATENDEMOS: 8Am - 6Pm  24/7</p>
												</div>
												<div class="col-md-6">
													<h2>ESCRIBENOS</h2>
													<form action="#" method="post" id="commentform" class="comment-form" novalidate="">
													  <div class="row">
														 <div class="comment-form-author col-sm-12 col-md-6"> <label for="author">NOMBRE (*)</label> <input type="text" id="author" name="author" placeholder="TU NOMBRE *" value="" size="30"></div>
														 <div class="comment-form-email col-sm-12 col-md-6"> <label for="email">CORREO (*)</label> <input type="email" id="email" name="email" placeholder="CORREO *" value="" size="30"></div>
													  </div>
													  <p class="comment-form-comment"><label for="comment">MENSAJE</label><textarea id="comment" name="comment" cols="45" rows="8" placeholder="MENSAJE" aria-required="true"></textarea></p>

													  <p class="form-submit"><input type="submit" name="submit" id="submit" class="submit" value="ENVIAR MENSAJE"> <input type="hidden" name="comment_post_ID" value="80" id="comment_post_ID"> <input type="hidden" name="comment_parent" id="comment_parent" value="0"></p>
												   </form>
												</div>
											</div>
										</div>
									</div> <!--single content-->
							</article>
						</div>
					</div>
					</div> <!--.primary-->
<?php
  include_once './layout/footer.php';
?>
