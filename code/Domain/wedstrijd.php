<?php
class Wedstrijden {
	private $_aantalPuntenThuisTeam = 0;
	private $_aantalPuntenUitTeam = 0;
	private $_goalsUitTeam = 0;
	private $_goalsThuisTeam = 0;
  private $_eindstand = null;


	public function __construct(integer $aantalPuntenThuisTeam, integer $aantalPuntenUitTeam) {
		$this->_aantalPuntenThuisTeam = $aantalPuntenThuisTeam;
		$this->_aantalPuntenUitTeam = $aantalPuntenUitTeam;
	}
  
	public function StandBijhouden(integer $goalsUitTeam, integer $goalsThuisTeam) {
		$this->_goalsUitTeam = $goalsUitTeam;
		$this->_goalsThuisTeam = $goalsThuisTeam;
	}
  
	public function PuntenGeven(integer $aantalPuntenThuisTeam, integer $aantalPuntenUitTeam, integer $goalsUitTeam, integer $goalsThuisTeam) {	
		if ($goalsThuisTeam > $goalsUitTeam) {
			$aantalPuntenThuisTeam + 3;
		}
		
		if ($goalsThuisTeam < $goalsUitTeam) {
			$aantalPuntenUitTeam + 3;
		}
		
		if ($goalsThuisTeam == $goalsUitTeam) {
			$aantalPuntenThuisTeam + 1;
			$aantalPuntenUitTeam + 1;
		}
	}
	
	
}
?>