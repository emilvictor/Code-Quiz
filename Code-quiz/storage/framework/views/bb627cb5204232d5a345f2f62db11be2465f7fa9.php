<h3>SELECT QUIZ</h3>



<ul>
    <li><form action="/php_quiz">
        <button type="submit" class="btn-quiz php">> php</button>
    </form></li>
    <li><form action="/js_quiz">
        <button type="submit" class="btn-quiz js">> js</button>
    </form></li>
    <li><form action="/laravel_quiz">
        <button type="submit" class="btn-quiz laravel">> laravel</button>
    </form></li>
    <li><form action="/sql_quiz">
        <button type="submit" class="btn-quiz sql">> sql</button>
    </form></li>

</ul>



<div class="logout-history-box">

    <form action="/history" class="form-history">
        <?php echo csrf_field(); ?>
        <button type="submit">view history</button>
    </form>
    <form action="/logout" class="form-logout">
        <button type="submit">logout</button>
    </form>
</div>
<?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php echo $__env->make('/layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/emilpettersson/Desktop/Code-Quiz/Code-quiz/resources/views/dashboard.blade.php ENDPATH**/ ?>