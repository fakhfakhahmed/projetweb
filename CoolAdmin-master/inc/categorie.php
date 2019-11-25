<?php


class categorie
{
    private $id_categorie;

    private $nom_cat;
    function __construct($nom_cat)
    {

        $this->nom_cat=$nom_cat;
    }

    /**
     * @return mixed
     */
    public function getIdCategorie()
    {
        return $this->id_categorie;
    }

    /**
     * @return mixed
     */
    public function getNomCat()
    {
        return $this->nom_cat;
    }

    /**
     * @param mixed $id_categorie
     */
    public function setIdCategorie($id_categorie)
    {
        $this->id_categorie = $id_categorie;
    }

    /**
     * @param mixed $nom_cat
     */
    public function setNomCat($nom_cat)
    {
        $this->nom_cat = $nom_cat;
    }
}