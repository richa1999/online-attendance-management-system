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
.select{
   
   position:relative;
   top:-200px;
   left:250px;
   margin: 5px;
   display:inline-block;
   font-size:25px;
   text-align:center;
   

}
.showList{
     margin:50px;
    position:relative;
    top:-197px;
    width:10%;
    left:200px;
}

.search-container {
  float: right;
  
}
.search-container button:hover {
  background: #ccc;
}
input{
     position:relative;
    top:-320px;
    width:400%;
    left:-900px;
}
.table_responsive{
     position:relative;
     top:-150px;
}
</style>
     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     <div class="search-container" style="margin-top:5px">
              <form action="/action_page.php">
               <input type="text" placeholder="Search.." name="search">
               <button type="submit"><i class="fa fa-search"></i></button>
               </form>
              </div>
              <form class="registered_teacher_form" action=<?php echo base_url('index.php/admin/registered_users/teachers');?> method = "post">
     <div class="row" style="margin-top:350px;">
              
                                <div class="form-group col-md-4 select">
                                        <label for="inputState"><b>Department</b></label>
                                        <select id="inputState" class="form-control" name="dept">
                                            <option selected>Select Department...</option>
                                            <option>CEIT</option>
                                            <option>CS</option>
                                            <option>IT</option>
                                            <option>ECE</option>
                                            <option>EN</option>
                                            <option>MECH</option>
                                            <option>CE</option>

                                        </select>
                                    </div>         
               <button class="btn btn-primary btn-sm showList" type="submit">Search</button>
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
     <?php $this->load->view('footer.php') ?>
</body>

</html>