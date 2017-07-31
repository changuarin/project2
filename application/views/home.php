
<?php if($this->session->flashdata('registered')) : ?>
	<p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('registered'); ?></p>
<?php endif; ?>
<?php if($this->session->flashdata('login_success')) : ?>
	<p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('login_success'); ?></p>
<?php endif; ?>
<?php if($this->session->flashdata('login_failed')) : ?>
	<p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('login_failed'); ?></p>
<?php endif; ?>
<?php if($this->session->flashdata('logged_out')) : ?>
	<p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('logged_out'); ?></p>
<?php endif; ?>
<?php if($this->session->flashdata('no_access')) : ?>
	<p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('no_access'); ?></p>
<?php endif; ?>
