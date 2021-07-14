<?php 
include('config.php');
if(isset($_POST['up_buku']))
{
    if(!isset($_FILES['gambar_buku']['tmp_name'])){
        echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
    }
    else
    {
        $file_size = $_FILES['gambar_buku']['size'];
        $file_type = $_FILES['gambar_buku']['type'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        {
            $image   = addslashes(file_get_contents($_FILES['gambar_buku']['tmp_name']));
            $judul_buku = $_POST['judul_buku'];
            $pengarang = $_POST['pengarang'];
            $penerbit = $_POST['penerbit'];
            $kategori = $_POST['kategori'];
            $synopsis = $_POST['synopsis'];
            $harga = $_POST['harga'];
            $diskon = $_POST['diskon'];
            mysqli_query($koneksi,"insert into buku values ('','$judul_buku','$pengarang','$penerbit','$synopsis','$kategori','$image','$file_type','$file_size','$harga','$diskon')");
            header("location:index_upload.php?pesan=berhasil");
        }
        else
        {
            header("location:index_upload.php?pesan=gagal");
            echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
    }
}
?>