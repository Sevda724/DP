<!DOCTYPE html>
<html>
<head>
	<title>Dubbing&Subtitling</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
  <link rel="stylesheet" href="css/owl2.carousel.css">

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
h1,h2,h3,h5 {
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

p, li {
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



.mySlides {display:none;}


.p-st{
  text-align: left;
  display:flex;
  flex-direction: column;
  align-items: center
}

.transition {
  -webkit-transition: .3s all;
  -o-transition: .3s all;
  transition: .3s all;
}





.roman {
 list-style-type: disc;
}
.square {
 list-style-type: circle;
 margin-left: -2em;
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


<br>
<br>
<br>
<br>

<div class="backp">
<a href="/" class="previous" style="margin-left: 20px; margin-top: 20px;">&#8249;</a>
</div>

<h2 class="slider-name" style="text-align: center;">{{__('local.DUBBING&SUBTITLING')}}</h2>
<br>
<br>
 <div class="col-md-offset-2 col-md-8 col-sm-12">
<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
  <img src="images/dub/eq4.jpg" style="width:100%">
</div>

<div class="w3-display-container mySlides">
  <img src="images/dub/eq3.jpg" style="width:100%">
</div>

<div class="w3-display-container mySlides">
  <img src="images/dub/eq1.jpg" style="width:100%">
</div>

<div class="w3-display-container mySlides">
  <img src="images/dub/eq2.jpg" style="width:100%">
</div>


<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>
<br>
<br>
<p class="p-st">{{__('local.Your feature film, documentary, TV series, podcast or cartoon can find an audience anywhere in the world. But you need high-quality localization – dubbing or subtitling – that gives your audience a seamless experience. Power of Kazakhfilm provides language services at every stage of production – from translating contracts and rushes, to getting your production ready for international release in Kazakhstan and other countries of CIS.')}}</p>

<br>
<h2>{{__('local.What are Dubbing and Subtitling?')}}</h2>
<p class="p-st">{{__('local.Dubbing, often confused with voice-over services, replaces dialogue with a spoken translation. The process is very technical and involves directors, voice-over actors, translators, sound mixers and more.')}}</p>
<p class="p-st">{{__('local.Subtitles are the written translation of the dialogue in a piece of content. Subtitles are placed at the bottom of the screen and are timed with the actor’s lines.')}}</p>

<br>
<h2>{{__('local.Dubbing vs Subtitles – What’s best for my content?')}}</h2>
<p class="p-st">{{__('local.Whether you choose to dub or subtitle your content you should have an understanding of your target audience’s preferences. Unfortunately, it is not a one size fits all situation.')}}</p>
<p class="p-st">{{__('local.There are advantages and disadvantages to both audiovisual translation services. The main factors that should impact your decision on translation methods are:')}}</p>
<ul>
  <li>{{__('local.Cost')}}</li>
  <li>{{__('local.Timeframe')}}</li>
  <li>{{__('local.What your target audience prefers')}}</li>
  <li>{{__('local.The type of content you are translating')}}</li>
</ul>
<p class="p-st">{{__('local.There is also a range of exceptions. For example, you wouldn’t be able to add subtitles to content for young children that don’t know how to read yet.')}}</p>
<p class="p-st">{{__('local.And, whilst subtitles are a quick and cost-effective option, they may not be widely used in the region you’re targeting – so knowing your target audience is key.')}}</p>
<br>
<h2>{{__('local.Our Services')}}</h2>
<ul>
  <li>{{__('local.dubbing of documentaries, feature films, serials, cartoons')}}</li>
  <li>{{__('local.creating and overlaying subtitles(also for hearing impairments)')}}</li>
  <li>{{__('local.translation of the films into other languages')}}</li>
  <li>{{__('local.translation from most European and Asian languages into Kazakh')}}</li>
  <li>{{__('local.editing and proofreading of the text by a native speaker')}}</li>
  <li>{{__('local.transcription(text decoding)')}}</li>
  <li>{{__('local.creating dialogue sheets with timecode overlay for working on a film')}}</li>
  <li>{{__('local.script translation')}}</li>
  <li>{{__('local.audio transcription')}}</li>
</ul>

<br>
<h2>{{__('local.Portfolio of Works')}}</h2>
<!--
   <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">

                        <div id="owl-example" class="owl-carousel">
                            <div>
                                <img class="img-responsive" src="images/port/shal.jpeg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/port/dm.jpeg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/port/comp.jpeg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/port/myn.jpeg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/port/amre.jpeg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/port/tom.jpeg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/port/sp.jpeg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/port/maya.png" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/port/tc.jpeg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="images/port/robo.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->

<p class="p-st">{{__('local.The film studio has extensive experience in the development and production of informational audio and video materials. It also has qualified personnel with higher professional education and work experience.')}}</p>

<br>
<h2>{{__('local.Technical information about the voice and sound dubbing studio')}}</h2>
<ul>
  <li>{{__('local.Advanced digital image editing powered by Apple Mac Pro')}}</li>
  <li>{{__('local.Video editing hardware based on Apple Mac Pro Final Cut 7 software without attendants')}}</li>
  <li>{{__('local.Voice dubbing studio')}}</li>
  <li>{{__('local.Voice and noise sound studio')}}</li>
  <li>{{__('local.Voice dubbing with a video projector')}}</li>
  <li>{{__('local.Sound editing rooms')}}</li>
  <li>{{__('local.Digital audio editing (Pro Tools HD)')}}</li>
  <li>{{__('local.Sound editing control room (Pro Tools HD) without attendants')}}</li>
  <li>{{__('local.Voice Sound Studio (with Viewing Room)')}}</li>
</ul>

<br>
<h2>{{__('local.Price List')}}</h2>
<ul class="roman">
 <li>{{__('local.Dubbing into the Kazakh language of a full-length feature film(per minute):')}}
 <ul class="square">
  <li>{{__('local.Synchronization – 150$')}}</li>
  <li>{{__('local.Voice-over (2 voices) – 100$')}}</li>
  <li>{{__('local.Voice-over (4 voices) – 120$')}}</li>
 </ul>
 </li>
<li>{{__('local.Dubbing into the Kazakh language of a documentary film(per minute):')}}
 <ul class="square">
  <li>{{__('local.Voice-over (2-3 voices) – 50$')}}</li>
 </ul>
 </li>
 <li>{{__('local.Dubbing into the Kazakh language of a full-length cartoon(per minute):')}}
 <ul class="square">
  <li>{{__('local.Synchronization – 90$')}}</li>
  <li>{{__('local.Voice-over – 60$')}}</li>
 </ul>
 </li>
  <li>{{__('local.Dubbing into the Kazakh language of serials(per minute):')}}
 <ul class="square">
  <li>{{__('local.Voice-over (2 voices) – 130$')}}</li>
  <li>{{__('local.Voice-over (4 voices) – 140$')}}</li>
 </ul>
 </li>
</ul>
<br>
<br>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}

$(document).ready(function(){


 $("#owl-example").owlCarousel({
    // Most important owl features
    items : 4,
    pagination : true,
    paginationSpeed : 1000,
    navigation : true,
    navigationText : ["","<i class='fa fa-angle-right'></i>"],
    slideSpeed : 800,
 });


</script>


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
