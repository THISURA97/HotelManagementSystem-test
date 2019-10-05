<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>

<style>
*{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}
body{
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("../hotel11.jpg");
    height: 100vh;
    background-size: cover;
    background-position: center;
}
.container{
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 100%;
}
.container span{
    color: white;
    text-transform: uppercase;
    display: block;
}
.text1{
    font-size: 50px;
    font-weight: 700;
    letter-spacing: 8px;
    margin-bottom: 20px;
    position: relative;
    animation: text 3s 1;
}
.text2{
    font-size: 20px;
    color: #095173;
}
.text3{
    font-size: 20px;
    color: #095173;
}
.text4{
    font-size: 20px;
    color: #095173;
}
@keyframes text{
    0%{
        color: black;
        margin-bottom: -40px;
    }
    30%{
        letter-spacing: 25px;
        margin-bottom: -40px;
    }
    85%{
        letter-spacing: 8px;
        margin-bottom: -40px;
    }
}

</style>    
</head>
<body>
    <div class="container">
        <span class="text1">Welcome To Hotel Refresh Hikkaduwa</span>
        <span class="text2">We have established 1986 and have well experienced in the field of resturants. 
        We have the largest resturent in Down South area more than 250 heads can be served at the same time 
        with all kind of Foods and Beverages.</span>  
        <br>
        <span class="text3">Dining atRefresh resturant is an exquise experience like no other. 
        Be it a romantic meal for two, a family celebration or a business lunch Refresh resturant offers 
        unparalleled dining options.</span>
        <br>
        <span class="text4">The focal point of the Refresh resturant is an award-winning seafood resturant 
        where the dinning experience embraces the real Sri Lankan lifestyle-fresh seafood, friendly service. </span>

    
    </div>
</body>
</html>