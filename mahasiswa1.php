<?php

Class mahasiswa1 { //membuat kelas

	private $nama;
	private $nim;
	private $umur;
    private $ipk;
    private $goldar;
	
	//membuat setter
	function setNama($nama) {
		$this->nama = $nama;
	}
	function setNIM($nim){
		$this->nim = $nim;
	}
	function setUmur($umur){
		$this->umur = $umur;
	}
	function setIPK($ipk){
		$this->ipk = $ipk;
    }
    function setGolDar($goldar){
		$this->goldar = $goldar;
	}
	
	//membuat getter
	function getNama() {
		return $this->nama;
	}
	function getNIM() {
		return $this->nim;
	}
	function getUmur() {
		return $this->umur;
	}
	function getIPK() {
		return $this->ipk;
    }
    function getGolDar() {
		return $this->goldar;
	}
}

?>