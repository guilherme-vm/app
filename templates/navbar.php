<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<button class="mobile-menu-closed" id="mobileMenu"><img id="mobile-menu-img"src="<?= isset($linkVar) ? $linkVar . 'assets/img/icons/mobileMenu.svg' : 'assets/img/icons/mobileMenu.svg' ?>" alt=""></button>


<nav aria-label="Main navigation">
  <ul id="navbar" class="main-nav navbarScrollDown">

    <li class="menuItem menuItemDown <?= $currentPage === 'index.php' ? 'active' : '' ?>">
      <div class="menuItemCoat menuItemCoatScrollDown">
        <a
          href="<?= isset($linkVar) ? $linkVar . 'index.php' : 'index.php' ?>"
          <?= basename($_SERVER['PHP_SELF']) === 'index.php' ? 'aria-current="page"' : '' ?>>
          Home
        </a>
      </div>
    </li>

    <li class="nav-group">
      <ul class="nav-box">

        <li class="menuItem menuItemDown <?= $currentPage === 'design.php' ? 'active' : '' ?>">

          <div class="menuItemCoat menuItemCoatScrollDown">

            <a
              href="<?= isset($linkVar) ? $linkVar . 'design.php' : 'design.php' ?>"
              <?= basename($_SERVER['PHP_SELF']) === 'design.php' ? 'aria-current="page"' : '' ?>>
              Design
            </a>

          </div>
        </li>

        <li class="menuItem menuItemDown <?= $currentPage === 'video.php' ? 'active' : '' ?>">
          <div class="menuItemCoat menuItemCoatScrollDown">

          <a
              href="<?= isset($linkVar) ? $linkVar . 'video.php' : 'video.php' ?>"
              <?= basename($_SERVER['PHP_SELF']) === 'video.php' ? 'aria-current="page"' : '' ?>>
              Video
            </a>
          </div>
        </li>

        <li class="menuItem menuItemDown <?= $currentPage === 'artwork.php' ? 'active' : '' ?>">
          <div class="menuItemCoat menuItemCoatScrollDown">

          <a
              href="<?= isset($linkVar) ? $linkVar . 'artwork.php' : 'artwork.php' ?>"
              <?= basename($_SERVER['PHP_SELF']) === 'artwork.php' ? 'aria-current="page"' : '' ?>>
              Artwork
            </a>
          </div>
        </li>

        <li class="menuItem menuItemDown <?= $currentPage === 'about.php' ? 'active' : '' ?>">
          <div class="menuItemCoat menuItemCoatScrollDown">

          <a
              href="<?= isset($linkVar) ? $linkVar . 'about.php' : 'about.php' ?>"
              <?= basename($_SERVER['PHP_SELF']) === 'about.php' ? 'aria-current="page"' : '' ?>>
              About
            </a>
          </div>
        </li>

      </ul>
    </li>
  </ul>
</nav>


<main id="main">

<div class="bgWrapper">

</div>



