<?php 
$path = "../";      // Siamo dentro una cartella, dobbiamo salire di un livello per trovare css e images
$page = "contacts";    // Questo farà illuminare "Contacts" nel menu

// Variabili per gestire il popup e feedback
$show_success_modal = false;
$messaggio_feedback = ""; 

// Se il modulo è stato inviato (metodo POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Raccogliamo e puliamo i dati
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
    $headers = "From: noreply@softwareengineering.it\r\n"; 
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // 6. Invio effettivo
    if(!empty($nome) && !empty($email) && !empty($messaggio)){
        if (mail($to, $subject, $body, $headers)) {
            // SUCCESS: Attiviamo il flag per mostrare il popup invece del testo semplice
            $show_success_modal = true;
        } else {
            $messaggio_feedback = '<div style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px;">Errore nell\'invio del messaggio. Riprova più tardi.</div>';
        }
    } else {
        $messaggio_feedback = '<div style="background: #fff3cd; color: #856404; padding: 15px; border-radius: 5px; margin-bottom: 20px;">Per favore compila tutti i campi obbligatori.</div>';
    }
}

include '../includes/header_en.php'; // Notare ../ prima di includes
?>

<!-- CSS PER IL POPUP (MODALE) -->
<style>
  .modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    display: none; /* Nascosto di default */
    justify-content: center;
    align-items: center;
    z-index: 10000;
    backdrop-filter: blur(5px);
  }

  .modal-box {
    background: #111827; /* Colore scuro coerente col sito */
    border: 1px solid rgba(94, 170, 222, 0.5); /* Bordo azzurro */
    padding: 2rem;
    border-radius: 16px;
    text-align: center;
    max-width: 400px;
    width: 90%;
    box-shadow: 0 20px 60px rgba(0,0,0,0.5);
    animation: popUp 0.3s ease-out forwards;
  }

  .modal-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
    display: block;
  }

  .modal-title {
    color: #f9fafb;
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
  }

  .modal-text {
    color: #9ca3af;
    margin-bottom: 1.5rem;
  }

  @keyframes popUp {
    from { transform: scale(0.8); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
  }
</style>

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

<!-- STRUTTURA DEL MODALE NASCOSTO -->
<div id="successModal" class="modal-overlay">
  <div class="modal-box">
    <div class="modal-icon">📩</div>
    <h3 class="modal-title">Message Sent!</h3>
    <p class="modal-text">
        Thank you for contacting us.<br>
        We have received your request.<br>
        We will reply to you as soon as possible.
    </p>
    <button class="btn btn-primary" onclick="closeModal()">Close</button>
  </div>
</div>

<!-- SCRIPT PER APRIRE/CHIUDERE IL MODALE -->
<script>
    function openModal() {
        document.getElementById('successModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('successModal').style.display = 'none';
        // Ricarica la pagina pulita per svuotare il form
        window.location.href = window.location.href; 
    }

    // Se PHP dice che l'invio è avvenuto ($show_success_modal è true), apri il modale
    <?php if($show_success_modal): ?>
        openModal();
    <?php endif; ?>
</script>

<?php include '../includes/footer_en.php'; ?>
