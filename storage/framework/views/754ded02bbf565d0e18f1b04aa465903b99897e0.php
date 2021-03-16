<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Client</title>
</head>
<body>

    <form action="<?php echo e(route('add-post')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="title" placeholder="title">
    <input type="text" name="body" placeholder="body">
    <button type="submit">Create</button>
    </form>
    
</body>
</html><?php /**PATH C:\Users\Admin\Desktop\danat\eshop\resources\views/post/create.blade.php ENDPATH**/ ?>