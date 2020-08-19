<?php

namespace src\model;

use libs\system\Model;

class ClientphRepository extends Model
{

   /**
    * Methods with DQL (Doctrine Query Language) 
    */
   public function __construct()
   {
      parent::__construct();
   }

   public function getClientph($id)
   {
      if ($this->db != null) {
         return $this->db->getRepository('Clientph')->find(array('id' => $id));
      }
   }
   public function getListEmployeur()
   {
      if ($this->db != null) {
         $query = $this->db->createQuery("SELECT e FROM Employeur e");
         return $employeurs = $query->getResult();
      }
   }


   //Insertion de client physique dans la base de donnee
   public function addClientphysique($clientphysique)
   {
      
      $this->db->persist($clientphysique);
      $this->db->flush();

      return $clientphysique->getId();
   }

   //Fonction pour afficher les clients qui sont dans la base

   public function afficherClient()
   {

      $clienteph = $em->getRepository("Clientph)");
      $clients = $clientph->findAll;
      foreach ($clients as $clientph) {
         echo $clientph->getNomComplet();
         
      }
   }

   //Fonction pour afficher les types comptes
   public function afficherTypecompte()
   {
      $cpt = ('SELECT * FROM type_compte');
      $db = getConnection();
      return $db->query($cpt)->fetchAll();
   }
}
