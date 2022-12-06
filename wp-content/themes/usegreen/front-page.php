<?php get_header() ?>

<?php while (have_posts()):
    the_post() ?>
<main>
    <section class="section home__section">
        <div class="container">
            <div class="home__content grid">
                <div class="home__description">
                    <h1 class="home__title">
                        <?php bloginfo('description') ?>
                    </h1>
                    <p>
                        <?php the_content(); ?>
                    </p>
                    <a href="#newsletter" class="button">
                        S'inscrire
                        <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.3536 4.35356C19.5488 4.15829 19.5488 3.84171 19.3536 3.64645L16.1716 0.464468C15.9763 0.269205 15.6597 0.269205 15.4645 0.464467C15.2692 0.65973 15.2692 0.976312 15.4645 1.17157L18.2929 4L15.4645 6.82843C15.2692 7.02369 15.2692 7.34027 15.4645 7.53554C15.6597 7.7308 15.9763 7.7308 16.1716 7.53554L19.3536 4.35356ZM-4.37114e-08 4.5L19 4.5L19 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#1D1D1B" />
                        </svg>
                    </a>
                </div>

                <div class="home__img">
                    <?php if ($url = get_field('hero_img')): ?>
                    <img src="<?= $url ?>" alt="Image accueil">
                    <?php endif ?>
                </div>
            </div>
        </div>
    </section>
    <?php if (have_rows('definition')):
        while (have_rows('definition')):
            the_row() ?>
    <section class="section">
        <div class="container">
            <div class="definition__box">
                <h1 class="definition__title">
                    <?php the_sub_field('title') ?>
                </h1>
                <p class="definition__description">
                    <?php the_sub_field('description') ?>
                </p>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>

    <?php if (have_rows('number_list', 'option')): ?>
    <section class="section">
        <div class="container">
            <h2 class="section__title">Quelques chiffres</h2>
            <ul class="number__container grid">
                <?php while (have_rows('number_list', 'option')):
            the_row() ?>
                <li class="number__card">
                    <h2 class="number__title">
                        <?php the_sub_field('number', 'option') ?>
                    </h2>
                    <div class="number__divider"></div>
                    <p class="number__description">
                        <?php the_sub_field('description', 'option') ?>
                    </p>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if (have_rows('advices_list', 'option')): ?>
    <section class="section">
        <div class="container">
            <h2 class="section__title">Quelques conseils</h2>
            <div class="advices__container">
                <div class="advices__content">
                    <ul>
                        <?php while (have_rows('advices_list', 'option')):
            the_row() ?>
                        <li class="advices__card">
                            <div class="advices__head">
                                <h3 class="advices__title">
                                    <?php the_sub_field('title', 'option') ?>
                                </h3>
                                <i class="fas fa-chevron-up"></i>
                            </div>
                            <p class="advices__description">
                                <?php the_sub_field('description', 'option') ?>
                            </p>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <div class="advices__img">
                    <?php if ($url = get_field('img_advices', 'option')): ?>
                    <img src="<?= $url ?>" alt="Conseils">
                    <?php endif ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="section">
        <div class="container">
            <div class="news__container">
                <h2 class="section__title">L'actualité des pros du digital</h2>
                <a href="/blog/">TOUT VOIR</a>
            </div>
            <?php get_search_form(); ?>
            <?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=5');
            ?>
            <?php while ($recentPosts->have_posts()):
        $recentPosts->the_post(); ?>
            <?php get_template_part('template-parts/post'); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>

    <?php if (have_rows('newsletter')):
        while (have_rows('newsletter')):
            the_row() ?>
    <section class="newsletter section" id="newsletter">
        <div class="container">
            <div class="newsletter__box">
                <h1 class="newsletter__title">
                    <?php the_sub_field('title') ?>
                </h1>
                <p class="newsletter__description">
                    <?php the_sub_field('description') ?>
                </p>
                <?= do_shortcode('[wpforms id="128" html_class="newsletter__searchbar"]'); ?>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>
</main>
<?php endwhile ?>
<?php get_footer() ?>