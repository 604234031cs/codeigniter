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
    </style>

    <div class="row md-auto">
        <div class="col">
            <div class="container ">
                <div class="card">
                    <div class="card-header">
                        <h5 align="center"><strong>ประเภทสินค้า</strong></h5>
                    </div>
                    <div class="card-bdoy">
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
            <div class="container ">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://raw.githubusercontent.com/604234031cs/dataFriend/master/Koala.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="container ">
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

        <div class="col-8">
            <div class="container-fluid">

                <div class="row">
                    <?php foreach ($p['products'] as $product) : ?>

                        <div class="col-3">
                            <div class="container">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="<?= $product['p_img'] ?>" alt="Card image cap">
                                    <div class="card-body" style="width: 100%;height:10%">
                                        <h5 class="card-title"><?= $product['p_name'] ?></h5>
                                        <p class="card-text"><strong>ราคา : </strong> <?= number_format($product['p_price']) ?> บาท</p>
                                        <a href="/blog/<?= $product['id'] ?>" class="btn btn-primary">รายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>

                    <?php endforeach; ?>
                </div>


            </div>
        </div>
        <div class="col">
            <div class="container">
                <div class="card">


                </div>
            </div>
        </div>
    </div>


</section>