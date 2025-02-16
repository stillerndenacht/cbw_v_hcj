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

    public function __construct(String $blogH1 = 'new Blog')
    {

        $this->blogH1 = $blogH1;
        $this->loadBlogseri();
        var_dump($this);
        $this->setBlogdate(false);

        $this->saveBlogseri();
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
    # #### hier muss die der blogitcount mit übergeben werden, damit er im Fall von load weiter gezählt wird in Blogitem
    public function setBlogitem(String $blogH2 = 'Neues Item', String $blogP = 'Text')
    {
        if (!empty($this->blogitcount)) {
            $count = $this->blogitcount;
        } else {
            $count = false;
        }
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
        echo "<br>dump blogitem<br>";
        var_dump($blogitem->getBlogitid());
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
            #echo 'file exists';
            $loadseri = unserialize(file_get_contents($this->blogH1 . 'seri.txt'));
            var_dump($loadseri);
            $this->blogitems = $loadseri->blogitems ?? [];
            $this->blogdate = $loadseri->blogdate;
            $this->blogitcount = $loadseri->blogitcount;
        }
    }
}
# --------------------------
# muss noch ausgelagert werden
$blog1 = new Blog('blog1');
#var_dump($blog1);
# $blog1->setBlogdate();
// var_dump($blog1);
// $blog1->setBlogitem('Blogitem1', 'New Set Blogitem 1');
// $blog1->setBlogitem('Blogitem2', 'New Set Blogitem 2');
$blog1->setBlogitem('Blogitem3', 'New Set Blogitem 3');
$blog1->setBlogitem('Blogitem4', 'New Set Blogitem 4');
// $blogitem1 = new Blogitem('BlogItem1', 'Text 1');
// $blog1->setBlogitems($blogitem1);

// $blogitem2 = new Blogitem('BlogItem2', 'Text 2');
// $blog1->setBlogitems($blogitem2);
var_dump($blog1);
