<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>SBR Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo e(asset('Login_v3/images/icons/favicon.ico')); ?>"/>
<!-- =============================================================================================== -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('Login_v3/vendor/bootstrap/css/bootstrap.min.css')); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('Login_v3/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('Login_v3/fonts/iconic/css/material-design-iconic-font.min.css')); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('Login_v3/vendor/animate/animate.css')); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('Login_v3/vendor/css-hamburgers/hamburgers.min.css')); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('Login_v3/vendor/animsition/css/animsition.min.css')); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('Login_v3/vendor/select2/select2.min.css')); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('Login_v3/vendor/daterangepicker/daterangepicker.css')); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('Login_v3/css/util.css')); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('Login_v3/css/main.css')); ?>"/>
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo e(asset('Login_v3/images/bg-01.jpg')); ?>');">
			<div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="<?php echo e(route('login')); ?>" >
                    <?php echo csrf_field(); ?>

					<span class="login100-form-logo">
                        <img src="<?php echo e(asset('Login_v3/images/Logo_SBR_ROXO.png')); ?>" width="150px" height="150px" alt="Logomarca">
					</span>

                <!--
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
                -->
                <br>
                <br>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" id="email" type="email" class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="E-mail">

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password">

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>


					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							<?php echo e(__('Login')); ?>

						</button>
					</div>

					<div class="text-center p-t-90">
						    <?php if(Route::has('password.request')): ?>
                                    <a class="txt1" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Esqueceu a senha ?')); ?>

                                    </a>
                            <?php endif; ?>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="<?php echo e(asset('Login_v3/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('Login_v3/vendor/animsition/js/animsition.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('Login_v3/vendor/bootstrap/js/popper.js')); ?>"></script>
	<script src="<?php echo e(asset('Login_v3/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('Login_v3/vendor/select2/select2.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('Login_v3/vendor/daterangepicker/moment.min.js')); ?>"></script>
	<script src="<?php echo e(asset('Login_v3/vendor/daterangepicker/daterangepicker.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('Login_v3/vendor/countdowntime/countdowntime.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('Login_v3/js/main.js')); ?>"></script>

</body>
</html>
<?php /**PATH /var/www/html/sbr/resources/views/auth/login.blade.php ENDPATH**/ ?>