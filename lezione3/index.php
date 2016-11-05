<?php
class Macchina {
  private $colore;
  private $marca;
  private $modello;

  private $cilindrata;
  private $targa;

  private $velocita;
  private $marcia;
  private $kmPercorsi;
  private $stato;

  public function Macchina() {
    $this->stato = 'spenta';
  }

  public function mettiInMoto() {
    if ($this->stato === 'spenta') {
      $this->stato = 'accesa';
      $this->velocita = 0;
    }
  }

  public function accelera() {
    if ($this->stato === 'accesa') {
      $this->velocita++;
    }
  }

  public function getStato() {
    return $this->stato;
  }

  public function getVelocita() {
    $velocita = 70;
    return $this->velocita;
  }

  public function spegni() {
    if ($this->stato === 'accesa') {
      $this->stato = 'spenta';
    }
  }
}

$SaettaMcQueen = new Macchina();
$SallyCarrera = new Macchina();

$SaettaMcQueen->mettiInMoto();
$SallyCarrera->mettiInMoto();

for ($i=0; $i < 100; $i++) {
  $SaettaMcQueen->accelera();
}

for ($i=0; $i < 60; $i++) {
  $SallyCarrera->accelera();
}

$SallyCarrera->spegni();

for ($i=0; $i < 60; $i++) {
  $SallyCarrera->accelera();
}

echo 'La macchina è ' . $SaettaMcQueen->getStato();
echo '<br />';
echo 'La velocità è ' . $SaettaMcQueen->getVelocita();
echo '<br />';
echo '<br />';
echo 'La macchina è ' . $SallyCarrera->getStato();
echo '<br />';
echo 'La velocità è ' . $SallyCarrera->getVelocita();


class Data {

  private $giorno;
  private $mese;
  private $anno;

  public function getGiorno() {return $this->giorno; }
  public function getMese() {return $this->mese; }
  public function getAnno() {return $this->anno; }

  public function __construct() {
    if (func_num_args() === 3) {
      $this->giorno = func_get_arg(0);
      $this->mese = func_get_arg(1);
      $this->anno = func_get_arg(2);
    }
  }

  public function setData($g, $m, $a) {
    $this->giorno = $g;
    $this->mese = $m;
    $this->anno = $a;
  }

  public function getData() {
    return "$this->giorno/$this->mese/$this->anno";
  }

  public function dateDiff($data) {
    $giorno = $this->giorno - $data->getGiorno();
    $mese = $this->mese - $data->getMese();
    $anno = $this->anno - $data->getAnno();
    return $giorno * $mese*30 * $anno*12*30;
  }

}

$prova = new Data('29', '06', '2016');

$prova2 = new Data();
$prova2->setData('15', '02', '1990');

echo '<br />'. $prova->getData();
echo '<br />'. $prova->dateDiff($prova2);

