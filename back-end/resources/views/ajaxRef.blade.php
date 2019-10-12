<!DOCTYPE html>
<html>
<head>
<title>Feed</title>
<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>



<div style="padding-left: 500px;">

<select id="title">

<option value="Title">Title</option>
<option value="Spurs">Spurs</option>
<option value="Liverpool">Liverpool</option>
<option value="City">City</option>

</select>

<input type="text" name="keyword" id="keyword" placeholder="keyword" onkeydown="fetch_keyword()">
<!--
<select>

<option value="Year">Year</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>

</select>

<select>

<option value="Year">Year</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>

</select> -->



<!-- @php
$title = "fkjdshkkdsfhjkhsdk";
@endphp -->

<script type="text/javascript" >

var count = 1;
if (count == 1) {
fetch_data();
count = 0;
}

// var title = document.getElementById('title').options[document.getElementById('title').selectedIndex].text;
var title, keyw;
$('#keyword').change(fetch_keyword);
$('#title').change(fetch_data);


function fetch_data()
{
title = $('#title option:selected').text();
keyw = $('#keyword').val();
console.log(title);

$.ajax({
headers: {
   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
url : " {{ route('feedFilter') }} ",
method : 'POST',
data : {title : title, keyword : keyw , function : 'fetch'},
dataType : 'json',
success:function(data)
{

console.log(data);
console.log(data.length);
var output = ' ';
   $('#total_records').text(data.length);
   for(var count = 0; count < data.length; count++)
   {
    // output += '<tr>';
    output += '<div class="card" style="width: 1000px;" ><div class="card-body" id="cbody">';
    output += '<h5 class="card-title">' + data[count].title + '</h5>';
    output += '<p class="card-text">' + data[count].description + '</p>';
    output += '</div><ul class="list-group list-group-flush"><li class="list-group-item">Cras justo odio</li><li class="list-group-item">Dapibus ac facilisis in</li><li class="list-group-item">Vestibulum at eros</li></ul><div class="card-body"><button class="btn btn-success" onclick="upvote('+ data[count].id +')">Upvote </button>'+ data[count].upvote +'<button type="button" class="btn btn-danger" onclick="downvote('+ data[count].id +')">Downvote</button> '+ data[count].downvote+' </div></div><br>';
   
   }
   // console.log(output);
   document.getElementById("cards").innerHTML = output;
 },

 error:function()
 {
  console.log('Latak Gye');
 }

})
}

function upvote(id)
{
$.ajax({
headers: {
   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
url : "{{ route('feedFilter') }}",
method : 'POST',
data : {id : id, function : 'upvote'},
dataType : 'json',
success:function(data)
{
// location.reload(true);
fetch_data();
console.log('UPvoted');
},

error:function()
{
console.log('flop vote');
}

})
}

function downvote(id)
{
$.ajax({
headers: {
   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
url : "{{ route('feedFilter') }}",
method : 'POST',
data : {id : id, function : 'downvote'},
dataType : 'json',
success:function(data)
{
fetch_data();
console.log('downvoted');
},

error:function()
{
console.log('flop vote');
}

})
}

function fetch_keyword()
{
title = $('#title option:selected').text();
keyw = $('#keyword').val();

$.ajax({
headers: {
   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
url : "{{ route('feedFilter') }}",
method : 'POST',
data : {title : title, keyword : keyw, function : 'search'},
dataType : 'json',
success:function(data)
{

console.log(data);
console.log(data.length);
var output = ' ';
   $('#total_records').text(data.length);
   for(var count = 0; count < data.length; count++)
   {
    // output += '<tr>';
    output += '<div class="card" style="width: 1000px;" ><div class="card-body" id="cbody">';
    output += '<h5 class="card-title">' + data[count].title + '</h5>';
    output += '<p class="card-text">' + data[count].description + '</p>';
    output += '</div><ul class="list-group list-group-flush"><li class="list-group-item">Cras justo odio</li><li class="list-group-item">Dapibus ac facilisis in</li><li class="list-group-item">Vestibulum at eros</li></ul><div class="card-body"><button class="btn btn-success" onclick="upvote('+ data[count].id +')">Upvote </button>'+ data[count].upvote +'<button type="button" class="btn btn-danger" onclick="downvote('+ data[count].id +')">Downvote</button> '+ data[count].downvote+' </div></div><br>';
   
   }
   // console.log(output);
   document.getElementById("cards").innerHTML = output;
 },
error:function(data)
{
console.log('undone');
}

})
}








</script>



</div>

<div class="col-md-5">Sample Data - Total Records - <b><span id="total_records"></span></b></div>
<!-- <table id="myTable">
<tr>
<th>Title</th>
<th>Description</th>
</tr>

<tbody id="content">

</tbody>
</table> -->


<br><br>


<!-- @foreach($articles as $article)

@if(  $article->title == "Spurs"  ) -->
<div class="col-md-6" id="cards" style="padding-left: 100px;">

<!-- <div class="card" style="width: 1000px;" >
 <img src="..." class="card-img-top" alt="...">
 <div class="card-body" id="cbody"> -->
   <!-- <h5 class="card-title">{{ $article->title }}</h5>
   <p class="card-text">{{ $article->description }}</p> -->
 <!-- </div>
 <ul class="list-group list-group-flush">
   <li class="list-group-item">Cras justo odio</li>
   <li class="list-group-item">Dapibus ac facilisis in</li>
   <li class="list-group-item">Vestibulum at eros</li>
 </ul>
 <div class="card-body">
   <a href="#" class="card-link">Card link</a>
   <a href="#" class="card-link">Another link</a>
 </div>
</div> -->

</div>

<!-- <br> -->
<!-- @endif
@endforeach -->





</body>
</html>