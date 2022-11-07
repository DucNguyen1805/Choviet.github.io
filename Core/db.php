<?php
class database
{
    // tao bien ket noi
    public $connect;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password= "";
    protected $dbname = "dbchotot";
    // tao bien ket qua tra ve khi truy van
    public function __construct()
    {
        $this->connect = mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
        mysqli_set_charset($this->connect, 'utf8');
        if (!$this->connect) {
            echo "<script>alert('Kết Nối thất bại')</script>";
        }
        return $this->connect;
    }
    // dong database
    public function closeDatabase()
    {
        mysqli_close($this->connect);
    }
}
