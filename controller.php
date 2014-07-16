<?php
session_start();

class Controller{
    private $get;
    private $post;
    private $db;


    public function __construct()
    {
        $this->get=$_GET;
        $this->post=$_POST;
        $this->db=DataBase::get_instance();
    }
    public function loadView($page)
    {
        include('pages'.'/'.$page);
    }
    public function get_profile($id)
    {
        $data=$this->db->get_user($id);
        return $data;
    }
    public function is_logined()
    {
        if(isset($_SESSION['id']))
            return true;
        return false;
    }

    public function route()
    {
        $this->loadView('header.tpl');
        if($this->get)
        {
            foreach($this->get as $k=>$v)
            {
                switch($k)
                {
                    case 'nav':switch($v)
                            {
                                case 'contact':$this->loadView('contacts.tpl');break;
                                case 'login':$this->loadView('login.tpl');break;
                                case 'register':$this->loadView('register.tpl');break;
                                case 'profile': if($this->is_logined())
                                                {
                                                    $this->loadView("profile.tpl");
                                                }break;

                                case 'exit': session_unset();
                                             header("Location:index.php");break;
                            }break;


                    case 'json':
                            $data = json_decode($this->get['json']);
                            $error = '';
                            if(!isset($data->FirstName) || strlen($data->FirstName) == 0)
                                $error .= 'Введите Имя<br />';
                            if(!isset($data->LastName) || strlen($data->LastName) == 0)
                                $error .= 'Введите пароль<br />';
                            if(!isset($data->email) || (preg_match('/\S+@\S+\.\S+/', $data->email) == 0))
                                $error .= 'Не корректный емэйл<br />';
                            if(!isset($data->Login) || strlen($data->Login) == 0)
                                $error .= 'Введите логин<br />';
                            else if($this->db->check_login($data->Login) == false)
                                $error .= 'Этот логин уже занят<br />';
                            if(!isset($data->pass) || strlen($data->pass) < 6 || strlen($data->pass) > 16)
                                $error .= 'Пароль не меньше 6 и не больше 16 символов<br />';
                            if(!isset($data->repass) || $data->repass !== $data->pass)
                                $error .= 'Пароли не совпадают<br />';
                            if(!isset($data->date) || (preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/',$data->date) == 0))
                                $error .= 'Введите дату в формате "гггг-мм-дд"<br />';
                            if(!isset($data->phone) || (preg_match('/^\+?[0-9]{3}-?[0-9]{7}$/', $data->phone) == 0))
                                $error .= 'Введите корректный номер телефона "xxx-xxxxxxx"<br/>';
                            if(strlen($error) == 0)
                            {
                                $this->db->add_user($data);
                                echo('Вы успешно зарегистрировались!');break;
                            }
                            else
                                echo($error);break;

                }
            }

        }else $this->loadView('main.tpl');

        $this->loadView('footer.tpl');

        if(isset($this->post['login']))
        {
           $login=$this->post['user'];
           $pass=$this->post['pass'];
           $userid=$this->db->login($login,$pass);
           if($userid)
           {
               $_SESSION['id']=$userid;
               header("Location:index.php?nav=profile");
           }else header("location:index.php?nav=login");
        }
        if(isset($this->post['delete']))
        {
            $id=$_SESSION['id'];
            $this->db->delete_user($id);
            session_unset();
            header("Location:index.php");
        }

    }

}

?>
