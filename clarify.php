<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fast Travel</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale= 1.0, user-scalable=no" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        button {
            font-size: 18px;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
        }
    </style>

    </head>

<body class="inner">

<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" id="12">
        <div class="container-fluid">
            <a id="logo1" class="navbar-brand" href="main.html"><img src="logo.jpg" alt="Logo" width="200" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="main.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <h1>Welcome to the Fast Travel!</h1>

    <button onclick="selectRole('admin')">I am an Admin</button>
    <button onclick="selectRole('customer')">I am a Customer</button>

    <script>
        function selectRole(role) {
            if (role === 'admin') {
                // Redirecting to the admin page
                window.location.href = 'admin_login.php';
            } else if (role === 'customer') {
                // Redirecting to the customer page
                window.location.href = 'login.php';
            }
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>