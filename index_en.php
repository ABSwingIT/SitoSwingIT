<?php 
$path = "./";       // Siamo nella root, quindi il percorso è corrente
$page = "home";     // Nome della pagina per attivare la classe 'active' nel menu
include 'includes/header_en.php'; 
?>
        <!-- HERO -->
        <section class="hero fade-in">
          <div>
            <div class="hero-badge">
              <span class="hero-dot"></span>
              <span>XR · AI · Cloud · Big Data</span>
            </div>
            <h1 class="hero-title">
              Immersive technologies for
              <span>truly connected experiences</span>
            </h1>
            <p class="hero-text" style="text-align:justify;">
              Swing:IT – Software Engineering Italia SRL designs and integrates solutions in virtual and extended reality, Artificial Intelligence, and cloud platforms to transform industrial processes, training, and research.
            </p>
            <p class="hero-sub" style="text-align:justify;">
              Innovation, visualization, and technology at the service of user experience.
            </p>
            <div class="hero-actions">
              <a href="<?php echo $path; ?>EN/chi-siamo_en.php" class="btn btn-primary"
                >About Us</a
              >
              <a href="<?php echo $path; ?>EN/contatti_en.php" class="btn btn-secondary"
                >Contacts</a
              >
            </div>
          </div>

          <div class="hero-visual">
            <img src="<?php echo $path; ?>images/logo-light.png" alt="Swing:IT logo" width="400px"/>
          </div>
        </section>

        <!-- AREAS OF ACTIVITY -->
        <section class="section fade-in">
          <div class="section-header">
            <div>
              <h2 class="section-title">Areas of Activity</h2>
              <p class="section-subtitle" style="text-align:justify;">
                From immersive environments design to cloud infrastructure management and data analysis, we support public bodies, companies, and research centers.
              </p>
            </div>
          </div>

          <div class="grid-4">
            <article class="card">
              <a href="<?php echo $path; ?>EN/tecnologie_en.php" class="no-highlight">
              <div class="card-icon">XR</div>
              <h3>XR Technologies</h3>
              <p style="text-align:justify;">
                Virtual and extended reality solutions for training, simulation, and digital twins.
              </p>
              </a>
            </article>
            <article class="card">
              <a href="<?php echo $path; ?>EN/tecnologie_en.php" class="no-highlight">
              <div class="card-icon">AI</div>
              <h3>AI Solutions</h3>
              <p style="text-align:justify;">
                Artificial Intelligence integrated into visualization workflows and decision-making processes.
              </p>
              </a>
            </article>
            <article class="card">
              <a href="<?php echo $path; ?>EN/tecnologie_en.php" class="no-highlight">
              <div class="card-icon">3D</div>
              <h3>3D Modeling</h3>
              <p style="text-align:justify;">
                3D pipelines for complex data, point clouds, CAD models, and urban scenarios.
              </p>
              </a>
            </article>
            <article class="card">
              <a href="<?php echo $path; ?>EN/tecnologie_en.php" class="no-highlight">
              <div class="card-icon">☁</div>
              <h3>Cloud &amp; Big Data</h3>
              <p style="text-align:justify;">
                Scalable infrastructures for streaming, storage, and analysis of large data volumes.
              </p>
              </a>
            </article>
          </div>
        </section>

        <!-- PROJECTS -->
        <section class="section fade-in">
          <div class="section-header">
            <div>
              <h2 class="section-title">Projects and Research</h2>
              <p class="section-subtitle" style="text-align:justify;">
                A selection of projects integrating XR, AI, 3D, and cloud technologies in healthcare, industry, and culture.
              </p>
            </div>
          </div>

          <div class="grid-3">
            <article class="card">
              <h3>AgeSense-AI</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/AGESENSEAI.png" alt="AGESENSEAI logo" width="300px"/></p>
              <p style="text-align:justify;">
                Research project on AI and virtual reality for cognitive assessment and support.
              </p>
              <div class="card-footer">
                <span class="link-inline">XR / AI Research</span>
                <a href="<?php echo $path; ?>EN/agesense-ai_en.php" class="link-inline"
                  >Discover More</a
                >
              </div>
            </article>

            <article class="card">
              <h3>ISIPHUR</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/ISIPHUR.png" alt="ISIPHUR logo" width="300px"/></p>
              <p style="text-align:justify;">
                Immersive environment for simulation of complex scenarios and analysis of heterogeneous data.
              </p>
              <div class="card-footer">
                <span class="link-inline">XR · Data</span>
                <a href="<?php echo $path; ?>EN/isiphur_en.php" class="link-inline"
                  >Discover More</a
                >
              </div>
            </article>

            <article class="card">
              <h3>CAT-Lab</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/CATLAB.png" alt="CATLAB logo" width="300px"/></p>
              <p style="text-align:justify;">
                Virtual lab for experimentation of new human-machine interfaces and 3D workflows.
              </p>
              <div class="card-footer">
                <span class="link-inline">XR Lab</span>
                <a href="<?php echo $path; ?>EN/cat-lab_en.php" class="link-inline"
                  >Discover More</a
                >
              </div>
            </article>

            <article class="card">
              <h3>Eureka3D-XR</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/EUREKA3DXR.png" alt="EUREKA3DXR logo" width="300px"/></p>
              <p style="text-align:justify;">
                XR infrastructure for valorization of cultural assets and 3D geographic datasets.
              </p>
              <div class="card-footer">
                <span class="link-inline">3D Culture</span>
                <a href="<?php echo $path; ?>EN/eureka3d-xr_en.php" class="link-inline"
                  >Discover More</a
                >
              </div>
            </article>

            <article class="card">
              <h3>VESPA 2.0</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/VESPA2.png" alt="VESPA2 logo" width="300px"/></p>
              <p style="text-align:justify;">
                High-immersion 3D VR system dedicated to cognitive assessment and rehabilitation.
              </p>
              <div class="card-footer">
                <span class="link-inline">Health XR</span>
                <a href="<?php echo $path; ?>EN/vespa-2-0_en.php" class="link-inline"
                  >Discover More</a
                >
              </div>
            </article>

            <article class="card">
              <h3>3DLAB</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/3DLAB.png" alt="3DLAB logo" width="300px"/></p>
              <p style="text-align:justify;">
                Platform for collaborative management and visualization of scientific and industrial 3D models.
              </p>
              <div class="card-footer">
                <span class="link-inline">3D Platform</span>
                <a href="<?php echo $path; ?>EN/3dlab-sicilia_en.php" class="link-inline"
                  >Discover More</a
                >
              </div>
            </article>

            <article class="card">
              <h3>SECESTA VIASAFE</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/SECESTA.png" alt="SECESTA logo" width="300px"/></p>
              <p style="text-align:justify;">
                Immersive solutions for operator safety and management of critical scenarios.
              </p>
              <div class="card-footer">
                <span class="link-inline">Safety XR</span>
                <a href="<?php echo $path; ?>EN/secesta-viasafe_en.php" class="link-inline"
                  >Discover More</a
                >
              </div>
            </article>

            <article class="card">
              <h3>GRIDCORE</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/GRIDCORE.png" alt="GRIDCORE logo" width="300px"/></p>
              <p style="text-align:justify;">
                Data-driven environment for analysis of complex infrastructures and digital twins.
              </p>
              <div class="card-footer">
                <span class="link-inline">Digital Twin</span>
                <a href="<?php echo $path; ?>EN/gridcore_en.php" class="link-inline"
                  >Discover More</a
                >
              </div>
            </article>

            <article class="card">
              <h3>EMSO-DEV</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/EMSODEV.png" alt="EMSODEV logo" width="300px"/></p>
              <p style="text-align:justify;">
                3D visualization tools and cloud services for large-scale environmental and marine data.
              </p>
              <div class="card-footer">
                <span class="link-inline">Env Data</span>
                <a href="<?php echo $path; ?>EN/emsodev_en.php" class="link-inline"
                  >Discover More</a
                >
              </div>
            </article>

            <article class="card">
              <h3>M3 Milano</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/METROMI.png" alt="M3MILANO logo" width="300px"/></p>
              <p style="text-align:justify;">
                Driverless video surveillance for Milan's Line 3.
              </p>
              <div class="card-footer">
                <span class="link-inline">Smart City</span>
                <a href="<?php echo $path; ?>EN/metromi_en.php" class="link-inline"
                  >Discover More</a
                >
              </div>
            </article>

            <article class="card">
              <h3>EarthServer</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/EARTHSERVER.png" alt="EARTHSERVER logo" width="300px"/></p>
              <p style="text-align:justify;">
                Cloud-native technologies for querying and visualizing large archives of 3D geospatial data.
              </p>
              <div class="card-footer">
                <span class="link-inline">GeoCloud</span>
                <a href="<?php echo $path; ?>EN/earth-server_en.php" class="link-inline"
                  >Discover More</a
                >
              </div>
            </article>

            <article class="card">
              <h3>VESPA</h3>
              <p style="text-align:center;"><img src="<?php echo $path; ?>images/VESPA.png" alt="VESPA logo" width="300px"/></p>
              <p style="text-align:justify;">
                VR platform for clinical protocols and advanced neuroscientific experiments.
              </p>
              <div class="card-footer">
                <span class="link-inline">Clinical VR</span>
                <a href="<?php echo $path; ?>EN/progetto-vespa_en.php" class="link-inline"
                  >Discover More</a
                >
              </div>
            </article>
          </div>
        </section>

        <!-- HIGHLIGHTED TECHNOLOGIES -->
        <section class="section fade-in">
          <div class="section-header">
            <div>
              <h2 class="section-title">Highlighted Technologies</h2>
              <p class="section-subtitle" style="text-align:justify;">
                An integrated ecosystem combining XR, web, AI, and cloud technologies to build consistent, secure, and scalable experiences.
              </p>
            </div>
          </div>

          <div class="tech-strip">
            <span class="tech-chip">XR</span>
            <span class="tech-chip">VR / AR</span>
            <span class="tech-chip">AI &amp; Machine Learning</span>
            <span class="tech-chip">Web &amp; API</span>
            <span class="tech-chip">Big Data</span>
            <span class="tech-chip">Cloud Computing</span>
            <span class="tech-chip">3D Modeling</span>
          </div>

          <div class="cta">
            <p>
              Want to discuss a specific use case or a research collaboration with Swing:IT?
            </p>
            <a href="<?php echo $path; ?>EN/contatti_en.php" class="btn btn-secondary"
              >Talk to the Team</a
            >
          </div>
        </section>
      
<?php include 'includes/footer_en.php'; ?>