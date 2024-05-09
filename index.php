<?php
$event_count=3;
$loco_count=5;
include 'includes/functions.php';
echo '
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="l-docs">
  <div class="l-docs__header">
    <header id="navigation" class="p-navigation is-dark">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.5.1.min.css" />
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css" />
    <link rel="stylesheet" href="spice.css" />
      <div class="l-docs__subgrid">
        <div class="l-docs__sidebar">
          <div class="p-navigation__banner">
            <div class="p-navigation__tagged-logo">
              <a class="p-navigation__link" href="index.php">
                <div class="p-navigation__logo-tag">
                  <img class="p-navigation__logo-icon" src="https://assets.ubuntu.com/v1/82818827-CoF_white.svg" alt="">
                </div>
                <span class="p-navigation__logo-title">Yggdrasil</span>
              </a>
            </div>
            <a href="#navigation" class="p-navigation__toggle--open" title="menu">Menu</a>
            <a href="#navigation-closed" class="p-navigation__toggle--close" title="close menu">Close menu</a>
          </div>
        </div>
        <div class="l-docs__main">
          <div class="p-navigation__row u-fixed-width">
            <nav class="p-navigation__nav" aria-label="Example main">
              <ul class="p-navigation__items">
                <li class="p-navigation__item">
                  <a class="p-navigation__link" href="events.php">Events</a>
                </li>
                <li class="p-navigation__item">
                  <a class="p-navigation__link" href="loco.php">Local Communities</a>
                </li>
                <li class="p-navigation__item">
                  <a class="p-navigation__link" href="pathways.php">Pathways</a>
                </li>
                <li class="p-navigation__item">
                  <a class="p-navigation__link" href="uwn.php">Ubuntu Weekly News</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
   <body class="is-paper">
  </div>

 <main class="l-docs__main">
      <div class="row">
        <div class="col-12">

<section class="p-strip">
  <div class="row u-vertically-center">
    <div class="col-4">
      <h2>The Ubuntu Community</h2>
      <p>We are an international community with a mission to bring free software to the widest possible audience. Our name “Ubuntu” means “humanity towards others”. Join us and share in our mission to bring free software to the entire world!</p>
      <a class="p-button--brand" href="#community-events">Get Started</a>
    </div>
    <div class="col-8 u-hide--small u-align--center">
      <img src="img/ubu-banner.png" alt="">
    </div>
  </div>
</section>

<section id="community-events"
<div class="p-heading-icon">
  <div class="p-heading-icon__header">
    <img class="p-heading-icon__img" src="img/calendar-icon.png" alt="">
    <h3 class="p-heading-icon__title">Community Events</h3>
  </div>
  <p>Meet and greet with fellow Ubuntu enthusiasts from around the world.</p>
</div>
</section>

<div class="row">';

// Display 3 newest events
showEvents($event_count);

echo '
<hr>
<div class="p-heading-icon">
  <div class="p-heading-icon__header">
    <img class="p-heading-icon__img" src="https://assets.ubuntu.com/v1/117ecfea-pictogram-community-193x174.png" alt="">
    <h3 class="p-heading-icon__title">Local Communities</h3>
  </div>
  <p>Community is all about engaging with the people around you. There are Ubuntu events happening all the time all over the world.</p>
</div>
<div class="row">';

// Display 3 newest LoCos
showLoCos($loco_count);

// Closing HTML
echo "</div></main></body></div>";
?>
