<?php
include('template/header.php');
?>
<h1>Hi there</h1>
<div class="row">
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-4 status-card" onclick="go(`https://www.google.com`)">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3 feather-shopping-bag h1 text-primary"></div>
                    <div class="col-9">
                        <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up">123</span>
                        </p>
                        <p class="mb-0 text-black-50">Today order</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-4 status-card" onclick="go(`https://www.google.com`)">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3 feather-map-pin h1 text-primary"></div>
                    <div class="col-9">
                        <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up">14</span>
                        </p>
                        <p class="mb-0 text-black-50">Location</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-4 status-card" onclick="go(`https://www.google.com`)">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3 feather-users h1 text-primary"></div>
                    <div class="col-9">
                        <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up">456</span>
                        </p>
                        <p class="mb-0 text-black-50">Today users</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-4 status-card" onclick="go(`item_list.html`)">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3 feather-package h1 text-primary"></div>
                    <div class="col-9">
                        <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up">423</span>
                        </p>
                        <p class="mb-0 text-black-50">Total Items</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row align-items-end">
    <div class="col-12 col-mb-6 col-xl-7 mb-4">
        <div class="card overflow-hidden shadow">
            <div class="">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <h4 class="mb-0">Order and Viewer</h4>
                    <div class="">
                        <img src="<?php echo $url; ?>/template/core/assets/img/user/avatar1.jpg"
                            class="ov-img rounded-circle" alt="">
                        <img src="<?php echo $url; ?>/template/core/assets/img/user/avatar2.jpg"
                            class="ov-img rounded-circle" alt="">
                        <img src="<?php echo $url; ?>/template/core/assets/img/user/avatar3.jpg"
                            class="ov-img rounded-circle" alt="">
                        <img src="<?php echo $url; ?>/template/core/assets/img/user/avatar4.jpg"
                            class="ov-img rounded-circle" alt="">
                        <img src="<?php echo $url; ?>/template/core/assets/img/user/avatar5.jpg"
                            class="ov-img rounded-circle" alt="">
                    </div>
                </div>
                <canvas id="ov" height="150"></canvas>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-xl-5 mb-4">
        <div class="card item-carousel-card">
            <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide item-carousel" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active bg-secondary navagitor" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2" class="bg-secondary navagitor"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3" class="bg-secondary navagitor"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4" class="bg-secondary navagitor"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="item-card">
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="w-50">
                                        <h4 class="">Coffee Cup</h4>
                                        <p class="font-weight-bolder text-black-50 mb-3">500 MMK</p>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                                style="width: 50%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <img src="<?php echo $url; ?>/template/core/assets/img/item1.png" alt=""
                                        class="item-card-img">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item-card">
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="w-50">
                                        <h4 class="">Memory stick</h4>
                                        <p class="font-weight-bolder text-black-50 mb-3">1500 MMK</p>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                                style="width: 70%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <img src="<?php echo $url; ?>/template/core/assets/img/item2.png" alt=""
                                        class="item-card-img">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item-card">
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="w-50">
                                        <h4 class="">Book</h4>
                                        <p class="font-weight-bolder text-black-50 mb-3">800 MMK</p>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                                style="width: 50%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <img src="<?php echo $url; ?>/template/core/assets/img/item3.png" alt=""
                                        class="item-card-img">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item-card">
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="w-50">
                                        <h4 class="">Name card</h4>
                                        <p class="font-weight-bolder text-black-50 mb-3">500 MMK</p>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                                style="width: 50%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <img src="<?php echo $url; ?>/template/core/assets/img/item4.png" alt=""
                                        class="item-card-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-xl-5 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <h4 class="mb-0">Order and Place</h4>
                    <div class="feather-pie-chart h4 mb-0 text-primary">

                    </div>
                </div>
                <canvas id="op" height="200" class="mt-3"></canvas>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-7">
        <div class="card mb-4 overflow-hidden">
            <div class="">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <h4 class="mb-0">Subscriber List</h4>
                    <div class="feather-more-vertical h4 mb-0 text-primary">

                    </div>
                </div>
                <table class="table table-hover mb-0 sub-list">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Start Date</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Aldin Rakić</td>
                            <td>ACME Pvt LTD.</td>
                            <td>Jan 10,2019</td>
                            <td><span class="badge badge-success">Open</span>
                            </td>
                            <td>$ 3000.00</td>
                            <td class="center-align text-center"><a href="#"><i
                                        class="feather-trash h4 text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td>İris Yılmaz</td>
                            <td>Collboy Tech LTD.</td>
                            <td>Jan 12,2019</td>
                            <td><span class="badge badge-success">Open</span>
                            </td>
                            <td>$ 2000.00</td>
                            <td class="center-align text-center"><a href="#"><i
                                        class="feather-trash h4 text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td>Lidia Livescu</td>
                            <td>My Fintech LTD.</td>
                            <td>Jan 14,2019</td>
                            <td><span class="badge badge-danger">Close</span>
                            </td>
                            <td>$ 1100.00</td>
                            <td class="center-align text-center"><a href="#"><i
                                        class="feather-trash h4 text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td>Michael Austin</td>
                            <td>ABC Fintech LTD.</td>
                            <td>Jan 1,2019</td>
                            <td><span class="badge badge-danger">Close</span>
                            </td>
                            <td>$ 1000.00</td>
                            <td class="center-align text-center"><a href="#"><i
                                        class="feather-trash h4 text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td>Aldin Rakić</td>
                            <td>ACME Pvt LTD.</td>
                            <td>Jan 10,2019</td>
                            <td><span class="badge badge-success">Open</span>
                            </td>
                            <td>$ 3000.00</td>
                            <td class="center-align text-center"><a href="#"><i
                                        class="feather-trash h4 text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td>İris Yılmaz</td>
                            <td>Collboy Tech LTD.</td>
                            <td>Jan 12,2019</td>
                            <td><span class="badge badge-success">Open</span>
                            </td>
                            <td>$ 2000.00</td>
                            <td class="center-align text-center"><a href="#"><i
                                        class="feather-trash h4 text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td>Lidia Livescu</td>
                            <td>My Fintech LTD.</td>
                            <td>Jan 14,2019</td>
                            <td><span class="badge badge-danger">Close</span>
                            </td>
                            <td>$ 1100.00</td>
                            <td class="center-align text-center"><a href="#"><i
                                        class="feather-trash h4 text-danger"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include('template/footer.php');
?>
<script src="<?php echo $url; ?>/template/core/assets/js/dashboard.js"></script>