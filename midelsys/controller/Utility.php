<?php
namespace controller;

class Utility {
    
    public static function jsLog($value){
        echo '<script>';
        echo 'console.log('.$value.')';
        echo '</script>';
    }
    
    public static function log($arr){
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }
}