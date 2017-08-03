
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
        <div class="margin">    
            <div class="collapse navbar-collapse navbar-ex-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="<?php echo base_url(); ?>branches/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li  >
                        <a href="<?php echo base_url(); ?>branches/index"><i class="fa fa-folder"></i> Branches</a>
                    </li>
                      <li class="active">
                        <a href="<?php echo base_url(); ?>main_con/view"><i class="fa  fa-user"></i> Accounts</a>
                    </li>
                   
                   
                </ul>
            </div>
        </div>    
            <!-- /.navbar-collapse -->
        </nav>
<!-- CONTENT CONTENT CONTENT !-->
    <div id="page-wrapper">

         <div class="container-fluid">

       
        
              	   <!-- Page Heading -->
	                <div class="row">
	                    <div class="col-lg-12">
	                        <h1 class="page-header">
	                            Xavi <small>Statistics Overview</small>
	                        </h1>
	                        
	                    </div>
	                </div>

                <?php echo form_open('main_con/edit/' . $user->id); ?>
                        <div class="form-group">
                            <?php echo form_label('First Name'); ?>
                            <?php
                            
                            $data = array(
                                    'class' => 'form-control',
                                    'name'  => 'fname',
                                    'value' => $user->fname ? $user->fname : set_value('fname')
                                );
                            
                            ?>
                            <?php echo form_input($data); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Last Name'); ?>
                            <?php
                            
                            $data = array(
                                    'class' => 'form-control',
                                    'name'  => 'lname',
                                    'value' => $user->lname ? $user->lname : set_value('lname')
                                );
                            
                            ?>
                            <?php echo form_input($data); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Email'); ?>
                            <?php
                            
                            $data = array(
                                    'class' => 'form-control',
                                    'name'  => 'email',
                                    'value' => $user->email ? $user->email : set_value('email')
                                );
                            
                            ?>
                            <?php echo form_input($data); ?>
                        </div>
                       
                      
                        <div class="form-group">
                            <?php

                            $data = array(
                                    'class'       => 'btn btn-primary',
                                    'name'        => 'update',
                                    'value'       => 'Update'
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


 		

