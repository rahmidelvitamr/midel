<?php
namespace controller;

class DbConnection
{

    private $host, $port, $user, $password, $schema, $provider;

    protected $con;

    public function __construct($provider)
    {
        $this->provider = strtolower($provider);
        switch ($this->provider) {
            case 'mysql':
                $this->host = 'localhost';
                $this->port = '3306';
                $this->user = 'mysql';
                $this->password = 'mysql';
                $this->schema = 'midelsys';
                $this->con = mysqli_connect( $this->host, $this->user, $this->password, $this->schema, $this->port);
                break;
            default:
                $this->con = null;
                break;
        }
    }

    protected function executeQuery($sql)
    {
        switch ($this->provider) {
            case 'mysql':
                $result = mysqli_query($this->con, $sql);
                mysqli_close($this->con);
                return $result;
                break;
        }
    }
}