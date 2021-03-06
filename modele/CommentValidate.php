<?php
class CommentValidate
{         
    private $_id,
            $_userId,
            $_blog_post_id,
            $_auteur,
            $_message,          
            $_dateDisplay;

    public function __construct(array $donnees = null)
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

    public function userId()
    {
        return $this->_userId;
    }

    public function blog_post_id()
    {
        return $this->_blog_post_id;
    }

    public function auteur()
    {
        return $this->_auteur;
    }

    public function message()
    {
        return $this->_message;
    }

    public function dateDisplay()
    {
        return $this->_dateDisplay;
    }

    public function setId($id)
    {
        $id = (int) $id;
    
        if ($id > 0)
        {
            $this->_id = $id;
        }
    }

    public function setUserId($userId)
    {
        $userId = (int) $userId;
    
        if ($userId > 0)
        {
            $this->_userId = $userId;
        }
    }

    public function setBlog_post_id($blogPostId)
    {
        $blogPostId = (int) $blogPostId;
    
        if ($blogPostId > 0)
        {
            $this->_blog_post_id = $blogPostId;
        }
    }

    public function setAuteur($auteur)
    {
        if (is_string($auteur)) 
        {
            $this->_auteur = $auteur;
        }
    }

    public function setMessage($message)
    {
        if (is_string($message))
        {
            $this->_message = $message;
        }
    }

    public function setDateDisplay($dateDisplay)
    {
        if (is_string($dateDisplay))
        {
            $this->_dateDisplay = $dateDisplay;
        }
    }
}