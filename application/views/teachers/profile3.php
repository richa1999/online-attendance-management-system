<!-- <?php $this->load->view('students/header') ?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Your Account</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/student/css/profile3.css">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	 <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col">
				<div class="card" style="width: 18rem;">
                  <img src="https://cdn.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"style="text-align: center;">VARTIKA JAIN</h5>
               
                  </div>
                   <ul class="list-group list-group-flush">
                     <a href="<?php echo base_url('index.php/teachers/profile');?>" class="list-group-item acclink">Profile</a>
                     <a href="<?php echo base_url('index.php/teachers/profile/change_password');?>" class="list-group-item acclink">Account</a>
                     <a href="<?php echo base_url('index.php/teachers/teacher_portal');?>" class="list-group-item acclink1">Back</a>
                   </ul>                   
                </div>
			</div>
			<div class="col">
				<h1 id="account">My Profile</h1>
				<p id="acc">Here are your personal details.No changes can be done here!!</p>
				<hr>
				<form>
				<?php
                   foreach($fetch_data->result() as $row)
               {
                    ?>
				  <div class="form-group mt-5">
				    <label for="name">Your Name:</label>
				    <p class="id"><?php echo $row->name; ?></p>
				     <label for="gender">Gender:</label>
				    <p class="id"><?php echo $row->gender; ?></p>
				     <label for="number">Mobile no.</label>
				    <p class="id"><?php echo $row->mobile; ?></p>
				     <label for="course">Course:</label>
				    <p class="id"><?php echo $row->course; ?></p>
				     <label for="branch">Department:</label>
				    <p class="id"><?php echo $row->dept; ?></p>
				  </div>
				  <hr>
			   <?php } ?>
				</form>

			</div>
		</div>
		
	</div>
	<?php $this->load->view('footer.php') ?>
</body>
</html>