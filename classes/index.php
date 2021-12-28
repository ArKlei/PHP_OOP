<?php


spl_autoload_register(function () {
    include './Abstrakcija.php';
    include './Companies.php';
	include './Furniture.php';
	include '../Helpers/www.php';
});

$sba = new Companies('SBA Home','Joniškės g.21, Klaipėda',rand(1,100));
echo 'Dalis iš parent klasės Companies'.$sba -> data();

echo 'Dalis iš child klasės Furniture, bet pirmiausia grupės tinklapio adresas iš tėvinės klasės<p>';
echo Furniture::takeFromParentText();
echo Furniture::takeFromParentWww();

echo Furniture::returnGroup();
$furniture_company = new Furniture('AB Klaipėdos baldai','Joniškės g.21, Klaipėda',rand(1,100),'baldų grupė');

echo $furniture_company->data();

$www = new Helper();

echo '<h2>Grupės tinklapio adresas: <a href="'.$www::WWW.'">'.$www::WWW.'</a>';