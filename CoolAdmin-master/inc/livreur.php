<?PHP
class Livreur{
    private $id_livreur;
	private $nom;
	private $prenom;
    private $etat;
    private $matricule;
    private $adresse;
    private $tel;

	function __construct($id_livreur,$nom,$prenom,$etat,$matricule,$adresse,$tel){

        $this->id_livreur=$id_livreur;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->etat=$etat;
        $this->matricule=$matricule;
        $this->adresse=$adresse;
        $this->tel=$tel;
    }
  function getid_livreur(){
      return $this->id_livreur;
  }
	function getnom(){
        return $this->nom;
    }
	function getprenom(){
        return $this->prenom;
    }
	function getetat(){
        return $this->etat;
    }
    function getmatricule(){
        return $this->matricule;
    }
    function getadresse(){
        return $this->adresse;
    }
    function gettel(){
        return $this->tel;
    }

  function setid_livreur($id_livreur){
        $this->id_livreur=$id_livreur;
  }
	function setNom($nom){
        $this->nom=$nom;
    }
	function setprenom($prenom){
        $this->prenom=$prenom;
    }
	function setetat($etat){
        $this->etat=$etat;
    }
    function setmatricule($matricule){
         $this->matricule=$matricule;
    }
    function setadresse($adresse){
        $this->adresse=$adresse;
    }
    function settel($tel){
        $this->tel=$tel;
    }
}

?>











