<?php   $errors = array(); ?>
<?php if(count($errors) > 0): ?>
    <div class="error">   
    <?php foreach($errors as $error): ?>
        <h1><?php echo $error ?></h1>
        <?php endforeach ?>
    </div>
<?php endif ?>