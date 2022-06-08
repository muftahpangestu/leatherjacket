<?php
    class ProdukController
    {
        private $produkDao;

        function __construct() {
            $this->produkDao = new ProdukDao();
        }


        public function ProdukVid() {
            

            //ini untuk insert
            if (isset($_POST['btnSubmitProduk'])) {
                $nama = FILTER_INPUT(INPUT_POST, 'catname');
                $nama = TRIM($nama);

                if ($nama == "") {
                    $msg = "Gagal";
                } else {
                    $objekCat = new CategoryDao;
                    $result = $this->categoryDao->insert_category($nama);
                    if ($result == FALSE)
                        $msg = "gagal";
                    else
                        $msg = "sukses";
                }
            }
            require_once 'View/Add-form.html';
        }
    }

?>