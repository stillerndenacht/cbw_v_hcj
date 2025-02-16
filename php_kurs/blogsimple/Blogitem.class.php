<?php
class Blogitem
{
    public static $blogitcount = 1;
    private $blogitid;
    public $blogitdate  = '0';
    public $blogH2 = '';
    public $blogP = '';

    public function __construct(String $blogH2 = 'Neues Item', String $blogP = 'Text', $count = false)
    {  echo "<br>count wie es im constructor ankommt" . $count . "<br>";
        echo "<br>itcount vor itemset" . Blogitem::$blogitcount . "<br>";
        if ($count) {
            Blogitem::$blogitcount = $count;
        }#### das hochzählen funktioniert noch nicht so richtig...
        $this->blogitid = Blogitem::$blogitcount;
        $this->blogitdate = (new DateTime('now'))->format("d.M.Y H:i:s");
        $this->blogH2 = $blogH2;
        $this->blogP = $blogP;
        Blogitem::$blogitcount = ++Blogitem::$blogitcount;
        echo "<br>itcount nach itemset" . Blogitem::$blogitcount . "<br>";
    }

    public function getBlogitid()
    {
        return $this->blogitid;
    }
}
