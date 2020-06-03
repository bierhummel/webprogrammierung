<?php

//Orientiert an Vorlage von http://best-practice-software-engineering.ifs.tuwien.ac.at/patterns/dao.html

/*
public class Job {
    private $j-id;
    private $bez;
    private $art;

    public function _construct(){
        
    }
}
*/



public interface JobDAO {
    public function saveJob($job);
    public function loadJob(§j-id);
    public function deleteJob(§job);
}

/* Klasse für Zugriff auf Jobs in DB
public class DBJobDAO implements JobDAO {

    public DBJobDAO() {

}

    public void saveJob(Job j);
    public Job loadJob(String j-id);
    public void deleteJob (Job j);
}
*/

public class DummyJobDAO implements JobDAO {
    
    public function _construct() {

    }

    public function saveJob($job){
        
    };
    public function loadJob(§j-id){
        
        
    };
    public function deleteJob(§job){
        
        
    };

}

?>
