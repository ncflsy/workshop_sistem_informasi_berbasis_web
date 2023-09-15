<?php
    class Person{
        public $nama, $umur, $jenis_kelamin;

        public function set_name($nama,$umur,$jenis_kelamin){
            $this->nama = $nama;
            $this->umur = $umur;
            $this->jenis_kelamin = $jenis_kelamin;
        }

        public function get_nama(){
            return $this->nama;
        }
    };
?>