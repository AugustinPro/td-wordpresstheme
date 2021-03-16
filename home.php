<?php get_header(); ?>

<!-- Main -->
<main id="main">

	<!-- Post -->

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="post">
				<header>
					<div class="title">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
					</div>
					<div class="meta">
						<time class="published" datetime="2015-11-01"><?php the_time( 'j F Y, H:i' ); ?></time>
						<a href="#" class="author"><span class="name"><?php the_author(); ?></span><img src="images/avatar.jpg" alt="" /></a>
					</div>
				</header>
				<a href="<?php the_permalink(); ?>" class="image featured"><?php the_post_thumbnail(); ?></a>
				<p>
					<?php the_excerpt(); ?>
				</p>
				<footer>
					<ul class="actions">
						<li><a href="<?php the_permalink(); ?>" class="button large">Continue Reading</a></li>
					</ul>
					<ul class="stats">
						<li><a href="#">General</a></li>
						<li><a href="#" class="icon solid fa-heart">28</a></li>
						<li><a href="#" class="icon solid fa-comment"><?php comments_number( '0', '1', '%' ); ?></a></li>
					</ul>
				</footer>
			</article>
	<?php endwhile;
	endif; ?>


	<!-- Pagination -->
	<ul class="actions pagination">
		<li><a href="" class="disabled button large previous">Previous Page</a></li>
		<li><a href="#" class="button large next">Next Page</a></li>
	</ul>
</main>

<?php
get_template_part('parts/sidebar');
get_footer();
?>