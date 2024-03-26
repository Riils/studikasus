
<?php

//Mencari tahun kabisat dan non kabisat dari data berikut :
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

foreach ($data as $list) {
    if($list["tahun"]% 4==0){
        echo $list['nama'] . ": Lahir pada tahun kabisat ({$list["tahun"]})" ."<br>";
    } else{
        echo $list['nama'] . ": bukan Lahir pada tahun kabisat ({$list["tahun"]})" ."<br>";
    }
}

?>