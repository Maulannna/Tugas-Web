<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Web2</title>
</head>
<body>
    
    <form method="POST">
        <label for="total_belanja">Total Belanja Rp :</label>
        <input type="number" id="total_belanja" name="total_belanja" required><br><br>

        <label for="member">Apakah Anda Member?</label>
        <input type="radio" id="member_yes" name="member" value="1" required> Ya
        <input type="radio" id="member_no" name="member" value="0" required> Tidak<br><br>

        <input type="submit" value="Hitung Total">
    </form>

    <?php

    function hitungTotalBelanja($total_belanja, $member) {
        // Diskon awal untuk member
        if ($member) {
            $diskon_member = 0.10; // 10% diskon untuk member
            $total_setelah_diskon_member = $total_belanja - ($total_belanja * $diskon_member);
        } else {
            $total_setelah_diskon_member = $total_belanja;
        }

        // Potongan harga tambahan 
        if ($total_setelah_diskon_member >= 500000) {
            $potongan_tambahan = 0.10; // 10% untuk total >= 500.000
        } elseif ($total_setelah_diskon_member >= 300000) {
            $potongan_tambahan = 0.05; // 5% untuk total >= 300.000
        } else {
            $potongan_tambahan = 0; 
        }

        // Hitung total setelah potongan tambahan
        $total_akhir = $total_setelah_diskon_member - ($total_setelah_diskon_member * $potongan_tambahan);

        return $total_akhir;
    }

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $total_belanja = $_POST['total_belanja'];
        $member = $_POST['member'];

        // Hitung total akhir
        $total_akhir = hitungTotalBelanja($total_belanja, $member);

        echo "<h3>Hasil Perhitungan Total Belanja</h3>";
        echo "<p>Total Belanja: Rp " . number_format($total_belanja, 2, ',', '.') . "</p>";
        echo "<p>Status Member: " . ($member ? 'Ya' : 'Tidak') . "</p>";
        echo "<p>Total yang Harus Dibayar: Rp " . number_format($total_akhir, 2, ',', '.') . "</p><br>";
    }
    ?>

    
</body>
</html>
