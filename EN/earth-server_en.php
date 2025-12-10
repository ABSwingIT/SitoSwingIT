<?php 
$path = "../";      // Siamo dentro una cartella, dobbiamo salire di un livello per trovare css e images
$page = "R&I";    // Questo farà illuminare "R&I" nel menu
include '../includes/header_en.php'; // Notare ../ prima di includes
?>
        <section class="inner-hero fade-in">
          <div class="breadcrumb"><a href="../index_en.php">Home</a> / <a href="ricerca-innovazione_en.php">Research and Innovation</a> / Earth Server</div>
          <h1 class="inner-title">Earth Server</h1>
        </section>

        <section class="content fade-in">
          <div class="iub_header">
            <p style="text-align: center;">
              <img src="../images/EARTHSERVER.png" alt="EARTHSERVER" class="wp-image-1868" style="width:400px"/>
            </p>
            <p style="text-align: center;"><strong>Visit the <a href="http://www.earthserver.eu/" target="_blank" rel="noopener noreferrer">Project Website</a></strong></p>
            <p style="text-align: justify;">
              The <strong>EarthServer</strong> project established Open Access and provided specialized Analytics on extremely large Earth Science Data, building upon and extending cutting-edge Array Database technologies.
            </p>
            <p style="text-align: justify;">
              EarthServer used typical database query languages and client/server interfaces to enable <strong>"mix &amp; match" access</strong> to multi-dimensional, multi-source spatio-temporal data, without limitations related to physical size, briefly defined as "<strong>Big Earth Data Analytics</strong>". These are based on open standards such as OGC WCPS (known as "XQuery on raster data") and W3C XQuery. EarthServer combines both, achieving tight integration between data and metadata. Additionally, the <strong>Rasdaman Array Database System</strong> was extended with new spatio-temporal <strong>Coverage</strong> data types. On the server side, highly efficient optimizations, such as parallel and distributed query processing, ensured scalability up to Exabytes.
            </p>
            <p style="text-align: justify;">
              Six <strong>Lighthouse Applications</strong>, each with over 100 TB of data, demonstrated the feasibility of the approach. The experience gained was fed back into the standardization process to advance OGC specifications.
            </p>
            <p style="text-align: justify;">
              In Research and Technology Development activities, EarthServer created a new open-source client and server technology, proven to scale to Exabytes, based on distributed processing, supercomputing, and cloud virtualization. Implementations were based on the available rasdaman Big Data Analytics server. Swing:IT was a subcontractor within WP350 - Scalability and WP360 - Client.
            </p>
          </div>
        </section>
<?php include '../includes/footer_en.php'; ?>
