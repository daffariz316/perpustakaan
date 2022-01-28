<?php
include('koneksi.php');
if (isset($_POST['save-edit'])) {
    $id =$_POST['id'];
    $nama = $_POST['nama'];
    $jbt = $_POST['jabatan'];
    $no_telp = $_POST['nomor_telp'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password =$_POST['password'];

        $options = [
            'cost' => 12,
        ];
        $password_enkript= password_hash($password, PASSWORD_BCRYPT, $options);

    $query_update = mysqli_query($konek,"UPDATE petugas 
    SET nama         = '$nama',
        jabatan      =  '$jbt',     
        nomor_telp     = '$no_telp',    
        alamat       = '$alamat',  
        username     = '$username',
        password     = '$password_enkript'
    WHERE id_petugas = '$id'");

   if ($query_update) {
        ?>
        <script>
            alert('Data Berhasil Diupdate')
            window.location.href='dashboard.php?page=petugas';
        </script>
        <?php
     }
}
?>