<?php
class DataBase
{
    private $host='localhost';
    private $user='root';
    private $password='1234';
    private $db_name='123Lookatme';
    private $table='users';
    private  $DB_connect;
    private static $instance;

    private function __construct()
    {
    $this->DB_connect= mysql_connect($this->host,$this->user,$this->password);
    mysql_select_db($this->db_name, $this->DB_connect);
    }

    private function __clone(){}
    //Singleton
    public static function get_instance()
    {
    self::$instance?:self::$instance=new self;
    return self::$instance;
    }

    public function check_login($login)
    {
        $login=mysql_real_escape_string($login);
        $query="SELECT * from ".$this->table." where login = '$login' ";
        $result=mysql_query($query);
        $num=mysql_num_rows($result);
        if($num==0)
            return true;
        else
            return false;
    }
    public function login($login,$pass)
    {
        $login=mysql_real_escape_string($login);
        $pass=mysql_real_escape_string(sha1(sha1($pass)));
        $query="SELECT idusers FROM ".$this->table." WHERE login = '$login' AND password= '$pass' ";
        $result=mysql_query($query);
        $num=mysql_num_rows($result);
        if($num>0)
        {
            $res=mysql_fetch_row($result);
            return $res[0];
        }else return false;
    }

    public function get_user($id)
    {
        $id=mysql_real_escape_string($id);
        $query="SELECT * FROM ".$this->table." WHERE idusers = '$id' ";
        $result=mysql_query($query);
        $data=mysql_fetch_assoc($result);
        return $data;
    }

    public function delete_user($id)
    {
        $id=mysql_real_escape_string($id);
        $query="DELETE FROM ".$this->table." WHERE idusers= '$id' ";
        mysql_query($query);
    }

    public function add_user($obj)
    {
        $fname=mysql_real_escape_string($obj->FirstName);
        $lname=mysql_real_escape_string($obj->LastName);
        $login=mysql_real_escape_string($obj->Login);
        $mail=mysql_real_escape_string($obj->email);
        $pass=mysql_real_escape_string(sha1(sha1($obj->pass)));
        $bdate=mysql_real_escape_string($obj->date);
        $phone=mysql_real_escape_string($obj->phone);

        $query="INSERT INTO ".$this->table." (fname,lname,login,mail,password,birthdate,phone)
                                            VALUES ('$fname','$lname','$login','$mail','$pass','$bdate','$phone')";
        mysql_query($query) or die(mysql_error());

    }
}
?>