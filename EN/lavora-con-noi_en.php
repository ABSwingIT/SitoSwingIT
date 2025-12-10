<?php 
$path = "../";      // Siamo dentro una cartella, dobbiamo salire di un livello per trovare css e images
$page = "careers";    // Questo farà illuminare "Careers" nel menu

// Variabili per gestire il popup
$show_success_modal = false;
$messaggio_feedback = ""; // Lo usiamo ancora per gli errori (es. file troppo grande)

// --- CONFIGURAZIONE RECAPTCHA ---
// INCOLLA QUI LA TUA "CHIAVE SEGRETA" (SECRET KEY)
$recaptcha_secret = "6LejfScsAAAAAL9ve-eqzDJGkZufK5Lfpz5gY04D";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. VERIFICA CAPTCHA
    $recaptcha_response = $_POST['g-recaptcha-response'];
    $verify_url = "https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$recaptcha_response}";
    
    $captcha_verify = file_get_contents($verify_url);
    $captcha_data = json_decode($captcha_verify);

    if (!$captcha_data->success) {
         $messaggio_feedback = '<div style="background: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px;">Devi cliccare su "Non sono un robot" prima di inviare.</div>';
    } else {
        // CAPTCHA OK - PROCEDIAMO
        
        $nome = htmlspecialchars(trim($_POST['nome']));
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $ruolo = htmlspecialchars(trim($_POST['ruolo']));
        $area = htmlspecialchars(trim($_POST['area']));
        $messaggio_utente = htmlspecialchars(trim($_POST['messaggio']));

        $to = "angelo.belfiore.seit@gmail.com"; 
        $subject = "Nuova candidatura da: " . $nome;

        // Gestione Allegato
        $allegato_ok = false;
        $file_content = ""; $file_name = ""; $file_type = "";

        if (isset($_FILES['cv']) && $_FILES['cv']['error'] == UPLOAD_ERR_OK) {
            $file_tmp_name = $_FILES['cv']['tmp_name'];
            $file_name = basename($_FILES['cv']['name']);
            $file_size = $_FILES['cv']['size'];
            $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            
            if ($ext == 'pdf' && $file_size < 5000000) {
                $handle = fopen($file_tmp_name, "rb");
                $content = fread($handle, $file_size);
                fclose($handle);
                $file_content = chunk_split(base64_encode($content));
                $allegato_ok = true;
            } else {
                $messaggio_feedback = '<div style="background: #fff3cd; color: #856404; padding: 15px; margin-bottom: 20px;">Il file deve essere PDF e max 5MB.</div>';
            }
        } elseif (isset($_FILES['cv']) && $_FILES['cv']['error'] != UPLOAD_ERR_NO_FILE) {
             $messaggio_feedback = '<div style="background: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px;">Errore caricamento file.</div>';
        }

        // Costruzione Mail Multipart
        if ($messaggio_feedback == "") {
            $boundary = md5(time());
            $headers = "From: angelo.belfiore.seit@gmail.com\r\n";
            $headers .= "Reply-To: $email\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary=\"" . $boundary . "\"\r\n";

            $body = "--" . $boundary . "\r\n";
            $body .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
            $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
            $body .= "Nuova candidatura ricevuta.\n\nNome: $nome\nEmail: $email\nRuolo: $ruolo\nArea: $area\n\nMessaggio:\n$messaggio_utente\n\n";
            
            if ($allegato_ok) {
                $body .= "--" . $boundary . "\r\n";
                $body .= "Content-Type: application/pdf; name=\"" . $file_name . "\"\r\n";
                $body .= "Content-Disposition: attachment; filename=\"" . $file_name . "\"\r\n";
                $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
                $body .= $file_content . "\r\n";
            }
            $body .= "--" . $boundary . "--";

            if (mail($to, $subject, $body, $headers)) {
                $show_success_modal = true;
            } else {
                $messaggio_feedback = '<div style="background: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px;">Errore tecnico invio.</div>';
            }
        }
    }
}

include '../includes/header_en.php'; // Notare ../ prima di includes
?>

<!-- SCRIPT GOOGLE -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<style>
  .modal-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; justify-content: center; align-items: center; z-index: 10000; backdrop-filter: blur(5px); }
  .modal-box { background: #111827; border: 1px solid rgba(94, 170, 222, 0.5); padding: 2rem; border-radius: 16px; text-align: center; max-width: 400px; width: 90%; box-shadow: 0 20px 60px rgba(0,0,0,0.5); animation: popUp 0.3s ease-out forwards; }
  .modal-icon { font-size: 3rem; margin-bottom: 1rem; display: block; }
  .modal-title { color: #f9fafb; font-size: 1.5rem; margin-bottom: 0.5rem; }
  .modal-text { color: #9ca3af; margin-bottom: 1.5rem; }
  @keyframes popUp { from { transform: scale(0.8); opacity: 0; } to { transform: scale(1); opacity: 1; } }
</style>

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
              <input type="file" id="cv" name="cv" accept=".pdf" required />
            </div>

            <!-- RECAPTCHA QUI -->
            <div class="form-group" style="margin-bottom: 1.5rem;">
                <!-- INCOLLA QUI LA TUA "CHIAVE DEL SITO" (SITE KEY) -->
                <div class="g-recaptcha" data-sitekey="6LejfScsAAAAAGyn4t23--vqszjPly9Xj9BHwwny"></div>
            </div>

            <button type="submit" class="btn btn-primary">
              Submit Application
            </button>
          </form>
        </section>

<!-- STRUTTURA DEL MODALE NASCOSTO -->
<div id="successModal" class="modal-overlay">
  <div class="modal-box">
    <div class="modal-icon">✅</div>
    <h3 class="modal-title">Application Sent!</h3>
    <p class="modal-text">
        Thank you for contacting us.<br>
        We have received your application and CV.<br>
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
        // Opzionale: pulisce il form ricaricando la pagina pulita
        window.location.href = window.location.href; 
    }

    // Se PHP dice che l'invio è avvenuto ($show_success_modal è true), apri il modale
    <?php if($show_success_modal): ?>
        openModal();
    <?php endif; ?>
</script>

<?php include '../includes/footer_en.php'; ?>