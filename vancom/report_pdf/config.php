<?php

	  

        





            
	  $host="127.0.0.1";
	  $us="root";
	  $ps="1234";
	  $DB="drugstore2";
         

               //$DB="kkhp";
	  //$objDB = mysql_select_db("kkhp");

	  $connect=mysql_connect($host,$us,$ps) or die("Can't conect MYSQL server!!!");
	  if( !$connect )
	  {
	      echo "Can't conect MYSQL server!!!";  
	  }
	  mysql_select_db($DB);
	  mysql_query("SET NAMES UTF8");
          



/*
 define("host","localhost");	 
 define("us","root");
 define("ps","1234");
 define("db","kkhp");
 
 class mysqlconnect
 {
    protected $_mysql;
    public function __construct()
    {
       $this->_mysql = new mysql(host,us,ps) or die("Can't conect mysqlserver!!!");
       mysql_select_db(db);
    }
    
 }
  
   $connect = new mysqlconnect();
  */
  
     

?>
