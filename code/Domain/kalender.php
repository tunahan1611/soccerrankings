<?php
class Kalender {
	private $_dag = null;
	private $_maand = null;
	private $_jaar = null;
	private $_uur = null;

	public function __construct($dag, $maand, $jaar, $uur) {
		$this->_dag = $dag;
		$this->_maand = $maand;
		$this->_jaar = $jaar;
		$this->_uur = $uur;
	}
  
  public function GetDag() {
    return $this->_dag;
  }
  
  public function GetMaand() {
    return $this->_maand;
  }
  
  public function GetJaar() {
    return $this->_jaar;
  }
  
  public function GetUur() {
    return $this->_uur;
  }
  
  public function DatumWeergeven() {
    $result = "$this->_dag/";
    $result .= "$this->_maand/";
    $result .= "$this->_jaar ";
    $result .= $this->_uur;

  return $result;
  }
  
}
$match1 = new Kalender ("15", "11", "2019", "16:45");
echo $match1->DatumWeergeven();
?>