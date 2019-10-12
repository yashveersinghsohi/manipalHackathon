@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 120px; margin-bottom: 120px;">
                <div class="card-header"><b>Post Job</b></div>

                <div class="card-body">
                    <form method="POST" action="/processJob">
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="startup_id" class="col-md-4 col-form-label text-md-right"><b>Stratup id</b></label>

                            <div class="col-md-6">
                                <input id="startup_id" type="text" class="form-control" name="startup_id" value="{{ $startup_id }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right"><b>Type</b></label>

                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control" name="type">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right"><b>Description</b></label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="salary" class="col-md-4 col-form-label text-md-right"><b>Salary</b></label>

                            <div class="col-md-6">
                                <input id="salary" type="number" class="form-control" name="salary">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="vacancy" class="col-md-4 col-form-label text-md-right"><b>Vacancy</b></label>

                            <div class="col-md-6">
                                <input id="vacancy" type="number" class="form-control" name="vacancy">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Post Job
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
