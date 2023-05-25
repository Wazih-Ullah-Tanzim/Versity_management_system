
<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('admin/assets/img/favicon.ico')}}" rel="icon">
    <link href="{{asset('admin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ url('login/registration.css') }}">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Responsive Regisration Form </title>-->
</head>

<body>
    <div class="container2">
        <header><h3>Log in</h3></header>
    </br>
        @if(Session::has('info'))
            <div class="alert alert-success">
                <strong>{{ Session::get('info') }}</strong>
            </div>
        @endif

        <form method="post" action="{{ url('admin/user_login') }}" class="row g-3 needs-validation"
            novalidate>
            @csrf
            <div class="form first">
                <div class="details personal">

                    <div class="input-field">
                        <label for="yourEmail" class="form-label">
                            <h3>Email :</h3>
                        </label>
                        <input type="email" name="email" class="form-control" id="yourEmail" required>

                    </div>
                    <div class="invalid-feedback">Please enter a valid Email adddress!</div></br>

                    <div class="input-field">
                        <label for="yourPassword" class="form-label">
                            <h3>Password :</h3>
                        </label>
                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                </br>
                    <div class="input-field">
                        <p class="small mb-0">Don't have account? <a
                                href="{{ url('admin/register') }}">Create an account</a></p>
                    </div>





                    <button class="button">

                        <input type="submit" class="input-field" value="Save">
                    </button>



                </div>
            </div>


        </form>
    </div>

    <script src="{{ url('login/registration.js') }}"></script>
</body>

</html>
