<?php
    // CSVファイルからユーザー情報を検索する

    $fp=fopen("Inquiry.csv","r");


    echo "
    <table border=\"1\">
    <tr>
    <th align=\"center\">日付</th>
    <th align=\"center\">名前</th>
    <th align=\"center\">件名</th>
    </tr>";

    $num=0;

    while($row=fgetcsv($fp))
    {
        echo "
        <tr>
        <td align=\"center\">$row[0]</td>
        <td align=\"center\">$row[4]</td>
        <td align=\"center\"><a href=\"male.php?id=$num\">$row[7]</a></td>
        </tr>";
        $num++;
    }
    
    echo "</table>";



    fclose($fp);

?>
