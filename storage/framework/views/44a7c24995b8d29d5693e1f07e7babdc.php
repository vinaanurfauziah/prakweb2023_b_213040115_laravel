

<?php $__env->startSection('container'); ?>
    <h1 class="mb-5"><?php echo e($post->title); ?></h1>

    <?php echo $post->body; ?>



    <a href="/blog">Back to Posts</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\prakweb-laravel\resources\views/post.blade.php ENDPATH**/ ?>