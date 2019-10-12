@extends('layouts.master')

@section('content')

<div class="nav-scroller bg-white shadow-sm" style="padding-top: 120px; background-color:#bfbfbf;"
>
  <nav class="navbar navbar-inverse" style="background-color:#737373; text-align:center ">
    <a class="nav-link" style="color:white" href="reviewFormSpeak">     Post Review  </a>
    <a class="nav-link" style="color:white" href="myReviews">     My Reviews    </a>
    <a class="nav-link" style="color:white" href="reviewHome">     View Reviews    </a>
    <a class="nav-link" style="color:white" href="myPoints">     My Points
      <span class="badge badge-pill bg-dark align-text-bottom">27</span>
    </a>
    
  </nav>
</div>
<div >
    <form>
        <div class="form-row" style="padding: 10px">
            <div class="form-group col-md-3">
                <input type="text" class="form-control" id="keyword" placeholder="Keyword">
            </div>
            <div class="form-group col-md-3">
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                    <option>...</option>
                </select>
            </div>
            
            <div class="form-group col-md-3">     
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                    <option>...</option>
                </select>
            </div>
    
            <div class="form-group col-md-3"> 
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                    <option>...</option>
                </select>
            </div>
        </div>
    </form>


    @foreach ($myReviews as $review)

    <main role="main" class="container" style="padding-top:50px">
      <div class="jumbotron">
        <h1>{{ $review->title }}</h1>
        <p class="lead">{{ $review->review }}</p>
        <!-- <a class="btn btn-lg btn-primary" href="/docs/4.3/components/navbar/" role="button">View navbar docs &raquo;</a>
      </div> -->
    </main>

    @endforeach
</div>

@endsection