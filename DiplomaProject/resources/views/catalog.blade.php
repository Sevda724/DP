<!DOCTYPE html>
<html>
<head>
  <title>{{__('local.Catalog')}}</title>
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
label{
   display: flex;
 position: relative;
  background-color: white;
  width: auto;
  float: left;
  max-width: 100%;
  border: 1px solid black;
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


.our-culture h5 {
    text-align: center;
    font-weight: bold;
    color: black;
    font-family: 'Raleway', sans-serif;
}


#transparency p {
    padding-left: 20%;
    text-align: left;
    padding-right: 0;
}

#healthy p {
    padding-left: 20%;
    text-align: left;
    padding-right: 0;
}

#guidance p {
    padding-left: 20%;
    text-align: left;
    padding-right: 0;
}

.circle {
  padding-left: 0;
  width: 60px;
  height: 60px;
  border-radius: 30px;
  margin: 0 auto;
  background: black;
  font-weight: bold;
  font-size: 16px;
  color: white;
  text-align: center;
}



.product-filter {
  display: inline;
  margin-left: 100px;

}

.collection-sort {
  display: flex;
  flex-direction: column;
}


/* cards */
.cards {
  display: grid;
  grid-template-columns: auto auto auto auto;
  background-color: white;
  padding: 10px;
  margin: 37px auto 0;
  width: calc(280px * 4);
}

/*.cards {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  margin: 37px auto 0;
  width: calc(280px * 4);
}*/

.card {
  cursor: pointer;
  height: 280px;
  position: relative;
  width: 243px;.
}

.card-img-top{
  width: 243px;
  height: 180px;
}

.card h2 {
  font-size: 20px;
  font-weight: bold;
  text-align: center;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}

