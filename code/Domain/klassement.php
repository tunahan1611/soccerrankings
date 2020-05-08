<?php 
require_once(__DIR__ . "/team.php");
require_once(__DIR__ . "/competitie.php");

class Klassement {
	private $_teams = array();
  
  //Deze functie zorgt ervoor dat de array met alle teams en punten, wordt geranschikt volgens punnten.
	public function TeamsRanschikken(Team $teams) {
    $this->_teams[] = $team;
    
    //arsort ( array &$array [, int sort_punten = SORT_NUMERIC ] ) : bool;
	}
  //In deze dunctie wordt de database aangemaakt met alle ploegen en hun punten, voor doelpunten, tegen doelpunten en hun doelen saldo.
  function GetDatabase() {
  $teams = array(
  array("clubnaam" => "AFC Bournemouth", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Arsenal", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Aston Villa", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Brighton & Hove Albion", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Burnley", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Chelsea", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Crystal Palace", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Everton", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Leicester City", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Liverpool", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Manchester City", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Manchester United", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Newcastle United", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Norwich City", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Sheffield United", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Southampton", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Tottenham Hotspur", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Watford", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "West Ham", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),

  array("clubnaam" => "Wolverhampton Wanderers", 
  "punten" => $punten,
  "Doelpunten voor" => $voorDoelpunten,
  "Doelpunten tegen" => $tegenDoelpunten,
  "Verschil" => $saldo ),
  );
    return $teams;
  }
} 
?>