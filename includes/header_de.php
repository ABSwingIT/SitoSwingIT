<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/favicon.png">
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
            <a href="<?php echo $path; ?>index_de.php" class="brand">
              <img src="<?php echo $path; ?>images/logo-light.png" alt="Swing:IT logo" />
            </a>
            <div class="language-switcher">
              <button class="lang-toggle" aria-label="Seleziona lingua">
                <img src="<?php echo $path; ?>images/DE.png" alt="Deutsch" class="lang-flag" id="current-flag">
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
            <a href="<?php echo $path; ?>index_de.php" class="<?php echo($page == 'home') ? 'active' : ''; ?>">Home</a>
            <a href="<?php echo $path; ?>DE/chi-siamo_de.php" class="<?php echo($page == 'uber') ? 'active' : ''; ?>">Über</a>
            <a href="<?php echo $path; ?>DE/engineering_de.php" class="<?php echo($page == 'engineering') ? 'active' : ''; ?>">Engineering</a>
            <a href="<?php echo $path; ?>DE/prodotti_de.php" class="<?php echo($page == 'produkte') ? 'active' : ''; ?>">Produkte</a>
            <a href="<?php echo $path; ?>DE/tecnologie_de.php" class="<?php echo($page == 'technologien') ? 'active' : ''; ?>">Technologien</a>
            <a href="<?php echo $path; ?>DE/ricerca-innovazione_de.php" class="<?php echo($page == 'forschung') ? 'active' : ''; ?>">F&E</a>
            <a href="<?php echo $path; ?>DE/finanziamenti_de.php" class="<?php echo($page == 'finanzierung') ? 'active' : ''; ?>">Finanzierung</a>
            <a href="<?php echo $path; ?>DE/contatti_de.php" class="<?php echo($page == 'kontakt') ? 'active' : ''; ?>">Kontakt</a>
            <a href="<?php echo $path; ?>DE/lavora-con-noi_de.php" class="<?php echo($page == 'karriere') ? 'active' : ''; ?>">Karriere</a>
            <a href="<?php echo $path; ?>DE/privacy_de.php" class="<?php echo($page == 'datenschutz') ? 'active' : ''; ?>">Datenschutz</a>
          </nav>
          <button class="nav-toggle" aria-label="Menü öffnen">
            <span class="nav-toggle-bar"></span>
          </button>
        </div>
        <nav class="nav-mobile">
          <a href="<?php echo $path; ?>index_de.php">Home</a>
          <a href="<?php echo $path; ?>DE/chi-siamo_de.php">Über</a>
          <a href="<?php echo $path; ?>DE/engineering_de.php">Engineering</a>
          <a href="<?php echo $path; ?>DE/prodotti_de.php">Produkte</a>
          <a href="<?php echo $path; ?>DE/tecnologie_de.php">Technologien</a>
          <a href="<?php echo $path; ?>DE/ricerca-innovazione_de.php">F&E</a>
          <a href="<?php echo $path; ?>DE/finanziamenti_de.php">Finanzierung</a>
          <a href="<?php echo $path; ?>DE/contatti_de.php">Kontakt</a>
          <a href="<?php echo $path; ?>DE/lavora-con-noi_de.php">Karriere</a>
          <a href="<?php echo $path; ?>DE/privacy_de.php">Datenschutz</a>
        </nav>
      </header>

      <main>