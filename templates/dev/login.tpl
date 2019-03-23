 <form method="post" action="{$systemurl}dologin.php" class="login-form" role="form">
                <div class="form-group">
                    <label for="inputEmail">{$LANG.clientareaemail}</label>
                    <input type="email" name="username" class="form-control" id="inputEmail" placeholder="{$LANG.enteremail}" autofocus>
                </div>

                <div class="form-group">
                    <label for="inputPassword">{$LANG.clientareapassword}</label>
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="{$LANG.clientareapassword}" autocomplete="off" >
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="rememberme" /> {$LANG.loginrememberme}
                    </label>
                </div>

                <div align="center">
                    <input id="login" type="submit" class="btn btn-primary" value="{$LANG.loginbutton}" /> <a href="pwreset.php" class="btn btn-default">{$LANG.forgotpw}</a>
                </div>
            </form>