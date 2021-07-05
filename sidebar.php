
				<div class="col-lg-4 sidebar">
					<div class="single-widget search-widget">
						<form class="example" action="search.php" method="post" style="margin:auto;max-width:300px">
							<input type="text" placeholder="Search Posts" name="search">
							<button type="submit" name="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>

					

					<div class="single-widget popular-posts-widget">
						<h4 class="title">Popular Posts</h4>
						<div class="blog-list ">
						<?php
						
						$pop_post_query="SELECT * FROM posts";
						$pop_post_result=mysqli_query($connection,$pop_post_query);

						while($row =mysqli_fetch_assoc($pop_post_result)){
							$post_title=$row['post_title'];
							$post_image=$row['post_image'];
							$post_date=$row['post_date'];

					
						 ?>
							<div class="single-popular-post d-flex flex-row">
								<div class="popular-thumb">
									<img  width="100px" class="img-fluid" src="img/posts/<?php echo $post_image; ?>" alt="">
								</div>
								<div class="popular-details">
									<a href="blog-details.html">
										<h4><?php echo $post_title; ?></h4>
									</a>
									<p class="text-uppercase"><?php echo $post_date; ?></p>
								</div>
							</div>
							<?php
								}
							?>
							
						</div>
					</div>

					<div class="single-widget category-widget">
						<h4 class="title">Post Categories</h4>
						<ul>
						<?php
			  
			               $select_all_category ="SELECT * FROM category";
			               $side_cat_result=mysqli_query($connection,$select_all_category);

			                while($row=mysqli_fetch_assoc($side_cat_result)){
			        	  $cat_title = $row['category_title'];
				     	echo"<li><a href='#' class='justify-content-between align-items-center d-flex myacss ' style='color: black;'>
						{$cat_title}
					 </a></li>";
			  }			 
			  ?>
						</ul>
					</div>

					

				</div>
			</div>
		</div>
	</div>