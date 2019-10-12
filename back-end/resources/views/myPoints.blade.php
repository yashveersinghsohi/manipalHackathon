@extends('layouts.master')

@section('content')
<div class="anything" style="padding: 300px; background-image: url('images/coins.jpg') ; 
  background-size: contain, cover;">
	<div class="circle" style="width: 400px;
  height: 400px;
  border-radius: 50%;
  font-size: 100px;
  color: #fff;
  line-height: 400px;
  text-align: center;
  background: #FDCB00;
  position: absolute;
  top: 30%;
left: 35%">27</div>

<!--   <button type="button" style="background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  position: absolute;
  top: 90%;
  left: 43.5%;
  font-size: 16px;">Redeem!</button> -->
  <button type="button" class="btn btn-primary"style=" 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  position: absolute;
  top: 90%;
  left:45%;
  font-size: 16px;">Redeem!</button>

</div>


@endsection
