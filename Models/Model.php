<?php

abstract class Model
{
    private $table = null;
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

    protected function setTable(string $table)
    {
        $this->table = $table;
    }

    public function all()
    {
        $this->connect();

        $result = pg_query($this->connection, "select * from $this->table");
        return json_encode(pg_fetch_all($result));
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

    public function oneToOne(string $table, string $foreignKey, string $key)
    {
        $this->connect();
        $query = pg_query(
            $this->connection,
            "select $table.* from $table inner join $this->table on $this->table.$key = $table.$foreignKey" 
        );
        return json_encode(pg_fetch_all($query));
    }

    public function oneToMany(string $table, string $foreignKey, string $key)
    {
        $this->connect();
        $query = pg_query(
            $this->connection,
            "select $table.* from $table inner join $this->table on $this->table.$key = $table.$foreignKey"
        );
        return json_encode(pg_fetch_all($query));
    }
}
