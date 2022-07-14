<?php   

namespace App\Models;
use PDO; //utilisation de PDO
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config; //on definie "Config" en ajoutant sonchemin

class PdoAssoChoisy extends Model
{
    use HasFactory;
        private static $serveur;
        private static $bdd;
        private static $user;
        private static $mdp;
        private static $monPdo;
	
/**
 * crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	public function __construct(){
        
        self::$serveur='mysql:host=' . Config::get('database.connections.mysql.host');
        self::$bdd='dbname=' . Config::get('database.connections.mysql.database');
        self::$user=Config::get('database.connections.mysql.username') ;
        self::$mdp=Config::get('database.connections.mysql.password');	  
        $this->monPdo = new PDO(self::$serveur.';'.self::$bdd, self::$user, self::$mdp); 
  		$this->monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		$this->monPdo =null;
	}
	
// -------------------------------------------


/** GESTIONNAIRE
 * Retourne l'utilisateur connecté sous forme d'un tableau associatif
 *
 * @return l'utisateur 
*/        
public function getUser($login,$mdp)
{
    $mdp = hash('sha256',$mdp);       /* ----php hash le mdp entrer POUR MATCHER LE HASHAGE DU SERVEUR ET LE mdp entrer -------*/
    
    $req = "select * from gestionnaire where login = :login and mdp = :mdp";
    $res =  $this->monPdo->prepare($req);
    $res->bindvalue(':login',$login);
    $res->bindvalue(':mdp',$mdp);
    $res->execute();
    $ligne = $res->fetch(); //fetch = rechercher (fetch : quand on recupere une seul ligne)
   
    return $ligne;

}

//----------------- ! faut savoir si on garde "ARTICLE" ou pas ! ---------------

/**
 * Retourne toutes les types sous forme d'un tableau associatif
 *
 * @return le tableau associatif des types 
*/
        public function getLesarticles()
	{
		$req = "select * from articles"; //faire la requete SQL
        $res= $this->monPdo->query($req);
		$lesLignes = $res->fetchAll(PDO::FETCH_ASSOC); //(fetch : quand on recupere plusieur lignes et all pour tout recup)
           
		return $lesLignes;
                
	}

	public function getIdActivites(){
		$req = "SELECT id, libeler  FROM activites";
    	$rs = $this->monPdo->query($req);
		$ligne = $rs->fetchAll();
		return $ligne;
	}
	

	public function getlesarticlesParAct($idactivite)
	{
        $req="select texte,id,imagesarticle,titreArticle from articles where idactivites= :idactivite order by datejour desc "; //du plus recent au plus ancien
        $res =  $this->monPdo->prepare($req);
        $res->bindvalue(':idactivite',$idactivite);
        $res->execute();
		
        //condition si plus de 1 article PDO::FETCH_ASSOC sinon BOTH
        $laLigne = $res->fetchAll();
 

		return $laLigne; 

	}

    public function getArticle($id) //on recup l'id dun article
	{
        $req="select texte,titreArticle from articles where id= :id "; 
        
        $res = $this->monPdo->prepare($req);
        $res->bindvalue(':id',$id);
        $res->execute();

        $laLigne = $res->fetch();
 

		return $laLigne; 

	}

    // ==========Article le plus recent==================
    public function getarticleRecent()
    {
        $req="SELECT id,titreArticle,texte FROM articles where idactivites=2 ORDER BY datejour DESC LIMIT 1"; 
        $res = $this->monPdo->query($req);
		$laLigne = $res->fetch(PDO::FETCH_ASSOC);

		return $laLigne; 

    }
    
    public function getTitreArticleRecent()
    {
        $req="SELECT id,titreArticle FROM articles ORDER BY datejour DESC LIMIT 1 "; 
        $res = $this->monPdo->query($req);
		$laLigne = $res->fetch(PDO::FETCH_ASSOC);
         

		return $laLigne; 

    }
    
    public function getLesCardArticleRecent($id)
    {
        $req="SELECT id,texte, titreArticle, imagesarticle, datejour FROM articles WHERE idactivites=$id ORDER BY datejour DESC LIMIT 1;"; 
        $res = $this->monPdo->query($req);
		$laLigne = $res->fetch(PDO::FETCH_ASSOC);
         

		return $laLigne; 

    }
    

 // ==========END--Article le plus recent==================


