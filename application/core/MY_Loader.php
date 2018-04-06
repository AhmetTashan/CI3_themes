<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader
{

	public function __construct()
	{
		parent::__construct();

	}

	public function template($template_name, $vars = array(), $return = FALSE)
	{
		$this->_ci_view_paths = array( $_SERVER['DOCUMENT_ROOT'].'/themes/default/view/' => 1);

		@$content  = $this->view('includes/header', $vars, $return);
		@$content .= $this->view($template_name, $vars, $return);
		@$content .= $this->view('includes/footer', $vars, $return);

		if ( $return )
		{
			return $content;
		}
	}
	
	public function admin_template($template_name, $vars = array(), $return = FALSE)
	{
		$this->_ci_view_paths = array( $_SERVER['DOCUMENT_ROOT'].'/themes/admin/view/' => 1);

		@$content  = $this->view('includes/header', $vars, $return);
		@$content .= $this->view($template_name, $vars, $return);
		@$content .= $this->view('includes/footer', $vars, $return);

		if ( $return )
		{
			return $content;
		}
	}

}
