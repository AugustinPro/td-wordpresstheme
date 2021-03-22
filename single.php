<?php get_header(); ?>
<!-- Main -->
<div id="main">

	<!-- Post -->

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="post">
				<header>
					<div class="title">
						<h2><a href="#"><?php the_title(); ?></a></h2>
						<p><?php echo carbon_get_the_post_meta('crb_post_subtitle'); ?></p>
					</div>
					<div class="meta">
						<time class="published" datetime="2015-11-01"><?php the_time('j F, Y'); ?></time>
						<a href="#" class="author"><span class="name"><?php the_author(); ?></span><?php echo get_avatar(get_the_author_meta('ID'), 40); ?></a>
					</div>
				</header>
				<span class="image featured"><?php the_post_thumbnail(); ?></span>
				<div class="content">
					<?php the_content(); ?>
				</div>
					<h2><?php _e('Comments', 'ap-fi'); ?></h2>
					<?php comments_template(); // Par ici les commentaires ?>
				<footer>
					<ul class="stats">
						<li><?php the_category(); ?></li>
						<li><a href="#" class="icon solid fa-heart">28</a></li>
						<li><a href="#" class="icon solid fa-comment"><?php comments_number('0', '1', '%'); ?></a></li>
					</ul>
				</footer>
			</article>

	<?php endwhile;
	endif; ?>

</div>
<?php
get_template_part('parts/socials');
get_footer();
?>