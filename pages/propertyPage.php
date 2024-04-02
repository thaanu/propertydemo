<?php getHeader();

$property = (object) [
    'name' => 'PRIVATE ROOM, SAFE NEIGHBORHOOD IN SCRIPPS RANCH',
    'images' => [
        'https://a0.muscache.com/im/pictures/4e80ef28-f6df-4202-ad53-0f0a88364068.jpg?im_w=1200',
        'https://a0.muscache.com/im/pictures/18074678-8254-45d0-ac85-76040bd44a06.jpg?im_w=720',
        'https://a0.muscache.com/im/pictures/9b747235-e692-4a03-872e-078bb24bdf41.jpg?im_w=720',
        'https://a0.muscache.com/im/pictures/d81e1c78-aff6-421f-a64f-c23d4535a814.jpg?im_w=720',
        'https://a0.muscache.com/im/pictures/dd7e0ea5-a990-4080-8117-24dbcaa9dece.jpg?im_w=720'
    ],
    'host' => (object) [
        'name' => 'Robert',
        'tagline' => 'Retired businessman of 30 years in this community. Am a SE Asia International traveler annually with a hobby buying \'handwoven textiles\' & scuba diving (prefer the Philippines) ...also do Baja California as my friend owns a hotel in LaPaz.  I still like to go body-boarding on occasion or at least the beach for breakfast....Gym rat 6 days a week...I have International friends of many varieties ;)',
        'image' => 'https://a0.muscache.com/im/pictures/user/a3e98f1a-0fd8-45a7-a0eb-0bb6499dd81b.jpg?im_w=240'
    ]
];

// This variable is special for carousel component, if not set, carousel will not be visible
$carouselImages = $property->images;

$propertiestha = include __DIR__ . '/../resources/data/properties.php';

?>


<div id="property-page" class="my-5">
    <div class="container">

        <div class="mb-3">
            <div class="row">
                <div class="col-lg-9">
                    <h2><?= $property->name ?></h2>
                </div>
                <div class="col-lg-3">
                    <a href="#" class="text-danger btn btn-xs"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-xs"><i class="fas fa-share"></i></a>
                </div>
            </div>
        </div>

        <div id="photo-section" class="mb-3 d-none d-lg-block">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-frame image-frame-rounded">
                        <img src="<?= $property->images[0] ?>" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <?php for ($i = 1; $i < count($property->images); $i++) : ?>
                            <div class="col-lg-6 mb-3">
                                <div class="small-image-frame image-frame-rounded">
                                    <img src="<?= $property->images[$i] ?>" alt="<?= $property->images[$i] ?>" class="img-fluid">
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Photo Carousel -->
        <div class="mb-3 d-lg-none">
            <?php include __DIR__ . '/../components/_carousel.inc.php'; ?>
        </div>

        <div id="details">
            <div class="row">
                <div class="col-lg-8">

                    <div class="mb-5">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor vitae cum vel rerum obcaecati impedit dolorum blanditiis pariatur repellat. At saepe, debitis fugit ad provident ullam eos iusto aut vitae.</p>
                    </div>

                    <!-- Pricing -->
                    <div id="pricing" class="mb-5">
                        <span>$50</span> per night
                    </div>

                    <!-- Host -->
                    <div class="host-info">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?= $property->host->image ?>" class="img-fluid rounded-start" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p><b>Your Host</b></p>
                                        <h5 class="card-title"><?= $property->host->name ?></h5>
                                        <p class="card-text text-truncate" style="max-width: 900px;"><small><?= $property->host->tagline ?></small></p>
                                        <a href="#" class="btn btn-outline-secondary btn-sm">Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Details -->
                    <div id="details">
                        <div class="row">
                            <div class="col-lg-3">
                                <i class="fas fa-bed"></i> 3 Bedrooms
                            </div>
                            <div class="col-lg-3">
                                <i class="fas fa-shower"></i> 2 Bathrooms
                            </div>
                            <div class="col-lg-3">
                                <i class="fas fa-wifi"></i> Wifi Available
                            </div>
                            <div class="col-lg-3">
                                <i class="fas fa-kitchen-set"></i> Amenities Available
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <form action="" class="contact-form">
                        <div class="mb-4">
                            <h4><i class="fas fa-check-circle"></i> I am Interested</h4>
                            <p>Please leave your contact information. We will contact you shortly.</p>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="customer_name" id="customer_name" class="form-control" placeholder="Your Name" />
                        </div>
                        <div class="mb-3">
                            <input type="tel" name="customer_name" id="customer_name" class="form-control" placeholder="Your Contact Number" />
                        </div>
                        <div class="mb-3">
                            <input type="text" name="customer_name" id="customer_name" class="form-control" placeholder="Your Email" />
                        </div>
                        <button type="submit" name="submit" id="submit" class="btn btn-outline-primary">Contact Me</button>
                    </form>
                </div>
            </div>
        </div>


        <!-- Similar Properties -->
        <div id="similar-properties" class="mt-5">
            <h4 class="text-center">Similar Properties</h4>
            <div class="row">
                <?php foreach ($propertiestha as $property) : ?>
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <?php include('components/_property-card.inc.php'); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>


<?php getFooter(); ?>