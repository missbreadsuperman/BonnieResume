<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/index.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script><!--  font awesome -->
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> <!--  font family -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><!-- 匯入jQuery -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script><!-- 匯入bootstrap javascript
	 -->

	<title>Resume</title>
   


</head>
	<div class="header" id="myHeader">
		<nav class="navbar navbar-expand-lg navbar-light  navbar-fixed-top " style="width: 100%;">
			<div class="container-fluid">
			  <a class="navbar-brand" href="#" style="font-weight: 500; font-size: larger;">Bonnie's Resume</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNavDropdown">
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link" href="#Resume">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#About">About</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Pricing</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Dropdown link
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="#">Action</a>
			          <a class="dropdown-item" href="#">Another action</a>
			          <a class="dropdown-item" href="#">Something else here</a>
			        </div>
			      </li>
			    </ul>
			  </div>
		 	</div>
		</nav>
	</div>
	<!-- <script>

		window.onscroll = function() {myFunction()}; 	//scrollnav


		var header = document.getElementById("myHeader");


		var sticky = header.offsetTop;

		function myFunction() {
		  if (window.pageYOffset >= sticky) {
		    header.classList.add("sticky");
		  } else {
		    header.classList.remove("sticky");
		  }
		}
	</script> -->
	<!-- navbar -->
	<div class="content">
		<div id="Resume">
			<div class="row">
				<div class="col">
					<p style="background-color: black; color: white; margin: 66px;">This is my RESUME</p>
				</div>
				<div class="col">
					<img src="/images/resumeimg.jpg">
				</div>
				<div class="col">
					<p>Hello.</p>
					<p>My Name is Bonnie.</p>
				</div>
			</div>
		</div>

		<div id="About">
			<div class="row">
				<div class="col-4">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100" src="/images/profile.png" alt="First slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="/images/resumeimg.jpg" alt="Second slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="/images/profile.png" alt="Third slide">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
				<div class="col-8">
					<table class="table">
				  <!-- <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">First</th>
				      <th scope="col">Last</th>
				      <th scope="col">Handle</th>
				    </tr>
				  </thead> -->
					  <tbody>
					    <tr>
					      <th scope="row">姓名</th>
					      <td>徐婉瑄</td>
					      <td>Bonnie Hsu</td>
					    </tr>
					    <tr>
					      <th scope="row">學校</th>
					      <td>中央大學</td>
					      <td>數學系大三</td>
					    </tr>
					    <tr>
					      <th scope="row">聯絡方式</th>
					      <td>手機 0975073102</td>
					      <td>Email missbreadsuperman@gmail.com</td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
		
	</div>


	<div id="Contant"></div>
	</div>
	


</body>
</html>