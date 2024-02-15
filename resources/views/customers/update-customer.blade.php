<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Update Customer</title>
</head>
<body>
    

<form method="post"  class="container col-md-6 border border-success mt-5 p-5">
 @csrf
  <hr>
  <h2 class="mt-3 mb-3 text-primary text-center font-weight-bold">Update Customer Form</h2>
  <hr>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name" value="{{$customer->name}}" require>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address"  placeholder="Enter Address" value="{{$customer->address}}" require>
  </div>
  <div class="form-group">
    <label for="designation">Designation</label>
    <input type="text" class="form-control" id="designation" name="designation"  placeholder="Enter Designation" value="{{$customer->designation}}" require>
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" id="age" name="age"  placeholder="Enter Age" value="{{$customer->age}}" require>
  </div>
  <div class="row ">
    <div class="col">
        <button type="submit" class="mt-3 btn btn-primary col-md-12">Save Customer</button>
    </div>

    <div class="col">
        <button type="submit" class="mt-3 btn btn-danger col-md-12">Cancel</button>
    </div>
  </div>
    
 
</form>

    
</body>
</html>