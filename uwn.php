<?php
include 'includes/functions.php';
echo '
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="l-docs">
  <div class="l-docs__header">
    <header id="navigation" class="p-navigation is-dark">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.5.1.min.css" />
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
                <li class="p-navigation__item is-selected">
                  <a class="p-navigation__link" href="uwn.php">Ubuntu Weekly News</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
  </div>

  <aside class="l-docs__sidebar">
    <nav class="p-side-navigation--raw-html is-sticky" id="drawer" aria-label="Table of contents">
      <div class="u-hide--large p-strip is-shallow">
        <div class="u-fixed-width">
          <a href="#drawer" class="p-side-navigation__toggle js-drawer-toggle" aria-controls="drawer">
            Toggle side navigation
          </a>
        </div>
      </div>

      <div class="p-side-navigation__overlay js-drawer-toggle" aria-controls="drawer"></div>

      <div class="p-side-navigation__drawer">
        <div class="p-side-navigation__drawer-header">
          <a href="#" class="p-side-navigation__toggle--in-drawer js-drawer-toggle" aria-controls="drawer">
            Toggle side navigation
          </a>
        </div>
        <h3>UWN Issues</h3>
        <ul>';

showUWNindex();

echo '
      </ul>
        <ul>
          <li>
            <a href="#"><strong>Contribute</strong></a>
          </li>
          <li>
            <a href="#">Join the newsteam</a>
          </li>
          <li>
            <a href="#">Donate</a>
          </li>
        </ul>
      </div>
    </nav>
  </aside>

  <div class="l-docs__title" id="main-content">
    <div class="p-section--shallow">
      <div class="row">
        <div class="col-12">
          <h1></h1>
        </div>
      </div>
    </div>
  </div>

 <main class="l-docs__main">
      <div class="row">
        <div class="col-12">';

showUWNcurrent();

// Closing HTML
echo "</div></main></div>";
?>
