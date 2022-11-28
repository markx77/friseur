<!DOCTYPE html>
<html lang="de">
  <head>
    <!-- Title -->
    <title>HAIRLOUNGE Jane Laurenz</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/schriften_lokal.css">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-line/css/simple-line-icons.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css">

    <!-- CSS Template -->
    <link rel="stylesheet" href="assets/css/styles.op-spa.css?id=<?php echo time(); ?>">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css?id=<?php echo time(); ?>">
	<link href="assets/css/ie_map.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/map.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/openlayers/2.13.1/OpenLayers.js"></script>
		<script type="text/javascript" src="https://www.openstreetmap.org/openlayers/OpenStreetMap.js"></script>
		<script type="text/javascript" src="assets/js/tom.js"></script>
		<script type="text/javascript">
//<![CDATA[

var map;
var layer_mapnik;
var layer_tah;
var layer_markers;

function drawmap() {
    // Popup und Popuptext mit evtl. Grafik
    var popuptext="<font color=\"black\"><b>HAIRLOUNGE Jane Laurenz</b><br>Johann-Sebastian-Bach-Str. 4<br>09648 Mittweida<p></p></font>";

    OpenLayers.Lang.setCode('de');

    // Position und Zoomstufe der Karte
    var lon = 12.97910;
    var lat = 50.98349;
    var zoom = 16;

    map = new OpenLayers.Map('map2', {
        projection: new OpenLayers.Projection("EPSG:900913"),
        displayProjection: new OpenLayers.Projection("EPSG:4326"),
        controls: [
            new OpenLayers.Control.Navigation(),
            new OpenLayers.Control.LayerSwitcher(),
            new OpenLayers.Control.PanZoomBar()],
        maxExtent:
            new OpenLayers.Bounds(-20037508.34,-20037508.34,
                                    20037508.34, 20037508.34),
        numZoomLevels: 18,
        maxResolution: 156543,
        units: 'meters'
    });

    layer_mapnik = new OpenLayers.Layer.OSM.Mapnik("Mapnik");
    layer_markers = new OpenLayers.Layer.Markers("Address", { projection: new OpenLayers.Projection("EPSG:4326"),
    	                                          visibility: true, displayInLayerSwitcher: false });

    map.addLayers([layer_mapnik, layer_markers]);
    jumpTo(lon, lat, zoom);

    // Position des Markers
    addMarker(layer_markers, 12.97910, 50.98349);

}

//]]>
    </script>
  </head>

  <body onload="drawmap();">

	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Impressum / Datenschutz</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Kontakt

﻿
<br><br>
Jane Laurenz<br>
Hairlounge Jane Laurenz<br>
Weberstraße 17<br>
09648 Mittweida﻿
<br><br>
Telefon: 03727/998 333 6<br><br>

E-Mail: Kontakt@Hairlounge-Jane-Laurenz.de<br><br>



UmStNr.:<br>

222/243/01557<br><br>



USt-IdNr.:<br>

47 916 087 530<br><br>



Angaben gemäß § 5 TMG:<br><br>

Jane Laurenz<br>
Hairlounge Jane Laurenz<br>
Weberstraße 17<br>
09648 Mittweida<br><br>



Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV:<br><br>

Jane Laurenz<br>
Hairlounge Jane Laurenz<br>
Weberstraße 17<br>
09648 Mittweida<br><br>



Haftungsausschluss:<br><br>

﻿Haftung für Inhalte<br><br>

Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte können wir jedoch keine Gewähr übernehmen. Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.<br><br>



Haftung für Links<br><br>

Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.<br><br>



Urheberrecht<br><br>

Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.
<br><br>


Datenschutzerklärung<br><br>

Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder eMail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben.<br><br>

Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich.<br><br>

Der Nutzung von im Rahmen der Impressumspflicht veröffentlichten Kontaktdaten durch Dritte zur Übersendung von nicht ausdrücklich angeforderter Werbung und Informationsmaterialien wird hiermit ausdrücklich widersprochen. Die Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte im Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-Mails, vor.


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
      </div>
    </div>
  </div>
