<?php
    class Mahasiswa{
        var $nim, $nama, $thn_angkatan, $prodi, $ipk;
        function __construct($nim, $nama, $thn_angkatan, $prodi, $ipk){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->thn_angkatan = $thn_angkatan;
            $this->prodi = $prodi;
            $this->ipk = $ipk;
        }
        function predikat_ipk(){
            if ($this->ipk >= 3.75 && $this->ipk <= 4.0)
                return "Cum Laude";
            elseif($this->ipk <2.0) 
                return "Cukup";
            elseif ($this->ipk >= 2.0 && $this->ipk < 3.0)
                return "Baik";
            elseif ($this->ipk >= 3.0 && $this->ipk < 3.75)
                return "Memuaskan";
        }
    }
?>