<?php
include "models/model_peminjaman.php";

$ambildata = new Peminjaman($connection);

if (@$_GET['act'] == '') {
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Peminjaman</h2>
            <ol class="breadcrumb">
                <li><a href="assets/pages/index.html"><i class="icon-dashboard"></i>Data Peminjaman</a></li>
            </ol>
        </div>
       <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table width="100%" class="table table-striped table-bordered table-hover" id="datatables">
                <thead>
                <tr>
                    <th class="text-center">Id_Anggota</th>
                    <th>Nama Anggota </th>
                    <th>Kode Buku</th>
                    <th>Tanggal_Pinjam</th>
                    <th>Tanggal_Kembali</th>
                    <th>Lama Pinjam</th>
                    <th>Keadaan Buku</th>
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                 // $no = 1;
                $tampil = $ambildata->tampil();
                 while ($data = $tampil->fetch_object()) {
                ?> 
                <tr>
                   <td align="center"><?php echo $data->id_anggota_peminjaman; ?></td>
                   <td><?php echo $data->nama_anggota;?></td>
                   <td><?php echo $data->kode_buku;?></td>
                   <td><?php echo $data->tgl_pinjam;?></td>
                   <td><?php echo $data->tgl_kembali;?></td>
                   <td><?php echo $data->lama_pinjam;?></td>
                   <td><?php echo $data->keadaan_buku;?></td>
                   <td>
                    <a id="edit_peminjaman" data-toggle="modal" data-target="#edit" data-id="<?php echo $data->id_anggota_peminjaman;?>" data-nama="<?php echo $data->nama_anggota;?>" data-kodebuku="<?php echo $data->kode_buku;?>" data-tglpinjam="<?php echo $data->tgl_pinjam;?>" data-tglkembali="<?php echo $data->tgl_kembali;?>" data-lamapinjam="<?php echo $data->lama_pinjam;?>" data-keadaanbuku="<?php echo $data->keadaan_buku;?>">
                    <button class="btn btn-info btn-xs"><i class="fa fa-edit"></i>Edit</button>
                  </a>
                    <a href="?page=admin_peminjaman&act=del&id=<?php echo $data->id_anggota_peminjaman; ?>" onclick="return confirm('Apakah ingin menghapus data?')">
                       <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Delete</button></a>
                   </td>
                  </tr>
                <?php
                } ?>
                </tbody>
            </table>
        </div>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>Tambah Peminjaman</button>&nbsp; &nbsp; &nbsp;
        <?php
        include 'tambah.peminjaman.php';
        include 'edit.peminjaman.php';
        ?>
    </div>
</div>
<?php
} else if (@$_GET['act'] == 'del') {

    $ambildata->delete($_GET['id']);
    header("location: ?page=admin_peminjaman");
}