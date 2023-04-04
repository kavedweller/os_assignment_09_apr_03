<?php

require('../models/Blog.php');
use models\Blog;

$blog = new Blog();
$selectedBlog = $blog->getBlogById($_GET['id']);

include 'header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">

                <div class="card my-3 rounded-0 shadow">
                    <div class="card-header fw-bold"><?php echo $selectedBlog['title'] ?></div>
                    <div class="card-body">
                        <img src="/uploads/<?php echo $selectedBlog['image'] ?>" class="card-img rounded-0 mb-3" style="max-height: 350px; object-fit: cover;"  alt="">
                        <p class="card-text"><?php echo $selectedBlog['description'] ?></p>
                        <p class="card-subtitle text-muted fst-italic text-end">Written by: <?php echo $selectedBlog['author'] ?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
