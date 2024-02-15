<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Add Customer</title>
</head>
<body>
    

<form method="post" action="./routes/customerRoute.php/save-customer" class="container col-md-6 border border-success mt-5 p-5">
  <hr>
  <h2 class="mt-3 mb-3 text-primary text-center font-weight-bold">Customer Form</h2>
  <hr>
  <div class="form-group">
    <label for="Name">Name</label>
    <input type="text" class="form-control" id="Name" name="Name"  placeholder="Enter Name" require>
  </div>
  <div class="form-group">
    <label for="Address">Address</label>
    <input type="text" class="form-control" id="Address" name="Address"  placeholder="Enter Address" require>
  </div>
  <div class="form-group">
    <label for="Designation">Designation</label>
    <input type="text" class="form-control" id="Designation" name="Designation"  placeholder="Enter Designation" require>
  </div>
  <div class="form-group">
    <label for="Age">Age</label>
    <input type="number" class="form-control" id="Age" name="Age"  placeholder="Enter Age" require>
  </div>

  <div class="row ">
    <div class="col">
        <button type="submit" class="mt-3 btn btn-primary col-md-12">Save Customer</button>
    </div>

    <div class="col">
        <button type="button" class="mt-3 btn btn-danger col-md-12">Cancel</button>
    </div>
  </div>
    
 
</form>

    
</body>
</html>