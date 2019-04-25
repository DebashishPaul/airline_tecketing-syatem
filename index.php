<?php
class apps{
		
		public $hostname = "localhost";
		public $username = "root";
		public $password = "";
		public $database = "loco";
		public $links;
		
		public function __construct(){
			$this->links = mysqli_connect($this->hostname,$this->username,$this->password,$this->database);
			if($this->links->connect_error){
				echo "no connected";
			}else{
				echo "connected";
			}
		}
		
		public function insert($insert){
			$insert = $this->links->query($insert);
			if($insert){
				throw new exception;
			}
		}


	}



if(isset($_POST['submit'])){
		
		
		
		$trip_type = $_POST['trip_type'];
		$flying_from = $_POST['flying_from'];
		$flying_to = $_POST['flying_to'];
		$departing = $_POST['departing'];
		$returning = $_POST['returning'];
		$Adults = $_POST['Adults'];
		$Child = $_POST['Child'];
		$Class = $_POST['Class'];
		$select_airlines=$_POST['select_airlines'];
		$error = 0;
		$msg = "";
		
		if($trip_type == ""){
			$error = $error+1;
			$user_error = "<span style='color:#f00'>* trip type required</span>";
			$msg .= "<p style='color:#f00'>* Username Required</p>";
		}
		if($flying_from == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* password Required</p>";
		}
		if($flying_to == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* email Required</p>";
		}
		if($departing == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* address Required</p>";
		}
		if($returning == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* Image Required</p>";
		}
		if($Adults == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* Image Required</p>";
		}
		if($Child == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* Image Required</p>";
		}
		if($Class == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* Image Required</p>";
		}
		if($select_airlines == ""){
			$error = $error+1;
			$msg .= "<p style='color:#f00'>* Image Required</p>";
		}
		if($error == 0){
		
			$insert = "INSERT INTO ticket_form VALUES('$trip_type', '$flying_from', '$flying_to','$departing', '$returning','$Adults', '$Child', '$Class', 'select_airlines', '')";
			if($insert){
				try{
					$object = new apps;
					$object->insert($insert);
					echo "Not inserted";
				}catch(exception $e){
					echo "inserted";
					
				}
			}
		
		
		}else{
			echo $msg;
		}
	}




?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking your ticket</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">


									<div class="form-btn" style="padding-left: 1100px;padding-top: -100px;padding-bottom: 70px;">
										<a href="login-page/index.php"><button class="submit-btn" style="background-color: orange;">LOG IN/SIGN UP</button></a>
									</div>
								
<form action="" method="post">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form>
							<div class="form-group">
								<div class="form-checkbox">
									<label for="roundtrip">
										<input type="radio" id="roundtrip" name="trip_type">
										<span></span>Roundtrip
									</label>
									<label for="one-way">
										<input type="radio" id="one-way" name="trip_type">
										<span></span>One way
									</label>
									<label for="multi-city">
										<input type="radio" id="multi-city" name="trip_type">
										<span></span>Multi-City
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Flying From</span>
										<select class="form-control" name="flying_from">
											<option>Abu Dhabi</option>
											<option>Bangkok</option>
											<option>Chittagong</option>
											<option>Sylhet</option>
											<option>Jessore</option>
											<option>Calcutta</option>
											<option>Dhaka</option>
											<option>Heathrow</option>
											<option>Brisbane</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Flying To</span>
										<select class="form-control" name="flying_to">
											<option>Abu Dhabi</option>
											<option>Bangkok</option>
											<option>Chittagong</option>
											<option>Sylhet</option>
											<option>Jessore</option>
											<option>Calcutta</option>
											<option>Dhaka</option>
											<option>Heathrow</option>
											<option>Brisbane</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Departing</span>
										<input class="form-control" type="date" name="departing" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Returning</span>
										<input class="form-control" type="date" name="returning" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Adults (18+)</span>
										<select class="form-control" name="Adults">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Children (0-17)</span>
										<select class="form-control" name="Child">
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Travel class</span>
										<select class="form-control" name="Class">
											<option>Economy class</option>
											<option>Business class</option>
											<option>First class</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Select Airlines</span>
										<select class="form-control" name="select_airlines">
											<option>Biman Bangladesh</option>
											<option>Qantas Airways</option>
											<option>Jet Airways</option>
											<option>Qatar Airways</option>
											<option>Etihad</option>
											<option>Indigo Airlines</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn" name="submit">SUBMIT</button>
									</div>
								</div>
							</div>



						</form>
					</div>
				</div>
			</div>
		</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>