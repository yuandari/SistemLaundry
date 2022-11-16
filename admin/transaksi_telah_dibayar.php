<?php
$title = 'transaksi';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT transaksi.*,member.nama_member , detail_transaksi.total_harga, detail_transaksi.total_bayar FROM transaksi INNER JOIN member ON member.id_member = transaksi.member_id INNER JOIN detail_transaksi ON detail_transaksi.transaksi_id = transaksi.id_transaksi WHERE transaksi.id_transaksi = ' . $_GET['id'];
$data = ambilsatubaris($conn,$query);
?> 
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Data <?= $title ?></h4> </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center" style="padding-left: 50px;padding-right: 50px;">
                        <div class="bg-success" style="font-size: 125px;border-radius: 20px">
                            <i class="fa fa-check fa-10x text-white"></i>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3>Pesanan Atas Nama <?= $data['nama_member'] ?> Berhasil Di Bayar</h3>
                        <strong>Kode Invoice <?= $data['kode_invoice'] ?></strong><br><br>
                        <strong>Total Pembayaran Rp.<?= $data['total_harga'] ?></strong><br>
                        <strong>Total Uang Bayar Rp.<?= $data['total_bayar'] ?></strong><br>
                        <strong>Kembalian Rp.<?= $data['total_bayar'] - $data['total_harga'] ?></strong><br><br>
                        <a href="transaksi.php" class="btn btn-primary">Kembali Ke Menu Utama</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- table -->
    <!-- ============================================================== -->
    <div class="row">
        
    </div>
</div>
<?php
require'layout_footer.php';