</div>
    <main>
      <!-- Header -->
      <header id="js-header" class="u-header u-header--sticky-top u-header--change-appearance g-z-index-9999"
              data-header-fix-moment="100">
        <div class="light-theme u-header__section g-transition-0_3 g-py-6 g-py-14--md"
             data-header-fix-moment-exclude="light-theme g-py-14--md"
             data-header-fix-moment-classes="dark-theme u-shadow-v27 g-bg-white g-py-11--md" style="background-color: rgba(255, 255, 255, 0.7);">
          <nav class="navbar navbar-expand-lg g-py-0">
            <div class="container g-pos-rel">
              <!-- Logo -->
              <a href="#" class="navbar-brand u-header__logo">
                <img class="u-header__logo-img u-header__logo-img--main d-block g-width-60" src="assets/jbilder/logo_white.png" alt="Logo"
                     data-header-fix-moment-exclude="d-block"
                     data-header-fix-moment-classes="d-none">

                <img class="u-header__logo-img u-header__logo-img--main d-none g-width-60" src="assets/jbilder/logo_white.png" alt="Logo"
                     data-header-fix-moment-exclude="d-none"
                     data-header-fix-moment-classes="d-block">
              </a>
              <!-- End Logo -->

              <!-- Navigation -->
              <div class="collapse navbar-collapse align-items-center flex-sm-row" id="navBar">
                <ul id="js-scroll-nav" class="navbar-nav text-uppercase g-font-weight-700 g-font-size-15 g-pt-20 g-pt-0--lg ml-auto">
                  <li class="nav-item g-mr-12--lg g-mb-7 g-mb-0--lg active">
                    <a href="#home" class="nav-link p-0">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item g-mx-12--lg g-mb-7 g-mb-0--lg">
                    <a href="#service" class="nav-link p-0">Service</a>
                  </li>
				  <li class="nav-item g-mx-12--lg g-mb-7 g-mb-0--lg">
                    <a href="#leistungen" class="nav-link p-0">Leistungen</a>
                  </li>
                  <li class="nav-item g-mx-12--lg g-mb-7 g-mb-0--lg">
                    <a href="#team" class="nav-link p-0">Team</a>
                  </li>
                  <li class="nav-item g-mx-12--lg g-mb-7 g-mb-0--lg">
                    <a href="#contact" class="nav-link p-0">Kontakt</a>
                  </li>
                  <li class="nav-item g-ml-12--lg">
                    <a href="#products" class="nav-link p-0" data-toggle="modal" data-target="#exampleModalCenter">Impressum / Datenschutz</a>
                  </li>
                  <!--<li class="nav-item g-ml-12--lg">
                    <a href="#contact" class="nav-link p-0">Contact</a>
                  </li>-->
                </ul>
              </div>
              <!-- End Navigation -->

              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-20 g-right-0" type="button"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span class="hamburger hamburger--slider">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
              </button>
              <!-- End Responsive Toggle Button -->
            </div>
          </nav>
        </div>
      </header>
      <!-- End Header -->
      

      <!-- Section Content -->
      <section id="home" class="u-bg-overlay g-height-100vh g-min-height-600 g-bg-img-hero" style="background-image: url(assets/jbilder/header_team.jpg);">
        <div class="u-bg-overlay__inner g-absolute-centered--y w-100">
          <div class="container text-center g-max-width-750" style="background-color: rgba(100,100,100,0.5);">
            <h3 class="d-inline-block text-uppercase g-font-weight-700 g-font-size-22 g-color-white g-brd-bottom g-brd-3 g-brd-primary g-mb-10" style="text-shadow: 2px 2px 4px #333;">Ihre erste Anlaufstelle in Sachen Haare</h3>
            <h1 class="g-line-height-1_5 g-font-weight-700 g-font-size-50 g-color-white g-mb-15" style="">Herzlich Willkommen in der HAIRLOUNGE!</h1>
			<p style="color:#FFFFFF;">Mo. 12-18 Uhr | Di.-Fr. 9-18 Uhr | Sa. 8-13 Uhr | oder vereinbaren Sie telefonisch einen Termin: <a href="tel:+4937279983336" style="color:#FFFFFF;">03727 / 998 333 6</a></p>
            <!--<h3 class="text-uppercase g-font-weight-700 g-font-size-35 g-color-white g-mb-35">30% off</h3>
            <a class="btn btn-md text-uppercase u-btn-primary g-font-weight-700 g-font-size-11 g-brd-none rounded-0 g-py-10 g-px-25" href="#">Learn more</a>-->
          </div>
        </div>
      </section>
      <!-- End Section Content -->

      <!-- Section Content -->
      <section>
        <div class="container-fluid px-0">
          <div class="row no-gutters">
            <div class="col-md-6 g-bg-img-hero g-min-height-400" style="background-image: url(assets/jbilder/studio2a.jpg);"></div>

            <div class="col-md-6 d-flex align-items-center text-center g-pa-50">
              <div class="w-100">
                <div class="g-mb-25">
                  <h4 class="g-font-weight-700 g-font-size-30 g-theme-h-v1 g-color-primary g-mb-25">DIE HAIRLOUNGE</h4>
                </div>

                <p class="g-mb-35"> Mit der Eröffnung der Hairlounge wurde ein völlig neuer Kreativraum in der Altstadt von Mittweida geschaffen. Hier, wo zukünftig nicht nur trendige Frisuren kreiert werden, erfährt ihr Haar eine Behandlung, bei der durch Analyse und mittels einer typgerechten Beratung, sie eine fachgerechte Ausführung erleben werden, die ihr Haar in klassische und modisch aktuelle Frisuren verwandelt. Auf den Einsatz von Friseurexklusiven Produkten, zur gesunden und schonenden Behandlung des Haares, von der Kopfhaut bis in die Spitzen, wird in der Hairlounge besonderen Wert gelegt. Über ein weites Spektrum von Servicedienstleistungen rund um ihr Haar möchten sie die folgenden Seiten informieren.<br><br>



