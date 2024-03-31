<?php getHeader(); ?>
<?php
$propertiestha = [
    [
        "name" => "Home",
        "city" => 'Male',
        'type' => 'Apartment',
        'price' => '50,000'
    ],
    [
        "name" => "Home 2",
        "city" => 'Hulhumale',
        'type' => 'House',
        'price' => '250,000'
    ],
    [
        "name" => "Lemuni, Daunan Worldwide",
        "city" => 'Male',
        'type' => 'Apartment',
        'price' => '60,000'
    ]
]
?>

<div id="hero-section">
    <div id="bg-img">
        <img src="<?= $appConfig->base_url ?>/assets/images/allphoto-bangkok-nI4aC1kaTRc-unsplash.jpg" alt="allphoto-bangkok-nI4aC1kaTRc-unsplash.jpg">
    </div>
    <div id="search-form-mobile">
        <button type="button" id="search-on-mobile-btn" class="btn btn-default">Search</button>
    </div>
    <div id="search-form-desktop">
        <h3><?= $appConfig->app_name ?></h3>
        <form action="/properties/search" method="post">
            <div class="row">
                <div class="col-lg-4">
                    <label for="select_area">Search Area</label>
                    <select name="select_area" id="select_area" class="form-select">
                        <option value="">Male</option>
                        <option value="">Hulhumale</option>
                        <option value="">Villimale</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="bg-body">
    <div class="container">
        <div class="py-5">
            <div class="row">
                <div class="col-lg-3">
                    <center>
                        <i class="fas fa-building-columns hp-icons"></i>
                        <h5 class="my-3">Loan Care</h5>
                        <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small></p>
                        <a href="" class="btn btn-outline-primary btn-sm mt-5">More Info</a>
                    </center>
                </div>
                <div class="col-lg-3">
                    <center>
                        <i class="fas fa-bell hp-icons"></i>
                        <h5 class="my-3">Alerts</h5>
                        <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small></p>
                        <a href="" class="btn btn-outline-primary btn-sm mt-5">More Info</a>
                    </center>
                </div>
                <div class="col-lg-3">
                    <center>
                        <i class="fas fa-piggy-bank hp-icons"></i>
                        <h5 class="my-3">Cheap Deals</h5>
                        <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small></p>
                        <a href="" class="btn btn-outline-primary btn-sm mt-5">More Info</a>
                    </center>
                </div>
                <div class="col-lg-3">
                    <center>
                        <i class="fas fa-home hp-icons"></i>
                        <h5 class="my-3">Loan Care</h5>
                        <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small></p>
                        <a href="" class="btn btn-outline-primary btn-sm mt-5">More Info</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="py-5">
        <h3 class="text-center pb-5">Most Recent</h3>
        <div class="row">
            <?php foreach ($propertiestha as $property) : ?>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <?php include('components/_property-card.inc.php'); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="py-5 text-bg-primary bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="mb-5">Get Started Now</h1>
                <p>Start finding your dream apartment now.</p>
            </div>
            <div class="col-lg-4">
                <form action="/register/signup" id="signup-form">
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" />
                    </div>
                    <div class="mb-5">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I have read the <a href="/terms-and-conditions" class="text-white">Terms and Conditions</a>
                            </label>
                        </div>
                    </div>
                    <button type="submit" name="submit" id="submit" class="btn btn-outline-light">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php getFooter(); ?>