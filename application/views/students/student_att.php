<?php $this->load->view('students/header') ?>
     <main role="main">
     <!--  <section id="facilities"> -->
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="card text-center">
                <div class="card-body">
                  <h4 class="card-title">Your Daily Attendance</h4>
                  <hr>
                  <a href="<?php echo base_url('index.php/students/student_portal/daily_att');?>">Check Out!</a>
                  <i class="fas fa-arrow-right" style="padding-left:20px; "></i>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="card text-center">
                <div class="card-body">
                  <h4 class="card-title">Your Weekly Attendance</h4>
                  <hr>
                  <a href="<?php echo base_url('index.php/students/student_portal/weekly_att');?>">Check Out!</a>
                  <i class="fas fa-arrow-right" style="padding-left:20px; "></i>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="card text-center">
                <div class="card-body">
                  <h4 class="card-title">Your Total Attendance</h4>
                  <hr>
                  <a href="<?php echo base_url('index.php/students/student_portal/total_att');?>">Check Out!</a>
                  <i class="fas fa-arrow-right" style="padding-left:20px; "></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- </section> -->
      



       
</div>
</div>
</main>
</div>
 
     
     <script type="text/javascript" src="profile.js"></script>
     <?php $this->load->view('footer.php') ?>
</body>
