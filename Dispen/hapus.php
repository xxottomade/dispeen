<?php
    include 'fungsi.php';
        $id = $_GET["id"];
    if (hapus ($id)) {
    echo "
        <script>
        alert('data berhasil di hapus');
        document.location.href = 'awal.php';
        </script>
        ";
    }else {
    echo "
        <script>
        alert('data gagal di hapus');
        document.location.href = 'awal.php';
        </script>
    ";
}
?>