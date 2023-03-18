<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP dasar</title>
        <font size="7">SELAMAT DATANG</font><br>


<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
<h2>Tugas Pemograman Web 2</h2>
 <form method="post">
   <form>
        <div>
            <label>Nama</label> <br>
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>
        <div>
            <label>Tanggal Lahir: </label> <br>
            <input type="text" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
   <br> 
     Pekerjaan = <input type="radio" name="pekerjaan" value="arsitek"/>arsitek 
     <input type="radio" name="pekerjaan" value="nelayan"/>nelayan
     <input type="radio" name="pekerjaan" value="dokter"/>dokter
     <input type="radio" name="pekerjaan" value="programmer"/>programmer<br /><br />  
    </div>
       <button>kirim</button>
        </div>
    </form>
 </form>
 <?php
       # Memanggil Nama
       echo 'Nama: ' . $_POST['nama'];

       # Merubah Tanggal Lahir menjadi Umur (Tahun)
       $tgl_lahir = @$_POST['tgl_lahir'];
       $lahir = new DateTime($tgl_lahir);
       $hari_ini = new DateTime();
       $diff = $hari_ini->diff($lahir);

       # Memanggil fungsi umur yg sudah dibuat diatas
       echo "<br> Umur: ". $diff->y ." Tahun";

       # Memanggil pekerjaan
       echo "<br> Pekerjaan: ". $_POST['pekerjaan'];

       # Kondisi if pekerjaan untuk menentukan gaji
       $pekerjaan = @$_POST['pekerjaan'];

       if($pekerjaan == "arsitek"){
           echo '<br> Gaji: Rp. 20.000.000,-';
       }elseif($pekerjaan == "nelayan"){
           echo '<br> Gaji: Rp. 2.000.000,-';
       }elseif($pekerjaan == "dokter"){
           echo '<br> Gaji: Rp. 40.000.000,-';
       }elseif($pekerjaan == "programmer"){
           echo '<br> Gaji: Rp. 50.000.000,-';
       }
   ?>
</body>
</html>