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
                    <h5 class="card-title"style="text-align: center;"><?php echo $this->session->userdata('name');?></h5>
               
                  </div>
                   <ul class="list-group list-group-flush">
                     <a href="<?php echo base_url('index.php/hod/profile');?>" class="list-group-item acclink">Profile</a>
                     <a href="<?php echo base_url('index.php/hod/profile/change_password');?>" class="list-group-item acclink">Account</a>
                     <a href="<?php echo base_url('index.php/hod/dashboard');?>" class="list-group-item acclink1">Back</a>
                   </ul>                   
                </div>
			</div>
			<div class="col">
				<h1 id="account">Account</h1>
				<p id="acc">Edit your account settings and change your password here.</p>
				<hr>
				<form action =<?php echo base_url('index.php/hod/profile/change_password');?> method = "post">
				  <div class="form-group mt-5">
				    <label for="exampleInputEmail1">Email address</label>
				    <p id="id"><?php echo $this->session->userdata('username');?></p>
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <hr>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control mb-3" id="exampleInputPassword1" name = "cur_psw" placeholder="Enter Current Password">
				     <input type="password" class="form-control mb-3" id="exampleInputPassword1"  name = "new_psw" placeholder="Enter New Password">
				  </div>
				  <button type="submit" class="btn btn-danger">Change Password</button>
				</form>

			</div>
		</div>
		
	</div>
	<?php $this->load->view('footer.php') ?>
</body>
</html>