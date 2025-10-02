<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head(); ?>
</head> 
<body> 
   <?php wp_body_open(); ?>
   <header class="header blContainer">
		<h1 class="header-logo">
			<a href="<?php echo home_url('/'); ?>">
				<img src="<?php echo get_theme_file_uri('/assets/img/logo.svg'); ?>" alt="デモサイト株式会社">
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
	<?php if (is_front_page()): ?>
		<div class="keyVisual">
			<div class="keyVisual-inner blContainer">
				<img src="<?php echo get_theme_file_uri('/assets/img/img_visual.jpg'); ?>" alt="メインビジュアル">
			</div>
		</div>
	<?php else: ?>
		<div class="subpageHeader">
			<div class="subpageHeader-inner blContainer">
				<?php if (is_home() || is_singular('post') || is_category()): ?>
					お知らせ
				<?php elseif (is_post_type_archive('works') || is_singular('works')): ?>
					施工事例
				<?php else: ?>
					<?php echo get_the_title(); ?>
				<?php endif ?>
			</div>
		</div>
	<?php endif; ?>
   <div class="wrapper">