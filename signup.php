<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS Files -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <title>Facenote - Sign Up</title>
    </head>
    <body>
        <form id="signupform" class="col-4" action="responses/signup-response.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username..." required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password..." required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@something.com" required>
            </div>
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name..." required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name...">
            </div>
            <div class="form-group">
                <label for="birthdate">Birth Date</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" required>
            </div>
            <div class="form-group">
                <div class="input-radio">
                    <input type="radio" id="male" name="sex" value="Male" checked> 
                    <label for="male">Male</label>
                </div>
                <div class="input-radio">
                    <input type="radio" id="female" name="sex" value="Female"> 
                    <label for="female">Female</label>
                </div>
            </div>
            <div class="form-group">
                <label for="profilepict">Profile Picture</label>
                <input type="file" class="form-control-file" id="profilepict" name="profilepict">
            </form>
            <button type="submit" name="submit-signup" class="btn btn-primary">Submit</button>
        </form>

        <!-- Javascript Files -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>        
        <script src="js/script.js"></script>
    </body>
</html>
