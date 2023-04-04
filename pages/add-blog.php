<?php

use models\Category;

require('../models/Category.php');

$categoryNames = new Category();
$categories = $categoryNames->getAllCategoryNames();

include 'header.php' ?>


    <section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card rounded-0 shadow">
                    <div class="card-header">Add Blog Form</div>
                    <div class="card-body">
                        <h4 class="text-center text-success"> <?php /*echo $result;*/ ?></h4>
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <!--                        <form action="action.php" method="POST">-->
                            <div class="row mb-3">
                                <div class="col-md-3">Blog Title</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="title"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3">Author</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="author"/>
                                </div>
                            </div>

                                <div class="row mb-3">
                                    <div class="col-md-3">Category</div>
                                    <div class="col-md-9">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>-- Select a Category --</option>
                                            <?php foreach ($categories as $category) { ?>
                                            <option value="<?php echo($category['id']); ?>"><?php echo($category['name']); ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                            <div class="row mb-3">
                                <div class="col-md-3">Date</div>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" name="date"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Description</div>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="8" name="description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Image</div>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image"/>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="featuredCheckbox1"
                                       value="isFeatured">
                                <label class="form-check-label" for="inlineCheckbox1">Featured Post</label>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9 mb-5">
                                    <input type="submit" class="btn btn-outline-success px-4" name="btn"
                                           value="Create New Blog">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include 'footer.php' ?>