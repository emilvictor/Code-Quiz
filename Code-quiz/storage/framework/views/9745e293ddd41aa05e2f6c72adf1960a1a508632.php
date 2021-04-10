<h1>CODE QUIZ</h1>

<form action="/login" method="post" class="login-form">
    <?php echo csrf_field(); ?>

        <label for="email">Email</label>
        <input name="email" id="email" type="email" placeholder="exampel@gmail.com" />


        <label for="password">Password</label>
        <input name="password" id="password" type="password" placeholder="******"/>

    <button type="submit" class="btn-login">Login</button>
</form>

<p><a href="register">create user</a></p>

<?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('/layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/emilpettersson/Desktop/Code-Quiz/Code-quiz/resources/views//index.blade.php ENDPATH**/ ?>