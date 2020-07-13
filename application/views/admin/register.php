<?php $this->load->view('admin/header') ?>

     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <div class="btn-container">
               <button class="btn btn-primary" onclick="regTeacher()">Register New HOD</button>
               <button class="btn btn-primary" onclick="regStudent()">Register New Student</button>
          </div>
          <form id="teacher" class="form-signin-teacher" style="display: none;" action=<?php echo base_url('index.php/admin/register/register_hod');?> method = "post">
              <div class="col-md-12 mb-4">
               <label for="first_name">Name *</label>
               <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
               </div>
               <div class="form-label-group">
                    <input type="tel" name = "mobile_no" class="form-control" placeholder="Mobile Number" required >
                    <label for="inputMobileNumber">
                         Mobile Number
                    </label>
               </div>
               <div class="form-label-group">
                    <input type="email" name = "email" class="form-control" placeholder="Email address" required >
                    <label for="inputEmail">
                         Email address
                    </label>
               </div>
               <div class="col-md-6 mb-4">
                                    <label for="gender">Gender*</label>
                                    <select id="gender" name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
               <div class="form-label-group">
                    <input type="password" name = "password" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">
                         Password
                    </label>
               </div>
               <div class="form-label-group">
                    <input type="text" name = "dept" class="form-control" placeholder="Department" required >
                    <label for="inputName">
                         Department
                    </label>
               </div>
               <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
          </form>
          <form id="student" class="form-signin" style="display: none;" action=<?php echo base_url('index.php/admin/register/register_student');?> method = "post">
               <div class="form-label-group">
                    <input type="text" name="name" class="form-control" placeholder="Name" required >
                    <label for="inputName">
                         Name
                    </label>
               </div>
               <div class="form-label-group">
                    <input type="number" name ="roll_number" class="form-control" placeholder="Roll Number" required >
                    <label for="inputRollNum">
                         Roll Number
                    </label>
               </div>
               <div class="form-label-group">
                    <input type="number" name ="admission_number" class="form-control" placeholder="Admission Number" required >
                    <label for="inputRollNum">
                         Admission Number
                    </label>
               </div>
               <div class="form-label-group">
                    <input type="text" name ="mothers_name" class="form-control" placeholder="Mother's Name" required >
                    <label for="inputMothersName">
                         Mother's Name
                    </label>
               </div>
               <div class="form-label-group">
                    <input type="text" name ="fathers_name" class="form-control" placeholder="Father's Name" required >
                    <label for="inputFathersName">
                         Father's Name
                    </label>
               </div>
               <div class="form-label-group">
                    <input type="date" name ="dob" class="form-control" placeholder="DOB" required >
                    <label for="inputDOB">
                         DOB
                    </label>
               </div>
               <div class="form-label-group">
                    <input type="text" name ="gender" class="form-control" placeholder="Gender" required >
                    <label for="inputGender">
                         Gender
                    </label>
               </div>
               <div class="form-label-group">
                    <input type="text" name ="course" class="form-control" placeholder="Course" required >
                    <label for="inputCourse">
                         Course
                    </label>
               </div>
               <div class="form-label-group">
                    <input type="text" name ="branch" class="form-control" placeholder="Branch" required >
                    <label for="inputBranch">
                         Branch
                    </label>
               </div>
               <div class="form-label-group">
                    <input type="number" name ="year" class="form-control" placeholder="Year" required >
                    <label for="inputYear">
                         Year
                    </label>
               </div>
               <div class="form-label-group">
                    <input type="text" name ="semester" class="form-control" placeholder="Semester" required >
                    <label for="inputSemester">
                         Semester
                    </label>
               </div>
               <div class="form-label-group">
                    <input type="tel" name ="mobile_number" class="form-control" placeholder="Mobile Number" required >
                    <label for="inputMobileNumber">
                         Mobile Number
                    </label>
               </div>
               <div class="form-label-group">
                    <input type="email" name ="email" class="form-control" placeholder="Email address" required >
                    <label for="inputEmail">
                         Email address
                    </label>
               </div>
               <div class="form-label-group">
                    <input type="password" name ="password" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">
                         Password
                    </label>
               </div>
               <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
          </form>
     </main>
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
</body>
</html>