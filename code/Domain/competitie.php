<?php
require_once(__DIR__ . "/klassement.php");

class Competitie {
	private $_klassement = null;
	private $_voorDoelpunten = 0;
	private $_tegenDoelpunten = 0;
	private $_punten = 0;

	public function __construct(integer $punten , integer $voorDoelpunten , integer $tegenDoelpunten ) {
		$this->_punten = $punten;
		$this->_voorDoelpunten = $voorDoelpunten;
		$this->_tegenDoelpunten = $tegenDoelpunten;
	}

	public function VerschilBerekenen() {
		$saldo = $voorDoelpunten - $tegenDoelpunten;
		return $saldo;
	}
  
  public function PuntenOptellen() {
    $huidigePunten = $punten + $punten;
  }
  
  public function VoorDoelpuntenOptellen() {
    $huidigeVoorDoelpunten = $voorDoelpunten + $voorDoelpunten;
  }
  
  public function TegenDoelpuntenOptellen() {
    $huidigeTegenDoelpunten = $tegenDoelpunten + $tegenDoelpunten;
  }
}
?>