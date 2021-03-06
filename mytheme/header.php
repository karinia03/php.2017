<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>
    <?php wp_title('|', true, 'right'); ?>
    <?php bloginfo('name'); ?>
  </title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header>
    <div class="site">
      <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      <p><?php bloginfo('description'); ?></p>
  </header>