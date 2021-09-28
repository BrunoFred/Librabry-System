<?php
session_start();
abstract class Model
{
    private $table = null;
    private $tableId = null;
    private $connection = null;
    
    private $host = 'localhost';
    private $port = '5432';
    private $dbName = 'library';
    private $dbUser = 'postgres';
    private $dbPassword = 'lets';

    private function connect()
    {
        $this->connection = pg_connect(
            "host=$this->host " .
            "port=$this->port " .
            "dbname=$this->dbName " . 
            "user=$this->dbUser " . 
            "password=$this->dbPassword"
        );
    }

    private function desconnect()
    {
        pg_close($this->connection);
    }

    protected function setTable(string $table)
    {
        $this->table = $table;
    }

    public function all()
    {
        $this->connect();
        $result = pg_query($this->connection, "SELECT * FROM $this->table");
        $this->desconnect();
        return (pg_fetch_all($result));
    }

    public function authentication(string $email, string $password)
    {
        $this->connect();
        $result = pg_query($this->connection, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        $login_check = pg_num_rows($result);
        if ($login_check > 0){
            $data = pg_fetch_all($result);
            $_SESSION['name'] = $data[0]["name"];
            $_SESSION['email'] = $data[0]["email"];
            $_SESSION['phone'] = $data[0]["phone"];
            $_SESSION['email'] = $data[0]["email"];
            return $data[0]["is_admin"];
        }
        $this->desconnect();
    }

    public function find(int $id)
    {
        $this->connect();
        $this->tableId = $id;
        $result = pg_query($this->connection, "select * from $this->table where id = $id");
        $this->desconnect();

        return (pg_fetch_all($result)[0]);
    }

    public function create(array $data)
    {
        $this->connect();
        return pg_insert($this->connection, $this->table, $data);
    }

    public function update(int $id, array $data)
    {
        $this->connect();
        return pg_update($this->connection, $this->table, $data, ['id' => $id]);
    }

    public function delete(int $id)
    {
        $this->connect();
        return pg_delete($this->connection, $this->table, ['id' => $id]);
    }

    public function oneToOne(string $table, string $foreignKey, string $key = 'id')
    {
        $this->connect();
        $query = pg_query(
            $this->connection,
            "select $table.* from $table inner join $this->table on $this->table.$key = $table.$foreignKey order by id" 
        );
        return (pg_fetch_all($query)[0]);
    }

    public function oneToMany(string $table, string $foreignKey, string $key = 'id')
    {
        $this->connect();
        $result = pg_query(
            $this->connection,
            "select $table.* from $table inner join $this->table on $this->table.$key = $table.$foreignKey ORDER BY id");
        return (pg_fetch_all($result));
    }
}
