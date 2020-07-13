<?php $this->load->view('students/header') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daily Attendance</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/student/css/dailyatt.css">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>

<body>
	<h1>Daily Attendance</h1>
    <p>Date: <input type="text" id="datepicker"></p>

	<table>
		<tr>
			<th>
				Subject Name
			</th>
			<th>Subject Code</th>
			<th>Attendance</th>
		</tr>
		<tr>
		<td>Mathematics</td>
		<td>KCS 301</td>
		<td>1/2</td>
	    </tr>
	    <tr>
		<td>Computer System Security</td>
		<td>KCS 302</td>
		<td>1/1</td>
	    </tr>
	    <tr>
		<td>Operating System</td>
		<td>KCS 303</td>
		<td>1/2</td>
	    </tr>
	    <tr>
		<td>Microprocessor</td>
		<td>KCS 304</td>
		<td>2/2</td>
	    </tr>
	    <tr>
		<td>Human Values</td>
		<td>KCS 305</td>
		<td>1/1</td>
	    </tr>
	    <tr>
	    	<td colspan="2" style="text-align: center;">Total</td>
	    	<td>6/8</td>
	    </tr>
	</table>

</body>
</html>