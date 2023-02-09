<?php
$mainurl="http://localhost/employee_management_system/";
$baseurl="http://localhost/employee_management_system/assets/";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl; ?>css/bootstrap-grid.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src='main.js'></script>
    <style>
        body
        {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background-color: whitesmoke;
        }
        .navbar-brand
        {
            color: white !important;
            font-size: 30px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-left: 2%;
        }
        .navbar 
        {
            width: 100%;
            height: auto;
            background-color: #0a3cd1;
        }
        .navbar-link
        {
            margin-left: 15%;
            margin-top: 2%;
        }
        .navbar-link li 
        {
            display: inline-block;
        }
        .navbar-link a 
        {
            color: white;
            font-size: 25px;
            text-decoration: none;
            list-style-type: none;
            font-weight: 200;
            padding: 5px 15px;
        }
        .card-body
        {
            background-color: white;
        }
        
    </style>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-md  p-2">
    <!-- logo here -->
    <a href="#" class="navbar-brand">EMPLOYEE MANAGEMENT SYSTEM</a>
    <!-- navbar menu -->
    <!-- toggle button -->
    <button type="button" class="navbar-toggler btn btn-lg bg-white" data-bs-toggle="collapse" data-bs-target="#btnToggle">
        <i class="bi bi-grid"></i>
    </button>

    <div class="collapse navbar-collapse" id="btnToggle">
        <ul class="navbar-link">
            <li><a href="<?php echo $mainurl;?>"><i class="bi bi-house"></i>Home</a></li>
            <li><a href="<?php $mainurl;?>addemployee">Add Employee</a></li>
            <li><a href="<?php $mainurl;?>viewemployee">View Employee</a></li>
        </ul>
    </div>
</nav>