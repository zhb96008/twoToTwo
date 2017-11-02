<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['weChat'] = [
    'Token' => 'zhbToken',
    'AppID' => 'wx1cf73d341431024c',
    'AppSecret' => 'fdce4d6c8523d15a16352d46b024fa1f',
    'get_access_token_url' => 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&', //获取token
    'get_menu_url' => ' https://api.weixin.qq.com/cgi-bin/menu/create?access_token='//http请求方式：POST（请使用https协议） https://api.weixin.qq.com/cgi-bin/menu/create?access_token=ACCESS_TOKEN
];

