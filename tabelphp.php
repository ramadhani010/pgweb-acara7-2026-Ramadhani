
<?php
    $Kecamatan = array("Moyudan", "Minggir", "Seyegan", "Godean", "Gamping");
    $Luas = array("27.62", "27.27", "26.63", "26.84", "29.25");
    $Jumlah_Penduduk = array("31497", "29886", "47129", "72028", "108675");
?>

<table border="1">
    <tr>
        <td>Kecamatan</td>
        <td>Luas</td>
        <td>Jumlah Penduduk</td>
    </tr>

    <?php
    for ($i = 0; $i < 5; $i++) {
        echo "<tr>";
        echo "<td>" . $Kecamatan[$i] . "</td>";
        echo "<td>" . $Luas[$i] . "</td>";
        echo "<td>" . $Jumlah_Penduduk[$i] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
