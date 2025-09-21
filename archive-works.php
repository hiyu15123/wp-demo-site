<?php get_header(); ?>
<section class="blContainer">
	<div class="works">
		<?php if (have_posts()): ?>
			<ul class="works-list">
				<?php while (have_posts()): ?>
					<?php the_post(); ?>
					<li class="works-item">
						<a class="works-link" href="<?php the_permalink(); ?>">
							<div class="works-img">
								<?php if (has_post_thumbnail()) : ?>
									<?php the_post_thumbnail(); ?>
								<?php else: ?>
									<img src="<?php echo get_theme_file_uri('/assets/img/nophoto.jpg'); ?>">
								<?php endif; ?>
							</div>
							<p>完成日：<?php echo esc_html( get_post_meta( get_the_ID(), 'completion_date', true ) ); ?></p>
							<div class="works-title"><?php the_title(); ?></div>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
			<?php the_posts_pagination(); ?>
		<?php else: ?>
			<p class="works-noPost">実績がまだ掲載されていません</p>
		<?php endif; ?>
	</div>
</section>
<?php get_footer(); ?>