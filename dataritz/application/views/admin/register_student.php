<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
          integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
          crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
          integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
          crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
          integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
          crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link rel="stylesheet" href="assets/admin/css/home.css">
     <link rel="stylesheet" href="assets/admin/css/register.css">

     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

     <title>Home</title>
</head>

<body>
     <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
          <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">{User's Name}</a>
          <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
               data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
               aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>
          <input class="form-control form-control-dark" type="text" placeholder="Search student" aria-label="Search">
          <button class="btn btn-light">
               <svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                         d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                    <path fill-rule="evenodd"
                         d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
               </svg>
          </button>
     </nav>

     <div class="container-fluid">
          <div class="row">
               <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="sidebar-sticky pt-3">
                         <ul class="nav flex-column">
                              <li class="nav-item">
                                   <a class="nav-link" href="#">
                                        <svg class="bi bi-house" width="1em" height="1em" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                             <path fill-rule="evenodd"
                                                  d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                        </svg>
                                        <span data-feather="home"></span>
                                        Home
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="list.html">
                                        <svg class="bi bi-list-check" width="1em" height="1em" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                                        </svg>
                                        Student List
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="attendance.html">
                                        <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                             <path fill-rule="evenodd"
                                                  d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                                        </svg>
                                        Attendance
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="#">
                                        <svg class="bi bi-alarm" width="1em" height="1em" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M8 15A6 6 0 1 0 8 3a6 6 0 0 0 0 12zm0 1A7 7 0 1 0 8 2a7 7 0 0 0 0 14z" />
                                             <path fill-rule="evenodd"
                                                  d="M8 4.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.053.224l-1.5 3a.5.5 0 1 1-.894-.448L7.5 8.882V5a.5.5 0 0 1 .5-.5z" />
                                             <path
                                                  d="M.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z" />
                                             <path fill-rule="evenodd"
                                                  d="M11.646 14.146a.5.5 0 0 1 .708 0l1 1a.5.5 0 0 1-.708.708l-1-1a.5.5 0 0 1 0-.708zm-7.292 0a.5.5 0 0 0-.708 0l-1 1a.5.5 0 0 0 .708.708l1-1a.5.5 0 0 0 0-.708zM5.5.5A.5.5 0 0 1 6 0h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z" />
                                             <path d="M7 1h2v2H7V1z" />
                                        </svg>
                                        Time Table
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="#">
                                        <svg class="bi bi-table" width="1em" height="1em" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                             <path fill-rule="evenodd" d="M15 4H1V3h14v1z" />
                                             <path fill-rule="evenodd" d="M5 15.5v-14h1v14H5zm5 0v-14h1v14h-1z" />
                                             <path fill-rule="evenodd" d="M15 8H1V7h14v1zm0 4H1v-1h14v1z" />
                                             <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v2H0V2z" />
                                        </svg>
                                        Academic Calender
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link active" href="register.html">
                                        <svg class="bi bi-list-check" width="1em" height="1em" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                                        </svg>
                                        Register
                                   </a>
                              </li>
                              <li class="nav-item logOutBtn">
                                   <a class="nav-link text-danger" href="#">
                                        Log Out
                                   </a>
                              </li>
                         </ul>
                    </div>
               </nav>
          </div>
     </div>

     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          <div class="btn-container">
               <button class="btn btn-primary" onclick="regStudent()">Register New Student</button>
          </div>
         
          <form id="student" class="form-signin" style="display: none;" action = "<?php echo base_url('index.php/admin/register_student/register');?>" method = "post">
               <div class="form-label-group">
                   
                    <label for="inputName">
                         Name
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="Name" required >
               </div>
               <div class="form-label-group">
                    
                    <label for="inputRollNum">
                         Roll Number
                    </label>
                    <input type="number" name="roll_number" class="form-control" placeholder="Roll Number" required >
               </div>
               <div class="form-label-group">
                   
                    <label for="inputRollNum">
                         Admission Number
                    </label>
                    <input type="number" name="admission_number" class="form-control" placeholder="Admission Number" required >
               </div>
               <div class="form-label-group">
                    
                    <label for="inputMothersName">
                         Mother's Name
                    </label>
                    <input type="text" name="mothers_name" class="form-control" placeholder="Mother's Name" required >
               </div>
               <div class="form-label-group">
                    
                    <label for="inputFathersName">
                         Father's Name
                    </label>
                    <input type="text"name="fathers_name" class="form-control" placeholder="Father's Name" required >
               </div>
               <div class="form-label-group">
                   
                    <label for="inputDOB">
                         DOB
                    </label>
                    <input type="date" name="dob" class="form-control" placeholder="DOB" required >
               </div>
               <div class="form-label-group">
                   
                    <label for="inputGender">
                         Gender
                    </label>
                    <input type="text"name="gender" class="form-control" placeholder="Gender" required >
               </div>
               <div class="form-label-group">
                    
                    <label for="inputCourse">
                         Course
                    </label>
                    <input type="text" name="course" class="form-control" placeholder="Course" required >
               </div>
               <div class="form-label-group">
                    
                    <label for="inputBranch">
                         Branch
                    </label>
                    <input type="text" name="branch" class="form-control" placeholder="Branch" required >
               </div>
               <div class="form-label-group">
                   
                    <label for="inputYear">
                         Year
                    </label>
                    <input type="number" name="year" class="form-control" placeholder="Year" required >
               </div>
               <div class="form-label-group">
                    <input type="text" name="semester" class="form-control" placeholder="Semester" required >
                    <label for="inputSemester">
                         Semester
                    </label>
               </div>
               <div class="form-label-group">
                    
                    <label for="inputMobileNumber">
                         Mobile Number
                    </label>
                    <input type="tel" name="mobile_number" class="form-control" placeholder="Mobile Number" required >
               </div>
               <div class="form-label-group">
                    
                    <label for="inputEmail">
                         Email address
                    </label>
                    <input type="email" name="email" class="form-control" placeholder="Email address" required >
               </div>
               <div class="form-label-group">
                    
                    <label for="inputPassword">
                         Password
                    </label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
               </div>
               <button class="btn btn-lg btn-primary btn-block" type="submit">Register New Student</button>
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