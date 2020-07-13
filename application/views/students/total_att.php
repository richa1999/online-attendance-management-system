<?php $this->load->view('students/header') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Total Attendance</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/student/css/totalatt.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="/resources/demos/style.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>
</head>
<body>
	<h1>Total Attendance</h1>
	<label for="from">From:</label>
<input type="text" id="from" name="from">
<label for="to">to:</label>
<input type="text" id="to" name="to">
	<table>
		<tr>
			<th>
				Subject Name
			</th>
			<th>Subject Code</th>
			<th>Attendance</th>
			<th>Percentage</th>
		</tr>
		<tr>
		<td>Mathematics</td>
		<td>KCS 301</td>
		<td>8/10</td>
		<td>80%</td>
	    </tr>
	    <tr>
		<td>Computer System Security</td>
		<td>KCS 302</td>
		<td>6/10</td>
		<td>60%</td>
	    </tr>
	    <tr>
		<td>Operating System</td>
		<td>KCS 303</td>
		<td>7/10</td>
		<td>70%</td>
	    </tr>
	    <tr>
		<td>Microprocessor</td>
		<td>KCS 304</td>
		<td>8/10</td>
		<td>80%</td>
	    </tr>
	    <tr>
		<td>Human Values</td>
		<td>KCS 305</td>
		<td>5/10</td>
		<td>50%</td>
	    </tr>
	    <tr>
	    	<td  colspan="2" style="text-align: center;">Total</td>
	    	<td>34/50</td>
	    	<td>68%</td>
	    </tr>
	</table>

</body>
</html>