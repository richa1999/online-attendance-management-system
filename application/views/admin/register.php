
<?php $this->load->view('admin/header') ?>
<html>
<div class="container">
<div class="col-lg-3 col-md-3 col-sm-3" >
 
</div>
    
<div class="row  col-lg-9 col-md-9 col-sm-9" style="margin-left:480px; margin-top:50px">
 <button class="btn btn-primary" onclick="regTeacher()">Register New HOD</button>
 <button class="btn btn-primary" onclick="regStudent()">Register New Student</button>

</div>

<div class="row col-lg-9 col-md-9 col-sm-9" style="margin-left:280px; margin-top:50px">

<form id="teacher" class="form-signin-teacher" style="display: none;" action=<?php echo base_url('index.php/admin/register/register_hod');?> method = "post" >
              
<div class="row" style="padding:20px;" >
               <label for="first_name">Name *</label>
               <input type="text" class="form-control" id="name" name="name" placeholder="Name"  style= "width:800px;"required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="mobile_no">Mobile No. *</label>
               <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile Number" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="email">Email Address*</label>
               <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="gender">Gender* &nbsp; &nbsp;</label>
               <select id="gender" name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    
                                    </div>
               <div class="row" style="padding:20px;">
               <label for="password">Password*</label>
               <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="email">Department*</label>
               <input type="text" class="form-control" id="dept" name="dept" placeholder="dept" required>
               </div>
               <div class="row" style="padding:20px;">
               <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
               </div>
               
</form>

</div>

<div class="row col-lg-9 col-md-9 col-sm-9" style="margin-left:280px; margin-top:50px">


<form id="student" class="form-signin" style="display: none;" action=<?php echo base_url('index.php/admin/register/register_student');?> method = "post">
<div class="row" style="padding:20px;" >
               <label for="first_name">Name *</label>
               <input type="text" class="form-control" id="name" name="name" placeholder="Name"  style= "width:800px;"required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="roll_number">Roll No. *</label>
               <input type="text" class="form-control" id="roll_number" name="roll_number" placeholder="Roll Number" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="admission_number">  Admission Number *</label>
               <input type="text" class="form-control" id="admission_number" name="admission_number" placeholder="  Admission Number" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="mothers_name"> Mother's Name *</label>
               <input type="text" class="form-control" id="mothers_name" name="mothers_name" placeholder="  Admission Number" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="fathers_name"> Father's Name*</label>
               <input type="text" class="form-control" id="fathers_name" name="fathers_name" placeholder="  Father's Name" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="dob"> DOB*</label>
               <input type="date" class="form-control" id="dob" name="dob" placeholder=" DOB" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="email">Email Address*</label>
               <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="course">Course*</label>
               <input type="text" class="form-control" id="course" name="course" placeholder="Course" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="branch">Branch*</label>
               <input type="text" class="form-control" id="branch" name="branch" placeholder="Branch" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="year">Year*</label>
               <input type="text" class="form-control" id="year" name="year" placeholder="Year" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="semester">Semester*</label>
               <input type="semester" class="form-control" id="semester" name="semester" placeholder="semester" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="gender">Gender* &nbsp; &nbsp;</label>
               <select id="gender" name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    
                                    </div>
               <div class="row" style="padding:20px;">
               <label for="password">Password*</label>
               <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
               </div>
               <div class="row" style="padding:20px;">
               <label for="mobile_number">Mobile Number*</label>
               <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Mobile" required>
               </div>
               <div class="row" style="padding:20px;">
               <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
               </div>
              
              
              
          </form>


</div>

</div>
<body>
<script type="text/javascript">
          function regStudent() {
               document.getElementById('student').style.display = "block";
               document.getElementById('teacher').style.display = "none";
          }
          function regTeacher() {
               document.getElementById('student').style.display = "none";
               document.getElementById('teacher').style.display = "block";
          }
     </script>
     <?php $this->load->view('footer.php') ?>
     </body>
     </html>