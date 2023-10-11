<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      body {
          background-color: #f8f9fa;
          padding: 20px;
      }

      .section-title {
          font-size: 28px;
          color: #007bff;
          font-weight: bold;
      }

      .container {
          background-color: #fff;
          border-radius: 10px;
          padding: 20px;
      }

      .custom-card {
          width: 70%; 
          margin: 0 auto; 
      }
  </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 custom-card">
                <h1 class="section-title">Job Detail Page</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Job Title:</th>
                            <td>{{$job->job_title}}</td>
                        </tr>
                        <tr>
                            <th>Company Name:</th>
                            <td>{{$job->company_name}}</td>
                        </tr>
                        <tr>
                            <th>Company Location:</th>
                            <td>{{$job->company_location}}</td>
                        </tr>
                        <tr>
                            <th>Job Type:</th>
                            <td>{{$job->job_type}}</td>
                        </tr>
                        <tr>
                            <th>Job Description:</th>
                            <td>{{$job->job_desc}}</td>
                        </tr>
                        <tr>
                            <th>Qualification:</th>
                            <td>{{$job->qualification}}</td>
                        </tr>
                        <tr>
                            <th>Experience:</th>
                            <td>{{$job->experience}}</td>
                        </tr>
                        <tr>
                            <th>Application Deadline:</th>
                            <td>{{$job->application_deadline}}</td>
                        </tr>
                        <tr>
                            <th>Contact Info:</th>
                            <td>{{$job->contact_info}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="text-right">
          <a href="{{url('/apply-job-form/'.$id)}}" class="btn btn-primary">Apply</a>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>