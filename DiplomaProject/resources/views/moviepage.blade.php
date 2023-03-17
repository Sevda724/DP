<!DOCTYPE html>
<html>
<head>
	<title>{{$filmInfo->Title}}</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<style type="text/css">

body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
	font-size: 16px;
	color: #444;
	background-color: #fff;
	font-family: Arial, Helvetica, sans-serif;
    font-weight: normal;
}

h1,h2,h3,h4,h5 {
  font-family: 'Raleway', sans-serif;
  font-weight: bold;
}


.backp a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  margin-left: 50px;
}

.backp a:hover {
  background-color: orange;
  color: black;
}

.backp .previous {
  background-color: black;
  color: white;
}

main {
	max-width: 1100px;
	margin: 0 auto;
	padding: 20px;
	display: flex;
}

.movie-poster {
	flex: 0 0 300px;
	margin-right: 100px;
}
.movie-poster img{
	float: left;
    width:  500px;
    height: 300px;
    object-fit: cover;
}

.movie-details {
	flex: 1;
}

table {
	margin-top: 20px;
	border-collapse: collapse;
}

table th, table td {
	padding: 10px;
	border: none;
}

table th {
	width: 80px;
	font-weight: bold;
}


.menu-items{
	list-style-type:none;
	font-size:16px;
	display:inline-flex;
	margin-bottom:0;
	margin-top:20px;
}
li.active{
	border-bottom:3px solid black;
}
ul > li{
	margin-right:25px;
	font-weight:lighter;
	cursor:pointer;
}
.button5 {
  width: 140px;
  height: 40px;
  font-size: 20px;
  font-family: 'Raleway', sans-serif;
  font-weight: bold;
  background-color: white;
  color: black;
  border: 2px solid black;
}

.button5:hover {
  background-color: black;
  color: white;
}
div#success {
    text-align: center;
    box-shadow: 1px 1px 5px #455644;
    background: #bae8ba;
    padding: 10px;
    border-radius: 3px;
    margin: 0 auto;
    width: 350px;
}

.inputBox {
    width: 100%;
    margin: 5px 0px 15px 0px;
    border: #dedede 1px solid;
    box-sizing: border-box;
    padding: 15px;
}

#contact-popup {
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 100%;
    display: none;
    background: rgba(0, 0, 0, 0.5);
    color: #676767;
}

.contact-form {
    width: 350px;
    margin: 0px;
    background-color: white;
    font-family: Arial;
    position: relative;
    left: 50%;
    top: 50%;
    margin-left: -210px;
    margin-top: -255px;
    box-shadow: 1px 1px 5px #444444;
    padding: 20px 40px 40px 40px;
}


.info {
    color: #d30a0a;
    letter-spacing: 2px;
    padding-left: 5px;
}

#send {
    background-color: #09F;
    border: 1px solid #1398f1;
    font-family: Arial;
    color: white;
    width: 100%;
    padding: 10px;
    cursor: pointer;
}

#contact-popup h1 {
    font-weight: normal;
    text-align: center;
    margin: 10px 0px 20px 0px;
}

.input-error {
    border: #e66262 1px solid;
}

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



.tabs {
  display: block;
  display: -webkit-flex;
  display: -moz-flex;
  display: flex;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: 0;
  overflow: hidden; }
  .tabs [class^="tab"] label,
  .tabs [class*=" tab"] label {
    color: black;
    cursor: pointer;
    display: block;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1em;
    padding: 10px;
    text-align: center; }
  .tabs [class^="tab"] [type="radio"],
  .tabs [class*=" tab"] [type="radio"] {
    border-bottom: 1px solid black;
    cursor: pointer;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    display: block;
    width: 100%;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out; }
    .tabs [class^="tab"] [type="radio"]:hover, .tabs [class^="tab"] [type="radio"]:focus,
    .tabs [class*=" tab"] [type="radio"]:hover,
    .tabs [class*=" tab"] [type="radio"]:focus {
      border-bottom: 1px solid black; }
    .tabs [class^="tab"] [type="radio"]:checked,
    .tabs [class*=" tab"] [type="radio"]:checked {
      border-bottom: 2px solid black; }
    .tabs [class^="tab"] [type="radio"]:checked + div,
    .tabs [class*=" tab"] [type="radio"]:checked + div {
      opacity: 1; }
    .tabs [class^="tab"] [type="radio"] + div,
    .tabs [class*=" tab"] [type="radio"] + div {
      display: block;
      opacity: 0;
      padding: 2rem 0;
      width: 90%;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out; }
  .tabs .tab-2 {
    width: 50%; }
    .tabs .tab-2 [type="radio"] + div {
      width: 200%;
      margin-left: 200%; }
    .tabs .tab-2 [type="radio"]:checked + div {
      margin-left: 0; }
    .tabs .tab-2:last-child [type="radio"] + div {
      margin-left: 100%; }
    .tabs .tab-2:last-child [type="radio"]:checked + div {
      margin-left: -100%; }

