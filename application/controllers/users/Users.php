<?php defined('BASEPATH') OR exit('No Direct Script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';

class Users extends \Restserver\Libraries\REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	

	/* tambah user post */
	public function add_users_post()
	{

	}

	/* ambil user data */

	public function fetch_all_users_get()
	{
		header("Access-Control-Allow-Origin: *");

		$data = $this->User_model->fetch_all_users();

		//$data = array('returned');
		$this->response($data);
	}


}

?>