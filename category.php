<?php get_header(); ?>
<section class="blContainer">
   <div class="news">
      カテゴリー : <?php single_cat_title(); ?>
      <?php if (have_posts()): ?>
         <ul class="news-list">
            <?php while (have_posts()): ?>
               <?php the_post(); ?>
               <li class="news-item">
                  <div class="news-date"><?php echo get_the_date('Y.m.d'); ?></div>
                  <a class="news-link" href="<?php the_permalink(); ?>">
                     <div class="news-title"><?php the_title(); ?></div>
                  </a>
               </li>
            <?php endwhile; ?>
         </ul>
         <?php the_posts_pagination(); ?>
      <?php else: ?>
         <p>お知らせがありません</p>
      <?php endif; ?>
   </div>
</section>
<?php get_footer(); ?>