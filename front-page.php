<?php get_header(); ?>
<section class="frontNews blContainer">
   <h2 class="frontNews-heading sectionHeading">お知らせ</h2>
   <div class="frontNews-list news">
      <?php 
      $args = [
         'post_type' => 'post',
         'posts_per_page' => 5,
      ];
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query -> have_posts()): ?>
         <ul class="news-list">
            <?php while ($the_query->have_posts()): ?>
               <?php $the_query->the_post(); ?>
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
         <?php wp_reset_postdata() ?>
      <?php else: ?>
         <p>お知らせがありません</p>
      <?php endif; ?>
      <a class="news-goList" href="<?php echo home_url('/news/'); ?>">一覧をみる</a>
   </div>
   </section>

   <section class="frontWorks blContainer">
   <h2 class="frontWorks-heading sectionHeading">施工事例</h2>
   <div class="works">
      <?php 
      $args = [
         'post_type' => 'works',
         'posts_per_page' => 3,
      ];
      $the_query = new WP_Query($args); 
      ?>
      <?php if($the_query -> have_posts()): ?>
         <ul class="works-list">
            <?php while($the_query -> have_posts()): ?>
               <?php $the_query -> the_post(); ?>
               <li class="works-item">
                  <a class="works-link" href="<?php the_permalink(); ?>">
                     <div class="works-img">
                        <?php if (has_post_thumbnail()): ?>
                           <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                           <img src="/assets/img/works03.jpg" alt="施工事例03">
                        <?php endif; ?>
                     </div>
                     <div class="works-date">完成日：<?php echo get_field('works-complete') ?></div>
                     <div class="works-title"><?php the_title(); ?></div>
                  </a>
               </li>
            <?php endwhile; ?>
         </ul>
         <?php wp_reset_postdata(); ?>
      <?php else: ?>
         <p class="works-noPost">実績がまだ掲載されていません</p>
      <?php endif; ?>
      <a class="works-goList" href="<?php echo home_url('/works/') ?>">一覧をみる</a>
   </div>
</section>
<?php get_footer(); ?>