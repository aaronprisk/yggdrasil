<?php
$event_count=null;
include 'includes/functions.php';
echo '
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="l-docs">
  <div class="l-docs__header">
    <header id="navigation" class="p-navigation is-dark">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.5.1.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css" />
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
                <li class="p-navigation__item is-selected">
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
  <div class="row u-vertically-center">
    <div class="col-8">
      <h1>Community Events</h1>
      <p>Whether it`s in person or virtual, there are always things happening in the Ubuntu world. Come make some new friends, share your knowledge and join in the fun!</p>
    </div>
    <div class="col-4 u-hide--small u-align--center">
      <img src="img/calendar-banner.png" alt="">
    </div>
  </div>
</section>
<div class="row">
';
// Events function
showEvents($event_count);

// Modal HTML
echo'
<div class="p-modal" id="modal">
  <section class="p-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="modal-title" aria-describedby="modal-description">
    <header class="p-modal__header">
      <h2 class="p-modal__title" id="modal-title">Help</h2>
      <button class="p-modal__close" aria-label="Close active modal" aria-controls="modal">Close</button>
    </header>
    <p id="modal-description">Learn how to operate production-ready clusters.</p>
    <div class="p-heading-icon--small">
      <div class="p-heading-icon__header">
        <img class="p-heading-icon__img" src="https://assets.ubuntu.com/v1/b81a45e4-kubernetes.svg" alt="">
        <p><a class="p-heading-icon__title" href="#tutorial/get-started-canonical-kubernetes">Kubernetes tutorial</a></p>
      </div>
      <div class="p-heading-icon__header">
        <img class="p-heading-icon__img" src="https://assets.ubuntu.com/v1/5e3456e3-hadoop.svg" alt="">
        <p><a class="p-heading-icon__title" href="#tutorial/get-started-hadoop-spark">Hadoop Spark tutorial</a></p>
      </div>
    </div>
  </section>
</div>';

// Modal JS
echo "
<script>
(function () {
  // This is not a production ready code, just serves as an example
  // of how the focus should be controlled within the modal dialog.
  var currentDialog = null;
  var lastFocus = null;
  var ignoreFocusChanges = false;
  var focusAfterClose = null;

  // Traps the focus within the currently open modal dialog
  function trapFocus(event) {
    if (ignoreFocusChanges) return;

    if (currentDialog.contains(event.target)) {
      lastFocus = event.target;
    } else {
      focusFirstDescendant(currentDialog);
      if (lastFocus == document.activeElement) {
        focusLastDescendant(currentDialog);
      }
      lastFocus = document.activeElement;
    }
  }

  // Attempts to focus given element
  function attemptFocus(child) {
    if (child.focus) {
      ignoreFocusChanges = true;
      child.focus();
      ignoreFocusChanges = false;
      return document.activeElement === child;
    }

    return false;
  }

  // Focuses first child element
  function focusFirstDescendant(element) {
    for (var i = 0; i < element.childNodes.length; i++) {
      var child = element.childNodes[i];
      if (attemptFocus(child) || focusFirstDescendant(child)) {
        return true;
      }
    }
    return false;
  }

  // Focuses last child element
  function focusLastDescendant(element) {
    for (var i = element.childNodes.length - 1; i >= 0; i--) {
      var child = element.childNodes[i];
      if (attemptFocus(child) || focusLastDescendant(child)) {
        return true;
      }
    }
    return false;
  }

  /**
    Toggles visibility of modal dialog.
    @param {HTMLElement} modal Modal dialog to show or hide.
    @param {HTMLElement} sourceEl Element that triggered toggling modal
    @param {Boolean} open If defined as `true` modal will be opened, if `false` modal will be closed, undefined toggles current visibility.
  */
  function toggleModal(modal, sourceEl, open) {
    if (modal && modal.classList.contains('p-modal')) {
      if (typeof open === 'undefined') {
        open = modal.style.display === 'none';
      }

      if (open) {
        currentDialog = modal;
        modal.style.display = 'flex';
        focusFirstDescendant(modal);
        focusAfterClose = sourceEl;
        document.addEventListener('focus', trapFocus, true);
      } else {
        modal.style.display = 'none';
        if (focusAfterClose && focusAfterClose.focus) {
          focusAfterClose.focus();
        }
        document.removeEventListener('focus', trapFocus, true);
        currentDialog = null;
      }
    }
  }

  // Find and hide all modals on the page
  function closeModals() {
    var modals = [].slice.apply(document.querySelectorAll('.p-modal'));
    modals.forEach(function (modal) {
      toggleModal(modal, false, false);
    });
  }

  // Add click handler for clicks on elements with aria-controls
  document.addEventListener('click', function (event) {
    var targetControls = event.target.getAttribute('aria-controls');
    if (targetControls) {
      toggleModal(document.getElementById(targetControls), event.target);
    }
  });

  // Add handler for closing modals using ESC key.
  document.addEventListener('keydown', function (e) {
    e = e || window.event;

    if (e.code === 'Escape') {
      closeModals();
    } else if (e.keyCode === 27) {
      closeModals();
    }
  });

  // init the dialog that is initially opened in the example
  toggleModal(document.querySelector('#modal'), document.querySelector('[aria-controls=modal]'), false);
})();
</script>";

// Closing HTML
echo "</div></main></div>";

?>
