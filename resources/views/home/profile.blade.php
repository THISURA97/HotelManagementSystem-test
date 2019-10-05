<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

<style>
body{
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("../hotel2.jpg");
    height: 90vh;
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.loginbox{
    width: 320px;
    height: 480px;
    background: #000 transparent;
    color: #fff;
    top: 50%;
    left: 80%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 00 20px;
    text-align: center;
    font-size: 27px;
}
.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login input{
    width: 100%;
    margin-bottom: 30px;
}
.loginbox input[type="text"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 50px;
    color: #12c9e6;
    font-size: 20px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #052761;
    color: #fff;
    font-size: 20px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #052761;
    color: #fff;
}
.loginbox a{
    text-decoration: none;
    font-size: 15px;
    line-height: 20px;
    color: darkgrey;
}
</style>    
</head>
<body>
    <div class="loginbox">
    <img src="../profilelogo1.jpg" class="avatar">
        <h1>Admin Profile</h1>
        <br>
        <form>
            <p>Admin ID</p>
            <input type="text" name="" placeholder="Enter your ID number">
            
            <p>Name</p>
            <input type="text" name="" placeholder="Enter your name">
            
            <p>Contact Number</p>
            <input type="text" name="" placeholder="Enter your contact details">
            
            <p>Email</p>
            <input type="text" name="" placeholder="Enter your e-mail address">
            
            <br>
            <input type="submit" name="" value="Submit">
            <a href="#">Don't have an account?</a>
        </form>    

    </div>
    
</body>
</html>