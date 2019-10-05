<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome To Refresh Inventory</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Century Gothic;

        }
        header{
            background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("../hotel6.jpg");
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
        ul{
            float: right;
            list-style-type: none;
            margin-top: 25px;
        }
        ul li{
            display: inline-block;
        }
        ul li a{
            text-decoration: none;
            color: #fff;
            padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.6s ease;
        }
        ul li a:hover{
            background-color: #fff;
            color: #000;
        }
        ul li.active a{
            background-color: #fff;
            color: #000;
        }
        .logo img{
            float: left;
            width: 150px;
            height: auto;
        }
        .main{
            max-width: 1200px;
            margin: auto;
        }
        .title{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .title h1{
            color: #fff;
            font-size: 40px;
            font-family: cursive;
            font-stretch: normal;
            font-weight: 100;

        }
        .button{
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .btn{
            border: 1px solid #fff;
            padding: 10px 30px;
            color: #fff;
            text-decoration: none;
            transition: 0.6s ease;
        }
        .btn:hover{
            background-color: #fff;
            color: #000;
        }
    </style>

</head>
<body>

      <header>
            <div class="main">
                <div class="logo">
                    <img src="../refreshlogo.png">
                </div>
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href='/profiledetails'>Profile</a></li>
                </ul>
            </div>
            <div class="title">
                <h1>Welcome To The Refresh Inventory</h1>
            </div>

            <div class="button">
                <a href='/about' class="btn">About Refresh</a>
                <a href='/dash' class="btn">Manage Inventory</a>
      </header>



</body>
</html>
