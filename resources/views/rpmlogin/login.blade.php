
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RPM Auction</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="container-fluid  d-none d-lg-block">
        <div class="row" style="font-family:sans-serif">
            <div class="col-7 position-relative"
                style="background-image: url(/images/Frame\ 22.png); background-size: 100% 100%; height: 750px;">
                <div class="">
                    <img src="/images/product bg.png" alt=""
                       style="width:100%; height:748px; opacity:0.1;">
                </div>
            </div>
            <div class="col-5 d-flex align-items-center justify-content-center p-5" style="height: 750px;">
                <div class="card shadow p-5 border-0 rounded-4 w-100">
                    <h3 class="text-center mb-3 mt-4 fw-bold">Login</h3>
                    <p class="text-center fw-bold" style="color: gray; font-size: 18px;">Welcome back to <span
                            style="color: #912940;">Salvage Auction</span>
                    </p>
                    <form class="mt-4">
                        <div class="mb-3">
                            <label for="Email" style="font-size: 13px;">Email</label>
                            <input type="email" style="font-size: 12px;"
                                class="form-control bg-light rounded-0 border-0" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="Password" style="font-size: 13px;">Password</label>
                            <input type="password" class="form-control bg-light rounded-0 border-0"
                                placeholder="Password">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" style="font-size: 11px;" for="remember">Remember
                                    Me</label>
                            </div>
                            <a href="#" class="text-decoration-none text-dark small" style="font-size: 11px;">Forgot
                                Password?</a>
                        </div>
                        <button type="submit" class="btn w-100 text-white mt-5 mb-4 rounded-0"
                            style="background-color:#912940">
                            LOG IN <span style="font-size: 12px;"><i class="bi bi-arrow-up-right ms-1"></i></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-block d-lg-none">
        <div class="row">
            <div class="col-12 vh-100 d-flex align-items-center justify-content-center p-4"
                style="background-image: url(/images/Frame%2022.png); background-size: cover; background-position: center;">

                <div class="card s-width shadow p-4 border-0 rounded-4 w-100 bg-white bg-opacity-75">
                    <h3 class="text-center mb-3 mt-4 fw-bold">Login</h3>
                    <p class="text-center fw-bold" style="color: gray; font-size: 18px;">
                        Welcome back to <span style="color: #912940;">Salvage Auction</span>
                    </p>
                    <form class="mt-4">
                        <div class="mb-3">
                            <label for="Email" style="font-size: 13px;">Email</label>
                            <input type="email" style="font-size: 12px;"
                                class="form-control bg-light rounded-0 border-0" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="Password" style="font-size: 13px;">Password</label>
                            <input type="password" class="form-control bg-light rounded-0 border-0"
                                placeholder="Password">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" style="font-size: 11px;" for="remember">Remember
                                    Me</label>
                            </div>
                            <a href="#" class="text-decoration-none text-dark small" style="font-size: 11px;">Forgot
                                Password?</a>
                        </div>

                        <button type="submit" class="btn w-100 text-white mt-5 mb-4 rounded-0"
                            style="background-color:#912940">
                            LOG IN <span style="font-size: 12px;"><i class="bi bi-arrow-up-right ms-1"></i></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>