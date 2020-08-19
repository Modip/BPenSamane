<?php

use libs\system\Controller; 
use src\model\ClientphRepository;
use src\model\ClientmorRepository;
use src\model\CompteRepository;


class ClientController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Test/
     */

    public function index(){
        $comptedb = new CompteRepository();

        $data['clientmors'] = $comptedb->afficherClientmor();
        return $this->view->load("client/index");
        return $this->view->load("client/index", $data);
    }

    public function insert()
    {
        if(isset($_POST['submit']))
        {
            // var_dump($_POST);
            // die;
            extract($_POST);
            if($typeclient == '1')
            {
                
                $a = new Clientph();//instanciation de la fonction qui est dans le entities
                
                $a->setNom($nomph);
                $a->setPrenom($prenomph);
                $a->setTel($telph);
                $a->setSalaire($salaire);
                $a->setAdresse($adresseph);
                $a->setProfession($profession);
                $a->setLogin($loginph);
                $a->setPassword($passwordph);
                $a->setEmail($emailph);
                $a->setNin($ninph);
                
                $cp = new ClientphRepository();//instanciation de la fonction qui est dans le model
                $rep = $cp->addClientphysique($a);
                var_dump($rep);
                die();
            }
            
            if($typeclient == '2')
            {
                $b = new Clientmor();//instanciation de la fonction qui est dans le entities
                $b->setRaisonsocial($raisonsocial);
                $b->setNom($nommor);
                $b->setAdresse($adressemor);
                $b->setTel($telmor);
                $b->setMail($mailmor);
                $b->setLogin($loginmor);
                $b->setPassword($passwordmor);

               
                $cm = new ClientmorRepository();//instanciation de la fonction qui est dans le model
                $rep = $cm->addCientmoral($b);

                var_dump($rep);
                die();
            }      
        }
     
    }
     
}

?>



