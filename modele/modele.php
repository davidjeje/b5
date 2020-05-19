<h1>Hello</h1>
<p> salut ça va ?<p>

<?php 
class BlogManager
{
  private /*global*/ $_bdd; // Instance de PDO
  
  public function __construct($bdd)
  {
    $this->setBdd($bdd);
  }
  public function setBdd(PDO $bdd)
  {
    $this->_bdd = $bdd;
  }
  public function getList($manager)
  {
  $news= array();
  $req= $bdd ->query('SELECT id, author, title, chapo, content, image, date_display FROM blog_post');
  while ($data = $req->fetchall()) 
  {
    
    $news = $data;
    return $news;
  }
  $req->closeCursor();
    /*$persos = [];
    
    $q = $this->_db->prepare('SELECT id, nom, degats FROM personnages WHERE nom <> :nom ORDER BY nom');
    $q->execute([':nom' => $nom]);
    
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $persos[] = new Personnage($donnees);
    }
    
    return $persos;*/
  }
  //voir si je dois changer le nom de la fonction add_blog en inserer_le_commentaire_valider qui est le nom que j'ai mis en langage procédurale.
  public function add_blog() //Est-ce nécessaire de mettre les paramètres Blog_post qui représente le nom de l'objet de la class Blog_post et $blog qui permet d'instancier l'objet en sachant que je créé que le manager en objet.
  {
    //global $bdd;
  
  $req = $this->_bdd->prepare('INSERT INTO blog_post ( author, title, chapo, content) VALUES(?,?,?,?)');
  $req->execute(array($_POST['author'], $_POST['title'], $_POST['chapo'], $_POST['content']));
  
  $req->closeCursor();
   /* $q = $this->_bdd->prepare('INSERT INTO personnages(nom) VALUES(:nom)');
    $q->bindValue(':nom', $perso->nom());
    $q->execute();*/
    
    /*$blog->hydrate([
      'id' => $this->_db->lastInsertId(),
      'degats' => 0,
    ]);*/
  }

  
  
  public function delete() // entre les parenthèses il y avait Personnage $ perso
  {
    //global $bdd;
  
  $req = $this->_bdd->prepare('DELETE FROM blog_post WHERE id = :id LIMIT 1');

  $req-> bindValue(':id', $_GET['id'], PDO:: PARAM_INT);
  

/*
  $req->execute();
    $this->_db->exec('DELETE FROM personnages WHERE id = '.$perso->id());*/
  }
  
  /*public function exists($info)
  {
    if (is_int($info)) // On veut voir si tel personnage ayant pour id $info existe.
    {
      return (bool) $this->_db->query('SELECT COUNT(*) FROM personnages WHERE id = '.$info)->fetchColumn();
    }
    
    // Sinon, c'est qu'on veut vérifier que le nom existe ou pas.
    
    $q = $this->_db->prepare('SELECT COUNT(*) FROM personnages WHERE nom = :nom');
    $q->execute([':nom' => $info]);
    
    return (bool) $q->fetchColumn();
  }*/
  
  public function get($info)
  {
    if (is_int($info))
    {
      global $bdd;
  $req = $bdd->prepare('SELECT id, author, title, chapo, content, image, date_display FROM blog_post WHERE id= :id ');
  $req->execute(array('id' => $_GET['id']));
  $show= $req->fetchall();
  return $show;
  $req->closeCursor();
      /*$q = $this->_db->query('SELECT id, nom, degats FROM personnages WHERE id = '.$info);
      $donnees = $q->fetch(PDO::FETCH_ASSOC);
      
      return new Personnage($donnees);*/
    }
    else
    {
      $q = $this->_db->prepare('SELECT id, nom, degats FROM personnages WHERE nom = :nom');
      $q->execute([':nom' => $info]);
    
      return new Personnage($q->fetch(PDO::FETCH_ASSOC));
    }
  }
  
  
  
  public function update(Personnage $perso)
  {
    global $bdd;
  
  $req = $bdd->prepare('UPDATE blog_post SET author = :author, title = :title, chapo = :chapo, content = :content WHERE id = :id LIMIT 1');
  
  $req->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
  $req->bindValue(':author', $_POST['author'], PDO::PARAM_STR);
  $req->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
  $req->bindValue(':chapo', $_POST['chapo'], PDO::PARAM_STR);
  $req->bindValue(':content', $_POST['content'], PDO::PARAM_STR);

  $req->execute();

  $req->closeCursor();
    $q = $this->_db->prepare('UPDATE personnages SET degats = :degats WHERE id = :id');
    
    $q->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);
    $q->bindValue(':id', $perso->id(), PDO::PARAM_INT);
    
    $q->execute();
  }
  
  
}

/*function chargerClasse($classname)
{
  require $classname.'.php';
}

spl_autoload_register('chargerClasse');*/

$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$manager = new BlogManager($news);
echo $manager->getList($manager);
?>

