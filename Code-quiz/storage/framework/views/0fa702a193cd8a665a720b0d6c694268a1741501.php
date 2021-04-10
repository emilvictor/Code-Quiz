<h1>Register</h1>

<form action="register" method="post">
    <?php echo csrf_field(); ?>


            <label for="name">Name</label>
            <input name="name" id="name" type="name" />
            <br>

            <label for="email">Email</label>
            <input name="email" id="email" type="email" />
            <br>

            <label for="password">Password</label>
            <input name="password" id="password" type="password" />


        <button type="submit" class="btn-register">Register</button>

    </form>

    <p><a href="/">return</a></p>

<?php echo $__env->make('/../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/emilpettersson/Desktop/Code-Quiz/Code-quiz/resources/views/authentication/register.blade.php ENDPATH**/ ?>