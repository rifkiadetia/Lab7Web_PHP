<?php
function hitungDiskon($harga, $persen) {
    $potongan = $harga * ($persen / 100);
    return $harga - $potongan;
}

// Function tambahan
function hitungLuas($panjang, $lebar) {
    return $panjang * $lebar;
}

function cekKelulusan($nilai) {
    return $nilai >= 60 ? "Lulus" : "Tidak Lulus";
}

$hargaAkhir = hitungDiskon(150000, 10);
echo "Harga setelah diskon: Rp" . number_format($hargaAkhir, 0, ",", ".");
echo "<br>Luas persegi panjang: " . hitungLuas(8, 4);
echo "<br>Status: " . cekKelulusan(75);
?>