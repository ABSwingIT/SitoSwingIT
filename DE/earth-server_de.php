<?php 
$path = "../";      // Siamo dentro una cartella, dobbiamo salire di un livello per trovare css e images
$page = "forschung";    // Questo farà illuminare "R&E" nel menu
include '../includes/header_de.php'; // Notare ../ prima di includes
?>
        <section class="inner-hero fade-in">
          <div class="breadcrumb"><a href="../index_de.php">Home</a> / <a href="ricerca-innovazione_de.php">Forschung und Innovation</a> / EarthServer</div>
          <h1 class="inner-title">EarthServer</h1>
        </section>

        <section class="content fade-in">
          <div class="iub_header">
            <p style="text-align: center;"><img src="../images/EARTHSERVER.png" alt="EARTHSERVER" class="wp-image-1868" style="width:400px"/></p>
            <p style="text-align: center;"><strong>Zum <a href="http://www.earthserver.eu/" target="_blank" rel="noopener noreferrer">Projekt-Website</a></strong></p>
            <p style="text-align: justify;">Das Projekt <strong>EarthServer</strong> hat Open Access etabliert und spezialisierte Analytics für extrem große Earth Science-Daten auf der Basis und durch Erweiterung moderner Array-Datenbank-Technologien bereitgestellt.</p>
            <p style="text-align: justify;">Das Projekt EarthServer hat typische Datenbank-Query-Sprachen als Client/Server-Schnittstellen verwendet, um <strong>barrierefreie "Mix &amp; Match"-Zugriffe</strong> auf mehrdimensionale, mehrquellige, raum-zeitliche Daten ohne Einschränkung der physischen Größe zu ermöglichen, kurz "<strong>Big Earth Data Analytics</strong>" genannt. Dies basiert auf offenen Standards von OGC WCPS (auch bekannt als "XQuery on raster data") und W3C XQuery. EarthServer kombiniert beides und erreicht so eine enge Integration von Daten und Metadaten. Außerdem wurde das <strong>Rasdaman Array Database System</strong> durch neue, raum-zeitliche Datentypen <strong>Coverage</strong> erweitert. Auf der Serverseite sicherten extrem effiziente Optimierungen, wie parallele und verteilte Query-Verarbeitung, die Skalierbarkeit bis hin zu Exabyte.</p>
            <p style="text-align: justify;">Sechs <strong>Lighthouse-Anwendungen</strong>, jede mit über 100 TB Daten, haben die Machbarkeit des gewählten Ansatzes demonstriert. Die Erfahrungen wurden in den Standardisierungsprozess für die Weiterentwicklung der OGC-Spezifikationen eingebracht.</p>
            <p style="text-align: justify;">Im Bereich Forschung und Technologieentwicklung hat EarthServer eine neue Open-Source-Client- und Server-Technologie entwickelt, die sich als skalierbar bis zu Exabyte erwiesen hat, basierend auf verteilter Verarbeitung, Supercomputing und Cloud-Virtualisierung. Die Implementierungen basierten auf dem verfügbaren rasdaman Big Data Analytics Server. Swing-IT war Subunternehmer im Rahmen von WP350 – Skalierbarkeit und WP360 – Client.</p>
          </div>
        </section>
<?php include '../includes/footer_de.php'; ?>
