<?php 
$path = "../";      // Siamo dentro una cartella, dobbiamo salire di un livello per trovare css e images
$page = "contacts";    // Questo farà illuminare "Contacts" nel menu
include '../includes/header_en.php'; // Notare ../ prima di includes
?>
        <section class="inner-hero fade-in">
          <div class="breadcrumb"><a href="../index_en.php">Home</a> / Contacts</div>
          <h1 class="inner-title">Contacts</h1>
          <p class="inner-subtitle">
            Tell us about your needs: together we will develop the best path to experiment and scale immersive technologies.
          </p>
        </section>

        <section class="content fade-in">
          <div class="content-grid">
            <div>
              <h2>Write to Us</h2>
              <form class="form" action="#" method="post">
                <div class="form-row">
                  <div class="form-group">
                    <label for="nome">Name and Surname</label>
                    <input type="text" id="nome" name="nome" required />
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required />
                  </div>
                </div>

                <div class="form-group">
                  <label for="oggetto">Subject</label>
                  <input type="text" id="oggetto" name="oggetto" />
                </div>

                <div class="form-group">
                  <label for="messaggio">Message</label>
                  <textarea id="messaggio" name="messaggio" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                  Send
                </button>
              </form>
            </div>

            <aside class="sidebar-card">
              <h2>Where We Are</h2>
              <p>Software Engineering Italia S.r.l.</p>
              <p>Piazza A. Lincoln 7, 95128 Catania (CT)</p>
              <p>Tel: (+39) 095 8812585</p>
              <p>
                Email:
                <a href="mailto:info@softwareengineering.it">info@softwareengineering.it</a>
              </p>

              <div class="map-embed">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6328.809419406504!2d15.089155600000007!3d37.521956100000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1313fcdae6344963%3A0xffb87bff8a2e8c8f!2sPiazza%20Abramo%20Lincoln%2C%207%2C%2095128%20Catania%20CT!5e0!3m2!1sit!2sit!4v1764339575245!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </aside>
          </div>
        </section>
<?php include '../includes/footer_en.php'; ?>
