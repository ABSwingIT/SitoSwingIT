<?php 
$path = "../";
$page = "lavora-con-noi";

// --- LOGICA DI INVIO CANDIDATURA CON ALLEGATO ---
$messaggio_feedback = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Raccogliamo i dati testuali
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $ruolo = htmlspecialchars(trim($_POST['ruolo']));
    $area = htmlspecialchars(trim($_POST['area']));
    $messaggio_utente = htmlspecialchars(trim($_POST['messaggio']));

    // Destinatario (Uso la tua mail gmail che funziona, poi potrai cambiarla)
    $to = "angelo.belfiore.seit@gmail.com"; 
    $subject = "Nuova candidatura da: " . $nome;

    // 2. Gestione dell'Allegato (CV)
    $allegato_ok = false;
    $file_content = "";
    $file_name = "";
    $file_type = "";

    // Controlliamo se è stato caricato un file senza errori
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] == UPLOAD_ERR_OK) {
        
        $file_tmp_name = $_FILES['cv']['tmp_name'];
        $file_name = basename($_FILES['cv']['name']);
        $file_type = $_FILES['cv']['type'];
        $file_size = $_FILES['cv']['size'];

        // Controllo estensione (Solo PDF)
        $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        
        if ($ext == 'pdf' && $file_size < 5000000) { // Max 5MB
            // Leggiamo il file e lo convertiamo per la mail
            $handle = fopen($file_tmp_name, "rb");
            $content = fread($handle, $file_size);
            fclose($handle);
            $file_content = chunk_split(base64_encode($content)); // Codifica Base64 fondamentale
            $allegato_ok = true;
        } else {
            $messaggio_feedback = '<div style="background: #fff3cd; color: #856404; padding: 15px; margin-bottom: 20px;">Il file deve essere un PDF e minore di 5MB.</div>';
        }
    }

    // 3. Costruzione della Mail Multipart (Testo + Allegato)
    if ($messaggio_feedback == "") { // Procediamo solo se non ci sono errori file
        
        // Generiamo un separatore univoco per le parti della mail
        $boundary = md5(time());

        // Headers specifici per mail con allegati
        $headers = "From: angelo.belfiore.seit@gmail.com\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"" . $boundary . "\"\r\n";

        // -- PARTE 1: IL CORPO DEL MESSAGGIO (TESTO) --
        $body = "--" . $boundary . "\r\n";
        $body .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
        $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        
        $body .= "Nuova candidatura ricevuta dal sito.\n\n";
        $body .= "Nome: $nome\n";
        $body .= "Email: $email\n";
        $body .= "Ruolo: $ruolo\n";
        $body .= "Area: $area\n\n";
        $body .= "Presentazione:\n$messaggio_utente\n\n";
        
        // -- PARTE 2: L'ALLEGATO (SE PRESENTE) --
        if ($allegato_ok) {
            $body .= "--" . $boundary . "\r\n";
            $body .= "Content-Type: application/pdf; name=\"" . $file_name . "\"\r\n";
            $body .= "Content-Disposition: attachment; filename=\"" . $file_name . "\"\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
            $body .= $file_content . "\r\n";
        } else {
            $body .= "\n(Nessun CV allegato o errore nel caricamento)\n";
        }

        // Chiusura del boundary
        $body .= "--" . $boundary . "--";

        // 4. Invio effettivo
        if (mail($to, $subject, $body, $headers)) {
            $messaggio_feedback = '<div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">Candidatura inviata con successo!</div>';
        } else {
            $messaggio_feedback = '<div style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px;">Errore nell\'invio. Riprova più tardi.</div>';
        }
    }
}

include '../includes/header_it.php'; 
?>
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
          
          <!-- (Qui ho omesso il testo lungo dei profili per brevità nel codice, ma TU LASCIALO pure nel file finale) -->
          <!-- ... TESTO DESCRIZIONE PROFILI A, B, C ... -->
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

          <!-- FEEDBACK MSG -->
          <?php echo $messaggio_feedback; ?>

          <!-- FORM -->
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
              <!-- accept=".pdf" aiuta l'utente a filtrare, ma il controllo vero lo facciamo in PHP -->
              <input type="file" id="cv" name="cv" accept=".pdf" required />
            </div>

            <button type="submit" class="btn btn-primary">
              Invia candidatura
            </button>
          </form>
        </section>
<?php include '../includes/footer_it.php'; ?>