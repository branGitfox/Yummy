<?php 


class ProductController extends ProductModel {
    public function GetAll() {
        return parent::getProduct();
    }
}