
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacy Management System</title>

    <style>
        body {
  margin: 10px 120px;
  font-family: "Lato", sans-serif;

}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

.btn{
    background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 10px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 30px;
}
.btn:hover{
    color: #036b45;
}

.btn-secondary{
    background-color: rgb(40, 40, 219);
}

.btn-danger{
    background-color: red;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                      <h2>Pharmacy Management System<h2>
                      {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button> --}}
                      
                    </div>
                  </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                 <div class="sidebar">
                    <h1 style="text-align: center">{{ Auth::user()->name }}</h1>
                        <a class="active" href="{{ url('admin/customers/list') }}">Customers</a>
                        {{-- <a href="#news">Items</a><br><br> --}}
                        <a href="{{ url('logout') }}">Logout</a>
                        
                  </div>
                  
            <div class="col-md-9">
                <div class="content">
                    <h1>Customers</h1>
                    <a href="{{ url('admin/customers/add') }}" class="btn">Add New Customers</a>

                    <table>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>ABC</td>
                            <td>ABC,Sri Lanka</td>
                            <td>0123456789</td>
                            <td><a href="" class="btn btn-secondary">Update</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                            
                        </tbody>


                    </table>

                  </div>
            </div>
            </div>
        </div>

    </div>
</body>
</html>