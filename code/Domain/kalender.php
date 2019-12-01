<?php
class Kalender {
	private $_dag = null;
	private $_maand = null;
	private $_jaar = null;
	private $_uur = null;

  //In deze contrsuct functie geven we de waarde van maand, dag, jaar en uur mee zodat we deze kunnen gerbuiken.
	public function __construct($dag, $maand, $jaar, $uur) {
		$this->_dag = $dag;
		$this->_maand = $maand;
		$this->_jaar = $jaar;
		$this->_uur = $uur;
	}
  
  //Hier zorgen we ervoor dat we de waarde van dag kunnen oproepen.
  public function GetDag() {
    return $this->_dag;
  }
  
  //Hier zorgen we ervoor dat we de waarde van maand kunnen oproepen.
  public function GetMaand() {
    return $this->_maand;
  }
  
  //Hier zorgen we ervoor dat we de waarde van jaar kunnen oproepen.
  public function GetJaar() {
    return $this->_jaar;
  }
 
  //Hier zorgen we ervoor dat we de waarde van uur kunnen oproepen.
  public function GetUur() {
    return $this->_uur;
  }
  
  //Deze functie zorgt ervvoor dat de datum wordt weergegevn op de website.
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