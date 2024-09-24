
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de ventas</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">

    <!-- Libreria Sweetallert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #40E0D0, #FF00FF);
            background-size: 400% 400%;
            animation: gradientAnimation 10s ease infinite;
            z-index: -1;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body class="hold-transition login-page">

<div class="background">
        <!-- <style>
            .background {
                
                display: flex !important;
                flex-direction: row !important;
                justify-content: !important;
                
            
            }
        </style> -->
</div>

<div class="cnt">
        <style>
            .cnt {
                width: 100vw !important;
                display: flex !important;
                flex-direction: row !important;
                justify-content:center !important;
                align-items: center !important;
                gap:3.5rem
            }
        </style>
    <!-- Animation -->
    <div class="animation">
        <style>
            .animation {
                position: relative;
                width: 20%;
                height: 80%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>      
        <div class="loop cubes">
            <div class="item cubes"></div>
            <div class="item cubes"></div>
            <div class="item cubes"></div>
            <div class="item cubes"></div>
            <div class="item cubes"></div>
            <div class="item cubes"></div>
            <!-- Style -->
            <style>
                /* From Uiverse.io by gsperandio */
                .cubes {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform-style: preserve-3d;
                }

                .loop {
                    transform: rotateX(-35deg) rotateY(-45deg) translateZ(1.5625em);
                }

                @keyframes s {
                    to {
                        transform: scale3d(0.2, 0.2, 0.2);
                    }
                }

                .item {
                    margin: -1.5625em;
                    width: 3.125em;
                    height: 3.125em;
                    transform-origin: 50% 50% -1.5625em;
                    box-shadow: 0 0 0.125em currentColor;
                    background: currentColor;
                    animation: s 0.6s cubic-bezier(0.45, 0.03, 0.51, 0.95) infinite alternate;
                }

                .item:before,
                .item:after {
                    position: absolute;
                    width: inherit;
                    height: inherit;
                    transform-origin: 0 100%;
                    box-shadow: inherit;
                    background: currentColor;
                    content: "";
                }

                .item:before {
                    bottom: 100%;
                    transform: rotateX(90deg);
                }

                .item:after {
                    left: 100%;
                    transform: rotateY(90deg);
                }

                .item:nth-child(1) {
                    margin-top: 6.25em;
                    color: #fe1e52;
                    animation-delay: -1.2s;
                }

                .item:nth-child(1):before {
                    color: #ff6488;
                }

                .item:nth-child(1):after {
                    color: #ff416d;
                }

                .item:nth-child(2) {
                    margin-top: 3.125em;
                    color: #fe4252;
                    animation-delay: -1s;
                }

                .item:nth-child(2):before {
                    color: #ff8892;
                }

                .item:nth-child(2):after {
                    color: #ff6572;
                }

                .item:nth-child(3) {
                    margin-top: 0em;
                    color: #fe6553;
                    animation-delay: -0.8s;
                }

                .item:nth-child(3):before {
                    color: #ffa499;
                }

                .item:nth-child(3):after {
                    color: #ff8476;
                }

                .item:nth-child(4) {
                    margin-top: -3.125em;
                    color: #fe8953;
                    animation-delay: -0.6s;
                }

                .item:nth-child(4):before {
                    color: #ffb999;
                }

                .item:nth-child(4):after {
                    color: #ffa176;
                }

                .item:nth-child(5) {
                    margin-top: -6.25em;
                    color: #feac54;
                    animation-delay: -0.4s;
                }

                .item:nth-child(5):before {
                    color: #ffce9a;
                }

                .item:nth-child(5):after {
                    color: #ffbd77;
                }

                .item:nth-child(6) {
                    margin-top: -9.375em;
                    color: #fed054;
                    animation-delay: -0.2s;
                }

                .item:nth-child(6):before {
                    color: #ffe49a;
                }

                .item:nth-child(6):after {
                    color: #ffda77;
                }
            </style>
        </div>
    </div>
    <!-- Login box -->
    <div class="login-box">
        <!-- /.login-logo -->

        <style>
            body {
                background: linear-gradient(to right, purple, lightblue);
            }
        </style>

        <center>
        <img src="../assets/logo-triplexxx.png" alt="" width="200px">
        </center>
        <br>
        <div class="container">
        <div class="card card-outline card-primary box">
            <style>
                /* From Uiverse.io by joe-watson-sbf */
                .container {
                    color: white;
                    position: relative;
                    font-family: sans-serif;
                }

                .container::before,
                .container::after {
                    content: "";
                    background-color: #fab5704c;
                    position: absolute;
                }

                .container::before {
                    border-radius: 50%;
                    width: 6rem;
                    height: 6rem;
                    top: 30%;
                    right: 7%;
                }

                .container::after {
                    content: "";
                    position: absolute;
                    height: 3rem;
                    top: 8%;
                    right: 5%;
                    border: 1px solid;
                }

                .container .box {
                    width: 100%;
                    padding: 1rem;
                    background-color: rgba(255, 255, 255, 0.074);
                    border: 1px solid rgba(255, 255, 255, 0.222);
                    -webkit-backdrop-filter: blur(20px);
                    backdrop-filter: blur(20px);
                    border-radius: 0.7rem;
                    transition: all ease 0.3s;
                }

                .container .box {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                }

                .container .box .title {
                    font-size: 2rem;
                    font-weight: 500;
                    letter-spacing: 0.1em;
                }

                .container .box div strong {
                    display: block;
                    margin-bottom: 0.5rem;
                }

                .container .box div p {
                    margin: 0;
                    font-size: 0.9em;
                    font-weight: 300;
                    letter-spacing: 0.1em;
                }

                .container .box div span {
                    font-size: 0.7rem;
                    font-weight: 300;
                }

                .container .box div span:nth-child(3) {
                    font-weight: 500;
                    margin-right: 0.2rem;
                }

                .container .box:hover {
                    box-shadow: 0px 0px 20px 1px #ffbb763f;
                    border: 1px solid rgba(255, 255, 255, 0.454);
                }
            </style>
            <div class="card-header text-center">
                <h2 style="color: white; font-size: 1.5em">Sales System</h2>
                <h1 style="color: white; font-weight: bold; font-size: 2.5em;">TRIPLE XXX</h1>

            </div>
            <div class="card-body">
                <p class="login-box-msg" style="color: white;">Ingrese sus datos</p>

                <form action="../app/controllers/login/ingreso.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control input" placeholder="Email">  
                        <style>
                            .input {
                                font-family: "SF Pro";
                                max-width: 190px;
                                padding: 0.875rem;
                                font-size: 1rem;
                                border: 1.5px solid #000;
                                border-radius: 0.5rem;
                                box-shadow: 2.5px 3px 0 #000;
                                outline: none;
                                transition: ease 0.25s;
                            }

                            .input:focus {
                                box-shadow: 5.5px 7px 0 black;
                            }
                        </style>
                    </div>
                    <div class="input-group mb-3 justify-content-center">
                        <input type="password" name="password_user" class="form-control input w-100" placeholder="Password">
                        <style>
                            .input {
                                font-family: "SF Pro";
                                max-width: 400px;
                                padding: 0.875rem;
                                font-size: 1rem;
                                border: 1.5px solid #000;
                                border-radius: 0.5rem !important;
                                box-shadow: 2.5px 3px 0 #000;
                                outline: none;
                                transition: ease 0.25s;
                            }

                            .input:focus {
                                box-shadow: 5.5px 7px 0 black;
                            }
                        </style>
                    </div>
                    <hr>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block" style="color:white; background: #1b2631; border-radius: 16px; font-weight: bold;">
                                Ingresar
                            </button>
                            
                            <!-- <style>
                                .btn-primary:hover {
                                    color:white
                                    background: #606060;
                                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                                }
                            </style> -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <style>
                    /* From Uiverse.io by ShadowShahriar */
                    .btn-primary {
                        --border-radius: 15px;
                        --border-width: 4px;
                        appearance: none;
                        position: relative;
                        padding: 1em 2em;
                        border: 0;
                        background-color: #E0E0E0;
                        font-family: "Roboto", Arial, "Segoe UI", sans-serif;
                        font-size: 18px;
                        font-weight: 500;
                        color: #fff;
                        z-index: 2;
                    }

                    .btn-primary::after {
                        --m-i: linear-gradient(#000, #000);
                        --m-o: content-box, padding-box;
                        content: "";
                        position: absolute;
                        left: 0;
                        top: 0;
                        width: 100%;
                        height: 100%;
                        padding: var(--border-width);
                        border-radius: var(--border-radius);
                        background-image: conic-gradient(
                            #488cfb,
                            #29dbbc,
                            #ddf505,
                            #ff9f0e,
                            #e440bb,
                            #655adc,
                            #488cfb
                        );
                        -webkit-mask-image: var(--m-i), var(--m-i);
                        mask-image: var(--m-i), var(--m-i);
                        -webkit-mask-origin: var(--m-o);
                        mask-origin: var(--m-o);
                        -webkit-mask-clip: var(--m-o);
                        mask-composite: exclude;
                        -webkit-mask-composite: destination-out;
                        filter: hue-rotate(0);
                        animation: rotate-hue linear 700ms infinite;
                    }

                    @keyframes rotate-hue {
                        to {
                            filter: hue-rotate(1turn);
                        }
                    }

                    .btn-primary,
                    .btn-primary::after {
                        box-sizing: border-box;
                    }

                    .btn-primary:active {
                        --border-width: 5px;
                    }
                    </style>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

<!-- jQuery -->
<script src="../public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/templeates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/templeates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
