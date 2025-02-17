<?php
class Blogitem
{
    public static $blogitcount = 1;
    public $blogitid;
    public $blogitdate  = '0';
    public $blogH2 = '';
    public $blogP = '';

    public function __construct(String $blogH2 = 'Neues Item', String $blogP = 'Text', $count = 0)
    {
        
        if ($count > 0) {
            $this->blogitid = $count;
        } 
        
        var_dump($count);
        var_dump($this->blogitid);
        var_dump(Blogitem::$blogitcount);

        $this->blogitdate = (new DateTime('now'))->format("d.M.Y H:i:s");
        $this->blogH2 = $blogH2;
        $this->blogP = $blogP;
       
    }

    public function getBlogitid()
    {
        return $this->blogitid;
    }
}
