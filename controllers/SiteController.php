<?php

class SiteController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProduct = array();
        $latestProduct = Product::getLatestProducts(6);

        require_once(ROOT . '/views/site/index.php');

        return true;
    }

}
