<!DOCTYPE html>
<html>
<head>
	<title>{{__('local.Modern Locations')}}</title>
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
@include('layouts.navbar-2-type')



<div class="container">
<br>
<br>
<br>
<br>
<br>
<div class="backp">
<a href="{{ route('indexpage') }}#locations" class="previous">&#8249;</a>
</div>
<h2 class="heading">{{__('local.MODERN LOCATIONS')}}</h2><br>
<div class="row">
	<div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal">
  <div>

		<img src="images/modern/img1.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.BAYTEREK')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Bayterek')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/modern/img1.jpeg" width="100%" height="100%">
          <p>{{__('local."Everyone who climbs the Bayterek Tower, will learn the essense of the steppe" - this is how the President of the Republic of Kazakhstan described the magnificent structure in the very center of our huge country. Undoubtedly, the tower is the landmark of Nur-Sultan. "Bayterek" in Kazakh means "High poplar tree". Its architectural design is inspired by an ancient Turkic myth about a tree of life and a sacred bird: every year the bird, named Samruk, lays its egg (the Sun) in the crevice between the branches of the poplar tree. Bayterek is considered a symbol of modern Kazakhstan. Having visited this unique tower, you will never be able to forget the indescribable atmosphere of this place.')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('local.Close')}}</button>
        </div>
      </div>

    </div>
  </div>



	</div>


	<div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal2">
	<div>
		<img src="images/modern/img2.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.ASTANA OPERA')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Astana Opera')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/modern/img2.jpeg" width="100%" height="100%">
          <p>{{__('local.This unique theatre has become a landmark of the capital of Kazakhstan. The architecture of this monumental building combines the Kazakh motifs and Greco-Roman style. It was built within a record-breaking short term - 3 years. It opened in 2013 and has already become the architectural heritage of the whole country. In the Astana Opera there are 2 huge auditoriums. The sound quality is great thanks to unique acoustics. Denis Matsuev, Placido Domingo, Svetlana Zakharova, Jose Carreras and many other prominent figures of theatrical art performed on its stage. Famous opera singers constantly give occasional guest performances. The troupe was formed from the singers carefully selected by professionals from world famous theaters.')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('local.Close')}}</button>
        </div>
      </div>

    </div>
  </div>



	</div>




	<div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal3">
	<div>
		<img src="images/modern/img3.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.EXPO-2017')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.EXPO-2017')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/modern/img3.jpeg" width="100%" height="100%">
          <p>{{__('local.Expo 2017 Astana was an International Exposition which took place from June 10 to September 10, 2017 in Astana, Kazakhstan. The expo\'s theme was "Future Energy", and aimed to create a global debate between countries, nongovernmental organizations, companies and the general public on the crucial question: "How do we ensure safe and sustainable access to energy for all while reducing CO2 emissions?"')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('local.Close')}}</button>
        </div>
      </div>

    </div>
  </div>



	</div>







	<div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal4">
	<div>
		<img src="images/modern/img4.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.KOKTOBE')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Koktobe')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/modern/img4.jpeg" width="100%" height="100%">
          <p>{{__('local.Kok Tobe is the highest point in the city of Almaty standing on a 1100 m hill at the south-east edge of the city. It is worth a visit to Kok Tobe because of its panoramic view of the city from all directions. To reach the Kok Tobe hill, one should take a cable car ride which starts near Hotel Kazakhstan and goes over some of the oldest parts of Almaty and the magnificent fruit growing gardens. Once you reach the Kok Tobe hill, you would see the famous 372 m high TV Tower which is visible from far and offers great views of the mountains and the city plus a few attractions at the top.')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('local.Close')}}</button>
        </div>
      </div>

    </div>
  </div>



	</div>


	<div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal5">
	<div>
		<img src="images/modern/img5.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.NURLY TAU')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Nurly Tau')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/modern/img5.jpeg" width="100%" height="100%">
          <p>{{__('local."Nurly Tau" was built on the principle of "city within a city", every detail of the complex was created for the comfort of people working and living in it - administrative centers, entertainment and sports complexes, as well as clubs, restaurants, cinemas and much more.')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('local.Close')}}</button>
        </div>
      </div>

    </div>
  </div>



	</div>





	<div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal6">
<div>
		<img src="images/modern/img6.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.KARAVAN SARAY')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Karavan Saray')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/modern/img6.jpeg" width="100%" height="100%">
          <p>{{__('local.Complex Karavansaray Turkistan is located 10 minutes from the main attraction of Turkestan - the mausoleum of Khoja Ahmed Yasawi. On the territory of the complex there are two modern hotels, with restaurants, a bar, a premium class spa, a cinema and shopping and entertainment facilities. The capacity of the shopping and family entertainment center is 300,000 visitors per year. The total area of retail buildings, including the open market, is 74 thousand square meters.')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('local.Close')}}</button>
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
