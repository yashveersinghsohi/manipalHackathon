@extends('layouts.master')

@section('content')

<div class="nav-scroller bg-white shadow-sm" style="padding-top: 120px; background-color:#bfbfbf;"
>
  <nav class="navbar navbar-inverse" style="background-color:#ffffff; text-align:center ">
    <a class="nav-link" style="color:white" href="seeker">  Search Jobs    </a>
   
    <a class="nav-link" style="color:white" href="appliedJobs">  Applied Jobs    </a>
    <a class="nav-link" style="color:white" href="seekerAnalysis">     Skills in Demand   </a>
     <a class="nav-link" style="color:white" href="learn">    Learn    </a>
    
    <!-- <a class="nav-link" style="color:white" href="#">     
      <span class="badge badge-pill bg-dark align-text-bottom">27</span>
    </a> -->
    
  </nav>
</div>
<div >

    <!-- HOME -->
    <section class="home-section section-hero inner-page overlay bg-image"
      style="background-image: url('images/hero_1.jpg');height: 85%; padding-top: 200px;" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">Learn </h1>
              
            </div>
          </div>
        </div>
      </div>
    </section>


<section class="site-section services-section bg-light block__62849" id="next-section">
  <div class="container">

<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cooking Courses </h5>
        <p class="card-text">Get Started with cooking for free ..</p>
        <a target="_blank" href="https://www.udemy.com/topic/cooking/" class="btn btn-primary">Learn</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Sewing Courses  </h5>
        <p class="card-text">Get Started with Sewing for free .</p>
        <a target="_blank" href="https://www.skillshare.com/browse/sewing" class="btn btn-primary">Learn</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Basic Maths courses  </h5>
        <p class="card-text"> Get Your basics Right</p>
        <a target="_blank" href="https://study.com/academy/subj/math/basic-math.html" class="btn btn-primary">Learn</a>
      </div>
    </div>
  </div>
</div>

<div class="row" style="padding-top:20px;">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">ITI Courses   </h5>
        <p class="card-text"> Become a ITI Professional</p>
        <a target="_blank" href="https://www.iti.com/courses" class="btn btn-primary">Learn</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">English Speaking Courses </h5>
        <p class="card-text"> Speak English Fluently.</p>
        <a target="_blank" href="https://speaktoday.com/?v=c86ee0d9d7ed" class="btn btn-primary">Learn</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"> Plumber Courses </h5>
        <p class="card-text">Become a  Plumber.</p>
        <a target="_blank" href="https://alison.com/course/diploma-in-plumbing-studies" class="btn btn-primary">Learn</a>
      </div>
    </div>
  </div>
</div>

<div class="row" style="padding-top:20px;">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"> Electrician Courses</h5>
        <p class="card-text"> Become a  electrician. </p>
        <a target="_blank" href="http://www.electricianinformationresource.com/online-electrician-training.html" class="btn btn-primary">Learn</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"> Supervisor Courses </h5>
        <p class="card-text"> Become a  Supervisor.</p>
        <a target="_blank" href="https://www.udemy.com/courses/business/project-management/?search-query=project+management" class="btn btn-primary">Learn</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Mobile Repairing Courses </h5>
        <p class="card-text">Mobile Repairing Courses</p>
        <a target="_blank" href="http://www.mobilerepairingcourse.in/?i=1" class="btn btn-primary">Learn</a>
      </div>
    </div>
  </div>
</div>

    
    <!--   
      <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

        <a target="_blank" href="http://www.electricianinformationresource.com/online-electrician-training.html" class="block__16443 text-center d-block">
          
          <h3>   Electrician Courses   </h3>
          <p> Become a  electrician. </p>
        </a>

      </div>
      <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

        <a target="_blank" href="https://alison.com/course/diploma-in-plumbing-studies" class="block__16443 text-center d-block">
          
          <h3>   Plumber Courses   </h3>
          <p> Become a  Plumber. </p>
        </a>

      </div>
      <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

        <a target="_blank" href="https://www.udemy.com/courses/business/project-management/?search-query=project+management" class="block__16443 text-center d-block">
          
          <h3>  Supervisor Courses   </h3>
          <p> Become a  Supervisor. </p>
        </a>

      </div>
      <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

        <a target="_blank" href="https://www.prizminstitute.com/courses/laptop-repair" class="block__16443 text-center d-block">
          
          <h3>  Laptop Repairing Courses   </h3>
          <p> Be a laptop Expert </p>
        </a>

      </div>
      <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

        <a target="_blank" href="http://www.mobilerepairingcourse.in/?i=1" class="block__16443 text-center d-block">
          
          <h3> Mobile Repairing Courses   </h3>
          <p> Be a mobile Expert. </p>
        </a>

      </div>
      <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

        <a target="_blank" href="https://www.coursera.org/browse/business/leadership-and-management" class="block__16443 text-center d-block">
          
          <h3>  Online Management Courses   </h3>
          <p> Become a  electrician. </p>
        </a>

      </div> -->
      


  </div> -->
</section>



<section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-8">
        <h2 class="text-white">Looking For A Job?</h2>
        
      </div>
      <div class="col-md-3 ml-auto">
        <a href="register" class="btn btn-warning btn-block btn-lg">Sign Up</a>
      </div>
    </div>
  </div>
</section>

  
  </div>

@endsection