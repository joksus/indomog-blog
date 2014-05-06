<!DOCTYPE html>
<html>
<head>
    <title>Daftar</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="<?php echo asset('css/kube.min.css') ?>" />
    

</head>
<body style="width:80%;margin:40px auto">
	
	<?php if(Session::has('register_success')): ?>
    	<div class="message message-success">
        	<span class="close"></span>
        	<?php echo Session::get('register_success') ?>
   		</div>
	<?php endif; ?>

    <div class="units-container">

        <form method="post" action="" class="forms">
            <h3>Form Registrasi</h3>
            <label>
                Email <span class="error"><?php echo $errors->first('email') ?></span>
                <input type="text" name="email" value="<?php echo Form::old('email') ?>" class="width-50" />
            </label>
            <label>
                Password <span class="error"><?php echo $errors->first('password') ?></span>
                <input type="password" name="password" value="<?php echo Form::old('password') ?>" class="width-50" />
            </label>
            <label>
                Password Confirmation <span class="error"><?php echo $errors->first('password_confirmation') ?></span>
                <input type="password" name="password_confirmation" value="<?php echo Form::old('password_confirmation') ?>" class="width-50" />
            </label>
            <input type="submit" class="btn" value="Submit">

        </form>

    </div>
</body>
</html>