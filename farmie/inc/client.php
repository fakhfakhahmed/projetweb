<?PHP
class client
{
 	private $username ;
 	private $nom ;
 	private $prenom ;
 	private $mdp ;
 	private $email ;
  private $tel ;
      function __construct($username,$nom,$prenom,$mdp,$email,$tel)
          {
		$this->username=$username;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
		$this->mdp=$mdp;
    $this->tel=$tel;
}
      function getusername()
          {
		return $this->username;
	}
      function gettel()
          {
  return $this->tel;
}
	    function getNom()
          {
		return $this->nom;
}
	    function getPrenom()
          {
		return $this->prenom;
}
	    function getmdp()
          {
		return $this->mdp;
}
	    function getemail()
          {
		return $this->email;
}
	    function setNom($nom)
          {
		$this->nom=$nom;
}
	    function setPrenom($prenom)
          {
		$this->prenom=$prenom;
}
	    function setusername($username)
          {
          $this->username=$username;
  }
      function setemail($email)
          {
		$this->email=$email;
}
      function setmdp($mdp)
          {
		$this->mdp=$mdp;
}
      function settel($tel)
          {
   $this->tel=$tel;
}
}



?>
