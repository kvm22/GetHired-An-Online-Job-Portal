<!DOCTYPE html>
<html lang="en">
<head>
    <title>Background Video</title>
    <link rel="stylesheet" type="text/css" href="">
    <style>        
*{
    margin: 0;
    padding: 0;
}
.header{
    background: rgba(0, 0, 100, 0.2);
    height: 100vh;
}
.video-background{
    position: absolute;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
    width: 100%;
    height: auto;
    z-index: -1;
}

.welcome-msg{
    position: relative;
    text-align: center;
    font-family: 'Open Sans', 'Helvetica Neue', sans-serif;
    color: #fff;
    top: 290px;
}
.welcome-msg h1{
    font-size: 60px;
    font-weight: bold;
    margin-bottom: 30px;
}
.btn{
    font-size: 18px;
    color: #fff;
    margin: 5px;
    padding: 7px 22px;
    text-decoration: none;
    border: 1px solid coral;
    border-radius: 25px;
}
.btn-checkout{
    background-color: #ff7f5075;
    transition: .5s;
}
.btn-subscribe{
    background-color:#ff7f5075;
    transition: .5s;
}

@media(max-aspect-ratio:16/9)
{
    .video-background
    {
        width: auto;
        height: 100px;

    }
}
    </style>
</head>
<body>
    <section class="header">
        <video autoplay loop class="video-background" muted plays>
            <source src="intro.mp4" type="video/mp4" >
        </video>

        <div class="welcome-msg">
            <h1>Get-Hired </h1>
            <a href="login1.php" class="btn btn-checkout">Login</a>
        </div>
    </section>
    
</body>
</html>