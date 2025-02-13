<?php
class Blogitem {
    public $blogitdate  = '0';
    public $blogH2 = '';
    public $blogP = '';

    public function __construct(String $blogH2='Neues Item' , String $blogP='Text',String $blogitdate='0')
    {
        $this->blogitdate = (new DateTime('now'))->format("d.M.Y H:i:s");
        $this->blogH2 = $blogH2;
        $this->blogP = $blogP;
    }

}