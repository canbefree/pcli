<?php
namespace App\models;

class Http{
    /**
     * curl模拟http请求
     * @param $url string 请求链接
     * @param $is_post bool 是否post请求
     * @param $post_data array 请求数据
     * @return  mix false: 请求结果为空, string 请求结果
     */
    public static function curl($url,$is_post=true,$post_data=[]){
        $ch = curl_init();

        // 设置URL和相应的选项
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // 抓取URL并把它传递给浏览器
        $data = curl_exec($ch);

        if(empty($data)){
            return false;
        }

        // 关闭cURL资源，并且释放系统资源
        curl_close($ch);

        return $data;
    }

}
