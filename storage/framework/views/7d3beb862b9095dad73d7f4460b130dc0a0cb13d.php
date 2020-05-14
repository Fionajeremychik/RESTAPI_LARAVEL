<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Contact</div>
                <form action="<?php echo e(route('contact.update',[$contact->id])); ?>" method="POST"><?php echo csrf_field(); ?>
                <div class="card-body">
                        <div class="form-group">
                            <label>name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo e($contact->name); ?>">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="<?php echo e($contact->address); ?>">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo e($contact->phone); ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>


                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/blog/resources/views/contact/edit.blade.php */ ?>