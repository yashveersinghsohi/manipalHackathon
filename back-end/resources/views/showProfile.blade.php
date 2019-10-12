@extends('layouts.master')

@section('content')
  <div style="height: 120px;"></div>

    <!-- <div class="site-blocks-cover overlay" "> -->
      <div class="container">
        <!-- <div class="row align-items-center"> -->
          <div class="col-12" data-aos="fade">
            <!-- h1>My Account</h1>
 -->           
           
          </div>
        <!-- </div> -->
      </div>
    <!-- </div> -->
   

   
    </div>
    <div class="profile-card" style="margin: 2% auto;
max-width: 980px;padding: 10px 0px 20px;
text-align: justify;box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.25);
padding: 55px 40px 20px 40px;">
      <div class="profile-infoLabel" style="color: #696B79;
font-weight: 400;
font-size: 22px;
border-bottom: 1px solid #EAEAEC;
padding-bottom: 15px;">Profile Details</div>
<table class="profile-infoTable" style="margin: 25px 0 25px 0; ">
  <tbody>
    <tr>
      <td>Email-Id</td>
      <td>: </td>
      <td>{{ $user->email }}</td>
    </tr>
    <tr>
      <td>First Name</td>
      <td>: </td>
      <td>{{ $user->fname }}</td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td>: </td>
      <td>{{ $user->lname }}</td>
    </tr>
    <tr>
      <td>Mobile</td>
      <td>: </td>
      <td>{{ $user->phone }}</td>
    </tr>
    <tr>
      <td>District</td>
      <td>: </td>
      <td>{{ $user->district }}</td>
    </tr>
    <tr>
      <td>State</td>
      <td>: </td>
      <td>{{ $user->state }}</td>
    </tr>
  </tbody>
 </table>
 <a href="/profileForm" class="profile-editButton" style="width: 200px;
margin: 30px 10px 30px 0px;cursor: pointer;
text-transform: uppercase;
padding: 15px;
text-align: center;

background-color: #FDCB00;
color: white;
border-radius: 5px;"> Add resume </a>

    </div>

@endsection
