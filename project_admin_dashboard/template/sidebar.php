<div class="col-12 col-lg-3 col-xl-2 vh-100 sidebar ">
    <div class="d-flex justify-content-between align-items-center py-2 mt-2 nav-brand">
        <div class="d-flex justify-content-between align-items-center">
            <span class="bg-primary p-2 rounded mr-1">
                <i class="feather-shopping-bag text-white h4"></i>
            </span>
            <h4 class="font-weight-bolder text-uppercase text-primary mb-0">MyShop</h4>
        </div>
        <button class="hide-sidebar-btn btn btn-light text-primary feather-x d-block d-lg-none" style="font-size:2em">
        </button>
    </div>
    <div class="nav-menu">
        <ul>

            <li class="menu-item ">
                <a href="<?php echo $url;?>/index.php" class="menu-item-link">
                    <span class="feather-home">Dashboard</span>
                </a>
            </li>

            <li class="menu-spacer"></li>
            <li class="menu-title">
                <span>Manage Item</span>
            </li>
            <li class="menu-item">
                <a href="<?php echo $url;?>/item_add.php" class="menu-item-link ">
                    <span class="feather-plus-circle">Add Item</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo $url;?>/item_list.php" class="menu-item-link">
                    <span class="feather-list">Item List</span>
                    <span class="badge badge-pill bg-white shadow-sm text-primary">15</span>
                </a>
            </li>
            <li class="menu-spacer"></li>
        </ul>


    </div>

</div>