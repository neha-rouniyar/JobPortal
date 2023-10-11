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
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
      <table class="table">
        <h1>Applicants List</h1>
        <a href="{{url('/admin')}}">
            <button type="button" class="btn btn-primary">Return Back</button>
        </a>
        <thead>
          <tr>
            <th scope="col">S.N</th>
            <th scope="col">Job Title</th>
            <th scope="col">Applicant Name</th>
            <th scope="col">Applicant CV</th>
            <th scope="col">Applicant Email</th>
          </tr>
        </thead>
        <tbody>
          @php
          $i = 1; 
          @endphp
          @foreach ($applicants as $user)
          <tr>
            <th>{{$i++}}</th>
            {{-- @foreach($user->jobs as $jobs) --}}
               <td>{{$user->jobs->job_title}}</td>
            {{-- @endforeach --}}
            <td>{{$user->applicant_name}}</td>
            <td><img src="{{asset('/images/'.$user->document)}}" style="height: 70px; width: 70px" data-toggle="modal" data-target="#imageModal" class="enlarge-image"></td>
            <td>{{$user->applicant_email}}</td>

          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Applicants CV</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="image-enlarge" src="" alt="Enlarged Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      // JavaScript to handle image enlargement
      $(document).ready(function () {
          $('.enlarge-image').click(function () {
              var imgSrc = $(this).attr('src');
              $('#image-enlarge').attr('src', imgSrc);
              $('#imageModal').modal('show');
          });
      });
  </script>
  </body>
</html>
