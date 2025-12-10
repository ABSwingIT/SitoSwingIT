<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo $path; ?>img/favicon.png">
    <title>Home – Swing:IT</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo $path; ?>css/style.css" />
  </head>
  <body>
    <div class="page-wrapper">
      <!-- HEADER -->
      <header class="site-header">
      <div class="header-inner">
          <div class="group">
            <a href="<?php echo $path; ?>index_en.php" class="brand">
              <img src="<?php echo $path; ?>images/logo-light.png" alt="Swing:IT logo" />
            </a>
            <div class="language-switcher">
              <button class="lang-toggle" aria-label="Seleziona lingua">
                <img src="<?php echo $path; ?>images/EN.png" alt="English" class="lang-flag" id="current-flag">
              </button>
              <div class="lang-dropdown">
                <div class="lang-option" data-lang="it">
                  <img src="<?php echo $path; ?>images/IT.png" alt="Italiano" class="lang-flag">
                </div>
                <div class="lang-option" data-lang="en">
                  <img src="<?php echo $path; ?>images/EN.png" alt="English" class="lang-flag">
                </div>
                <div class="lang-option" data-lang="de">
                  <img src="<?php echo $path; ?>images/DE.png" alt="Deutsch" class="lang-flag">
                </div>
              </div>
            </div>
          </div>
          <nav class="main-nav">
            <a href="<?php echo $path; ?>index_en.php" class="<?php if($page == 'home') echo 'active'; ?>">Home</a>
            <a href="<?php echo $path; ?>EN/chi-siamo_en.php" class="<?php if($page == 'chi-siamo_en') echo 'active'; ?>">About</a>
            <a href="<?php echo $path; ?>EN/engineering_en.php" class="<?php if($page == 'engineering_en') echo 'active'; ?>">Engineering</a>
            <a href="<?php echo $path; ?>EN/prodotti_en.php" class="<?php if($page == 'prodotti_en') echo 'active'; ?>">Products</a>
            <a href="<?php echo $path; ?>EN/tecnologie_en.php" class="<?php if($page == 'tecnologie_en') echo 'active'; ?>">Technologies</a>
            <a href="<?php echo $path; ?>EN/ricerca-innovazione_en.php" class="<?php if($page == 'ricerca-innovazione_en') echo 'active'; ?>">R&I</a>
            <a href="<?php echo $path; ?>EN/finanziamenti_en.php" class="<?php if($page == 'finanziamenti_en') echo 'active'; ?>">Funding</a>
            <a href="<?php echo $path; ?>EN/contatti_en.php" class="<?php if($page == 'contatti_en') echo 'active'; ?>">Contacts</a>
            <a href="<?php echo $path; ?>EN/lavora-con-noi_en.php" class="<?php if($page == 'lavora-con-noi_en') echo 'active'; ?>">Careers</a>
            <a href="<?php echo $path; ?>EN/privacy_en.php" class="<?php if($page == '/privacy_en') echo 'active'; ?>">Privacy</a>
          </nav>
          <button class="nav-toggle" aria-label="Open menu">
            <span class="nav-toggle-bar"></span>
          </button>
        </div>
        <nav class="nav-mobile">
          <a href="<?php echo $path; ?>index_en.php">Home</a>
          <a href="<?php echo $path; ?>EN/chi-siamo_en.php">About</a>
          <a href="<?php echo $path; ?>EN/engineering_en.php">Engineering</a>
          <a href="<?php echo $path; ?>EN/prodotti_en.php">Products</a>
          <a href="<?php echo $path; ?>EN/tecnologie_en.php">Technologies</a>
          <a href="<?php echo $path; ?>EN/ricerca-innovazione_en.php">R&I</a>
          <a href="<?php echo $path; ?>EN/finanziamenti_en.php">Funding</a>
          <a href="<?php echo $path; ?>EN/contatti_en.php">Contacts</a>
          <a href="<?php echo $path; ?>EN/lavora-con-noi_en.php">Careers</a>
          <a href="<?php echo $path; ?>EN/privacy_en.php">Privacy</a>
        </nav>
      </header>

      <main>