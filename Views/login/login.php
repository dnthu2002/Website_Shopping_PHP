
    <div class="login">
        <div class="login__content">
            <div class="login__img">
                <img src="upload/login.png" alt="">
            </div>
            <div class="login__forms" id="signin-form">
                <form action="?act=account&xuli=dangnhap" class="login__registre"  id="login-in" method="post">
                    <h1 class="login__title">Đăng nhập</h1>
                    <span><?php if (isset($_COOKIE['msg1'])) { ?>
								<div class="alert alert-success">
									<strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
								</div>
							<?php } ?></span>
                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="user" name="username" placeholder="Tên đăng nhập" class="login__input form-input" id="signin-email">
                        <span class="form-input-icon err">
                            <i class='bx bx-error-circle'></i>
                        </span>
                        <span class="form-input-icon success">
                            <i class='bx bx-check-circle'></i>
                        </span>
                    </div>
                    <span class="form-input-err-msg" data-err-for="signin-email"></span>


                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" name="password" placeholder="Mật khẩu" class="login__input form-input" id="signin-password">
                        <span class="form-input-icon err">
                            <i class='bx bx-error-circle'></i>
                        </span>
                        <span class="form-input-icon success">
                            <i class='bx bx-check-circle'></i>
                        </span>
                    </div>
                    <span class="form-input-err-msg" data-err-for="signin-password"></span>

                    <a href="#" class="login__forgot">Quên mật khẩu ?</a>

                    <input type="submit" class="login__button" id="signin-btn" value="Đăng nhập">

                    <div>
                        <span class="login__account">Bạn chưa có tài khoản ?</span>
                        <span class="login__signin" id="sign-up">Đăng ký</span>
                    </div>
                </form>

                <form action="?act=taikhoan&xuli=dangky" class="login__create none" id="login-up">
                    <h1 class="login__title">Đăng ký</h1>

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="user" placeholder="Tên đăng nhập" class="login__input form-input" id="signup-email">
                        <span class="form-input-icon err">
                            <i class='bx bx-error-circle'></i>
                        </span>
                        <span class="form-input-icon success">
                            <i class='bx bx-check-circle'></i>
                        </span>
                    </div>
                    <span class="form-input-err-msg" data-err-for="signup-email"></span>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" placeholder="Mật khẩu" class="login__input form-input" id="signup-password">
                        <span class="form-input-icon err">
                        <i class='bx bx-error-circle'></i>
                        </span>
                        <span class="form-input-icon success">
                            <i class='bx bx-check-circle'></i>
                        </span>
                    </div>
                    <span class="form-input-err-msg" data-err-for="signup-password"></span>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" placeholder="Xác nhận mật khẩu" class="login__input form-input" id="signup1-password">
                        <span class="form-input-icon err">
                        <i class='bx bx-error-circle'></i>
                        </span>
                        <span class="form-input-icon success">
                            <i class='bx bx-check-circle'></i>
                        </span>
                    </div>
                    <span class="form-input-err-msg" data-err-for="signup1-password"></span>

                    <input type="submit" class="login__button" value="Đăng ký">

                    <div>
                        <span class="login__account">Bạn đã có tài khoản?</span>
                        <span class="login__signup" id="sign-in">Đăng nhập</span>
                    </div>

                    <div class="login__social">
                        <a href="#" class="login__social-icon"><i class='bx bxl-facebook' ></i></a>
                        <a href="#" class="login__social-icon"><i class='bx bxl-twitter' ></i></a>
                        <a href="#" class="login__social-icon"><i class='bx bxl-google' ></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>