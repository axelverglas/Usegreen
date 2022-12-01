<?php get_header() ?>

<main>

<section class="section">
    <div class="container">
    <h1 class="section__title"><?php the_title() ?></h1>

    <?php
    the_content()
    ?>
    </div>
</section>

</main>

<?php get_footer() ?>