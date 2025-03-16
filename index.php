<?php
    include("credentials.php");
?>

<?php
    $curl = curl_init($endpoint);
    curl_setopt($curl,CURLOPT_HTTPHEADER, ["Authorization: Bearer $apiKey", "Content-Type: application/json"]);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);

    $json = json_decode($response, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "serverlist.php";
    ?>
</body>