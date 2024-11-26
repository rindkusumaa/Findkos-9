<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FINDKOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    @include('layout.navbar')

    @include('layout.header')
    <section class="best-items">
        <div class="container">
            <div class="row text-center mb-50">
                <div class="col-lg-12">
                    <img src="images/ic_best.svg" height="42" alt="" class="mb-16">
                    <h3 class="big-header">
                        Best of The Best
                    </h3>
                    <p class="paragraph">
                        Dolor space comfortable moments
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="item">
                        <a href="{{ route('landing.details') }}">
                            <img src="images/house1.png" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="{{ route('landing.details') }}">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="images/house2.png" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="images/house3.png" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="images/house4.png" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="images/house5.png" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="images/house6.png" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="images/house7.png" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="images/house8.png" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="images/ic_loc.svg" height="20" alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

        {{-- @include('layout.footer') --}}
</body>

</html>