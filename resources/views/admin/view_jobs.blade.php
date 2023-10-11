<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .table {
            margin: 70px; 
            padding: 20px; 
        }
        .table th {
            padding: 10px; 
        }
        .table td {
            padding: 10px;
        }
        .center-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        body {
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-container {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <table class="table">
        <h1>View Jobs</h1>
        <div class="btn-container">
            <a href="{{url('/admin')}}">
                <button type="button" class="btn btn-primary">Return Back</button>
            </a>
        </div>
        <thead>
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Job Title</th>
                <th scope="col">Company Name</th>
                <th scope="col">Application Deadline</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1; 
            @endphp
            @foreach ($jobs as $data)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$data->job_title}}</td>
                    <td>{{$data->company_name}}</td>
                    <td>{{$data->application_deadline}}</td>
                    <td>
                        <a href="{{url('view-job-detail/'.$data->id)}}"><button type="button" class="btn btn-info">View Details</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
