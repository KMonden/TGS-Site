<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // CSVファイルからユーザー情報を検索する

    $fp=fopen("Inquiry.csv","r");


    $id=$_GET["id"];

    $num=0;

    while($row=fgetcsv($fp))
    {
        if($num==$id)
        {
       
        echo "日付:$row[0]<br>";
        echo "企業名:$row[1]<br>";
        echo "部署名:$row[2]<br>";
        echo "役職名:$row[3]<br>";
        echo "名前:$row[4]<br>";
        echo "Eメール:$row[5]<br>";
        echo "tel:$row[6]<br>";
        echo "件名:$row[7]<br>";
        echo "内容:<br>$row[8]<br>";

        break;
        }

        $num++;

    }

}

?>