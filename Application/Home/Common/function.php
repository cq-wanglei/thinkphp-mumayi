<?php


	/*
		百度PC搜索获取相关词
	*/
	function baidu($word){
		
        $url = "http://www.baidu.com/s?wd=".$word;
        // 构造包头，模拟浏览器请求
        $header = array (
            "Host:www.baidu.com",
            "Content-Type:application/x-www-form-urlencoded",//post请求
            "Connection: keep-alive",
            'Referer:http://www.baidu.com',
            'User-Agent: Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; BIDUBrowser 2.6)'
        );
        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_HTTPHEADER, $header );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        $content = curl_exec ( $ch );
        if ($content == FALSE) {
        echo "error:" . curl_error ( $ch );
        }
        curl_close ( $ch );
		$reg = "/<th><a href=\".*?\">(.*?)<\/a><\/th>/";
		preg_match_all($reg, $content, $res);
		$lanmu = $res[1];

        return $lanmu;
	}
	/*
		获取拼音
	*/

	function getallpingyin($str){
		include_once 'pingyin.class.php';
		$PingYing = new GetPingYing(); 
		return $PingYing->getAllPY($str);
	}
	/*
		关联数组转索引数组
	*/
	function gzs($arr){
		$res = array();
		foreach ($arr as $key => $value) {
			array_push($res, $value);
		}
		return $res;
	}

?>