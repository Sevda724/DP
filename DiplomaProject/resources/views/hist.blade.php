<!DOCTYPE html>
<html>
<head>
	<title>Historical Locations</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Bootstrap CSS
   ================================================== -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Animate CSS
   ================================================== -->
  <link rel="stylesheet" href="css/animate.min.css">

  <!-- Font Icons
   ================================================== -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/et-line-font.css">

  <!-- Nivo Lightbox CSS
   ================================================== -->
  <link rel="stylesheet" href="css/nivo-lightbox.css">
  <link rel="stylesheet" href="css/nivo_themes/default/default.css">

  <!-- Owl Carousel CSS
   ================================================== -->
    <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/owl.carousel.css">

  <!-- BxSlider CSS
   ================================================== -->
    <link rel="stylesheet" href="css/bxslider.css">

    <!-- Main CSS
    ================================================== -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Google web font
   ================================================== -->
  <link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
</head>
<style type="text/css">

.img-responsive{
	margin: 8px;
	transition: 0.5s ease;
}


.heading{
	text-align: center;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 35px;

}


p{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	text-align: center;
}


/* Body
------------------------------------- */
body {
    background: #ffffff;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: normal;
    position: relative;
}

html,body {
     overflow-x: hidden;
     font-size: 100%;
     width: 100%;
     -webkit-font-smoothing: antialiased;
     -moz-osx-font-smoothing: grayscale;
     vertical-align: baseline;
  }

img {
  vertical-align: middle;
}

/* Typography
------------------------------------- */
h1,h2,h3,h4,h5 {
  font-family: 'Raleway', sans-serif;
  font-weight: bold;
}

h3 {
  color: #525252;
  letter-spacing: 1px;
}

h5 {
  color: #ffa400;
  letter-spacing: 4px;
  padding-top: 22px;
}

.heading {
  color: #000000;
  font-size: 52px;
}

p {
  color: #727272;
  letter-spacing: 0.9px;
  line-height: 28px;
}

a {
  outline: none !important;
}

hr {
  width: 120px;
}

.color-white {
  color: #FFF;
}

.color-white a {
  color: #FC3;
}


/* All Section styles
------------------------------------- */
.section-title {
  border: 4px solid #000;
  padding: 30px;
  position: relative;
  text-align: center;
  margin-bottom: 52px;
}

#about .section-title, #plan .section-title {
  border-color: #ffffff;
}

.panel {
  background-color: #161616;
  border: 0px;
}

.panel-title {
  color: #FFF;
}

.panel-body p {
  color: #CCC;
}

.medium-icon {
  color: #ffa400;
  font-size: 36px !important;
  font-weight: bold;
}

#work, #about, #services,
#portfolio {
  padding-top: 120px;
  padding-bottom: 100px;
}

.parallax-section {
  background-attachment: fixed !important;
  background-size: cover !important;
}


/* preloader styles
/* ========================================== */
.preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 99999;
    display: flex;
    flex-flow: row nowrap;
    justify-content: center;
    align-items: center;
    background: none repeat scroll 0 0 #fff;
}

.sk-rotating-plane {
  width: 40px;
  height: 40px;
  background-color: #ffa400;
  -webkit-animation: sk-rotatePlane 1.2s infinite ease-in-out;
          animation: sk-rotatePlane 1.2s infinite ease-in-out; }

@-webkit-keyframes sk-rotatePlane {
  0% {
    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg);
            transform: perspective(120px) rotateX(0deg) rotateY(0deg); }
  50% {
    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
            transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg); }
  100% {
    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
            transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg); } }

@keyframes sk-rotatePlane {
  0% {
    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg);
            transform: perspective(120px) rotateX(0deg) rotateY(0deg); }
  50% {
    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
            transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg); }
  100% {
    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
            transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg); } }


/* navigation styles
/* ========================================== */
.custom-navbar {
    background: #000000;
    border: none;
    margin-bottom: 0;
    text-align: center;
}

.custom-navbar .navbar-brand  {

  font-weight: 600;
  font-size: 24px;
  padding-top: 11px;
}

.custom-navbar .navbar-brand .navbar-toggle {
    background: #ffa400;
     padding: 4px 6px;
    font-size: 16px;
    color: #000000;
}

.custom-navbar .nav li a {
  display: block;
  padding: 15px 20px;
    color: #ffffff;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 2px;
 }

.custom-navbar .nav li a:hover {
  background: black;
}

.custom-navbar .nav > li > a:focus {
  background-color: black;
  color: #ffffff;
  outline: none;
}

.custom-navbar .nav li.active > a {
  border-bottom: 2px solid #ffffff;
}

.custom-navbar .navbar-toggle {
    border: none;
}
.custom-navbar .navbar-toggle .icon-bar {
    background: #ffa400;
    border-color: transparent;
}

@media(min-width:768px) {

    .custom-navbar {
         border-bottom: 1px solid rgba(250,250,250,0.3);
        padding: 16px;
       background: 0 0;
    }

    .custom-navbar.top-nav-collapse {
       padding: 16px;
      background: #000000;
      border-bottom: 0;
    }
}

