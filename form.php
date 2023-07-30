<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 入力値を取得する

    $date = date("Y-m-d H:i:s"); 
    $company=$_POST["company"];
    $department=$_POST["department"];
    $job=$_POST["job"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $tel=$_POST["tel"];
    $title=$_POST["title"];
    $content=$_POST["content"];

    // 入力値をCSVファイルに保存する

    $fp = fopen('Inquiry.csv', 'a');
    fputcsv($fp,array(
        $date,$company,$department,$job,
        $name,$email,$tel,$title,$content));
    fclose($fp);

    header("Location: form.html");


}
?>