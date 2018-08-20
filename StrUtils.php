<?php
echo 'ok';
class StrUtils{
    private $str = "rrr";

    public function __construct($newstr){
        $this->str = $newstr;
    }

    public function bold(){
        return '<b>'.$str.'</b>';
    }
    public function italic(){
        return '<i>'.$str.'</i>';
    }
    public function underline(){
        return '<span style="text-decoration: underline;">'.$str.'</span>';
    }
    public function capitalize(){
        return strtoupper($str);
    }
    public function uglify(){
        $this->bold();
        $this->italic();
        $this->underline();
    }
    public function getst(){
        return $this->str;
    }


}

?>