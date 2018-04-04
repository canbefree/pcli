<?php
use PHPUnit\Framework\TestCase;
use App\Models\Http;

class HttpTest extends TestCase {
    public function test_post_baidu_com(){
        $url = 'http://testadminset.xiaoxiongyouxi.com/';
        $is_post = false;
        $str =  Http::curl($url,$is_post);
        $this->assertContains('常见问题',$str);
    }
}
