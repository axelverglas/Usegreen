<?php get_header() ?>
<main>
        <section class="section home__section">
            <div class="container">
                <div class="home__content grid">
                    <div class="home__description">
                        <h1 class="home__title"><?php bloginfo('description') ?></h1>
                        <p><?php the_content(); ?></p>
                        <a href="" class="home__button">
                            <span>
                                <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.3536 4.35356C19.5488 4.15829 19.5488 3.84171 19.3536 3.64645L16.1716 0.464468C15.9763 0.269205 15.6597 0.269205 15.4645 0.464467C15.2692 0.65973 15.2692 0.976312 15.4645 1.17157L18.2929 4L15.4645 6.82843C15.2692 7.02369 15.2692 7.34027 15.4645 7.53554C15.6597 7.7308 15.9763 7.7308 16.1716 7.53554L19.3536 4.35356ZM-4.37114e-08 4.5L19 4.5L19 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#1D1D1B"/>
                                </svg>                                    
                            </span>
                        S'inscrire</a>
                    </div>

                    <?php
		//* Variables ACF pour l'image
		// L'image ACF est enregistrée en tant que "ID de l'image"
		$image_id = (int) get_field('home__img');
		// Création d'une taille d'image avec la fonction add_image_size();
		$taille_image = 'test';
		// Fonction WordPress qui stocke la balise img complète
		// https://developer.wordpress.org/reference/functions/wp_get_attachment_image/
		$img = wp_get_attachment_image($image_id, $taille_image); 
		?>
		
		<?php 	
			// je vérfie si mon champ existe
			if ( get_field('home__img') ) { 
		?>
            <div class="home__img">
            <?php 
				// Affichage la balise img avec echo
				echo $img; 
			?>
            </div>
		
		<?php } ?>
                </div>
            </div>
        </section>

        <?php if (have_rows('definition')): while(have_rows('definition')): the_row() ?>
        <section class="section">
            <div class="container">
                <div class="definition__box">
                    <h1 class="definition__title"><?php the_sub_field('title') ?></h1>
                    <p class="definition__description"><?php the_sub_field('description') ?></p>
                </div>
            </div>
        </section>
        <?php endwhile; endif ?>

        <!--
        <section class="section">
                <div class="container">
                    <h2 class="section__title">Quelques chiffres</h2>
                        <ul class="carousel-items">
                            <li class="carousel-item">
                                <div class="number__card">
                                    <h2 class="number__title">35%</h2>
                                    <div class="number__divider"></div>
                                    <p class="number__description">C’est la réduction de l’impact carbone lorsque vous faites une recherche par URL (si vous la connaissez !) au lieu de faire une recherche Google.</p>
                                </div>
                            </li>
                            <li class="carousel-item">
                                <div class="number__card">
                                    <h2 class="number__title">35%</h2>
                                    <div class="number__divider"></div>
                                    <p class="number__description">C’est la réduction de l’impact carbone lorsque vous faites une recherche par URL (si vous la connaissez !) au lieu de faire une recherche Google.</p>
                                </div>
                            </li>
                            <li class="carousel-item">
                                <div class="number__card">
                                    <h2 class="number__title">35%</h2>
                                    <div class="number__divider"></div>
                                    <p class="number__description">C’est la réduction de l’impact carbone lorsque vous faites une recherche par URL (si vous la connaissez !) au lieu de faire une recherche Google.</p>
                                </div>
                            </li>
                        </ul>
                </div>
            </div>
        </section>
-->

        <section class="section">
            <div class="container">
                <h2 class="section__title">Quelques conseils</h2>
                <div class="advices__container">
                    <div class="advices__content">
                        <div class="advices__card">
                            <div class="advices__ellipse">
                                <div class="ellipse"></div>
                            </div>
                            <div>
                                <h3 class="advices__title">Éviter les vidéos en très haute qualité sur votre site.</h3>
                                <p class="advices__description">Les vidéos en très haute qualité sont très gourmandes en bande passante et en énergie. Il est donc préférable de les remplacer par des vidéos en qualité standard.</p>
                            </div>
                        </div>
                        <div class="advices__card">
                            <div class="advices__ellipse">
                                <div class="ellipse"></div>
                            </div>
                            <div>
                                <h3 class="advices__title">Éviter les vidéos en très haute qualité sur votre site.</h3>
                                <p class="advices__description">Les vidéos en très haute qualité sont très gourmandes en bande passante et en énergie. Il est donc préférable de les remplacer par des vidéos en qualité standard.</p>
                            </div>
                        </div>
                    </div>
                    <div class="advices__img">
                        <img src="/assets/img/illustration_serveur.svg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="news__container">
                    <h2 class="section__title">L'actualité des pros du digital</h2>
                    <a href="/blog/">TOUT VOIR</a>
                </div>
                <?php get_search_form (); ?>
                <?php
                    $recentPosts = new WP_Query();
                    $recentPosts->query('showposts=5');
                ?>
                <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                    <?php get_template_part('template-parts/post'); ?>
                <?php endwhile; ?>
        </section>

        <section class="section">
            <div class="container">
                <div class="newsletter__box">
                    <h1 class="newsletter__title">USEGREEN NEWSLETTER</h1>
                    <p class="newsletter__description">Être informé de nos dernières actualités pour un meilleur réflexe éco-responsable dans vos conceptions et manière d’utilisation du numérique.</p>
                    <?= do_shortcode('[wpforms id="128" html_class="newsletter__searchbar"]'); ?>
                </div>
            </div>
        </section>

    </main>

<?php get_footer() ?>