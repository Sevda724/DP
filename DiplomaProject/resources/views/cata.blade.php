<!DOCTYPE html>
<html>
<head>
  <title>Catalog</title>
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

label{
   display: flex;
 position: relative;
  background-color: white;
  width: auto;
  float: left;
  max-width: 100%;
  border: 1px solid black;
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

/* cards */
.cards {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  margin: 37px auto 0;
  width: calc(280px * 4);
}

.card {
  cursor: pointer;
  height: 280px;
  position: relative;
  width: 243px;
}

.card-img-top{
   float: left;
    width:  260px;
    height: 200px;
    object-fit: cover;

}

.card h2 {
  font-size: 20px;
  font-weight: bold;
  text-align: center;
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

.btn {
  background: transparent;
  border: 4px solid #000000;
  border-radius: 0;
  color: #000000;
  font-weight: bold;
  letter-spacing: 2px;
  padding: 12px 42px;
  margin-top: 40px;
  margin-right: 16px;
  transition: all 0.4s ease-in-out;
}

.btn:hover {
  background: #000000;
  color: #ffffff;
  border-color: transparent;
}



</style>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section
================================================== -->



<!-- Navigation section
================================================== -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation" >
  <div class="container">

    <div class="navbar-header">
      <a href="index.html" class="smoothScroll navbar-brand"><img src="images/logo.png" style="height: 50px; width: auto; margin-top: -10px;"></a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
            
        <!-- <li><a href="#home" class="smoothScroll">HOME</a></li> -->
                
        <li><a href="index.html" class="smoothScroll">HOME</a></li>
        <li><a href="index.html" class="smoothScroll">ABOUT</a></li>
        <li><a href="index.html" class="smoothScroll">SHOWCASE</a></li>
        <li><a href="index.html" class="smoothScroll">LOCATIONS</a></li>
        <li><a href="index.html" class="smoothScroll">CONTACT</a></li>
      </ul>
    </div>

  </div>
</section>


<!-- Homepage section
================================================== -->
<div id="home">
  <div class="site-slider">
        <ul class="bxslider">
     
            <li>
                <img src="images/port/amre.jpeg" alt="slider image 2" style="height: 1000px; width:auto;">
            </li>
            <li>
                <img src="images/port/tom.jpeg" alt="slider image 3" style="height: 1000px; width:auto;">
            </li>
            
            <li>
                <img src="images/port/myn.jpeg" alt="slider image 5" style="height: 1000px; width:auto;">
            </li>
        </ul> 
    </div> 
</div>
<br>
<br>
<br>

<h2 class="slider-name" style="text-align: center;">{{ __('HOW TO PURCHASE MOVIE?') }}</h2>

<br>
<br>
<br>


  <div class="our-culture">
            <div class="container">


                <div class="row">
                    <div id="transparency" class="col-lg-4">
                        <div class="circle"><br>1</div>
                        <h5>{{ __('Choose') }}</h5>
                        <p> {{ __('Choose the movie of any genre from the catalog.') }}</p>


                    </div>
                    <div id="healthy" class="col-lg-4">
                        <div class="circle"><br>2</div>
                        <h5>{{ __('Make a Request') }}</h5>
                        <p>{{ __('Click the Request button and fill in information about yourself in order to obtain the relevant information about ordering by e-mail.') }}</p>

                    </div>
                    <div id="guidance" class="col-lg-4">
                        <div class="circle"><br>3</div>
                        <h5>{{ __('Receive') }}</h5>
                        <p>{{ __('Our team will email you screening links of your request. And, lastly enjoy watching movies.') }}</p>

                    </div>
                </div>
            </div>
        </div>

<br>
<br>
<br>
<div class="inf" style="background: black; color: white;">
  <p style="text-align:center; color: white; padding-top: 2%; padding-bottom: 2%;">{{ __('Kazakhfilm is the main film platform in Kazakhstan,which is engaged in the production and post-productionof feature, documentary and animation films.') }}</p>
</div>


<br>
<br>

<nav class="product-filter">
  <div class="sort">
    <label style="margin-left: 160px;">
  <select>
    <option value="/">All</option>
        <option value="/">Action</option>
        <option value="/">Comedy</option>
        <option value="/">Crime</option>
        <option value="/">Detective</option>
        <option value="/">Documental</option>
        <option value="/">Drama</option>
        <option value="/">Family</option>
        <option value="/">Fantasy</option>
        <option value="/">Historical</option>
        <option value="/">Melodrama</option>
        <option value="/">Musical</option>
        <option value="/">Serial</option>
        <option value="/">Short</option>
        <option value="/">Sport</option>
        <option value="/">USSR</option>
        <option value="/">War</option>
        <option value="/">Full-length</option>
  </select>
</label>
<label style="margin-left: 20px;">
  <select>
    <option value="/">Newest first</option>
    <option value="/">Oldest first</option>

  </select>
</label>
<form>
    <input type="text" placeholder="Search...">
    <input type="submit" value="Go">
  </form>
  </div>



</nav>

<br>


<div class="cards">

  <div class="card" href="moviepage.html">
    <img src="images/posters/tom.jpeg" alt="..." class="card-img-top" >
    <div class="card-body">
      <h2 class="card-title">Tomiris</h2>
      <p>
        Year, Director</p>
    </div>
  </div>
  
  <div class="card">
    <img src="images/posters/shyrakshy.jpeg" alt="..." class="card-img-top">
    <div class="card-body">
      <h2 class="card-title">Movie Name</h2>
      <p>
        Year, Director</p>
    </div>
  </div>
  
  <div class="card">
    <img src="images/posters/tom.jpeg" alt="..." class="card-img-top">
    <div class="card-body">
      <h2 class="card-title">Name</h2>
      <p>
       Year, Director</p>
    </div>
  </div>
  
  <div class="card">
    <img src="images/posters/tom.jpeg" alt="..." class="card-img-top">
    <div class="card-body">
      <h2 class="card-title">Name</h2>
      <p>
        Year, Director</p>
    </div>
  </div>
</div>

<center>
<a href="catalog.html" class="smoothScroll btn btn-default">LOAD MORE</a>
</center>

  





<br>
<br>
<br>
<!-- subs section -->


<section id="subs" class="parallax-section">
  <div class="container">
    <div class="row" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
  <br>
        <h2 class="subscribe__title">{{ __('LET\'S KEEP IN TOUCH') }}</h2>
  <p class="subscribe__copy">{{ __('Subscribe to keep up with fresh news and exciting updates. We promise not to spam you!') }}</p>
  <div class="form">
    <input type="email" class="form__email" placeholder="Enter your email address" />
    <button class="form__button">{{ __('SEND') }}</button>
  </div>
<br>
  </div>
</div>
</section>








<script type="text/javascript">
  clickAndSelect()

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
<script src="js/jquery-3.2.1.min.js"></script>

</body>
</html>