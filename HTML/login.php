<!doctype html>
<!-- login.php -->
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
       
    <link rel="stylesheet" href="../CSS/login.css">
</head>

<body>
    <div class="limiter">
        <div class="container">
            <div id="login_form">
                <form action="..\PHP\login_process.php" class="needs-validation " method="post">
                    <span class="form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>
                    <span class="form-title">
                        Log in
                    </span>
                    <div class="content">
                        <input  type="text" id="Username" name="Username" Required>
                        <label for="Username">Username</label>
                    </div>

                    <div class="content">
                        <input  type="password" id="Password" name="Password" required>
                        <label for="Password">Password</label>
                    </div>

                    <div class="form-check">
                        <input  id="ckb1" type="checkbox" name="remember-me">
                        <label  for="ckb1">
                            Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">log in</button>
                </form>
            </div>
        </div>
    </div>


    <!-- <script>
       
        (function () {
            window.addEventListener('load', function () {
                let form = document.getElementsByClassName('needs-validation')[0]; // Assuming there's only one form with the class 'needs-validation'
                let inputs = document.querySelectorAll('input');

                form.addEventListener("submit", function (event) {
                    event.preventDefault();

                    inputs.forEach(input => {
                        if (!input.checkValidity()) {
                            event.stopPropagation();
                        }
                    });

                    form.classList.add('was-validated');
                }, false);
            });
        })();


    </script> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>