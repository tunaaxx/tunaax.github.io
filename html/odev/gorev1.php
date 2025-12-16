<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Görev 1: Tek Sayılar</title>
</head>
<body>
    <h3>1-100 Arası Tek Sayılar</h3>
    <hr>
    
    <?php
    // 1'den 100'e kadar döngü kuruyoruz
    for ($i = 1; $i <= 100; $i++) {
        
        // Sayının 2'ye bölümünden kalan 0 değilse tektir
        if ($i % 2 != 0) {
            echo $i . " - ";
        }
    }
    ?>
</body>
</html>