@media (max-width: 767px) {

   .custom-navbar .nav li.active > a {
        border-bottom: 2px solid transparent !important;
        color: #ffa400;
    }

}


.button5 {
  background: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  color: white;
  border: 2px solid black;
}

.button5:hover {
  background-color: white;
  color: black;
}

.backp a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

.backp a:hover {
  background-color: orange;
  color: black;
}

.backp .previous {
  background-color: black;
  color: white;
}

</style>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section
================================================== -->
<section  class="preloader">

  <div class="sk-rotating-plane"></div>

</section>


<!-- Navigation section
================================================== -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation" style="background-color: black;">
  <div class="container">

    <div class="navbar-header">
      <a href="/" class="smoothScroll navbar-brand"><img src="images/logo.png" style="height: 50px; width: auto; margin-top: -10px;"></a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">

        <!-- <li><a href="#home" class="smoothScroll">HOME</a></li> -->

        <li><a href="/" class="smoothScroll">HOME</a></li>
        <li><a href="/" class="smoothScroll">ABOUT</a></li>
        <li><a href="/" class="smoothScroll">SHOWCASE</a></li>
        <li><a href="/" class="smoothScroll">LOCATIONS</a></li>
        <li><a href="/" class="smoothScroll">CONTACT</a></li>
      </ul>
    </div>

  </div>
</section>



<div class="container">
<br>
<br>
<br>
<br>
<br>
<div class="backp">
<a href="/" class="previous">&#8249;</a>
</div>
<h2 class="heading">HISTORICAL LOCATIONS</h2><br>
<div class="row">
	<div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal">
  <div>

		<img src="images/hist/img1.jpeg" class="img-responsive" width="100%" height="100%">
    <div >

                  <h2 class="fh5co-title" style="font-weight: 900;
  color: white;
  text-align: center;
  text-transform: uppercase;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);">ARYSTAN BAB</h2>
                </div>
</div>
</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-center">Arystan Bab</h2>
        </div>
        <div class="modal-body">
        	<img src="images/hist/img1.jpeg" width="100%" height="100%">
          <p>One of the holiest places in the Turkistan Province is the Mausoleum of Arystan Bab, founded in the 12th century. Arystan Bab was a spiritual mentor of Khoja Ahmed Yasawi, and also, according to legends, an associate of the Prophet Muhammad. The exterior of the mausoleum is unusual: the minarets (towers), from where the Adhan (a call to prayer) is recited, are similar to the observation towers. The most striking feature is the so-called “portal” - a wide arch, in which Islamic architectural tradition intertwines with European and Russian ones. The ancient handwritten Quran, an example of medieval calligraphic art, is dispalyed here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>



	</div>


	<div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal2">
	<div>
		<img src="images/hist.jpeg" class="img-responsive" width="100%" height="100%">
<div>

                  <h2 class="fh5co-title" style="font-weight: 900;
  color: white;
  text-align: center;
  text-transform: uppercase;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);">MAUSOLEUM</h2>
                </div>
</div>

</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-center">Mausoleum of Khoja Ahmed Yasawi</h2>
        </div>
        <div class="modal-body">
        	<img src="images/hist.jpeg" width="100%" height="100%">
          <p>The Mausoleum of Khoja Ahmed Yasawi, in the town of Yasi, now Turkestan, was built at the time of Timur (Tamerlane), from 1389 to 1405. In this partly unfinished building, Persian master builders experimented with architectural and structural solutions later used in the construction of Samarkand, the capital of the Timurid Empire. Today, it is one of the largest and best-preserved constructions of the Timurid period.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>



	</div>




	<div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal3">
	<div>
		<img src="images/hist/img2.jpeg" class="img-responsive" width="100%" height="100%">
<div>

                  <h2 class="fh5co-title" style="font-weight: 900;
  color: white;
  text-align: center;
  text-transform: uppercase;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);">AISHA BIBI</h2>
                </div>
</div>


</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-center">Aisha Bibi</h2>
        </div>
        <div class="modal-body">
        	<img src="images/hist/img2.jpeg" width="100%" height="100%">
          <p>The Mausoleum of Aisha Bibi, the larger of the two Karakhanid buildings in the compound, is a heavily, but finely, restored square-based building, originally dating from the 11th or 12th century, with a conical roof. The external decoration is stunning: every spare piece of wall is covered with carved terracotta in a wide range of geometric designs. It is the only monument in central Asia fully covered with carved terracotta tilework. The main entrance is on the eastern side of the building, set in a niche. Niches on the other three walls enclose latticed wooden windows. There is a cloth-covered tomb inside. </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>



	</div>







	<div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal4">
	<div>
		<img src="images/hist/img3.jpeg" class="img-responsive" width="100%" height="100%">
<div>

                  <h2 class="fh5co-title" style="font-weight: 900;
  color: white;
  text-align: center;
  text-transform: uppercase;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);">SHAKPAK ATA</h2>
                </div>
</div>


