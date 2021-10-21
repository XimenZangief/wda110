<style>
table{
    border-collapse: collapse;
    width:900px;
}
table td{
    border:1px solid #ccc;
    padding:10px;
}
</style>

<table>
    <?php
    for($j=1;$j<=9;$j++)
    {
        echo "<tr>";
        for($i=1;$i<=9;$i++)
            {echo "<td> $j x $i =" .($j*$i) ."</td>\n\t\t";}
        echo "</tr>";
    }
    ?>
</table>