<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"> -->
    <link rel="stylesheet" href="scss/main.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
<script>

    var link = "auth.login";
</script>
    <title>Medco</title>
</head>

<body class="">
    {{-- <div class="header-sec-mian">
        <div class="logo-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <a href="#">
                            <div class="logo-text">
                                MEDCO
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="language-sec language-sec-inner-page">
            <div class="lang-drop">
                <div class="dropdown text-center">
                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-money-bill-alt"></i>SAR
                    </button>
                    <div class="dropdown-menu p-0 m-0" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">AED</a>
                        <a class="dropdown-item" href="#">SAR</a>
                        <a class="dropdown-item" href="#">USD</a>
                    </div>
                </div>
            </div>
            <div class="lang-drop lang-drop-eng">
                <div class="dropdown text-center">
                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-globe-asia"></i>ENG
                    </button>
                    <div class="dropdown-menu p-0 m-0" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item text-capitalize" href="#">English</a>
                        <a class="dropdown-item text-capitalize" href="#">Arabic</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu-sec">
            <nav class="navbar navbar-expand-md nav-custom p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Categories</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Offers</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Suppliers</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div> --}}
    <!-- inner banner section -->
    {{-- <div class="next-banner d-flex ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bred-title  ">chat
                    </div>
                    <nav>
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item text-capitalize"><a href="#">home</a></li>
                            <li class="breadcrumb-item active text-capitalize">chat</li>


                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="account-info">
            <div class="container-fluid px-0 d-flex justify-content-end">
                <ul class="act-nav d-flex align-items-center justify-content-center">
                    <li class="item"><a href="#" class="link"><i class="fas fa-shopping-bag"></i>
                            <div class="counter-item">1</div>
                        </a></li>
                    <li class="item"><a href="#" class="link"><i class="fas fa-heart"></i>
                            <div class="counter-item">1</div>
                        </a></li>
                    <li class="item">
                        <div class="dropdown home-notification">
                            <a href="#" class="link dropdown-toggle" role="button" data-toggle="dropdown">
                                <i class="icon-bell"></i>
                                <div class="counter-item">1</div>
                            </a>
                            <div class="dropdown-menu">
                                <div class="notification-inner-box">
                                    <div class="notification-item d-flex align-items-center">
                                        <a class="is-read" href="#">
                                            <div class="d-flex align-items-start notification-img-box">
                                                <div class="image">
                                                    <img src="img/notification-dp.png" class="img-fluid">
                                                </div>
                                                <div class="info">
                                                    <div class="text">
                                                        <p class="title mb-0 text-truncate">New Offer Added</p>
                                                        <p class="desc mb-0 text-truncate" i18n="">New Offer(offer) Has
                                                            been added</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <p class="time mb-0 text-truncate">6 days ago</p>
                                        <button class="btn delete del-notification img-bt">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="notification-item d-flex align-items-center">
                                        <a class="is-read" href="#">
                                            <div class="d-flex align-items-start ali">
                                                <div class="image">
                                                    <img src="img/notification-dp.png" class="img-fluid">
                                                </div>
                                                <div class="info">
                                                    <div class="text">
                                                        <p class="title mb-0 text-truncate">New Offer Added</p>
                                                        <p class="desc mb-0 text-truncate" i18n="">New Offer(offer) Has
                                                            been added</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <p class="time mb-0 text-truncate">6 days ago</p>
                                        <button class="btn delete del-notification img-bt">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="notification-item d-flex align-items-center">
                                        <a class="is-read" href="#">
                                            <div class="d-flex align-items-start ali">
                                                <div class="image">
                                                    <img src="img/notification-dp.png" class="img-fluid">
                                                </div>
                                                <div class="info">
                                                    <div class="text">
                                                        <p class="title mb-0 text-truncate">New Offer Added</p>
                                                        <p class="desc mb-0 text-truncate" i18n="">New Offer(offer) Has
                                                            been added</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <p class="time mb-0 text-truncate">6 days ago</p>
                                        <button class="btn delete del-notification img-bt">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="notification-item d-flex align-items-center">
                                        <a class="is-read" href="#">
                                            <div class="d-flex align-items-start ali">
                                                <div class="image">
                                                    <img src="img/notification-dp.png" class="img-fluid">
                                                </div>
                                                <div class="info">
                                                    <div class="text">
                                                        <p class="title mb-0 text-truncate">New Offer Added</p>
                                                        <p class="desc mb-0 text-truncate" i18n="">New Offer(offer) Has
                                                            been added</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <p class="time mb-0 text-truncate">6 days ago</p>
                                        <button class="btn delete del-notification img-bt">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="notification-item d-flex align-items-center">
                                        <a class="is-read" href="#">
                                            <div class="d-flex align-items-start ali">
                                                <div class="image">
                                                    <img src="img/notification-dp.png" class="img-fluid">
                                                </div>
                                                <div class="info">
                                                    <div class="text">
                                                        <p class="title mb-0 text-truncate">New Offer Added</p>
                                                        <p class="desc mb-0 text-truncate" i18n="">New Offer(offer) Has
                                                            been added</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <p class="time mb-0 text-truncate">6 days ago</p>
                                        <button class="btn delete del-notification img-bt">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="notification-item d-flex align-items-center">
                                        <a class="is-read" href="#">
                                            <div class="d-flex align-items-start ali">
                                                <div class="image">
                                                    <img src="img/notification-dp.png" class="img-fluid">
                                                </div>
                                                <div class="info">
                                                    <div class="text">
                                                        <p class="title mb-0 text-truncate">New Offer Added</p>
                                                        <p class="desc mb-0 text-truncate" i18n="">New Offer(offer) Has
                                                            been added</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <p class="time mb-0 text-truncate">6 days ago</p>
                                        <button class="btn delete del-notification img-bt">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="notification-item d-flex align-items-center">
                                        <a class="is-read" href="#">
                                            <div class="d-flex align-items-start ali">
                                                <div class="image">
                                                    <img src="img/notification-dp.png" class="img-fluid">
                                                </div>
                                                <div class="info">
                                                    <div class="text">
                                                        <p class="title mb-0 text-truncate">New Offer Added</p>
                                                        <p class="desc mb-0 text-truncate" i18n="">New Offer(offer) Has
                                                            been added</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <p class="time mb-0 text-truncate">6 days ago</p>
                                        <button class="btn delete del-notification img-bt">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="position-absolute position-setting">
                                        <div class="row two-btn-row px-0 row-btn">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 px-0">
                                                <a href="#" class="btom-btn clear-al text-capitalize mr-devider">clear
                                                    all</a>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 px-0">
                                                <a href="#" class="btom-btn view-al text-capitalize">view all</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </li>
                    <li class="item">
                        <div class="dropdown my-account-dropdown">

                            <a href="#" class="link dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-expanded="true">
                                <i class="fas fa-user">

                                </i><span class="ml-3 ml-md-1">My Account</span>
                            </a>
                            <ul class="dropdown-menu" x-placement="bottom-start">
                                <li class="nav-item">

                                    <a class="dropdown-item " data-toggle="modal" data-target="#exampleModalCenter"
                                        href="#exampleModalCenter">login</a>

                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter"
                                        href="#exampleModalCenter">Register Now</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter-1"
                                        href="#exampleModalCenter-1">Email Verification</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter-2"
                                        href="#exampleModalCenter-2">reset password</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter-3"
                                        href="#exampleModalCenter-3">forgot password</a>
                                </li>
                            </ul>
                            <!-- <a href="#exampleModalCenter" class="link "  data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fas fa-user">

                </i><span class="ml-3 ml-md-1">My Account</span>
              </a> -->
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- Modal log in register-->
    {{-- <div class="modal fade custom-modal-product-detail" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

        </div>
        <div class="modal-body">

          <section class="login-sec login-main-section">
            <div class="container">
              <div class="">
                <div class="col-lg-12 ">
                  <div class="sec-heading  mb-25-ctm-ha">
                    <h2 class="title ">Medco </h2>
                    <!-- <p class="account-log">Please login your account</p> -->
                  </div>
                  <div class="row log-in-tabs-ha">
                    <ul class="nav nav-pills  register-tabs register-tabs-s-p width-fix" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                          aria-controls="pills-home" aria-selected="true">Login</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                          aria-controls="pills-profile" aria-selected="false">Register</a>
                      </li>
                    </ul>

                    <!-- tab-content -->
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="row">
                          <div class="col-12 mb-27-ctm-ha mt-43-ha">
                            <div class="input-style">
                              <label class="d-block">Email<span class="text-danger">*</span></label>
                              <input type="text" class="ctm-input" placeholder="E.g example@mail.com">
                            </div>
                          </div>
                          <div class="col-12 mb-26-ctm-ha">
                            <div class="input-style">
                              <label class="d-block">Password<span class="text-danger">*</span></label>
                              <div class="type-pass">
                                <input type="password" class="ctm-input" placeholder="********">
                                <div class="icon-eye d-flex align-items-center justify-content-center">
                                  <!-- <i class="far fa-eye"></i> -->
                                  <i class="fas fa-eye-slash"></i>
                                </div>
                              </div>
                            </div>

                            <!-- <div class="input-style">
                                      <label class="d-block">Password<span class="text-danger">*</span></label>
                                      <div class="type-pass">
                                        <input type="password" class="ctm-input" placeholder="Password">
                                        <div class="icon-eye d-flex align-items-center justify-content-center">
                                          <i class="far fa-eye"></i>
                                        </div>
                                      </div>
                                    </div> -->
                          </div>
                          <div class="col-12 mb-14-ctm-ha ">
                            <button class="login-p">Login</button>
                          </div>
                          <div class="col-sm-12 mb-18-ctm-ha d-flex align-items-center justify-content-between">
                            <div class="remember-me">
                              <label class="custom-check custom-check-r">Remember Me
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                              </label>
                            </div>
                            <div class="forgot-password text-md-right text-sm-start">
                              <a href="forget.html">Forgot Password?</a>
                            </div>
                          </div>
                          <!-- <div class="col-sm-6 mb-25-ctm-ha">
                                  <div class="remember-me">
                                    <label class="custom-check">Remember Me
                                      <input type="checkbox" checked="checked">
                                      <span class="checkmark"></span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-sm-6 mb-25-ctm-ha ">
                                  <div class="forgot-password text-md-right text-sm-start">
                                    <a href="forget.html">Forgot Password?</a>
                                  </div>
                                </div> -->




                          <!-- <div class="col-12  mb-25-ctm-ha">
                                  <a href="#" class="login-s">Continue As Guest</a>
                                </div> -->

                          <!-- <div class="col-12 ">
                                  <a href="register.html" class="login-p d-flex align-items-center justify-content-center">Register Now</a>
                                </div> -->
                          <div class="col-12 ">
                            <div class="social-login">
                              <div class="heading-s position-relative text-center">
                                <h2 class="d-inline-block bg-white">OR</h2>
                                <div class="b-tb"></div>
                              </div>


                              <div class="social-btns d-flex flex-column justify-content-between  mt-top-22">
                                <button
                                  class=" socl-button fb d-flex align-items-center justify-content-center mb-25-ctm-ha position-relative">
                                  Sign In With Facebook
                                  <!-- <div class="position-absolute social-btn-position"><img src="img/facebbok.png" class="img-fluid" alt=""><i class="fab fa-facebook-f"></i></div> -->
                                  <div class="position-absolute social-btn-position"><i class="fa fa-facebook"
                                      aria-hidden="true"></i></div>
                                </button>
                                <button
                                  class=" socl-button g-plus d-flex align-items-center justify-content-center mb-25-ctm-ha position-relative">
                                  Sign In With Google
                                  <div class="position-absolute social-btn-position"> <i
                                      class="fab fa-google-plus-g"></i></div>

                                </button>
                                <button
                                  class=" socl-button insta d-flex align-items-center justify-content-center mb-25-ctm-ha position-relative">
                                  Sign In With Instagram
                                  <!-- <div class="position-absolute social-btn-position"><img src="img/insta.png" class="img-fluid" alt=""><i class="fab fa-instagram"></i></div> -->
                                  <div class="position-absolute social-btn-position"><i class="fab fa-instagram"></i>
                                  </div>

                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- tab2 -->

                      <div class="tab-pane fade w-100" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <div class="width-tab-2-ctm ">
                          <ul class="nav nav-pills mb-0 register-tabs" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="pills-home-1-tab" data-toggle="pill" href="#pills-home-1"
                                role="tab" aria-controls="pills-home-1" aria-selected="true">User</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="pills-profile-1-tab" data-toggle="pill" href="#pills-profile-1"
                                role="tab" aria-controls="pills-profile-1" aria-selected="false">Supplier</a>
                            </li>

                          </ul>
                        </div>
                        <!-- tab-content -->
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-home-1" role="tabpanel"
                            aria-labelledby="pills-home-1-tab">
                            <div class="row">
                              <div class="col-md-12 mb-27-ctm-ha mt-27-top-ha">
                                <div class="input-style">
                                  <label class="d-block">First Name<span class="text-danger">*</span></label>
                                  <input type="text" class="ctm-input" placeholder="First Name">
                                </div>
                              </div>
                              <div class="col-md-12 mb-27-ctm-ha">
                                <div class="input-style">
                                  <label class="d-block">Last Name<span class="text-danger">*</span></label>
                                  <input type="text" class="ctm-input" placeholder="Last Name">
                                </div>
                              </div>
                              <div class="col-12 mb-27-ctm-ha">
                                <div class="input-style">
                                  <label class="d-block">Email<span class="text-danger">*</span></label>
                                  <input type="text" class="ctm-input" placeholder="E.g example@mail.com">
                                </div>
                              </div>

                              <div class="col-12 mb-27-ctm-ha">
                                <div class="input-style">
                                  <label class="d-block">Password <span class="text-danger">*</span></label>
                                  <div class="type-pass">
                                    <input type="password" class="ctm-input"
                                      placeholder="&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;">
                                    <div class="icon-eye d-flex align-items-center justify-content-center">
                                      <!-- <i class="far fa-eye"></i> -->
                                      <i class="fas fa-eye-slash"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 mb-27-ctm-ha">
                                <div class="input-style">
                                  <label class="d-block">Confirm Password <span class="text-danger">*</span></label>
                                  <div class="type-pass">
                                    <input type="password" class="ctm-input"
                                      placeholder="&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;">
                                    <div class="icon-eye d-flex align-items-center justify-content-center">
                                      <!-- <i class="far fa-eye"></i> -->
                                      <i class="fas fa-eye-slash"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-12 mb-27-ctm-ha">
                                <div class="input-style phone-dropdown">
                                  <label class="d-block">Phone Number<span class="text-danger">*</span></label>
                                  <div class="d-flex input-rigister">
                                    <div class="dropdown drop-bottom ">
                                      <button
                                          class="custom-btn dropdown-toggle gothic-normel p-list-place feedbackName"
                                          type="button" id="subject" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false" >
                                          +971
                                      </button>
                                      <div class="dropdown-menu contc p-0 border-0" aria-labelledby="dropdownMenuButton">
                                          <div class="check-area-mt disp-hide hovring">
                                              <div class="set-border-feedback">
                                                  <label
                                                      class="w-100 check text-capitalize reduce-spacing rem-margin-bottom">
                                                      +971
                                                      <input type="radio" class="feedbackRadio"
                                                          [value]="selector" name="subject">
                                                      <span class="checkmark"></span>
                                                  </label>
                                                  <label
                                                      class="w-100 check text-capitalize reduce-spacing rem-margin-bottom">
                                                      +971
                                                      <input type="radio" class="feedbackRadio"
                                                          [value]="selector" name="subject">
                                                      <span class="checkmark"></span>
                                                  </label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                    <div class="w-100">
                                      <input type="text" class="ctm-input text-left p-drop-padds" dir="ltr" placeholder="E.g 895632542">
                                    </div>


                                  </div>

                                </div>
                              </div>
                              <div class="col-12 mb-27-ctm-ha">
                                <div class="input-style position-relative">
                                  <label class="d-block">Address<span class="text-danger">*</span></label>
                                  <input type="text" class="ctm-input text-left address-padds-register" dir="ltr" placeholder="Address">
                                  <div class="button-address position-absolute">
                                    <button type="button" class="btn btn-address">

                                      <i class="fas fa-map-marker-alt"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 mb-18-ctm-ha">
                                <div class="input-style">
                                  <label class="d-block">Upload Your Display Picture <span class="text-danger">*</span></label>
                                </div>
                                <div class="upload-sec d-flex align-items-center flex-wrap">
                                  <!-- image upload -->
                                  <div class="qust-filed mr-2">
                                    <div class="form-control py-2 d-flex align-items-center justify-content-center">
                                      <input type="file" id="choose-file" class="input-file d-none">
                                      <label for="choose-file" class="btn-tertiary js-labelFile d-flex align-items-center flex-column">
                                        <i class="icon fa fa-plus-circle plus-icon"></i>
                                        <span class="js-fileName heading Poppins-Regular">Add Image</span>
                                      </label>
                                    </div>
                                  </div>
                                  <div class="more-view-image">
                                    <div class="uploads d-flex align-items-center justify-content-center">
                                      <img src="img/more-view.png" class="img-fluid img" alt="">
                                    </div>
                                    <a href="#remove-file" class="placeholder-remove d-flex align-items-center justify-content-center">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="11.001" height="11.003" viewBox="0 0 11.001 11.003">
                                        <path id="Forma_1" data-name="Forma 1" d="M1028.345,545.163l-3.333,3.335,3.333,3.334a1.27,1.27,0,1,1-1.795,1.8l-3.334-3.335-3.334,3.335a1.27,1.27,0,0,1-1.795-1.8l3.333-3.334-3.333-3.335a1.269,1.269,0,0,1,1.795-1.8l3.334,3.335,3.334-3.335a1.269,1.269,0,0,1,1.8,1.8Z" transform="translate(-1017.715 -542.996)" fill="#fff"></path>
                                      </svg>

                                    </a>
                                  </div>
                                  <!-- image upload -->
                                </div>
                              </div>
                              <div class="col-12 mb-16-ctm-ha">
                                <div class="remember-me    d-flex align-items-center for-sp-us-gen">
                                  <div class="gender-title-register mr-4">Select Gender</div>
                                  <label class="custom-radio custom-radio-center-ha mr-3">Male
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                  </label>

                                  <label class="custom-radio custom-radio-center-ha">Female
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </div>

                              <div class="col-md-12 ">
                                <div class="remember-me remember-me-register for-space-us-check">
                                  <label class="custom-check">
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark rounded"></span>
                                  </label>
                                  <div class="prvc line-h-heading">By Signing up, I agree to the <a href="#">Term & Conditions</a> and <a href="#">Privacy Policy.</a>    </div>
                                </div>
                              </div>


                              <div class="col-md-12 mb-12-ctm-ha">
                                <button class="login-p">Register</button>
                              </div>
                              <div class="col-12">
                                <div class="login-Already text-center">
                                  <div class="prvc">Already have an account? <a href="#">Login Now</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade " id="pills-profile-1" role="tabpanel"
                            aria-labelledby="pills-profile-1">
                            <div class="row">
                              <div class="col-md-12 mb-27-ctm-ha mt-27-top-ha">
                                <div class="input-style">
                                  <label class="d-block">Supplier Name <span class="text-danger">*</span></label>
                                  <input type="text" class="ctm-input" placeholder="Supplier Name">
                                </div>
                              </div>

                              <div class="col-12 mb-27-ctm-ha">
                                <div class="input-style">
                                  <label class="d-block">Email<span class="text-danger">*</span></label>
                                  <input type="text" class="ctm-input" placeholder="E.g example@mail.com">
                                </div>
                              </div>

                              <div class="col-12 mb-27-ctm-ha">
                                <div class="input-style">
                                  <label class="d-block">Password <span class="text-danger">*</span></label>
                                  <div class="type-pass">
                                    <input type="password" class="ctm-input"
                                      placeholder="&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;">
                                    <div class="icon-eye d-flex align-items-center justify-content-center">
                                      <!-- <i class="far fa-eye"></i> -->
                                      <i class="fas fa-eye-slash"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 mb-27-ctm-ha">
                                <div class="input-style">
                                  <label class="d-block">Confirm Password <span class="text-danger">*</span></label>
                                  <div class="type-pass">
                                    <input type="password" class="ctm-input"
                                      placeholder="&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;">
                                    <div class="icon-eye d-flex align-items-center justify-content-center">
                                      <!-- <i class="far fa-eye"></i> -->
                                      <i class="fas fa-eye-slash"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-12 mb-27-ctm-ha">
                                <div class="input-style phone-dropdown">
                                  <label class="d-block">Phone Number<span class="text-danger">*</span></label>
                                  <div class="d-flex input-rigister">
                                    <div class="dropdown drop-bottom ">
                                      <button
                                          class="custom-btn dropdown-toggle gothic-normel p-list-place feedbackName"
                                          type="button" id="subject" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false" >
                                          +971
                                      </button>
                                      <div class="dropdown-menu contc p-0 border-0" aria-labelledby="dropdownMenuButton">
                                          <div class="check-area-mt disp-hide hovring">
                                              <div class="set-border-feedback">
                                                  <label
                                                      class="w-100 check text-capitalize reduce-spacing rem-margin-bottom">
                                                      +971
                                                      <input type="radio" class="feedbackRadio"
                                                          [value]="selector" name="subject">
                                                      <span class="checkmark"></span>
                                                  </label>
                                                  <label
                                                      class="w-100 check text-capitalize reduce-spacing rem-margin-bottom">
                                                      +971
                                                      <input type="radio" class="feedbackRadio"
                                                          [value]="selector" name="subject">
                                                      <span class="checkmark"></span>
                                                  </label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                    <div class="w-100">
                                      <input type="text" class="ctm-input text-left p-drop-padds" dir="ltr" placeholder="E.g 895632542">
                                    </div>


                                  </div>

                                </div>
                              </div>
                              <div class="col-12 mb-27-ctm-ha">
                                <div class="input-style position-relative">
                                  <label class="d-block">Address<span class="text-danger">*</span></label>
                                  <input type="text" class="ctm-input text-left address-padds-register" dir="ltr" placeholder="Address">
                                  <div class="button-address position-absolute">
                                    <button type="button" class="btn btn-address">

                                      <i class="fas fa-map-marker-alt"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 mb-21-ctm-ha">
                                <div class="input-style position-relative">
                                  <label class="d-block">About<span class="text-danger">*</span></label>
                                  <textarea class="ctm-textarea" placeholder="About"></textarea>
                                </div>
                              </div>
                              <div class="col-12 mb-27-ctm-ha">
                                <div class="input-style">
                                  <label class="d-block">Upload Your Display Picture <span class="text-danger">*</span></label>
                                </div>
                                <div class="upload-sec d-flex align-items-center flex-wrap">
                                  <!-- image upload -->
                                  <div class="qust-filed mr-2">
                                    <div class="form-control py-2 d-flex align-items-center justify-content-center">
                                      <input type="file" id="choose-file" class="input-file d-none">
                                      <label for="choose-file" class="btn-tertiary js-labelFile d-flex align-items-center flex-column">
                                        <i class="icon fa fa-plus-circle plus-icon"></i>
                                        <span class="js-fileName heading Poppins-Regular">Add Image</span>
                                      </label>
                                    </div>
                                  </div>
                                  <div class="more-view-image">
                                    <div class="uploads d-flex align-items-center justify-content-center">
                                      <img src="img/more-view.png" class="img-fluid img" alt="">
                                    </div>
                                    <a href="#remove-file" class="placeholder-remove d-flex align-items-center justify-content-center">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="11.001" height="11.003" viewBox="0 0 11.001 11.003">
                                        <path id="Forma_1" data-name="Forma 1" d="M1028.345,545.163l-3.333,3.335,3.333,3.334a1.27,1.27,0,1,1-1.795,1.8l-3.334-3.335-3.334,3.335a1.27,1.27,0,0,1-1.795-1.8l3.333-3.334-3.333-3.335a1.269,1.269,0,0,1,1.795-1.8l3.334,3.335,3.334-3.335a1.269,1.269,0,0,1,1.8,1.8Z" transform="translate(-1017.715 -542.996)" fill="#fff"></path>
                                      </svg>

                                    </a>
                                  </div>
                                  <!-- image upload -->
                                </div>
                              </div>
                              <div class="col-12 mb-27-ctm-ha">
                                <div class="input-style">
                                  <label class="d-block">Attach Your Trade License<span class="text-danger">*</span></label>
                                </div>
                                <div class="upload-sec d-flex align-items-center flex-wrap">
                                  <!-- image upload -->
                                  <div class="qust-filed mr-2">
                                    <div class="form-control py-2 d-flex align-items-center justify-content-center">
                                      <input type="file" id="choose-file" class="input-file d-none">
                                      <label for="choose-file" class="btn-tertiary js-labelFile d-flex align-items-center flex-column">
                                        <i class="icon fa fa-plus-circle plus-icon"></i>
                                        <span class="js-fileName heading Poppins-Regular">Add Image</span>
                                      </label>
                                    </div>
                                  </div>
                                  <div class="more-view-image">
                                    <div class="uploads d-flex align-items-center justify-content-center">
                                      <img src="img/more-view.png" class="img-fluid img" alt="">
                                    </div>
                                    <a href="#remove-file" class="placeholder-remove d-flex align-items-center justify-content-center">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="11.001" height="11.003" viewBox="0 0 11.001 11.003">
                                        <path id="Forma_1" data-name="Forma 1" d="M1028.345,545.163l-3.333,3.335,3.333,3.334a1.27,1.27,0,1,1-1.795,1.8l-3.334-3.335-3.334,3.335a1.27,1.27,0,0,1-1.795-1.8l3.333-3.334-3.333-3.335a1.269,1.269,0,0,1,1.795-1.8l3.334,3.335,3.334-3.335a1.269,1.269,0,0,1,1.8,1.8Z" transform="translate(-1017.715 -542.996)" fill="#fff"></path>
                                      </svg>

                                    </a>
                                  </div>
                                  <!-- image upload -->
                                </div>
                              </div>
                              <div class="col-12 mb-13-ctm">
                                <div class="input-style">
                                  <label class="d-block">Attach Your ID <span class="text-danger">*</span></label>
                                </div>
                                <div class="upload-sec d-flex align-items-center flex-wrap">
                                  <!-- image upload -->
                                  <div class="qust-filed mr-2">
                                    <div class="form-control py-2 d-flex align-items-center justify-content-center">
                                      <input type="file" id="choose-file" class="input-file d-none">
                                      <label for="choose-file" class="btn-tertiary js-labelFile d-flex align-items-center flex-column">
                                        <i class="icon fa fa-plus-circle plus-icon"></i>
                                        <span class="js-fileName heading Poppins-Regular">Add Image</span>
                                      </label>
                                    </div>
                                  </div>
                                  <div class="more-view-image">
                                    <div class="uploads d-flex align-items-center justify-content-center">
                                      <img src="img/more-view.png" class="img-fluid img" alt="">
                                    </div>
                                    <a href="#remove-file" class="placeholder-remove d-flex align-items-center justify-content-center">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="11.001" height="11.003" viewBox="0 0 11.001 11.003">
                                        <path id="Forma_1" data-name="Forma 1" d="M1028.345,545.163l-3.333,3.335,3.333,3.334a1.27,1.27,0,1,1-1.795,1.8l-3.334-3.335-3.334,3.335a1.27,1.27,0,0,1-1.795-1.8l3.333-3.334-3.333-3.335a1.269,1.269,0,0,1,1.795-1.8l3.334,3.335,3.334-3.335a1.269,1.269,0,0,1,1.8,1.8Z" transform="translate(-1017.715 -542.996)" fill="#fff"></path>
                                      </svg>

                                    </a>
                                  </div>
                                  <!-- image upload -->
                                </div>
                              </div>
                              <!-- <div class="col-12 mb-9-top-ha">
                                <div class="remember-me    d-flex align-items-center for-sp-us-gen">
                                  <div class="gender-title-register mr-4">Select Gender</div>
                                  <label class="custom-radio custom-radio-center-ha mr-3">Male
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                  </label>

                                  <label class="custom-radio custom-radio-center-ha">Female
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </div> -->

                              <div class="col-md-12 ">
                                <div class="remember-me remember-me-register for-space-us-check">
                                  <label class="custom-check">
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark rounded"></span>
                                  </label>
                                  <div class="prvc line-h-heading">By Signing up, I agree to the <a href="#">Term & Conditions</a> and <a href="#">Privacy Policy.</a>    </div>
                                </div>
                              </div>


                              <div class="col-md-12 mb-12-ctm-ha">
                                <button class="login-p">Register</button>
                              </div>
                              <div class="col-12">
                                <div class="login-Already text-center">
                                  <div class="prvc">Already have an account? <a href="#">Login Now</a></div>
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
          </section>


        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div> --}}
  <!-- end modal -->
   <!-- Modal email verification-->
   <div class="modal fade custom-modal-product-detail" id="exampleModalCenter-3" tabindex="-1" role="dialog"
   aria-labelledby="exampleModalCenter-3Title" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-header">

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>

       </div>
       <div class="modal-body">

         <section class="login-sec login-main-section">
           <div class="container">
             <div class="row">
               <div class="col-lg-12 ">
                 <div class="sec-heading  mb-23-ctm">
                   <h2 class="title ">Medco </h2>

                   <p class="des">Please enter the email address of the account to retrieve your
                    password</p>
                 </div>


               </div>
               <div class="col-12 mb-25-ctm-ha">
                <div class="input-style">
                  <label class="d-block">Email<span class="text-danger">*</span></label>
                  <input type="text" class="ctm-input" placeholder="E.g johndoe@example.com">
                </div>
              </div>
             </div>
             <div class="row">
              <div class="col-6 mb-25-ctm-ha">
                <button class="login-s">Resend</button>
              </div>
              <div class="col-6 mb-25-ctm-ha">
                <button class="login-p">Submit</button>
              </div>
            </div>
           </div>
         </section>


       </div>
       <div class="modal-footer">

       </div>
     </div>
   </div>
 </div>
 <!-- end modal -->
 <!-- Modal reset password-->
 {{-- <div class="modal fade custom-modal-product-detail" id="exampleModalCenter-2" tabindex="-1" role="dialog"
   aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-header">

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>

       </div>
       <div class="modal-body">

         <section class="login-sec login-main-section">
           <div class="container">
             <div class="row">
               <div class="col-lg-12 ">
                 <div class="sec-heading  mb-19-ctm">
                   <h2 class="title ">Medco </h2>

                   <p class="des">Enter code sent at your email address and enter new password
                    to change your account password</p>
                 </div>


               </div>
               <div class="col-12 mb-24-ctm">
                <div class="input-style">
                  <label class="d-block">Code<span class="text-danger">*</span></label>
                  <input type="text" class="ctm-input" placeholder="Enter Email Code">
                </div>
              </div>
              <div class="col-12 mb-24-ctm">
                <div class="input-style">
                  <label class="d-block">New Password<span class="text-danger">*</span></label>
                  <div class="type-pass">
                      <input type="password" class="ctm-input"
                        placeholder="&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;">
                      <div class="icon-eye d-flex align-items-center justify-content-center">

                        <i class="fas fa-eye-slash"></i>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-12 mb-24-ctm">
                <div class="input-style">
                  <label class="d-block">Confirm New Password <span class="text-danger">*</span></label>
                  <div class="type-pass">
                      <input type="password" class="ctm-input"
                        placeholder="&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;&#8903;">
                      <div class="icon-eye d-flex align-items-center justify-content-center">

                        <i class="fas fa-eye-slash"></i>
                      </div>
                    </div>
                </div>
              </div>
             </div>
             <div class="row">
              <div class="col-6 mb-24-ctm">
                <button class="login-s">Resend</button>
              </div>
              <div class="col-6 mb-24-ctm">
                <button class="login-p">Submit</button>
              </div>
            </div>
           </div>
         </section>


       </div>
       <div class="modal-footer">

       </div>
     </div>
   </div>
 </div> --}}
 <!-- end modal -->
 <!-- Modal forgot password-->
 {{-- <div class="modal fade custom-modal-product-detail" id="exampleModalCenter-1" tabindex="-1" role="dialog"
 aria-labelledby="exampleModalCenter-1Title" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>

    </div>
    <div class="modal-body">

      <section class="login-sec login-main-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 ">
              <div class="sec-heading  mb-23-ctm">
                <h2 class="title ">Medco </h2>

                <p class="des">A verification code is sent to your email. Please check your email
                  and enter code below</p>
              </div>


            </div>
            <div class="col-12 mb-27-ctm-ha">
             <div class="input-style">
               <label class="d-block">Code<span class="text-danger">*</span></label>
               <input type="text" class="ctm-input" placeholder="Enter Email Code">
             </div>
           </div>

          </div>
          <div class="row">
           <div class="col-6 mb-25-ctm-ha">
             <button class="login-s">Resend</button>
           </div>
           <div class="col-6 mb-25-ctm-ha">
             <button class="login-p">Submit</button>
           </div>
         </div>
        </div>
      </section>


    </div>
    <div class="modal-footer">

    </div>
  </div>
 </div>
 </div> --}}
 <!-- end modal -->
    <!-- end banner slider sec -->
    <!--Body Start-->

  <!-- profile page start -->
  <section class="sec-our-categories pad-y">
    <div class="dashborad-ses">
      <div class="container">
        <div class="row">
          {{-- <div class="col-md-3 mb-5 mb-md-0">
            <ul class="nav-left-mt-a nav flex-column pb-2">
              <li class="nav-item active">
                <a href="profile.html" class="nav-link"><i class="fas fa-user"></i>Profile</a>
              </li>
              <li class="nav-item">
                <a href="order-list.html" class="nav-link"> <img class="margin-side-bar" src="img/manage-product.svg" alt="img"> Manage Products</a>
              </li>
              <li class="nav-item">
                <a href="chat.html" class="nav-link"><img class="margin-side-bar chat-img" src="img/chat.svg"
                    alt="img">live chat</a>
              </li>

              <li class="nav-item" >
                <a href="favourites.html" class="nav-link"><i class="fas fa-shopping-bag"></i>My Order</a>
              </li>

              <li class="nav-item">
                <a href="chat.html" class="nav-link"><img class="margin-side-bar" src="img/Offer-icon.svg" alt="img">Manage Offer</a>
              </li>
              <li class="nav-item">
                <a href="chat.html" class="nav-link"><img class="margin-side-bar" src="img/banner-offer.svg" alt="img">Banner Offer</a>
              </li>

              <li class="nav-item" >
                <a href="manage-card.html" class="nav-link"><img class="margin-side-bar" src="img/rating-review.svg" alt="img">Rating & Reviews</a>
              </li>


              <li class="nav-item">
                <a href="notification.html" class="nav-link">
                  <i class="fas fa-wallet"></i>


                  Payment Profile</a>
              </li>
              <li class="nav-item">
                <a href="change-password.html" class="nav-link"><i class="fas fa-bell"></i>Notification</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link"><i class="fas fa-sign-out-alt"></i>logout</a>
              </li>

            </ul>

          </div> --}}
          <div class="col-lg-9">
            <div class="chat-main">
              <div class="row">
                <div class="col-12">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 mt-lg-0 mt-md-3">
                  <div class="message-content d-lg-flex">

                    <div class="contacts  d-lg-block">
                      <div class="chat-search d-flex ">
                        <div class="d-flex for-md-src">
                          <div class="input-group">
                            <input type="text" id="myInput" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                              <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                          </div>
                        </div>
                        <div class="user-box">
                          <button type="button" class="btn btn-primary-ctm">
                              <!-- <i class="fas fa-user-alt"></i> -->
                              <img class="" src="img/user-p.svg" alt="image">
                              <!-- <svg id="Component_2_1" data-name="Component 2 – 1" xmlns="http://www.w3.org/2000/svg" width="40" height="39.998" viewBox="0 0 40 39.998">
                                <ellipse id="BGElipse" cx="15" cy="15" rx="15" ry="15" transform="translate(5 5)" fill="#fff"/>
                                <path id="Path_44981" data-name="Path 44981" d="M20,0A20,20,0,1,0,40,20,20,20,0,0,0,20,0Zm0,5.98A6.615,6.615,0,1,1,13.386,12.6,6.615,6.615,0,0,1,20,5.981ZM20,34.77a14.678,14.678,0,0,1-9.558-3.525A2.819,2.819,0,0,1,9.448,29.1a6.671,6.671,0,0,1,6.7-6.67h7.7a6.662,6.662,0,0,1,6.693,6.67,2.812,2.812,0,0,1-.988,2.142A14.673,14.673,0,0,1,20,34.77Z" transform="translate(0 -0.001)" fill="#0175b2"/>
                              </svg> -->
                            </button>
                        </div>
                      </div>
                      <div class="contacts-area" id="chatbox">
                          @foreach ($chats as $chat)
                            <a class="contact-item d-block" href="javascript:;" id="ChatClass_{{$chat->id}}" onclick="getChat({{$chat->id}})">
                                <div class="media d-flex align-items-center">
                                <div class="image-mt">
                                    <div class="image">
                                    <img class="img-fluid" src="img/chat-img-3.png">

                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="d-flex">
                                    <div class="left-side">
                                        <h6 class="text-truncate mb-0">
                                            @if ($chat->reciever->id == \Auth::id())
                                                    {{$chat->sender->name}}
                                            @else
                                                    {{$chat->reciever->name}}
                                            @endif
                                        </h6>
                                        <div class="user-title">
                                        <h3 class="sub-tittle-chat text-truncate">Product Name here</h3>
                                        <p class="mb-0 text-truncate">
                                            Lorem Ipsum Dolar Sit Ame...
                                        </p>
                                        </div>
                                    </div>
                                    <div class="right-side">
                                        <i class="fas fa-times-circle"></i>

                                        <small class="price">AED 200</small>
                                        <small class="time">9 min ago</small>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </a>
                          @endforeach
                      </div>
                    </div>
                    <div class="messages font-dosis font-16 hdn" id="main-d">
                      <div class="messages-content">
                        <div class="messages-area" id="test">
                          {{-- <div class="sender-msg media d-flex">
                            <div class="user-profile-ha-ctm d-flex align-items-center justify-content-center">
                              <img src="img/user-profile-1.jpg" class="img-fluid" alt="Sender Image">
                            </div>
                            <div >
                              <div class="media-body Oswald-Light">
                                <div class="small-message smallmessage font-light font-16">
                                  <div class="single-msg">
                                    <span>Ut enim ad minim venia nim ad.</span>
                                  </div>

                                </div>
                                <div><span class="send-time OpenSans-Regular text-left">8 min ago</span></div>
                              </div>
                            </div>
                          </div> --}}
                          {{-- <div class="received-message-ctm d-flex">

                            <div>
                              <div class="my-msg Oswald-Light">
                                <span>Ut enim ad minim enim ad.</span>

                              </div>
                              <div>
                                <span class="received-time OpenSans-Regular font-16 text-right">8 min ago</span>
                              </div>
                            </div>
                            <div class="user-profile-ha-ctm-right d-flex align-items-center justify-content-center">
                              <img src="img/user-profile-1.jpg" class="img-fluid" alt="Sender Image">
                            </div>
                          </div>

                          <div class="sender-msg media d-flex">
                            <div class="user-profile-ha-ctm d-flex align-items-center justify-content-center">
                              <img src="img/user-profile-1.jpg" class="img-fluid" alt="Sender Image">
                            </div>
                            <div>
                              <div class="media-body Oswald-Light">
                                <div class="small-message smallmessage font-light font-16">
                                  <div class="single-msg">
                                    <span>Ut enim ad minim venia nim ad.</span>
                                  </div>

                                </div>
                                <div><span class="send-time OpenSans-Regular text-left">8 min ago</span></div>
                              </div>
                            </div>
                          </div> --}}
                          <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                        <form id="sendMessage-d">

                          <div class="msg-form">
                            <div class="position-relative msg-form-mt">
                                <input type="hidden" name="reciever_userid" id="reciever_userid-d" value="">
                                <input type="hidden" name="chat_id" id="chat_id-d" value="">
                                <input type="hidden" name="sender_id" id="sender_id-d" value="">
                                <input type="text" id="message_body" name="message_body" i18n-placeholder [readonly]="isFormStateWorking" name="content"
                                class="form-control" placeholder="Write  Message..." ngModel>
                              <button class="btn-primary border-0" type="submit">
                                <i class="fas fa-arrow-right btn-icon-chat"></i>
                              </button>
                              <div class="input-file mr-1">
                                <!-- <img src="img/attachment.svg" alt="clip"> -->
                                <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m226 512c-49.626 0-90-40.374-90-90v-302c0-66.168 53.832-120 120-120s120 53.832 120 120v302h-30v-302c0-49.626-40.374-90-90-90s-90 40.374-90 90v302c0 33.084 26.916 60 60 60s60-26.916 60-60v-242c0-16.542-13.458-30-30-30s-30 13.458-30 30v242h-30v-242c0-33.084 26.916-60 60-60s60 26.916 60 60v242c0 49.626-40.374 90-90 90z"/></svg>
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="23.335" height="23.334" viewBox="0 0 23.335 23.334">
                                    <text id="_" data-name="" transform="translate(2.121 10.607) rotate(45)" fill="#0175b2" font-size="18" font-family="FontAwesome"><tspan x="0" y="0"></tspan></text>
                                  </svg> -->

                              </div>
                            </div>
                          </div>
                        </form>
                        <div class="top-info">

                          <div class="product-info d-flex align-items-center" *ngIf="selectedConversation?.product">
                            <div class="image "><img src="img/chat-img-3.png" class="img-fluid"
                                alt="Sender Image">
                            </div>
                            <div class="body w-100">
                              <div class="product-info-chat-2nd d-flex  justify-content-between">
                               <div class="max-width-limit">
                                <p class="mb-0 title" id="name_of_reciever">Hillary Watson</p>
                                <!-- <p class="sub-tittle-index">Index Furniture</p> -->
                               </div>
                                <p class="mb-0 price text-uppercase">AED 200</p>
                              </div>
                            </div>
                          </div>
                          <div class="product-info-ctm d-flex align-items-center" *ngIf="selectedConversation?.product">
                            <div class="image "><img src="img/chat-img-3.png" class="img-fluid"
                                alt="Sender Image">
                            </div>
                            <div class="body w-100">
                              <div class="product-info-chat-2nd d-flex  justify-content-between">
                               <div class="max-width-limit">
                                <p class="mb-0 title" id="name_of_reciever">Product Name Here</p>
                                <!-- <p class="sub-tittle-index">Index Furniture</p> -->
                               </div>
                                <p class="mb-0 price text-uppercase">Price Of Product</p>
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
        </div>
      </div>
    </div>

  </section>
  <!-- end profile page -->

    <!-- start footer area -->
    {{-- <div class=" site_footer">
      <section class=" footer">
        <div class="container-ctm">
          <div class="container ">

            <div class="row ">

              <div class="col-sm-12 col-md-6 order-lg-1 col-lg-2 order-2 col-width-setts-1">
                <div class="footer-linkd-paads-ha">
                  <div class="footer_heading">
                    links
                  </div>
                  <div class="footer_list ">
                    <ul>
                      <li>
                        <a href="">
                          <span><i class="fas fa-chevron-right"></i></span>home
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <span><i class="fas fa-chevron-right"></i></span>our categories
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <span><i class="fas fa-chevron-right"></i></span>our suppliers

                        </a>
                      </li>
                      <li>
                        <a href="">
                          <span><i class="fas fa-chevron-right"></i></span>our offers

                        </a>
                      </li>
                      <li>
                        <a href="">
                          <span><i class="fas fa-chevron-right"></i></span>About Us


                        </a>
                      </li>
                    </ul>
                  </div>
                </div>

              </div>
              <div class="col-sm-12 col-md-12 col-lg-7 order-lg-2 order-1 text-center col-width-setts-2">
                <div class="footer-middle">
                  <div class="footer_title">
                    <a href="#">
                      <div class="footer-logo">
                        MEDCO
                      </div>
                    </a>
                  </div>
                  <div class="footer_text">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                      labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                      et
                      ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est۔
                      Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur</p>

                  </div>
                </div>

              </div>
              <div class="col-sm-12 col-md-6 order-md-3 order-3 col-lg-3 col-width-setts-3 position-left-sett-footer">
                <div class=" margin-foolw-lefts">
                  <div class=" contact-us-hah">
                    <h3 class="cantact-haeding-hah ">Contact Info</h3>
                  </div>
                  <ul class="address-hah">

                    <li class="address-icon-hah"><a class="anchar-link-hah " href="#">
                        <div class="icon-setting-hah">
                          <img class="img-fluid" src="img/f-2.svg" alt="img">
                        </div> <span class="call-email-address hover-settings">Call us:<span class="next-p" dir="ltr">+971
                            3564 7368</span>
                        </span>
                      </a></li>
                    <li class="address-icon-hah">
                      <a class="anchar-link-hah  " href="#">
                        <div class="icon-setting-hah">
                          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16">
                            <text id="_" data-name="" transform="translate(1 14)" fill="#fffefe" font-size="16" font-family="FontAwesome5FreeSolid, 'Font Awesome 5 Free Solid'"><tspan x="0" y="0"></tspan></text>
                          </svg> -->
                          <i class="fas fa-globe"></i>
                        </div>
                        <span class="call-email-address ">Web:<span class="next-p">www.medco.com</span> </span>
                      </a>
                    </li>

                    <li class="address-icon-hah"><a class="anchar-link-hah " href="#">
                        <div class="icon-setting-hah">
                          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19">
                            <text id="_" data-name="" transform="translate(1 16)" fill="#fff" stroke="rgba(0,0,0,0)" stroke-width="1" font-size="16" font-family="FontAwesome5FreeSolid, 'Font Awesome 5 Free Solid'" letter-spacing="0.02em"><tspan x="0" y="0"></tspan></text>
                          </svg> -->
                          <i class="fas fa-envelope-open-text"></i>
                        </div><span class="call-email-address hover-settings">Email:<span
                            class="next-p">info@medco.com</span> </span>
                      </a>
                    </li>
                    <li class="address-icon-hah"><a class="anchar-link-hah " href="#">
                        <div class="icon-setting-hah">
                          <img class="img-fluid" src="img/f-1.svg" alt="img">
                        </div>
                        <span class="call-email-address hover-settings">Address:<span class="next-p">Office, Al Ain, UAE
                          </span> </span>
                      </a>
                    </li>





                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
      <section class="site_footer_links ">
        <div class="arrow-up-btn">
          <a href="#" id="button" class="arrow-up-ancher">
            <i class="fas fa-arrow-up"></i>
            <!-- <i class="fa fa-arrow-up" aria-hidden="true"></i> -->
          </a>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="d-flex align-items-center justify-content-between for-reponsive-padds-f">
                <div class="copyrights">
                  <a href="">MEDCO </a><span class="hifan">-</span>Copyright 2020 - All Rights Reserved.
                </div>
                <div class="social_links">
                  <a href="">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-pinterest-p"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-google-plus-g"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-instagram"></i>
                  </a>

                </div>
              </div>


            </div>
          </div>
        </div>
      </section>

    </div> --}}


    <!-- end footer area -->
    <!-- <script src="http://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script> -->

    <script>
        var userid = "{{\Auth::id()}}";
        var get_all_chat_sender_chat_id = "{{ route('get-all-chat-sender-chat-id') }}";
        var send_Message_d = "{{ route('sendMessage') }}";
        var get_chat_messages_d = "{{ route('get-chat-messages') }}";
        var create_chat_d = "{{ route('create-chat') }}";
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="slick/slick.min.js"></script>
    <script src="js/mytech.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://js.pusher.com/beams/service-worker.js"></script>
    <script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script>
    <script src="../../../CustomJavascript/chat.js"></script>

  </body>

  </html>
