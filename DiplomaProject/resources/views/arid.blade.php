<!DOCTYPE html>
<html>
<head>
	<title>{{__('local.Arid Locations')}}</title>
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

        <li><a href="/#work" class="smoothScroll">{{__('local.HOME')}}</a></li>
        <li><a href="/#about" class="smoothScroll">{{__('local.ABOUT')}}</a></li>
        <li><a href="/#portfolio" class="smoothScroll">{{__('local.SHOWCASE')}}</a></li>
        <li><a href="/#locations" class="smoothScroll">{{__('local.LOCATIONS')}}</a></li>
        <li><a href="/#contact" class="smoothScroll">{{__('local.CONTACT')}}</a></li>
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
<h2 class="heading">{{__('local.ARID')}}</h2><br>
<div class="row">
	<div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal">
  <div>

		<img src="images/arid/charyn.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.CHARYN CANYON')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Charyn Canyon')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/arid/charyn.jpeg" width="100%" height="100%">
          <p>{{__('local.The Charyn Canyon is located in the Charyn National Park about 215km east of Almaty and approximately a 3 hour drive via the A 351 and A 352. The Canyon has been described as the Grand Canyon\’s little brother. This is not to detract from the sheer splendor of the canyon itself. The vista of dramatic erosion made by the river Charyn below and the elements has created a dramatic and impressive landscape.')}}</p>
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
		<img src="images/arid/img2.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.SINGING DUNES')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Singing Dunes')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/arid/img2.jpeg" width="100%" height="100%">
          <p>{{__('local.Singing Dunes is a phenomenon of nature, famous for the fact that when the weather is dry the sand dune emits a sound similar to the tune of organ. Also the dune is known for the beautiful views overlooking the surrounding countryside. Singing Dunes is a popular tourist attraction. Singing Dunes is a mountain of sand of light colors, has a length of 3 km and a height of 150 m. The dune is located in the National Park Altyn-Emel in Almaty oblast of Kazakhstan, 182 km north-east of Almaty.')}}</p>
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
		<img src="images/arid/img3.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.USTYURT PLATEAU')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Ustyurt Plateau')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/arid/img3.jpeg" width="100%" height="100%">
          <p>{{__('local.Ustyurt Plateau is the most mysterious and least researched destination in Kazakhstan. In some records the plateau is called ‘an island’, and it is clear why: within the mass of desert sand chink plateau edge cliffs of over 300 meters in height are rising. The cliffs are so steep that there is only a place or two within the length of over 100 kilometers where a human can go up to the top of them.')}}</p>
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
		<img src="images/arid/img4.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.BOZJYRA TRACT')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Bozjyra Tract')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/arid/img4.jpeg" width="100%" height="100%">
          <p>{{__('local.Bozjyra is a magnificent creation of weathering and erosion, located on the territory of the Ustyurt Plateau. Here you can see vast clay deserts, limestone mountains, buttes more than 200 meters (650 ft) high. In the Mesozoic Era this area was covered by the Tethys Ocean, so now here you can find a lot of fossilized shells and teeth of prehistoric sharks. Bozjyra is the must-see attraction of the Mangystau Province, that will definitely cause a lot of emotions.')}}</p>
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
		<img src="images/arid/img5.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.OTYRAR')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Otyrar')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/arid/img5.jpeg" width="100%" height="100%">
          <p>{{__('local.Otyrar, also known as Farab, was a significant cultural and trade center. In addition, it was of great diplomatic and military strategic importance. In the past century, the first studies and excavations were carried out, discovering an ancient palace, mosques, and baths. Antique ceramics, metal tools, coins, and jewelry were also found. Now these artifacts can be seen in museums across the country. The city has a history dating back 2 thousand years. Visitors will be able to learn it thoroughly. The government with the assistance of UNESCO is working on the preservation of historical monuments.')}}</p>
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
		<img src="images/arid/img6.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.CITY OF NOMADS')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.City of Nomads')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/arid/img6.jpeg" width="100%" height="100%">
          <p>{{__('local.The City of Nomads in the Almaty Province once served as a filming location for the Kazakh-French historical movie “Nomad: The Warrior” (2005), an adaptation of the second book from the “Nomads” trilogy by the Kazakh writer Ilyas Esenberlin. It was the most expensive Kazakh movie ever made and Kazakhstan\'s entry for the Best Foreign Language Film for the 79th Academy Awards. The fortress walls and the main gates overlooking the Ili River are visible from afar. The fortress stands on the Ili River bank, near the Tamgaly-Tas Tract, famous for its ancient rock paintings. Nomads have lived there from time immemorial, here the fate of nomadic tribes was decided.')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('local.Close')}}</button>
        </div>
      </div>

    </div>
  </div>



	</div>

  <div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal7">
