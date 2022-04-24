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
                    <h1>Praktikum 4</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Praktikum 4</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Default box -->
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Lingkaran</h3>

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
                <?php

                   echo "NILAI PHI : " . Lingkaran::PHI;
                   $lingkar1 = new Lingkaran(10);
                   $lingkar2 = new Lingkaran(4);
               
                   echo "<br>Luas Lingkaran I : " . $lingkar1->getLuas();
                   echo "<br>Luas Lingkaran II : " . $lingkar2->getLuas();
               
                   echo "<br>Keliling Lingkaran I : " . $lingkar1->getKeliling();
                   echo "<br>Keliling Lingkaran II : " . $lingkar2->getKeliling();
               ?> 
               <?php 
 class Lingkaran { // buka class
private $jari;
const PHI = 3.14;
function __construct( $r )
{
    $this->jari = $r;
 }
function getLuas()
 {
    return self::PHI * $this->jari * $this->jari ;
 }
function getKeliling()
 {
    return 2 * self::PHI * $this->jari;
 }
} // tutup class

?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Menghitung Persegi Panjang</h3>

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
      <?php
      $pp1 = new persegiPanjang(10, 14);
      $pp2 = new persegiPanjang(15, 8);

      echo "<br/><br/>Luas persegi Panjang I = " . $pp1->getluas();
      echo "<br/>Luas persegi Panjang II = " . $pp2->getluas();

      echo "<br/><br/>keliling persegi Panjang I = " . $pp1->getkeliling();
      echo "<br/>keliling persegi Panjang II = " . $pp2->getkeliling();
      ?>

      <?php
      class persegiPanjang
      {
        private $panjang;
        private $lebar;
        function __construct($p, $l)
        {
          $this->panjang = $p;
          $this->lebar = $l;
        }
        function getluas()
        {
          return $this->panjang * $this->lebar;
        }
        function getkeliling()
        {
          return 2 * ($this->panjang + $this->lebar);
        }
      }
      ?>


    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
      <!-- Default box -->
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Mahasiswa</h3>

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
              <div class="content">
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><b>WEB02</b></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    PHP OOP
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">1</a></li>
                                    <li><a class="dropdown-item" href="#">2</a></li>
                                    <li><a class="dropdown-item" href="#">3</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Review PHP
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">1</a></li>
                                    <li><a class="dropdown-item" href="#">2</a></li>
                                    <li><a class="dropdown-item" href="#">3</a></li>
                                </ul>
                            </li>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="" aria-label="">
                                <button class="btn btn-success" type="submit">SUBMIT</button>
                            </form>
                        </ul>
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><b>Login</b></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   <b> Dropdown</b>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">1</a></li>
                                    <li><a class="dropdown-item" href="#">2</a></li>
                                    <li><a class="dropdown-item" href="#">3</a></li>
                                </ul>
                    </div>
                </div>
            </nav>
            
            <div class="row mt-4">
                <div class="col-4">
                    <span><b>Show</b></span>
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">10
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">1</a></li>
                            <li><a class="dropdown-item" href="#">2</a></li>
                            <li><a class="dropdown-item" href="#">3</a></li>
                            <li><a class="dropdown-item" href="#">4</a></li>
                            <li><a class="dropdown-item" href="#">5</a></li>
                            <li><a class="dropdown-item" href="#">6</a></li>
                            <li><a class="dropdown-item" href="#">7</a></li>
                            <li><a class="dropdown-item" href="#">8</a></li>
                            <li><a class="dropdown-item" href="#">9</a></li>
                            <li><a class="dropdown-item" href="#">10</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <span><b>entries</b></span>
                </div>
                <div class="col-8 d-flex justify-content-end">
                    <label for="" class=""><b>Search : </b></label>
                    <input type="text" class="ms-1">
                </div>
            </div>
            <div class="row">
                <?php
                $ns1 = new Mahasiswa("00012", "Alif Baihak", "TI", 2019, 3.9, "Cum Laude");
                $ns2 = new Mahasiswa("00014", "Hilda", "SI", 2019, 1.9, "Cukup");
                $ns3 = new Mahasiswa("00015", "Fani", "TI", 2019, 2.9, "Baik");
                $ns4 = new Mahasiswa("00016", "Rizal", "SI", 2019, 3.2, "Memuaskan");

                $ar_nilai = [$ns1, $ns2, $ns3, $ns4];

                ?>
<?php
    class Mahasiswa{
        var $nim, $nama, $thn_angkatan, $prodi, $ipk;
        function __construct($nim, $nama, $thn_angkatan, $prodi, $ipk){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->thn_angkatan = $thn_angkatan;
            $this->prodi = $prodi;
            $this->ipk = $ipk;
        }
        function predikat_ipk(){
            if ($this->ipk >= 3.75 && $this->ipk <= 4.0)
                return "Cum Laude";
            elseif($this->ipk <2.0) 
                return "Cukup";
            elseif ($this->ipk >= 2.0 && $this->ipk < 3.0)
                return "Baik";
            elseif ($this->ipk >= 3.0 && $this->ipk < 3.75)
                return "Memuaskan";
        }
    }
?>
                
                <div class="container-fluid">
                <table class="table table-success table-striped"><br>
                        <thead>
                            <tr>
                                <th scope="col">No<i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">NIM <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Nama <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Prodi <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Thn Angkatan <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">IPK <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Predikat <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Ubah <i class="bi bi-chevron-expand"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            foreach ($ar_nilai as $ns) {
                                echo '<tr><td>' . $nomor . '</td>';
                                echo '<td>' . $ns->nim . '</td>';
                                echo '<td>' . $ns->nama . '</td>';
                                echo '<td>' . $ns->prodi . '</td>';
                                echo '<td>' . $ns->thn_angkatan . '</td>';
                                echo '<td>' . $ns->ipk . '</td>';
                                echo '<td>' . $ns->predikat_ipk() . '</td>';
                                echo '<td> <a><i class="bi bi-eye" style="color: blue"></i> <i class="bi bi-pencil" style="color: blue"></i></a></td>';
                                $nomor++;
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <span>Showing 1 to 4 of 4 entries</span>
                </div>
                <div class="col-8 d-flex justify-content-end">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row my-2 ">
                <hr>
            </div>
            <div class="row">
                
            </div>
        </div>
    </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card --        
            <?php
            include_once "footer.php";
            ?>