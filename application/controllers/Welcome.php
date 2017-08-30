<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require BASEPATH.'/libraries/lib/Wechat.php';
require S_SERVER['DOCUMENT_ROOT'].'/libraries/lib/Wechat.php';
//require '/application/libraries/lib/Wechat.php';
//require $_SERVER['DOCUMENT_ROOT'].'/application/libraries/lib/Wechat.php';
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
//	const TOKEN = 'zhbToken';

	public function __construct()
    {
        $this->wxObj = new wechatCallbackapiTest();

        header('Content-type:text');
	public function index()
	{

//	    $this->load->('Wechat');

        if (!isset($_GET['echostr'])) {
            //
            $this->wxObj->responseMsg();
//	    $this->load->library('lib/Wechat');


	    header('Content-type:text');
        define("TOKEN", "zhbToken");
        $wechatObj = new CI_Wechat();
        if (!isset($_GET['echostr'])) {

            $wechatObj->responseMsg();
        }else{
            $this->wxObj->valid();
        }
    }

    public function index()
	{

		$this->load->view('welcome_message');
	}
}
