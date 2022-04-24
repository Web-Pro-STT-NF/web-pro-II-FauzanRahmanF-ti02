<?php
include_once "header.php";
include_once "sidebar.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Praktikum 2</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Praktikum 2</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Default box -->
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nilai Siswa</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <div class="container-card">
    <div class="row">
      <div class="col-12 bg-light pt-2">
        <h2><center>BELANJA ONLINE<center></h2>
</div>
</div>
<table class="table table-sm " style="width:30%; float: right; border:1px solid black;">
  <thead>
    <tr>
        <th class="table-primary">Daftar Harga</th>
    </tr>
  </thead>
    <tr>
        <td>TV : 4.200.000</td>
    </tr>
    <tr>
        <td>KULKAS : 3.100.000</td>
    </tr>
    <tr>
        <td>MESIN CUCI : 3.800.000</td>        
    </tr>
        <td class="table-primary"><b>Harga Dapat Berubah Setiap Saat</td>
    </tr>   
</table>
<br>
<br>
    <div>
<form method="POST" action="">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label"> Costumer</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Nama Costumer" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci" required="required"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <button name="kirim" type="kirim" class="btn btn-success">Kirim</button>
    </div>
  </div>
</form>

<div>
    <?php
$_nama   = isset($_POST['nama']) ? $_POST['nama'] : '';
$_produk = isset($_POST['produk']) ? $_POST['produk'] : '';
$_jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
$_produk = $_produk;


echo 'Nama : '. $_nama;
echo '<br>Produk Pilihan : '. $_produk;
echo '<br>Jumlah : '. $_jumlah;

if ($_produk == 'tv') {
    echo "<br>total harga : Rp. ".$_jumlah * 4200000;
 } elseif($_produk == 'kulkas') {
    echo "<br>total harga : Rp. ".$_jumlah * 3100000;
 } elseif($_produk == 'mesin_cuci') {
    echo "<br>total harga : Rp. ".$_jumlah * 3800000;
 }else {
     "silahkan pilih ";
 } 

?>
    
</div>

    </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    <!-- Default box -->
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">From nilai</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <div class="container mt-5">
<form method="GET" action="">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Name" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="PW">Pemograman Web</option>
        <option value="BD">Basis Data</option>
        <option value="UI/UX">UI/UX</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" placeholder="UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="tugas" name="tugas" placeholder="TUGAS" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="simpan" name="proses"/>
    </div>
  </div>
  
</form>
<?php
error_reporting(0);
$proses = $_GET['proses'];
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['uts'];
$nilai_uas = $_GET['uas'];
$nilai_tugas = $_GET['tugas'];

    echo 'proses : '.$proses;
    echo '<br/>nama : '.$nama;
    echo '<br/>matkul : '.$matkul;
    echo '<br/>nilai_uts : '.$nilai_uts;
    echo '<br/>nilai_uas : '.$nilai_uas;
    echo '<br/>nilai_tugas : '.$nilai_tugas;
?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- Default box -->
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nilai Siswa</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <div class="container card">
        <div class="row bg-light pt-3 fs-6" id="tengah">
            <div class="col-12">Sistem Penilaian</div>
        </div>
        <div class="row fs-4" id="tengah">
            <div class="col-12">Form Nilai Siswa
                <hr>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-12">
                <form method="POST" action="">
                    <div class="form-group row ">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row pt-3">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                        <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select">
                                <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                                <option value="Statistik Probilitas">Statistik Probilitas</option>
                                <option value="PPKN">PPKN</option>
                                <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                                <option value="Bahasa inggris">Bahasa Inggris</option>
                                <option value="ui/ux">ui/ux</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Jaringan Komputer">Jaringan Komputer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                        <div class="col-8">
                            <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row pt-3">
                        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                        <div class="col-8">
                            <input id="nilai_uas" name="nilai_uas" placeholder="Nilai_UAS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row pt-3">
                        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label> 
                        <div class="col-8">
                            <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row pt-3 pb-3">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><hr>
    <?php
        if (isset($_POST['proses'])){
            $proses = $_POST['proses'];
            $nama_siswa = $_POST['nama'];
            $mata_kuliah = $_POST['matkul'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_tugas = $_POST['nilai_tugas'];

            echo "Proses $proses";
            echo "<br/>Nama : $nama_siswa";
            echo "<br/>Mata Kuliah : $mata_kuliah";
            echo "<br/>Nilai UTS : $nilai_uts";
            echo "<br/>Nilai UAS : $nilai_uas";
            echo "<br/>Nilai Tugas : $nilai_tugas";

            $hasil_uts = intval($nilai_uts) * 0.3;
            $hasil_uas = intval($nilai_uas) * 0.35;
            $hasil_tugas = intval($nilai_tugas) * 0.35;
            $nilai_akhir = $hasil_uts + $hasil_tugas + $hasil_uas;
            
            echo "<br> <p>Nilai Anda : $nilai_akhir</p>";
            if( $nilai_akhir > 55){
                echo "<h3>LULUS</h3>";
            }else{
                echo "<h3>TIDAK LULUS</h3>";
            }
        

            $nilai_A = $nilai_akhir >= 85;
            $nilai_B = $nilai_akhir >= 70;
            $nilai_C = $nilai_akhir >= 56;
            $nilai_D = $nilai_akhir >= 36;
            $nilai_E = $nilai_akhir >= 0;
            if($nilai_A){
                echo "Grade : A";
            }elseif($nilai_B){
                echo "Grade : B";
            }elseif($nilai_C){
                echo "Grade : C";
            }elseif($nilai_D){
                echo "Grade : D";
            }elseif($nilai_E){
                echo "Grade : E";
            }else{
                echo "Grade : I";
            }
            

            switch(true){
                case ($nilai_A):
                    echo "<br/>Predikat : Sangat Memuaskan";
                    break;
                case ($nilai_B):
                    echo "<br/>Predikat : Memuaskan";
                    break;
                case ($nilai_C):
                    echo "<br/>Predikat : Cukup";
                    break;
                case ($nilai_D):
                    echo "<br/>Predikat : Kurang";
                    break;
                case ($nilai_E):
                    echo "<br/>Predikat : Sangat Kurang";
                    break;
                default:
                    echo "<br/>Tidak Ada";
            }
        }
    ?>
        
    </div>
 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

<?php
include_once "footer.php";
?>