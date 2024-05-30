   

   <?php $__env->startSection('title'); ?>
       Halaman Utama
   <?php $__env->stopSection(); ?>

   <?php $__env->startSection('content'); ?>
       <header>
           <h1>SanberBook</h1>
           <h2>Social Media Developer Santai Berkualitas</h2>
           <p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>
       </header>

       <section>
           <h3>Benefit Join di SanberBook</h3>
           <ul>
               <li>Mendapatkan motivasi dari sesama developer</li>
               <li>Sharing knowledge dari para mastah Sanber</li>
               <li>Dibuat oleh calon web developer terbaik</li>
           </ul>

           <h3>Cara Bergabung ke SanberBook</h3>
           <ol>
               <li>Mengunjungi Website ini</li>
               <li>Mendaftar di <a href="/form">Form Sign Up</a></li>
               <li>Selesai!</li>
           </ol>
       </section>
   <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Unilak\Bootcamp\Tugas #12 Laravel Templating\resources\views/welcome.blade.php ENDPATH**/ ?>