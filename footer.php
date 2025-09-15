</div>
   <footer class="footer">
		<div class="footer-container blContainer">
			<div class="footer-logo">
				<img src="<?php echo get_theme_file_uri('/assets/img/logo.svg'); ?>" alt="デモサイト株式会社">
			</div>
			<nav class="footer-menu footerMenu">
				<ul class="footerMenu-list">
					<li class="footerMenu-item">
						<a class="footerMenu-link" href="<?php echo home_url('/'); ?>">ホーム</a>
					</li>
					<li class="footerMenu-item">
						<a class="footerMenu-link" href="<?php echo home_url('/news/'); ?>">お知らせ</a>
					</li>
					<li class="footerMenu-item">
						<a class="footerMenu-link" href="<?php echo home_url('/service/'); ?>">サービス</a>
					</li>
					<li class="footerMenu-item">
						<a class="footerMenu-link" href="<?php echo home_url('/works/'); ?>">施工事例</a>
					</li>
					<li class="footerMenu-item">
						<a class="footerMenu-link" href="<?php echo home_url('/company/'); ?>">会社概要</a>
					</li>
					<li class="footerMenu-item">
						<a class="footerMenu-link" href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>
					</li>
					<li class="footerMenu-item">
						<a class="footerMenu-link" href="<?php echo home_url('/privacy-policy/'); ?>">個人情報保護方針</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="footer-copyRight">&copy; wp-demo-site</div>
	</footer>
   <?php wp_footer(); ?>
</body>
</html>