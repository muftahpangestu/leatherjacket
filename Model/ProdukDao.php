<?php
class ProdukDao
{
    public function insert_Produk(Produk $produk) {
        $result = FALSE;
        try {
            $conn = Koneksi::connection();
            $conn->beginTransaction();
            $query = "INSERT INTO Produk (namaProduk,hargaProduk,gambarProduk,deskripsiProduk) VALUES (?,?,?,?)";
            $stmt = $conn->prepare($query);
         
            $stmt->bindValue(1, $produk->getNamaProduk(), PDO::PARAM_STR);
            $stmt->bindValue(2, $produk->getHargaProduk(), PDO::PARAM_STR);
            $stmt->bindValue(3, $produk->getGambarProduk(), PDO::PARAM_STR);
            $stmt->bindValue(4, $produk->getDeskripsiProduk(), PDO::PARAM_STR);
            $result = $stmt->execute();
            $conn->commit();
        } catch (PDOException $e) {
            $conn->rollback();
            echo $e->getMessage();
            die();
        }

        $conn = null;
        return $result;
    }
}

?>