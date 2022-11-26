<?php 
// tangkap data dari form submit
if(isset($_GET['id'])){
    $id = $_GET['id'];

    1. // Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","fakultas");

    2. // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }else{
        echo 'koneksi berhasil';
    }
    // buat sql query untuk insert ke database
    // buat query untuk delete
    $sql = "DELETE FROM mahasiswa WHERE id='$id' ";


    // jalankan query
    if (mysqli_query($con, $sql)) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
      
    mysqli_close($con);
}

?>