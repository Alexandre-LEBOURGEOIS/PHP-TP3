<?php
namespace controllers;

use Ubiquity\orm\DAO;
use models\Organization;
 /**
 * Controller Organizations
 **/
class Organizations extends ControllerBase{

	public function index(){
	    $orgas=DAO::getAll(Organization::class);
	    $this->loadView("Organizations/index.html", ["orgas"=>$orgas]);
	}




	/*public function display($idOrga){
	    $orga=DAO::getOne("models\\Organization", $idOrga, true);
	    $this->loadView("Organizations/display.html",["orga"=>$orga]);

	}*/
	
	protected function users($users=null){
	    $title="Tous les utilisateurs";
	    return $this->loadView("Organizations/users.html",compact("users","title"),true);
	}
	
	public function display($idOrga,$idGroupe=null){
	    $orga=DAO::getOne(Organization::class, $idOrga,true);
	    $users=$this->users($orga->getUsers());
	    $this->jquery->renderView("Organizations/display.html",["orga"=>$orga,"users"=>$users]);
	}

}
