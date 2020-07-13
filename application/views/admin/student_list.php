<?php $this->load->view('admin/header') ?>
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
  position:absolute;
  top:-328px;
  right:300px;
}

.search-container {
  float: right;
  
}
.search-container button:hover {
  background: #ccc;
}
.select{
   
    position:relative;
    top:-200px;
    left:250px;
    margin: 5px;
    display:inline-block;
    font-size:25px;

}
.showList{
    margin:20px;
    position:relative;
    top:-170px;
    width:40%;
    left:300px;
}
input{
     position:relative;
    top:-320px;
    width:400%;
    left:-900px;
}
.form-control{
    width:50%;
}
.table_responsive{
    position:absolute;
    top:150px;
}
</style>
     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     <div class="search-container">
              <form action="/action_page.php">
               <input type="text" placeholder="Search.." name="search" id="input">
               <button type="submit"><i class="fa fa-search"></i></button>
               </form>
              </div>
              <form class="registered_student_form" action=<?php echo base_url('index.php/admin/registered_users/students');?> method = "post">
                 <div class="row">
                                    <div class="form-group col-md-4 select" >
                                        <label for="inputState"><b> Course</b></label>
                                        <select id="inputState" class="form-control" name="course">
                                            <option selected>Choose...</option>
                                            <option>BTech</option>
                                            <option>MBA</option>
                                        </select>
                                    </div>                  
                                    <div class="form-group col-md-4 select">
                                        <label for="inputState"><b>Branch</b></label>
                                        <select id="inputState" class="form-control" name="branch">
                                            <option selected>Choose...</option>
                                            <option>CEIT</option>
                                            <option>CS</option>
                                            <option>IT</option>
                                            <option>ECE</option>
                                            <option>EN</option>
                                            <option>MECH</option>
                                            <option>CE</option>
                                        </select>
                                    </div>                  
                                    <div class="form-group col-md-4 select">
                                        <label for="inputState"><b>Year</b></label>
                                        <select id="inputState" class="form-control" name="year">
                                            <option selected>Choose...</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>                  
                                    <div class="form-group col-md-4 select">
                                        <label for="inputState"><b>Semester</b></label>
                                        <select id="inputState" class="form-control" name="semester">
                                            <option selected>Choose...</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                        </select>
                                    </div>                        
               <button class="btn btn-primary btn-sm showList" type="submit">Search</button>
        
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