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
     <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/home.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   



     <title>Home</title>
</head>
<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
          <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><?php echo $this->session->userdata('name');?></a>
          <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
               data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
               aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>
     </nav>

     <div class="container-fluid">
          <div class="row">
               <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="sidebar-sticky pt-3">
                         <ul class="nav flex-column">
                              <li class="nav-item">
                                   <a class="nav-link" href="<?php echo base_url('index.php/teachers/profile');?>">
                                   <i class="fa fa-user"></i>
                                        <span data-feather="profile"></span>
                                        PROFILE
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="<?php echo base_url('index.php/teachers/registered_users/students');?>">
                                        <svg class="bi bi-list-check" width="1em" height="1em" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                                        </svg>
                                        Student List
                                   </a>
                              </li>
                             
                              <li class="nav-item">
                                   <a class="nav-link" href="<?php echo base_url('index.php/teachers/attendance/students');?>">
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
                                   <a class="nav-link" href="<?php echo base_url('index.php/teachers/subject/fetch_subject');?>">
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
                                        Subjects
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="<?php echo base_url('index.php/teachers/academic_calender');?>">
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
                            
                              <li class="nav-item logOutBtn">
                                   <a class="nav-link text-danger" href="<?php echo base_url('index.php/Login/logout');?>">
                                        Log Out
                                   </a>
                              </li>
                         </ul>
                    </div>
               </nav>
          </div>
     </div>
     <?php $this->load->view('footer.php') ?>
     </body>