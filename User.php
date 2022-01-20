<?php
require_once 'Database.php';

class User extends Database{
    protected $tableName = 'usertable';

    //function to add users
    public function add($data){
        if(!empty($data)){
            $fields = $placeholder =[];
            foreach($data as $field =>$value){
                $fields[] = $field;
            }
        }
        $sql = "INSERT INTO {$this->tableName} (".implode(',',$fields).") values(".implode(',',$placeholder).")";

        $stmt = $this->conn->prepare($sql);

        try{
            $this->conn->beginTransaction();
            $stmt->execute($data);
            $lastInsertedId=$this->conn->lastInsertedId();
            $this->conn->commit();
            return $lastInsertedId;
        }
        catch(PDOException $e){
            echo "Error:".$e->getMessage();
            $this->conn->rollBack();
        }
    }
}

?>