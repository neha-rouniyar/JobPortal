<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .form-group {
          margin-bottom: 15px; 
        }
        form {
          padding: 50px;
        }
      </style>
    <title>Job Apply Form</title>
  </head>
  <body>
    @if(session('message'))
    <div class="alert alert-success" role="alert">
        {{session('message')}}
      </div>
   @endif
      <form action="{{url('/submit-job-apply')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Job Application form</h1>
        <input type="hidden" name="job_id" value="{{$job_id}}">
        <a href="{{url('/dashboard')}}">
            <button type="button" class="btn btn-primary">Return Back</button>
        </a>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Full Name</label>
            <input type="text" class="form-control" name="full_name" placeholder="Full Name">
            @error('full_name')
              <p style="color: red">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Address">
            @error('address')
              <p style="color: red">{{$message}}</p>
            @enderror
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email Address</label>
              <input  type="email" class="form-control" name="email" placeholder="Email Address">
              @error('email')
              <p style="color: red">{{$message}}</p>
            @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Contact No</label>
              <input type="number" class="form-control" name="contact" placeholder="Contact No">
              @error('contact')
              <p style="color: red">{{$message}}</p>
            @enderror
            </div>

          </div>
          
             <label for="formFileDisabled" class="form-label">Upload CV</label>
             <input class="form-control col-md-6" type="file" name="cv" />
             @error('cv')
             <p style="color: red">{{$message}}</p>
           @enderror
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPassword4">Education</label>
                <input type="text" class="form-control" name="education" placeholder="Education">
                @error('education')
                <p style="color: red">{{$message}}</p>
              @enderror
              </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Experience</label>
              <input type="text" class="form-control" name="experience" placeholder="Experience">
              @error('experience')
             <p style="color: red">{{$message}}</p>
           @enderror
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Apply Job</button>
      </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>