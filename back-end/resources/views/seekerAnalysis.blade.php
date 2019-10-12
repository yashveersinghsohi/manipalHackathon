@extends('layouts.master')

@section('content')

<div class="nav-scroller bg-white shadow-sm" style="padding-top: 120px; background-color:#bfbfbf;"
>
  <nav class="navbar navbar-inverse" style="background-color:#ffffff; text-align:center ">
    <a class="nav-link" style="color:white" href="seeker">  Search Jobs    </a>
   
    <a class="nav-link" style="color:white" href="appliedJobs">  Applied Jobs    </a>
    <a class="nav-link" style="color:white" href="seekerAnalysis">     Skills in Demand   </a>
     <a class="nav-link" style="color:white" href="learn">    Learn    </a>
    
    <!-- <a class="nav-link" style="color:white" href="#">     
      <span class="badge badge-pill bg-dark align-text-bottom">27</span>

    </a> -->



</nav>
</div>
<div >
    <div style="width: 800px; height: 700px;">
		<canvas id="myChart" width="20px" height="11px"></canvas>
	
	</div>
	<script type="text/javascript">

		
		var ctx = document.getElementById('myChart').getContext('2d');
		var mixedChart = new Chart(ctx, {
    type: 'bar',
    data: {
        datasets: [{
            label: 'Bar Dataset',
            data: [10, 20, 30, 40],
            backgroundColor : 'rgb(253,203,0,1)'
        }, {
            label: 'Line Dataset',
            data: [50, 70, 40, 60],

            // Changes this dataset to become a line
            type: 'line',
            fill : false,
            lineTension : 0.01,
            borderColor : 'rgba(0,0,0,0.5)'
        }],
        labels: ['Management', 'Electrician', 'Transport', 'Farming']
    },
    options: { scales : {
    	yAxes : [{
    		ticks : { beginAtZero : true }
    	}]
    }
}
});
		
	</script>
	
  </nav>
</div>
<div >

	@endsection

