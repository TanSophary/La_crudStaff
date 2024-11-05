<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Additional styling for sidebar */
        .left_model {
            height: 100vh;
            background-color: #f8f9fa;
            padding-top: 20px;
        }
        .left_model a {
            display: block;
            padding: 10px 20px;
            color: #333;
            text-decoration: none;
        }
        .left_model a:hover {
            background-color: #e2e6ea;
            border-radius: 5px;
        }
        .content-area {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Menu -->
            <nav class="col-md-3 col-lg-2 left_model">
                <h5 class="text-center mb-4">Menu</h5>
                <a href="/dashboard">Dashboard</a>
                <a href="/">Employee Information</a>
                <!-- Add more links here -->
            </nav>

            <!-- Main Content Area -->
            <div class="col-md-9 col-lg-10 content-area">
                @yield('index')
                @yield('add_new')
                @yield('detail')
                @yield('update')
                @yield('delete')
                @yield('dashboard')
            </div>
        </div>
    </div>
</body>
</html>
