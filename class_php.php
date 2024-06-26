<?php
class User
{
    public $name;
    public $email;
    public $pass;
    /*private $name;
    private $email;
    private $pass;*/
    /*protected $name;
    protected $email;
    protected $pass;*/
    public function __construct($name, $email, $pass)
    {
        echo 'construct ran';
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
    }
    public function setname($name)
    {
        $this->name = $name;
    }
    public function getname()
    {
        return $this->name;
    }
}
$user1 = new User('Srija', 'srija@gmail.com', '12345');
$user2 = new User('Soma', 'soma@gmail.com', '54321');
$user3 = new User('Shree', 'sree@gmail.com', '246810');
echo $user1->name;
echo $user1->email;
echo $user1->pass;
/*$user1 = new User();
$user2 = new User();
$user3 = new User();*/
/*$user1->set_name("Srija");
$user2->set_name("Susmita");
echo $user1->get_name();
echo $user2->get_name();
//$user1->name = 'Srija';
var_dump($user1);
var_dump($user2);
//echo $user1->name;*/
class Emp extends User
{
    public $title;
    public function __construct($name, $email, $pass, $title)
    {
        parent::__construct($name, $email, $pass);
        $this->title = $title;
    }
    public function gettitle()
    {
        return $this->title;
    }
}
$emp1 = new Emp('Dija', 'dija@gmail.com', '12345', 'Manager');
echo $emp1->gettitle();
