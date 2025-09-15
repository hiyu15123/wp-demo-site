<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php echo get_theme_file_uri('/assets/css/style.css'); ?>">
</head>
<body>
   <header class="header blContainer">
		<h1 class="header-logo">
			<a href="<?php echo home_url('/'); ?>">
				<img src="<?php echo get_theme_file_uri('/img/logo.svg'); ?>" alt="デモサイト株式会社">
			</a>
		</h1>
		<nav class="header-menu mainMenu">
			<ul class="mainMenu-list">
				<li class="mainMenu-item">
					<a class="mainMenu-link" href="<?php echo home_url('/') ?>">ホーム</a>
				</li>
				<li class="mainMenu-item">
					<a class="mainMenu-link" href="<?php echo home_url('/news/') ?>">お知らせ</a>
				</li>
				<li class="mainMenu-item">
					<a class="mainMenu-link" href="<?php echo home_url('/service/') ?>">サービス</a>
				</li>
				<li class="mainMenu-item">
					<a class="mainMenu-link" href="<?php echo home_url('/works/') ?>">施工事例</a>
				</li>
				<li class="mainMenu-item">
					<a class="mainMenu-link" href="<?php echo home_url('/company/') ?>">会社概要</a>
				</li>
				<li class="mainMenu-item">
					<a class="mainMenu-link" href="<?php echo home_url('/contact/') ?>">お問い合わせ</a>
				</li>
			</ul>
		</nav>
	</header>
   <div class="keyVisual">
			<div class="keyVisual-inner blContainer">
         <img src="<?php echo get_theme_file_uri('/assets/img/header.jpg'); ?>" alt="">
      </div>
   </div>
   <div class="wrapper">
      <section class="frontNews blContainer">
         <h2 class="frontNews-heading sectionHeading">お知らせ</h2>
         <div class="frontNews-list news">
            <ul class="news-list">
               <li class="news-item">
               <div class="news-date">2024.12.01</div>
               <a class="news-link" href="/news/post-01.html">
                  <div class="news-title">サイトリニューアルのお知らせ</div>
               </a>
               </li>
               <li class="news-item">
               <div class="news-date">2024.11.20</div>
               <a class="news-link" href="/news/post-02.html">
                  <div class="news-title">冬季休業のお知らせ</div>
               </a>
               </li>
               <li class="news-item">
               <div class="news-date">2024.11.05</div>
               <a class="news-link" href="/news/post-03.html">
                  <div class="news-title">新サービス開始のお知らせ</div>
               </a>
               </li>
            </ul>
            <a class="news-goList" href="/news/">一覧をみる</a>
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
   </div>
   <footer class="footer">
		<div class="footer-container blContainer">
			<div class="footer-logo">
				<img src="" alt="デモサイト株式会社">
			</div>
			<nav class="footer-menu footerMenu">
				<ul class="footerMenu-list">
					<li class="footerMenu-item">
						<a class="footerMenu-link" href="/">ホーム</a>
					</li>
					<li class="footerMenu-item">
						<a class="footerMenu-link" href="/news/">お知らせ</a>
					</li>
					<li class="footerMenu-item">
						<a class="footerMenu-link" href="/service/">サービス</a>
					</li>
					<li class="footerMenu-item">
						<a class="footerMenu-link" href="/works/">施工事例</a>
					</li>
					<li class="footerMenu-item">
						<a class="footerMenu-link" href="/company/">会社概要</a>
					</li>
					<li class="footerMenu-item">
						<a class="footerMenu-link" href="/contact/">お問い合わせ</a>
					</li>
					<li class="footerMenu-item">
						<a class="footerMenu-link" href="/privacy-policy/">個人情報保護方針</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="footer-copyRight">&copy; wp-demo-site</div>
	</footer>
</body>
</html>