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
        private $monPdo;
	
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
	
}
