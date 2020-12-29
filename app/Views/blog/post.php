<section>
    <!-- <article class="blog-post">
        <h2>Name :=><?= $post['p_name'] ?></h2>
        <h2>Price :=><?= $post['p_price'] ?></h2>
        <h2>Detail :=><?= $post['p_detail'] ?></h2>
        <h2>Img:=><?= $post['p_img'] ?></h2>
        <h2>Type Product:=><?= $post['t_name'] ?></h2>
    </article> -->

    <div class="container" align="center">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?= $post['p_img'] ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $post['p_name'] ?></h5>
                <p class="card-text"><?= $post['p_detail'] ?></p>
                <p class="card-text">ราค้า <?= number_format($post['p_price']) ?> บาท</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</section>