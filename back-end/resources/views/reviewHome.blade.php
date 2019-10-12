@extends('layouts.master')

@section('content')

<!-- <div class="nav-scroller bg-white shadow-sm" style="padding-top: 120px; background-color:#bfbfbf;"
>
  <nav class="navbar navbar-inverse" style="background-color:#ffffff; text-align:center ">
    <a class="nav-link" style="color:white" href="reviewFormSpeak">     Post Review  </a>
    <a class="nav-link" style="color:white" href="myReviews">     My Reviews    </a>
    <a class="nav-link" style="color:white" href="reviewHome">     View Reviews    </a>
    <a class="nav-link" style="color:white" href="myPoints">     My Points
      <span class="badge badge-pill bg-dark align-text-bottom">27</span>
    </a>
    
  </nav>
</div> -->
<div>
    <form>
        <div class="form-row" style="padding: 10px">
            <div class="form-group col-md-3">
                <input type="text" class="form-control" id="keyword" placeholder="Keyword" onkeydown="">
            </div>
            <div class="form-group col-md-3">
                <select id="district" class="form-control">
                    <option selected>District</option>
                    <option>th</option>
                    <option>rg</option>
                </select>
            </div>
            
            <div class="form-group col-md-3">     
                <select id="state" class="form-control">
                    <option selected>State</option>
                    <option>mh</option>
                </select>
            </div>
    
            <div class="form-group col-md-3"> 
                <select id="title" class="form-control">
                    <option selected>Title</option>
                    <option>Sugar Cane</option>
                    <option>School Stationary</option>
                    <option>Pharmacy</option>
                </select>
            </div>
        </div>
    </form>


    @foreach ($reviews as $review)

    <main role="main" class="container" style="padding-top:50px">
      <div class="jumbotron">
        <h1>TITLE - {{ $review->title }}</h1>
        <p class="lead">REVIEW - {{ $review->review }}</p>
        <a class="btn btn-primary" href="/upvoteReview/{{ $review->id }}">UPVOTE</a><b>{{ $review->upvotes }}</b>
        <a class="btn btn-primary" href="/downvoteReview/{{ $review->id }}">DOWNVOTE</a><b>{{ $review->downvotes }}</b>
        <br><br>
        <button class="btn btn-danger" 
        onclick="speak_review(this)">Hear Me!</button>
        <!-- <a class="btn btn-lg btn-primary" href="/docs/4.3/components/navbar/" role="button">View navbar docs &raquo;</a>
      </div> -->
    </main>

    @endforeach
</div>
<script type="text/javascript">
    function speak_review(event)
    {
        //alert(review);
        //console.log(event.parentElement.getElementsByTagName('p')[0].innerHTML);
        var msg = new SpeechSynthesisUtterance(event.parentElement.getElementsByTagName('p')[0].innerHTML);
        window.speechSynthesis.speak(msg);
    }
</script>
@endsection