<?php class ConexioDB{
    private $pdo;

    public function __construct($host, $dbname, $username, $password)
    {
        try{
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            die("Error al conectar: " . $e->GetMessage());
        }
    }
    public function getPdo():PDO
    {
        return $this->pdo;
    }
}
