<?php
// ===== BAGIAN PEMROSESAN =====
function e($teks) {
    return htmlspecialchars((string)$teks, ENT_QUOTES, "UTF-8");
}

$data = null;
$error = [];
$nama = $nim = $prodi = $semesterInput = $email = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama          = trim($_POST["nama"] ?? "");
    $nim           = trim($_POST["nim"] ?? "");
    $prodi         = trim($_POST["prodi"] ?? "");
    $semesterInput = trim($_POST["semester"] ?? "");
    $email         = trim($_POST["email"] ?? "");

    if ($nama === "")  $error[] = "Nama wajib diisi.";
    if ($nim === "")   $error[] = "NIM wajib diisi.";
    if ($prodi === "") $error[] = "Program studi wajib diisi.";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }

    if (!ctype_digit($semesterInput) ||
        (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1–14.";
    }

    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 520px; margin: 30px auto; padding: 0 15px; }
        label { display: block; margin-top: 12px; font-weight: bold; }
        input { width: 100%; padding: 8px; box-sizing: border-box; }
        button { margin-top: 16px; padding: 10px 18px; cursor: pointer; }
        .error { background: #fdecea; border: 1px solid #f5c2c0; padding: 10px 15px; margin-top: 15px; }
        .sukses { background: #e8f5e9; border: 1px solid #b7dfb9; padding: 10px 15px; margin-top: 15px; }
        table { border-collapse: collapse; width: 100%; }
        td { padding: 6px; border-bottom: 1px solid #ddd; }
        td:first-child { width: 40%; font-weight: bold; }
    </style>
</head>
<body>
    <h2>Formulir Data Mahasiswa</h2>

    <!-- ===== FORM ===== -->
    <form method="POST" action="">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" value="<?= e($nama) ?>" required>

        <label for="nim">NIM</label>
        <input type="text" id="nim" name="nim" value="<?= e($nim) ?>" required>

        <label for="prodi">Program Studi</label>
        <input type="text" id="prodi" name="prodi" value="<?= e($prodi) ?>" required>

        <label for="semester">Semester (1–14)</label>
        <input type="number" id="semester" name="semester" min="1" max="14"
               value="<?= e($semesterInput) ?>" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= e($email) ?>" required>

        <button type="submit">Kirim</button>
        <button type="submit">Reset</button>
    </form>

    <!-- ===== TAMPILAN HASIL ===== -->
    <?php if ($error): ?>
        <div class="error">
            <strong>Terdapat kesalahan:</strong>
            <ul>
                <?php foreach ($error as $pesan): ?>
                    <li><?= e($pesan) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php elseif ($data): ?>
        <div class="sukses">
            <h3>Data berhasil diterima</h3>
            <table>
                <tr><td>Nama</td><td><?= e($data["nama"]) ?></td></tr>
                <tr><td>NIM</td><td><?= e($data["nim"]) ?></td></tr>
                <tr><td>Program Studi</td><td><?= e($data["prodi"]) ?></td></tr>
                <tr><td>Semester</td><td><?= e($data["semester"]) ?></td></tr>
                <tr><td>Email</td><td><?= e($data["email"]) ?></td></tr>
            </table>
        </div>
    <?php endif; ?>
</body>
</html>