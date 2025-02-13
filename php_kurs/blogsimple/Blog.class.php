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

    public function __construct( String $blogH1 = 'new Blog',String $blogdate = '0')
    {
        $this->blogdate = $blogdate;
        $this->blogH1 = $blogH1;
        $this->loadBlogseri();
        #### funktioniert nicht .. vielleicht hier setBlogdate aufrufen?
        if ($this->blogdate = '0'){
            $this->blogdate = (new DateTime('now'))->format("d.M.Y H:i:s");
        }
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

    public function setBlogdate($blogdate = '')
    {
        if (!empty($blogdate)) {
        } else {
            $this->blogdate = (new DateTime('now'))->format("d.M.Y H:i:s");
        }
        $this->saveBlogseri();
    }
# ---------- Items -----------------
    public function getBlogitems()
    {
        return $this->blogitems;
    }

    public function setBlogitems(Blogitem $blogitem)
    {
        $this->blogitems[] = $blogitem;
    }
    # -------- save ------------
    private function saveBlogseri(){
        $saveseri = serialize($this);
        file_put_contents($this->blogH1.'seri.txt', $saveseri);
    }
    # -------- load ------------
    private function loadBlogseri()
    {
        if (file_exists('files/' . $this->blogH1 . 'seri.txt')) {
            $loadseri = unserialize(file_get_contents('files/' . $this->blogH1 . 'seri.txt'));
            $this->blogitems = $loadseri->blogitems ?? [];
            #return $loadseri;
        }
    }
}
# --------------------------
# muss noch ausgelagert werden
$blog1 = new Blog('blog1');
var_dump($blog1);