<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require S_SERVER['DOCUMENT_ROOT'].'/libraries/lib/Wechat.php';
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
     *library
	 */
	private  $wxObj;

	public function __construct()
    {
        parent::__construct();
        $this->load->library('lib/Wechat');
        $this->wxObj = $this->Wechat;
    }
	public function index()
    {
        //接入微信
        if (!isset($_GET['echostr'])) {
            header('Content-type:text');
            $this->wxObj->responseMsg();
        } else {
            $this->wxObj->valid();
        }
    }


}
