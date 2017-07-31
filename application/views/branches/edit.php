<body>



 <div id="wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Xavi</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Admin</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="<?php echo base_url(); ?>branches/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active" >
                        <a href="<?php echo base_url(); ?>branches/index"><i class="fa fa-fw fa-dashboard"></i> Branches</a>
                    </li>
                      <li >
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Accounts</a>
                    </li>
                   
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
<!-- CONTENT CONTENT CONTENT !-->
<div id="page-wrapper">

    <div class="container-fluid">
		<h3>Edit Branch</h3>
			<?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
			<?php echo form_open('branches/edit/' . $branch->id); ?>
				<div class="form-group">
					<?php echo form_label('Name:'); ?>
					<?php
					
					$data = array(
							'class' => 'form-control',
							'name'	=> 'name',
							'value' => $branch->name ? $branch->name : set_value('name')
						);
					
					?>
					<?php echo form_input($data); ?>
				</div>
				<div class="form-group">
					<?php echo form_label('Company:'); ?>
					<?php
					
					$data = array(
							'class' => 'form-control',
							'name'	=> 'company',
							'value' => $branch->company ? $branch->company : set_value('company')
						);
					
					?>
					<?php echo form_input($data); ?>
				</div>
				<div class="form-group">
					<?php echo form_label('Address:'); ?>
					<?php
					
					$data = array(
							'class' => 'form-control',
							'name'	=> 'address',
							'value' => $branch->address ? $branch->address : set_value('address')
						);
					
					?>
					<?php echo form_textarea($data); ?>
				</div>
				<div class="form-group">
					<?php echo form_label('Contact No:'); ?>
					<?php
					
					$data = array(
							'class' => 'form-control',
							'name'	=> 'contact_no',
							'value' => $branch->contact_no ? $branch->contact_no : set_value('contact_no')
						);
					
					?>
					<?php echo form_input($data); ?>
				</div>
				<div class="form-group">
					<?php echo form_label('Contact Person:'); ?>
					<?php
					
					$data = array(
							'class' => 'form-control',
							'name'	=> 'contact_person',
							'value' => $branch->contact_person ? $branch->contact_person : set_value('contact_person')
						);
					
					?>
					<?php echo form_input($data); ?>
				</div>
				<div class="form-group">
					<?php
					
					$data = array(
							'class' => 'btn btn-primary',
							'name'	=> 'submit',
							'value' => 'Submit'
						);
					
					?>
					<?php echo form_submit($data); ?>
				</div>
			<?php echo form_close(); ?>

		
          
               

	</div>
            <!-- /.container-fluid -->

</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/morris/morris-data.js"></script>
 

</body>


 		


