<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contacts
                    <span class="float-right"><a href="<?php echo e(route('contact.index')); ?>">Create Contact</a></span>
                </div>

                <div class="card-body">
                        
                    <table class="table table-striped">
                        <thead>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Edit/View</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($contact->name); ?></td>
                                <td><?php echo e($contact->phone); ?></td>
                                <td><?php echo e($contact->address); ?></td>


                                <td>
                                   <a href="<?php echo e(route('contact.edit',[$contact->id])); ?>"> <button class="btn btn-sucess">edit</button></a>


                                    <a href="<?php echo e(route('contact.show',[$contact->id])); ?>"><button class="btn btn-primary">view</button></a>
                                    </td>
                                    <td>
                                    <form action="<?php echo e(route('contact.destroy',[$contact->id])); ?>" method="POST"><?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </td>
                                    </form>
                                
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/blog/resources/views/contact/index.blade.php */ ?>