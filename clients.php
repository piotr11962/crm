<?php

class clients{
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function addClient($firstname, $lastname, $email, $phone, $company){
        $stmt = $this->pdo->prepare("insert into clients(first_name, last_name, email , phone, company) values(?, ?, ?, ?, ?)");
        return $stmt->execute([$firstname, $lastname, $email, $phone, $company]);
    }
    public function getClient($id){
        $stmt = $this->pdo->prepare("select * from clients where id=?");
        return $stmt->execute([$id]);
    }
    public function deleteClient($id){
        $stmt = $this->pdo->prepare("delete from clients where id = ?");
        return $stmt->execute([$id]);
    }
    public function updateClient($id, $firstname, $lastname, $email, $phone, $company){
        $stmt = $this->pdo->prepare("update clients set first_name = ?, last_name = ?, email = ?, phone = ?, company = ? where id = ?");
        return $stmt->execute([$firstname, $lastname, $email, $phone, $company, $id]);
    }
    public function ($id){}
}