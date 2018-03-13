<?php
namespace model;
require_once '../controller/DbConnection.php';
use controller\DbConnection;

class SupplierModel extends DbConnection{
    
    private $sql;
    
    public function getAllSupplier(){
        $this->sql = "SELECT * FROM M_SUPPLIER";
        
        return $this->executeQuery($this->sql);        
    }
    
    public function getSupplierBySupplierCode($supllierCode){
        $this->sql = "SELECT * FROM midelsys.M_SUPPLIER WHERE SUPPLIER_CODE = '"+$supllierCode+"'";
        
        return $this->executeQuery($this->sql);      
    }
    
    public function insertDataSupplier(){
        $this->sql= "INSERT INTO M_SUPPLIER (SUPPLIER_CODE, SUPPLIER_NAME, ADDRESS, PHONE, WHATSAPP_ACCOUNT, FACEBOOK_ACCOUNT, INSTAGRAM_ACCOUNT) values ('$_POST[supplier_code]', '$_POST[supplier_name]', '$_POST[supplier_address]', '$_POST[supplier_phone]', '$_POST[supplier_whatsapp]', '$_POST[supplier_facebook]', '$_POST[supplier_instagram]')";
        
        return $this->executeQuery($this->sql);

    }
}