  <html>
    <head>

        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title> Add_Data </title>

    </head>

    <body>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div>
                <div class="card">
                  <div class="card-header">
                    <h1> Add Data 
                      <a href="{{ url('index')}}" class="btn btn-danger float-end">BACK</a>
                    </h1>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{route('store')}}">
                      @csrf
                      <div class="row">
      
                        <div class="col">
                          <label for="formGroupExampleInput">Blood Group</label>
                          <input type="text" name="blood_group" class="form-control" placeholder="enter your blood group" required>
                        </div> 
                        <div class="col">
                          <label for="formGroupExampleInput">Name</label>
                          <input type="text" name="name" class="form-control" placeholder="enter your Name" required>
                        </div> 
                      </div><br>
      
                      <div class="row">
                          <div class="col">
                            <label for="formGroupExampleInput">Phone Number</label>
                            <input type="number" name="phone_number" class="form-control" placeholder="enter your phone number" required>
                          </div>  
                          <div class="col">
                              <label for="formGroupExampleInput">E-mail</label>
                              <input type="email" name="email" class="form-control" placeholder="enter your email" required>
                            </div>
                      </div><br>
      
                      <div class="row">
                          <div class="col">
                            <label for="formGroupExampleInput">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="enter your address" required>
                          </div>  
        
                      </div><br>
                      <button class="btn btn-md btn-success"> Save</button>
                  </form>  
                  </div>
                </div>
              </div>
            </div>
          </div>
              
        </div>   
    </body>
</html>