<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <form active="index.php" class="container mt-5 m-5 p-5 mx-5 needs-validation" novalidate method="$_POST">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" placeholder="Enter name" class="form-control"require>
  </div>
   <div class="valid-feedback">
      Thanks!
    </div>
     <div class="invalid-feedback">
      Enter valid data!
    </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" placeholder="Enter Email">
  </div>
  <div class="invalid-feedback">
      Enter valid data!
    </div>
   <div class="valid-feedback">
      Thanks!
    </div>
    <div class="invalid-feedback">
      Enter valid data!
    </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control"  placeholder="Enter Passward">
  </div>
   <div class="valid-feedback">
      !
    </div>
    <div class="invalid-feedback">
      Enter valid data!
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
</html>