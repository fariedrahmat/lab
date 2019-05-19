<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH . '/libraries/REST_Controller.php';
 
class Buku extends \Restserver\Libraries\REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('buku_model');
    }

    /**
     *  Add New User
     * @method : POST
     */
    public function add_buku_post()
    {
        
    }

    /**
     *  Fetch All User Data
     * @method : GET
     */
    public function fetch_all_buku_get()
    {
        header("Access-Control-Allow-Origin: *");
        $data = $this->buku_model->fetch_all_buku();
        $this->response($data);
    }
}