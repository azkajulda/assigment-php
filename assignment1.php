<?php

$data = <<<'EOD'
X, -9\\\10\100\-5\\\0\\\\, A
Y, \\13\\1\, B
Z, \\\5\\\-3\\2\\\800, C
EOD;

// Menghapus karakter "\" yang berlebihan
$data = preg_replace('/\\\\+/', '\\', $data);

// Memisahkan data menjadi baris-baris
$lines = explode("\n", $data);

// Array untuk menyimpan hasil output
$output = array();

foreach ($lines as $line) {
  // Memisahkan baris menjadi komponen-komponen
  $components = explode(',', $line);
  
  $value = trim($components[0]);
  $numbers = explode('\\', trim($components[1]));
  $group = trim($components[2]);
  
  $index = 1;
  
  // Memproses setiap angka dalam komponen kedua
  foreach ($numbers as $number) {
    $output[] = array(
      'value' => $value,
      'number' => $number,
      'group' => $group,
      'index' => $index
    );
    $index++;
  }
}

// Mengurutkan array output berdasarkan angka secara ascending
usort($output, function($a, $b) {
  return $a['number'] <=> $b['number'];
});

// Menampilkan hasil output
foreach ($output as $line) {
  echo $line['value'] . ', ' . $line['number'] . ', ' . $line['group'] . ', ' . $line['index'] . "\n";
}
?>