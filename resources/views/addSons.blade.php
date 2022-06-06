<!doctype html>
<html lang="en">
   <head>
      <title>Add Songss</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="asset/css/style.css">
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item ">
                     <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                  </li>
               </ul>
               <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
               </form>
            </div>
         </div>
      </nav>
    <form action="{{route('uploadSongs')}}" method="POST"  enctype="multipart/form-data">
          @csrf
      <div class="container mt-5">
         <div class="row">
            <div class="col-lg-6">
               <!-- Name input -->
               <div class="form-outline">
                  <input type="text" id="form8Example1" name="name" class="form-control" />
                  <label class="form-label" for="name">Song Name</label>
               </div>
            </div>
            <div class="col-lg-4">
               <!-- Email input -->
               <div class="form-outline">
                  <input type="date" id="form8Example2" name="dor" class="form-control" />
                  <label class="form-label" for="date">Date of Release</label>
               </div>
            </div>
         </div>
         <hr />
         <div class="row">
            <div class="col-lg-4">
               <!-- Name input -->
               <div class="form-outline">
                  <input type="file" id="form8Example3" name="artwork" class="form-control" />
                  <label class="form-label" for="image">Art-Work</label>
               </div>
            </div>
            <div class="col-lg-4">
              
                   
              
               <select class="form-select" name="artists" aria-label="Default select example">
                @foreach ($artists as $art)
                
                <option value="{{$art->name}}">{{$art->name}}</option>
                @endforeach
              </select>
             
            </div>

            <div class="col-lg-4">
                <!-- Name input -->
                <div class="form-outline">
                   <input type="number" id="form8Example3" name="rate" class="form-control" />
                   <label class="form-label" for="rate">Rate</label>
                </div>
             </div>

            
         </div>
         <div class="col-auto  d-flex align-items-center justify-content-center">
            <button type="submit" class="btn btn-secondary">Submit</button>
          </div>
      </div>
    </form>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/popper.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>
      <script src="asset/js/main.js"></script>
   </body>
</html>