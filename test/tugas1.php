<?php
    class MobilLengkap{
        function nontonTV(){
            echo "TV dihidupkan\n";
            echo "TV mencari chanel\n";
            echo "TV menampilkan gambar\n";
        }
    }
    
    class MobilBMW extends MobilLengkap {
        // Tidak perlu mendefinisikan ulang nontonTV, karena sudah diwarisi dari MobilLengkap
    }
    
    class MobilBMWberaksi extends MobilBMW {
        function hidupkanMobil(){
            echo "Mobil berhasil dihidupkan\n";
        }
    
        function matikanMobil(){
            echo "Mobil berhasil dimatikan\n";
        }
    
        function ubahGigi(){
            echo "Mobil berhasil diubah gigi\n";
        }
    }

    $mobil_bmw = new MobilBMWberaksi();
    $mobil_bmw->nontonTV();
    $mobil_bmw->hidupkanMobil();
    $mobil_bmw->matikanMobil();
    $mobil_bmw->ubahGigi();
    
?>