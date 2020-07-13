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
              <form class="registered_teacher_form" action=<?php echo base_url('index.php/hod/registered_users/teachers');?> method = "post">
     <div class="row">
              
                      <div class="select">
                                    <label for="dept">Department*</label>
                                    <select id="dept" name="dept">
                                        <option value="">Select Department</option>
                                        <option value="ceit">CEIT</option>
                                        <option value="cs">CS</option>
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
                         <td><?php echo $row->mobile; ?></td>
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