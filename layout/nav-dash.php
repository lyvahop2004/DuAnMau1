<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="./css/style.css">


<style>
    .btn-info {
        color: white;
    }
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="./dashboard.php">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <div class="flex">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index2.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <?php if (isset($user['username'])) { ?>
                                <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo "Hello " . $user['username']; ?>
                                </button>
                                <ul class="dropdown-menu">
                                    <!-- <li><a class="dropdown-item" href="dangki.php">Sign Up</a></li>
                                    <li><a class="dropdown-item" href="dangnhap.php">Login</a></li> -->
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            <?php } else { ?>
                                <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Tài Khoản
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="dangki.php">Sign Up</a></li>
                                    <li><a class="dropdown-item" href="dangnhap.php">Login</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            <?php } ?>
                        </div>
                    </li>
                </div>

            </ul>
        </div>
    </div>
</nav>