</style>

<body>


<br>
<br>
<br>
	<div class="backp">
<a href='{{ url()->previous() }}' class="previous">&#8249;</a>
</div>

	<main>
    @if(app()->getLocale() == 'en')
		<div class="movie-poster">
			<img src={{$filmInfo->Photo}} alt="Movie Poster">
		</div>
		<div class="movie-details">
			<h2>{{$filmInfo->Title}}</h2>
			<table>
				<tr>
					<th>Year:</th>
					<td>{{$filmInfo->Year}}</td>
				</tr>
				<tr>
					<th>Director:</th>
					<td>{{$filmInfo->Director}}</td>
				</tr>
			</table>
			<p>{{$filmInfo->Text}}</p>
			<div id="request">
<button class="button button5" data-toggle="modal" data-target="#exampleModal">Request</button>
    </div>
    @endif
        @if(app()->getLocale() == 'ru')
    <div class="movie-poster">
      <img src={{$filmInfo->Photo}} alt="Movie Poster">
    </div>
    <div class="movie-details">
      <h2>{{$filmInfo->Title_ru}}</h2>
      <table>
        <tr>
          <th>Year:</th>
          <td>{{$filmInfo->Year}}</td>
        </tr>
        <tr>
          <th>Director:</th>
          <td>{{$filmInfo->Director_ru}}</td>
        </tr>
      </table>
      <p>{{$filmInfo->Text_ru}}</p>
      <div id="request">
<button class="button button5" data-toggle="modal" data-target="#exampleModal">Request</button>
    </div>
    @endif
    <!--Request Form-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Make a Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('request.store', $filmInfo->id) }}" method="POST">
       {{ csrf_field() }}
      <div class="modal-body"> 
            <div class="form-group">
                <label>Name: </label>
                <input type="text" name='userName' class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Email: </label>
                <input type="email" name='userEmail' class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Subject: </label>
                <input type="text" name='userSubject' class="form-control" placeholder="Enter Subject" >
            </div>
            <div class="form-group">
                <label>Message: </label>
                <input type="text" name='userMessage' class="form-control" placeholder="Enter Message">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!--<div class="modal fade" id="contact-popup" role="dialog">
        <form class="contact-form" action="" id="contact-form"
            method="post" enctype="multipart/form-data">
            <h1>Make a Request</h1>
            <div>
                <div>
                    <label>Name: </label><span id="userName-info"
                        class="info"></span>
                </div>
                <div>
                    <input type="text" id="userName" name="userName"
                        class="inputBox" />
                </div>
            </div>
            <div>
                <div>
                    <label>Email: </label><span id="userEmail-info"
                        class="info"></span>
                </div>
                <div>
                    <input type="text" id="userEmail" name="userEmail"
                        class="inputBox" />
                </div>
            </div>
            <div>
                <div>
                    <label>Subject: </label><span id="subject-info"
                        class="info"></span>
                </div>
                <div>
                    <input type="text" id="subject" name="subject"
                        class="inputBox" />
                </div>
            </div>
            <div>
                <div>
                    <label>Message: </label><span id="userMessage-info"
                        class="info"></span>
                </div>
                <div>
                    <textarea id="message" name="message"
                        class="inputBox"></textarea>
                </div>
            </div>
            <div>
                <input type="submit" id="send" name="send" value="Send" />
            </div>
        </form>
    </div>
		</div>-->

	</main>
  <div class="tabs">
  @if(app()->getLocale() == 'en')
  <div class="tab-2">
    <label for="tab2-1">Awards</label>
    <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
    <div>
      <h4 style="margin-left: 40px;">Awards</h4>
        <p style="margin-left: 40px;"><?php  
    echo nl2br($filmInfo->Awards);  
?></p>
    </div>
  </div>
  @endif

  @if(app()->getLocale() == 'ru')
  <div class="tab-2">
    <label for="tab2-1">Awards</label>
    <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
    <div>
      <h4 style="margin-left: 40px;">Awards</h4>
        <p style="margin-left: 40px;"><?php  
    echo nl2br($filmInfo->Awards_ru);  
?></p>
    </div>
  </div>
  @endif
  <div class="tab-2">
    <label for="tab2-2">Trailer</label>
    <input id="tab2-2" name="tabs-two" type="radio">
    <div>
      <h4 style="margin-left: 40px;">Trailer</h4>
      <br>

     
@if ($filmInfo->Trailer !== ""): 
<iframe width="420" height="315"
src="{{$filmInfo->Trailer}}" style="margin-left: 40px;">
</iframe>>
@endif;
      
      
    </div>
  </div>
</div>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
