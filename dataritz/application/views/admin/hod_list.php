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
          <div class="table_responsive">
             <table class = "table table-bordered">
             <tr>
                 <th>Name</th>
                 <th>Mobile</th>
                 <th>Gender</th>
                 <th>Email</th>
                 <th>Department</th>
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
                         <td><?php echo $row->dept; ?></td>
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