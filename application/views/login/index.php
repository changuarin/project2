<?php if($this->session->flashdata('login_fail')) : ?>
  <p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('login_fail'); ?></p>
<?php endif; ?>  
<?php if($this->session->flashdata('logout_msg')) : ?>
  <p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('logout_msg'); ?></p>
<?php endif; ?> 
<?php if($this->session->flashdata('login_failed')) : ?>
  <p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('login_failed'); ?></p>
<?php endif; ?>

  <body class="login">

    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            
          
           <?php  echo form_open('main_con/login'); ?>
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" />
            
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password"  />
                
              </div>
               <input  class="btn btn-default submit" type="submit" value="Log in" /> 
              <div class="clearfix"></div>
                  <div class="separator">


                    <div class="clearfix"></div>
                    <br />

                    <div>
                      <h1><i class="fa fa-paw"></i> CHAN CHAN CHAN!</h1>
                      <p>©2017 All Rights Reserved. </p>
                    </div>
                  </div>
            <? echo form_close(); ?>
          </section>
        </div>

        
      </div>
    </div>
  </body>  
