<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                        
                <p>Name:<?php echo e($contact->name); ?></p>
                <p>Address:<?php echo e($contact->address); ?></p>
                <p>Phone number:<?php echo e($contact->phone); ?></p>



                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/blog/resources/views/contact/show.blade.php */ ?>