<!DOCTYPE html>
<html>
<head>
	<title>{{__('local.Mountains')}}</title>
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
<h2 class="heading">{{__('local.MOUNTAINS')}}</h2><br>
<div class="row">
	<div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal">
  <div>

		<img src="images/mount/img1.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.TIAN SHAN')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Tian Shan')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/mount/img1.jpeg" width="100%" height="100%">
          <p>{{__('local.From the fields of wildflowers at lower altitudes to dramatic craggy peaks of winter snow, Kazakhstan\'s heavenly Western Tien-Shan mountains are some of the most biologically diverse and prosperous regions of the world. Three protected areas make up the World Heritage Site - Karatau Nature Reserve, Aksu-Zhabagly Nature Reserve, and Sairam-Ugam National Park. Together they offer a haven for endemic rare and endangered species. It was also here that some of the first fruits were domesticated centuries ago before spreading out across the world on the trading routes of the Great Silk Road.')}}</p>
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
		<img src="images/mount/img2.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.ILE ALATAU')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Ile Alatau')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/mount/img2.jpeg" width="100%" height="100%">
          <p>{{__('local.Ile-Alatau National Park is a national park in Kazakhstan. It was created in 1996 and covers about 200,000 ha. It is situated in the mountains south of Almaty between Gorge Turgen in the east and Chemolgan River in the west. The National Park borders Almaty Nature Reserve, which is located around Peak Talgar.')}}</p>
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
		<img src="images/mount/img3.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.SHYMBULAK')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Shymbulak')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/mount/img3.jpeg" width="100%" height="100%">
          <p>{{__('local.The Shymbulak Ski Resort is located 25km outside Almaty city. There are three ski lifts at the resort with the highest going to 3200 meters above sea level. There is also a Hotel located at the Resort, enabling those wishing to ski during the day, have a place to stay at night. The resort is located in the upper part of the Medeu Valley in the Zaiilisky Alatau mountain range. It is popular for its mild climate, large quantity of sunny days and great amount of snow through the winter (from November till May).')}}</p>
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
		<img src="images/mount/img4.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.BIG ALMATY LAKE')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Big Almaty Lake')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/mount/img4.jpeg" width="100%" height="100%">
          <p>{{__('local.Big Almaty Lake is located 28.5km south of Almaty up a gorge of the Bolshaya Almatinka River, 2,511m above sea level. The lake is within the Alatau – Eliy National park and both the Gorge and the lake are an attraction for visitors using Almaty as their base. The lake is used for both hydro electric power, and the water supply for the city, but this does not detract from the magnificent mountain scenery. The mountains, Sovetov to the southeast, Ozyorny to the south and Turist to the southwest form a backdrop on all sides to the lake, producing some spectacular reflections, changing colour throughout the seasons. All three mountains are around the 4,000 metres high, with a glacial water running down towards the lake.')}}</p>
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
		<img src="images/mount/img5.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.TURGEN GORGE')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Turgen Gorge')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/mount/img5.jpeg" width="100%" height="100%">
          <p>{{__('local.One of the amazing and beautiful places of Kazakhstan is Turgen gorge, located 90 km from Almaty. There are a lot of beautiful waterfalls, pine forests, hot springs, as well as lakes with clear water. Turgen gorge is famous for waterfalls. One of these attractions is the Bear Falls, about 30 meters high. Bozgul waterfall made a real tunnel in the rock. But the most remarkable place in the valley is the Botan-chasseur station. Here Turgen canyon reaches a depth of 920 meters. There are ancient drawings along Asy River. In addition to these attractions, tourists often visit trout farm, ostrich farm, historical and ethnographic open-air museum (the monument of kazakh Batyr, layout of Saks kurgan the holy spring of eternal youth and beauty).')}}</p>
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
		<img src="images/mount/img6.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.BURABAI')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Burabai')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/mount/img6.jpeg" width="100%" height="100%">
          <p>{{__('local.Burabai is the pearl of Kazakhstan. Amazing tour that includes mountains, lakes, cliffs and etc. One of the most beautiful sights of the country. Here, one can get spiritual energy and achieve an accord with the nature. We propose you to visit the resort Burabai at the lowest price, with a high comfort level. More details for the hotels (from 3 stars to V.I.P.), and the large choice of sanatoriums can be obtained from our managers.')}}</p>
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
