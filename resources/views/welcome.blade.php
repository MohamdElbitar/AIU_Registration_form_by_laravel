<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <![endif]-->


        <title>AIU Admission</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    <body>


    <main class="container-fluid">
        <section class="row title_main">
            <img src="{{ asset('images/logo.png') }}">
        </section>

        <section id="aboutus" class="row about justify-content-center mt-50">
            <div class="col-md-10 mx-auto text-center">
                <div class="section-title mb-50">
                    <h1>AIU Application For Fall Semster 2023</h1>
                </div>
            </div>
            <div class="col-md-12 with_text">
            </div>
        </section>
        <div class="container pt-5 my-5 z-depth-1">
            <section class="p-md-3 mx-md-5 text-lg-left">

                <div class="row text-center d-flex justify-content-center mt-4">

                    <div class="col-lg-4 col-md-6 mb-5">
                        <i class="fas fa-sign-in-alt pink-text fa-3x mb-4"></i>
                        <h4 class="font-weight-bold mb-4"> <a  href="{{ route('login') }}">Sign In</a></h4>

                    </div>


                    <div class="col-lg-4 col-md-6 mb-5">
                        <i class="fas fa-pen-alt pink-text fa-3x mb-4"></i>
                        <h4 class="font-weight-bold mb-4"> <a  href="{{ route('register') }}">Register</a></h4>

                    </div>


                </div>



            </section>
        </div>

    </main>
    <footer class="container-fluid text-center pt-4 pb-4">
        <span>Alamein International University© 2023 / All Rights Reserved		</span></footer>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>


    </body>


</html>
