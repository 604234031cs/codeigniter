<div class="container">
    <h1>Insert Product</h1>
    <?php if ($_POST) : ?>
        <?= \Config\Services::validation()->listErrors(); ?>
    <?php endif; ?>
    <form action="/blog/insert" method="post">
        <div class="form-group">
            <label for="exampleFormControlFile1">Imgs :</label>
            <!-- <input type="file" class="form-control-file" id="exampleFormControlFile1" > -->
            <input type="text" class="form-control" name='img' id='name' value="">
        </div>
        <div class="form-group">
            <label for="name">Name :</label>
            <input type="text" class="form-control" name='name' id='name' value="">
        </div>
        <div class="form-group">
            <label for="Lastname">Price Product :</label>
            <input type="text" class="form-control" name='price' id='lastname' value="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Detail Product : </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="detail"></textarea>
        </div>
        <div class="form-group">
            <select class="form-control form-control-sm" name='type'>
                <?php foreach ($type as $key) : ?>
                    <option value="<?= $key['t_id'] ?>"><?= $key['t_name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary text-right">ADD</button>
        </div>
    </form>
</div>