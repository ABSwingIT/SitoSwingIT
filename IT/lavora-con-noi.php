<?php 
$path = "../";
$page = "lavora-con-noi";

// Variabili per gestire il popup
$show_success_modal = false;
$messaggio_feedback = ""; // Lo usiamo ancora per gli errori (es. file troppo grande)

// --- LOGICA DI INVIO ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Raccogliamo i dati
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $ruolo = htmlspecialchars(trim($_POST['ruolo']));
    $area = htmlspecialchars(trim($_POST['area']));
    $messaggio_utente = htmlspecialchars(trim($_POST['messaggio']));

    $to = "angelo.belfiore.seit@gmail.com"; 
    $subject = "Nuova candidatura da: " . $nome;

    // 2. Gestione dell'Allegato
    $allegato_ok = false;
    $file_content = "";
    $file_name = "";
    $file_type = "";

    // Controllo se c'è il file e se non ha errori di caricamento
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] == UPLOAD_ERR_OK) {
        
        $file_tmp_name = $_FILES['cv']['tmp_name'];
        $file_name = basename($_FILES['cv']['name']);
        $file_size = $_FILES['cv']['size'];

        // Controllo estensione (Solo PDF)
        $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        
        if ($ext == 'pdf' && $file_size < 5000000) { // Max 5MB
            $handle = fopen($file_tmp_name, "rb");
            $content = fread($handle, $file_size);
            fclose($handle);
            $file_content = chunk_split(base64_encode($content));
            $allegato_ok = true;
        } else {
            $messaggio_feedback = '<div style="background: #fff3cd; color: #856404; padding: 15px; margin-bottom: 20px;">Attenzione: Il file deve essere un PDF e minore di 5MB.</div>';
        }
    } elseif (isset($_FILES['cv']) && $_FILES['cv']['error'] != UPLOAD_ERR_NO_FILE) {
         // Errore generico di upload (es. file troppo grande per il server)
         $messaggio_feedback = '<div style="background: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px;">Errore nel caricamento del file. Controlla le dimensioni.</div>';
    }

    // 3. Costruzione e Invio Mail (Solo se non ci sono errori precedenti)
    if ($messaggio_feedback == "") {
        
        $boundary = md5(time());

        $headers = "From: angelo.belfiore.seit@gmail.com\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"" . $boundary . "\"\r\n";

        // Parte Testo
        $body = "--" . $boundary . "\r\n";
        $body .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
        $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $body .= "Nuova candidatura ricevuta dal sito.\n\n";
        $body .= "Nome: $nome\n";
        $body .= "Email: $email\n";
        $body .= "Ruolo: $ruolo\n";
        $body .= "Area: $area\n\n";
        $body .= "Presentazione:\n$messaggio_utente\n\n";
        
        // Parte Allegato
        if ($allegato_ok) {
            $body .= "--" . $boundary . "\r\n";
            $body .= "Content-Type: application/pdf; name=\"" . $file_name . "\"\r\n";
            $body .= "Content-Disposition: attachment; filename=\"" . $file_name . "\"\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
            $body .= $file_content . "\r\n";
        }

        $body .= "--" . $boundary . "--";

        // Invio
        if (mail($to, $subject, $body, $headers)) {
            // SUCCESS: Attiviamo il flag per mostrare il popup
            $show_success_modal = true;
        } else {
            $messaggio_feedback = '<div style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px;">Errore tecnico nell\'invio della mail.</div>';
        }
    }
}

