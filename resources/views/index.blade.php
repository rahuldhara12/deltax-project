<!doctype html>
<html lang="en">
   <head>
      <title>Spotify</title>
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
      <div class="container">
         <div class="row">
            <div class="col-md-12">
				
               <div class="table-wrap">
                  <span>
                     <h2 class="heading-section">TOP 10 Songs</h2>
                     <a href="{{route('addNewSongs')}}">  <button class="btn btn-outline-primary float-right m-2" >+ Add Song</button></a>
					 
                  </span>
				  @if(Session::has('msg'))
					<p class="alert alert-danger" role="alert">{{ Session::get('msg') }}</p>
					@endif
                  <div>
					
                     <table class="table table-responsive-xl">
                        <thead>
                           <tr>
                              <th>Artwork</th>
                              <th>Song</th>
                              <th>Date of Release</th>
                              <th>Artist</th>
                              <th>Rate</th>
                           </tr>
                        </thead>

                        <tbody>
							
							@foreach ($songs as $song)
							
								
							


                           <tr class="alert" role="alert">
                              <td class="d-flex align-items-center">
                                 <div class="img" style="background-image: url('artImage/{{$song->artwork}}');"></div>
                              </td>
                              <td>{{$song->name}}</td>
                              <td>{{$song->dor}}</td>
                              <td>
                                 <div class="pl-3 email">
                                    <span>{{$song->artists}}</span>
                                    {{-- <span>Added: 01/03/2020</span> --}}
                                 </div>
                                 </button>
                              </td>
                              <td>{{$song->rate}}</td>
                           </tr>
						   @endforeach
						  
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      {{-- ffff --}}
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="table-wrap">
                  
                     <table>
                        <th>
                           <h2 class="heading-section">TOP 10 Artists</h2>
                        </th>
						@if(Session::has('message'))
						<p class="alert alert-danger" role="alert">{{ Session::get('message') }}</p>
						@endif
                     </table>
					 
						<button class="btn btn-outline-success float-right m-2" data-toggle="modal" data-target="#exampleModal">+ Add Artists</button>
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						   <div class="modal-dialog" role="document">
							  <div class="modal-content">
								 <div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								 </div>
								 <div class="modal-body">
									<form action="{{route('uploadArtists')}}" method="POST" >
									   @csrf
									   <div class="form-row">
										  <div class="form-group col-md-6">
											 <label for="inputEmail4">Artist Name</label>
											 <input type="text" name="name"  class="form-control"  placeholder="Name">
										  </div>
										  <div class="form-group col-md-6">
											 <label for="inputPassword4">Date of Birth</label>
											 <input type="date" name="dob"class="form-control" id="inputPassword4" placeholder="date of birth">
										  </div>
									   </div>
									   <div class="form-group">
										  <label for="inputAddress">Bio</label>
										  <input type="text" name="bio"  class="form-control" id="inputAddress" placeholder="Description about the Artists">
									   </div>
									   <div class="form-submit ">
										  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										  <button type="submit"  class="btn btn-secondary" id="submit" name="submit">submit</button>
									   </div>
									</form>
								 </div>
							  </div>
						   </div>
						</div>
					 </>
                  
                  <table class="table table-responsive-xl">
                     <thead>
                        <tr>
                           <th>Artist</th>
                           <th>Date of Birth</th>
                           <th>Song</th>
                        </tr>
                     </thead>
					
                     <tbody>
						@foreach ($artists as $artist)
                        <tr class="alert" role="alert">
                           <td>	{{ $artist->name}}</td>
                           <td>	{{$artist->dob}}</td>
                           <td>	dfdf</td>
                        </tr>
                     </tbody>
					 @endforeach
                  </table>
               </div>
            </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/popper.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>
      <script src="asset/js/main.js"></script>
   </body>
</html>