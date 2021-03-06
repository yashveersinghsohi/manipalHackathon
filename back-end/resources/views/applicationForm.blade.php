@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Application form</div>

                <div class="card-body">
                    <form method="POST" action="/jobHome">
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="resume" class="col-md-4 col-form-label text-md-right">Resume</label>

                            <div class="col-md-6">
                                <input id="resume" type="text" class="form-control" name="resume">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="skills" class="col-md-4 col-form-label text-md-right">Skills</label>

                            <div class="col-md-6">
                                <input id="skillls" type="text" class="form-control" name="skills">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Upload application
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
