<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container mt-4" >
        <h1>Welcome user</h1>


        <form action="">
          <div class="form-group">
              <input type="search" name="search" value="{{$searched_data}}" class="form-control rounded" placeholder="Search Jobs" />
              <button class="btn btn-primary" type="submit">Search</button>         
          </div>
          </form>
        


<h4>Viewing all jobs</h4>
    <div class="row">
      @foreach ($jobs as $data)
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 23rem;">
          <div class="card-body">
            <h3 class="card-title">{{$data->job_title}}</h3>
            <input type="hidden" name="job_id" value="{{$data->id}}">
            <p class="card-text">Company Name: {{$data->company_name}}</p>
            <p class="card-text">Company Location: {{$data->company_location}}</p>
            <p class="card-text" style="color: red">Application Deadline: {{$data->application_deadline}}</p>
            {{-- <p class="card-text">Some quick example text to build on the Job Title and make up the bulk of the card's content.</p> --}}
            <a href="{{url('/apply-job-form/'.$data->id)}}" class="btn btn-primary">Apply</a>
            <a href="{{url('/view-job-detail-user/'.$data->id)}}" class="btn btn-info">View Detail</a>

          </div>
        </div>
      </div>
       @endforeach
    </div>
  </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
