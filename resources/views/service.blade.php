@extends('layout.app')
@section('title','Services')


@section('content')


<h1 class="text-center">Services</h1>


<div class="container">
	
<div class="row">
	
<div class="col-md-4 p-1">


<div class="card" style="width: 100%;">
  <img src="{{asset('images/logo.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>



</div>

<div class="col-md-4 p-1">


<div class="card" style="width: 100%;">
  <img src="{{asset('images/logo.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>



</div>

<div class="col-md-4 p-1">


<div class="card" style="width: 100%;">
  <img src="{{asset('images/logo.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</div>

</div>


</div>
</div>



<div class="container p-5">
	
<div class="row">
	


<div class="col-md-6 p-5">






<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Your Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>


<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Your Mobile</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>


<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Your E-mail</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>



  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Your Message</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>




  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <div class="d-grid gap-2 col-12 mx-auto">
  <button type="submit" class="btn btn-lg btn-primary">Send Now</button>
  </div>  
</form>









</div>


<div class="col-md-6 p-5">

<h1>Address :</h1>
<h2>43 Enayet Ganj, Dhaka-1205</h2>
<h2>Phone : 01847088837</h2>
<h2>E-mail : shafique.uddin@otobi.com</h2>


</div>



</div>
</div>










@endsection