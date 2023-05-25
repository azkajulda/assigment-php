<?php

class TicTacToe
{
    private $board;
    private $currentPlayer;

    public function __construct()
    {
        $this->board = [
            ['', '', ''],
            ['', '', ''],
            ['', '', ''],
        ];
        $this->currentPlayer = 'X';
    }

    public function playMove($row, $col)
    {
        if ($this->isValidMove($row, $col)) {
            $this->board[$row][$col] = $this->currentPlayer;
            $this->currentPlayer = ($this->currentPlayer === 'X') ? 'O' : 'X';
            return true;
        }

        return false;
    }

    public function isValidMove($row, $col)
    {
        if ($row < 0 || $row >= 3 || $col < 0 || $col >= 3) {
            return false;
        }

        if ($this->board[$row][$col] !== '') {
            return false;
        }

        return true;
    }

    public function checkWin()
    {
        // Check rows
        for ($i = 0; $i < 3; $i++) {
            if ($this->board[$i][0] !== '' && $this->board[$i][0] === $this->board[$i][1] && $this->board[$i][0] === $this->board[$i][2]) {
                return true;
            }
        }

        // Check columns
        for ($i = 0; $i < 3; $i++) {
            if ($this->board[0][$i] !== '' && $this->board[0][$i] === $this->board[1][$i] && $this->board[0][$i] === $this->board[2][$i]) {
                return true;
            }
        }

        // Check diagonals
        if ($this->board[0][0] !== '' && $this->board[0][0] === $this->board[1][1] && $this->board[0][0] === $this->board[2][2]) {
            return true;
        }

        if ($this->board[0][2] !== '' && $this->board[0][2] === $this->board[1][1] && $this->board[0][2] === $this->board[2][0]) {
            return true;
        }

        return false;
    }

    public function printBoard()
    {
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo $this->board[$i][$j];
                if ($j < 2) {
                    echo ' | ';
                }
            }
            echo "\n";
            if ($i < 2) {
                echo '---------';
                echo "\n";
            }
        }
    }
}

// Main program
$game = new TicTacToe();

// Simulate playing moves
$game->playMove(0, 0);
$game->playMove(1, 1);
$game->playMove(0, 1);
$game->playMove(1, 2);
$game->playMove(0, 2);

// Print the final board
$game->printBoard();


class Person
{
  protected $name;
  protected $age;
  public function getName()
  {
    return $this->name;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  protected function callToProtectedNameAndAge()
  {
    return "{$this->name} is {$this->age} years old.";
  }
}

class Employee extends Person
{
  private $designation;
  private $salary;

  public function getAge()
  {
    return $this->age;
  }

  public function setAge($age)
  {
    $this->age = $age;
  }

  public function getDesignation()
  {
    return $this->designation;
  }

  public function setDesignation($designation)
  {
    $this->designation = $designation;
  }

  public function getSalary()
  {
    return $this->salary;
  }

  public function setSalary($salary)
  {
    $this->salary = $salary;
  }

  public function getNameAndAge()
  {
    return $this->callToProtectedNameAndAge();
  }

}


$employee = new Employee();
$employee->setName('Bob Smith');
$employee->setAge(30);
$employee->setDesignation('Software Engineer');
$employee->setSalary('30K');
echo $employee->getName();
echo $employee->getAge();
echo $employee->getDesignation();
echo $employee->getSalary();
echo $employee->getNameAndAge();

class Kantor
{

    private $namaKantor;
    private $alamatKantor;
    private $nomorTeleponKantor;
    private $bidangIndustri;
    private $jumlahKaryawan;

    private function setDefaultData()
    {
        return $this;
    }

    private function setNamaKantor($namaKantor)
    {
        return $this->namaKantor = $namaKantor;
    }

    private function getNamaKantor()
    {
        return $this->namaKantor;
    }
    
    private function setAlamatKantor($alamatKantor)
    {
        return $this->alamatKantor = $alamatKantor;
    }

    private function getAlamatKantor()
    {
        return $this->alamatKantor;
    }

    private function setNomorTeleponKantor($nomorTeleponKantor)
    {
        return $this->nomorTeleponKantor = $nomorTeleponKantor;
    }

    private function getNomorTeleponKantor()
    {
        return $this->nomorTeleponKantor;
    }

    private function setBidangIndustri($bidangIndustri)
    {
        return $this->bidangIndustri = $bidangIndustri;
    }

    private function getBidangIndustri()
    {
        return $this->bidangIndustri;
    }

    private function setJumlahKaryawan($jumlahKaryawan)
    {
        return $this->jumlahKaryawan = $jumlahKaryawan;
    }

    private function getJumlahKaryawan()
    {
        return $this->jumlahKaryawan;
    }

