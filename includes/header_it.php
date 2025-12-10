<!DOCTYPE html>
<html lang="it">
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
      <!-- (incolla qui il blocco header comune) -->
<header class="site-header">
        <div class="header-inner">
          <div class="group">
            <a href="<?php echo $path; ?>index.php" class="brand">
              <img src="<?php echo $path; ?>images/logo-light.png" alt="Swing:IT logo" />
            </a>
            <div class="language-switcher">
              <button class="lang-toggle" aria-label="Seleziona lingua">
                <img src="<?php echo $path; ?>images/IT.png" alt="Italiano" class="lang-flag" id="current-flag">
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
            <a href="<?php echo $path; ?>index.php" class="<?php echo ($page == 'home') ? 'active' : ''; ?>">Home</a>
            <a href="<?php echo $path; ?>IT/chi-siamo.php" class="<?php echo ($page == 'about') ? 'active' : ''; ?>">About</a>
            <a href="<?php echo $path; ?>IT/engineering.php" class="<?php echo ($page == 'engineering') ? 'active' : ''; ?>">Engineering</a>
            <a href="<?php echo $path; ?>IT/prodotti.php" class="<?php echo ($page == 'prodotti') ? 'active' : ''; ?>">Prodotti</a>
            <a href="<?php echo $path; ?>IT/tecnologie.php" class="<?php echo ($page == 'tecnologie') ? 'active' : ''; ?>">Tecnologie</a>
            <a href="<?php echo $path; ?>IT/ricerca-innovazione.php" class="<?php echo ($page == 'ricerca') ? 'active' : ''; ?>">R&I</a>
            <a href="<?php echo $path; ?>IT/finanziamenti.php" class="<?php echo ($page == 'finanziamenti') ? 'active' : ''; ?>">Finanziamenti</a>
            <a href="<?php echo $path; ?>IT/contatti.php" class="<?php echo ($page == 'contatti') ? 'active' : ''; ?>">Contatti</a>
            <a href="<?php echo $path; ?>IT/lavora-con-noi.php" class="<?php echo ($page == 'lavora-con-noi') ? 'active' : ''; ?>">Careers</a>
            <a href="<?php echo $path; ?>IT/privacy.php" class="<?php echo ($page == 'privacy') ? 'active' : ''; ?>">Privacy</a>
          </nav>
          <button class="nav-toggle" aria-label="Apri il menu">
            <span class="nav-toggle-bar"></span>
          </button>
          
        </div>
        <nav class="nav-mobile">
          <a href="<?php echo $path; ?>index.php">Home</a>
          <a href="<?php echo $path; ?>IT/chi-siamo.php">About</a>
          <a href="<?php echo $path; ?>IT/engineering.php">Engineering</a>
          <a href="<?php echo $path; ?>IT/prodotti.php">Prodotti</a>
          <a href="<?php echo $path; ?>IT/tecnologie.php">Tecnologie</a>
          <a href="<?php echo $path; ?>IT/ricerca-innovazione.php">R&I</a>
          <a href="<?php echo $path; ?>IT/finanziamenti.php">Finanziamenti</a>
          <a href="<?php echo $path; ?>IT/contatti.php">Contatti</a>
          <a href="<?php echo $path; ?>IT/lavora-con-noi.php">Careers</a>
          <a href="<?php echo $path; ?>IT/privacy.php">Privacy</a>
        </nav>
        
      </header>

      <main>