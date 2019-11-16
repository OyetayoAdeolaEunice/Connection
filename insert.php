<?php
class user extends dbh {
    
    protected function getallusers(){
        $sql = "INSERT INTO student(admission_no,assignment,test,exam,total,grade) values('1610720045','20','30', '40', '90', 'A')";
        $result = $this->connect()->query($sql);
            if ($result) {
                echo 'the query was succesfully executed';
            }else{
                echo $connect->error;
            }
    }
}
?>