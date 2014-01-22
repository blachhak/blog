<?php echo $this->getContent(); ?>

<div align="right">
    <?php echo Phalcon\Tag::linkTo(array('posts/create', '<i class=\'fa fa-plus-circle\'></i> Create Post', 'class' => 'btn btn-primary')); ?>
</div>
<div class="center">
<form method="post" action="<?php echo $this->url->get('posts/search'); ?>" autocomplete="off">

    <div class="center scaffold">

        <h2>Search Posts</h2>

        <div class="clearfix">
            <label for="id">Id</label>
            <?php echo $form->render('id'); ?>
        </div>

        <div class="clearfix">
            <label for="username">Title</label>
            <?php echo $form->render('title'); ?>
        </div>

        <div class="clearfix">
            <label for="categoriesId">Categories</label>
            <?php echo $form->render('categoriesId'); ?>
        </div>

        <div class="clearfix">
            <?php echo Phalcon\Tag::submitButton(array('Search', 'class' => 'btn btn-primary')); ?>
        </div>

    </div>

</form>
</div>