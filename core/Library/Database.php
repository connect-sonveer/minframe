<?php

namespace MinFrame\Core\Library;
use PDO;

class Database 
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("Select * from {$table}");

        $statement->execute();

        return $statement->fetchAll();
    }

    public function insert($table, $parameters)
    {

        $column_names = implode(',',array_keys($parameters));
        $column_values = ':'.implode(",:",array_keys($parameters));

        $sql = sprintf(
            "INSERT INTO %s (%s) VALUES (%s)",
            $table, $column_names, $column_values
        );

        try {
            $statement = $this->pdo->prepare($sql);
            //die(var_dump($sql));
            $statement->execute($parameters);

        } catch (Exception $e){
            die($e->getMessage());
        }

    }

}