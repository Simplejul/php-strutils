<?php

class StrUtils{

    private $str;

    public function __construct($newstr){
        $this->str = $newstr;
    }

    public function bold(){
        $this->str = '<b>'.$this->str.'</b>';
    }
    public function italic(){
        $this->str = '<i>'.$this->str.'</i>';
    }
    public function underline(){
        $this->str = '<span style="text-decoration: underline;">'.$this->str.'</span>';
    }
    public function capitalize(){
        $this->str = strtoupper($this->str);
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