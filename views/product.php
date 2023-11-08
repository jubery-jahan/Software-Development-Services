<?php include 'header.php'; ?>
<section class="py-5 bg-secondary-subtle">
    <div class="container">
        <div class="row mt-3">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="<?php echo $product['image']; ?>" alt="" class="card-img-top" height="200"/>
                        <div class="card-body bg-primary-subtle">
                            <h4><?php echo $product['name']; ?> </h4>
                            <p>tk.<?php echo $product['price']; ?></p>
                            <hr/>
                            <a href="action.php?page=detail&&id=<?php echo $product['id']; ?>" class="btn btn-outline-primary">Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

    </div>
</section>

<?php include 'footer.php'; ?>
