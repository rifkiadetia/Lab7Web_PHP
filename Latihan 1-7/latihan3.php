<?php
// Empat nama awal + tiga nama tambahan
$mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Rifki", "Ade", "Tia"];

echo "<h3>Daftar Mahasiswa</h3><ol>";
foreach ($mahasiswa as $nama) {
    echo "<li>" . htmlspecialchars($nama) . "</li>";
}
echo "</ol>";
?>