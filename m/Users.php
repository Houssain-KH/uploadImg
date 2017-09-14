<?php


/**
 * summary
 */
class User {

	private $idusers;
	private $login;
	private $pwd;
	private $droitsIdDroits;

    public function __construct(Array $datas)
    {
        $this->hydrate($datas);
    }

    private function hydrate(Array $a){
    	foreach ($a as $value=>$b) {
    		$lulu = 'set'.ucfirst($value);
    		if(method_exists($this, $lulu)){
    			$this->$lulu($b);
    		}
    	}

    }
    public function getIdUser(){
    	return $this->idusers;
    }
    public function getLelogin(){
    	return $this->login;
    }
    public function getPwd(){
    	return $this->pwd;
    }
    public function getDroitsiddroits(){
    	return $this->droitsIdDroits;
    }
    public function setIdUser(){
    	$this->idusers=$idusers;
    }
    public function setLelogin(){
    	$this->login=private $login;
    }
    public function setPwd(){
    	$this->pwd=private $pwd;
    }
    public function setDroitsiddroits(){
    	$this->droitsIdDroits=$droitsIdDroits;
    }
}