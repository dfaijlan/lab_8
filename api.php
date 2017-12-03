<?php
    function getDatabaseConnection()
    {
        // $host = 'localhost';
        // $username = 'dfajilan';
        // $password = 'E11ipsis';
        // $dbname = 'tech_devices_app';
        
        $host = 'us-cdbr-iron-east-05.cleardb.net';
        $username = 'bea62a3a2d58d2';
        $password = 'c1130949';
        $dbname = 'heroku_cb6e4441523d78c';
        
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $dbConn;
    }
    
    function getUsersThatMatchUserName() {
        $username = $_GET['username'];
        $dbConn = getDatabaseConnection(); 
    
        $sql = "SELECT * from User WHERE username='$username'"; 
        $statement = $dbConn->prepare($sql); 
        
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        echo json_encode($records);
    }

if ($_GET['action'] == 'validate-username') {
    getUsersThatMatchUserName();
}
?>