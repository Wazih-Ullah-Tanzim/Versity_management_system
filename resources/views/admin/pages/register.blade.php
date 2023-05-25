

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('admin/assets/img/favicon.ico') }}" rel="icon">
    <link href="{{ asset('admin/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <title>Registration</title>
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ url('login/registration.css') }}">
    <link rel="shortcut icon" href="{{ url('frontend/img/fav.png') }}">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Responsive Regisration Form </title>-->
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center py-4">

        </div>
        <a href="/" class="logo d-flex align-items-center w-auto">
            <img src="assets/img/logo.png" width="30" height="30" alt="">
        </a>
        <header>
            Premier University Registration
        </header>
    </br>
        @if(Session::has('info'))
            <div class="alert alert-success">
                <strong>{{ Session::get('info') }}</strong>
            </div>
        @endif

        <form method="POST" action="{{ url('admin/create_user') }}" enctype="multipart/form-data" class="row g-3 needs-validation"
            novalidate>
            @csrf
            <div class="form first">
                <div class="details personal">


                    <div class="fields">
                        <div class="input-field">
                            <label for="">
                                <h3>Name :</h3>
                            </label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="input-field">
                            <label for="">
                                <h3>Email :</h3>
                            </label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="input-field">
                            <label for="">
                                <h3>Birth date :</h3>
                            </label>
                            <input type="date" name="birth_date" class="form-control">
                        </div>

                        <div class="input-field">
                            <label for="">
                                <h3>Mobile Number:</h3>
                            </label>
                            <input type="text" name="number" class="form-control">
                        </div>

                        <div class="input-field">
                            <label for="">
                                <h3>Department :</h3>
                            </label>
                            <select name="department" class="form-control">
                                <option value="">Select Department</option>
                                <option value="cse">Computer Sciece and Engineering</option>
                                <option value="eee">Electronic and Elcetrical Engineering</option>
                                <option value="hrm">Human Resource Management</option>
                                <option value="eco">Economics</option>
                            </select>
                        </div>

                        <div class="input-fd">
                            <label>
                                <h3>Gender :</h3>
                            </label>
                            <input type="radio" name="gender" value="male"> Male
                            <input type="radio" name="gender" value="female"> Female

                        </div>

                    </div>
                </div>

                <div class="details ID">


                    <div class="fields">
                        <div class="input-field">
                            <p><label for="address">
                                    <h3>Address :</h3>
                                </label></p>
                            <textarea id="address" name="address" rows="4" cols="50">
                </textarea>

                        </div>

                        <div class="input-field">
                            <label for="">
                                <h3>Blood Group :</h3>
                            </label>
                            <select name="blood" class="form-control">
                                <option value="">Select Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>

                            </select>
                        </div>
                        <div class="input-field">
                            <label for="">
                                <h3>Role :</h3>
                            </label>
                            <select name="role" id="" class="form-control">
                                <option value="">Select an option</option>
                                <option value="Student">Student</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>


                        <div class="input-field">
                            <label for="profile_pic">
                                <h3>Upload Image :</h3>
                            </label><br>
                            <input type="file" class="form-control" id="profile_pic" name="profile_pic">

                        </div>

                        <div class="input-field">
                            <label for="">
                                <h3>Password :</h3>
                            </label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="input-field">
                            <label for="">
                                <h3>Confirm Password :</h3>
                            </label>
                            <input type="password" name="cnf_password" class="form-control" required>
                        </div>


                    </div>

                    <button class="button">

                        <input type="submit" class="input-field" value="Save">
                    </button>
                    <div class="input-field">
                        <p class="small mb-0">Already have an account? <a
                                href="{{ url('/admin/login') }}">Log in</a></p>
                    </div>



                </div>
            </div>


        </form>
    </div>

    <script src="{{ url('login/registration.js') }}"></script>
</body>

</html>
