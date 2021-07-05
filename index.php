<?php
include 'includes/db.php';

?>
<?php include 'includes/header.php';
?>

	<!-- Start main body Area -->
	<div class="main-body section-gap mt--30">
		<div class="container box_1170">
			<div class="row">
				<div class="col-lg-8 post-list">
					<!-- Start Post Area -->
					<section class="post-area">
					<?php 
					
					$post_query="SELECT * FROM posts";
					$post_result=mysqli_query($connection,$post_query);

					while($row=mysqli_fetch_assoc($post_result)){

						$post_title=$row['post_title'];
						$post_author=$row['post_author'];
						$post_date=$row['post_date'];
						$post_content=$row['post_content'];
						$post_image=$row['post_image'];
						$post_tags=$row['post_tags'];
					
					
					?>
						<div class="single-post-item">
							<figure>
								<img class="post-img img-fluid" src="img/posts/<?php echo $post_image; ?>" alt="">
							</figure>
							<h3>
								<a href="blog-details.html"><?php echo $post_title;  ?></a>
							</h3>
							<p> <?php echo $post_content?></p>
							<a href="blog-details.html" class="primary-btn text-uppercase mt-15">continue Reading</a>
							<div class="post-box">
								<div class="d-flex">
									<div>
										<a href="#">
											<img src="img/author/a1.png" alt="">
										</a>
									</div>
									<div class="post-meta">
										<div class="meta-head">
											<a href="#"><?php echo $post_author ?></a>
										</div>
										<div class="meta-details">
											<ul>
												<li>
													<a href="#">
														<span class="lnr lnr-calendar-full"></span>
														<?php echo $post_date ?>
													</a>
												</li>
												<li>
													<a href="#">
											
													<?php echo $post_tags ?>
													</a>
												</li>
											
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }?>

						<nav class="blog-pagination justify-content-center d-flex">
							<ul class="pagination">
								<li class="page-item">
									<a href="#" class="page-link" aria-label="Previous">
										<span aria-hidden="true">
											<span class="lnr lnr-arrow-left"></span>
										</span>
									</a>
								</li>

								<li class="page-item">
									<a href="#" class="page-link" aria-label="Next">
										<span aria-hidden="true">
											<span class="lnr lnr-arrow-right"></span>
										</span>
									</a>
								</li>
							</ul>
						</nav>
					</section>
					<!-- Start Post Area -->
				</div>
<?php include 'includes/sidebar.php'; ?>
	<!-- Start main body Area -->


<?php include 'includes/footer.php'; ?>