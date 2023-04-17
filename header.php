<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contoh Modularisasi</title>
    <link href="style.css" rel="stylesheet" type="text/stylesheet" media="screen" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #ccc;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: #333;
            text-decoration: none;
            padding: 5px;
        }

        nav a:hover {
            color: #fff;
            background-color: #333;
        }

        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            padding: 0;
            background-color: #333;
            color: #fff;
            text-align: center;
        }
    </style>
</head>

<body>
    
        <header>
            <h3>Praktikum 5</h3>
        </header>
        <nav>
            <a href="home">Home</a>
            <a href="input">Input Data</a>
        </nav>