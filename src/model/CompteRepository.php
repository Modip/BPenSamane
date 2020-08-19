<?php
namespace src\model;
use libs\system\Model;
use src\entities\Clientph;

class CompteRepository extends Model 

{

  public function __construct()
  {
     parent::__construct();
  }

  public function getCompte($id)
  {
     if ($this->db != null) {
        return $this->db->getRepository('Compte')->find(array('id' => $id));
     }
  }

  //Ouverture de compte pour un client Physique
  public function addCompteph($compteph)
    {
     
      $this->db->persist($compteph);
      $this->db->flush();
      return $compteph->getId();
    }
  //Ouverture de compte pour un client Moral
  public function addComptemor($comptemor) 
    {
     // var_dump($comptemor->getDateoum());
      $this->db->persist($comptemor);
      $this->db->flush();

      //return $comptemor->getId();
      var_dump($comptemor->getId());
      die;
    }

  //Fonction pour afficher les clients qui sont dans la base
  public function afficherClient()
 
  {  
    
    return $this->db->createQuery("SELECT a FROM Clientph a")->getResult();
    
  }

  
  //Afficher les clients morals
  function afficherClientmor()

    {  
      return $this->db
      ->createQuery("SELECT a FROM Clientmor a")
      ->getResult();
    }


    function getListAgence()
    {
  
      return $this->db
        ->createQuery("SELECT a FROM Agence a")
        ->getResult();
    }
  //Fonction pour afficher les agences qui sont dans la base
  public function afficherAgence()
  {  
    return $this->db
    ->createQuery("SELECT a FROM Agence a")
    ->getResult();
  }
  
  // //Fonction pour afficher les types comptes
  function afficherTypecompte()
  {
    return $this->db
      ->createQuery("SELECT a FROM TypeCompte a")
      ->getResult(); 
      
  } 

}

?>

