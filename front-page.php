<?php get_header(); ?>
<section class="frontNews blContainer">
   <h2 class="frontNews-heading sectionHeading">お知らせ</h2>
   <div class="frontNews-list news">
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
      <?php else: ?>
         <p>お知らせがありません</p>
      <?php endif; ?>
      <a class="news-goList" href="<?php echo home_url('/news/'); ?>">一覧をみる</a>
   </div>
   </section>

   <section class="frontWorks blContainer">
   <h2 class="frontWorks-heading sectionHeading">施工事例</h2>
   <div class="works">
      <ul class="works-list">
         <li class="works-item">
         <a class="works-link" href="/works/works-01.html">
            <div class="works-img">
               <img src="/assets/img/works01.jpg" alt="施工事例01">
            </div>
            <div class="works-date">完成日：2024.11.29</div>
            <div class="works-title">〇〇邸リフォーム</div>
         </a>
         </li>
         <li class="works-item">
         <a class="works-link" href="/works/works-02.html">
            <div class="works-img">
               <img src="/assets/img/works02.jpg" alt="施工事例02">
            </div>
            <div class="works-date">完成日：2024.10.10</div>
            <div class="works-title">△△マンション改修</div>
         </a>
         </li>
         <li class="works-item">
         <a class="works-link" href="/works/works-03.html">
            <div class="works-img">
               <img src="/assets/img/works03.jpg" alt="施工事例03">
            </div>
            <div class="works-date">完成日：2024.09.15</div>
            <div class="works-title">□□店舗リニューアル</div>
         </a>
         </li>
      </ul>
      <a class="works-goList" href="/works/">一覧をみる</a>
   </div>
</section>
<?php get_footer(); ?>