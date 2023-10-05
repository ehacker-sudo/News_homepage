<!doctype html>
<html lang="en">

<head>
    <title>Newsletter</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        <div class="container px-xxl-5 py-xxl-4 px-xl-5 py-xl-4 px-lg-5 py-lg-4 px-md-5 py-md-4 px-sm-5 py-sm-4 p-0">
            <div
                class="container px-xxl-5 py-xxl-4 px-xl-5 py-xl-4 px-lg-5 py-lg-4 px-md-5 py-md-4 px-sm-0 py-sm-4 p-0">
                <div
                    class="container px-xxl-5 py-xxl-4 px-xl-5 py-xl-4 px-lg-5 py-lg-4 px-md-5 py-md-4 px-sm-0 py-sm-4 p-0">
                    <div
                        class="container px-xxl-5 py-xxl-1 px-xl-5 py-xl-1 px-lg-5 py-lg-0 px-md-0 py-md-1 px-sm-0 py-sm-0 p-0">
                        <div class="row justify-content-center align-items-center gx-sm-4 gx-0">
                            <div class="col-xxl-6 col-xl-7 col-lg-10 col-md-12 col-12">
                                <div class="card text-left p-xxl-5 p-xl-4 p-lg-5 p-md-4 p-sm-4 px-4 py-5">
                                    <img class="card-img-top w-25 ms-3" src="../images/icon-list.svg" alt="">
                                    <div class="card-body px-sm-2 py-sm-1  pt-4">
                                        <h1 class="card-title fs-55px fw-bolder">Thanks for subscribing!</h1>
                                        <p class="card-text fw-500 pt-3 pr-4">
                                            A confirmation email has been sent to <b>ash@loremcompany.com</b>. Please
                                            open it
                                            and click the button inside to confirm your subscription.
                                        </p>
                                        <div class="pt-sm-4 pt-5">
                                            <div class="pt-sm-0 pt-5">
                                                <div class="pt-sm-0 pt-5">
                                                    <a href="{{ route('index') }}"
                                                        class="btn btn-242742 w-100 py-3 mt-3 border-15px">
                                                        <div class="fw-bolder">Dismiss message</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    <script src="{{ asset('js/desktop_success.js') }}"></script>
</body>

</html>