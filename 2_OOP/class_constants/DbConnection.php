
<?php
    class DbConnection{
        const DB_URL="localhost://";
        private const USERNAME="root";
        private const PASSWORD="password";

        // in order to access the constant from inside the class by using the self keyword.

        private function __construct(){}
        static function getDbConnection(){
            $con=new DbConnection();
            echo (self::DB_URL ." ".self::USERNAME);
            return $con;
        }

    }

    // we can access a constant from outside the class,
    // by using the class name followed by the scope resolution operator(::) 
    // followed by the constant name.
   
    echo(DbConnection::class);
    echo("<br/>");
    echo(DbConnection::DB_URL);
    echo("<br/>");

   // echo new DbConnection();

    DbConnection::getDbConnection();

?>