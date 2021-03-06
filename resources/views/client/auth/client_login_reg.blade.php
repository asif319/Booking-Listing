<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

    <div class="small-dialog-header">
        <h3>Client Sign In</h3>
    </div>

    <!--Tabs -->
    <div class="sign-in-form style-1">

        <ul class="tabs-nav">
            <li class=""><a href="#tab1">Log In</a></li>
            <li><a href="#tab2">Register</a></li>
        </ul>

        <div class="tabs-container alt">

            <!-- Login -->

            <div class="tab-content" id="tab1" style="display: none;">
                @include('error.error')
                <form action="{{ route('client.login') }}" method="POST" class="login">
                    {{ csrf_field() }}

                    <p class="form-row form-row-wide">
                        <label for="username">Username:
                            <i class="im im-icon-Male"></i>
                            <input type="text" class="input-text" name="name" id="username" value="" required/>
                        </label>
                    </p>

                    <p class="form-row form-row-wide">
                        <label for="password">Password:
                            <i class="im im-icon-Lock-2"></i>
                            <input class="input-text" type="password" name="password" id="password" required/>
                        </label>
                        <span class="lost_password">
										<a href="#" >Lost Your Password?</a>
									</span>
                    </p>

                    <div class="form-row">
                        <input type="submit" class="button border margin-top-5" name="submit" value="Login" />
                        <div class="checkboxes margin-top-10">
                            <input id="remember-me" type="checkbox" name="check">
                            <label for="remember-me">Remember Me</label>
                        </div>
                    </div>

                </form>
            </div>

            <!-- Register -->
            <div class="tab-content" id="tab2" style="display: none;">
                @include('error.error')
                <form action="{{ route('client.register') }}" method="POST" class="register">
                    {{ csrf_field() }}

                    <p class="form-row form-row-wide">
                        <label for="username2">Username:
                            <i class="im im-icon-Male"></i>
                            <input type="text" class="input-text" name="name" id="username2" value="" required/>
                        </label>
                    </p>

                    <p class="form-row form-row-wide">
                        <label for="email2">Email Address:
                            <i class="im im-icon-Mail"></i>
                            <input type="text" class="input-text" name="email" id="email2" value="" required/>
                        </label>
                    </p>

                    <p class="form-row form-row-wide">
                        <label for="password1">Password:
                            <i class="im im-icon-Lock-2"></i>
                            <input class="input-text" type="password" name="password" id="password1" required/>
                        </label>
                    </p>

                    <p class="form-row form-row-wide">
                        <label for="password2">Repeat Password:
                            <i class="im im-icon-Lock-2"></i>
                            <input class="input-text" type="password" name="password_confirmation" id="password2" required/>
                        </label>
                    </p>

                    <input type="submit" class="button border fw margin-top-10" name="submit" value="Register" />

                </form>
            </div>

        </div>
    </div>
</div>
