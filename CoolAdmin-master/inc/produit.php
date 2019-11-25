<?PHP
class Produit{
    private $id_produit;

  private $id_categorie;
	private $nom;
	private $description;
	private $prix;
  private $stock ;
  private $img_1;
  private $key_word ;
	function __construct($id_categorie,$nom,$description,$prix,$stock,$img_1,$key_word){

        $this->id_categorie=$id_categorie;
        $this->nom=$nom;
        $this->description=$description;
        $this->prix=$prix;
        $this->stock=$stock ;
        $this->img_1=$img_1 ;
        $this->key_word=$key_word;
    }
  function getid_produit(){
      return $this->id_produit;
  }

  function getid_categorie(){
      return $this->id_categorie;
  }
	function getnom(){
        return $this->nom;
    }
	function getdescription(){
        return $this->description;
    }
	function getprix(){
        return $this->prix;
    }
  function getstock(){
      return $this->stock;
  }
  function getimg_1(){
      return $this->img_1;
  }
  function getkey_word(){
      return $this->key_word;
  }


  function setid_categorie($id_categorie){
      $this->id_categorie=$id_categorie;
  }
	function setNom($nom){
        $this->nom=$nom;
    }
	function setdescription($description){
        $this->description=$description;
    }
	function setprix($prix){
        $this->prix=$prix;
    }
	function setstock($stock){
        $this->stock=$stock;
    }
  function setimg_1($img_1){
      $this->img_1=$img_1;
  }
  function setkey_word($key_word){
      $this->key_word=$key_word;
  }

}

?>











