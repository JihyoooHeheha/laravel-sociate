<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center mt-5">
                <div class="form w-50">
            <form action="login" method="post">
                <div class="mb-3">
                    <label for="Email" >Email</label>
                    <input type="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">
                    Login
                    </button>
                </div>
            </form>
            <a href="/auth/github/redirect" class="btn btn-light w-100">Login With github</a>
            </div>
        </div>
    </div>
</body>
</html>