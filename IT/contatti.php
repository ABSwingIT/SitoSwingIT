<?php 
$path = "../";
$page = "contatti";

// Variabili di feedback
$show_success_modal = false;
$messaggio_feedback = ""; 

// --- CONFIGURAZIONE RECAPTCHA ---
// INCOLLA QUI LA TUA "CHIAVE SEGRETA" (SECRET KEY) PRESA DA GOOGLE
$recaptcha_secret = "6LejfScsAAAAAL9ve-eqzDJGkZufK5Lfpz5gY04D";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. VERIFICA CAPTCHA PRIMA DI TUTTO
    $recaptcha_response = $_POST['g-recaptcha-response'];
    $verify_url = "https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$recaptcha_response}";
    
    // Chiediamo a Google se l'utente è umano
    $captcha_verify = file_get_contents($verify_url);
    $captcha_data = json_decode($captcha_verify);

    if (!$captcha_data->success) {
        // Se il captcha fallisce o non è stato cliccato
        $messaggio_feedback = '<div style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px;">Per favore conferma di non essere un robot cliccando sul CAPTCHA.</div>';
    } else {
        // CAPTCHA OK -> PROCEDIAMO CON L'INVIO MAIL
        
        // Pulizia dati
        $nome = htmlspecialchars(trim($_POST['nome']));
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $oggetto_form = htmlspecialchars(trim($_POST['oggetto']));
        $messaggio = htmlspecialchars(trim($_POST['messaggio']));

        $to = "angelo.belfiore.seit@gmail.com";
        $subject = "Nuovo messaggio dal sito Swing:IT: " . $oggetto_form;

        $body = "Hai ricevuto un nuovo messaggio dal modulo contatti.\n\n";
        $body .= "Nome: " . $nome . "\n";
        $body .= "Email: " . $email . "\n";
        $body .= "Oggetto: " . $oggetto_form . "\n\n";
        $body .= "Messaggio:\n" . $messaggio . "\n";

        $headers = "From: noreply@softwareengineering.it\r\n"; 
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        if(!empty($nome) && !empty($email) && !empty($messaggio)){
            if (mail($to, $subject, $body, $headers)) {
                $show_success_modal = true;
            } else {
                $messaggio_feedback = '<div style="background: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px;">Errore tecnico nell\'invio. Riprova.</div>';
            }
        } else {
            $messaggio_feedback = '<div style="background: #fff3cd; color: #856404; padding: 15px; margin-bottom: 20px;">Compila tutti i campi obbligatori.</div>';
        }
    }
}

include '../includes/header_it.php'; 
?>

<!-- SCRIPT DI GOOGLE NECESSARIO -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<style>
  /* Stile Popup */
  .modal-overlay {
    position: fixed; top: 0; left: 0; width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.7); display: none; 
    justify-content: center; align-items: center; z-index: 10000; backdrop-filter: blur(5px);
  }
  .modal-box {
    background: #111827; border: 1px solid rgba(94, 170, 222, 0.5);
    padding: 2rem; border-radius: 16px; text-align: center;
    max-width: 400px; width: 90%; box-shadow: 0 20px 60px rgba(0,0,0,0.5);
    animation: popUp 0.3s ease-out forwards;
  }
  .modal-icon { font-size: 3rem; margin-bottom: 1rem; display: block; }
  .modal-title { color: #f9fafb; font-size: 1.5rem; margin-bottom: 0.5rem; }
  .modal-text { color: #9ca3af; margin-bottom: 1.5rem; }
  @keyframes popUp { from { transform: scale(0.8); opacity: 0; } to { transform: scale(1); opacity: 1; } }
</style>

<section class="inner-hero fade-in">
    <div class="breadcrumb"><a href="../index.php">Home</a> / Contatti</div>
    <h1 class="inner-title">Contatti</h1>
    <p class="inner-subtitle">
    Raccontaci le tue esigenze: svilupperemo insieme il percorso più
    adatto per sperimentare e scalare tecnologie immersive.
    </p>
</section>

<section class="content fade-in">
    <div class="content-grid">
    <div>
        <h2>Scrivici</h2>
        <?php echo $messaggio_feedback; ?>

        <form class="form" action="" method="post">
        <div class="form-row">
            <div class="form-group">
            <label for="nome">Nome e Cognome</label>
            <input type="text" id="nome" name="nome" required />
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
            </div>
        </div>

        <div class="form-group">
            <label for="oggetto">Oggetto</label>
            <input type="text" id="oggetto" name="oggetto" />
        </div>

        <div class="form-group">
            <label for="messaggio">Messaggio</label>
            <textarea id="messaggio" name="messaggio" required></textarea>
        </div>

        <!-- QUI IL BLOCCO RECAPTCHA -->
        <div class="form-group" style="margin-bottom: 1.5rem;">
             <!-- INCOLLA QUI LA TUA "CHIAVE DEL SITO" (SITE KEY) -->
             <div class="g-recaptcha" data-sitekey="6LejfScsAAAAAGyn4t23--vqszjPly9Xj9BHwwny"></div>
        </div>

        <button type="submit" class="btn btn-primary">
            Invia
        </button>
        </form>
    </div>

    <aside class="sidebar-card">
        <h2>Dove siamo</h2>
        <p>Software Engineering Italia S.r.l.</p>
        <p>Piazza A. Lincoln 7, 95128 Catania (CT)</p>
        <p>Tel: (+39) 095 8812585</p>
        <p>Email: <a href="mailto:info@softwareengineering.it">info@softwareengineering.it</a></p>
        <div class="map-embed">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6328.809419406504!2d15.089155600000007!3d37.521956100000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1313fcdae6344963%3A0xffb87bff8a2e8c8f!2sPiazza%20Abramo%20Lincoln%2C%207%2C%2095128%20Catania%20CT!5e0!3m2!1sit!2sit!4v1764339575245!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </aside>
    </div>
</section>

<div id="successModal" class="modal-overlay">
  <div class="modal-box">
    <div class="modal-icon">📩</div>
    <h3 class="modal-title">Messaggio Inviato!</h3>
    <p class="modal-text">Grazie per averci contattato. Ti risponderemo al più presto.</p>
    <button class="btn btn-primary" onclick="closeModal()">Chiudi</button>
  </div>
</div>

<script>
    function openModal() { document.getElementById('successModal').style.display = 'flex'; }
    function closeModal() { document.getElementById('successModal').style.display = 'none'; window.location.href = window.location.href; }
    <?php if($show_success_modal): ?> openModal(); <?php endif; ?>
</script>

<?php include '../includes/footer_it.php'; ?>