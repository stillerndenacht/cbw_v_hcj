<?php
# --------------------------
# muss noch ausgelagert werden
include_once 'Blogitem.class.php';
#------------------

class Blog
{
    public $blogH1 = '';
    public $blogdate = '';
    public $blogitems = [];
    private $blogitcount;
    public static $blognames = [];

    public function __construct(String $blogH1 = 'new Blog')
    {

        $this->blogH1 = $blogH1;
        $this->loadBlogseri();
        
        $this->setBlogdate(false);

        $this->saveBlogseri();
self::loadBlognames();
        self::saveBlognames($this->blogH1);
    }



    # ----------- H1 --------------
    public function setBlogH1($blogH1)
    {
        $this->blogH1 = $blogH1;
    }

    public function getBlogH1()
    {
        return $this->blogH1;
    }
    #------------- Date -------------
    public function getBlogdate()
    {
        return $this->blogdate;
    }

    public function setBlogdate(bool $newBlogdate = true)
    {
        if (!empty($this->blogdate) == $newBlogdate) {
            # false false - set # bei new Blog inital
            # true  false - no set # bei load aus txt
            # true  true  - set # bei setBlogdate via Aufruf
            # false true  - no set # leeres Datum aber Aufruf setBlogdate - das geht nicht!

            $this->blogdate = (new DateTime('now'))->format("d.M.Y H:i:s");
        }

        $this->saveBlogseri();
    }
    # ---------- single Item -----------
   
    public function setBlogitem(String $blogH2 = 'Neues Item', String $blogP = 'Text')
    {
        $this->loadBlogseri();
        
        $this->blogitcount = count($this->blogitems);
        echo "<br> blogitcount".$this->blogitcount;
        $count = ($this->blogitcount)+1;
        
        $blogitem = new Blogitem($blogH2, $blogP, $count);
        $this->setBlogitems($blogitem);
    }
    # ---------- all Items -----------------
    public function getBlogitems()
    {
        return $this->blogitems;
    }

    public function setBlogitems(Blogitem $blogitem)
    {
        $this->blogitems[] = $blogitem;
        $this->blogitcount = $blogitem->getBlogitid();        
        
        $this->saveBlogseri();
    }
    # -------- save ------------
    private function saveBlogseri()
    {
        $saveseri = serialize($this);
        file_put_contents($this->blogH1 . 'seri.txt', $saveseri);
    }
    # -------- load ------------
    private function loadBlogseri()
    {
        if (file_exists($this->blogH1 . 'seri.txt')) {
           
            $loadseri = unserialize(file_get_contents($this->blogH1 . 'seri.txt'));
           
            $this->blogitems = $loadseri->blogitems ?? [];
            $this->blogdate = $loadseri->blogdate;
            $this->blogitcount = $loadseri->blogitcount;
        }
    }
    # --------- save Blognames ---------
    public static function saveBlognames($blogname){
        self::$blognames[] = $blogname;
        $saveseriblognames = serialize(self::$blognames);
        file_put_contents('Blognamesseri.txt', $saveseriblognames);
    }
    # --------- load Blognames ----------
    public static function loadBlognames(){
        if (file_exists('Blognamesseri.txt')){
            $loadseriblognames = unserialize(file_get_contents('Blognamesseri.txt'));
            self::$blognames = $loadseriblognames;
        }
    }
}
# --------------------------
# muss noch ausgelagert werden
#$blog1 = new Blog('blog1');
#var_dump($blog1);
# $blog1->setBlogdate();
// var_dump($blog1);
#log1->setBlogitem('Blogitem2', 'New Set Blogitem 2');
// $blog1->setBlogitem('Blogitem3', 'New Set Blogitem 3');
// $blog1->setBlogitem('Blogitem4', 'New Set Blogitem 4');
// $blogitem1 = new Blogitem('BlogItem1', 'Text 1');
// $blog1->setBlogitems($blogitem1);

// $blogitem2 = new Blogitem('BlogItem2', 'Text 2');
// $blog1->setBlogitems($blogitem2);
#var_dump($blog1);
