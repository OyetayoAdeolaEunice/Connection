<?php
class viewuser extends user {
    
    public function showallusers(){
        $datas = $this->getallusers();
        foreach($datas as $data) {
             echo $data['id']."<br>";
             echo $data['admission_no']."<br>";
             echo $data['assignment']."<br>";
             echo $data['test']."<br>";
             echo $data['exam']."<br>";
             echo $data['total']."<br>";
             echo $data['grade']."<br>";
            
        }
    }
}        
        


?>