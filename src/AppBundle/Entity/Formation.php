<?php
namespace AppBundle\Entity;

class Formation
{
  private $title;
  private $datedeb;
  private $datefin;
  private $description;
  private $diplomeobt;

  public function getTitle(){
    return $this->title;
  }

  public function setTitle($title){
    $this->title = $title;
    return $this->title;
  }

  public function getDescription(){
    return $this->description;
  }

  public function setDescription($description){
    $this->description = $description;
    return $this->description;
  }


  public function setDiplomeObt($diplom){
    $this->diplomeobt = $diplom;
    return $this->diplomeobt;
  }
  public function getDiplomeObt(){
    return $this->diplomeobt;
  }
}
