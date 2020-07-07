@extends('user.layouts.dashboard_master')
@section('log_reg')

    <div class="dashboard-content">
        @if(session('regSuc'))
            <div class="notification success closeable">
                <p><span>Congrats!</span> {{ session('regSuc') }}</p>
                <a class="close" href="#"></a>
            </div>
    @endif
            @if(session('changeSuc'))
            <div class="notification success closeable">
                <p><span>Congrats!</span> {{ session('changeSuc') }}</p>
                <a class="close" href="#"></a>
            </div>
    @endif
        <!-- Titlebar -->
        <div id="titlebar">
            <div class="row">
                <div class="col-md-12">
                    <h2>User Login</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Profile -->
            <div class="col-lg-6 col-md-12">
                <div class="dashboard-list-box margin-top-0">
                    <h4 class="gray">Log In</h4>
                    <div class="dashboard-list-box-static">
                        @include('error.error')
                        <form action="{{ route('user.login') }}" method="POST" class="login">
                            {{ csrf_field() }}
                            <div class="my-profile">
                                <label>UserName</label>
                                <input type="text" class="input-text" name="name" id="username" placeholder="Username" required/>

                                <label>Password</label>
                                <input class="input-text" type="password" name="password" id="password" placeholder="Password" required/>

                                <span class="lost_password">
										<a href="#" >Lost Your Password?</a>
									</span>
                            </div>
                            <div class="form-row">
                                <input type="submit" class="button border margin-top-5" name="submit" value="Login" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Change Password -->
            <div class="col-lg-6 col-md-12">
                <div class="dashboard-list-box margin-top-0">
                    <h4 class="gray">Register</h4>
                    <div class="dashboard-list-box-static">
                        @include('error.error')
                        <form action="{{ route('user.register') }}" method="POST" class="register">
                            {{ csrf_field() }}
                            <div class="my-profile">
                                <label>UserName</label>
                                <input type="text" class="input-text" name="name" id="username2" value="" required/>

                                <label>Email</label>
                                <input type="text" class="input-text" name="email" id="email2" value="" required/>

                                <label>Password</label>
                                <input class="input-text" type="password" name="password" id="password1" required/>

                                <label>Repeat Password</label>
                                <input class="input-text" type="password" name="password_confirmation" id="password2" required/>
                            </div>
                            <div class="form-row">
                                <input type="submit" class="button border fw margin-top-10" name="submit" value="Register" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- Copyrights -->
            <div class="col-md-12">
                <div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
            </div>

        </div>

    </div>
    @endsection






