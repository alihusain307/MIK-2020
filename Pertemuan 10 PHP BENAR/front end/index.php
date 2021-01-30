<?php 
include "../koneksi.php";

$sql = $koneksi->query("SELECT * FROM produk");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Webpage</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <style type="text/css">
        .container {
            width: 800px;
            margin: 0 auto;
        }
        * {
            font-family: 'Caveat', cursive;
        }
        .header {
            background-color: #FFF;
            min-height: 50px;
            text-align: center;
        }
        .logo img {
            width: 200px;
        }

        .menu ul {
            padding: 0;
        }
        .menu ul li {
            display: inline-block;
            position: relative;
        }
        .menu ul li a {
            padding: 10px 20px;
            text-decoration: none;
        }
        .menu ul li:hover ul.submenu {
            display: block;
        }
        ul .submenu {
            background-color: #eee;
            border:1px solid #ccc;
            text-align:left;
            position: absolute;
            top: 20px;
            left: 0;
            display: none; 
        }
        ul .submenu li {
            display: block;
            position: relative;
        }
        ul .submenu li a {
            padding: 5px 10px;
            display: block;

        }
        .jumbotron  {

            width: 100%;
            padding: 80px 40px;
            box-sizing: border-box;
            text-align:center;
            color: white;
            background-color: #aaa;
            background-image: url(https://images.unsplash.com/photo-1606851090703-7f56b076c50d?ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80);
            background-size: cover;
            position: relative;
        }
        .jumbotron h2, .jumbotron p {
            position: relative;
            font-size: 20pt;
        }
        .overlay{
            top:0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity:0.4;
            position: absolute;
        }
        .content {
            background-color: whitesmoke;
            min-height: 600px;
            overflow: auto;
        }
        .thumbnail {
            background-color: white;
            text-align: center;
            padding: 10px;
            width: 225px;
            margin: 10px;
            float: left;
        }
        .thumbnail img {
            width: 100%;
        }
        .footer   {
            background-color: #1CCEFA;
            min-height: 500px;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Logo Produk</h1>
            <div class="logo">
                <img src="http://i.ibb.co/7bQ4mVX/images.png" alt="">
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">About</a>
                        <ul class="submenu">
                            <li>
                                <a href="">CV</a>
                            </li>
                            <li>
                                <a href="">Education</a>
                            </li>
                            <li>
                                <a href="">Portofolio</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                    <li>
                        <a href="">login</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="jumbotron">
            <div class="overlay"></div>
            <h2>Welcome to My Home</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum ullam, non veniam incidunt laudantium ex perferendis provident, debitis natus, maiores minima consequuntur. Amet magni asperiores ipsum numquam non blanditiis voluptas.</p>
        </div>

        <div class="content">
            <h2>produk</h2>
            <?php foreach ($sql as $row) : ?>
                <div class="thumbnail">
                    <img src="images/<?= $row['gambar'];?>" alt="">
                    <h2><a href="detail.php?id=<?= $row['id']; ?>" style="text-decoration: none;"><?= $row['nama'];?></a></h2>
                    <p><?='Rp. '.number_format($row['harga'],2,',',',');?></p>
                </div>
            <?php endforeach ?>
        </div>
        <div class="footer">
            <p>copyright 2020 my Page</p>
        </div>
    </body>
    </html>