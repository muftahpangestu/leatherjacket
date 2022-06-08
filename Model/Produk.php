<?php
class Produk
{
    private $kodeProduk;
    private $namaProduk;
    private $hargaProduk;
    private $gambarProduk;
    private $deskripsiProduk;
    private $tanggalDitambahProduk;

    


    function getKodeProduk()
    {
        return $kodeProduk;
    }

    function setKodeProduk($kode)
    {
        $this->kodeProduk = $kode;
    }

    function getNamaProduk()
    {
        return $namaProduk;
    }

    function setNamaProduk($nama)
    {
        $this->namaProduk = $nama;
    }

    function getHargaProduk()
    {
        return $hargaProduk;
    }

    function setHargaProduk($harga)
    {
        $this->hargaProduk = $harga;
    }

    function getGambarProduk()
    {
        return $gambarProduk;
    }

    function setGambarProduk($gambar)
    {
        $this->gambarProduk = $gambar;
    }

    function getDeskripsiProduk()
    {
        return $deskripsiProduk;
    }

    function setDeskripsiProduk($deskripsi)
    {
        $this->deskripsiProduk = $deskripsi;
    }

    function getTanggalDitambahProduk()
    {
        return $tanggalDitambahProduk;
    }

    function setTanggalDitambahProduk($tanggalDitambah)
    {
        $this->tanggalDitambahProduk = $tanggalDitambah;
    }

}

?>