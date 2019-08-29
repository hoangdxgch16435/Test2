<?php
include 'ketnoi.php';

//this is used to execute all SQL queries
function pg_query($query) {
    global $connection;
    $result = $connection->query($query);
    if (!$result) {
        die ($connection->error);
    }
    return $result;
}

//this is used to create table
function createTable($name, $body){
    $str = "CREATE TABLE IF NOT EXISTS $name($body)";
    pg_query($str);
    echo "Table $name is created or already exists";
}

//this is for security purpose
function sanitizeString($str) {
    global $connection;
    $str = strip_tags($str); //remove html tags
    $str = htmlentities($str); //encode html (for special characters)
    if (get_magic_quotes_gpc()){
        $str = stripslashes($str); //Don't use the magic quotes
    }
    //Avoid MYSQL Injection
    $str = $connection->real_escape_string($str);
    return $str;
}

//Convert password into encrypted form
function passwordToToken($password){
    global $salt1;
    global $salt2;
    $token = hash ("ripemd128", "$salt1$password$salt2");
    return $token;
}

//Add user to the database
function addUser($username, $password, $status){
    //Setup one default user
    $result = pg_query("SELECT * FROM User where username='$username'");
    $row = pg_fetch_assoc($result);
    if (!$row) { //user doesn't exist
        //Add a default user
        $token = passwordToToken($password);
        $query = "INSERT INTO User(username, password, status) VALUES('$username', '$token', '$status')";
        pg_query($query);
        return 1; //added
    }else {
        return 0; //not added
    }
}
function runQuery($sql){
		$conn = pg_connect($this->dbhost, $this->dbuser, $this->dbpassword, $this->dbname);
		//chay cau truy van
		$result = $conn->query($sql);
		//doc ket qua chay cau truy van, tra ve mot mang
		$rows = pg_fetch_all($result, pg_ASSOC);
		//dong ket noi
		$conn->close();
		return $rows;
	}

