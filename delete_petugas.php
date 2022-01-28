<?php
if (isset($_GET['delete'])) {
    $id=$_GET['id'];
    $query_delete= mysqli_query($konek,"DELETE FROM petugas where id_petugas='$id'");

    if ($query_delete) {
        ?>
        <script>
            alert("data berhasil di delete");
            window.location.href='dashboard.php?page=petugas';
        </script>
        <?php
    }
}