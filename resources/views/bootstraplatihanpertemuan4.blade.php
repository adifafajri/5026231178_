<html>
    <head>
        <title>Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <style>
        body {
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .form-group {
            margin-bottom: 15px;
        }
        .form-control {
            background-color: #e9ecef;
            border: 1px solid #ced4da;

        }
        .btn-login {
            display: block;
            width: 35%;
            margin: auto;
            border-radius: 25px;
        }
        .text-danger {
            color: red;
            margin-bottom: 20px;
        }
        .login-as-teknisi {
            text-decoration: underline;
        }
        .footer-container {
            margin-top: auto;
            padding: 30px;
            background-color: #6a6a6a;
            text-align: center;
            width: 100%;
            color: white;
        }
        </style>
            <div class="container">
                    <div class="my-5 text-center">
                        <img src="Logo CekDong 1.png" alt="">
                    </div>

            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="login-container">
                            <form>
                                <div class="form-group">
                                    <label for="username"></label>
                                    <input type="text" class="form-control" id="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="password"></label>
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <div class="text-danger text-left">
                                    Wrong Password!
                                </div>
                                <button type="submit" class="btn btn-dark btn-login">Login</button>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-dark">Forgot Password</a>
                                </div>
                                <div class="text-center mt-2 login-as-teknisi">
                                    <a href="#" class="text-dark">Login As Teknisi</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid footer-container">
                Don't have an account yet? <span style="font-weight: bold; text-decoration: underline;">Create New</span>
            </div>
        </body>
    </head>
</html>
