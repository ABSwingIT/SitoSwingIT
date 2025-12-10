<?php 
$path = "../";      // Siamo dentro una cartella, dobbiamo salire di un livello per trovare css e images
$page = "contacts";    // Questo farà illuminare "Contacts" nel menu

// --- LOGICA DI INVIO MAIL ---
$messaggio_feedback = ""; // Variabile per mostrare esito all'utente

// Se il modulo è stato inviato (metodo POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Raccogliamo e puliamo i dati (Sanitizzazione)
    // htmlspecialchars serve a impedire che qualcuno inserisca codice malevolo
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $oggetto_form = htmlspecialchars(trim($_POST['oggetto']));
    $messaggio = htmlspecialchars(trim($_POST['messaggio']));

    // 2. Impostiamo il destinatario
    $to = "angelo.belfiore.seit@gmail.com";

    // 3. Prepariamo l'oggetto della mail
    $subject = "Nuovo messaggio dal sito Swing:IT: " . $oggetto_form;

    // 4. Costruiamo il corpo della mail
    $body = "Hai ricevuto un nuovo messaggio dal modulo contatti.\n\n";
    $body .= "Nome: " . $nome . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Oggetto: " . $oggetto_form . "\n\n";
    $body .= "Messaggio:\n" . $messaggio . "\n";

    // 5. Intestazioni (Headers)
    // Importante: Reply-To permette di rispondere direttamente al mittente cliccando "Rispondi"
    $headers = "From: noreply@softwareengineering.it\r\n"; // Meglio usare una mail del dominio
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // 6. Invio effettivo
    // Controllo se i campi obbligatori sono pieni
    if(!empty($nome) && !empty($email) && !empty($messaggio)){
        if (mail($to, $subject, $body, $headers)) {
            $messaggio_feedback = '<div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">Messaggio inviato con successo! Ti risponderemo presto.</div>';
        } else {
            $messaggio_feedback = '<div style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px;">Errore nell\'invio del messaggio. Riprova più tardi (Nota: su Localhost potrebbe non funzionare).</div>';
        }
    } else {
        $messaggio_feedback = '<div style="background: #fff3cd; color: #856404; padding: 15px; border-radius: 5px; margin-bottom: 20px;">Per favore compila tutti i campi obbligatori.</div>';
    }
}

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
