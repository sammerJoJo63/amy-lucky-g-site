<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<!-- Row for main content area -->


	<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
			<header id="siteName">
	       	 	<div class="overlay">
					<h1 class="siteName"><?php the_title(); ?></h1>
	      	  		<h2 class="siteName"><?php the_content(); ?></h2>
	    		</div>
				</header>
		<?php if ( !function_exists('section-one') || !dynamic_sidebar('section-one') ) { ?>
		<div class="scallop-up"></div>
		<div id="homepage1">
	    	<div class="row" >
		    	<div class="small-12 large-12 column contentSection" id="content" role="main">
					<div class="entry-content">
		
						  <?php dynamic_sidebar( 'section-one' ); ?>
		
					</div>
		    	</div>
			</div>	
		</div>
		<div class="scallop-down"></div>
		<?php } ?>
		<?php if ( !function_exists('section-two') || !dynamic_sidebar('section-two') ) { ?>
		<div id="homepage2">
		    <div class="row" >
			    <div class="small-12 large-12 column contentSection" id="content" role="main">
					<div class="entry-content">
			
						<?php dynamic_sidebar( 'section-two' ); ?>
			
					</div>
			    </div>
			</div>

		</div>
		<?php } ?>
		<?php if ( !function_exists('section-three') || !dynamic_sidebar('section-three') ) { ?>
		<div class="scallop-up-hp3"></div>
		<div id="about-amy">
			<div class="pg3overlay">
				<div class="row" >
					<div class="small-12 large-12 column contentSection" id="content" role="main">
						<div class="entry-content">
			
							<?php dynamic_sidebar( 'section-three' ); ?>
			
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="scallop-down-hp3"></div>
		<?php } ?>
		<?php if ( !function_exists('section-four') || !dynamic_sidebar('section-four') ) { ?>
		<div id="reviews">
			<div class="row" >
				<div class="small-12 large-12 column contentSection" id="content" role="main">
					<div class="entry-content">
		
							<?php dynamic_sidebar( 'section-four' ); ?>
							<!-- <span style="display: none;">Photo by <a href="https://unsplash.com/@anniespratt?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Annie Spratt</a> on <a href="https://unsplash.com/s/photos/kids-reading?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
		
							<span style="display: none;">Photo by <a href="https://unsplash.com/@hajjidirir?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Ismail Salad Hajji dirir</a> on <a href="https://unsplash.com/s/photos/kids-reading?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
		
							<span style="display: none;">Photo by <a href="https://unsplash.com/@drewpera?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Drew Perales</a> on <a href="https://unsplash.com/s/photos/kids-reading?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span> -->
					</div>
				</div>
			</div>
		</div>
		<?php } ?>

		<?php
		if ( !function_exists('section-five') || !dynamic_sidebar('section-five') ) { ?>
		<div class="scallop-up-hp5"></div>
		<div id="homepage5">
			<div class="pg5overlay">
				<div class="row" >
					<div class="small-12 large-12 column contentSection" id="content" role="main">
						<div class="entry-content">
			
								<?php dynamic_sidebar( 'section-five' ); ?>
								<!-- <span style="display: none;">Photo by <a href="https://unsplash.com/@quinoal?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Quino Al</a> on <a href="https://unsplash.com/s/photos/sunrise?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></span> -->
			  
			
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="scallop-down-hp5"></div>
		<?php } ?>
		
		<?php if ( !function_exists('section-six') || !dynamic_sidebar('section-six') ) { ?>
		<div id="contact">
			<div class="row" >
				<div class="small-12 large-12 column contentSection" id="content" role="main">
					<div class="entry-content">
		
							<?php dynamic_sidebar( 'section-six' ); ?>
		
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	
		<!-- <div class="row">
			<footer>
				<?php //wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php //the_tags(); ?></p>
			</footer>
			<?php //comments_template(); ?>
			<?php endwhile; // End the loop ?>
		</div> -->


<?php get_footer(); ?>
