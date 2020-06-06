<?php
class User
{
    private $_id,
            $_role,
            $_password,
            $_email,
            $_pseudo;

    public function __construct( $donnees = null)
    {
        if ($donnees)
        {
            $this->hydrate($donnees);
        }
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
      
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }


    public function id()
    {
        return $this->_id;
    }

    public function role() 
    {
        return $this->_role;
    }

    public function password()
    {
        return $this->_password;
    }

    public function email()
    {
        return $this->_email;
    }

    public function pseudo()
    {
        return $this->_pseudo;
    }

    public function setId($id)
    {
        $id = (int) $id;
    
        if ($id > 0)
        {
            $this->_id = $id;
        }
    }

    public function setPseudo($pseudo)
    {
        if (is_string($pseudo))
        {
            $this->_pseudo = $pseudo;
        }
    }

    public function setRole($role)
    {
        if (is_string($role))
        {
            $this->_role = $role;
        }
    }
 
    public function setEmail($email)
    {
        if (is_string($email))
        {
            $this->_email = $email;
        }
    }

    public function setPassword($password)
    {
        if (is_string($password))
        {
            $this->_password = $password;
        }
    }
}