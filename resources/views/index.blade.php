<html>
    <head>

        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title> Data_Table</title>

    </head>

    <body>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div>
              <div class="card">
                <div class="card-header">
                  <h1 style="text-align: center" > Data Table </h1>

                  <div style="text-align: right">
                  <a href="{{ route('add') }}">
                    <button class="btn btn-md btn-success" > Add New</button>
                  </a>
                </div>
                </div>
                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Blood Group</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
        
                            @foreach ($blood_donation_datas as $blood_donation_data )
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $blood_donation_data->blood_group }}</td>
                            <td>{{ $blood_donation_data->name }}</td>
                            <td>{{ $blood_donation_data->phone_number }}</td>
                            <td>{{ $blood_donation_data->email }}</td>
                            <td>{{ $blood_donation_data->address }}</td>
                            <td>
                              <div class="btn-group">
                                <a href="{{ route('edit', $blood_donation_data->id) }}">
                                    <button class="btn btn-md btn-success me-1 p-1">edit</button>
                                </a>
                                <form action="{{route('delete')}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <input type="text" name="blood_donation_data_id" value="{{ $blood_donation_data->id}}" hidden>
                                  <button class = "btn btn-md btn-danger p-1">delete</button>
                                </form>
                              </div>
                            </td>
                          </tr>
                          @endforeach
        
                        </tbody>
                      </table>
                     
                </div>
              </div>
            </div>
          </div>
        </div>
            
      </div>
    </body>
</html>