    public function __set($name, $value)
    {
        switch ($name) {
            case 'namaKantor':
                return $this->setNamaKantor($value);
                break;

            case 'alamatKantor':
                return $this->setAlamatKantor($value);
                break;

            case 'nomorTeleponKantor':
                return $this->setNomorTeleponKantor($value);
                break;

            case 'bidangIndustri':
                return $this->setBidangIndustri($value);
                break;
                
            case 'jumlahKaryawan':
                return $this->setJumlahKaryawan($value);
                break;
            
            default:
                return $this->setDefaultData($value);
                break;
        }
    }

    public function __get($name)
    {
        switch ($name) {
            case 'namaKantor':
                return $this->getNamaKantor();
                break;

            case 'alamatKantor':
                return $this->getAlamatKantor();
                break;

            case 'nomorTeleponKantor':
                return $this->getNomorTeleponKantor();
                break;

            case 'bidangIndustri':
                return $this->getBidangIndustri();
                break;

            case 'jumlahKaryawan':
                return $this->getJumlahKaryawan();
                break;
            
            default:
                # code...
                break;
        }
    }

}

$kantor = new Kantor();
$kantor->namaKantor = 'Neuron';
$kantor->alamatKantor = 'Bubat regency';
$kantor->nomorTeleponKantor = '022213131';
$kantor->bidangIndustri = 'IT';
$kantor->jumlahKaryawan = 150;

class Message
{
  public function formatMessage($message)
  {
    return printf("<i>%s</i>", $message);
  }
}
class BoldMessage extends Message
{
  public function formatMessage($message)
  {
    return printf("<b>%s</b>", $message);
  }
}

$message = new Message();
$message->formatMessage('Hello World'); 
$message = new BoldMessage();
$message->formatMessage('Hello World');

// Define variables for each shape
$radius = 5;
$side = 10;
$width = 8;
$height = 6;
$base1 = 4;
$base2 = 6;
$length = 12;

// Calculate the area and perimeter/circumference of each shape
$circle_area = pi() * pow($radius, 2);
$circle_circumference = 2 * pi() * $radius;

$square_area = pow($side, 2);
$square_perimeter = 4 * $side;

$rectangle_area = $width * $height;
$rectangle_perimeter = 2 * ($width + $height);

$triangle_area = 0.5 * $base1 * $height;
$triangle_perimeter = $base1 + ($length / 2) + sqrt(pow($base1, 2) + pow($height, 2));

$trapezoid_area = 0.5 * ($base1 + $base2) * $height;
$trapezoid_perimeter = $base1 + $base2 + ($length / 2) + sqrt(pow(($base2 - $base1 + (2 * $height)) / 2, 2) + pow($length / 2, 2));

// Display the results
echo "Circle area: " . $circle_area . "<br />";
echo "Circle circumference: " . $circle_circumference . "<br />";
echo "Square area: " . $square_area . "<br />";
echo "Square perimeter: " . $square_perimeter . "<br />";
echo "Rectangle area: " . $rectangle_area . "<br />";
echo "Rectangle perimeter: " . $rectangle_perimeter . "<br />";
echo "Triangle area: " . $triangle_area . "<br />";
echo "Triangle perimeter: " . $triangle_perimeter . "<br />";
echo "Trapezoid area: " . $trapezoid_area . "<br />";
echo "Trapezoid perimeter: " . $trapezoid_perimeter . "<br />";


class KedalamanAir {
  private $gayaTolak;
  private $densitasAir;
  private $densitasBenda;
  private $volumeBenda;
  
  public function __construct($massaBenda, $volumeBenda) {
    $this->gayaTolak = $massaBenda * 9.81; // gaya tolak = massa x percepatan gravitasi (9.81 m/s^2)
    $this->densitasAir = 1000; // densitas air dalam kg/m^3
    $this->densitasBenda = $massaBenda / $volumeBenda; // densitas benda dalam kg/m^3
    $this->volumeBenda = $volumeBenda; // volume benda dalam m^3
  }
  
  public function hitungKedalaman() {
    $kedalaman = ($this->gayaTolak / ($this->densitasBenda - $this->densitasAir)) / $this->volumeBenda;
    return $kedalaman;
  }
}

// Contoh penggunaan
$massaBenda = 10; // dalam kg
$volumeBenda = 0.002; // dalam m^3
$kedalamanAir = new KedalamanAir($massaBenda, $volumeBenda);
echo "Kedalaman air = " . $kedalamanAir->hitungKedalaman() . " meter.";


class Balok {
  public $panjang;
  public $lebar;
  public $tinggi;
  
  public function __construct($panjang, $lebar, $tinggi) {
    $this->panjang = $panjang;
    $this->lebar = $lebar;
    $this->tinggi = $tinggi;
  }
  
  public function hitungVolume() {
    return $this->panjang * $this->lebar * $this->tinggi;
  }
  
  public function hitungLuasPermukaan() {
    return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
  }
}

class Kubus extends Balok {
  public function __construct($sisi) {
    parent::__construct($sisi, $sisi, $sisi);
  }
}

class Kerucut {
  public $jariJari;
  public $tinggi;
  
  public function __construct($jariJari, $tinggi) {
    $this->jariJari = $jariJari;
    $this->tinggi = $tinggi;
  }
  
