<?php get_header() ?>

<section class="section">
    <div class="container">
    <h1 class="section__title">
    <?php if(is_category()): ?>
            <?php single_cat_title() ?>
        <?php elseif (is_search()): ?>
            <?= sprintf(__('Résultat pour "%s"'), get_search_query()); ?>
        <?php else: ?>
            <?php single_post_title() ?>
        <?php endif ?>
    </h1>
    <div class="news__searchbar">
        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 22L16.6845 16.6845M16.6845 16.6845C17.5377 15.8313 18.2144 14.8185 18.6762 13.7038C19.1379 12.5891 19.3755 11.3943 19.3755 10.1878C19.3755 8.98121 19.1379 7.78647 18.6762 6.67176C18.2144 5.55705 17.5377 4.5442 16.6845 3.69103C15.8313 2.83787 14.8185 2.16111 13.7038 1.69938C12.5891 1.23765 11.3943 1 10.1878 1C8.98121 1 7.78647 1.23765 6.67176 1.69938C5.55705 2.16111 4.5442 2.83787 3.69103 3.69103C1.96799 5.41407 1 7.75102 1 10.1878C1 12.6245 1.96799 14.9615 3.69103 16.6845C5.41407 18.4075 7.75102 19.3755 10.1878 19.3755C12.6245 19.3755 14.9615 18.4075 16.6845 16.6845V16.6845Z" stroke="#F3F3E4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>                        
        <input type="text" placeholder="Rechercher des articles par thème">
    </div>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/post'); ?>
            <?php endwhile; ?>


            <?php else : ?>
                <h2><?= __('Aucun post') ?></h2>
        <?php endif; ?>
    </div>
</section>

<?php get_footer() ?>