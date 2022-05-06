  <script src="<?php echo base_url(); ?>lib/jquery.dataTables.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/jquery.dataTables.css"/>
<h2>Issue List</h2>
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
      <th>User Name</th>
      <th>Book name</th>
      <th>Issue Date</th>
      <th>Return Date</th>
      <th style="width: 3.5em;">action</th>
    </tr>
  </thead>
  <tbody>
    <?php
       $i=0;
       foreach ($issuedata as $idata) {
           $i++;
     ?>
    <tr>
      <td> <?php echo $i;?> </td>

      <td>
           <?php
              $name=$idata->user_id;
              foreach ($studata as $sdata ) {
               if ($sdata->user_id==$name)
                {
                   echo $sdata->name;
                 }
              }
           ?>
      </td>
      <td>
         <?php
              $bname=$idata->bname;
              foreach ($bookdata as $bdata ) {
               if ($bdata->bookid==$bname)
                { ?>
                  <a href="<?php echo base_url();?>Manage/bookinfo/<?php echo $bname;?>"><?php echo $bdata->bookname; ?> </a>

                <?php }
              }
           ?>
      </td>
      <td>
        <?php
             echo date("d/m/Y h:ia", strtotime($idata->date));
           ?>
      </td>
        <td>
        <?php
             echo $idata->return;
           ?>
      </td>
      <td>
          <a onclick="return confirm('Are you sure?');" href="<?php echo base_url();?>Manage/delissue/<?php echo $idata->id;?>" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
      </td>
    </tr>
  <?php }?>
  </tbody>
</table>
<script>
  $(document).ready(function() {
        $('#Asfak').dataTable();
    });
</script>