  public function hitungVolume() {
    return (1/3) * pi() * pow($this->jariJari, 2) * $this->tinggi;
  }
  
  public function hitungLuasPermukaan() {
    $s = sqrt(pow($this->jariJari, 2) + pow($this->tinggi, 2));
    return pi() * $this->jariJari * $s;
  }
}

class Limas {
  public $luasAlas;
  public $tinggi;
  public $jumlahSisi;

  public function __construct($luasAlas, $tinggi, $jumlahSisi) {
    $this->luasAlas = $luasAlas;
    $this->tinggi = $tinggi;
    $this->jumlahSisi = $jumlahSisi;
  }
  
  public function hitungVolume() {
    return (1/3) * $this->luasAlas * $this->tinggi;
  }
  
  public function hitungLuasPermukaan() {
    return $this->luasAlas + (0.5 * $this->jumlahSisi * sqrt(4 * $this->tinggi * $this->tinggi + $this->jumlahSisi * $this->luasAlas));
  }
}

class Bola {
  public $jariJari;
  
  public function __construct($jariJari) {
    $this->jariJari = $jariJari;
  }
  
  public function hitungVolume() {
    return (4/3) * pi() * pow($this->jariJari, 3);
  }
  
  public function hitungLuasPermukaan() {
    return 4 * pi() * pow($this->jariJari, 2);
  }
}

class Prisma {
  public $luasAlas;
  public $tinggi;
  public $jumlahSisi;

  public function __construct($luasAlas, $tinggi, $jumlahSisi) {
    $this->luasAlas = $luasAlas;
    $this->tinggi = $tinggi;
    $this->jumlahSisi = $jumlahSisi;
  }
  
  public function hitungVolume() {
    return $this->luasAlas * $this->tinggi;
  }
  
  public function hitungLuasPermukaan() {
    return (2 * $this->luasAlas) + (2 * $this->jumlahSisi * $this->tinggi);
  }
}


$balok = new Balok(2, 3, 4);
echo $balok->hitungVolume();
echo $balok->hitungLuasPermukaan();

$kubus = new Kubus(5);
echo $kubus->hitungVolume();
echo $kubus->hitungLuasPermukaan();

$kerucut = new Kerucut(3, 5);
echo $kerucut->hitungVolume();
echo $kerucut->hitungLuasPermukaan();

$limas = new Limas(20, 10, 5);
echo $limas->hitungVolume();
echo $limas->hitungLuasPermukaan();

$bola = new Bola(7);
echo $bola->hitungVolume();
echo $bola->hitungLuasPermukaan();

$prisma = new Prisma(25, 10, 3);
echo $prisma->hitungVolume();
echo $prisma->hitungLuasPermukaan();


class Mahasiswa {
  // properti (variabel) untuk kelas Mahasiswa
  public $nama;
  public $nim;
  public $kelas;

  // metode (fungsi) untuk kelas Mahasiswa
  function set_nama($nama) {
    $this->nama = $nama;
  }

  function get_nama() {
    return $this->nama;
  }

  function set_nim($nim) {
    $this->nim = $nim;
  }

  function get_nim() {
    return $this->nim;
  }

  function set_kelas($kelas) {
    $this->kelas = $kelas;
  }

  function get_kelas() {
    return $this->kelas;
  }
}

// membuat objek Mahasiswa baru
$mahasiswa = new Mahasiswa();

// mengatur nilai properti objek Mahasiswa
$mahasiswa->set_nama("Siti");
$mahasiswa->set_nim("1234567");
$mahasiswa->set_kelas("A1");

// mendapatkan nilai properti objek Mahasiswa
echo "Nama: " . $mahasiswa->get_nama() . "<br>";
echo "NIM: " . $mahasiswa->get_nim() . "<br>";
echo "Kelas: " . $mahasiswa->get_kelas() . "<br>";


class Kalkulator {
  // fungsi untuk melakukan operasi penjumlahan
  function tambah($angka1, $angka2) {
    return $angka1 + $angka2;
  }

  // fungsi untuk melakukan operasi pengurangan
  function kurang($angka1, $angka2) {
    return $angka1 - $angka2;
  }

  // fungsi untuk melakukan operasi perkalian
  function kali($angka1, $angka2) {
    return $angka1 * $angka2;
  }

  // fungsi untuk melakukan operasi pembagian
  function bagi($angka1, $angka2) {
    return $angka1 / $angka2;
  }
}

// membuat objek kalkulator baru
$kalkulator = new Kalkulator();

// melakukan operasi penjumlahan
echo "10 + 5 = " . $kalkulator->tambah(10, 5) . "<br>";

// melakukan operasi pengurangan
echo "10 - 5 = " . $kalkulator->kurang(10, 5) . "<br>";

// melakukan operasi perkalian
echo "10 * 5 = " . $kalkulator->kali(10, 5) . "<br>";

// melakukan operasi pembagian
echo "10 / 5 = " . $kalkulator->bagi(10, 5) . "<br>";
