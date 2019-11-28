<?php

class stock{
  private $code_prd;
  private $qte;
  private $des_prd;
  private $id_fourni;
  private $qte_maj;

  public function __construct($code_prd,$qte,$des_prd,$id_fourni,$qte_maj)
  {

    $this->code_prd=$code_prd;
    $this->qte=$qte;
    $this->des_prd=$des_prd;
    $this->id_fourni=$id_fourni;
    $this->qte_maj=$qte_maj;

  }

  public function getcode_prd()
  {
    return $this->code_prd;
  }
  public function getqte()
  {
    return $this->qte;
  }
  public function getdes_prd()
  {
    return $this->des_prd;
  }
  public function getid_fourni()
  {
    return $this->id_fourni;
  }
  public function getqte_maj()
  {
    return $this->qte_maj;
  }

}
?>
