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

</style>

<body>
<br>
<br>
<br>
	<div class="backp">
<a href="catalog.html" class="previous">&#8249;</a>
</div>

	<main>
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
   <div class="col-xs-9">
                    <ul class="menu-items">
                        <li class="active">Awards</li>
                        <li>Trailer</li>
                    </ul>
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
                            <small>
                            List of awards the movie has won or been nominated for.
                            </small>
                        </p>
                    </div>
                </div>


	<script>
		/*function openTab(evt, tabName) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(tabName).style.display = "block";
		  evt.currentTarget.className += " active";
		}

		   $(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            });
                                  
        }); 

$(document).ready(function () {
    $("#request").click(function () {
        $("#contact-popup").show();
    });
    //Contact Form validation on click event
    $("#contact-form").on("submit", function () {
        var valid = true;
        $(".info").html("");
        $("inputBox").removeClass("input-error");
        
        var userName = $("#userName").val();
        var userEmail = $("#userEmail").val();
        var subject = $("#subject").val();
        var message = $("#message").val();

        if (userName == "") {
            $("#userName-info").html("required.");
            $("#userName").addClass("input-error");
        }
        if (userEmail == "") {
            $("#userEmail-info").html("required.");
            $("#userEmail").addClass("input-error");
            valid = false;
        }
        if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
        {
            $("#userEmail-info").html("invalid.");
            $("#userEmail").addClass("input-error");
            valid = false;
        }

        if (subject == "") {
            $("#subject-info").html("required.");
            $("#subject").addClass("input-error");
            valid = false;
        }
        if (message == "") {
            $("#userMessage-info").html("required.");
            $("#message").addClass("input-error");
            valid = false;
        }
        return valid;
    });
});*/
	</script>
	<script src="js/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
