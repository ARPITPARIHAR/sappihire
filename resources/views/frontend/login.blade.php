<section class="login rgstr">
    <div class="container">
        <div class="row">
            <!-- Login Form -->
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="login_inr">
                    <h3>Login</h3>
                    <p>Enter your email and password to login:</p>
                    <form action="{{ route('login.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="E-mail">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Sign Up Form -->
            <div class="col-md-6">
                <div class="login_inr sgnup">
                    <h3>Sign Up</h3>
                    <p>Please fill in the information below:</p>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="text" value="{{ old('name') }}" name="name" placeholder="First Name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" value="{{ old('email') }}" name="email" placeholder="E-mail">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" value="{{ old('password') }}" name="password" placeholder="Password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="phone" value="{{ old('phone') }}" name="phone" placeholder="Phone Number">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" value="{{ old('address') }}" name="address" placeholder="Address">
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="rgstr" name="rgstr" value="1">
                                <label class="custom-control-label" for="rgstr">Register to our newsletter</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .login {
        padding: 50px 0;
    }

    .login_inr, .login_inr.sgnup {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .login_inr h3 {
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    .login_inr p {
        font-size: 14px;
        color: #666;
        margin-bottom: 20px;
    }

    .login_inr .form-group {
        margin-bottom: 20px;
    }

    .login_inr input[type="email"],
    .login_inr input[type="password"],
    .login_inr input[type="text"],
    .login_inr input[type="phone"],
    .login_inr input[type="checkbox"],
    .login_inr button[type="submit"] {
        width: 100%;
        padding: 12px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .login_inr .btn {
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        cursor: pointer;
    }

    .login_inr .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
    }

    .login_inr .btn-primary:hover {
        background-color: #0056b3;
    }

    .login_inr .btn-success {
        background-color: #28a745;
        color: #fff;
        border: none;
    }

    .login_inr .btn-success:hover {
        background-color: #218838;
    }

    .text-danger {
        color: #dc3545;
        font-size: 14px;
        margin-top: 5px;
    }

    .custom-control-label {
        font-size: 14px;
    }
</style>
