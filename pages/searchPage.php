<?php getHeader(); ?>

<?php 
    $query = $_GET['s'];
?>

<section class="page-section" id="search-page">
    <div class="page-header" ></div>
    <div class="container">
        <h1 class="my-5">Search results for <em class="text-danger"><?= $query; ?></em></h1>

        <div id="search-results" class="mb-5">
            <p>No results found</p>
        </div>

        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <?php include __DIR__ . '/../components/_mini-search-form.inc.php'; ?>
            </div>
        </div>

    </div>
</section>


<?php getFooter(); ?>