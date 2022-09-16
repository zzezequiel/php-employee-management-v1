<!-- TODO Employee view -->
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class=" position-absolute top-50 start-50 translate-middle">
    

<form class="row g-3" action="library\employeeController.php" method="post">
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">Name</label>  <!--value with fetch on the jason to autofill the form !!! quit placeholder!!!!! -->
    <input type="text" name="name" placeholder="<?php echo "bernat" ?>" class="form-control" id="inputName" value=<?php echo "hola" ?> >
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Last Name</label>
    <input type="text" name="lastName" placeholder="<?php echo "bernat" ?>" class="form-control" id="inputLastName" value=<?php echo "hola2"?>>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email address</label>
    <input type="email" name="email"placeholder="<?php echo "bernat" ?>"class="form-control" id="inputAddress">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Gender</label>
    <input type="text" name="gender" placeholder="<?php echo "bernat" ?>" class="form-control" id="inputGender">
  </div>
  
  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">City</label>
    <input type="text" name="city" placeholder="<?php echo "bernat" ?>" class="form-control" id="inputCity">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Street Address</label>
    <input type="text" name="street" placeholder="<?php echo "bernat" ?>" class="form-control" id="inputAddress">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">State</label>
    <input type="text" name="state" placeholder="<?php echo "bernat" ?>" class="form-control" id="inputState">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Age</label>
    <input type="number" name="age" placeholder="<?php echo "bernat" ?>" class="form-control" id="inputAge">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Postal Code</label>
    <input type="number" name="postal" placeholder="<?php echo "bernat" ?>" class="form-control" id="inputPostalCode">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Phone Number</label>
    <input type="tel" name="phone" placeholder="<?php echo "bernat" ?>" class="form-control" id="inputPhone">
  </div>
  
  <!--buttons submit-->
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Return</button>
  </div>
</form>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>