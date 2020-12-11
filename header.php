<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="navigation">
  <div class="container--navigation">
    <a  href="<?php echo get_site_url('/'); ?>" class="logo">Logo</a>
    <ul class="navigation__list">
      <li class="navigation__item">
        <a href="<?php echo site_url( '/services' ); ?>" class="navigation__link">Services</a>
      </li>
      <li class="navigation__item">
        <a href="<?php echo get_post_type_archive_link('project'); ?>" class="navigation__link">Portfolio</a>
      </li>
      <li class="navigation__item">
        <a href="<?php echo site_url( '/my-story' ); ?>" class="navigation__link">My Story</a>
      </li>
    </ul>
    <a class="button button--ghost navigation__cta" href="<?php echo site_url( '/contact-me' ); ?>">Contact Me Today</a>
    <button class="button button--ghost menu">Menu</button>
  </div>
</nav>