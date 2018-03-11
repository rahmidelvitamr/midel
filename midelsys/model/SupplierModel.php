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
        $this->sql = "SELECT * FROM M_SUPPLIER WHERE SUPPLIER_CODE = '"+$supllierCode+"'";
        
        return $this->executeQuery($this->sql);      
    }
}