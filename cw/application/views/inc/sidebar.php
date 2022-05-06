<div class="sidebar-nav">
   <ul>
    <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i>Dashboard<i class="fa fa-collapse"></i></a>
	</li>
	   <?php
	   if ($this->session->userdata('type') == "user"){
	   	?>
		   <li><ul class="dashboard-menu nav nav-list collapse in">
				   <li><a href="<?php echo base_url(); ?>/library/index"><span class="fa fa-caret-right"></span>Home</a></li>
				   <li><a href="<?php echo base_url();?>author/authorlist"><span class="fa fa-caret-right"></span>Author List</a></li>
				   <li><a href="<?php echo base_url();?>book/booklist"><span class="fa fa-caret-right"></span>Book List</a></li>

				  <?php  if ($this->session->userdata('subscribe') == 0)  echo ""; else { ?>
				   <li><a href="<?php echo base_url();?>manage/issuebook"><span class="fa fa-caret-right"></span>Borrow Book</a></li>
				   <li><a href="<?php echo base_url();?>manage/issuelist"><span class="fa fa-caret-right"></span>Edit List</a></li>



				   <?php

				  }

				   ?>
			   </ul></li>
	   <?php
	   }
	   else {


	   ?>
		   <li><ul class="dashboard-menu nav nav-list collapse in">
				   <li><a href="<?php echo base_url(); ?>/library/index"><span class="fa fa-caret-right"></span>Home</a></li>

				   <li><a href="<?php echo base_url();?>Student/studentlist.php"><span class="fa fa-caret-right"></span>User List</a></li>

				   <li><a href="<?php echo base_url();?>author/addauthor"><span class="fa fa-caret-right"></span>Add Author</a></li>
				   <li><a href="<?php echo base_url();?>author/authorlist"><span class="fa fa-caret-right"></span>Author List</a></li>

				   <li><a href="<?php echo base_url();?>book/addbook"><span class="fa fa-caret-right"></span>Add Book</a></li>
				   <li><a href="<?php echo base_url();?>book/booklist"><span class="fa fa-caret-right"></span>Book List</a></li>

				   <li><a href="<?php echo base_url();?>manage/issuebook"><span class="fa fa-caret-right"></span>Issue Book</a></li>
				   <li><a href="<?php echo base_url();?>manage/issuelist"><span class="fa fa-caret-right"></span>Edit List</a></li>

			   </ul></li>
<?php

	   }?>
  </ul>

    </div>
