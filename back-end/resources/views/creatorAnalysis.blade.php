@extends('layouts.master')

@section('content')


<div class="nav-scroller bg-white shadow-sm" style="padding-top: 120px; background-color:#bfbfbf;"
>
  <nav class="navbar navbar-inverse" style="background-color:#ffffff; text-align:center ">
    <a class="nav-link" style="color:white" href="viewReviewsCreator">     View Reviews    </a>
    <a class="nav-link" style="color:white" href="ideaForm">     Post Ideas </a>
    <a class="nav-link" style="color:white" href="myIdeas">     My Ideas    </a>
     <a class="nav-link" style="color:white" href="startUps">     StartUps    </a>
     <a class="nav-link" style="color:white" href="postJobs">     Post Jobs    </a>
      <a class="nav-link" style="color:white" href="jobs">     Job Dashboard    </a>
    <a class="nav-link" style="color:white" href="creatorAnalysis">     Analysis    </a>
    <!-- <a class="nav-link" style="color:white" href="#">     
      <span class="badge badge-pill bg-dark align-text-bottom">27</span>
    </a> -->
    
  </nav>
</div>
<div >

  <div style="width: 800px; height: 700px;">
    <canvas id="myChart" width="20px" height="11px"></canvas>
  
  </div>
    <div id="word-cloud" style="border: 1px solid black; height: 300px; width: 400px;position: absolute;top:40%;left: 50%;">
      <h3 style="text-align: center"><u>Most Frequent Words</u></h3>
    </div>
  <script type="text/javascript">

    var ctx = document.getElementById('myChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
    type: 'pie',
    data : {
      datasets : [{
        
        
        data : [10,20,30],
        backgroundColor : ['rgb(255,99,132)','rgb(54,162,235)','rgb(255,205,86)']
      }],
      labels : ['milk', 'stationary', 'sports']
    } ,
    options : { cutoutPercentage : 10,
          title : {

            display :true,
            text : 'Keywords'

          }

          }
});
    var words = [
  {text: "Milk", weight: 13},
  {text: "Stationary", weight: 10.5},
  {text: "Medicines", weight: 9.4},
  {text: "Schools", weight: 8},
  {text: "transport", weight: 6.2},
  {text: "newspaper", weight: 5},
  ];

$('#word-cloud').jQCloud(words);
  </script>

  @endsection