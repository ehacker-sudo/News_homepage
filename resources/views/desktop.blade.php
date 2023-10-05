<!doctype html>
<html lang="en">

<head>
  <title>Newsletter</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('images/favicon-32x32.png') }}" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset("css/bootstrap.css")}}">

  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body class="bg-36384E">
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container px-xxl-5 py-xxl-4 px-xl-5 py-xl-4 px-lg-5 py-lg-5 px-md-5 py-md-5 px-sm-5 py-sm-5 p-0">
      <div class="container px-xxl-5 py-xxl-4 px-xl-5 py-xl-4 px-lg-5 py-lg-5 px-md-5 py-md-4 px-sm-0 py-sm-5 p-0">
        <div class="container px-xxl-5 py-xxl-4 px-xl-2 py-xl-4 px-lg-5 py-lg-0 px-md-4 py-md-4 px-sm-0 py-sm-0 p-0">
          <div class="container px-xxl-5 py-xxl-1 px-xl-0 py-xl-1 px-lg-5 py-lg-0 px-md-0 py-md-1 px-sm-0 py-sm-0 p-0">
            <div class="card p-xxl-4 p-xl-4 p-lg-0">
              <div class="row gx-sm-4 gx-0">
                <div class="col-xxl-7 col-xl-7 order-xxl-1 order-xl-1 order-lg-2 order-md-2 order-sm-2 order-2">
                  <div class="container-fluid px-4 py-3">
                    <div class="container-fluid px-2">
                      <div class="card-body">
                        <h1 class="card-title fs-55px fw-roboto-bold">Stay Updated!</h1>
                        <p class="card-text fw-500 pt-3 pr-4">Join 60,000+ product managers receiving monthly
                          updates on:</p>
                        <ul class="list-group">
                          <li
                            class="list-group-item d-flex justify-content-start align-items-center border-0 fw-500 py-2">
                            <img src="../images/icon-list.svg" class="img-fluid pe-2" alt="">
                            Product discovery and building what matters
                          </li>
                          <li
                            class="list-group-item d-flex justify-content-start align-items-center border-0 fw-500 py-2">
                            <img src="../images/icon-list.svg" class="img-fluid pe-2" alt="">
                            Measuring to ensure updates are a success
                          </li>
                          <li
                            class="list-group-item d-flex justify-content-start align-items-center border-0 fw-500 py-2">
                            <img src="../images/icon-list.svg" class="img-fluid pe-2" alt="">
                            And much more!
                          </li>
                        </ul>
                        <form action="{{ route('success') }}" class="pt-4">
                          <div class="form-group">
                            <label for="email" class="fw-bold card-text">Email Address</label>
                            <span class="invalid-message float-end text-danger fw-500 d-none">Valid email
                              required</span>
                            <input type="email" class="form-control fw-500 mt-2 pt-4 pb-4 ps-4 mt-1" name="" id=""
                              aria-describedby="emailHelpId" placeholder="email@company.com">
                          </div>
                          <a href="#" onclick="validate()" class="btn btn-242742 w-100 py-3 mt-3 border-15px">
                            <div class="fw-bolder">Subscribe to monthly newsletter</div>
                          </a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-5 col-xl-5 order-xxl-2 order-xl-2 order-lg-1 order-md-1 order-sm-1 order-1">
                  <img src="{{ asset('images/illustration-sign-up-desktop.svg') }}" class="w-100 banner-desktop" alt="...">
                  <img src="{{ asset('images/illustration-sign-up-mobile.svg') }}" class="w-100 banner-mobile" alt="...">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/popper.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="{{ asset('js/ajax.js') }}"></script>
  <script src="{{ asset('js/desktop.js') }}"></script>
</body>

</html>