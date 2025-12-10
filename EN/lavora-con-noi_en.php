<?php 
$path = "../";      // Siamo dentro una cartella, dobbiamo salire di un livello per trovare css e images
$page = "careers";    // Questo farà illuminare "Careers" nel menu

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

include '../includes/header_en.php'; // Notare ../ prima di includes
?>
        <section class="inner-hero fade-in">
          <div class="breadcrumb"><a href="../index_en.php">Home</a> / Careers</div>
          <h1 class="inner-title">Careers</h1>
        </section>

        <section class="content fade-in">
          <h2>Join the Swing:IT Team</h2>

          <p style="text-align: justify;">Join our <strong>team</strong> and become part of a <strong>young, dynamic, creative, and innovative organization</strong> that offers high-level expertise to achieve excellence in performance. If you are <strong>open-minded, proactive, flexible, enthusiastic, and autonomous in your work</strong>, you will find the ideal conditions here to develop your talent. You will have the opportunity to participate in Innovation Projects and operate in an international environment, collaborating with top ICT professionals.</p>
          <p style="text-align: justify;">Applications received will be stored in our database for six months to maximize their value for our projects. For this reason, please do not forget to express your consent to the processing of your personal data in accordance with D.Lgs. 196/2003.</p>
          <hr />
          <p> </p>
          <h5><strong>Active Selections</strong></h5>
          <p>For our Cross Reality (XR) projects, we are looking for collaborators with the following profiles:</p>
          <p><strong>Profile A: Senior Software Engineer</strong></p>
          <p>The professional profile sought, reporting to the Technical Coordinator, will have the following responsibilities:</p>
          <p>Actively contribute to drafting technical development specifications;<br />Develop, evolve, and maintain products, coordinating internal and external resources;<br />Ensure consistency and update technical documentation and manuals;<br />Collaborate with technical and administrative management on the design and implementation of new projects;</p>
          <p>Required qualifications:</p>
          <p>Master’s degree in Computer Science or Computer Engineering;<br />Several years of experience;<br />Knowledge of C# .Net and one among C++, C, Java;<br />Knowledge of SQL, php, CSS, JavaScript;<br />Good knowledge of English;<br />Willingness to travel occasionally in Europe for short periods.</p>
          <p>Preference will be given to candidates with experience in Unity3D and/or Unreal Engine, computer graphics, Virtual/Augmented Reality.</p>
          <p><b>Employment type</b>: permanent contract</p>
          <p><b>Compensation</b>: commensurate with experience and skills</p>
          <p><b>Workplace</b>: Catania</p>
          <p> </p>
          <p><strong>Profile B: Junior Software Engineer</strong></p>
          <p>The professional profile sought, reporting to the Team Leader, will have the following responsibilities:</p>
          <p>Contribute to drafting technical product documentation;<br />Develop, evolve, and maintain products in collaboration with the company team;<br />Support the ongoing innovation process within the company.</p>
          <p>Required qualifications:</p>
          <p>Bachelor’s or Master’s degree in Computer Science or Computer Engineering;<br />Knowledge of one or more among C# .Net, C++, C, Java;<br />Knowledge of SQL, php, CSS, JavaScript;<br />Good knowledge of English;<br />Willingness to travel occasionally in Europe for short periods.</p>
          <p>Preference will be given to candidates with knowledge of Unity3D and/or Unreal Engine, computer graphics, Virtual/Augmented Reality.</p>
          <p><b>Employment type</b>: permanent contract</p>
          <p><b>Compensation</b>: commensurate with skills</p>
          <p><b>Workplace</b>: Catania.</p>
          <p> </p>
          <p><strong>Profile C: Freelance Graphic Designer</strong></p>
          <p>The professional profile sought, reporting to the Team Leader, will have the following responsibilities:</p>
          <p>Create graphical content and models for our XR (Cross Reality) and Web solutions;<br />Contribute to the evolution of content and models in our products, collaborating with the company team;<br />Participate in the ongoing innovation process within the company.</p>
          <p>Required qualifications:</p>
          <p>Diploma and/or degree or studies in graphic design, communication design;<br />Knowledge of Adobe Creative Suite;<br />Knowledge of standard 3D graphic modeling tools (Blender, Maya, etc.);<br />Good knowledge of English is preferred.</p>
          <p>Additional qualities:</p>
          <p>Excellent creative and communication skills;<br />Proactivity and initiative;<br />Ability to work independently;<br />Customer orientation.</p>
          <p>Preference will be given to candidates with knowledge of Unity3D and/or Unreal Engine, Virtual/Augmented Reality.</p>
          <p><b>Employment type</b>: permanent contract or consultancy</p>
          <p><b>Compensation</b>: commensurate with skills</p>
          <p><b>Workplace</b>: Catania.</p>
          <p> </p>
          <p>If interested, send your CV with authorization to process personal data to: <strong>recruitment@softwareengineering.it</strong></p>
          <hr />
          <p> </p>
          <h5><strong>Spontaneous Applications</strong></h5>
          <p>If you did not find any job openings matching your experience and skills, please send your CV in European format to:</p>
          <p><a href="mailto:direzione@softwareengineering.it">direzione@softwareengineering.it</a></p>
          <hr />
          <p> </p>
          <h5><strong>Internships</strong></h5>
          <p style="text-align: justify;">Internships represent the main entry point for young people into the workforce and provide a highly formative and professional experience, preparing candidates for possible company integration. Over the years, Software Engineering Italia has welcomed many interns with diverse professional profiles and is proud to say that most of them have later become part of our team.</p>
          <p>If you wish to apply for an internship, please send your CV, expressing consent to the processing of personal data in accordance with D.Lgs. 196/2003, to:</p>
          <p><a href="mailto:stage@softwareengineering.it">stage@softwareengineering.it</a></p>

          <p>
            Send us your spontaneous application, describing your skills,
            interests, and areas you would like to work in. We consider junior and senior profiles in software development, 3D, applied research, infrastructure, and project management.
          </p>

          <form
            class="form"
            action="#"
            method="post"
            enctype="multipart/form-data"
          >
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

            <div class="form-row">
              <div class="form-group">
                <label for="ruolo">Role of interest</label>
                <input type="text" id="ruolo" name="ruolo" />
              </div>
              <div class="form-group">
                <label for="area">Area</label>
                <select id="area" name="area">
                  <option value="">Select</option>
                  <option value="dev">Software Development / XR</option>
                  <option value="3d">3D, Graphics, UX</option>
                  <option value="ai">AI, Data Science</option>
                  <option value="pm">Project / Product Management</option>
                  <option value="altro">Other</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="messaggio">Message / Presentation</label>
              <textarea id="messaggio" name="messaggio" required></textarea>
            </div>

            <div class="form-group">
              <label for="cv">Upload your CV (PDF, max 5MB)</label>
              <input type="file" id="cv" name="cv" accept=".pdf" />
            </div>

            <button type="submit" class="btn btn-primary">
              Submit Application
            </button>
          </form>
        </section>
<?php include '../includes/footer_en.php'; ?>