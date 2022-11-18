<?php
include 'template/header.php';
?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url;?>/index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url;?>/item_list.php">Item</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Item</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex">
                        <i class="feather-plus-circle  text-primary h4 mr-2"></i>
                        <h4 class="mb-0">Add Item</h4>
                    </div>
                    <a href="<?php echo $url;?>/item_list.php" class="feather-list btn btn-outline-primary"></a>
                </div>
                <hr>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="photo">
                                    Photo Upload
                                </label>
                                <i class="feather-info" data-bs-container="body" data-bs-toggle="popover"
                                    data-bs-placement="right" data-bs-content="Only PNG, JPG!"></i>
                                <input type="file" name="photo" id="photo" required class="form-control p-1">
                            </div>
                            <div class="form-group">
                                <label for="name">Item Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="type">Item Type</label>
                                <select name="type" id="type" class="form-control custom-select">
                                    <option value="0">ကုန်စို</option>
                                    <option value="1">ကုန်ခြောက်</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="c">Category</label>
                                <select name="c" id="c" class="form-control custom-select">
                                    <option value="" selected disabled>Select category</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sc">Sub Category</label>
                                <select name="sc" id="sc" class="form-control custom-select">
                                    <option value="" selected disabled>Select sub category</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-row">
                                <div class="col-6">
                                    <label for="q">Quantity</label>
                                    <input type="text" name="q" id="q" class="form-control">
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="type">Unit</label>
                                        <select name="type" id="type" class="form-control custom-select">

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price">Item price</label>
                                <input type="number" name="price" id="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" rows="8" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary">Add item</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php
include 'template/footer.php';
?>