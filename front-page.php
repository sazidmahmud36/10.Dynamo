<?php get_header(); ?>
	<section class="showcase">
		<div class="my-slider">
			<ul>
				<?php $slide_query = new WP_Query(array(
					'category_name' => 'slideshow', 
					'orderby' => 'date', 
					'order' => 'ASC'
				)); ?>
				<?php while ($slide_query -> have_posts()): $slide_query -> the_post();?>
				<li>
					<?php if (has_post_thumbnail()): ?>
						<?php the_post_thumbnail(); ?>
					<?php endif ?>
					<div class="caption">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>
				</li>
			<?php endwhile; ?>
			</ul>
		</div>
	</section>
	
	<!-- <section>
		<div class="wrap wider">
			<div class="grid tab-bg">
				<div class="tabs">

					<?php $tabs_query = new WP_Query(array(
					'category_name' => 'tabs', 
					'orderby' => 'date', 
					'order' => 'ASC'
				)); ?>
				<?php while ($tabs_query -> have_posts()): $tabs_query -> the_post();?>
			      <div class="tab active" data-target="<?php the_title(); ?>"><?php the_title(); ?></div>
			      <?php endwhile; ?>

			    </div>
			    <?php while ($tabs_query -> have_posts()): $tabs_query -> the_post();?>
			    <div id="panels">
			      <div class="<?php the_title(); ?> panel active">
			        <h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
			      </div>
			      
			    </div>
			<?php endwhile; ?>
			</div>
		</div>
	</section>
 -->

	<section>
		<div class="wrap wider">
			<div class="grid">
				<div class="post-wrap">


					<?php $query = new WP_Query(array(
					'category__not_in' => array(49,48), 
					'orderby' => 'date', 
					'order' => 'ASC'
				)); ?>
				<?php while ($query -> have_posts()): $query -> the_post();?>


					<article class="post">
						<div class="unit one-third post-thumb">
							<?php if (has_post_thumbnail()): ?>
								<?php the_post_thumbnail(); ?>
							<?php endif ?>
						</div>
						<div class="unit two-thirds">
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="button">Read More</a>
						</div>
					</article>
				<?php endwhile; ?>
				</div>				
			</div>
		</div>
	</section>

<?php get_footer(); ?>