Ständig auf der Suche, nach den aktuellsten Trends und Schnitten sowie Pflegeanwendungen, bieten wir ihnen nur das Beste - Weil das Beste für ihr Haar gerade gut genug ist.<br><br>



Überzeugen sie sich selbst und verwöhnen sie ihr Haar, in der HAIRLOUNGE Jane Laurenz in der Altstadt von Mittweida.<br><br>Der Umbau und die Einrichtung wurden durch den europäischen Fonds für regionale Entwicklung mitfinanziert.</p>
                <img src="assets/img/europa.jpg" style="width:320px;max-width:100%;">
              </div>
            </div>
          </div>

          <div class="row no-gutters" id="service">
            <div class="col-md-12 col-xl-6 d-flex align-items-center text-center g-pa-50">
              <div class="w-100">
                <div class="g-mb-25">
                  <h4 class="g-font-weight-700 g-font-size-30 g-theme-h-v1 g-color-primary g-mb-25">SERVICE</h4>
                  <p><strong>Preise aktuell zuzüglich 4,00 € Hygienepauschale pro Dienstleistung.</strong></p>
                </div>

               <table class="table table-striped w-50" style="float:left;">
				  <thead>
					<tr>
					  <th colspan="2">LADIES</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td>Wohlfühlhaarwäsche - Haarschnitt - Frisur *</td>
					  <td>42,00 €</td>
					</tr>
					<tr>
					 <td>Wohlfühlhaarwäsche - Frisur *</td>
					  <td>29,00 €</td>
					</tr>
					<tr>
					  <td>Hochsteckfrisur je angefangene 1/4 h *</td>
					  <td>12,50 €</td>
					</tr>
					<tr>
					  <td>Kopfmassage</td>
					  <td>9,00 €</td>
					</tr>
					<tr>
					  <td>Ponyschnitt</td>
					  <td>9,00 €</td>
					</tr>
					<tr>
					  <td>* Langhaaraufschlag</td>
					  <td>6,00 €</td>
					</tr>
					<tr>
					  <td>Spitzenversiegelung mit der "Heißen Schere"</td>
					  <td>10,00 €</td>
					</tr>
					<tr>
					  <td>Brautfrisur (bis zu 3 Stunden, inklusive Generalprobe)</td>
					  <td>120,00 €</td>
					</tr>
				  </tbody>
				</table>
				<table class="table table-striped w-50">
				  <thead>
					<tr>
					  <th colspan="2">GENTLEMEN</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td>Wohlfühlhaarwäsche - Haarschnitt - Frisur</td>
					  <td>28,00 €</td>
					</tr>
					<tr>
					  <td>Kopfmassage</td>
					  <td>9,00 €</td>
					</tr>
					<tr>
					  <td>Vollbart</td>
					  <td>18,00 €</td>
					</tr>
					<tr>
					  <td>Bart Maschine</td>
					  <td>9,00 €</td>
					</tr>
				  </tbody>
				</table>
				<br style="clear:both;">
				<table class="table table-striped w-50" style="float:left;">
				  <thead>
					<tr>
					  <th colspan="2">KINDER</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
						<td colspan="2">Mädchen</td>
					</tr>
					<tr>
					  <td>bis 4 Jahre</td>
					  <td>12,50 €</td>
					</tr>
					<tr>
					 <td>bis 10 Jahre</td>
					  <td>26,50 €</td>
					</tr>
					<tr>
					  <td>bis 14 Jahre</td>
					  <td>32,00 €</td>
					</tr>
					<tr>
					  <td>* Langhaaraufschlag</td>
					  <td>6,00 €</td>
					</tr>
				  </tbody>
				</table>

				<table class="table table-striped w-50">
				  <thead>
					<tr>
					  <th colspan="2">KINDER</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
						<td colspan="2">Jungen</td>
					</tr>
					<tr>
					  <td>bis 4 Jahre</td>
					  <td>12,50 €</td>
					</tr>
					<tr>
					 <td>bis 10 Jahre</td>
					  <td>19,50 €</td>
					</tr>
					<tr>
					  <td>bis 14 Jahre</td>
					  <td>25,00 €</td>
					</tr>
				  </tbody>
				</table>


              </div>
            </div>

            <div class="col-md-12 col-xl-6">
              <div class="js-carousel"
                   data-infinite="true"
                   data-arrows-classes="u-arrow-v1 g-absolute-centered--y g-width-45 g-height-55 g-font-size-12 g-theme-color-gray-dark-v1 g-bg-white g-mt-minus-10"
                   data-arrow-left-classes="fa fa-chevron-left g-left-0"
                   data-arrow-right-classes="fa fa-chevron-right g-right-0">
                <div class="js-slide">
                  <img class="img-fluid" src="assets/jbilder/studio4a.jpg" alt="Studio 1">
                </div>

                <div class="js-slide">
                  <img class="img-fluid" src="assets/jbilder/studio3a.jpg" alt="Studio 2">
                </div>

                <div class="js-slide">
                  <img class="img-fluid" src="assets/jbilder/studio1a.jpg" alt="Studio 3">
                </div>
              </div>
            </div>



          </div>
        </div>


      </section>


	  <section class="g-py-80 g-theme-bg-gray-light-v1">
        <div class="container-fluid px-0">


          <div class="row no-gutters" id="leistungen">
            <div class="col-md-12 align-items-center text-center">
				<div class="g-mb-25">
                  <h4 class="g-font-weight-700 g-font-size-30 g-theme-h-v1 g-color-primary g-mb-50">LEISTUNGEN</h4>

                </div>
              <div class="js-carousel"
                   data-infinite="true"
                   data-arrows-classes="u-arrow-v1 g-absolute-centered--y g-width-45 g-height-55 g-font-size-12 g-bg-white g-mt-minus-10"
                   data-arrow-left-classes="fa fa-chevron-left g-left-0"
                   data-arrow-right-classes="fa fa-chevron-right g-right-0">
                <div class="js-slide">
                  <div class="row">

					<div class="col-md-6" style="padding:0px 50px 0px 50px;">
						<h5>Haarpflegeberatung</h5>
						<p>Viele Kunden greifen zu Produkten die nicht auf ihr Haar abgestimmt sind oder deren Anwendung nicht fachgerecht vermittelt wird.<br><br>
