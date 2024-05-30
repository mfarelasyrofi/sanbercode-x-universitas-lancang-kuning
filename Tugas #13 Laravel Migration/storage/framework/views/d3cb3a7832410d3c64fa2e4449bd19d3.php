

<?php $__env->startSection('title'); ?>
    Halaman Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <a href="/form">Kembali</a>

    <header>
        <h1>SELAMAT DATANG <?php echo $fname; ?> <?php echo $lname; ?>!</h1>
        <p>
            <bold>Terima kasih telah bergabung di SanberBook. Social Media kita bersama!</bold>
        </p>
    </header>

    <h2>Berikut Data Anda:</h2>
    <p>First Name: <?php echo $fname; ?></p>
    <p>Last Name: <?php echo $lname; ?></p>
    <p>Gender: <?php echo $gender; ?></p>
    <p>Nationality: <?php echo $nationality; ?></p>
    <p>Language: <?php echo $language_spoken; ?></p>
    <p>Bio: <?php echo $bio; ?></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Unilak\Bootcamp\Tugas #12 Laravel Templating\resources\views/page/home.blade.php ENDPATH**/ ?>