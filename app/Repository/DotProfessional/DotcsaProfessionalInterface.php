<?php 
namespace App\Repository\DotProfessional;

interface DotcsaProfessionalInterface{
  public function storeDotProfessional( array $data);
  public function getDotProfessionals();
  public function deleteDotProfessionals($id);
}
?>