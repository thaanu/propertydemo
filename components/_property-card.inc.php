<div class="card">
    <img src="<?= $appConfig->base_url ?>/assets/images/allphoto-bangkok-nI4aC1kaTRc-unsplash.jpg" alt="allphoto-bangkok-nI4aC1kaTRc-unsplash.jpg" class="img-fluid card-img-top" />
    <div class="card-body">
        <div class="py-3">
            <p><strong>MVR <?= $property['price'] ?></strong></p>
            <h4><?= $property['name'] ?></h4>
        </div>
        <p><strong><?= $property['type'] ?></strong> at <?= $property['city'] ?></p>
        <div class="row my-4">
            <div class="col">
                <div class="d-grid">
                    <a href="/properties/apartments/<?= uniqid() ?>" class="btn btn-outline-primary">View Property</a>
                </div>
            </div>
            <div class="col">
                <div class="d-grid">
                    <a href="/properties/apartments/<?= uniqid() ?>" class="btn btn-outline-secondary">Contact Agent</a>
                </div>
            </div>
        </div>
    </div>
</div>