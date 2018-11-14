<?php

include(dirname(__FILE__).'/../modele/Comment.php');
include(dirname(__FILE__).'/../modele/CommentValidate.php');



class CommentManager
{
  private $_bdd;
  private $_pdoStatement;
  private $_bl ;


  // Instance de PDO
  
  public function __construct($bdd)
  {
    $this->setDb($bdd); 
  }
  
  //pour afficher tous les commentaires essayer avec un while à la ligne 30. BINDVALUE
  public function readAllC($comment)
  {
      
      $this->_pdoStatement = $this->_bdd->prepare('SELECT * FROM comment WHERE blog_post_id= :id');
      
     $this->_pdoStatement->bindValue(':id', $comment, PDO::PARAM_INT); //$GET ou $blogPostId->($_GET['id'])
     $executeIsOk = $this->_pdoStatement->execute();

      if($executeIsOk)
      {
        
        return new CommentValidate($this->_pdoStatement->fetch());
      }
      else
      {
        return false;
      }       
             
  } 

  public function readAll1()
  {
    
      
      $this->_bl= [];
      $comment= [];
      $this->_pdoStatement = $this->_bdd->query('SELECT * FROM comment_to_validate');
      
     
     while ($comment=$this->_pdoStatement->fetch(PDO::FETCH_ASSOC)) 
      {
        $this->_bl[] = new Comment($comment);
      }
        return $this->_bl;          
  } 
  

  

  public function read($id)
  {
      $this->_pdoStatement = $this->_db->prepare('SELECT * FROM comment WHERE id = :id');
      
      $this->_pdoStatement->bindValue(':id', $id, PDO::PARAM_INT);
      $executeIsOk = $this->_pdoStatement->execute();

      if($executeIsOk)
      {
        
        return new Comment($this->_pdoStatement->fetch());
      }
      else
      {
        return false;
      }       
  } 

  

  public function create(Comment $comment)
  {
    
    $this->_pdoStatement = $this->_bdd->prepare('INSERT INTO comment_to_validate (blog_post_id, message, auteur) VALUES (:blog_post_id, :message, :auteur)');

    $this->_pdoStatement->bindValue(':blog_post_id', $comment->blogPostId(), PDO::PARAM_STR);
    $this->_pdoStatement->bindValue(':message', $comment->message(), PDO::PARAM_STR);
    $this->_pdoStatement->bindValue(':auteur', $comment->auteur(), PDO::PARAM_STR);
    
    
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
  public function createc(CommentValidate $commentValidate)
  {
    
    $this->_pdoStatement = $this->_bdd->prepare('INSERT INTO comment (id, blog_post_id, message, auteur) VALUES (:id, :blog_post_id, :message, :auteur)');

    $this->_pdoStatement->bindValue(':id', $commentValidate->id(), PDO::PARAM_INT);
    $this->_pdoStatement->bindValue(':blog_post_id', $commentValidate->blogPostId(), PDO::PARAM_INT);
    $this->_pdoStatement->bindValue(':message', $commentValidate->message(), PDO::PARAM_STR);
    $this->_pdoStatement->bindValue(':auteur', $commentValidate->auteur(), PDO::PARAM_STR);
    
    
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

  public function update(Comment $comment)
  {
    $this->_pdoStatement = $this->_bdd->prepare('UPDATE comment SET auteur = :auteur, message = :message, dateDisplay = :dateDiqplay WHERE id = :id LIMIT 1');

    $this->_pdoStatement->bindValue(':auteur', $comment->auteur(), PDO::PARAM_STR);
    $this->_pdoStatement->bindValue(':message', $comment->message(), PDO::PARAM_STR);
    $this->_pdoStatement->bindValue(':dateDiqplay', $comment->dateDiqplay(), PDO::PARAM_STR);
    
    
    return $this->_pdoStatement->execute();

  } 

  public function delete(Comment $comment)
  {
    $this->_pdoStatement = $this->_bdd->prepare('DELETE FROM $comment WHERE id = :id LIMIT 1');

    $this->_pdoStatement->bindValue(':id', $comment->id(), PDO::PARAM_INT);
    
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