<?php

class Shopify {
    public $api_key;
    public $password;
    public $shop_url;

    public function set_apikey($key){
        $this->api_key = $key;
    }

    public function set_password($pw){
        $this->password = $pw;
    }

    public function set_url($url){
        $this->shop_url = $url;
    }

}

?>
