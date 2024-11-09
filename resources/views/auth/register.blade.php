<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Pengguna</title>
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
            font-size: 2.5rem;
            color: #555;
            margin-bottom: 3rem;
        }

        .login-subtitle {
            font-size: 1.5rem;
            color: #ffffff;
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        .input-group {
            width: 100%;
            max-width: 400px;
        }

        .form-control {
            font-size: 1.2rem;
            padding: 1rem 1.5rem;
            border-radius: 10px;
            font-weight: bold;
            width: 100%;
            margin-bottom: 0.5rem;
            border: 2px solid #ccc;
            transition: border-color 0.3s ease;
            height: 45px;
        }

        .form-control:focus {
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

        .btn-login {
            font-size: 1.2rem;
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
        }

        .register-prompt {
            font-size: 1.1rem;
            color: #fff;
            text-decoration: underline;
            margin-top: 3rem;
        }

        /* Menyesuaikan ukuran font dan box untuk elemen select */
        select.form-control {
            font-size: 1rem; /* Ukuran font lebih kecil */
            height: 50px; /* Menyesuaikan tinggi box */
            padding: 0.75rem 1rem; /* Padding lebih kecil untuk box */
        }
    </style>
</head>
<body class="hold-transition login-page">
    <div class="login-page">
        <div class="login-title">Register to Sikomti</div>
        <div class="logo">Logo</div>
        <p class="login-subtitle">Silahkan Daftar untuk memulai sesi Anda</p>

        <form action="{{ url('register') }}" method="POST" id="form-register">
            @csrf
            <div class="input-group mb-3">
                <select name="level_id" id="level_id" class="form-control" required>
                    <option value="">- Pilih Level -</option>
                    @foreach ($level as $l)
                        <option value="{{ $l->level_id }}">{{ $l->level_nama }}</option>
                    @endforeach
                </select>
                <label class="error-message" id="level-error"></label>
            </div>

            <div class="input-group mb-3">
                <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan Username" required>
                <label class="error-message" id="username-error"></label>
            </div>

            <div class="input-group mb-3">
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                <label class="error-message" id="nama-error"></label>
            </div>

            <div class="input-group mb-3">
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                <label class="error-message" id="password-error"></label>
            </div>

            <button type="submit" class="btn-login">Sign Up</button>

            <a href="{{ url('login') }}" class="register-prompt">Sudah punya akun?</a>
        </form>

        <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('adminlte/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('adminlte/plugins/jquery-validation/additional-methods.min.js') }}"></script>
        <script src="{{ asset('adminlte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $("#form-register").validate({
                    rules: {
                        level_id: { required: true, number: true },
                        username: { required: true, minlength: 3, maxlength: 20 },
                        nama: { required: true, minlength: 3, maxlength: 100 },
                        password: { required: true, minlength: 5, maxlength: 20 }
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
                                    $('.error-message').text('');
                                    $.each(response.msgField, function(prefix, val) {
                                        $('#' + prefix + '-error').text(val[0]);
                                    });
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
