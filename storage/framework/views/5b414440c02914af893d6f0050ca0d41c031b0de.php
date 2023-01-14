<?php $__env->startSection('title'); ?>login
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section>
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-xl-7"><img class="bg-img-cover bg-center" src="<?php echo e(asset('assets/images/login/foto_login.png')); ?>" alt="looginpage" /></div>
	            <div class="col-xl-5 p-0">
	                <div class="login-card">
	                    <form class="theme-form login-form">
	                        <h4>Login</h4>
	                        <h6>Welcome back! Log in to your account.</h6>
	                        <div class="form-group">
	                            <label>Email Address</label>
	                            <div class="input-group">
	                                <span class="input-group-text"><i class="icon-email"></i></span>
	                                <input class="form-control" type="email" required="" placeholder="Test@gmail.com" />
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label>Password</label>
	                            <div class="input-group">
	                                <span class="input-group-text"><i class="icon-lock"></i></span>
	                                <input class="form-control" type="password" name="login[password]" required="" placeholder="*********" />
	                                <div class="show-hide"><span class="show"> </span></div>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="checkbox">
	                                <input id="checkbox1" type="checkbox" />
	                                <label class="text-muted" for="checkbox1">Remember password</label>
	                            </div>
	                            
	                        </div>
	                        <div class="form-group">
	                            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
	                        </div>
	                        
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	
    <?php $__env->startPush('scripts'); ?>
    <?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.authentication.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test_rizqia\resources\views/admin/authentication/login_one.blade.php ENDPATH**/ ?>