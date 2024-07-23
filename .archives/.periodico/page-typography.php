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
										<h3 class="alith_post_title">Tipografia</h3>
										<div class="post_meta">
											<a class='meta_author_avatar' href='page-author.php'><img src="assets/images/author-avatar.png" alt="author details"/></a>
											<span class="meta_author_name"><a class='author' href='page-author.php'>Nombre del Autor</a></span>
											<span class="meta_categories"><a href="archive.php">Letras</a>, <a href="archive.php">Tipografia</a></span>
											<span class="meta_date"><?php echo $fblog; ?></span>
										</div>
									</div>
									<div class="single-content animate-box">
										<p class="alith_post_except animate-box"><?php echo $lorem2; ?></p>
										<div class="dropcap column-2 animate-box">

											<p><?php echo $lorem2; ?></p>
											<h1>Tamaño 1</h1>
											<p><?php echo $lorem2; ?></p>
											<hr>
											<h2>Tamaño 2</h2>
											<p><?php echo $lorem2; ?></p>
											<h3>Tamaño 3</h3>
											<p><?php echo $lorem2; ?></p>
											<h4>Tamaño 4</h4>
											<p><?php echo $lorem2; ?></p>
											<h5>Tamaño 5</h5>
											<h6>Tamaño 6</h6>
											<hr>
											<p><?php echo $lorem2; ?></p>
											<p><?php echo $lorem2; ?></p>
											<p><?php echo $lorem2; ?></p>
											<p><?php echo $lorem2; ?></p>
											<h2>Cita</h2>
											<p><?php echo $lorem2; ?></p>
											<blockquote><p><?php echo $lorem2; ?></p></blockquote>
											<p><?php echo $lorem2; ?></p>
											<p><?php echo $lorem2; ?></p>
											<h2>Lista Desordenada</h2>
											<p><?php echo $lorem2; ?></p>
											<ul>
											<li><?php echo $lorem4; ?></li>
											<li><?php echo $lorem4; ?></li>
											<li><?php echo $lorem4; ?></li>
											<li><?php echo $lorem4; ?></li>
											</ul>
											<h2>lista Ordenada</h2>
											<p><?php echo $lorem2; ?>.&nbsp;<a href=""><?php echo $lorem4; ?></a>&nbsp;<?php echo $lorem2; ?></p>
											<ol>
											<li><?php echo $lorem4; ?></li>
											<li><?php echo $lorem4; ?></li>
											<li><?php echo $lorem4; ?></li>
											<li><?php echo $lorem4; ?></li>
											<li><?php echo $lorem4; ?></li>
											</ol>
										</div>
										<div class="post-tags">
											<div class="post-tags-inner">
												<a href='category-grid.php' rel='tag'>#Moda</a>
												<a href='category-grid.php' rel='tag'>#Entretenimiento</a>
												<a href='category-grid.php' rel='tag'>#Salud</a>
												<a href='category-grid.php' rel='tag'>#Tecnologia</a>
											</div>
										</div>
										<div class="post-share">
											<ul>
												<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
												<li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
											</ul>
										</div>
										<div class="post-author section_margin_40">
											<figure><a href='page-author.php'><img src="assets/images/post-author-avatar.jpg"></a></figure>
											<div class="post-author-info">
												<h3><a href='page-author.php'>Nombre del Autor</a></h3>
												<p><?php echo $lorem2; ?></p>
												<ul>
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
												</ul>
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
