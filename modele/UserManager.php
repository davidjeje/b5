<?php
include(dirname(__FILE__).'/../modele/User.php');

class UserManager
{
    private $_SqlRequest;
    private $_Objects;
    private $_bdd;
  
    public function __construct($bdd)
    {
        $this->setDb($bdd);
    }
  
    public function readAll()
    {

        $this->_Objects = [];
        $users = [];

        $this->_SqlRequest = $this->_bdd->query('SELECT * FROM user');
      
        while ($users = $this->_SqlRequest->fetch(PDO::FETCH_ASSOC)) 
        {
            $this->_Objects[] = new User($users);
        }
        return $this->_Objects;         
    } 

  
  
    public function read($pseudo)
    {
        $this->_SqlRequest = $this->_bdd->prepare('SELECT * FROM user WHERE pseudo = :pseudo');
      
        $this->_SqlRequest->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $executeIsOk = $this->_SqlRequest->execute();

        if($executeIsOk)
        { 
            return new user($this->_SqlRequest->fetch());
        }
        else
        {
            return false;
        }       
    } 


    public function create(User $user)
    {

        $this->_SqlRequest = $this->_bdd->prepare('INSERT INTO user (id, password, pseudo, email) VALUES (NULL, :password, :pseudo, :email)');

        $this->_SqlRequest->bindValue(':password', $user->password(), PDO::PARAM_STR);
        $this->_SqlRequest->bindValue(':pseudo', $user->pseudo(), PDO::PARAM_STR);
        $this->_SqlRequest->bindValue(':email', $user->email(), PDO::PARAM_STR);
    
        $executeIsOk = $this->_SqlRequest->execute();  
    } 

    public function setDb(PDO $bdd)
    {
        $this->_bdd = $bdd;
    }
}