<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link type="text/css" href="/css/style.css" />
    <style type="text/css">
        .about-container{
            background-image: 
            linear-gradient(to right, rgba(142, 20, 222, 0.73), rgba(247, 17, 15, 0.92)),
            url('../images/photo-7f9fcf423740.jpg');
            width: 100%;height: 100%;min-height: 100vh;background-size: cover; color: #fff;}
        .container .nav-link,
        .container header a span{color: #fff;}
        .profile-section{margin: 0 0 25px 0;}
        .profile-photo img {width: 100%;border-radius: 20px;height: 350px;object-fit: cover;}
        .page-title{color: #fff;font-size: 50px;font-weight: bold;margin: 0 0 30px 0;}
        .content-section{font-size: 22px;color: #fff;}
        .f-cl-w{color: #fff;}
        .about-form .form-control{background: transparent;color: #fff;padding: 15px 10px;border-radius: 15px;}
        #map-section iframe{width: 100%; height: 250px; border-radius: 10px;}
        .about-form .form-check-input{background-color: transparent;border: 1px solid rgba(255, 255, 255);}
        .form-control::-webkit-input-placeholder {color: #fff;}
        .form-control:-moz-placeholder {color: #fff;}
        .form-control::-moz-placeholder {color: #fff;}
        .form-control::placeholder {color: #fff;}
        .form-control:-ms-input-placeholder {color: #fff;}
        .form-button{margin: 30px 0 0 0;}
        #form-message-warning, #form-message-success {display: none; }
        #form-message-warning {color: #B90B0B;}
        #form-message-success{color: #fff;font-size: 18px;font-weight: bold; }
        #contactForm .error {font-size: 15px;}
        .about-container .table{color: #fff;}
    </style>
    <title><?= ($title) ?></title>
</head>
<body>