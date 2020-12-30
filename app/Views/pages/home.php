<section>
    <!-- <?php
            $session = \Config\Services::session();
            ?>
    <?php if (isset($session->success)) : ?>
        <div class="alert alert-success text-center alert-dismissible fade show mb-0" role="0">
            <?= $session->success ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?> -->
    <br>
    <style>
        /* .card {
            border-style: solid;
            border-color: #FF6600;
            border-width: 5px;
            height: 1000px;
        } */
        .nav-pills a {
            color: black;

        }

        .nav-pills a:hover {
            color: black;
            background: yellow;
        }

        .card-header {
            background: black;
            color: white;
        }

        ol li a{
            color: black;

        }
    </style>

</section>
<section>

    <div class="container-fluid ">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-8">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb " style="background:#FAEBD7;">
                        <h5>หน้าแรก</h5>
                        <li class="breadcrumb-item active ml-auto" aria-current="page">Home</li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-8" style="background:white;">
                <div class="container-fluid">
                    <br>
                    <div class="card" style="border: none;">
                        <div class="row ">
                            <?php foreach ($p['products'] as $product) : ?>
                                <div class="col-3">
                                    <div class="container">
                                        <div class="card" style="width: 18rem;">
                                            <img class="card-img-top" src="<?= $product['p_img'] ?>" alt="Card image cap">
                                            <div class="card-body" style="width: 100%;height:10%">
                                                <h5 class="card-title"><?= $product['p_name'] ?></h5>
                                                <p class="card-text"><strong>ราคา : </strong> <?= number_format($product['p_price']) ?> บาท</p>
                                                <a href="/blog/<?= $product['id'] ?>" class="btn btn-primary">รายละเอียด</a>
                                                <a href="/blog/del/<?= $product['id'] ?>" class="btn btn-danger" onclick="return confaim('Are Your Sure !!')">ลบ</a>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="container-fluid" align="center">
                    <br>
                    <div class="card" style="width: 18rem;">
                        <div class=" card-header">
                            <h5 align="center"><strong>ประเภทสินค้า</strong></h5>
                        </div>
                        <div class="card-body">
                            <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical" align="center" style="height: 100%;">
                                <?php foreach ($t['type'] as $typp) : ?>
                                    <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><?= $typp['t_name'] ?></a>
                                    <!-- <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> -->
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container-fluid" align="center">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://raw.githubusercontent.com/604234031cs/dataFriend/master/Koala.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>