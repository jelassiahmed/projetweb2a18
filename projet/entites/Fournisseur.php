<?php

class fournisseur{
  private $id_fourni;
  private $numero;
  private $email;
  private $nom_prd;
  private $facture;

  public function construct($id_fourni,$numero,$email,$nom_prd,$facture)
  {

    $this->id_fourni=$id_fourni;
    $this->numero=$numero;
    $this->email=$email;
    $this->nom_prd=$nom_prd;
    $this->facture=$facture;

  }

  public function getid_fourni()
  {
    return $this->id_fourni;
  }
  public function getnumero()
  {
    return $this->numero;
  }
  public function getemail()
  {
    return $this->email;
  }
  public function getnom_prd()
  {
    return $this->nom_prd;
  }
  public function getfacture()
  {
    return $this->facture;
  }

}
?>