Um ihnen die richtigen Produkte und Anwendungen empfehlen zu können, führen wir direkt im Salon eine professionellen Haaranalyse durch, um ein individuelles Haarprofil für sie erstellen zu können. Mit gezielter Produktauswahl erreichen wir dabei genau den von ihnen gewünschten Effekt.

</p>
					</div>
					<div class="col-md-6">
						<img src="assets/jbilder/haarpflegeberatung.jpg" class="img-responsive">
					</div>
				  </div>
                </div>
				<div class="js-slide">
                  <div class="row">

					<div class="col-md-6" style="padding:0px 50px 0px 50px;">
						<h5>Hairlounge-Massagen</h5>
						<p>Genießen sie in der Hairlounge eine fachgerecht ausgeführte Kopfmassage und fördern sie die Durchblutung ihrer Kopfhaut und des Großhirns. Durch die stärkere Durchblutung werden die Zellen mit mehr Sauerstoff versorgt und können ihre Funktion optimal ausführen. Durch die Anregung des Stoffwechsels des Körpers, werden sie nicht nur ein gesteigertes Wohlbefinden erleben, sondern wirken auf ganz natürliche Art und Weise Haarausfall entgegen.

 <br><br>

Kopfmassagen tragen neben Stressabbau dazu bei, Nacken- und Schulterverspannungen zu lösen ohne direkt mechanischen Druck auf die betreffenden Körperpartien auszuüben. Sie sind demnach die sanfteste Methode Verspannungen zu lösen.

 <br><br>

Die Stimmulierung des Nervensystems führt zu einer Senkung des Blutdrucks und der Pulsfrequenz, wodurch der gewünschte Entspannungseffekt eintritt.



Zur Verstärkung der aufgezeigten positiven Wirkungen, setzten wir moderne Komfortmassagesessel ein, die ihnen bereits während der Wohlfühlhaarwäsche ein Repertoir an verschiedenen Rückenmassagen bietet. Genießen sie das besondere Hairloungeerlebnis und verwöhnen sie Körper und Geist.

</p>
					</div>
					<div class="col-md-6">
						<img src="assets/jbilder/massagen.jpg" class="img-responsive">
					</div>
				  </div>
                </div>

				<div class="js-slide">
                  <div class="row">

					<div class="col-md-6" style="padding:0px 50px 0px 50px;">
						<h5>ELUMEN HAIR COLOR</h5>
						<p>Ein brillantes Farbergebnis, das dem Haar ein intensives Leuchten verleiht, erreicht man nur mit Elumen von Goldwell.

 <br><br>

Diese friseurexklusive Hochleistungs-Haarfarbe arbeitet zu 100 % ohne Chemie und beruht auf einem rein physikalischen Wirkprinzip. Im Gegensatz zu herkömmlichen Färbemitteln, die durch starke chemische Reaktionen, erst die Schuppenschicht des Haares aufbrechen, um dann Pigmenthaufen in das Haar einzubringen, wirkt Elumen durch Ausnutzung der Anziehungskraft positiv und negativ geladener Teilchen. Die einzelnen Elumen-Pigmente werden dabei durch die geschlossene Schuppenschicht des Haares in das Haarinnere eingeschleust, ohne dieses zu beschädigen.

 <br><br>

Aufgrund tiefsitzender Farbpigmente wird eine längere Farbstabilität und -intensität erreicht, als bei oxidativen Färbemitteln.

 <br><br>