</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-center">Shakpak Ata</h2>
        </div>
        <div class="modal-body">
        	<img src="images/hist/img3.jpeg" width="100%" height="100%">
          <p>The inner walls of the mosque are white, because it is cut inside a chalk rock. The mosque consists of several halls, all of them are connected by passages. There is a spiral stone staircase leading to a pavilion located on a flat cliff. Rock carvings of various eras are depicted on the walls, while the central part and the ceiling are decorated with Arabic writings. Owing to such an unusual rock-cut structure and location, the mosque is regularly visited by pilgrims and tourists not only from Kazakhstan, but from all over the world.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>



	</div>


	<div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal5">
	<div>
		<img src="images/hist/img4.jpeg" class="img-responsive" width="100%" height="100%">
<div>

                  <h2 class="fh5co-title" style="font-weight: 900;
  color: white;
  text-align: center;
  text-transform: uppercase;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);">SAURAN</h2>
                </div>
</div>

</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-center">Sauran</h2>
        </div>
        <div class="modal-body">
        	<img src="images/hist/img4.jpeg" width="100%" height="100%">
          <p>In the Turkistan Province, there once was a thriving medieval city, Sauran. One of the earliest mentions of the city was made in the 10th century. From these records it can be judged that the city was very advanced and served as a major administrative center. According to the ancient chronicles, the residents were engaged in craft and the improvement of the city, built fortifications and a plumbing system. The city had underground water pipelines with a total length of almost 110 km (68 mi). At the moment, archaeological excavations are being carried out on the territory of the ancient settlement of Sauran and some restoration works are being done under the auspices of the Government of the Republic of Kazakhstan. This is an exceptional place that is worth visiting in order to see its picturesque ruins, and learn how people lived in ancient times. </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>



	</div>





	<div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal6">
<div>
		<img src="images/hist/img5.jpeg" class="img-responsive" width="100%" height="100%">
<div>

                  <h2 class="fh5co-title" style="font-weight: 900;
  color: white;
  text-align: center;
  text-transform: uppercase;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);">ARAL SEA</h2>
                </div>
</div>

</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-center">Aral Sea</h2>
        </div>
        <div class="modal-body">
        	<img src="images/hist/img5.jpeg" width="100%" height="100%">
          <p>The shallow Aral Sea was once the world’s fourth largest body of inland water. The remnants of it nestle in the climatically inhospitable heart of Central Asia, to the east of the Caspian Sea. The Aral Sea and its demise are of great interest and increasing concern to scientists because of the remarkable shrinkage of its area and volume that began in the second half of the 20th century—when the region was part of the Soviet Union—and continued into the 21st. That change resulted primarily because of the diversion (for purposes of irrigation) of the riverine waters of the Syr Darya (ancient Jaxartes River) in the north and the Amu Darya (ancient Oxus River) in the south, which discharged into the Aral Sea and were its main sources of inflowing water.
</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>



	</div>

  <div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal7">
<div>
    <img src="images/hist/img6.png" class="img-responsive" width="100%" height="100%">
<div>

                  <h2 class="fh5co-title" style="font-weight: 900;
  color: white;
  text-align: center;
  text-transform: uppercase;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);">AKMESHIT</h2>
                </div>
</div>

</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal7" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-center">Akmeshit</h2>
        </div>
        <div class="modal-body">
          <img src="images/hist/img6.png" width="100%" height="100%">
          <p>Akmeshit Cave, an unusual spot with captivating views accompanied by legends, is perfect for a pilgrim’s journey. The cave is located 90 kilometres north of Shymkent and can be accessed year-round. The outer entrance opened in the early 20th century when part of the dome collapsed. The stories and legends surrounding it, however, existed much earlier. Many generations of locals told the story of Akmeshit – an unusual cave or underground mosque without external exits that could only be accessed through underground tunnels from nearby neighbourhoods. The tunnels were eventually sealed under rocks and for a long time the cave was merely a legend.
</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  </div>




  <div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal8">
<div>
    <img src="images/hist/img7.jpeg" class="img-responsive" width="100%" height="100%">
<div>

                  <h2 class="fh5co-title" style="font-weight: 900;
  color: white;
  text-align: center;
  text-transform: uppercase;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);">MERKE SANCTUARY</h2>
                </div>
</div>

</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal8" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-center">Merke Sanctuary</h2>
        </div>
        <div class="modal-body">
          <img src="images/hist/img7.jpeg" width="100%" height="100%">
          <p>Merke is a sanctuary located near the village of Merke in the Zhambyl region of Kazakhstan. Due to its location in an inaccessible place, the sanctuary has been preserved in good condition and allows tracing the development of the culture of the Turkic nomads for almost a millennium. In 1998, the Merke sanctuary was included in the provisional UNESCO World Heritage List. The sanctuary is located in the Kyrgyz Alatau and covers an area of about 250 km². It is located at an altitude of 3000 m and covers several plateaus: Sandyk, Shaisandyk, Araltobe, Kashkasu, Ulysay.
</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  </div>



</div>
<br>
<br>
<br>
<br>
<br>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.easing-1.3.js"></script>
<script src="js/plugins.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>


</body>
</html>
