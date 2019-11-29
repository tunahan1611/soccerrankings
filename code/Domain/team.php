<?php
class Team {
	private $_naam = "";
	private $_source = "";

	public function __construct (string $naam , string $source) {
		$this->_naam = $naam;
		$this->_source = $source;
	}

	public function GetHTMLCode() : string {
    $source = $this->_source;
    return "<img src='$source'>";
	}
}
?>