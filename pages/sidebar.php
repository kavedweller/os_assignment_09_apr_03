<?php
use models\Category;
require('../models/Category.php');

$categoryNames = new Category();
$categories = $categoryNames->getAllCategoryNames();


?>



<div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
        <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-5 fw-semibold"></span>
    </a>

    <div class="input-group mb-3 mt-5">
        <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">&#128269;</button>
    </div>

    <ul class="list-unstyled ps-0">
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                Categories
            </button>
            <div class="collapse show" id="dashboard-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-5 small">
                    <?php foreach ($categories as $category) { ?>
                    <li><a href="#" class="link-dark rounded"><?php echo $category['name'] ?></a></li>
<!--                    <li><a href="#" class="link-dark rounded">Weekly</a></li>-->
<!--                    <li><a href="#" class="link-dark rounded">Monthly</a></li>-->
<!--                    <li><a href="#" class="link-dark rounded">Annually</a></li>-->

                    <?php } ?>
                </ul>
            </div>
        </li>

    </ul>
</div>