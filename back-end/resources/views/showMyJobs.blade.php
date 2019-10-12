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


    @foreach ($myJobs as $job)

    <main role="main" class="container" style="padding-top:50px">
      <div class="jumbotron">
        <h1><b>JOB TITLE</b> - {{ $job->type }}</h1>
        <p class="lead"><b>DESCRIPTION</b> - {{ $job->description }}</p>
        <p class="lead"><b>SALARY</b> - {{ $job->salary }}</p>
        <p class="lead"><b>VACANCY</b> - {{ $job->vacancy }}</p>
        <a class="btn btn-lg btn-primary" href="/showApplicants/{{ $job->id }}" role="button">Show Applicants &raquo;</a>
      </div>
    </main>

    @endforeach
</div>

@endsection