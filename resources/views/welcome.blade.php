<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>REST SERVER TEST</title>
</head>
<body>
    <div class="mb-5">
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand">REST SERVER TEST</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#usage">Usage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#endpoint">Endpoint</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#parameters">Parameters</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#operators">Operators</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container m-2 mb-5">
        <div class="col-lg-5">
            <h1>REST SERVER TEST</h1>
            <h5 class="text-secondary">The API Database Testing</h5>
            <p>This is a RESTful web service to obtain information from database testing, all content and information on the site are fake on learning purpose.</p>
        </div>
    </div>
    <div class="container m-2 mb-5" id="usage">
        <h1>Usage</h1>
        <br>
        <p>This API require BEARER TOKEN to access the database. You can get the token by <a href="/register">Register</a> first. If you already have an account you can create the token after <a href="/login">Login</a> then click "Create Token" at dashboard page. We will give you two token that have different ability. One called "Admin Token" that you can get access to manipulating data on database, the other called "Basic Token" for just only to read the database content.</p>
    </div>
    <div class="container col-lg-6 m-2 mb-5" id="endpoint">
        <h1>Endpoint</h1>
        <br>
        <div class="mb-3">
            <label class="form-label">Endpoint to request all data Customer :</label>
            <input type="text" class="form-control" value="http://rest-server.test/api/test/customer" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Endpoint to request all data Tagihan :</label>
            <input type="text" class="form-control" value="http://rest-server.test/api/test/tagihan" readonly>
        </div>
        <p>If you want to get data by ID, just add "/(id)" at the end of links above.</p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>