    public function getTitreActivites($id)
    {

    $req="select libeler,id from activites where id= :id"; 
    
    $res = $this->monPdo->prepare($req);
    $res->bindvalue(':id',$id);
    $res->execute();
    $laLigne = $res->fetchAll();

    return $laLigne; 

    }

    public function getTitreArticles($idactivite)
    {

    $req="select titreArticle from articles where idactivites= :idactivite"; 
    
    $res = $this->monPdo->prepare($req);
    $res->bindvalue(':idactivite',$idactivite);
    $res->execute();
    $laLigne = $res->fetch(PDO::FETCH_ASSOC);

    return $laLigne; 

    }
                    //////on utilise pas get image pour le moment//////
                    public function getImageParAct($id)
                    {

                    $req="select nomimage from images,imgassocieractivites,activites where images.id = imgassocieractivites.idimage and activites.id = imgassocieractivites.idactivites and idactivites= :id";  // recup les image en fonction de lactivité

                    $res = $this->monPdo->prepare($req);
                    $res->bindvalue(':id',$id);
                    $res->execute();
                    $laLigne = $res->fetchAll();
                    return $laLigne;
                    }

                    public function getImageBanniere($id)
                    { 
                        
                    $req="select nomimage from banniereimages where idactivites= :id";  
                    // recup les image de la baniere en fonction de lactivité

                    $res = $this->monPdo->prepare($req);
                    $res->bindvalue(':id',$id);
                    $res->execute();
                    $laLigne = $res->fetch(PDO::FETCH_ASSOC);
                    return $laLigne;
                    }

                    public function getIdArticle($idactivite){
                       
                        $req="select id from articles where idactivites= :idactivite order by datejour desc";  
                        // recup les image de la baniere en fonction de lactivité
                        $res = $this->monPdo->prepare($req);
                        $res->bindvalue(':idactivite',$idactivite);
                        $res->execute();
                        $laLigne = $res->fetch(PDO::FETCH_ASSOC);
                        return $laLigne;
                    }


                    public function getImageArticle($idarticle)
                    { 
                        
                    $req="   Select imagesarticle from articles where id= :idarticle ";
                    //                                       bien coller ":" et "odarticke"
                    // recup les image en fonction de lactivité et de l'articles
                 

                    $res = $this->monPdo->prepare($req);
                    $res->bindvalue(':idarticle',$idarticle);
                 
                    $res->execute();
                    $laLigne = $res->fetch(PDO::FETCH_ASSOC);
                    return $laLigne;
                    }

    //======= A voir admin-FONCTIONS:  Modifier , Ajouter , Supprimer ========//

 public function modifierArticle($id ,$texte,$titre,$image)
 {

    $req="update articles set texte = '$texte',titreArticle='$titre',imagesarticle='$image' where id='$id' ";   
    $res= $this->monPdo->exec($req);
    return $res;

 }


  public function ajouterReservation($nomreserv, $prenomreserv, $datereserv, $emailreserv,$telreserv,	$lieuprestation,$organismereserv)
  {
 
     $req="insert into reservations values(null,'$nomreserv', '$prenomreserv', '$datereserv', '$emailreserv','$telreserv', '$lieuprestation',' $organismereserv')";   

     $res= $this->monPdo->exec($req);
     return $res;
 
   }

   public function ajouterArticle($titreArticle, $texte, $idactivites, $nomImage)
   {
    
    $req="insert into articles values(null, '$titreArticle','$texte', '$idactivites',
    ( Select DATE(NOW()) ), '$nomImage'  ) ";   
      $res= $this->monPdo->exec($req);
      return $res;
   
    }

    public function supprimerArticle($idArticle)
   {
        $req=" DELETE FROM articles WHERE id='$idArticle' ";   
        $res= $this->monPdo->exec($req);
        return $res;

    }

    // on a creer un model "R"eservation qui recup la table reseravtion"s"
    // attention bien mettre un "s" a la table php my admin et au modele mettre une "MAJ" 
    //                            ↓↓↓↓↓↓↓↓↓↓ 
    // public function  getReservation()
	// {
	// 	$req = "Select * from reservations"; //faire la requete SQL
    //     $res= $this->monPdo->query($req);
	// 	$lesLignes = $res->fetchAll(PDO::FETCH_ASSOC); 
           
	// 	return $lesLignes;
                
	// }
}