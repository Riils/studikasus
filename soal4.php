<?php
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ],
];

$total = 0;
foreach($barang as $br){
    $kons = $br['harga_barang'] * $br['jumlah_beli'];
    $total += $kons;
     
}
echo"yang harus di bayar adalah Rp" . number_format($total, 0, ',','.');
?>