Diese physikalische Färbemethode erlaubt es auch, durch Umkehrung der Ladung, eine ebenso unkomplizierte Farbentfernung zu vollziehen, ohne das Haar dabei zu beschädigen. Somit sind trotz Langzeithaltbarkeit Farbkorrekturen oder Farbveränderungen jederzeit nach Wunsch möglich. Auch eine vollständige Rückfärbung stellt kein Problem dar.

 <br><br>

Entgegen anderer oxidativer Farbstoffe, welche erst im Haar aus verschiedenen Substanzen hergestellt werden, kommen bei Elumen fertige direktziehende Pigmente zum Einsatz, wodurch unerwünschte Kreuzreaktionen vermieden werden und lebendigere Farben entstehen. Eine Vielzahl verschiedener Farbnuancen sind dabei möglich.


<br><br>
Somit ist selbst für ein sattes Farbergebniss über viele Farbstufen hinweg, nur ein einziger Färbeschritt notwendig, ohne kostenintensives und schädliches Vorfärben.

</p>
					</div>
					<div class="col-md-6">
						<img src="assets/jbilder/elumen.jpg" class="img-responsive" style="margin-left:auto;margin-right:auto;height:450px;">
					</div>

				  </div>
                </div>

				<div class="js-slide">
                  <div class="row">
					<div class="col-md-12" style="padding:0px 50px 0px 50px;">
						<h5>Heiße Schere gegen Spliss und zur Farbversiegelung</h5>
						<p style="max-width:700px;margin-left:auto;margin-right:auto;">Die von Natur aus geschlossenen Haarspitzen werden durch das Kalt-Schneiden des Haares geöffnet. Tritt hierzu eine chemische oder mechanische Belastung hinzu, durch beispielsweise Färbung oder Reibung des Haares auf den Schultern, so reißen die geöffneten Haarspitzen ein und zerfassern. Spliss entsteht.

 <br><br>

Die zerfasserten Haare verharken sich, wodurch es zur Strähnenbildung kommt, und die Frisur wirkt insgesamt struppig.

 <br><br>

Mit einem "Heiße-Scheren" - Schnitt kann dem entgegengewirkt werden. Durch den Hitzepunkt der aufeinandertreffenden Klingen wird das Haar direkt beim Schnitt am Schnittpunkt versiegelt, und bildet einen glatten und gesunden Abschluss des Haares.
<br><br>


Diese in der Medizin entwickelte Haartherapie ermöglicht es die Haare wieder lockig und füllig liegen zu lassen. Überdies wird durch die Versiegelung der Haarspitzen ein Ausfallen der Pigmente aus dem gefärbten Haar verhindert und somit ausgeblichene Haarspitzen vermieden.
<br><br>


Dieser Schnitt kann sowohl vorbeugend gegen Spliss, als auch reparierend bei bereits vorhandenem Spliss durchgeführt werden.
</p>

						<img src="assets/jbilder/heisse_schere.jpg" class="img-responsive" style="margin-left:auto;margin-right:auto;">
					</div>

				  </div>
                </div>

				<div class="js-slide">
                  <div class="row">
					<div class="col-md-12" style="padding:0px 50px 0px 50px;">
						<h5>MEN Reshade</h5>
						<p style="max-width:700px;margin-left:auto;margin-right:auto;">Die von Natur aus geschlossenen Haarspitzen werden durch das Kalt-Schneiden des Haares geöffnet. Tritt hierzu eine Mit MenReShade von Goldwell ist es uns möglich, in jedem Stadium des Alterungsprozesses eines Mannes, eine Graureduzierung durchzuführen, die ein frisches Farbergebnis hervorbringt.

 <br><br>

Durch die unkomplizierte Anwendung als Schaum, mit den Ergebnissen einer oxidativen Farbtechnologie, ist eine diskrete Behandlung direkt am Waschbecken im Salon möglich, um auch höchsten Männeransprüchen gerecht zu werden.
<br><br>


Ohne Helmeffekt oder gefärbtes Aussehen, wird so unkompliziert, schnell und sicher das graue Haar in nur 5 Minuten reduziert. Keine Verfärbung beim Auswaschen und kein Ansatz beim Nachwachsen, sichern auch nach der Behandlung in der Hairlounge ein natürliches Aussehen.
</p>

						<img src="assets/jbilder/reshade.jpg" class="img-responsive" style="margin-left:auto;margin-right:auto;">
					</div>

				  </div>
                </div>

				<div class="js-slide">
                  <div class="row">
					<div class="col-md-12" style="padding:0px 50px 0px 50px;">
						<h5>INNER-EFFECT - Anti-Haarausfall-System</h5>
						<p style="max-width:700px;margin-left:auto;margin-right:auto;">Die von Natur aus geschlossenen Haarspitzen werden durch das Kalt-Schneiden des Haares geöffnet. Tritt hierzu eine Bei immer mehr Menschen setzt in einem frühen Altersabschnitt eine vorzeitige Rückbildung der Haarwurzel ein. Die durch körpereigene Substanzen ausgelöste Veränderung verkürzt die Wachsstumsphase, wodurch das Haar eher ausfällt.


