<?php
class Controller {
    const PAGE_VIEW = 'view/page/page.phtml';
    
    public function __construct() {
        $this->path = $_GET['p'];
        if (empty($this->path)) {
            $this->path = 'index';
        }
        $this->load();
    }

    protected function load() {
        include self::PAGE_VIEW;
    }

    protected $path;
}
?>