<div class="tab-content" id="tab1">
    <form action="" method="POST" class="login">
        {{ csrf_field() }}

        <p class="form-row form-row-wide">
            <label for="username">Old Password:
                <i class="im im-icon-Male"></i>
                <input type="text" class="input-text" name="oldpassword" id="username" value="" />
            </label>
        </p>

        <p class="form-row form-row-wide">
            <label for="password">New Password:
                <i class="im im-icon-Lock-2"></i>
                <input class="input-text" type="password" name="password" id="password"/>
            </label>
        </p>

        <p class="form-row form-row-wide">
            <label for="password">Confirm Password:
                <i class="im im-icon-Lock-2"></i>
                <input class="input-text" type="password" name="password_confirmation" id="password"/>
            </label>
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
