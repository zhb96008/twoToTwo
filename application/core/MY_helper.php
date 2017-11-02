<?php
/**
 * t8n 提供
 * ci 框架公共函数
 */

/**
 * 发送http 请求 公共函数
 */
function http_request($url ,$method='get',$data = '') {
    $ch = cur_init();
    if ($method == 'get' && !empty($data)) {
        $url = $url . http_build_query($data);
    }
    curl_setopt($ch,CURLOPT_URL,$url);

    if ($method == "post") {
        curl_setopt($ch,CURLOPT_POST,1);//post 请求
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    }
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//获取返回数据，0自动显示
    curl_exec($ch);
    curl_close($ch);
}
