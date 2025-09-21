<?php get_header(); ?>
<?php if(have_posts()): ?>
   <div class="blContainer">
      <?php while (have_posts()): ?>
         <?php the_post(); ?>
         <div class="worksPost">
				<h1 class="worksPost-title"><?php the_title(); ?></h1>
				<div class="worksPost-information">
					<div class="worksPost-location">場所：</div>
					<div class="worksPost-plan">間取り：</div>
					<div class="worksPost-date">完成：</div>
				</div>
				<div class="worksPost-content">
					<?php the_content(); ?>
				</div>
			</div>
      <?php endwhile; ?>
   </div>
<?php endif; ?>
<?php get_footer(); ?>