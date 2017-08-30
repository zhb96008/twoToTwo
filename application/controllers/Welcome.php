<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require BASEPATH.'/libraries/lib/Wechat.php';
require S_SERVER['DOCUMENT_ROOT'].'/libraries/lib/Wechat.php';
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
<<<<<<< HEAD
	private  $wxObj;
//	const TOKEN = 'zhbToken';

	public function __construct()
    {
        $this->wxObj = new wechatCallbackapiTest();

        header('Content-type:text');
=======
	public function index()
	{
//	    $this->load->('Wechat');
>>>>>>> wechat

        if (!isset($_GET['echostr'])) {
<<<<<<< HEAD
            //
            $this->wxObj->responseMsg();
=======
            $wechatObj->responseMsg();
>>>>>>> wechat
        }else{
            $this->wxObj->valid();
        }
    }

    public function index()
	{

		$this->load->view('welcome_message');
	}
}
