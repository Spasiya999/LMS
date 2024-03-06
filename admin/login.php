<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <?php include 'particles/css/css.php'; ?>
</head>

<body>
    <?php include 'particles/navbar.php'; ?>
    <!-- Main -->
    <div class="container mt-3 w-50">
        <div class="row">
            <div class="col-lg">
                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="controller/login.php" method="post">
                            <div class="row">
                                <div class="col-lg">
                                    <div class="mb-3">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" aria-describedby="firstName">
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="mb-3">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" aria-describedby="lastName">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="mb-3">
                                        <label for="phoneNumber" class="form-label">Phone Number</label>
                                        <input type="email" class="form-control" id="phoneNumber" aria-describedby="phoneNumber">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg">
                                    <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                        <select class="form-select" aria-label="role">
                                            <option selected>Select Role</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Instructor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg">
                                <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" aria-describedby="password">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main -->
    <?php include 'particles/js/js.php'; ?>
</body>

</html>