

<?php $__env->startSection('container'); ?>
    <h1 class="mb-5"><?php echo e($post->title); ?></h1>

    <p>By. <a href="/authors/<?php echo e($post->author->username); ?>" class="text-decoration-none"><?php echo e($post->author->name); ?></a> in <a href="/categories/<?php echo e($post->category->slug); ?>" class="text-decoration-none"><?php echo e($post->category->name); ?></a></p>

    <?php echo $post->body; ?>



    <a href="/blog" class="d-block mt-3">Back to Posts</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\prakweb-laravel\resources\views/post.blade.php ENDPATH**/ ?>