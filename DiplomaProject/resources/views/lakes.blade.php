<!DOCTYPE html>
<html>
<head>
	<title>{{__('local.Lakes')}}</title>
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
<h2 class="heading">{{__('local.LAKES')}}</h2><br>
<div class="row">
	<div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal">
  <div>

		<img src="images/lakes/img1.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.ALAKOL')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Alakol')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/lakes/img1.jpeg" width="100%" height="100%">
          <p>{{__('local.Lake Alakol is a landmark of East Kazakhstan. This drainless lake was widely known in the Middle Ages, when one of the trade routes of the Silk Road was passing near it. Tired wayfarers noticed a surge of strength after drinking from Alakol, and modern scientists have confirmed its water\'s positive effect on a body. People come here to improve their health, take a break from the bustle of the city and just breath some fresh air. The Alakol Nature Reserve was founded here. There are many hotels and guesthouses.')}}</p>
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
		<img src="images/lakes/img4.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.BALKHASH')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Balkhash')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/lakes/img4.jpeg" width="100%" height="100%">
          <p>{{__('local.Lake Balkhash is one of the largest lakes in Kazakhstan. Its eastern part is saline, and the western one is fresh. The lake is surrounded by somewhat harsh yet picturesque places: Betpak- Dala Desert, the Chu-Ili Mountains and the Taukum Desert. The climate here is continental, so summer is always hot and sunny - perfect weather to hit the beach. There are recreation areas with comfortable rooms and houses with all the necessary infrastructure as well as a large variety of entertainment for fans of sailing, canoeing and fishing. Warm turquoise water, bright sun - Lake Balkhash is beautiful at any time of the year. With the perfect weather and combination of outdoor activities, Balkhash Lake is the ultimate summer trip.')}}</p>
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
		<img src="images/lakes/img5.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.KAPCHAGAY')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Kapchagay')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/lakes/img5.jpeg" width="100%" height="100%">
          <p>{{__('local.Kapchagay is best-known as the beach of Almaty. Situated 70 km north of the city, the town of Kapchagay is located on the shore of an artificial lake of the same name formed by a dam across the Ili river. Besides sandy beaches, Kapchagay also has a lot of casinos and ruined factories, earning it the moniker “Lost Vegas”.')}}</p>
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
		<img src="images/lakes/img6.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.CASPIAN SEA')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Caspian Sea')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/lakes/img6.jpeg" width="100%" height="100%">
          <p>{{__('local.The Caspian Sea is actually a lake, but because of its impressive size and the title of the largest closed reservoir, it is called the sea. The city of Aktau, that is located right on its shore, has beautiful beaches. A large number of warm sunny days, mud with healing properties, and springs with mineral water - all of this attract tourists to Aktau. Local authorities are focused not on quantity but on quality of entertainment: there is proper infrastructure and nice service.')}}</p>
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
		<img src="images/lakes/img7.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.ISSYK')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Issyk')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/lakes/img7.jpeg" width="100%" height="100%">
          <p>{{__('local.Issyk (or Isik- another name for the lake, translated as “a door” from Kazakh) is a picturesque, alpine lake surrounded by unusually beautiful nature of thick forests and spacious flower fields. The lake is located at an altitude of 1760 meters above sea level, in the Issyk gorge of Trans-Ili Alatau, about 70 km east of Almaty.')}}</p>
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
		<img src="images/lakes/img8.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.MARKAKOL')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Markakol')}}</h2>
        </div>
        <div class="modal-body">
        	<img src="images/lakes/img8.jpeg" width="100%" height="100%">
          <p>{{__('local.Markakol Lake in Altay Mountains is one of the most beautiful lakes in East Kazakhstan and is called a pearl of this region. The lake is surrounded by Kurchum Mountains from the North and Azutau Mountains from the South. The land surrounding the lake is as beautiful as the lake itself. The pride of Markakol Nature Reserve is not only the lake, but also taiga wood, clear mountain rivers, shining springs. Picturesque mountain slopes are decorated with thick fir-trees. Amazing panorama of Sarymsakty Mountain chain with snow on the top can be seen in Northern sides.')}}</p>
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
    <img src="images/mount/img7.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.KOLSAY')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Kolsay')}}</h2>
        </div>
        <div class="modal-body">
          <img src="images/mount/img7.jpeg" width="100%" height="100%">
          <p>{{__('local.Kolsay Lakes – one of the most beautiful places in Kazakhstan. These lakes are located at heights 1800, 2250 and 2700 metres above sea level. They are distinguished by the unique mountain watershed consisting of three natural zones and amazing variety of rare plants and animals. Kolsay Lakes are considered a pearl of Northern Tien-Shan located in 300 km from Almaty city. The river Kolsay originates on a ridge of Kungey-Alatau and runs in turns into three lakes: Top, Mynzholki and Lower. Water in lakes is fresh, rigid and contains sulphate of sodium. A bottom of the lakes in places is flat, without rocky ledges. During the summer period the water temperature is + 10 degrees. The triad of high-mountainous lakes as if a thread strung with pearls decorates northern Tien Shan.')}}</p>
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
    <img src="images/mount/img8.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.KAYINDI')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Kayindi')}}</h2>
        </div>
        <div class="modal-body">
          <img src="images/mount/img8.jpeg" width="100%" height="100%">
          <p>{{__('local.Almaty Province is famous for its picturesque places and one of them is the charming lake of incredible beauty - Kaindy. It is located within Kolsay Kolderi National Park. Its name means “abundant in birch trees”, despite the fact that birch groves are located a few kilometers away from Kaindy. The lake is surrounded by spruce trees. The trunks of ancient submerged spruce trees rise above the water surface: they were flooded when the lake was formed. The most interesting thing is that the lower branches are surprisingly well preserved, hidden from the sun and wind by cold mountain water. Despite the humid and hot climate of the Almaty Province, the weather is cool near Kaindy Lake even in summer. Be sure to wear warm clothes and comfortable shoes. "This picture\'s worth a thousand words" - this is how we can describe Kaindy Lake. Visit this incredible place and see it with your own eyes.')}}</p>
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
    <img src="images/lakes/img10.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.ZAYSAN')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Zaysan')}}</h2>
        </div>
        <div class="modal-body">
          <img src="images/lakes/img10.jpeg" width="100%" height="100%">
          <p>{{__('local.Lake Zaysan is undoubtedly one of the oldest bodies of water on the planet. Its exact age is so difficult to determine. According to some indirect signs, scientists suggest that the reservoir was formed at the end of the Cretaceous period, more than 65 million years ago, and therefore dinosaurs graced its waters. If this hypothesis is correct, then the Zaysan may be even older than Lake Baikal, whose age, according to the common opinion, is about 25 million years.')}}</p>
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
    <img src="images/lakes/img11.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.SIBIN LAKES')}}</h2>
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
          <h2 class="modal-title text-center">{{__('local.Sibin Lakes')}}</h2>
        </div>
        <div class="modal-body">
          <img src="images/lakes/img11.jpeg" width="100%" height="100%">
          <p>{{__('local.The Sibin Lakes are a group of five lakes (Sadyrkol, Tortkara, Shalkar, Korjinkol, and Karakol) located in East Kazakhstan Province. Their total area is 32 square kilometers (20 sq. mi), while their depth varies from 2.5 to 38 meters (6.5-125 ft). Framed by granite mountain peaks, the lakes are a popular destination among beach-goers and hikers. People come here to admire panoramic views from the rocky peaks of the Baiga, Medvedka, and Koktau Mountains, marvel at ancient rock paintings, and try their luck at finding rare minerals such as almandine and black tourmaline. Near the lakes, you can find the ruins of a Buddhist monastery, something you don’t expect to see in Kazakhstan. According to some legends, a golden statue of Buddha is submerged at the bottom of one of the lakes. This legend attracts divers who dream of discovering it.')}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('local.Close')}}</button>
        </div>
      </div>

    </div>
  </div>
  </div>





  <div class="col-md-4">
<a href=""  data-toggle="modal" data-target="#myModal11">
<div>
    <img src="images/lakes/img12.jpeg" class="img-responsive" width="100%" height="100%">
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
  transform: translate(-50%, -50%);">{{__('local.KOBEYTUZ')}}</h2>
                </div>
</div>

</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal11" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-center">{{__('local.Kobeytuz')}}</h2>
        </div>
        <div class="modal-body">
          <img src="images/lakes/img12.jpeg" width="100%" height="100%">
          <p>{{__('local.The Pink Lake Kobeituz is located in the Akmola region and it turns to pink color every few years. It is believed that the pink color of the water is created by the microalga "Dunaliella brackish" the same microalgae color worldwide known famous pink lakes exist in Australia and Canada. Kobeituz is a tiny lake lie next to the Ereimentau town in about 160 km away from Nur-Sultan. In the Kazakh language, "Kobei" means multiply, and "tuz" is a salt, which can give you a clue about the properties of the lake. Moreover, the healing effects of mud and salt.')}}</p>
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
