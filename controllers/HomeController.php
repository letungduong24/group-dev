<?php

require_once APP_ROOT . '/models/News.php'; 

class HomeController {
    public function index() {
        $newsModel = new News();
        $news = $newsModel->getAllNews();
        include APP_ROOT . '/views/home/index.php'; 
    }
}
