<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      /* Custom CSS for padding and margin */
      .custom-container {
          padding: 20px; /* Adjust as needed */
          margin: 10px; /* Adjust as needed */
          background-color: #f8f9fa; /* Add a background color */
          border: 1px solid #ccc; /* Add a border for better separation */
          border-radius: 5px; /* Add rounded corners */
      }
  
      /* Style for headings */
      .section-title {
          font-size: 24px;
          font-weight: bold;
      }
  
      .job-detail-info {
          font-size: 16px;
      }
  </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-4">
      <div class="row">
          <!-- Left Side: Job Details Heading -->
          <div class="col-md-6">
              <h1 class="section-title">Job Detail Page</h1>
              <h4 class="job-detail-info">Job Title</h4>
              <h4 class="job-detail-info">Company Name</h4>
              <h4 class="job-detail-info">Company Location</h4>
              <h4 class="job-detail-info">Job Type</h4>
              <h4 class="job-detail-info">Job Description</h4>
              <h4 class="job-detail-info">Qualification</h4>
              <h4 class="job-detail-info">Experience</h4>
              <h4 class="job-detail-info">Application Deadline</h4>
              <h4 class="job-detail-info">Contact Info</h4>
          </div>
  
          <!-- Right Side: Job Details from Controller -->
          <div class="col-md-6">
              <h1 class="section-title">Job Details</h1>
              <h4 class="job-detail-info">{{$job->job_title}}</h4>
              <h4 class="job-detail-info">{{$job->company_name}}</h4>
              <h4 class="job-detail-info">{{$job->company_location}}</h4>
              <h4 class="job-detail-info">{{$job->job_type}}</h4>
              <h4 class="job-detail-info">{{$job->job_desc}}</h4>
              <h4 class="job-detail-info">{{$job->qualification}}</h4>
              <h4 class="job-detail-info">{{$job->experience}}</h4>
              <h4 class="job-detail-info">{{$job->application_deadline}}</h4>
              <h4 class="job-detail-info">{{$job->contact_info}}</h4>
          </div>
      </div>
  </div>
  
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
