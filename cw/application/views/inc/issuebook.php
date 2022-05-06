<script>
    $(document).ready(function() {
        $("#Department").change(function(){
              var dep =$("#Department").val();
              $.ajax({
                type:"POST",
                url:"<?php echo base_url();?>manage/getBookByDepId/"+dep,
                success:function(data){
                   $("#book").html(data);
                }
              });
        });
    });
     $(document).ready(function() {
        $("#stu").change(function(){
              var stu =$("#stu").val();
              $.ajax({
                type:"POST",
                url:"<?php echo base_url();?>manage/getStuDataById/"+stu,
                success:function(data){
                   $("#reg").html(data);
                }
              });
        });
    });
      $(document).ready(function() {
        $("#stu").change(function(){
              var stu =$("#stu").val();
              $.ajax({
                type:"POST",
                url:"<?php echo base_url();?>manage/getsesStuDataById/"+stu,
                success:function(data){
                   $("#ses").html(data);
                }
              });
        });
    });

</script>
<H2>Issue Book</h2>
<hr/>
<?php
 $msg=$this->session->flashdata('msg');
 if(isset($msg))
    {
        echo $msg;
    }
?>
<style>
    .dep{
        width: 300px;
        padding: 5px;
        border: 1px solid #ddd;
    }
</style>
        <div class="panel-body" style="width:600px;">
            <form action="<?php echo base_url();?>manage/addIssueForm" method="post" >
                <div class="form-group">
                    <label>User Name</label>
                    <!-- <input type="text" name="sname" class="form-control span12"> -->
                    <select name="sname" class="dep" id="stu">
                        <option value="">select one</option>
                        <?php
                            foreach ($studata as $sdata) {
                        ?>
                        <option style="" value="<?php echo $sdata->user_id;?>" >
                            <?php
                              echo $sdata->name;
                            ?>
                        </option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Book name &nbsp</label>
                    <select name="book" class="dep" id="book">
                        <option value="">select one</option>
						<?php
						foreach ($bookdata as $bdata) {
							?>
							<option style="" value="<?php echo $bdata->bookid;?>" >
								<?php
								echo $bdata->bookname;
								?>
							</option>
							<?php
						}
						?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Return date &nbsp(DD/MM/Y)</label>
                    <input type="date" name="return" >
                </div>
               <div class="form-group">
				<input type="submit" name="" class="btn btn-primary" value="Submit">
                </div>

            </form>
        </div>
