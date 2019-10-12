@extends('layouts.master')

@section('content')
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
        <h1>TITLE - {{ $review->title }}</h1>
        <p class="lead">REVIEW - {{ $review->review }}</p>
        <a class="btn btn-primary" href="#">UPVOTE</a><b>{{ $review->upvotes }}</b>
        <a class="btn btn-primary" href="#">DOWNVOTE</a><b>{{ $review->downvotes }}</b>
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