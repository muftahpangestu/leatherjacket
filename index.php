<?php
include_once("Controller/ProdukController.php");
include_once("Model/Produk.php");
include_once("Model/ProdukDao.php");
include_once("Utility/Koneksi.php");

if(isset($_GET["menu"]))
{
    if($_GET["menu"]=="admin")
    {
        $produCont = new ProdukController();
        $produCont->ProdukVid();
    }
}

?>