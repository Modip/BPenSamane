<?php

use libs\system\Controller;
use src\model\ClientphRepository;
use src\model\ClientmorRepository;
use src\model\CompteRepository;

class CompteController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }
  /** 
   * url pattern for this method
   * localhost/projectName/Test/
   */
  public function index()
  {
    $comptedb = new CompteRepository();
    $data['clients'] = $comptedb->afficherClient();
    $data['clientmors'] = $comptedb->afficherClientmor();
    $data['agences'] = $comptedb->afficherAgence();
    $data['typecomptes'] = $comptedb->afficherTypecompte();

    return $this->view->load("compte/index", $data);
    
  }

  public function insert()
  {


    if (isset($_POST['ajouter'])) 
    {
     //  var_dump($_POST);
     //  die;

      extract($_POST);

      if ($typeclient == '1')
      {
       
        $a = new Compte();  //Instanciation de la classe compte

        //$a->setNumeroCte($numeroCte);
        $a->setClerib($clerib);
        $a->setAgence($agence);
        $a->setSolde($solde);
        $a->setFraisph($fraisph);
        $a->setAgios($agios);
        $a->setDateou($dateou);

        $cp = new CompteRepository();
        $rep = $cp->addCompteph($a);
        var_dump($rep);
        die();
      }

      if ($typeclient == '2') {
       
        $b = new Compte();
        $b->setCleribmor($cleribmor);
        $b->setSoldemor($soldemor);
        $b->setDateoum($dateoum);
        $b->setAgence($agence);
        $b->setAgence($agence);
        $cm = new CompteRepository();
        $rep2 = $cm->addComptemor($b);
        var_dump($rep2);
        die(); 
      }
    }
  }
}