<br><br>
Treten sie in der Hairlounge mit einer multifunktionalen Wirkstoffkombination dem Haarausfall aktiv entgegen. Eine klinische Studie beweist, die Kombination des Anti-Haarausfall-Systems aus Menthol, t-Flavanone, Procapil und anderen Wirkstoffen verlängert den Lebenszyklus des Haares, und kann vorzeitigen Haarausfall um bis zu 46 % reduzieren.<br><br>Das Menthol stimuliert die Kopfhaut für die optimale Aufnahme der Wirkstoffe. T-Flavanone und Procapil halten die Rückbildung des Haares auf, kräftigen das Haar und verankern es wieder stärker in der Kopfhaut.<br><br>Positive Ergebnisse wurden bei erblich bedingtem, hormonellem sowie temporärem und kreisrundem Haarausfall verzeichnet.
<br><br>




Die Therapie von Inner Effect beginnt im Salon und wird bequem zu Hause fortgeführt. Eine umfassende und diskrete Beratung, sowie Anwendungserklärung der Produkte, erhalten sie direkt in der Hairlounge.
</p>

						<img src="assets/jbilder/haarausfall.jpg" class="img-responsive" style="margin-left:auto;margin-right:auto;">
					</div>

				  </div>
                </div>

              </div>
            </div>
			</div>
        </div>
      </section>

      <!-- End Section Content -->

      <!-- Section Content -->
      <section id="team" class="g-py-80">
        <div class="container text-center g-width-590 g-mb-50">
          <div class="g-mb-25">
            <h4 class="g-font-weight-700 g-font-size-30 g-theme-h-v1 g-color-primary g-mb-25">TEAM</h4>
            <h2 class="text-uppercase g-font-weight-600 g-font-size-22 mb-0">Wir sind gern für Sie da.</h2>
          </div>

          <p class="mb-0">Ich würde mich freuen, Sie in meinem Salon begrüßen zu dürfen.
