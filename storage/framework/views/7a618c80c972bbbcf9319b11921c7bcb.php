<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section id="hero" class="d-flex align-items-center justify-content-center"
        style="background-image: url('<?php echo e(asset('user/images/coffee.png')); ?>');
               background-size: cover; background-position: center; height: 50vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="text-white fw-bold">Welcome to Coffee</h2>
                    <p class="text-white">Taste the best coffee in town with a warm atmosphere.</p>
                    <a href="#" class="btn btn-light mt-3">View Menu</a>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Laravel Coffee_POS\resources\views/user/home.blade.php ENDPATH**/ ?>