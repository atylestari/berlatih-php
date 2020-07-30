<?php
function skor_terbesar($arr){
//kode di sini
  $hasil = [];
  $native = [];
  $js = [];
  $Laravel = [];
  foreach ($data as $key => $row) {
    $nilai[$key] = $row['nilai'];
    $kelas[$key] = $row['kelas'];
  }

  array_multisort($kelas, SORT_DESC, $nilai, SORT_DESC, $data);

  for($i = 0; $i < count($data); $i++) {
    if($data[$i]['kelas'] == 'React Native') {
      $native[] = $data[$i];
    }
    else if($data[$i]['kelas'] == 'React JS') {
      $js[] = $data[$i];
    }
    else if($data[$i]['kelas'] == 'Laravel') {
      $Laravel[] = $data[$i];
    }
  }
  print_r($native);
  print_r($js);
  print_r($Laravel);

  $output = [];
  $nilai = 0;
  $nilai2 = 0;
  $nilai3 = 0;

  foreach ($hasil as $key => $akhir) {
    if($akhir['nilai'] > $nilai && $akhir['kelas'] == 'Laravel') {
      $nilai = $akhir['nilai'];
    }
    else if($akhir['nilai'] > $nilai2 && $akhir['kelas'] == 'React Native') {
      $nilai2 = $akhir['nilai'];
    }
    if($akhir['nilai'] > $nilai3 && $akhir['kelas'] == 'React JS') {
      $nilai3 = $akhir['nilai'];
    }

    $output[$akhir['kelas']] =
    [
      'nama' => $akhir['nama'],
      'kelas' => $akhir['kelas'],
      'nilai' => $akhir['nilai']
    ];
  }
  return $output;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>