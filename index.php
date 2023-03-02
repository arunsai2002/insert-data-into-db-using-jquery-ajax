<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <title>Hello, world!</title>
  </head>
  <body>
  <form action="" method="post">
  <div class="container-fluid">
  <div class="form-group mt-5">
    <label>Name</label>
    <input type="text" name="name" id="name">
    
  </div>

  <div class="form-group mt-5">
    <label>Email</label>
    <input type="email" name="email" id="email">
    
  </div>

  <div class="form-group mt-5">
    <label>Password</label>
    <input type="password" name="password" id="password">
  </div>
  
  <div class="form-group mt-5">
    <label>mobile</label>
    <input type="text" name="mobile" id="mobile">
    
  </div>

  <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
  </div>
</form>
    </body>


    
        <script>
        $(document).ready(function() {
 
            $("#submit").click(function() {
 
                var name = $("#name").val(); //id of the form fields are fetched
                var email = $("#email").val();
                var password = $("#password").val();
                var mobile = $("#mobile").val();
               
 
               
 
                $.ajax({
                    type: "POST",
                    url: "core.php",
                    data: {
                        name1: name, //variables are assigned to another variables
                        email1: email,
                        password1: password,
                        mobile1: mobile
                        
                    },
                    cache: false,
                    success: function(data) {
                        alert(data);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });
                 
            });
 
        });
    

    </script>
</html>
