<?php

require('../models/Blog.php');

use models\Blog;


$blog = new Blog();
$blogs = $blog->getAllBlog();

include 'header.php' ?>

<div class="d-flex">
    <?php
    include 'sidebar.php';
    ?>
    <section class="py-5">
        <div class="container mx-auto" style="max-width: 1200px">
            <div class="row">
                <div class="col d-flex">

                    <?php foreach ($blogs as $blog) { ?>

                        <div class="col-md-3 col-sm-4 m-1">
                            <div class="card h-100" style="width: 16rem;">
                                <img src="/uploads/<?php echo $blog['image'] ?>" alt="" class="card-img-top" height="200">
                                <div class="card-body overflow-hidden" style="height: 180px;">
                                    <h6 class="fw-bold"><?php echo $blog['title'] ?></h6>
                                    <p style="font-size: 14px"><?php echo substr($blog['description'], 0,252).' ...'; ?></p>
                                    <!--                                    <hr>-->

                                </div>
                                <div class="card-footer bg-white"><a href="/action.php?page=details&&id=<?php echo $blog['id']; ?>" class="btn btn-outline-primary px-5">Read more</a></div>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </section>

</div>

<?php include 'footer.php' ?>