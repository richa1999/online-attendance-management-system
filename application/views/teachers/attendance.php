
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
              <form class="registered_student_form" action=<?php echo base_url('index.php/teachers/attendance/students');?> method = "post">
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
               
          </div>
          <button class="btn btn-primary btn-sm showList">Submit</button>
         
</form>
<form  action="<?php h() ?>" method = "post">
     <div class="row">
              
                            <div class="select">
                                    <label for="course">Date*</label>
                                    <input type ="date" name="date", placeholder = "Date">
                                    </div>
                          <div class="select">
                                    <label for="fac_name">Faculty Name*</label>
                                    <input type ="text" name="fac_name", placeholder = "Faculty Name">
                            
                             </div>
                                <div class="select">
                                    <label for="lecture">Lecture*</label>
                                    <select id="lecture" name="lecture">
                                        <option value="">Select Lecture</option>
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

                                <div class="select">
                                    <label for="sub_name">Subject Name*</label>
                                    <select id="sub_name" name="sub_name">
                                        <option value="">Select Name</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                         
                                <div class="select">
                                    <label for="sub_code">Subject Code*</label>
                                    <select id="sub_code" name="sub_code">
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
               
          </div>
          
          <div class="table_responsive">
             <table class = "table table-bordered">
             <thead class="thead-dark">
             <tr>
                 <th>Name</th>
                 <th>Roll No.</th>
                 <th>Admission No.</th>
                 <th scope="col">Present / Absent</th>
               
             </tr>
         
               <?php
               $tmp = array();
        if($_SERVER['REQUEST_METHOD']=='POST'){
          if($fetch_data->num_rows() > 0)
          {
               foreach($fetch_data->result() as $row)
               {

                    ?>
                       <tr>
                         <td name= "name"><?php echo $row->name; ?></td>
                         <td name= "roll_no"><?php echo $row->roll_number; ?></td>
                         <td name="add_no"><?php echo $row->admission_number; ?></td>
                          <td>  <label><input type="radio" id="present" name="status" value="present">Present</label>
                       
                          <label><input type="radio" id="absent" name="status" value="absent">Absent</label>
                        
                         </td>
                    </tr>
                    <?php
                      array_push($tmp, $row);  
               }
          }
          else
          {
          ?>
               <tr>
                   <td coldpan="3">No Data Found</td>
               </tr>
          <?php
          }}
          ?>
                    
                    </table>
                    <button class="btn btn-primary btn-sm showList"  type = "submit" name = "save">Save</button>
                    </form>
                    </div>
                    </main>
                    <?php
                function h(){
                if(isset($_POST["save"])){
                $date = $_POST["date"];
                $lec_no = $_POST['lecture'];
                $sub_name = $_POST['sub_name'];
                $sub_code = $_POST['sub_code'];
                $Fac_nam = $_POST['fac_name'];
                $status = $_POST['status'];
                foreach ($tmp as $row){
                    $name = $row->name;
                    $roll_no = $row->roll_number;
                    $add_no = $row->addmission_number;
                    $data = array(
                        'name' => $name,
                        'roll_no' => $roll_no,
                        'admission_no' => $add_no,
                        'status'=> $status,
                        'date' => $date,
                        'lecture_no' => $lec_no,
                        'sub_code' => $sub_code,
                        'sub_name' => $sub_name,
                        'fac_name' => $Fac_nam 
                    );
                  
                }
                // echo "<script>alert('Email id already registered!');history.go(-1);</script>";
                print_r($data);
            
            }
        }
             ?>
             <?php $this->load->view('footer.php') ?>
          
     