.card-description{
  text-align: center;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
.card.visited {
  box-shadow: 0 3px 10px 2px #444;
}

@media (max-width: 1100px) {
  .cards {
    grid-template-columns: 1fr 1fr;
    width: calc(280px * 2);
  }
  .card {
    margin: 0 auto 2rem;
  }
}

@media (max-width: 768px) {
  .cards {
    display: block;
    width: 100vw;
  }
  .card {
    margin: 0 auto 2rem;
  }
}


/* POPUP */

a {
  color: #235ba8;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
  select {
font-size: 1rem;
    font-weight: 200;
    max-width: 100%;
    padding: 8px 24px 8px 10px;
    border: 1px;
    background-color: transparent;
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
  }
  select:after {
    content: " ";
    position: absolute;
    top: 50%;
    margin-top: -2px;
    right: 8px;
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid #aaa;
  }
input {}

input:focus {}

input[type="submit"],
input[type="button"] {}
input[type="text"] {
  margin-left: 480px;
      border: 1px solid black;
      padding: 8px;
      font-size: 16px;
      width: 300px;
    }
    input[type="submit"] {
      background-color: black;
      color: white;
      border: none;
      padding: 8px 16px;
      font-size: 16px;
      cursor: pointer;
    }

/*wrappers, cards, etc. */

.random-background {
  background-color: #36a88e;
  /*top colour*/
  background-image: -webkit-linear-gradient(top, #36a88e, #f35b47);
  background-image: -moz-linear-gradient(top, #36a88e, #f35b47);
  background-image: -o-linear-gradient(top, #36a88e, #f35b47);
  background-image: linear-gradient(to bottom, #36a88e, #f35b47);
  height: 200vh;
  width: 100vw;
}

.itemlist{
  max-width:1024px;
  margin:auto;
  padding:20px;
  display:flex;
  flex-wrap: wrap;
}

.itemlist-item-wrapper{width: calc(90% / 3); display:inline-block; font-size: 20px !important; margin:1% 0.5% 0.5% 0.5%; background-color:white; padding:10px;
box-sizing: content-box;}

@media(max-width: 800px){
  .itemlist{ width:auto; margin:auto; padding:0;}
  .itemlist-item-wrapper{width:48%; margin:auto; margin-bottom:0.5%; padding:30px;}
}

@media(max-width: 600px){
  .itemlist{ width:auto; margin:auto; padding:0;}
  .itemlist-item-wrapper{width:auto; margin:auto; margin-bottom:2%;}
}


.lightbox-blanket {
  background-color: rgba(30, 30, 30, 0.9);
  display: block;
  height: 100vh;
  position: fixed;
  overflow-y: scroll;
  top: 0;
  width: 100vw;
  z-index: 20;
}

.pop-up-container {
  height: 100%;
  width: auto;
  display: table;
  margin: auto;
  position: static;
}

@media (max-width:400px) {
  .pop-up-container {
    width: 96%;
    margin: 2%;
  }
}

.pop-up-container-vertical {
  height: 100%;
  vertical-align: middle;
  display: table-cell;
}

.pop-up-wrapper {
  -webkit-box-shadow: -45px 49px 83px 1px rgba(0, 0, 0, 0.45);
  -moz-box-shadow: -45px 49px 83px 1px rgba(0, 0, 0, 0.45);
  box-shadow: -45px 49px 83px 1px rgba(0, 0, 0, 0.45);
  display: block;
  margin: 20px auto;
  width: auto;
  position: relative;
}

.pop-up-wrapper {
  background-color: white;
  display: block;
  padding: 50px;
}

.go-back {
  position: absolute;
  left: 10px;
  top: 10px;
  color:black;
  width: 0;
  height: 0;
  border-top: 60px solid white;
  border-right: 60px solid transparent;
}

.go-back i {
  font-size:20px;
  position: relative;
  top: -52px;
  left: 10px;
}

.product-details {
  max-width: 600px;
}

.product-left {
  display: inline-block;
  padding-right: 4%;
  vertical-align: top;
  width: 46%;
}

.product-right {
  display: inline-block;
  vertical-align: top;
  width: 49%;
}

.product-bottom{border-top:1px solid #ccc; position:relative; padding-top:20px;}

@media (max-width:650px){
  .product-left, .product-right, .product-bottom{
    width:100%;}
  .product-left{padding-right:0;}
  .product-info{display:inline-block; width:60%; vertical-align:top;}
   .product-image{display:inline-block; width:39%; vertical-align:top;}
}

@media (max-width:512px){
  .product-info, .product-image{width:100%;}
}

.product-manufacturer {
  color:#222;
  font-size: 22px;
  font-weight: bold;
  line-height: 1;
  margin: -2px;
}

.product-title {
  font-size: 14px;
  color: #888;
}


.product-image {
  padding: 10px 10px 0 10px;
}

.product-image img {
  width: 100%;
    height: 100%;
    object-fit: contain;
    height: 295px;
}

.product-description {line-height:1.5;}

.product-available {
  margin-top: 25px;
}

.product-rating{
  margin-top:25px;
}

i.fa-star{color:#aaa; display:inline-block;}
i.fa-star.rating{color: rgb(232, 217, 31);}
.product-rating-details{display:inline-block; padding-left: 10px;}
@media(max-width:515px){
  .product-rating-details{padding-left:0;}
}
.product-extended {
  color: #235ba8;
  padding-left: 5px;
}


.toast{
  position: fixed;
  top: -50px;
  left: calc(50vw - 50px);
  z-index:25;
  padding:5px 10px;
  border-radius: 15px;
}

.toast-success{
  background-color: green;
  color:white;
  font-size: 9pt;
}

.toast-transition{
  top: calc(50px);
  transition:top 1s;
}


.hidden {
  display: none;
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
@include('layouts.navbar-1-type')


<!-- Homepage section
================================================== -->
<div id="home">
  <div class="site-slider">
        <ul class="bxslider">
            <!--<li>
                <img src="images/port/bsh.jpeg" alt="slider image 1 " style="height: 1000px; width:100%;">
            </li>-->
            <li>
                <img src="images/port/amre.jpeg" alt="slider image 2" style="height: 1000px; width:auto;">
            </li>
            <li>
                <img src="images/port/tom.jpeg" alt="slider image 3" style="height: 1000px; width:auto;">
            </li>
            <!--<li>
                <img src="images/port/shyrakshy.jpeg" alt="slider image 4" style="height: 1000px; width:auto;">
            </li>-->
            <li>
                <img src="images/port/myn.jpeg" alt="slider image 5" style="height: 1000px; width:auto;">
            </li>
        </ul>
    </div>
</div>
<br>
<br>
<br>

<h2 class="slider-name" style="text-align: center;">{{__('local.HOW TO PURCHASE MOVIE?')}}</h2>

<br>
<br>
<br>


  <div class="our-culture">
            <div class="container">


                <div class="row">
                    <div id="transparency" class="col-lg-4">
                        <div class="circle"><br>1</div>
                        <h5>{{__('local.Choose')}}</h5>
                        <p>{{__('local.Choose the movie of any genre from the catalog.')}}</p>


                    </div>
                    <div id="healthy" class="col-lg-4">
                        <div class="circle"><br>2</div>
                        <h5>{{__('local.Make a Request')}}</h5>
                        <p>{{__('local.Click the Request button and fill in information about yourself in order to obtain the relevant information about ordering by e-mail.')}}</p>

                    </div>
                    <div id="guidance" class="col-lg-4">
                        <div class="circle"><br>3</div>
                        <h5>{{__('local.Receive')}}</h5>
                        <p>{{__('local.Our team will email you screening links of your request. And, lastly enjoy watching movies.')}}</p>

                    </div>
                </div>
            </div>
        </div>

<br>
<br>
<br>
<div class="inf" style="background: black; color: white;">
  <p style="text-align:center; color: white; padding-top: 2%; padding-bottom: 2%;">{{__('local.Kazakhfilm is the main film platform in Kazakhstan,which is engaged in the production and post-productionof feature, documentary and animation films.')}}</p>
</div>


<br>
<br>

<nav class="product-filter">
  <div class="sort">
        {{ csrf_field() }}

<form method="GET" action="{{ route('filter.index') }}">

    <label style="margin-left: 160px;">
      <SELECT id='filter' name='filter' onchange='filter'>
        <option value="">{{__('local.All')}}</option>
        <option value="action" {{ $selectedCategory == 'action' ? 'selected="selected"' : '' }}>{{__('local.Action')}}</option>
        <option value="comedy" {{ $selectedCategory == 'comedy' ? 'selected="selected"' : '' }}>{{__('local.Comedy')}}</option>
        <option value="crime" {{ $selectedCategory == 'crime' ? 'selected="selected"' : '' }}>{{__('local.Crime')}}</option>
        <option value="detective" {{ $selectedCategory == 'detective' ? 'selected="selected"' : '' }}>{{__('local.Detective')}}</option>
        <option value="Documental" {{ $selectedCategory == 'Documental' ? 'selected="selected"' : '' }}>{{__('local.Documental')}}</option>
        <option value="drama" {{ $selectedCategory == 'drama' ? 'selected="selected"' : '' }}>{{__('local.Drama')}}</option>
        <option value="family" {{ $selectedCategory == 'family' ? 'selected="selected"' : '' }}>{{__('local.Family')}}</option>
        <option value="Fantasy" {{ $selectedCategory == 'Fantasy' ? 'selected="selected"' : '' }}>{{__('local.Fantasy')}}</option>
        <option value="Historical" {{ $selectedCategory == 'Historical' ? 'selected="selected"' : '' }}>{{__('local.Historical')}}</option>
        <option value="Melodrama" {{ $selectedCategory == 'Melodrama' ? 'selected="selected"' : '' }}>{{__('local.Melodrama')}}</option>
        <option value="Musical" {{ $selectedCategory == 'Musical' ? 'selected="selected"' : '' }}>{{__('local.Musical')}}</option>
        <option value="Serial" {{ $selectedCategory == 'Serial' ? 'selected="selected"' : '' }}>{{__('local.Serial')}}</option>
        <option value="Short" {{ $selectedCategory == 'Short' ? 'selected="selected"' : '' }}>{{__('local.Short')}}</option>
        <option value="Sport" {{ $selectedCategory == 'Sport' ? 'selected="selected"' : '' }}>{{__('local.Sport')}}</option>
        <option value="USSR" {{ $selectedCategory == 'USSR' ? 'selected="selected"' : '' }}>{{__('local.USSR')}}</option>
        <option value="War" {{ $selectedCategory == 'War' ? 'selected="selected"' : '' }}>{{__('local.War')}}</option>
        <option value="Full-length" {{ $selectedCategory == 'Full-length' ? 'selected="selected"' : '' }}>{{__('local.Full-length')}}</option>
      </SELECT>
 </label>
    <label style="margin-left: 20px;">
      <select  id='sort' name="sort">
        <option value="desc" {{ $selectedSortOrder == 'desc' ? 'selected="selected"' : '' }}>{{__('local.Newest first')}}</option>
        <option value="asc" {{ $selectedSortOrder == 'asc' ? 'selected="selected"' : '' }}>{{__('local.Oldest first')}}</option>
      </select>
    </label>
    <input name='search' type="text" placeholder="Search..." value="{{ $q }}">
    <input type="submit" value="Go">
  </form>
  </div>
</nav>
<br>
<br>
<br>

@if(app()->getLocale() == 'en')
<div style="text-align: center;">
<div class="cards" >
@foreach($filmsData as $filmData)

  <div class="card">
    <a href="{{ route('film.show', $filmData->id) }}">
    <img src={{$filmData->Photo}} alt="..." class="card-img-top" ></a>
    <div class="card-body">
      <h2 class="card-title">{{$filmData->Title}}</h2>
      <p class="card-description">{{$filmData->Description}}</p>
    </div>
  </div>

      @endforeach
</div>
<br>
  {{$filmsData-> withQueryString() -> links()}}

</div>
@endif

@if(app()->getLocale() == 'ru')
<div style="text-align: center;">
<div class="cards" >
@foreach($filmsData as $filmData)

  <div class="card">
    <a href="{{ route('film.show', $filmData->id) }}">
    <img src={{$filmData->Photo}} alt="..." class="card-img-top" ></a>
    <div class="card-body">
      <h2 class="card-title">{{$filmData->Title_ru}}</h2>
      <p class="card-description">{{$filmData->Director_ru}}. {{$filmData->Year}}</p>
    </div>
  </div>

      @endforeach
</div>
<br>
  {{$filmsData-> withQueryString() -> links()}}
</div>
@endif

<br>
<br>
<br>
<!-- subs section -->

  @if(session('status_good')))
  <div class="alert alert-success" style="text-align: center; width: 50%; margin: auto auto 5px auto;">
    {{ session('status_good') }}
  </div>
@endif

@if(session('status_bad')))
  <div class="alert alert-danger" style="text-align: center; width: 50%; margin: auto auto 5px auto;">
     {{ session('status_bad') }}
  </div>
@endif
<section id="subs" class="parallax-section">
  <div class="container">
    <div class="row" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
  <br>
        <h2 class="subscribe__title">{{__('local.LET\'S KEEP IN TOUCH')}}</h2>
  <p class="subscribe__copy">{{__('local.Subscribe to keep up with fresh news and exciting updates. We promise not to spam you!')}}</p>
  <form method="POST" action="{{ route('subscribers.store') }}">
  {{ csrf_field() }}
  <input name = "email" type="email" class="form__email" placeholder="{{__('local.Enter your email address')}}" value="{{ old('email') }}"/>
  @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
  @endif
  <button class="form__button">{{__('local.SEND')}}</button>
</form>
</div>
<br>
  </div>
</section>







<script type="text/javascript">
  clickAndSelect()
 function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
function clickAndSelect() {
  let cards = Array.from( document.querySelectorAll('.card') ),
      elements = []


  cards.forEach(card => {
    elements = elements.concat( Array.from(card.children) )
  })


  elements.forEach(element => {


    element.addEventListener('click', e => e.preventDefault())

    element.addEventListener('mousedown', e => {
      let card = e.target.closest(".card")
      card.setAttribute('data-md', Date.now())
    })

    element.addEventListener('mouseup', e => {


      e.stopPropagation();

      let card = (e.target.classList.contains("card")) ? e.target : e.target.closest('.card'),
          then = card.getAttribute('data-md'),
          now = Date.now()


      if(now - then < 200) {


        window.location = card.querySelector('a').href


        card.classList.add('visited')
        console.log(card.querySelector('a').href)

      }

      card.removeAttribute('data-md')

    })
  })
}



function OpenProduct(i){
  var i = $('.product-image[item-data="'+i+'"] img');
  var lbi = $('.lightbox-blanket .product-image img');
  console.log($(i).attr("src"));
  $(lbi).attr("src", $(i).attr("src"));
  $(".lightbox-blanket").toggle();

  $("#product-quantity-input").val("0");
  CalcPrice (0);

}
function GoBack(){
  $(".lightbox-blanket").toggle();
}


document.addEventListener('DOMContentLoaded', function () {
   var input = document.getElementById('job');
   if (localStorage['filter']) { // if job is set
       input.value = localStorage['filter']; // set the value
   }
   input.onchange = function () {
        localStorage['filter'] = this.value; // change localStorage on change
    }
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
