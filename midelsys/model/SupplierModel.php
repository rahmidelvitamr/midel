<?php
class SupplierModel extends DbConnection{
    
    private $sql;
    
    public function getAllSupplier(){
        $this->sql = "SELECT * FROM SUPPLIER";
        
        return $this->executeQuery($sql);        
    }
    
    public function getSupplierBySupplierCode($supllierCode){
        $this->sql = "SELECT * FROM SUPPLIER WHERE SUPPLIER_CODE = '"+$supllierCode+"'";
        
        return $this->executeQuery($sql);      
    }
}