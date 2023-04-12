<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>{{__('local.Kazakhfilm')}}</title>
	<link rel="icon" type="image/x-icon" href ="images/bl_logo.png" />
	<meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">



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
  @media screen and (min-width: 1200px){
.grid figure img {
   float: left;
    width:  340px;
    height: 200px;
    object-fit: cover;

}
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
			<li>
                <img src="images/slider1.jpeg" alt="slider image 1 " style="height: 1000px; width:auto;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>{{__('local.WORK WITH THE BEST')}}</h2>
                                <p class="color-white">{{__('local.Work with the directory of Kazakhfilm members & government partners')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider3.jpeg" alt="slider image 2" style="height: 1000px; width:auto;">
                <div class="container caption-wrapper">
                    <div class="slider-caption">
                        <h2>{{__('local.FASCINATING LOCATIONS')}}</h2>
                        <p class="color-white">{{__('local.Scouting Locations? Take a look at our image library of Kazakhstan film locations')}}</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider2.jpeg" alt="slider image 3" style="height: 1000px; width:auto;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>{{__('local.KAZAKHSTAN TALENTS')}}</h2>
                                <p class="color-white">{{__('local.Kazakhfilm’s screen production community is professional, experienced and talented')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider4.jpeg" alt="slider image 4" style="height: 1000px; width:auto;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>{{__('local.DUBBING AND SUBTITLING')}}</h2>
                                <p class="color-white">{{__('local.Get the most secure & quick dubbing and subtitling services at the most affordable rates by native language experts')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider5.jpeg" alt="slider image 5" style="height: 1000px; width:auto;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>{{__('local.HUGE EXPERIENCE')}}</h2>
                               <p class="color-white">{{__('local.Kazakhfilm has a long history of providing pre-production, physical production and post-production services on film & television productions')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul> <!-- /.bxslider -->
        <div class="bx-thumbnail-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="bx-pager">
                            <a data-slide-index="0" href=""><img src="images/slider1.jpeg" alt="thumbnail 1" /></a>
                            <a data-slide-index="1" href=""><img src="images/slider3.jpeg" alt="thumbnail 2" /></a>
                            <a data-slide-index="2" href=""><img src="images/slider2.jpeg" alt="thumbnail 3" /></a>
                            <a data-slide-index="3" href=""><img src="images/slider4.jpeg" alt="thumbnail 4" /></a>
                            <a data-slide-index="4" href=""><img src="images/slider5.jpeg" alt="thumbnail 5" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.site-slider -->
</div>


<!-- Work section
================================================== -->
<section id="work" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h1 class="heading">{{__('local.WHAT WE DO')}}</h1>
					<hr style="color: black;">
				</div>
			</div>


			<!-- Work Owl Carousel section
			================================================== -->
			<div id="owl-work" class="owl-carousel">

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
					<i class="icon-camera medium-icon"></i>
						<h3>{{__('local.PRODUCTION')}}</h3>
						<hr>
						<p>{{__('local.Wide spectrum of film&television equipment and high quality post production services.')}}</p>
						<br>

						<a href="production" id='read-more-1' class="smoothScroll btn btn-default">{{__('local.READ MORE')}}</a>
				</div>



				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
					<i class="icon-chat medium-icon"></i>
						<h3>{{__('local.DUBBING&SUBTITLING')}}</h3>
						<hr>
						<p>{{__('local.Get the most secure & quick dubbing and subtitling services at the most affordable rates by native language experts.')}}</p>
						<a href="dubbing-subtitling" class="smoothScroll btn btn-default">{{__('local.READ MORE')}}</a>

				</div>




				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
					<i class="icon-tablet medium-icon"></i>
						<h3>{{__('local.BUDGETING&SCHEDULE')}}</h3>
						<hr>
						<p>{{__('local.Budget-friendly options for every stage of the production process.')}}</p>
						<br>
						<br>
						<a href="budget" class="smoothScroll btn btn-default">{{__('local.READ MORE')}}</a>
				</div>

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
					<i class="icon-bike medium-icon"></i>
						<h3>{{__('local.EQUIPMENT&LOGISTICS')}}</h3>
						<hr>
						<p>{{__('local.Modern facilities, filming equipment, and transportation for your production, shooting and post-production stages.')}}</p>
						<a href="equipment" class="smoothScroll btn btn-default">{{__('local.READ MORE')}}</a>
				</div>

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
					<i class="icon-flag medium-icon"></i>
						<h3>{{__('local.LOCATIONS')}}</h3>
						<hr>
						<p>{{__('local.Diverse selection of shooting spots on huge location hub base with regular updating.')}}</p>
						<br>
						<a href="#locations" class="smoothScroll btn btn-default">{{__('local.READ MORE')}}</a>
				</div>

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
					<i class="icon-search medium-icon"></i>
						<h3>{{__('local.ACTORS&CASTING')}}</h3>
						<hr>
						<p>{{__('local.Help on search and making agreement with great actor of Kazakhstan.')}}</p>
						<br>
						<a href="actors" class="smoothScroll btn btn-default">{{__('local.READ MORE')}}</a>

				</div>


			</div>

		</div>
	</div>
</section>


<!-- About section
================================================== -->
<section id="about" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h1 class="heading color-white">{{__('local.WHO WE ARE')}}</h1>
					<hr>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<h3 class="color-white">{{__('local.OUR STORY')}}</h3>
				<h2>{{__('local.KAZAKHFILM STUDIO')}}</h2>
				<p class="color-white">{{__('local.The largest Kazakh film studio of feature, animated and documentary films, located in the Almaty city.')}}</p>
				<p class="color-white">{{__('local.In 1934, the Alma-Ata newsreel studio was organized. In 1936, documentaries began to be produced on it. In 1939, the first-born Kazakh feature film, the film Amangeldy, was filmed at the Lenfilm studio.')}}</p>
				<p class="color-white">{{__('local.For many years of work, Kazakhfilm has shot about 900 films of various genres and types, which shows a huge experience in the field of cinematography.')}}</p>
			</div>

			<div class="col-md-6 col-sm-12">
				<h2 class="mobile-top">{{__('local.WHY CHOOSE US?')}}</h2>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingOne">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {{__('local.PRODUCTION SERVICES')}}
        						</a>
      						</h4>
    					</div>
   						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      						<div class="panel-body">
        						<p>{{__('local.Once we’ve determined what your shoot requires, we can set about finding everything necessary to make your production a success. From directors, producers and animators to photographers, actors, animals and translators, our one-stop-shop production house means you’re able to find everything you need in one place.')}}</p>
      						</div>
   						 </div>
 					 </div>

    				<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingTwo">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    {{__('local.POST-PRODUCTION SERVICES')}}
        						</a>
      						</h4>
    					</div>
   						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      						<div class="panel-body">
        						<p>{{__('local.Once your project has wrapped, using our network, we can connect you with essential services that will help you to put in place the finishing touches. We can facilitate a range of post-production services such as film editing, sound editing, colour grading, scoring and music services, and more.')}}</p>
      						</div>
   						 </div>
 					 </div>

 					 <div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingThree">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    {{__('local.FAST DELIVERY')}}
        						</a>
      						</h4>
    					</div>
   						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      						<div class="panel-body">
        						<p>{{__('local.No matter how fast you need your content completed by, we can make sure it will be done in lightning speed. Our team prides itself on being on time and delivering the greatest results for your business.')}}</p>
      						</div>
   						 </div>
 					 </div>

 				 </div>
			</div>



		</div>


	</div>
<br><!--
	<div class="image-cards">

  <div class="image-card image-card--shadow is-selected" aria-selected="true" style="position: absolute; left: 0%;">
    <a href="https://www.kazakhfilm.kz/">

      <div class="image-card__image" > <img src="images/dub/qaz1.jpg" style="width: 100%;"></div>

      <div class="image-card_content">
        <h2 class="image-card_heading">OLD BUILDING</h2>
      </div>
    </a>
  </div>

  <div class="image-card image-card--shadow" aria-selected="false" style="position: absolute; left: 33.33%;">
    <a href="https://www.kazakhfilm.kz/">

     <div class="image-card__image" > <img src="images/dub/qaz5.jpeg" style="width: 100%;"></div>

      <div class="image-card_content">
        <h2 class="image-card_heading">MAIN BUILDING</h2>
      </div>
    </a>
  </div>

  <div class="image-card image-card--shadow" aria-selected="false" style="position: absolute; left: 66.66%;">
    <a href="https://www.kazakhfilm.kz/">

      <div class="image-card__image" > <img src="images/dub/qaz3.jpg" style="width: 100%;"></div>

      <div class="image-card_content">
        <h2 class="image-card_heading">KAZAKH ANIMATION</h2>
      </div>
    </a>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>-->
</section>



<!-- Portfolio section
================================================== -->
<section id="portfolio" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h1 class="heading">{{__('local.SHOWCASE')}}</h1>
					<hr>
				</div>
			</div>

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/posters/udt.png" alt="portfolio img"/>
							<figcaption>
								<h2>{{__('local.Uly Dala Tany')}}</h2>
								<p class="icon-links">
									<a href="images/posters/udt.png" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>
					</figure>
				</div>
            </div>

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<a href="https://youtu.be/G1YFwzswPzI"><img src="images/posters/tomiris.jpeg" alt="portfolio img"/></a>
							<figcaption>
								<h2>{{__('local.Tomiris')}}</h2>
								<p class="icon-links">
									<a href="images/posters/tomiris.jpeg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>
					</figure>
				</div>
            </div>

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/posters/muk.png" alt="portfolio img"/>
							<figcaption>
								<h2>{{__('local.Mukagali')}}</h2>
								<p class="icon-links">
									<a href="images/posters/muk.png" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>
					</figure>
				</div>
            </div>



          	<div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/posters/te.jpeg" alt="img" />
							<figcaption>
								<h2>{{__('local.Amangeldy')}}</h2>
								<p class="icon-links">
									<a href="images/posters/.jpeg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>
					</figure>
				</div>
            </div>

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/posters/kyz.jpeg" alt="portfolio img"  />
							<figcaption>
								<h2>{{__('local.Kyz Zhibek')}}</h2>
								<p class="icon-links">
									<a href="images/posters/kyz.jpeg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>
					</figure>
				</div>
            </div>

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/posters/mzk.jpeg" alt="img" />
							<figcaption>
								<h2>{{__('local.My name is Kozha')}}</h2>
								<p class="icon-links">
									<a href="images/posters/mzk2.jpeg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>
					</figure>
				</div>
            </div>







            <!-- Portfolio bottom section
			================================================== -->
            <div class="col-md-offset-2 col-md-8 col-sm-12">
            	<div class="portfolio-bottom">
            		<h2>{{__('local.INTERESTED?')}}</h2>
					<p>{{__('local.Visit our online-catalog to check out more information about our filmography.')}}</p>
					<a href="catalog" class="smoothScroll btn btn-default">{{__('local.VIEW MORE')}}</a>
            	</div>
            </div>

		</div>
	</div>
</section>



<!-- Facts section
================================================== -->

<section id="facts" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8" style="text-align: center;">
			<br><h1 class="color-white" class="heading">{{__('local.FACTS')}}</h1>
			<hr>
			</div>


				<div class="col-md-3 col-sm-6">
					<div class="currency-counter count-items">
					<i class="fa fa-rocket"></i>
					<span class="currency-count">900+</span>
					<h2>{{__('local.Movies Produced')}}</h2>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="currency-counter count-items">
					<i class="fa fa-users"></i>
					<span class="currency-count">150+</span>
					<h2>{{__('local.Workers')}}</h2>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="currency-counter count-items">
					<i class="fa fa-calendar"></i>
					<span class="currency-count">88+</span>
					<h2>{{__('local.Years of Experience')}}</h2>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="currency-counter count-items">
					<i class="fa fa-comment-o"></i>
					<span class="currency-count">100+</span>
					<h2>{{__('local.Satisfied Customers')}}</h2>
					</div>
				</div>
		</div>
		<br>
		<br>
		<br>
	</div>
</section>



<!-- Locations section
================================================== -->

<section id="locations" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h1 >{{__('local.FASCINATING LOCATIONS')}}</h1>
					<hr>
					<p>{{__('local.Take a look at our image library of amazing Kazakhstani film locations.')}}</p>

				</div>
			</div>

			<div id="fh5co-portfolio" data-section="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid" style="padding-bottom: 30px;">
						 <img src="images/arid.jpeg" alt="location" class="img-responsive">
							<a href="arid-locations" class="transition">
								<div>

									<h2 class="fh5co-title" style="font-weight: 900;
  color: white;
  text-transform: uppercase;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);">{{__('local.ARID')}}</h2>
								</div>
							</a>
						</div>
					</div>
					<br>
					<br>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid" style="padding-bottom: 30px;">
							<img src="images/urban.jpeg" alt="location" class="img-responsive">
							<a href="soviet-locations" class="transition">
								<div>

									<h2 class="fh5co-title" style="font-weight: 900;
  color: white;
  text-transform: uppercase;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);">{{__('local.SOVIET')}}</h2>
								</div>
							</a>
						</div>
					</div>
					<br>
					<br>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid" style="padding-bottom: 30px;">
							<img src="images/hist.jpeg" alt="location" class="img-responsive">
							<a href="historical-locations" class="transition">
								<div>

									<h2 class="fh5co-title" style="font-weight: 900;
  color: white;
  text-transform: uppercase;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);">{{__('local.HISTORICAL')}}</h2>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/mount.jpeg" alt="location" class="img-responsive">
							<a href="mountain-locations" class="transition">
								<div>
									<h2 class="fh5co-title" style="font-weight: 900;
  color: white;
  text-transform: uppercase;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);">{{__('local.MOUNTAINS')}}</h2>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/kapch.jpeg" alt="location" class="img-responsive">
							<a href="lakes-locations" class="transition">
								<div>

									<h2 class="fh5co-title" style="font-weight: 900;
  color: white;
  text-transform: uppercase;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);">{{__('local.LAKES')}}</h2>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/spot.jpeg" alt="location" class="img-responsive">
							<a href="modern-locations" class="transition">
								<div>

									<h2 class="fh5co-title" style="font-weight: 900; color: white; text-transform: uppercase;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);">{{__('local.MODERN')}}</h2>
								</div>
							</a>
						</div>
					</div>



				</div>
			</div>
		</div>

</div>
</div>
</section>

<!--video-->

<div class="container" style="width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;">
<div class="content">
            <h1>EXPLORE MORE</h1>
            <a href="https://youtu.be/6PryBPSeHos">WATCH</a>
        </div>
        <video autoplay muted loop>
  <source src="images/shc.mp4" type="video/mp4">
</video>

        
    </div>
<!-- News Feed
  ============================================ -->

<br>
<br>
<br>
<br>
<br>

<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
        <div class="section-title">
          <h1 class="heading">NEWS</h1>
          <hr>
        </div>
      </div>


      <br>
      <br>
      <br>
      <br>
      <br>

<div class="rows">
  <div class="rows">
  @foreach($newsInfo as $news)

  <div class="column">
     <center>
    <img src="{{$news->Photo1}}" alt="img" style="width:80%; height: 60%">
            @if(app()->getLocale() == 'en')
            <p style="width: 50%"> {{$news->Title_en}}</p>
            @endif
            @if(app()->getLocale() == 'ru')
            <p> {{$news->Title_ru}}</p>
            @endif
          <a href="{{ route('news.show', $news->id) }}"><input type = "button" value = " READ MORE "/></a>
          </center>
  </div>
  @endforeach
</div>
</div>
<!-- Contact section
================================================== -->


<section id="contact" class="parallax-section">
 <div class="container">
  <div class="row">


   <!-- Section title
   ================================================== -->

   <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
    <div class="section-title">
     <h1 class="heading">{{__('local.CONTACT US')}}</h1>
     <hr>
    </div>
   </div>

   <!-- Contact form section
   ================================================== -->

   <div class="col-md-offset-1 col-md-10 col-sm-12">
    @if(Session::has('status-mess'))
        <div class="alert alert-success">
            {{ Session::get('status-mess') }}
                @php
                    Session::forget('status-mess');
                @endphp
        </div>
    @endif
    @if(Session::has('status-mess-err'))
        <div class="alert alert-danger">
            {{ Session::get('status-mess-err') }}
                @php
                    Session::forget('status-mess-err');
                @endphp
        </div>
    @endif
    <form action="{{ route('contact-form.store') }}" method="POST" class="wow fadeInUp" data-wow-delay="0.6s">
      {{ csrf_field() }}
     <div class="col-md-4 col-sm-6">
      <input type="text" class="form-control" placeholder="{{__('local.Name')}}" name="name" value="{{ old('name') }}">
      @if ($errors->has('name'))
         <span class="text-danger">{{ $errors->first('name') }}</span>
      @endif
     </div>
     <div class="col-md-4 col-sm-6">
      <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
      @if ($errors->has('email'))
         <span class="text-danger">{{ $errors->first('email') }}</span>
      @endif
     </div>
     <div class="col-md-4 col-sm-12">
      <input type="text" class="form-control" placeholder="{{__('local.Subject')}}" name="subject" value="{{ old('subject') }}">
      @if ($errors->has('subject'))
         <span class="text-danger">{{ $errors->first('subject') }}</span>
      @endif
     </div>
     <div class="col-md-12 col-sm-12">
      <textarea class="form-control" placeholder="{{__('local.Message')}}" rows="7" name="message">{{ old('message') }}</textarea>
      @if ($errors->has('message'))
         <span class="text-danger">{{ $errors->first('message') }}</span>
      @endif
     </div>
     <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
      <input type="submit"  class="form-control" value="{{__('local.SEND MESSAGE')}}">
     </div>
    </form>
   </div>


   <!-- Contact detail section
   ================================================== -->

   <div class="contact-detail col-md-12 col-sm-12">
    <div class="col-md-4 col-sm-4">
     <h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i>EMAIL</h3>
     <p>sales@kazakhfilmstudios.kz</p>
     <br>
    </div>
    <div class="col-md-4 col-sm-4">
     <h3><i class="icon-flag medium-icon wow bounceIn" data-wow-delay="0.6s"></i>{{__('local.ADDRESS')}}</h3>
     <p>{{__('local.Kazakhstan, Almaty, Al-Farabi Ave, 176')}}</p>
     <br>
    </div>
    <div class="col-md-4 col-sm-4">
     <h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i>{{__('local.PHONE')}}</h3>
     <p>+ 7 702 000 1610</p>
     <br>
    </div>

   </div>

  </div>
 </div>
</section>

<!-- Footer section
================================================== -->

<footer>
 <div class="container">
  <div class="row">
   <div class="col-md-12 col-sm-12">

    <h2 class="wow bounceIn"><img src="images/bl_logo.png" style="height: 100px; width: auto;"></h2>
    <ul class="social-icon">
     <li><a href="https://www.facebook.com/kazakhfilm" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
     <li><a href="https://www.instagram.com/kazakhfilm_official/" class="fa fa-instagram wow fadeIn" data-wow-delay="1s"></a></li>
     <li><a href="https://www.youtube.com/c/kazakhfilmstudios" class="fa fa-youtube wow fadeIn" data-wow-delay="1.3s"></a></li>
    </ul>
    <p>Copyright &copy; 2022 Kazakhfilm Studio</p>

   </div>
  </div>
 </div>
</footer>

<!-- {{__('local.HOME')}} -->

<!-- Javascript
================================================== -->
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

<script type="text/javascript">

	window.onload = setTimeout(function() {
	history.replaceState({}, document.title, window.location.href.split('#')[0]);
	}, 500);



    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

</body>
</html>
