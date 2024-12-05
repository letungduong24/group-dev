<?php

require_once APP_ROOT . '/models/News.php'; 
class NewsController {
    public function index() {
        include APP_ROOT . '/config/Auth.php';
        $newsModel = new News();
        $news = $newsModel->getAllNews();
        include APP_ROOT . '/views/admin/news/index.php'; 
    }
    public function create() {
        include APP_ROOT . '/config/Auth.php';
        $newsModel = new News();
        // viết logic
    }
    public function update() {
        include APP_ROOT . '/config/Auth.php';
        $newsModel = new News();
         // viết logic
    }
    public function delete() {
        include APP_ROOT . '/config/Auth.php';
        $newsModel = new News();
         // viết logic
    }
}
