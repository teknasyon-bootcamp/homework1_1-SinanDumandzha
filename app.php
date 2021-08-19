<?php

$age = 25;

if ($age >= 0 && $age <= 14) { // çocuk yaş aralığı kontrolü
    echo "Çocuk";
} elseif ($age >= 15 && $age <= 24) { // genç yaş aralığı kontrolü
    echo "Genç";
} elseif ($age >= 25 && $age <= 64) { // yetişkin yaş aralığı kontrolü
    echo "Yetişkin";
} elseif ($age > 64) { // yaşlı yaş aralığı kontrolü
    echo "Yaşlı";
} else { // geçersiz giriş kontrolü
    echo "Lütfen sadece pozitif değerler giriniz!";
}
