<?php $this->load->view('teachers/header') ?>
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
               <input type="text" placeholder="Search.." name="search">
               <button type="submit"><i class="fa fa-search"></i></button>
               </form>
              </div>
              <form class="registered_student_form" action=<?php echo base_url('index.php/teachers/subject/fetch_subject');?> method = "post">
              <div class="row" style="margin-top:350px;">
                                    <div class="select" style=" width: 350px">
                                        <label for="course"><b> Course</b></label>
                                        <select id="course" class="form-control" name="course">
                                            <option selected>Choose...</option>
                                            <option>BTech</option>
                                            <option>MBA</option>
                                        </select>
                                    </div>                  
                                    <div class="select" style="width: 350px">
                                        <label for="branch"><b>Branch</b></label>
                                        <select id="branch" class="form-control" name="branch">
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
                                    <div class="select" style="width: 350px">
                                        <label for="year"><b>Year</b></label>
                                        <select id="year" class="form-control" name="year">
                                            <option selected>Choose...</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>                  
                                    <div class="select" style="width: 350px">
                                        <label for="semester"><b>Semester</b></label>
                                        <select id="semester" class="form-control" name="Sem">
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
                 </div>                        
               <button class="btn btn-primary btn-sm showList" type="submit">Submit</button>
          </div>
          </form>
          <div class="table_responsive">
             <table class = "table table-bordered" style="margin-left:240px;">
             <tr>
                 <th>Subject Name</th>
                 <th>Subject Code</th>
                 <th>Faculty Name</th>
             </tr>
          <?php
          if($fetch_data->num_rows() > 0)
          {
               foreach($fetch_data->result() as $row)
               {
                    ?>
                       <tr>
                         <td><?php echo $row->sub_name_1; ?></td>
                         <td><?php echo $row->sub_code_1; ?></td>
                         <td><?php echo $row->faculty_1; ?></td>
                         <tr>
                         <td><?php echo $row->sub_name_2; ?></td>
                         <td><?php echo $row->sub_code_2; ?></td>
                         <td><?php echo $row->faculty_2; ?></td>
                         </tr>
                         <tr>
                         <td><?php echo $row->sub_name_3; ?></td>
                         <td><?php echo $row->sub_code_3; ?></td>
                         <td><?php echo $row->faculty_3; ?></td>
                         </tr>
                         <tr>
                         <td><?php echo $row->sub_name_4; ?></td>
                         <td><?php echo $row->sub_code_4; ?></td>
                         <td><?php echo $row->faculty_4; ?></td>
                         </tr>
                         <tr>
                         <td><?php echo $row->sub_name_5; ?></td>
                         <td><?php echo $row->sub_code_5; ?></td>
                         <td><?php echo $row->faculty_5; ?></td>
                         </tr>
                         <tr>
                         <td><?php echo $row->sub_name_6; ?></td>
                         <td><?php echo $row->sub_code_6; ?></td>
                         <td><?php echo $row->faculty_6; ?></td>
                         </tr>
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
     <?php $this->load->view('footer.php') ?>
</body>

</html>