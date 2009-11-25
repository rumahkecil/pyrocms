<?php
/**
 * @name 		Modules admin controller
 * @author 		Yorick Peterse - PyroCMS Development Team
 * @package 	PyroCMS
 * @subpackage 	Core modules
 * @since 		v0.9.7
 */
class Admin extends Admin_Controller
{
	// Constructor function
	function __construct()
	{
		parent::Admin_Controller();
		// $this->load->lang('modules'); TODO: Fix this fucker, no idea why it refuses to load.
	}
	
	// Index function
	function index()
	{
 		$this->data->modules = $this->modules_m->getModules();
			  
		$this->template->build('admin/index', $this->data);
	}
}
?>