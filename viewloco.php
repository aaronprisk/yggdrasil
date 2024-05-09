<?php
include 'includes/functions.php';
// Pull slug id from previous page
if(isset($_GET['id']) && $_GET['id'] !== ''){
  $loco_id = $_GET['id'];
  $loco_name = $_GET['name'];
} else {
  header("Location: loco.php");
}

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
                <li class="p-navigation__item is-selected">
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
    <!-- section id="search-docs" class="p-strip is-bordered is-shallow l-docs__subgrid">
      <div class="l-docs__sidebar u-hide--medium u-hide--small">
        <div class="u-fixed-width">
          <h5 class="u-sv-2">Ubuntu Community</h5>
        </div>
      </div>
      <div class="l-docs__main">
        <div class="row">
          <form class="p-search-box u-no-margin--bottom">
            <input type="search" class="p-search-box__input" name="q" placeholder="Search documentation" required="" autocomplete="on">
            <button type="reset" class="p-search-box__reset" name="close"><i class="p-icon--close">Close</i></button>
            <button type="submit" class="p-search-box__button" name="submitSearch"><i class="p-icon--search">Search</i></button>
          </form>
        </div>
      </div>
  </section -->
  </div>

  <!-- aside class="l-docs__sidebar">
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
        <h3>LoCal Communities</h3>
        <ul>
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
  </aside -->

  <!-- div class="l-docs__meta">
    <div class="l-docs__sticky-container">
      <aside class="p-table-of-contents">
        <div class="p-table-of-contents__section">
          <h2 class="p-table-of-contents__header">On this page</h2>
          <nav class="p-table-of-contents__nav" aria-label="Table of contents">
            <ul class="p-table-of-contents__list">
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link is-active"  href="#in-this-issue-1">In this Issue</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#ubuntu-stats-2">Ubuntu Stats</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#link3">Hot in Support</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#link4">LoCo News</a></li>
            </ul>
          </nav>
        </div>
      </aside>
    </div>
  </div -->

 <main class="l-docs__main">
      <div class="row">
        <div class="col-12">
    <section class="p-strip--image is-light" style="background-image:url("https://assets.ubuntu.com/sites/ubuntu/latest/u/img/backgrounds/image-background-paper.png")">
    <a href="loco.php" />Back to Local Communites</a>
    <hr>
    <div class="row u-vertically-center">
        <div class="col-8">';

        echo '<h2>About ' . $loco_name . '</h2>';
        // view LoCo function
        viewLoCo($loco_id);

        echo '
        </div>
    </div>
    </section>
  <hr>
<div class="row">';


// closing HTML
echo '
</div>
</main>
</body>
</div>"';
?>
