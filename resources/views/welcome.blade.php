<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @include('partials.css')
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <img src="assets/images/logo.png" />
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4" style="font-size: 48px">
                                        Login
                                    </h3>
                                </div>
                            </div>
                            <h3 style="color: #757575; font-size: 20px">
                                Welcome back!
                            </h3>
                            <form action="{{ route('login.post') }}" class="signin-form" method="POST">
                                @csrf @if ($errors->first('login'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('login') }}
                                    </div>
                                @endif
                                <div class="form-group mb-3">
                                    <label class="label" for="username">Username</label>
                                    <input type="username" class="form-control" placeholder="username" name="username"
                                        id="username" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                        required id="password" required />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.js')
</body>

</html>
