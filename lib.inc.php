<?php


function displayMenu($menu)
{
    echo "<ul>";

    foreach ($menu as $key => $value) {
        echo " <li> <a href=\"?page=$key\"> $value </a></li>";
    }

    echo "</ul>";

}

function tableMul($a, $color = 'red')
{
    echo "<table border='1' >";
    for ($i = 1; $i <= $a; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $a; $j++) {
            if ($i == 1 || $j == 1) {
                echo '<th style="background-color:' . $color . ' ">' . $i * $j . '</th>';
            } else {
                echo '<td>' . $i * $j . '</td>';
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

function displayMenuReq($menu)
{
    echo "<ul>";

    foreach ($menu as $value) {
        echo " <li> <a href=\"?page={$value['href']}\"> {$value['label']} </a></li>";

        if (isset($value['child']) && !empty($value['child'])) {
            echo "<li>".displayMenuReq($value['child'])."</li>";
        }
    }

    echo "</ul>";

}