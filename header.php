<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="navigation container--navigation">
  <a class="logo">Logo</a>
  <ul class="navigation__list">
    <li class="navigation__item">
      <a href="services.html" class="navigation__link">Services</a>
    </li>
    <li class="navigation__item">
      <a href="portfolio.html" class="navigation__link">Portfolio</a>
    </li>
    <li class="navigation__item">
      <a href="my-story.html" class="navigation__link">My Story</a>
    </li>
    <li class="navigation__item">
      <a href="process.html" class="navigation__link">Process</a>
    </li>
  </ul>
  <a class="button button--primary" href="#">Contact Me Today</a>
</nav>