<div>
    <img src="images/arid/img7.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.KIIN KERISH CANYON')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Kiin Kerish Canyon')}}</h2>
        </div>
        <div class="modal-body">
          <img src="images/arid/img7.jpeg" width="100%" height="100%">
          <p>{{__('local.Kiin Kirish, an amazingly picturesque clay canyon, is a unique natural monument located 120 km southeast of the town of Kurshim in the East Kazakhstan region and covers an area of 300 hectares. This place is also known as “The Town of Spirits”. Multicolored clays, eroded by water and wind, form vivid, bizarre landscapes here. The optimal time for a trip is 3-4 days.')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('local.Close')}}</button>
        </div>
      </div>

    </div>
  </div>

  </div>




  <div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal8">
<div>
    <img src="images/arid/img8.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.BEKTAU ATA')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Bektau Ata')}}</h2>
        </div>
        <div class="modal-body">
          <img src="images/arid/img8.jpeg" width="100%" height="100%">
          <p>{{__('local.Bektau-Ata is an unusual natural monument located about 70 kilometers north of the town of Balkhash in Karaganda region. This is a meeting place of two different landscapes – granite mountain is surrounded by a flat steppe. The mountain rises above the steppe more than a thousand meters. Pink granite rocks of Bektau-Ata consist of granite lava solidified on the surface and in the cracks of the earth.')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('local.Close')}}</button>
        </div>
      </div>

    </div>
  </div>
  </div>





    <div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal9">
<div>
    <img src="images/arid/img9.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.ALTYN EMEL')}}</h2>
                </div>
</div>

</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal9" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-center">{{__('local.Altyn Emel')}}</h2>
        </div>
        <div class="modal-body">
          <img src="images/arid/img9.jpeg" width="100%" height="100%">
          <p>{{__('local.Altyn-Emel National Park, located in Almaty Province, is one of the largest national parks in Kazakhstan. It is known for spectacular scenery that includes mountains, and deserts, sandstone formations, and stepped. The highlight of the park is the Singing Dune, which got its name because wind makes the sand emit a rumbling sound. A light breeze gives a barely audible squeak, while strong gusts produce a more intense sound, similar to that of an organ. There are several archaeological sites here; the biggest of them is Bes Shatyr (“Five Marques”) complex, consisting of Saka (a group of ancient nomadic tribes) burials. You can also explore the Aktau Mountains, multi-colored hills formed from bluish-gray sandstone and red clay.')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('local.Close')}}</button>
        </div>
      </div>

    </div>
  </div>
</div>







    <div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal10">
<div>
    <img src="images/arid/img10.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.TAMGALY TAS')}}</h2>
                </div>
</div>

</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal10" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-center">{{__('local.Tamgaly Tas')}}</h2>
        </div>
        <div class="modal-body">
          <img src="images/arid/img10.jpeg" width="100%" height="100%">
          <p>{{__('local.Tamgaly-Tas is the stow at the river Ily, 120 km away to the north from Almaty. Here the rocks still preserve many petroglyphs, drawings of mysteries gods, latest Buddhist’s writings. There are around one thousand rock drawings among the petroglyphs, best known are the images of Buddha Shakyamuni, Buddha of Infinite Light Amitabha and Bodhisattva of Compassion Avalokiteshvara. Besides Buddhist writings, there is the stone with Old Turkic runic writings of the VIII—IX century, supposedly left of the cumans.')}}</p>
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
