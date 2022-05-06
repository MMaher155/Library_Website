<H2>Edit User</h2>
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
            <form action="<?php echo base_url();?>student/updatestudent" method="post" >
                <input type="hidden" name="id" value="<?php echo $stuById->id; ?>" >
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="name" value="<?php echo $stuById->name; ?>" class="form-control span12">
                </div>

                <div class="form-group">
                    <label>phone</label>
                    <input type="text" name="phone" value="<?php echo $stuById->phone; ?>" class="form-control span12">
                </div>
                <div class="form-group">
                    <label>email</label>
                    <input type="text" name="email" value="<?php echo $stuById->email; ?>" class="form-control span12">
                </div>
                <div class="form-group">
				<input type="submit" name="" class="btn btn-primary" value="Submit">
                </div>

            </form>
        </div>
