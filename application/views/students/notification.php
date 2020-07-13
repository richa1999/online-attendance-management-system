
<!DOCTYPE html>
<html>
<head>
	<title>Notification</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/student/css/notification.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Tenali+Ramakrishna&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
	 

</head>
<body>
	<div id="container">
	<span>
			<h1>Notifications </h1>
			<i class="fas fa-bell fa-2x"></i>
	</span>
	<h4><span id="show">Show all</span><span id="mark">Mark all as read</span> </h4>
	
		<ul>
		<li><span class="check"><i class="fas fa-check-circle fa-2x"></i></span><span class="del"><i class="fas fa-trash-alt fa-2x"></i></span>Hey! Your attendance is less than 75% in maths IV. You need 4 lectures to reach the mark. Your attendance is 62.2% </li>
		<li><span class="check"><i class="fas fa-check-circle fa-2x"></i></span><span class="del"><i class="fas fa-trash-alt fa-2x"></i></span>Hey! Your attendance is..... </li>
		<li>notification 1 <span class="check"><i class="fas fa-check-circle fa-2x"></i></span><span class="del"><i class="fas fa-trash-alt fa-2x"></i></span></li>
		<li>notification 1 <span class="check"><i class="fas fa-check-circle fa-2x"></i></span><span class="del"><i class="fas fa-trash-alt fa-2x"></i></span></li>
	</ul>

	</div>
	
	<script type="text/javascript" src="<?php echo base_url() ?>assets/student/css/notification.js"></script>
</body>
</html>