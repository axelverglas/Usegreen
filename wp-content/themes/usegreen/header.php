<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>
  <header class="header">
    <nav class="nav container">
      <a href="<?= home_url('/'); ?>" class="nav__logo">
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
        ?>
      </a>
      <?php
      wp_nav_menu([
        'theme_location' => 'header',
      ]);
      ?>
    </nav>
  </header>