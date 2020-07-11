<?php $this->load->view('admin/header') ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

<?php echo form_open_multipart('admin/academic_calender/do_upload');?>
<form action = <?php echo base_url('index.php/admin/academic_calender/do_upload')?> method="post">
<input type="file" name="userfile" size="20" />
<br /><br />
<button type="submit" value="upload">Update</button>
<ul>
</form>

<li><?php echo $upload_data['file_name'];?></li>
<iframe src="assets/academic_calender/upload" style="width:100%; height:90vh;"></iframe>
</ul>
     </main>