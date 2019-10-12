@extends('layouts.master')

@section('content')
<div class="nav-scroller bg-white shadow-sm" style="padding-top: 120px; background-color:#bfbfbf;"
>
  <nav class="navbar navbar-inverse" style="background-color:#ffffff; text-align:center ">
    <a class="nav-link" style="color:white" href="viewIdeas">     View Ideas     </a>
    <a class="nav-link" style="color:white" href="myInvestments">     My Investments    </a>
    <a class="nav-link" style="color:white" href="analysis">     Analysis    </a>
    
    
  </nav>
</div>

<div style="width: 800px; height: 700px;">
		<canvas id="myChart" width="20px" height="11px" style="padding: 50px;"></canvas>
	
	</div>
	<script type="text/javascript">

		
		var ctx = document.getElementById('myChart').getContext('2d');
		var myBarChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
    	datasets: [{
            label: 'Investments',
            data: [10, 20, 30, 40],
            backgroundColor : 'rgba(253,203,0,1)'
        }],
        labels : ['2008','2009','2010','2011']
    }
    	,
    options: {scales : {
    	xAxes : [{
    		ticks : { beginAtZero : true }
    	}]
    }
}
});

	</script>


@endsection