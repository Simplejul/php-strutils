<?php

class StrUtils{
    private $str;
    public function bold($a){
        return '<b>'.$a.'</b>';
    }
    public function italic($a){
        return '<i>'.$a.'</i>';
    }
    public function underline($a){
        return '<span style="text-decoration: underline;">'.$a.'</span>';
    }
    public function capitalize($a){
        return strtoupper($a);
    }
    public function uglify($a){
        bold($a);
        italic($a);
        underline($a);
    }
}

?>