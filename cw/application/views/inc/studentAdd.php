<H2>Add User</h2>
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
            <form action="<?php echo base_url();?>user/addUserForm" method="post" >
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="name" class="form-control span12">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control span12">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control span12">
                </div>
                <div class="form-group">
				<input type="submit" name="" class="btn btn-primary" value="Submit">
                </div>

            </form>
        </div>
