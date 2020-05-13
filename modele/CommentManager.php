<?php

include(dirname(__FILE__).'/../modele/Comment.php');
include(dirname(__FILE__).'/../modele/CommentValidate.php');


class CommentManager
{
    private $_bdd;
    private $_SqlRequest;
    private $_Objects ;
  
    public function __construct($bdd)
    {
        $this->setDb($bdd); 
    }
  
    public function readAllC($blogPostId)
    {     
        $this->_SqlRequest = $this->_bdd->prepare('SELECT * FROM comment WHERE blog_post_id= :id');
      
        $this->_SqlRequest->bindValue(':id', $blogPostId, PDO::PARAM_INT); 
        $executeIsOk = $this->_SqlRequest->execute();

        if($executeIsOk)
        {
            return new CommentValidate($this->_SqlRequest->fetch());
        }
        else
        {
            return false;
        }                 
    }  

    public function readAll1()
    {  
        $this->_Objects = [];
        $comments = [];
        $this->_SqlRequest = $this->_bdd->query('SELECT * FROM comment_to_validate');
      
     
        while ($comments = $this->_SqlRequest->fetch(PDO::FETCH_ASSOC)) 
        {
            $this->_Objects[] = new Comment($comments);
        }
        return $this->_Objects;          
    } 
  
 
    public function read($id)
    {
        $this->_SqlRequest = $this->_db->prepare('SELECT * FROM comment WHERE id = :id');
      
        $this->_SqlRequest->bindValue(':id', $id, PDO::PARAM_INT);
        $executeIsOk = $this->_SqlRequest->execute();

        if($executeIsOk)
        {
            return new Comment($this->_SqlRequest->fetch());
        }
        else
        {
            return false;
        }       
    } 

    public function read1($id)
    {
        $this->_SqlRequest = $this->_db->prepare('SELECT * FROM comment_to_validate WHERE id = :id');
      
        $this->_SqlRequest->bindValue(':id', $id, PDO::PARAM_INT);
        $executeIsOk = $this->_SqlRequest->execute();

        if($executeIsOk)
        { 
            return new CommentValidate($this->_SqlRequest->fetch());
        }
        else
        {
            return false;
        }       
    } 

    public function create(CommentValidate $commentValidate)
    {
    
        $this->_SqlRequest = $this->_bdd->prepare('INSERT INTO comment_to_validate (blog_post_id, message, auteur) VALUES (:blog_post_id, :message, :auteur)');

        $this->_SqlRequest->bindValue(':blog_post_id', $commentValidate->blogPostId(), PDO::PARAM_INT);
        $this->_SqlRequest->bindValue(':message', $commentValidate->message(), PDO::PARAM_STR);
        $this->_SqlRequest->bindValue(':auteur', $commentValidate->auteur(), PDO::PARAM_STR);
    
    
        $executeIsOk = $this->_SqlRequest->execute();

        if(!$executeIsOk)
        {
            return false;
        } 
        else
        {
            $id= $this->_bdd->lastInsertId();
            /*$blog= $this->read1($id);*/
            return true;
        }   
    } 

    public function createc(Comment $comment)
    {
    
        $this->_SqlRequest = $this->_bdd->prepare('INSERT INTO comment (id, blog_post_id, message, auteur) VALUES (:id, :blog_post_id, :message, :auteur)');

        $this->_SqlRequest->bindValue(':id', $comment->id(), PDO::PARAM_INT);
        $this->_SqlRequest->bindValue(':blog_post_id', $comment->blogPostId(), PDO::PARAM_INT);
        $this->_SqlRequest->bindValue(':message', $comment->message(), PDO::PARAM_STR);
        $this->_SqlRequest->bindValue(':auteur', $comment->auteur(), PDO::PARAM_STR);
    
    
        $executeIsOk = $this->_SqlRequest->execute();

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
        $this->_SqlRequest = $this->_bdd->prepare('UPDATE comment SET auteur = :auteur, message = :message, dateDisplay = :dateDiqplay WHERE id = :id LIMIT 1');

        $this->_SqlRequest->bindValue(':auteur', $comment->auteur(), PDO::PARAM_STR);
        $this->_SqlRequest->bindValue(':message', $comment->message(), PDO::PARAM_STR);
        $this->_SqlRequest->bindValue(':dateDiqplay', $comment->dateDiqplay(), PDO::PARAM_STR);
    
        return $this->_SqlRequest->execute();
    } 

    public function delete(Comment $comment)
    {
        $this->_SqlRequest = $this->_bdd->prepare('DELETE FROM $comment WHERE id = :id LIMIT 1');

        $this->_SqlRequest->bindValue(':id', $comment->id(), PDO::PARAM_INT);
    
        return $this->_SqlRequest->execute();
    } 

    public function setDb(PDO $bdd)
    {
        $this->_bdd = $bdd;
    }   
}