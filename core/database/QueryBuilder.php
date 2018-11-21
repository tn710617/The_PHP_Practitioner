<?php


class QueryBuilder {

    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $value)
    {
        $statement = $this->pdo->prepare("INSERT INTO $table (description) VALUE (?)");
        $statement -> execute([$value]);
    }
}