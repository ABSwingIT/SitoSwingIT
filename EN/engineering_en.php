<?php 
$path = "../";      // Siamo dentro una cartella, dobbiamo salire di un livello per trovare css e images
$page = "engineering";    // Questo farà illuminare "Engineering" nel menu
include '../includes/header_en.php'; // Notare ../ prima di includes
?>
        <section class="inner-hero fade-in">
          <div class="breadcrumb"><a href="../index_en.php">Home</a> / Engineering</div>
          <h1 class="inner-title">Engineering</h1>
          <p class="inner-subtitle">
            We design and develop software solutions and digital infrastructures that integrate XR, AI, web, and cloud technologies, covering the entire project lifecycle.
          </p>
          <p style="text-align: center;"><img src="../images/engineering.png" alt="engineering" width="400px" /></p>
        </section>

        <section class="content fade-in">
          <div class="content-grid">
            <div>
              <p style="text-align: justify;">
                Swing:IT offers industrial automation services such as Manufacturing Intelligence, App Factory Automation, SCADA systems, and SECS & GEM solutions for semiconductor industries, automotive, pharmaceutical companies, and bio-medicine sectors.
                Swing:It provides support for production plants based on assembly lines, suspended transport systems, etc., through applications, web 2.0 solutions, and mobile platforms (Android OS).
                Our solutions are based on models and technologies from ErgoTech Systems, Los Alamos – NM – USA. Visit [www.ergotech.com](https://www.ergotech.com) for more details.
                The company operates in sustainable mobility, offering solutions for Metro Railways and monorails. Special emphasis is placed on driverless solutions, monitoring and control of lines, signaling, and remote sensing. The company developed the TVCC service and supported the operation of Line 3 of the Milan Metro.
              </p>
            </div>

            <aside class="sidebar-card">
              <h2>Our Approach</h2>
              <ul>
                <li>Agile methodologies and iterative prototyping cycles.</li>
                <li>Stakeholder involvement with periodic demos and pilot environments.</li>
                <li>Technical documentation and operational handbooks to support internal teams.</li>
              </ul>
            </aside>
          </div>
        </section>
<?php include '../includes/footer_en.php'; ?>
