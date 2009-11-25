<?php $this->lang->load('newsletter'); ?>

<h2><?php echo lang('letter_letter_title');?></h2>
<p><?php echo lang('letter_subscripe_desc');?></p>

<?php echo form_open('newsletters/subscribe'); ?>
	<p>
		<label for="email"><?php echo lang('letter_email_label');?>:</label>
		<?php echo form_input(array('name'=>'email', 'value'=>'user@example.com', 'size'=>20, 'onfocus'=>"this.value=''")); ?>
	</p>
		
	<p><?php echo form_submit('btnSignup', lang('letter_subscripe_label')) ?></p>
<?php echo form_close(); ?>