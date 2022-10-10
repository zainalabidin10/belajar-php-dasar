<?php 
require("koneksi.php");
require('query.php');
$email = $_GET['user_fullname'];
$obj = new crud;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
    body {
        color: #404E67;
        background: #F5F7FA;
        font-family: 'Open Sans', sans-serif;
    }
    .table-wrapper {
        width: 800px;
        margin: 30px auto;
        background: #fff;
        padding: 20px;	
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
        height: 30px;
        font-weight: bold;
        font-size: 12px;
        text-shadow: none;
        min-width: 100px;
        border-radius: 50px;
        line-height: 13px;
    }
    .table-title .add-new i {
        margin-right: 4px;
    }
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
        cursor: pointer;
        display: inline-block;
        margin: 0 5px;
        min-width: 24px;
    }    
    table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
    table.table td a.add i {
        font-size: 24px;
        margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
    table.table .form-control.error {
        border-color: #f50000;
    }
    table.table td .add {
        display: none;
    }
    </style>
</head>
<body>
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="col-sm-8"><h1>Selamat Datang <b><?= $email; ?></b></h1></div>
                </div>
                <table border="1" class="table table-bordered">
                    <tr>
                        <td>No</td>
                        <td>Email</td>
                        <td>Nama</td>
                        <td>Aksi</td>
                    </tr>
                    <?php 
                    $data=$obj->lihatData();
                    $no = 1;
                    if($data->rowCount()>0){
                    while($row = $data->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['user_email']; ?></td>
                        <td><?= $row['user_fullname']; ?></td>
                        <td>
                            <a class="edit" title="Edit" data-toggle="tooltip" href="edit.php?id=<?= $row["id"]; 
                            ?>"><i class="material-icons">&#xE254;</a>
                            <a class="delete" title="Delete" data-toggle="tooltip" href="hapus.php?id=<?= $row['id'];
                             ?>"><i class="material-icons">&#xE872;</a>
                        </td>
                    </tr>
                    <?php 
                    $no++;
                    } }?>
                </table>
            </div>
        </div>
    </div>
</body></html>