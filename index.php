<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loco";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `ticket_form` (`trip_type`, `flying_from`, `flying_to`, `departing`, `returning`, `Adults`, `Child`, `Class`, `id`) VALUES ('Roundtrip', 'Abu Dhabi', 'Dhaka', '2019-04-17', '2019-04-09', '1', '2', 'Master', NULL)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
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


									<div class="form-btn" style="padding-left: 1100px;padding-top: -100px;padding-bottom: 70px;border-radius: 4px solid red;">
										<a href="login-page/index.php"><button class="submit-btn" style="background-color: orange;">LOG IN/SIGN UP</button></a>
									</div>
								

			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form>
							<div class="form-group">
								<div class="form-checkbox">
									<label for="roundtrip">
										<input type="radio" id="roundtrip" name="flight-type">
										<span></span>Roundtrip
									</label>
									<label for="one-way">
										<input type="radio" id="one-way" name="flight-type">
										<span></span>One way
									</label>
									<label for="multi-city">
										<input type="radio" id="multi-city" name="flight-type">
										<span></span>Multi-City
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Flying From</span>
										<select class="form-control">
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
										<select class="form-control">
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
										<input class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Returning</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Adults (18+)</span>
										<select class="form-control">
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
										<select class="form-control">
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
										<select class="form-control">
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
										<select class="form-control">
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
										<button class="submit-btn">SUBMIT</button>
									</div>
								</div>
							</div>



						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>