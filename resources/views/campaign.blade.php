<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Customer Dashboard!</title>
  </head>
  <body>
@include("navbar")

<div class="row header-container justify-content-center">
  <div class="header">
    <h1>Customer dashboard</h1>
  </div>
</div>

   @if($layout =='index')
   <div class="container-fluid mt-4">
<div class="row">
    <section class="col-md-7">
      @include("campaignslist")
    </section>
    <section class="col-md-4">
     
    </section>
  </div>
</div>


@elseif($layout =='create')

<div class="container-fluid mt-4">
   <div class="row">
          <section class="col-md-7">
            @include("campaignslist")
          </section>
          <section class="col-md-5">


            <div class="card mb-3">
 
  <div class="card-body">
    <h5 class="card-title">Create Customer Details</h5>

          <form action="{{url('/store')}}" method="get">
              
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="cne" class="form-control"  placeholder="Enter the Title" required>
  </div>

  <div class="form-group">
    <label>First Name</label>
    <input type="text" name="firstName" class="form-control"  placeholder="Enter the First Name " required>
  </div>


<div class="form-group">
    <label>Second Name</label>
    <input type="text" name="secondName" class="form-control"  placeholder="Enter the Second Name" required>
  </div>


  <div class="form-group">
    <label>Date of birth</label>
    <input type="text" name="dob" class="form-control"  placeholder="Enter the Date of birth "required>
  </div>

  <div class="form-group">
    <label>Company</label>
    <input type="text" name="speciality" class="form-control"  placeholder="Enter the Campaign name"required>
  </div>

<input type="submit" class="btn btn-info" value="Save">
<input type="reset" class="btn btn-warning" value="Reset">
</form>

  </div>
</div>
       

          </section>

        </div>
  </div>

@elseif($layout == 'show')

<div class="container-fluid mt-4">
  <div class="row">
         <section class="col-md-7">
            @include("campaignslist")
          </section>
          <section class="col-md-5"></section>
    </div>
  </div>

@elseif($layout == 'edit')

<div class="container-fluid mt-4">
  <div class="row">
        <section class="col-md-7">
          @include("campaignslist")
        </section>
        <section class="col-md-5">
          

<div class="card mb-3">
 
  <div class="card-body">
    <h5 class="card-title">Edit Customer Details</h5>
    

<form action="{{url('/update/'.$campaign->id)}}" method="get">
              
  <div class="form-group">
    <label>Title</label>
    <input type="text" value="{{ $campaign->cne  }} " name="cne" class="form-control"  placeholder="Enter the Title">
  </div>

  <div class="form-group">
    <label>First Name</label>
    <input type="text" value="{{ $campaign->firstName  }} " name="firstName" class="form-control"  placeholder="Enter the First Name ">
  </div>


<div class="form-group">
    <label>Second Name</label>
    <input type="text" value="{{ $campaign->secondName  }} " name="secondName" class="form-control"  placeholder="Enter the Second Name ">
  </div>


  <div class="form-group">
    <label>Date of birth</label>
    <input type="text" value="{{ $campaign->dob  }} " name="dob" class="form-control"  placeholder="Enter the Date of birth ">
  </div>

  <div class="form-group">
    <label>Company</label>
    <input type="text" value="{{ $campaign->speciality  }} " name="speciality" class="form-control"  placeholder="Enter the Campaign name">
  </div>

<input type="submit" class="btn btn-info" value="Update">
<input type="reset" class="btn btn-warning" value="Reset">
</form>


  </div>
</div>
        </section>
  </div>
  </div>

@endif
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>