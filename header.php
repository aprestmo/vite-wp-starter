<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php echo esc_attr(get_bloginfo('charset')); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= vite('main.js') ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
