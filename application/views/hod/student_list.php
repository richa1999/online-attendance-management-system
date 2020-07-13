<?php $this->load->view('hod/header') ?>
<style>
.search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.search-container {
  float: right;
  
}
.search-container button:hover {
  background: #ccc;
}
</style>
     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     <div class="search-container">
              <form action="/action_page.php">
               <input type="text" placeholder="Search.." name="search">
               <button type="submit"><i class="fa fa-search"></i></button>
               </form>
              </div>
              <form class="registered_student_form" action=<?php echo base_url('index.php/hod/registered_users/students');?> method = "post">
     <div class="row">
              
                      <div class="select">
                                    <label for="course">Course*</label>
                                    <select id="course" name="course">
                                        <option value="">Select Course</option>
                                        <option value="Btech">Btech</option>
                                        <option value="Mtech">Mtech</option>
                                    </select>
                                </div>
              
                                <div class="select">
                                    <label for="branch">Branch*</label>
                                    <select id="branch" name="branch">
                                        <option value="">Select Branch</option>
                                        <option value="ceit">CEIT</option>
                                        <option value="cs">CS</option>
                                    </select>
                                </div>
                                <div class="select">
                                    <label for="year">Year*</label>
                                    <select id="year" name="year">
                                        <option value="">Select Year</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="select">
                                    <label for="Sem">Semester*</label>
                                    <select id="Sem" name="Sem">
                                        <option value="">Select Sem</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
               <button class="btn btn-primary btn-sm showList" type="submit">Submit</button>
          </div>
          </form>
          <div class="table_responsive">
             <table class = "table table-bordered">
             <tr>
                 <th>Name</th>
                 <th>Mobile</th>
                 <th>Roll No.</th>
                 <th>Admission No.</th>
                 <th>Mother's Name</th>
                 <th>Father's Name</th>
                 <th>DOB</th>
                 <th>Gender</th>
                 <th>Email</th>
             </tr>
          <?php
          if($fetch_data->num_rows() > 0)
          {
               foreach($fetch_data->result() as $row)
               {
                    ?>
                       <tr>
                         <td><?php echo $row->name; ?></td>
                         <td><?php echo $row->mobile_number; ?></td>
                         <td><?php echo $row->roll_number; ?></td>
                         <td><?php echo $row->admission_number; ?></td>
                         <td><?php echo $row->mothers_name; ?></td>
                         <td><?php echo $row->fathers_name; ?></td>
                         <td><?php echo $row->dob; ?></td>
                         <td><?php echo $row->gender; ?></td>
                         <td><?php echo $row->email; ?></td>
                    <?php
               }
          }
          else
          {
          ?>
               <tr>
                   <td coldpan="3">No Data Found</td>
               </tr>
          <?php
          }
          ?>
         </table>
          </div>
     </main>
</body>

</html>