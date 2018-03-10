<?php

class DbConnection
{

    protected $con;

    public function DbConnection($host, $port, $user, $password, $schema, $provider)
    {
        switch (strtolower($provider)) {
            case 'mysql':
                $this->con = mysqli_connect($host, $user, $password, $schema, $port);
                break;
            default:
                $this->con = null;
                break;
        }
    }
    
    protected function executeQuery($sql){
        return mysqli_query($this->con, $sql);
    }
}