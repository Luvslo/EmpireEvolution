<?php

class Friends extends Controller {

	function Friends()
	{
		parent::Controller();	
		$this->load->library('parser');
		$this->load->model('Friends_model');
		$this->load->controller('Member');
	}

	function index()
	{
		if($this->Member->logged_in())
		{
			$this->friends_panel();
		}
		else
		{
			$this->Member->login();	
		}
	}

	function friends_panel()
	{

	}

	function add()
	{
		// TODO Check for validity
		// TODO Load the friends_add view OR process it
	}

	function remove()
	{
		// TODO Check for validity
		// TODO Check for confirmation
		// TODO Load the friends_remove view OR process it
	}

	function comparison()
	{
		// TODO Check for validity
		// TODO Load the friends_comparison view OR process it	
	}
}

/* End of file friends.php */
/* Location: ./system/application/controllers/friends.php */
