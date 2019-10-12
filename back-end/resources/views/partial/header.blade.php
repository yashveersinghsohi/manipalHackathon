<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Work X</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
     
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqcloud/1.0.4/jqcloud-1.0.4.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqcloud/1.0.4/jqcloud.css">
    
    
    <link rel="stylesheet" href="{{ URL::asset('fonts/flaticon/font/flaticon.css') }}">
  
    <link rel="stylesheet" href="{{ URL::asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">


    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="/">WORK<strong class="font-weight-bold" style="color:#FDCB00">X</strong> </a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation" >
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li><a href="/home">Home</a></li>
                      <li><a href="about">About</a></li>
                      
                      
                      
                      <li class="has-children">
                        <a href="#">Who Are You</a>
                        <ul class="dropdown arrow-top">
                          <!-- <li><a href="viewReviews">Reviewer</a></li>
                          <li><a href="viewReviewsCreator">Creator</a></li>
                          <li><a href="viewIdeas">Investor</a></li>
                          <li><a href="seeker">Seeker</a></li> -->

                          <li class="has-children">
                            <a href="#">Reviewer</a>
                            <ul class="dropdown">
                              <li><a href="reviewHome">View all Reviews</a></li>
                              <li><a href="reviewFormSpeak">Post Reviews</a></li>
                              <li><a href="myReviews">My Reviews</a></li>
                              <li><a href="myPoints">My Points</a></li>
                            </ul>
                          </li>

                          <li class="has-children">
                            <a href="#">Creator</a>
                            <ul class="dropdown">
                              <li><a href="/reviewHome">View all Reviews</a></li>
                              <li><a href="/ideaForm">Post Ideas</a></li>
                              <li><a href="/myIdeas">My Ideas</a></li>
                              <li><a href="/viewIdeas">View Ideas</a></li>
                              <li><a href="/showMyStartups">My startups</a></li>
                              <li><a href="/creatorAnalysis">Analysis</a></li>
                              <li><a href="/chatHome">Chat</a></li>
                            </ul>
                          </li>

                          <li class="has-children">
                            <a href="#">Investor</a>
                            <ul class="dropdown">
                              <li><a href="viewIdeas">View Ideas</a></li>
                              <li><a href="myInvestments">My Investments</a></li>
                              <li><a href="investorAnalysis">Analysis</a></li>
                            </ul>
                          </li>

                          <li class="has-children">
                            <a href="#">Seeker</a>
                            <ul class="dropdown">
                              <li><a href="showStartups">Search Jobs</a></li>
                              <li><a href="seekerAnalysis">Skills in Demand</a></li>
                              <li><a href="/learn">Learn</a></li>
                            </ul>
                          </li>

                          <li><a href="/showProfile">Profile</a></li>

                        </ul>
                      </li>
                      
                      <!-- <li><a href="{{ route('login') }}">Log In</a></li>
                      <li><a href="{{ route('register') }}"><span class="bg-secondary text-white py-3 px-4 rounded"><span class="icon-plus mr-3"></span>Register</span></a></li> -->


                      @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                          <!-- <div>
                            <li class="has-children">
                              <a href="#">{{ Auth::user()->fname }} {{ Auth::user()->lname }}</a>
                              <ul class="dropdown arrow-top">
                                <li>
                                  <a class="dropdown-item" href="/profileMain">
                                      Profile      
                                  </a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                  </a>
                                </li>
                              </ul>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                            </form>

                          </div> -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fname }} {{ Auth::user()->lname }}<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <!-- <a class="dropdown-item" href="/showProfile">
                                      Profile      
                                    </a> -->

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                      

                      <!-- <li><a href="profileMain"><span class="bg-warning text-white py-3 px-4 rounded">Profile</span></a></li> -->
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>