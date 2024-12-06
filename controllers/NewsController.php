<?php

require_once APP_ROOT . '/models/News.php'; 
require_once APP_ROOT . '/models/Categories.php'; 

class NewsController {
    public function index() {
        include APP_ROOT . '/config/Auth.php';
        $newsModel = new News();
        $news = $newsModel->getAllNews();
        include APP_ROOT . '/views/admin/news/index.php'; 
    }

    public function show() {
        include APP_ROOT . '/config/Auth.php';
        $newsModel = new News();
        $new = $newsModel->getOneNew($_GET['id']);
        $categoriesModel = new Categories();
        $categories = $categoriesModel->getAllCategories();
        include APP_ROOT . '/views/news/detail.php'; 
    }

    public function create() {
        include APP_ROOT . '/config/Auth.php';
        $categoriesModel = new Categories();
        $categories = $categoriesModel->getAllCategories();
        include APP_ROOT . '/views/admin/news/add.php'; 
    }
    public function update() {
        include APP_ROOT . '/config/Auth.php';
        $newsModel = new News();
        $new = $newsModel->getOneNew($_GET['id']);
        include APP_ROOT . '/views/admin/news/edit.php'; 
    }
    public function delete() {
        include APP_ROOT . '/config/Auth.php';
        $newsModel = new News();
        $new = $newsModel->getOneNew($_GET['id']);
        include APP_ROOT . '/views/admin/news/delete.php';
    }
    public function search() {
        include APP_ROOT . '/config/Auth.php';
        $newsModel = new News();
        $new = [];
        if(isset($_POST['search'])){
            $news = $newsModel->search($_POST['search']);
        }
        $categoriesModel = new Categories();
        $categories = $categoriesModel->getAllCategories();
        include APP_ROOT . '/views/news/search.php'; 
    }
}