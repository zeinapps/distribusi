<?php

namespace App;

class Terbilang {

    function kekata($x) {
        $x = abs($x);
        $angka = array("", "satu", "dua", "tiga", "empat", "lima",
            "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($x < 12) {
            $temp = " " . $angka[$x];
        } else if ($x < 20) {
            $temp = $this->kekata($x - 10) . " belas";
        } else if ($x < 100) {
            $temp = $this->kekata($x / 10) . " puluh" . $this->kekata($x % 10);
        } else if ($x < 200) {
            $temp = " seratus" . $this->kekata($x - 100);
        } else if ($x < 1000) {
            $temp = $this->kekata($x / 100) . " ratus" . $this->kekata($x % 100);
        } else if ($x < 2000) {
            $temp = " seribu" . $this->kekata($x - 1000);
        } else if ($x < 1000000) {
            $temp = $this->kekata($x / 1000) . " ribu" . $this->kekata($x % 1000);
        } else if ($x < 1000000000) {
            $temp = $this->kekata($x / 1000000) . " juta" . $this->kekata($x % 1000000);
        } else if ($x < 1000000000000) {
            $temp = $this->kekata($x / 1000000000) . " milyar" . $this->kekata(fmod($x, 1000000000));
        } else if ($x < 1000000000000000) {
            $temp = $this->kekata($x / 1000000000000) . " trilyun" . $this->kekata(fmod($x, 1000000000000));
        }
        return $temp;
    }

    function terbilang($x, $style = 4) {
        if ($x < 0) {
            $hasil = "minus " . trim($this->kekata($x));
        } else {
            $hasil = trim($this->kekata($x));
        }
        switch ($style) {
            case 1:
                $hasil = strtoupper($hasil);
                break;
            case 2:
                $hasil = strtolower($hasil);
                break;
            case 3:
                $hasil = ucwords($hasil);
                break;
            default:
                $hasil = ucfirst($hasil);
                break;
        }
        return $hasil;
    }

    public function rupiah($angka) {
        $rupiah = number_format($angka, 0, ',', '.');
        return $rupiah;
    }

    function bulan($bln) {
        $bulan = $bln;
        Switch ($bulan) {
            case 1 : $bulan = "Januari";
                Break;
            case 2 : $bulan = "Februari";
                Break;
            case 3 : $bulan = "Maret";
                Break;
            case 4 : $bulan = "April";
                Break;
            case 5 : $bulan = "Mei";
                Break;
            case 6 : $bulan = "Juni";
                Break;
            case 7 : $bulan = "Juli";
                Break;
            case 8 : $bulan = "Agustus";
                Break;
            case 9 : $bulan = "September";
                Break;
            case 10 : $bulan = "Oktober";
                Break;
            case 11 : $bulan = "November";
                Break;
            case 12 : $bulan = "Desember";
                Break;
        }
        return $bulan;
    }

}
