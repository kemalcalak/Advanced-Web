<?php
function dortislem($rakam1, $rakam2, $islem)
{
    echo 'Rakam1:' . $rakam1 . '<br/>';
    echo 'Rakam2:' . $rakam2 . '<br/>';
    echo 'İşlem:' . $islem . '<br/>';

    switch ($islem) {
        case 'Topla':
            $sonuc = $rakam1 + $rakam2;
            break;
        case 'Çıkar':
            $sonuc = $rakam1 - $rakam2;
            break;
        case 'Çarp':
            $sonuc = $rakam1 * $rakam2;
            break;
        case 'Böl':
            $sonuc = $rakam1 / $rakam2;
            break;
    }

    echo "Sonuç" . $sonuc . '<br/>';
}
