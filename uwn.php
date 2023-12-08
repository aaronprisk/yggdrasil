<?php
// Yggdrasil 0.1 - UWN Test
// Aaron Prisk - aaron.prisk@canonical.com

// UWN Category JSON Decode
$toc_json = file_get_contents('https://discourse.ubuntu.com/c/uwn/124.json');
$toc_content = json_decode($toc_json,true);

echo '
<div class="l-docs">
  <div class="l-docs__header">
    <header id="navigation" class="p-navigation is-dark">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.5.1.min.css" />
      <div class="l-docs__subgrid">
        <div class="l-docs__sidebar">
          <div class="p-navigation__banner">
            <div class="p-navigation__tagged-logo">
              <a class="p-navigation__link" href="#">
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
                  <a class="p-navigation__link" href="#">Events</a>
                </li>
                <li class="p-navigation__item">
                  <a class="p-navigation__link" href="loco.php">Teams</a>
                </li>
                <li class="p-navigation__item">
                  <a class="p-navigation__link" href="#">Pathways</a>
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
    <section id="search-docs" class="p-strip is-bordered is-shallow l-docs__subgrid">
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
  </section>
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
        <h3>Previous Issues</h3>
        <ul>';

// Display previous issue side panel
foreach ($toc_content['topic_list']['topics'] as $topics) {
 echo "<li><a href='https://discourse.ubuntu.com/t/" . $topics['slug'] . "'>" . $topics['title'] . "</a></li>";
}

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

  <div class="l-docs__meta">
    <div class="l-docs__sticky-container">
      <aside class="p-table-of-contents">
        <div class="p-table-of-contents__section">
          <h2 class="p-table-of-contents__header">On this page</h2>
          <nav class="p-table-of-contents__nav" aria-label="Table of contents">
            <ul class="p-table-of-contents__list">
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link is-active"  href="#in-this-issue-1">In this Issue</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#ubuntu-stats-5">Ubuntu Stats</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#hot-in-support-8">Hot in Support</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#loco-events-11">LoCo Events</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#the-hub-12">The Hub</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#other-community-news-18">Other Community News</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#canonical-news-21">Canonical News</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#in-the-blogosphere-22">In the Blogosphere</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#other-articles-of-interest-26">Other Articles of Interest</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#featured-audio-and-video-27">Featured Audio and Video</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#meeting-reports-33">Meeting Reports</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#upcoming-meetings-and-events-34">Upcoming Meetings and Events</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#updates-and-security-for-2004-2204-2304-and-2310-35">Updates and Security</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#subscribe-41">Subscribe</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#archive-42">Archive</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#further-news-43">Further News</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#credits-45">Credits</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#glossary-of-terms-46">Glossary of Terms</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#get-involved-47">Get Involved</a></li>
              <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#feedback-48">Feedback</a></li>
            </ul>
          </nav>
        </div>
      </aside>
    </div>
  </div>

 <main class="l-docs__main">
      <div class="row">
        <div class="col-12">

<section class="p-strip--suru">
  <div class="row u-vertically-center">
    <div class="col-8">
      <h1>Ubuntu Weekly News</h1>
      <p>Your weekly source of news from the Ubuntu community.</p>
      <button>Subscribe</button>
    </div>
  </div>
</section>
';

// Topic JSON Decode
echo "<button class='p-button--brand'>Subscribe</button>";
//echo "<h3>Current Issue</h3>";
$article_json = file_get_contents('https://discourse.ubuntu.com/t/ubuntu-weekly-newsletter-issue-816/40605.json');
$article_content = json_decode($article_json,true);

// Echo current cooked article
echo "<p>" . $article_content['post_stream']['posts'][0]['cooked'] . "</p>";

// Closing HTML
echo "</div></main></div>";
?>
