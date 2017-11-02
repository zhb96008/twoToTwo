<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['weChat'] = [
    'Token' => 'zhbToken',
    'AppID' => 'wxf8403d312ac8294c',
    'AppSecret' => '9e1272ea0fb14c451b03609bdbf333f1',
    'get_access_token_url' => 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&', //获取token
    'get_menu_url' => ' https://api.weixin.qq.com/cgi-bin/menu/create?access_token='//http请求方式：POST（请使用https协议） https://api.weixin.qq.com/cgi-bin/menu/create?access_token=ACCESS_TOKEN
];

