<?php get_header(); ?>
<section class="blContainer">
   <div class="news">
      <?php if (have_posts()): ?>
         <ul class="news-list">
            <?php while (have_posts()): ?>
               <?php the_post(); ?>
               <li class="news-item">
                  <a href="<?php the_permalink(); ?>" class="news-link">
                     <div class="news-detail">
                        <div class="news-date"><?php echo get_the_date('Y.m.d'); ?></div>
                        <div class="news-category">
                           <?php
                           $categories = get_the_category();
                           if ($categories) {
                              foreach ($categories as $category) {
                                 echo '<span class="news-category-name">' . esc_html($category->name) . '</span>';
                              }
                           } ?>
                        </div>
                     </div>
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