<?php
class Team {
	private $_naam = "";
	private $_source = "";

  //In deze functie worden de waarde van naam en source meegeven als parameter.
	public function __construct (string $naam , string $source) {
		$this->_naam = $naam;
		$this->_source = $source;
	}

  //	Genereert de HTML code om een InhoudstafelSlide te tonen op het scherm
	public function GetHTMLCode() : string {
    $source = $this->_source;
    return "<img src='$source'>";
	}
}
?>