<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Work X</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Speech to text conversion using JavaScript</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>

    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">


    
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
                              <li><a href="ideaForm">Post Ideas</a></li>
                              <li><a href="myIdeas">My Ideas</a></li>
                              <li><a href="startUps">Startups</a></li>
                              <li><a href="postJobs">Post Jobs</a></li>
                              <li><a href="jobs">Job Dashboards</a></li>
                              <li><a href="creatorAnalysis">Analysis</a></li>
                            </ul>
                          </li>

                          <li class="has-children">
                            <a href="#">Investor</a>
                            <ul class="dropdown">
                              <li><a href="viewIdeas">View Ideas</a></li>
                              <li><a href="myInvestments">My Investments</a></li>
                              <li><a href="analysis">Analysis</a></li>
                            </ul>
                          </li>

                          <li class="has-children">
                            <a href="#">Seeker</a>
                            <ul class="dropdown">
                              <li><a href="seeker">Search Jobs</a></li>
                              <li><a href="appliedJobs">Applied Jobs</a></li>
                              <li><a href="seekerAnalysis">Skills in Demand</a></li>
                              <li><a href="learn">Learn</a></li>
                            </ul>
                          </li>

                        </ul>
                      </li>
                      
                      <!-- <li><a href="{{ route('login') }}">Log In</a></li>
                      <li><a href="{{ route('register') }}"><span class="bg-secondary text-white py-3 px-4 rounded"><span class="icon-plus mr-3"></span>Register</span></a></li> -->


                      <!-- @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                          <div>
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
                                    
                                    <a class="dropdown-item" href="/profileMain">
                                      Profile      
                                    </a>

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

        <main class="py-4">
            <div class="container" style="margin:100px;">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Post Review</div>

                            <div class="card-body">
                                <form method="POST" action="/postReviewAudio">
                                    {{csrf_field()}}

                                    <div class="form-group row">
                                        <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="review-title" name="title">
                                        </div>
                                        <button type="button" id="title-btn" title="Start" class = "btn btn-primary"onclick="record_review()">Spk</button> 

                                        <!-- <button type="button" id="start-btn" title="Start">Start</button> -->

                                        <!-- <span id="instructions">Press the Start button</span> -->
                                    </div>

                                    <!-- <div class="form-group row">
                                        <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                                        <div class="col-md-6">
                                            <input id="description" type="text" class="form-control" name="description">
                                        </div>

                                        <button type="button" id="start-btn" title="Start">Start</button>

                                        <span id="instructions" style="float:right;">Press the Start button</span>
                                    </div> -->

                                    <div class="form-group row">
                                        <label for="review" class="col-md-4 col-form-label text-md-right">Review</label>

                                        <div class="input col-md-6">
                                            <textarea class="form-control" name="review" id="textbox" rows="1"></textarea>
                                            <!-- <input type="hidden" name="review"> -->
                                        
                                        </div>

                                        <button type="button" id="start-btn" title="Start" class = "btn btn-primary"onclick="record()">Spk</button>

                                        <!-- <span id="instructions">Press the Start button</span> -->
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Submit Review
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


    <footer class="site-footer">
      <div class="container">
        

        <div class="row">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">About</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quos rem ullam, placeat amet.</p>
            <p><a href="#" class="btn btn-primary pill text-white px-4">Read More</a></p>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Approach</a></li>
                    <li><a href="#">Sustainability</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul>
              </div>
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Categories</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Full Time</a></li>
                    <li><a href="#">Freelance</a></li>
                    <li><a href="#">Temporary</a></li>
                    <li><a href="#">Internship</a></li>
                  </ul>
              </div>
            </div>
          </div>

          
          <div class="col-md-2">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                  <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

                </p>
              </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <!-- Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart text-warning" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a> -->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  
  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/main.js"></script>
    

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>


    <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

  </body>
</html>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        //console.log('chal jaa');
        var SpeechRecognition = window.webkitSpeechRecognition;  
        var recognition = new SpeechRecognition();
        //console.log('api running');
        var SpeechRecognition_title = window.webkitSpeechRecognition;
        var recognition_title = new SpeechRecognition_title();
        /*var title = $('#title');
        var description = $('#description');
        var review = $('#review');*/
        var Textbox = $('#textbox');
        var Title = $('#review-title');
        //var instructions = $('instructions');
        var Content = '';
        recognition.continuous = true;
        recognition_title.continuous = true;
        var Content1 = '';
        //console.log('before function');
        
        recognition.onresult = function(event)
        {
            console.log("Inside function");
          var current = event.resultIndex;
            var transcript = event.results[current][0].transcript;
            Content += transcript;
        console.log(Content);

        document.getElementById('textbox').innerHTML = Content; 
      };
        recognition_title.onresult = function(event)
        {
            console.log("Inside title function");
          var current = event.resultIndex;
            var transcript = event.results[current][0].transcript;
            Content1 += transcript;
        console.log(Content1);
        //console.log(document.getElementById('review-title'));
        Title.val(Content1);
        /*Textbox.val(Content);*/
        };
             
        /*recognition.onstart = function() {
        instructions.text('Voice recognition is ON.');
        }
         
        recognition.onspeechend = function() {
          instructions.text('No activity.');
        }
         
        recognition.onerror = function(event) {
          if(event.error == 'no-speech') {
            instructions.text('Try again.');  
          }
        }*/
         
        function record(){
            if (Content.length) {
            Content += ' ';
            console.log('Button clicked');
          }
          else{
            console.log("else in button clicked");
          }
          recognition.start();
        console.log('recording start');
        }
        function record_review()
        {
          console.log('entered the button');
          
          if(Content1.length){
          Content1 += '';
          console.log('in if');
          }
          recognition_title.start();

        }
        Textbox.on('input', function() {
            Content = $(this).val();
        });
        $('#review-title').on('input', function(){
          Content1 = $(this).val();
          //console.log('up event');
        });
        /*document.getElementById('start-btn').addEventListener('click', function(){
            if (Content.length) {
            Content += ' ';
            console.log('Button clicked');
          }
          else{
            console.log("else in button clicked");
          }
          recognition.start();
        console.log('recording start');    
        });*/
        /*$('#start-btn').on('click', function(e) {
          if (Content.length) {
            Content += ' ';
            console.log('Button clicked');
          }
          else{
            console.log("else in button clicked");
          }
          recognition.start();
        console.log('recording start');
        });*/

         
        /*Textbox.on('input', function() {
          Content = $(this).val();
        })*/

        </script>


</body>
</html>

