<!DOCTYPE html>
<html>
<head>
	<title>STUDENTS PORTAL</title>
	<link rel="stylesheet" type="text/css" href="assets/student/css/student.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
</head>
<body>
	<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
          <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">{User's Name}</a>
          <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
               data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
               aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>
          <input class="form-control mr-sm-2" id="inputcontrol" type="search" placeholder="Search" aria-label="Search">
          <i class="fas fa-search"></i>
     </nav>

     <div class="container-fluid float-right">
          <div class="row">
               <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="sidebar-sticky pt-3">
                         <ul class="nav flex-column">
                              <li class="nav-item">
                                   <a class="nav-link" href="profile3.html">
                                       <!--  <svg class="bi bi-house" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                             <path fill-rule="evenodd"
                                                  d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                        </svg> --><i class="fas fa-user-circle"></i>
                                        <span data-feather="PROFILE"></span>
                                        PROFILE
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link " href="studentatt.html">
                                        <svg class="bi bi-list-check" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                                        </svg>
                                        ATTENDANCE
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="notification.html">
                                        <!-- <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                             <path fill-rule="evenodd"
                                                  d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                                        </svg> --><i class="fas fa-bell"></i>
                                        NOTIFICATION
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="#">
                                        <!-- <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                             <path fill-rule="evenodd"
                                                  d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                                        </svg> --><i class="fas fa-chart-line"></i>
                                        STATUS BAR
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
     
</body>


</body>
</html>