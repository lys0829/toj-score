<?php

class toj
{
    private $uid;

    function __construct($uid)
    {
        $this->uid = $uid;
    }

    function httprequest($url)
    {
        $ch = curl_init();
        curl_setopt( $ch , CURLOPT_URL , $url );
        curl_setopt( $ch , CURLOPT_ENCODING, "UTF-8" );
        curl_setopt( $ch , CURLOPT_RETURNTRANSFER , true );
        
        $data = curl_exec($ch);
        curl_close($ch);
        //echo $url;
        //echo $data;
        if(!$data)
        {
            return false;
        }
        return $data;
    }

    public function ac_times()
    {
        $url = '210.70.137.215/oj/be/acct/'.$this->uid.'';
        $data = $this->httprequest($url);
        if($data === false){
            return false;
        }

        $ac = substr_count($data,'_state-1');
        return $ac;
    }
}