</p>
        </div>

        <div class="container">
          <!-- Products Block -->
          <div class="row">
            <div class="col-md-4 g-mb-30">
              <!-- Article -->
              <article class="text-center g-bg-white">
                <!-- Article Image -->
                <div class="g-pos-rel">
                  <img class="w-100" src="assets/jbilder/jane_laurenz_neu.jpg" alt="Image description">


                </div>
                <!-- End Article Image -->

                <!-- Article Content -->
                <div class="u-shadow-v9 g-pa-30">


                  <!-- Article Info -->
                  <h3 class="h6 text-uppercase g-line-height-1_8 g-font-weight-700 g-mb-20">JANE LAURENZ</h3>
                  <p class="mb-0">Friseurmeisterin & Geschäftsinhaberin</p>
                  <!-- End Article Info -->
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

            <div class="col-md-4 g-mb-30">
              <!-- Article -->
              <article class="text-center g-bg-white">
                <!-- Article Image -->
                <div class="g-pos-rel">
                  <img class="w-100" src="assets/jbilder/maxi_huhn_neu.jpg" alt="Image description">


                </div>
                <!-- End Article Image -->

                <!-- Article Content -->
                <div class="u-shadow-v9 g-pa-30">


                  <!-- Article Info -->
                  <h3 class="h6 text-uppercase g-line-height-1_8 g-font-weight-700 g-mb-20">MAXI HUHN</h3>
                  <p class="mb-0">Friseurin</p>
                  <!-- End Article Info -->
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

			<div class="col-md-4 g-mb-30">
              <!-- Article -->
              <article class="text-center g-bg-white">
                <!-- Article Image -->
                <div class="g-pos-rel">
                  <img class="w-100" src="assets/jbilder/birgit_neu.jpg" alt="Image description">


                </div>
                <!-- End Article Image -->

                <!-- Article Content -->
                <div class="u-shadow-v9 g-pa-30">


                  <!-- Article Info -->
                  <h3 class="h6 text-uppercase g-line-height-1_8 g-font-weight-700 g-mb-20">BIRGIT FRIEBEL-PURSCHKE</h3>
                  <p class="mb-0">Friseurin</p>
                  <!-- End Article Info -->
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

			<div class="col-md-4 g-mb-30">
              <!-- Article -->
              <article class="text-center g-bg-white">
                <!-- Article Image -->
                <div class="g-pos-rel">
                  <img class="w-100" src="assets/jbilder/jana_winkler_neu.jpg" alt="Image description">


                </div>
                <!-- End Article Image -->

                <!-- Article Content -->
                <div class="u-shadow-v9 g-pa-30">


                  <!-- Article Info -->
                  <h3 class="h6 text-uppercase g-line-height-1_8 g-font-weight-700 g-mb-20">JANA WINKLER</h3>
                  <p class="mb-0">Friseurin</p>
                  <!-- End Article Info -->
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

			<div class="col-md-4 g-mb-30">
              <!-- Article -->
              <article class="text-center g-bg-white">
                <!-- Article Image -->
                <div class="g-pos-rel">
                  <img class="w-100" src="assets/jbilder/vivien_mai.jpg" alt="Image description">


                </div>
                <!-- End Article Image -->

                <!-- Article Content -->
                <div class="u-shadow-v9 g-pa-30">


                  <!-- Article Info -->
                  <h3 class="h6 text-uppercase g-line-height-1_8 g-font-weight-700 g-mb-20">VIVIEN MAI</h3>
                  <p class="mb-0">Friseurin</p>
                  <!-- End Article Info -->
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

			<div class="col-md-4 g-mb-30">
              <!-- Article -->
              <article class="text-center g-bg-white">
                <!-- Article Image -->
                <div class="g-pos-rel">
                  <img class="w-100" src="assets/jbilder/dalyn_meinel.jpg" alt="Image description">


                </div>
                <!-- End Article Image -->

                <!-- Article Content -->
                <div class="u-shadow-v9 g-pa-30">


                  <!-- Article Info -->
                  <h3 class="h6 text-uppercase g-line-height-1_8 g-font-weight-700 g-mb-20">DALYN MEINEL</h3>
                  <p class="mb-0">Friseurin</p>
                  <!-- End Article Info -->
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>
          </div>


        </div>
      </section>
      <!-- End Section Content -->









      <!-- Section Content -->
      <section id="contact" class="g-py-70 g-theme-bg-gray-light-v1">
        <div class="container text-center g-width-590 g-mb-50">
          <div class="g-mb-25">
            <h4 class="g-font-weight-700 g-font-size-30 g-theme-h-v1 g-color-primary g-mb-25">KONTAKT</h4>

          </div>

          <p class="mb-0">Hier können Sie mit uns Kontakt aufnehmen.</p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-9 g-mb-40 g-mb-0--md">
              <form id="kontaktformular" method="post">
                <div class="form-group g-mb-25">
                  <input class="form-control g-color-gray-dark-v5 g-placeholder-inherit g-theme-bg-gray-light-v1 g-brd-none rounded-0 g-pa-12" type="text" name="name" placeholder="Ihr Name">
                </div>

                <div class="form-group g-mb-25">
                  <input class="form-control g-color-gray-dark-v5 g-placeholder-inherit g-theme-bg-gray-light-v1 g-brd-none rounded-0 g-pa-12" type="email" name="email" placeholder="Ihre eMail-Adresse *">
                </div>

                <div class="form-group g-mb-25">
                  <textarea class="form-control g-resize-none g-color-gray-dark-v5 g-placeholder-inherit g-theme-bg-gray-light-v1 g-brd-none rounded-0 g-py-6 g-px-12" name="nachricht" rows="5" placeholder="Nachricht"></textarea>
                </div>
				<input type="text" name="fri2022" style="display:none;">
                <button class="btn btn-md text-uppercase btn-block u-btn-outline-primary g-font-weight-700 g-font-size-11 g-brd-2 rounded-0 g-py-19 g-px-20" type="submit" role="button" id="absende_button">Absenden</button>
				<input type="checkbox" name="datenschutz_checkbox" id="datenschutz_checkbox" style="margin-top:20px;"> <p style="display:inline;">Bitte bestätigen Sie vor dem Absenden die <a href="#" id="datenschutz-link" data-toggle="modal" data-target="#exampleModalCenter">Datenschutzbestimmungen</a>.</p>
							<p><br>Wenn Sie uns per Kontaktformular Anfragen zukommen lassen, werden Ihre Angaben aus dem Anfrageformular
							inklusive der von Ihnen dort angegebenen Kontaktdaten zwecks Bearbeitung der Anfrage und für den Fall von
							Anschlussfragen bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre Einwilligung weiter.</p>
				<div id="erfolg_kontaktformular"></div>
              </form>
            </div>

            <div class="col-md-3 text-center text-md-left g-mb-40--md">
              <div class="g-mb-25">
                <span class="u-icon-v1 u-icon-size--xs g-color-primary">
                  <i class="icon-directions"></i>
                </span>
                <em class="d-block g-color-black-light-v2 text-uppercase g-font-size-12 g-font-style-normal g-mb-5">Adresse</em>
                <strong class="d-block">Hairlounge Jane Laurenz<br>Johann-Sebastian-Bach-Str. 4<br>09648 Mittweida</strong>
              </div>

              <div class="g-mb-25">
                <span class="u-icon-v1 u-icon-size--xs g-color-primary">
                  <i class="icon-call-in"></i>
                </span>
                <em class="d-block g-color-black-light-v2 text-uppercase g-font-size-12 g-font-style-normal g-mb-5">Telefon</em>
                <strong class="d-block">03727 / 998 333 6</strong>
              </div>

              <div>
                <span class="u-icon-v1 u-icon-size--xs g-color-primary">
                  <i class="icon-envelope-letter"></i>
                </span>
                <em class="d-block g-color-black-light-v2 text-uppercase g-font-size-12 g-font-style-normal g-mb-5">eMail</em>
                <strong class="d-block"><a href="#" class="g-color-main">jane.laurenz@gmx.de</a></strong>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Section Content -->

      <!-- Footer -->
      <footer>
        <!-- Google Map -->
        <div id="map2" style="height:450px;"></div>

        <!-- End Google Map -->

        <div class="container-fluid text-center g-color-gray-dark-v5 g-py-40">
          <a class="d-inline-block g-mb-25" href="#home">
            <img src="assets/jbilder/emotionheader.jpg" alt="Logo" style="max-width:100%;">
          </a>

          <p class="g-mb-30">Ihre erste Anlaufstelle in Sachen Haare.</p>

          <ul class="list-inline d-inline-block g-mb-30">
            <li class="list-inline-item g-mr-10">
              <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-15 g-color-gray-dark-v2 g-color-white--hover g-bg-white g-bg-primary--hover g-transition-0_2 g-transition--ease-in" href="https://www.facebook.com/HairloungeJaneLaurenz" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>
          </ul>

          <ul class="list-inline text-uppercase g-font-weight-700 g-font-size-11 mb-0">
            <li class="list-inline-item g-px-12--md">
              <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#home">Home</a>
            </li>
            <li class="list-inline-item g-px-12--md">
              <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#service">Service</a>
            </li>
			<li class="list-inline-item g-px-12--md">
              <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#leistungen">Leistungen</a>
            </li>
            <li class="list-inline-item g-px-12--md">
              <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#team">Team</a>
            </li>
            <li class="list-inline-item g-px-12--md">
              <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#contact">Kontakt</a>
            </li>
            <li class="list-inline-item g-px-12--md">
              <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover" href="#" data-toggle="modal" data-target="#exampleModalCenter">Impressum / Datenschutz</a>
            </li>
          </ul>
        </div>
      </footer>
      <!-- End Footer -->

      <a class="js-go-to u-go-to-v1" href="#"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
    </main>

    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/jquery.easing/js/jquery.easing.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/appear.js"></script>
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="assets/vendor/gmaps/gmaps.min.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.scroll-nav.js"></script>
    <script src="assets/js/components/hs.rating.js"></script>
    <script src="assets/js/components/hs.carousel.js"></script>
    <script src="assets/js/components/hs.cubeportfolio.js"></script>
    <script src="assets/js/components/gmap/hs.map.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>

      $(document).on('ready', function () {
		  $("#datenschutz_checkbox").click(function(){
	if( $('#datenschutz_checkbox').is(':checked') ) {
		$("#absende_button").prop('disabled', false);
	}
	else
	{
		$("#absende_button").prop('disabled', true);
	}
});
setTimeout(function(){ document.getElementById("absende_button").disabled = true; }, 2000);

        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        $('#carouselCus1').slick('setOption', 'responsive', [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 992,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 576,
          settings: {
            slidesToShow: 1
          }
        }], true);

        $('#carouselCus2').slick('setOption', 'responsive', [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4
          }
        }, {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }, {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }], true);

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of rating
        $.HSCore.components.HSRating.init($('.js-rating'), {
          spacing: 2
        });

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');
      });

      $(window).on('load', function() {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
          duration: 700,
          easing: 'easeOutExpo'
        });

        // initialization of cubeportfolio
        $.HSCore.components.HSCubeportfolio.init('.cbp');
      });
    </script>

	<script defer>
	$("#absende_button").click(function(e){
	e.preventDefault();
	$.post("kontaktformular_senden.php",$("#kontaktformular").serialize(),function(msg){
		if(msg=="erfolg"){
			$("#erfolg_kontaktformular").html("<div class='alert alert-success margin-bottom-30'>\n<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>\n<strong>Vielen Dank!</strong> Ihre Nachricht wurde an uns versendet!\n</div>\n");
		}
		else
		{
			if(msg=="mf"){
				$("#erfolg_kontaktformular").html("<div class='alert alert-danger margin-bottom-30'>\n<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>\n<strong>Fehler!</strong> Bitte gültige Mail-Adresse eingeben!\n</div>\n");
			}
			if(msg=="fail2"){
				$("#erfolg_kontaktformular").html("<div class='alert alert-danger margin-bottom-30'>\n<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>\n<strong>Fehler!</strong> reCaptcha nicht erfolgreich!\n</div>\n");
			}
			if(msg=="fail3"){
				$("#erfolg_kontaktformular").html("<div class='alert alert-danger margin-bottom-30'>\n<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>\n<strong>Fehler!</strong> reCaptcha leer!\n</div>\n");
			}
			if(msg=="fail4"){
				$("#erfolg_kontaktformular").html("<div class='alert alert-danger margin-bottom-30'>\n<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>\n<strong>Fehler!</strong> reCaptcha nicht per POST versendet!\n</div>\n");
			}
		}
	});
	});
	</script>

  </body>
</html>
