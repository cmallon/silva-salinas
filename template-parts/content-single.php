<article id="post-<?php the_ID(); ?>" class="result-post">

	<header>
		<?php the_title( sprintf( '<h1 class="result-title">', esc_url( get_permalink() ) ), '</h1>' ); ?>
	</header>

	<div class="result-content">
		<div class="w-full md:w-1/4">
			<p class="mb-0"><strong>Attorney Salinas</strong></p>
			<?php echo '<p><em>'. get_the_category( $id )[0]->name .'</em></p>'; ?>
		</div>
		<div class="w-full md:w-3/4">
			<?php the_content(); ?>
			<hr>
			<div class="mt-6">
				<a href="/results/">More Results</a>
			</div>
		</div>
	</div>

</article>
