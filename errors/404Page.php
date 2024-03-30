<?php getHeader(); ?>
<div style="height: 100vh;">
    <div class="row">
        <div class="offset-lg-4 col-lg-4">
            <a href="/">
                <img src="<?= $appConfig->base_url ?>/assets/images/6333685.jpg" alt="404 Page Not Found" class="img-fluid" />
            </a>
            <h3 class="mb-5">Oops! Looks like what you are looking for is not available.</h3>

            <?php include __DIR__ . '/../components/_mini-search-form.inc.php'; ?>
        </div>
    </div>
</div>
<?php getFooter(); ?>
