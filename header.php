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
    <a href="<?php echo get_site_url('/'); ?>">
      <svg class="logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 1280 1280" style="enable-background:new 0 0 1280 1280;" xml:space="preserve">
        <path class="st0" style="fill: #8136A0;" d="M786.5,631.2c0,9.3-3.8,18.1-10.5,24.5l-87.2,83.2v-58.5h-97.7v58.5l-87.2-83.2c-6.7-6.4-10.5-15.3-10.5-24.5
          v-76.4h-97.7V652c0,22.7,9.3,44.4,25.7,60.1L640,920.7L858.5,712c16.4-15.7,25.7-37.3,25.7-60.1v-97.2h-97.7V631.2z"/>
        <path class="st1" style="fill: #350448;" d="M1078.7,457c-3-24-13.6-45.5-29.3-62.3c-16.6-17.9-39.1-30.2-64.3-34c-1-0.2-2.1-0.3-3.1-0.5
          c-4.5-0.6-13.8-0.9-13.8-0.9h-83.9H395.8c0,0-93.2,0.4-97.7,0.9c-1,0.1-2.1,0.3-3.1,0.5c-25.3,3.8-47.7,16.2-64.3,34
          c-15.7,16.7-26.3,38.3-29.3,62.3c-0.6,4.6-0.9,9.3-0.9,14V493c0,5.1,2.1,10,5.8,13.6l91.9,87.7V470.3c0.4-7.4,6.5-13.3,14-13.3
          h279.1v125.7H640h48.9V457h279.1c7.5,0,13.6,5.9,14,13.3v123.9l91.9-87.7c3.7-3.5,5.8-8.4,5.8-13.6v-21.9
          C1079.6,466.3,1079.3,461.6,1078.7,457z"/>
      </svg>
    </a>

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
      <li class="navigation__item">
      <a class="navigation__cta button button--ghost" href="<?php echo site_url( '/contact-me' ); ?>">Contact Me Today</a>
      </li>
    </ul>
    <button class="button button--ghost menu-button menu-button__open">Menu <i data-feather="menu"></i></button>
    <button class="button button--ghost menu-button menu-button__close">Close <i data-feather="x"></i></button>
  </div>
</nav>