@extends('layouts.master')

@section('content')

<div>
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


    @foreach ($myStartups as $startup)

    <main role="main" class="container" style="padding-top:50px">
      <div class="jumbotron">
        <h1>COMPANY NAME - {{ $startup->company_name }}</h1>
        <a class="btn btn-lg btn-primary" href="/postJobs/{{ $startup->id }}" role="button">Post jobs &raquo;</a>
        <a class="btn btn-lg btn-primary" href="/showMyJobs/{{ $startup->id }}" role="button">My jobs &raquo;</a>
      </div>
    </main>

    @endforeach
</div>

@endsection