<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Görev 2: Tablo Oluştur</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { border-collapse: collapse; margin-top: 15px; }
        td { border: 2px solid #000; padding: 10px; text-align: center; font-weight: bold; }
        .input-group { margin-bottom: 10px; }
    </style>
</head>
<body>

    <h3>Tablo Oluşturma Formu</h3>

    <form method="post">
        <div class="input-group">
            Satır Sayısı: <input type="number" name="satir" min="1" required>
        </div>
        <div class="input-group">
            Sütun Sayısı: <input type="number" name="sutun" min="1" required>
        </div>
        <button type="submit" name="btnOlustur">Tabloyu Çiz</button>
    </form>

    <hr>

    <?php
    // Butona basıldıysa işlemleri yap
    if (isset($_POST['btnOlustur'])) {
        $satir = intval($_POST['satir']);
        $sutun = intval($_POST['sutun']);

        echo "<h4>$satir x $sutun Tablosu (Rastgele Sayılar)</h4>";
        echo "<table>";

        // Satır döngüsü
        for ($x = 0; $x < $satir; $x++) {
            echo "<tr>";
            
            // Sütun döngüsü
            for ($y = 0; $y < $sutun; $y++) {
                // 1 ile 100 arası rastgele sayı üret
                $sayi = rand(1, 100);
                echo "<td>" . $sayi . "</td>";
            }
            
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>

</body>
</html>