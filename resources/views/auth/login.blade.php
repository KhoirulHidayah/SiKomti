<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Login Pengguna</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&display=swap">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Montserrat', sans-serif;
        }

        .login-page {
            display: flex;
            flex-direction: column;
            justify-content: center;  /* Memastikan elemen berada di tengah secara vertikal */
            align-items: center;      /* Memastikan elemen berada di tengah secara horizontal */
            height: 100vh;            /* Mengatur tinggi agar memenuhi viewport */
            background: linear-gradient(to bottom, #5c78b7, #a1c2ea); /* Biru ke biru muda */
            text-align: center;
            padding: 0 20px;
        }


        .login-title {
            font-size: 3rem;
            font-weight: bold;
            color: #fff;
            margin-bottom: 2rem;
        }

        .logo {
            width: 120px;
            height: 120px;
            background-color: #ccc;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-size: 2rem;
            color: #555;
            margin-bottom: 3rem;
        }

        .login-subtitle {
            font-size: 1.5rem;
            color: #ffffff;
            font-weight: bold;
            margin-bottom: 2rem;
        }

        /* Input field styling */
        .input-group {
            width: 100%;
            max-width: 400px;
        }

        .username-field, .password-field {
            font-size: 1.2rem;
            padding: 1rem 1.5rem;
            border-radius: 10px;
            font-weight: bold;
            width: 100%;
            margin-bottom: 1rem;
            border: 2px solid #ccc;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
            height: 50px;
        }

        .username-field:focus, .password-field:focus {
            border-color: #4e73df;
            outline: none;
        }

        .error-message {
            color: #ff6b6b;
            font-size: 1rem;
            text-align: center;
            max-width: 400px;
            width: 100%;
            margin-bottom: 1rem;
        }

        .remember-me-container {
            font-size: 1.2rem;
            display: flex;
            justify-content: space-between;
            max-width: 400px;
            width: 100%;
            margin-bottom: 1.5rem;
        }

        .btn-login {
            font-size: 1.3rem;
            padding: 1rem;
            font-weight: bold;
            color: #fff;
            width: 100%;
            max-width: 400px;
            background: linear-gradient(135deg, #71789e, #415481);
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }

        .register-prompt {
            font-size: 1.2rem;
            color: #fff;
            text-decoration: underline;
            margin-top: 2rem;
        }

        /* Responsiveness */
        @media (max-width: 600px) {
            .login-title {
                font-size: 2rem;
                margin-bottom: 1rem;
            }

            .login-subtitle {
                font-size: 1.2rem;
                margin-bottom: 1rem;
            }

            .logo {
                width: 100px;
                height: 100px;
                font-size: 1.5rem;
                margin-bottom: 2rem;
            }

            .username-field, .password-field {
                font-size: 1rem;
                padding: 0.8rem 1rem;
                margin-bottom: 1rem;
            }

            .btn-login {
                font-size: 1.2rem;
                padding: 0.8rem;
            }
        }
    </style>
</head>
<body class="hold-transition login-page">
    <div class="login-page">
        <div class="login-title">Welcome to Sikomti</div>
        <div class="logo">Logo</div>
        <p class="login-subtitle">Silahkan Login Ke akun anda</p>

        <form action="{{ url('login') }}" method="POST" id="form-login">
            @csrf
            <!-- Username Field -->
            <div class="input-group mb-3">
                <input type="text" id="username" name="username" class="username-field" placeholder="Masukkan Username">
                <label class="error-message" id="username-error"></label>
            </div>
            
            <!-- Password Field -->
            <div class="input-group mb-3">
                <input type="password" id="password" name="password" class="password-field" placeholder="Masukkan Password">
                <label class="error-message" id="password-error"></label>
            </div>

            <!-- Remember Me -->
            <div class="remember-me-container">
                <div class="icheck-primary">
                    <input type="checkbox" id="remember"><label for="remember">Remember Me</label>
                </div>
            </div>

            <!-- Login Button -->
            <button type="submit" class="btn-login">Login</button>

            <!-- Register Prompt -->
            <a href="{{ url('register') }}" class="register-prompt">Belum punya akun?</a>
        </form>

        <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('adminlte/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('adminlte/plugins/jquery-validation/additional-methods.min.js') }}"></script>
        <script src="{{ asset('adminlte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $("#form-login").validate({
                    rules: {
                        username: {
                            required: true,
                            minlength: 4,
                            maxlength: 20
                        },
                        password: {
                            required: true,
                            minlength: 5,
                            maxlength: 20
                        }
                    },
                    messages: {
                        username: {
                            required: "Username harus diisi",
                            minlength: "Username minimal 4 karakter",
                            maxlength: "Username maksimal 20 karakter"
                        },
                        password: {
                            required: "Password harus diisi",
                            minlength: "Password minimal 5 karakter",
                            maxlength: "Password maksimal 20 karakter"
                        }
                    },
                    errorPlacement: function(error, element) {
                        error.insertAfter(element).addClass('error-message');
                    },
                    submitHandler: function(form) {
                        $.ajax({
                            url: form.action,
                            type: form.method,
                            data: $(form).serialize(),
                            success: function(response) {
                                if (response.status) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil',
                                        text: response.message,
                                    }).then(function() {
                                        window.location = response.redirect;
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Terjadi Kesalahan',
                                        text: response.message
                                    });
                                }
                            }
                        });
                        return false;
                    }
                });
            });
        </script>
    </div>
</body>
</html>
