<?php 
$path = "../";      // Siamo dentro una cartella, dobbiamo salire di un livello per trovare css e images
$page = "karriere";    // Questo farà illuminare "Karriere" nel menu

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

include '../includes/header_de.php'; // Notare ../ prima di includes
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
          <div class="breadcrumb"><a href="../index_de.php">Home</a> / Karriere</div>
          <h1 class="inner-title">Karriere</h1>
        </section>

        <section class="content fade-in">
          <h2>Werden Sie Teil des Teams Swing:IT</h2>
          
          <p style="text-align: justify;">Werden Sie Teil unseres <strong>Teams</strong> und gestalten Sie mit uns eine <strong>junge, dynamische, kreative und innovative Organisation</strong>, die hochwertige Kompetenzen bietet, um exzellente Leistungen zu erzielen. Wenn Sie eine <strong>offene, unternehmungslustige, flexible und begeisterte Person</strong> sind, die proaktiv und eigenständig arbeitet, finden Sie bei uns die idealen Bedingungen, um Ihr Talent zu entfalten. Sie erhalten die Möglichkeit, an Innovationsprojekten mitzuwirken und in einem internationalen Umfeld mit den besten IT-Fachleuten zusammenzuarbeiten.</p>
          <p style="text-align: justify;">Die eingereichten Bewerbungen werden für einen Zeitraum von sechs Monaten in unserer Datenbank archiviert, um sie optimal für unsere Projekte nutzen zu können. Aus diesem Grund vergessen Sie bitte nicht, Ihre Einwilligung zur Verarbeitung personenbezogener Daten gemäß D. Lgs. 196/2003 zu geben.</p>
          <hr />
          <p> </p>
          <h5><strong>Aktuelle Ausschreibungen</strong></h5>
          <p>Für unsere Cross-Reality-(XR-)Projekte suchen wir Mitarbeiter mit folgenden Profilen:</p>
          <p><strong>Profil A: Senior Software Engineer</strong></p>
          <p>Die gesuchte Fachkraft, die dem technischen Leiter unterstellt ist, übernimmt folgende Aufgaben:</p>
          <p>Aktive Mitwirkung bei der Erstellung technischer Spezifikationen;<br />Entwicklung, Weiterentwicklung und Wartung der Produkte unter Koordination interner und externer Ressourcen;<br />Sicherstellung der Konsistenz und Aktualisierung der technischen Dokumentation und Handbücher;<br />Zusammenarbeit mit technischem und administrativem Management bei Design und Umsetzung neuer Projekte;</p>
          <p>Folgende Voraussetzungen werden für die Stelle benötigt:</p>
          <p>Masterabschluss in Informatik oder Informatik-Ingenieurwesen;<br />Mehrijährige Erfahrung;<br />Kenntnisse in C# .Net sowie in einer der Sprachen C++, C, Java;<br />Kenntnisse in SQL, php, CSS, Javascript;<br />Gute Englischkenntnisse;<br />Gelegentliche Reisebereitschaft nach Europa für kurze Zeit.</p>
          <p>Wünschenswert ist Erfahrung in Unity3D und/oder Unreal Engine, Computergrafik, Virtual/Augmented Reality.</p>
          <p><b>Art der Anstellung</b>: Festanstellung</p>
          <p><b>Gehalt</b>: abhängig von Erfahrung und Kompetenzen</p>
          <p><b>Arbeitsort</b>: Catania</p>
          <p> </p>
          <p><strong>Profil B: Junior Software Engineer</strong></p>
          <p>Die gesuchte Fachkraft, die dem Teamleiter unterstellt ist, übernimmt folgende Aufgaben:</p>
          <p>Mitwirkung bei der Erstellung technischer Dokumentation;<br />Entwicklung, Weiterentwicklung und Wartung der Produkte in Zusammenarbeit mit dem Unternehmens-Team;<br />Begleitung des kontinuierlichen Innovationsprozesses im Unternehmen.</p>
          <p>Folgende Voraussetzungen werden für die Stelle benötigt:</p>
          <p>Bachelor- oder Masterabschluss in Informatik oder Informatik-Ingenieurwesen;<br />Kenntnisse in einer oder mehreren der Sprachen C# .Net, C++, C, Java;<br />Kenntnisse in SQL, php, CSS, Javascript;<br />Gute Englischkenntnisse;<br />Gelegentliche Reisebereitschaft nach Europa für kurze Zeit.</p>
          <p>Wünschenswert ist Kenntnis von Unity3D und/oder Unreal Engine, Computergrafik, Virtual/Augmented Reality.</p>
          <p><b>Art der Anstellung</b>: Festanstellung</p>
          <p><b>Gehalt</b>: abhängig von Kompetenzen</p>
          <p><b>Arbeitsort</b>: Catania.</p>
          <p> </p>
          <p><strong>Profil C: Freelance Graphic Designer</strong></p>
          <p>Die gesuchte Fachkraft, die dem Teamleiter unterstellt ist, übernimmt folgende Aufgaben:</p>
          <p>Erstellung grafischer Inhalte und Modelle für unsere XR-(Cross-Reality-) und Web-Lösungen;<br />Mitwirkung an der Weiterentwicklung von Inhalten und Modellen in unseren Produkten in Zusammenarbeit mit dem Unternehmens-Team;<br />Beteiligung am kontinuierlichen Innovationsprozess im Unternehmen.</p>
          <p>Folgende Voraussetzungen werden für die Stelle benötigt:</p>
          <p>Abschluss in Grafikdesign, Kommunikationsdesign oder entsprechendem Studium;<br />Kenntnisse der Adobe Creative Suite;<br />Kenntnisse der gängigen 3D-Modellierungswerkzeuge (Blender, Maya, etc.);<br />Gute Englischkenntnisse sind wünschenswert.</p>
          <p>Ergänzend sind gefragt:</p>
          <p>Ausgezeichnete kreative und kommunikative Fähigkeiten;<br />Proaktivität und Eigeninitiative;<br />Fähigkeit, eigenständig zu arbeiten;<br />Kundenorientierung.</p>
          <p>Wünschenswert ist Kenntnis von Unity3D und/oder Unreal Engine, Virtual/Augmented Reality.</p>
          <p><b>Art der Anstellung</b>: Festanstellung oder Beratung</p>
          <p><b>Gehalt</b>: abhängig von Kompetenzen</p>
          <p><b>Arbeitsort</b>: Catania.</p>
          <p> </p>
          <p>Interessierte Bewerber senden bitte den Lebenslauf mit Einwilligung zur Datenverarbeitung an folgende E-Mail-Adresse: <strong>recruitment@softwareengineering.it</strong></p>
          <hr />
          <p> </p>
          <h5><strong>Initiativbewerbungen</strong></h5>
          <p>Falls Sie keine passende Stellenausschreibung für Ihre Erfahrung und Qualifikation gefunden haben, senden Sie trotzdem Ihren Lebenslauf im europäischen Format an folgende Adresse:</p>
          <p><a href="mailto:direzione@softwareengineering.it">direzione@softwareengineering.it</a></p>
          <hr />
          <p> </p>
          <h5><strong>Praktika</strong></h5>
          <p style="text-align: justify;">Ein Praktikum ist der wichtigste Einstieg für junge Menschen in die Arbeitswelt und eine besonders formative und berufsvorbereitende Erfahrung, die auf eine mögliche spätere Einstellung im Unternehmen vorbereitet. Software Engineering Italia hat im Laufe der Jahre zahlreiche Praktikanten mit unterschiedlichen Profilen aufgenommen und ist stolz darauf, dass die meisten von ihnen später Teil unseres Teams wurden.</p>
          <p>Falls Sie sich für ein Praktikum bewerben möchten, senden Sie Ihren Lebenslauf mit Einwilligung zur Verarbeitung personenbezogener Daten gemäß D. Lgs. 196/2003 an folgende Adresse:</p>
          <p><a href="mailto:stage@softwareengineering.it">stage@softwareengineering.it</a></p>
          
          <p>
            Senden Sie uns Ihre Initiativbewerbung mit Beschreibung Ihrer Kompetenzen,
            Interessen und Bereichen, in denen Sie arbeiten möchten. Wir suchen Profile
            für Softwareentwicklung, 3D, angewandte Forschung,
            Infrastrukturen und Projektmanagement.
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
                <label for="nome">Vor- und Nachname</label>
                <input type="text" id="nome" name="nome" required />
              </div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" required />
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="ruolo">Gewünschte Position</label>
                <input type="text" id="ruolo" name="ruolo" />
              </div>
              <div class="form-group">
                <label for="area">Bereich</label>
                <select id="area" name="area">
                  <option value="">Auswählen</option>
                  <option value="dev">Softwareentwicklung / XR</option>
                  <option value="3d">3D, Grafik, UX</option>
                  <option value="ai">KI, Data Science</option>
                  <option value="pm">Projekt-/Produktmanagement</option>
                  <option value="altro">Sonstiges</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="messaggio">Nachricht / Vorstellung</label>
              <textarea id="messaggio" name="messaggio" required></textarea>
            </div>

            <div class="form-group">
              <label for="cv">Laden Sie Ihren Lebenslauf hoch (PDF, max 5MB)</label>
              <input type="file" id="cv" name="cv" accept=".pdf" />
            </div>

            <button type="submit" class="btn btn-primary">
              Bewerbung absenden
            </button>
          </form>
        </section>

<!-- STRUTTURA DEL MODALE NASCOSTO -->
<div id="successModal" class="modal-overlay">
  <div class="modal-box">
    <div class="modal-icon">✅</div>
    <h3 class="modal-title">Bewerbung abgeschickt!</h3>
    <p class="modal-text">
        Vielen Dank für Ihre Kontaktaufnahme.<br>
        Wir haben Ihre Bewerbung und Ihren Lebenslauf erhalten.<br>
        Wir werden Ihnen so schnell wie möglich antworten.
    </p>
    <button class="btn btn-primary" onclick="closeModal()">Schließen</button>
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

<?php include '../includes/footer_de.php'; ?>
