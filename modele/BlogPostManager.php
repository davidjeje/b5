<?php

include(dirname(__FILE__).'/../entite/BlogPost.php');

class BlogPostManager
{
  private $_pdoStatement;
  private $_bl;
  private $_bdd ;



  // Instance de PDO
  
  public function __construct($bdd)
  {
    $this->setDb($bdd);
  }
  
  
  public function readAll()
  {
      $this->_bl= [];
      $blog= [];
      $this->_pdoStatement = $this->_bdd->query('SELECT * FROM blog_post');
      
     
     while ($blog=$this->_pdoStatement->fetch(PDO::FETCH_ASSOC)) 
      {
        $this->_bl[] = new BlogPost($blog);
      }
        return $this->_bl;         
  } 

  public function readAll1()
  {
      $this->_bl= [];
      $blog= [];
      $this->_pdoStatement = $this->_bdd->query('SELECT * FROM blog_post ORDER BY date_display DESC LIMIT 0,15');
      
     while ($blog=$this->_pdoStatement->fetch(PDO::FETCH_ASSOC)) 
      {
        $this->_bl[] = new BlogPost($blog);
      }
        return $this->_bl;         
  } 
  
  public function read($id)
  {
      $this->_pdoStatement = $this->_bdd->prepare('SELECT * FROM blog_post WHERE id = :id');
      
      $this->_pdoStatement->bindValue(':id', $id, PDO::PARAM_INT);
      $executeIsOk = $this->_pdoStatement->execute();

      if($executeIsOk)
      { 
        return new BlogPost($this->_pdoStatement->fetch());
      }
      else
      {
        return false;
      }       
  } 

  

  public function create(BlogPost $blog)
  {

    $this->_pdoStatement = $this->_bdd->prepare('INSERT INTO blog_post (id, author, title, chapo, content, date_display) VALUES (NULL, :author, :title, :chapo, :content, :date_display)');

    $this->_pdoStatement->bindValue(':author', $blog->author(), PDO::PARAM_STR);
    $this->_pdoStatement->bindValue(':title', $blog->title(), PDO::PARAM_STR);
    $this->_pdoStatement->bindValue(':chapo', $blog->chapo(), PDO::PARAM_STR);
    $this->_pdoStatement->bindValue(':content', $blog->content(), PDO::PARAM_STR);
   // $this->_pdoStatement->bindValue(':image', $blog->image($image), PDO::PARAM_STR);
    $this->_pdoStatement->bindValue(':date_display', $blog->dateDisplay(), PDO::PARAM_STR);
    
    $executeIsOk = $this->_pdoStatement->execute();

    if(!$executeIsOk)
    {
      return false;
    } 
    else
    {
      $id= $this->_bdd->lastInsertId();
      $blog= $this->read($id);
      return true;
    }   
  } 

  public function update(BlogPost $blog)
  {
    
    $this->_pdoStatement = $this->_bdd->prepare('UPDATE blog_post SET author = :author, title = :title, chapo = :chapo, content = :content WHERE id = :id LIMIT 1');

    $this->_pdoStatement->bindValue(':author', $blog->author(), PDO::PARAM_STR);
    $this->_pdoStatement->bindValue(':title', $blog->title(), PDO::PARAM_STR);
    $this->_pdoStatement->bindValue(':chapo', $blog->chapo(), PDO::PARAM_STR);
    $this->_pdoStatement->bindValue(':content', $blog->content(), PDO::PARAM_STR);
    $this->_pdoStatement->bindValue(':id', $blog->id(), PDO::PARAM_INT);
    
    return $this->_pdoStatement->execute();

  } 

  public function delete(BlogPost $blog)
  {
    
    $this->_pdoStatement = $this->_bdd->prepare('DELETE FROM blog_post WHERE id = :id LIMIT 1');

    $this->_pdoStatement->bindValue(':id', $blog->id(), PDO::PARAM_INT);
    
    return $this->_pdoStatement->execute();

  } 

  public function save(BlogPost $blog)
  {
    if(is_null($blog->getId()))
    {
      return $this->create($blog);
    }
    else
    {
      return $this->update($blog);
    }
  } 

  public function setDb(PDO $bdd)
  {
    $this->_bdd = $bdd;
  }
    

}