include '../includes/header_it.php'; 
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
          <div class="breadcrumb"><a href="../index.php">Home</a> / Careers</div>
          <h1 class="inner-title">Careers</h1>
        </section>

        <section class="content fade-in">
          <h2>Unisciti al team Swing:IT</h2>
          <p style="text-align: justify;">Unisciti al <strong>Nostro Team</strong> e diventa anche tu parte di un'<strong>organizzazione giovane, dinamica, creativa e innovativa</strong> che offre competenze di elevato profilo per raggiungere perfomance di eccellenza. Se sei una persona <strong>aperta e intraprendente, flessibile ed entusiasta, pro-attiva e autonoma nel lavoro</strong>, da noi troverai le condizioni ideali per valorizzare il tuo talento. Avrai la possibilità di partecipare a Progetti di Innovazione, di operare sia in un ambito internazionale confrontandoti con i migliori professionisti del settore ICT.</p>
          <p style="text-align: justify;">Le candidature ricevute verranno archiviate nella nostra Banca Dati per un periodo di sei mesi per la loro più ampia valorizzazione all'interno dei nostri Progetti. Per questa ragione, non dimenticare di esprimere il consenso al trattamento dei dati personali ai sensi D Lgs. 196/2003.</p>
          <hr />
          <p> </p>
          <h5><strong>Selezioni Attive</strong></h5>
          <p>Per i nostri progetti di Cross Reality (XR) ricerchiamo collaboratori secondo i seguenti profili:</p>
          
          <p><strong>Profilo A: Senior Software Engineer</strong></p>
          <p>La figura professionale ricercata, riportando al Coordinatore Tecnico, avrà le seguenti responsabilità:</p>
          <p>Contribuire attivamente a redigere le specifiche tecniche di sviluppo;<br />Sviluppare, far evolvere e manutenere i prodotti coordinando le risorse aziendali e esterne;<br />Assicurare la coerenza e l'aggiornamento della documentazione tecnica e dei manuali;<br />Collaborare con il management tecnico e amministrativo al design e all'implementazione di nuovi progetti;</p>
          <p>I requisiti necessari per ricoprire il ruolo sono:</p>
          <p>Laurea di II livello in Informatica o Ingegneria Informatica;<br />Pluriennale esperienza;<br />Conoscenza di C# .Net, e di uno tra C++, C, Java.<br />Conoscenza di SQL, php, CSS, Javascript;<br />Buona conoscenza della lingua inglese.<br />Disponibilità a viaggiare saltuariamente in Europa per brevi periodi.</p>
          <p>Avrà carattere preferenziale l'esperienza in ambito Unity3D e/o Unreal Engine, grafica computerizzata, Realtà Virtuale/Aumentata.</p>
          <p><b>Tipo di assunzione</b>: contratto a tempo indeterminato</p>
          <p><b>Retribuzione</b>: commisurata all’esperienza e alle competenze</p>
          <p><b>Luogo di lavoro</b>: Catania</p>
          <p> </p>
          <p><strong>Profilo B: Junior Software Engineer</strong></p>
          <p>La figura professionale ricercata, riportando al Team Leader, avrà le seguenti responsabilità:</p>
          <p>Contribuire a redigere la documentazione tecnica dei prodotti;<br />Sviluppare, far evolvere e manutenere i prodotti in collaborazione con il team aziendale;<br />Curare il processo di innovazione continua in atto in azienda.</p>
          <p>I requisiti necessari per ricoprire il ruolo sono:</p>
          <p>Laurea di I o II livello in Informatica o Ingegneria Informatica;<br />Conoscenza di uno o più tra C# .Net, C++, C, Java.<br />Conoscenza di SQL, php, CSS, Javascript;<br />Buona conoscenza della lingua inglese.<br />Disponibilità a viaggiare saltuariamente in Europa per brevi periodi.</p>
          <p>Avrà carattere preferenziale la conoscenza di Unity3D e/o Unreal Engine, della grafica computerizzata, della Realtà Virtuale/Aumentata.</p>
          <p><b>Tipo di assunzione</b>: contratto a tempo indeterminato</p>
          <p><b>Retribuzione</b>: commisurata alle competenze</p>
          <p><b>Luogo di lavoro</b>: Catania.</p>
          <p> </p>
          <p><strong>Profilo C: Graphic Designer freelance</strong></p>
          <p>La figura professionale ricercata, riportando al Team Leader, avrà le seguenti responsabilità:</p>
          <p>Realizzare contenuti e modelli grafici per le nostre soluzioni di  XR (Cross Reality) e Web.<br />Contribuire all'evoluzione di contenuti e modelli nei nostri prodotti in collaborazione con il team aziendale;<br />Partecipare al processo di innovazione continua in atto in azienda.</p>
          <p>I requisiti necessari per ricoprire il ruolo sono:</p>
          <p>Diploma e/o Laurea o corso di studi in design grafico, design della comunicazione;<br />Conoscenza della Adobe Creative Suite.<br />Conoscenza degli usuali strumenti di modellazione grafica 3D (Blender, Maya, etc);<br />Gradita la buona conoscenza della lingua inglese.</p>
          <p>Completano il profilo:</p>
          <p>Ottime capacità creative e comunicative;<br />Proattività e iniziativa.<br />Capacità di lavorare in autonomia;<br />Orientamento al Cliente.</p>
          <p>Avrà carattere preferenziale la conoscenza di Unity3D e/o Unreal Engine, della Realtà Virtuale/Aumentata.</p>
          <p><b>Tipo di assunzione</b>: contratto a tempo indeterminato o a consulenza</p>
          <p><b>Retribuzione</b>: commisurata alle competenze</p>
          <p><b>Luogo di lavoro</b>: Catania.</p>

          <p>Se interessati, inviare CV con autorizzazione al trattamento dati al seguente indirizzo e-mail: <strong>recruitment@softwareengineering.it</strong></p>
          <hr />
          <p> </p>
          <h5><strong>Candidature Spontanee</strong></h5>
          <p>Se non hai trovato ricerche di personale confacenti alle tue esperienze e professionalità, presenta comunque il tuo Curriculum Vitae in formato europeo all'indirizzo:</p>
          <p><a href="mailto:direzione@softwareengineering.it">direzione@softwareengineering.it</a></p>
          <hr />
          <p> </p>
          <h5><strong>Stages</strong></h5>
          <p style="text-align: justify;">Lo stage rappresenta il principale canale di ingresso per i giovani nel mondo del lavoro e costituisce una esperienza fortemente formativa e professionalizzante, che prepara all'eventuale inserimento in Azienda. Nel corso degli anni Software Engineering Italia ha accolto numerosi stagisti con profili professionali differenziati ed è fiera di poter affermare che la maggior parte di essi è poi entrata a far parte del proprio Team.</p>
          <p>Se vuoi proporti per uno stage invia il tuo Curriculum Vitae, esprimendo il consenso al trattamento dei dati personali ai sensi DLgs. 196/2003, all'indirizzo:</p>
          <p><a href="mailto:stage@softwareengineering.it">stage@softwareengineering.it</a></p>
          
          <p>
            Inviaci la tua candidatura spontanea descrivendo competenze,
            interessi e ambiti su cui vorresti lavorare. Valutiamo profili
            junior e senior in sviluppo software, 3D, ricerca applicata,
            infrastrutture e project management.
          </p>

          <!-- ERRORI (Se ci sono) -->
          <?php echo $messaggio_feedback; ?>

          <form
            class="form"
            action=""
            method="post"
            enctype="multipart/form-data"
            style="margin-top: 1rem;"
          >
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

            <div class="form-row">
              <div class="form-group">
                <label for="ruolo">Ruolo di interesse</label>
                <input type="text" id="ruolo" name="ruolo" />
              </div>
              <div class="form-group">
                <label for="area">Area</label>
                <select id="area" name="area">
                  <option value="">Seleziona</option>
                  <option value="dev">Sviluppo software / XR</option>
                  <option value="3d">3D, grafica, UX</option>
                  <option value="ai">AI, data science</option>
                  <option value="pm">Project / Product management</option>
                  <option value="altro">Altro</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="messaggio">Messaggio / Presentazione</label>
              <textarea id="messaggio" name="messaggio" required></textarea>
            </div>

            <div class="form-group">
              <label for="cv">Carica il tuo CV (PDF, max 5MB)</label>
              <input type="file" id="cv" name="cv" accept=".pdf" required />
            </div>

            <button type="submit" class="btn btn-primary">
              Invia candidatura
            </button>
          </form>
        </section>

<!-- STRUTTURA DEL MODALE NASCOSTO -->
<div id="successModal" class="modal-overlay">
  <div class="modal-box">
    <div class="modal-icon">✅</div>
    <h3 class="modal-title">Candidatura Inviata!</h3>
    <p class="modal-text">
        Grazie per averci contattato.<br>
        Abbiamo ricevuto la tua candidatura e il tuo CV.<br>
        Ti risponderemo al più presto.
    </p>
    <button class="btn btn-primary" onclick="closeModal()">Chiudi</button>
  </div>
</div>

<!-- SCRIPT PER APRIRE/CHIUDERE IL MODALE -->
<script>
    function openModal() {
        document.getElementById('successModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('successModal').style.display = 'none';
        // Opzionale: pulisce il form ricaricando la pagina pulita
        window.location.href = window.location.href; 
    }

    // Se PHP dice che l'invio è avvenuto ($show_success_modal è true), apri il modale
    <?php if($show_success_modal): ?>
        openModal();
    <?php endif; ?>
</script>

<?php include '../includes/footer_it.php'; ?>