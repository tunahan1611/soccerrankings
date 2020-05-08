<?php
class Wedstrijden {
	private $_aantalPuntenThuisTeam = 0;
	private $_aantalPuntenUitTeam = 0;
	private $_goalsUitTeam = 0;
	private $_goalsThuisTeam = 0;
  private $_eindstand = null;

  // In deze functie worden de waarde van de aantal punten van het thuisteam en het uitteam meegeven als parameter.
	public function __construct(integer $aantalPuntenThuisTeam, integer $aantalPuntenUitTeam) {
		$this->_aantalPuntenThuisTeam = $aantalPuntenThuisTeam;
		$this->_aantalPuntenUitTeam = $aantalPuntenUitTeam;
	}

  // In deze functie worden de waaarde van de goals van het thuis -en uitteam meegeven als parameter.
	public function StandBijhouden(integer $goalsUitTeam, integer $goalsThuisTeam) {
		$this->_goalsUitTeam = $goalsUitTeam;
		$this->_goalsThuisTeam = $goalsThuisTeam;
	}
  
  //Hier zorgen we ervoor dat we de punten kunnen verdelen.
	public function PuntenGeven(integer $aantalPuntenThuisTeam, integer $aantalPuntenUitTeam, integer $goalsUitTeam, integer $goalsThuisTeam) {	
		if ($goalsThuisTeam > $goalsUitTeam) {
			$this->_aantalPuntenThuisTeam = $aantalPuntenThuisTeam + 3;
		}
		
		if ($goalsThuisTeam < $goalsUitTeam) {
			$this->_aantalPuntenUitTeam = $aantalPuntenUitTeam + 3;
		}
		
		if ($goalsThuisTeam == $goalsUitTeam) {
			$this->_aantalPuntenThuisTeam = $aantalPuntenThuisTeam + 1;
			$this->_aantalPuntenUitTeam = $aantalPuntenUitTeam + 1;
		}
	}
	
	
}
?>