<?php get_header(); ?>


			
<section id="slider" class="slider-container">
    <div class="slides">
                    <?php if(function_exists('portaledukacyjny_show_slides')): ?>
                        <?php portaledukacyjny_show_slides() ?>
                    <?php else: ?>

                            <div class="portaledukacyjny_slider">
                                <div class="label">
                                    <h3> </h3>
                                    <p>
                                        Kurs html - poznaj podstawy języka HTML5, naucz tworzyć się strony internetowe.
                                        <a href="#">Przejdź do kursu</a>
                                    </p>
                                </div>
                                <img src="" alt="">
                            </div>
                    <?php endif; ?>
    </div>		
    <div class="pagination">
				<ul>
					<li><a href='#'>1</a></li>
					<li><a href='#'>2</a></li>
					<li><a href='#' class="active">3</a></li>
					<li><a href='#'>4</a></li>
				</ul>
    </div>
</section>
<main class="content_container page section">
     <?php while(have_posts() ): the_post(); ?>
        <?php the_content(); ?>
	<?php endwhile; ?>
</main>


<?php get_footer(); ?>
