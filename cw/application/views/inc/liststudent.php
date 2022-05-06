 <script src="<?php echo base_url(); ?>lib/jquery.dataTables.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/jquery.dataTables.css"/>
<h2>User List</h2>
<hr/>
<?php
 $msg=$this->session->flashdata('msg');
 if(isset($msg))
    {
        echo $msg;
    }
?>
<table class="display" id="Asfak">
  <thead>
    <tr>
      <th>SL.</th>
      <th>Name</th>
      <th>Phone</th>
      <th style="width: 3.5em;">action</th>
    </tr>
  </thead>
  <tbody>
    <?php
       $i=0;
       foreach ($studentdata as $sdata) {
           $i++;
     ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $sdata->name; ?></td>
      <td><?php echo $sdata->phone; ?></td>
      <td>
          <a href="<?php echo base_url();?>Student/editstudent/<?php echo $sdata->user_id;?>"><i class="fa fa-pencil"></i></a>
          <a onclick="return confirm('Are you sure?');" href="<?php echo base_url();?>Student/delstudent/<?php echo $sdata->user_id;?>" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
      </td>
    </tr>
   <?php } ?>
  </tbody>
</table>
<script>
  $(document).ready(function() {
        $('#Asfak').dataTable();
    });
</script>
