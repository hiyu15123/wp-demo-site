<?php get_header(); ?>
<?php if(have_posts()): ?>
   <div class="blContainer">
      <?php while (have_posts()): ?>
         <?php the_post(); ?>
         <div class="article">
				<div class="article-date"><?php echo get_the_date() ?></div>
				<div class="article-category">カテゴリー：<?php the_category(', ') ?></div>
				<h1 class="article-title"><?php the_title(); ?></h1>
				<div class="article-content"><?php the_content(); ?></div>
			</div>
      <?php endwhile; ?>
   </div>
<?php else: ?>
<?php endif; ?>
<?php get_footer(); ?>