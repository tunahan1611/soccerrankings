<?php
class Eindstand {
	private $_scoreEersteTeam = 0;
  private $_scoreTweedeTeam = 0;

  // Deze functie houdt de score bij van beide teams.
	public function ScoreBijhouden(integer $scoreEersteTeam, integer $scoreTweedeTeam) {
		$this->_scoreEersteTeam = $scoreEersteTeam;
    $this->_scoreTweedeTeam = $scoreTweedeTeam;
	}
  
  //Hier zorgen we ervoor dat we de waarde van score kunnen oproepen.
  public function GetScore() {
    return $this->_scoreEersteTeam;
    return $this->_scoreTweedeTeam;
  }
}
?>