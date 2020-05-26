<?php
class BlogPost
{         
    private   $_id,
            $_userId,
            $_author,
            $_title,
            $_chapo,
            $_content,
            $_image,          
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

    public function author()
    {
        return $this->_author;
    }

    public function title()
    {
        return $this->_title;
    }

    public function chapo()
    {
        return $this->_chapo;
    }

    public function content()
    {
        return $this->_content;
    }

    public function image()
    {
        return $this->_image;
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
        if (is_string($userId))
        {
            $this->_userId = $userId;
        }
    }

    public function setAuthor($author)
    {
        if (is_string($author))
        {
            $this->_author = $author;
        }
    }

    public function setTitle($title)
    {
        if (is_string($title))
        {
            $this->_title = $title;
        }
    }

    public function setChapo($chapo)
    {
        if (is_string($chapo))
        {
            $this->_chapo = $chapo;
        }
    }

    public function setContent($content)
    {
        if (is_string($content))
        {
            $this->_content = $content;
        }
    }

    public function setImage($image)
    {
        if (is_string($image))
        {
            $this->_image = $image;
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