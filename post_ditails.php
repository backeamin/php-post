<?php
    
include ('functions.php');



?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stories - Single post default</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.png">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/widgets.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <div class="scroll-progress primary-bg"></div>
    <!-- Start Preloader -->
    <!--     <div class="preloader text-center">
        <div class="circle"></div>
    </div> -->
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
        <button class="off-canvas-close"><i class="elegant-icon icon_close"></i></button>
        <div class="sidebar-inner">
            <!--Categories-->
            <div class="sidebar-widget widget_categories mb-50 mt-30">
                <div class="widget-header-2 position-relative">
                    <h5 class="mt-5 mb-15">Hot topics</h5>
                </div>
                <div class="widget_nav_menu">
                    <ul>
                        <li class="cat-item cat-item-2"><a href="category.html">Travel tips</a> <span class="post-count">30</span></li>
                        <li class="cat-item cat-item-3"><a href="category-grid.html">Book review</a> <span class="post-count">25</span></li>
                        <li class="cat-item cat-item-4"><a href="category-list.html">Hotel review</a> <span class="post-count">16</span></li>
                        <li class="cat-item cat-item-5"><a href="category-masonry.html">Destinations </a> <span class="post-count">22</span></li>
                        <li class="cat-item cat-item-6"><a href="category-big.html">Lifestyle</a> <span class="post-count">25</span></li>
                    </ul>
                </div>
            </div>
            <!--Latest-->
            <div class="sidebar-widget widget-latest-posts mb-50">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Don't miss</h5>
                </div>
                <div class="post-block-list post-module-1 post-module-5">
                    <ul class="list-post">
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="assets/imgs/news/thumb-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The Life of a Travel Writer with David Farley</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">05 August</span>
                                        <span class="post-by has-dot">300 views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="assets/imgs/news/thumb-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Why Don’t More Black American Women Travel Solo?</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">12 August</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="assets/imgs/news/thumb-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The 22 Best Things to See and Do in Bangkok</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">27 August</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Ads-->
            <div class="sidebar-widget widget-ads">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Advertise banner</h5>
                </div>
                <a href="https://themeforest.net/user/alithemes/portfolio" target="_blank">
                    <img class="advertise-img border-radius-5" src="assets/imgs/ads/ads-1.jpg" alt="">
                </a>
            </div>
        </div>
    </aside>
    <!-- Start Header -->
    <header class="main-header header-style-1 font-heading">
        <div class="header-top">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-md-3 col-xs-6">
                        <a href="index.html"><img class="logo" src="assets/imgs/theme/logo.png" alt=""></a>
                    </div>
                    <div class="col-md-9 col-xs-6 text-right header-top-right ">
                        <ul class="list-inline nav-topbar d-none d-md-inline">
                            <li class="list-inline-item menu-item-has-children"><a href="#">Layouts</a>
                                <ul class="sub-menu font-small">
                                    <li class="menu-item-has-children"><a href="#">Pages</a>
                                        <ul class="sub-menu font-small">
                                            <li><a href="page-about.html">About</a></li>
                                            <li><a href="page-contact.html">Contact</a></li>
                                            <li><a href="page-typography.html">Typography</a></li>
                                            <li><a href="page-register.html">Register</a></li>
                                            <li><a href="page-login.html">Login</a></li>
                                            <li><a href="page-search.html">Search</a></li>
                                            <li><a href="page-author.html">Author</a></li>
                                            <li><a href="page-404.html">404 page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Category</a>
                                        <ul class="sub-menu font-small">
                                            <li><a href="category-list.html">List layout</a></li>
                                            <li><a href="category-grid.html">Grid layout</a></li>
                                            <li><a href="category-masonry.html">Masonry layout</a></li>
                                            <li><a href="category-big.html">Big layout</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Single post</a>
                                        <ul class="sub-menu font-small">
                                            <li><a href="single.html">Default</a></li>
                                            <li><a href="single-2.html">Big image</a></li>
                                            <li><a href="single-3.html">Left image</a></li>
                                            <li><a href="single-4.html">With sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-inline-item"><a href="https://demos.alithemes.com/html/stories/docs/"><i class="elegant-icon icon_document_alt mr-5"></i>Document</a></li>
                        </ul>
                        <span class="vertical-divider mr-20 ml-20 d-none d-md-inline"></span>
                        <button class="search-icon d-none d-md-inline"><span class="mr-15 text-muted font-small"><i class="elegant-icon icon_search mr-5"></i>Search</span></button>
                        <button class="btn btn-radius bg-primary text-white ml-15 font-small box-shadow">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-sticky">
            <div class="container align-self-center position-relative">
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="main-nav d-none d-lg-block float-left">
                    <nav>
                        <!--Desktop menu-->
                        <ul class="main-menu d-none d-lg-inline font-small">
                            <li class="menu-item-has-children">
                                <a href="index.html"> <i class="elegant-icon icon_house_alt mr-5"></i> Home</a>
                                <ul class="sub-menu text-muted font-small">
                                    <li><a href="index.php">Home default</a></li>
                                </ul>
                            </li>
                            <li> <a href="category-list.html">Travel</a> </li>
                            <li class="current-item has-mega-menu">
                                <a href="category-list.html">Mega Menu</a>
                                <ul class="mega-menu">
                                    <li class="sub-mega-menu sub-mega-menu-width-22">
                                        <a class="menu-title" href="#">Travel Blog</a>
                                        <ul>
                                            <li><a href="category-list.html">Destinations</a></li>
                                            <li><a href="category-list.html">Tour Guides</a></li>
                                            <li><a href="category-list.html">Travel Food</a></li>
                                            <li><a href="category-list.html">Hotels Booking</a></li>
                                            <li><a href="category-list.html">Transport Review</a></li>
                                            <li><a href="category-list.html">Travel Healthy</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-mega-menu sub-mega-menu-width-22">
                                        <a class="menu-title" href="#">Fruit &amp; Vegetables</a>
                                        <ul>
                                            <li><a href="category-list.html">Meat &amp; Poultry</a></li>
                                            <li><a href="category-list.html">Fresh Vegetables</a></li>
                                            <li><a href="category-list.html">Herbs &amp; Seasonings</a></li>
                                            <li><a href="category-list.html">Cuts &amp; Sprouts</a></li>
                                            <li><a href="category-list.html">Exotic Fruits &amp; Veggies</a></li>
                                            <li><a href="category-list.html">Packaged Produce</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-mega-menu sub-mega-menu-width-22">
                                        <a class="menu-title" href="#">Breakfast &amp; Dairy</a>
                                        <ul>
                                            <li><a href="category-list.html">Milk &amp; Flavoured Milk</a></li>
                                            <li><a href="category-list.html">Butter and Margarine</a></li>
                                            <li><a href="category-list.html">Eggs Substitutes</a></li>
                                            <li><a href="category-list.html">Marmalades</a></li>
                                            <li><a href="category-list.html">Sour Cream</a></li>
                                            <li><a href="category-list.html">Cheese</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-mega-menu sub-mega-menu-width-22">
                                        <a class="menu-title" href="#">Meat &amp; Seafood</a>
                                        <ul>
                                            <li><a href="category-list.html">Breakfast Sausage</a></li>
                                            <li><a href="category-list.html">Dinner Sausage</a></li>
                                            <li><a href="category-list.html">Chicken</a></li>
                                            <li><a href="category-list.html">Sliced Deli Meat</a></li>
                                            <li><a href="category-list.html">Wild Caught Fillets</a></li>
                                            <li><a href="category-list.html">Crab and Shellfish</a></li>
                                        </ul>
                                    </li>
                        
                                </ul>
                            </li>
                            <li> <a href="category-grid.html">Guides</a> </li>
                            <li> <a href="category-masonry.html">Food</a> </li>
                            <li> <a href="category-big.html">Hotels</a> </li>
                            <li> <a href="category.html">Review</a> </li>
                            <li> <a href="category.html">Healthy </a> </li>
                            <li> <a href="category.html">Lifestyle</a> </li>
                            <li> <a href="category.html">Blog</a> </li>
                        </ul>
                        <!--Mobile menu-->
                        <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                            <li class="menu-item-has-children">
                                <a href="index.html">Home</a>
                                <ul class="sub-menu text-muted font-small">
                                    <li><a href="index.html">Home default</a></li>
                                    <li><a href="home-2.html">Homepage 2</a></li>
                                    <li><a href="home-3.html">Homepage 3</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="page-about.html">About</a></li>
                                    <li><a href="page-contact.html">Contact</a></li>
                                    <li><a href="page-typography.html">Typography</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-search.html">Search</a></li>
                                    <li><a href="page-author.html">Author</a></li>
                                    <li><a href="page-404.html">404 page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Category</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="category-list.html">List layout</a></li>
                                    <li><a href="category-grid.html">Grid layout</a></li>
                                    <li><a href="category-masonry.html">Masonry layout</a></li>
                                    <li><a href="category-big.html">Big layout</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Single post</a>
                                <ul class="sub-menu font-small">
                                    <li><a href="single.html">Default</a></li>
                                    <li><a href="single-2.html">Big image</a></li>
                                    <li><a href="single-3.html">Left image</a></li>
                                    <li><a href="single-4.html">With sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="float-right header-tools text-muted font-small">
                    <ul class="header-social-network d-inline-block list-inline mr-15">
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                        <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                    </ul>
                    <div class="off-canvas-toggle-cover d-inline-block">
                        <div class="off-canvas-toggle hidden d-inline-block" id="off-canvas-toggle">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>
    <!--Start search form-->
    <div class="main-search-form">
        <div class="container">
            <div class=" pt-50 pb-50 ">
                <div class="row mb-20">
                    <div class="col-12 align-self-center main-search-form-cover m-auto">
                        <p class="text-center"><span class="search-text-bg">Search</span></p>
                        <form action="#" class="search-header">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search stories, places and people">
                                <div class="input-group-append">
                                    <button class="btn btn-search bg-white" type="submit">
                                        <i class="elegant-icon icon_search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-80 text-center">
                    <div class="col-12 font-small suggested-area">
                        <h5 class="suggested font-heading mb-20 text-muted"> <strong>Suggested keywords:</strong></h5>
                        <ul class="list-inline d-inline-block">
                            <li class="list-inline-item"><a href="category.html">World</a></li>
                            <li class="list-inline-item"><a href="category.html">American</a></li>
                            <li class="list-inline-item"><a href="category.html">Opinion</a></li>
                            <li class="list-inline-item"><a href="category.html">Tech</a></li>
                            <li class="list-inline-item"><a href="category.html">Science</a></li>
                            <li class="list-inline-item"><a href="category.html">Books</a></li>
                            <li class="list-inline-item"><a href="category.html">Travel</a></li>
                            <li class="list-inline-item"><a href="category.html">Business</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-80">
                    <div class="col-lg-4">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="assets/imgs/news/thumb-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Travel Tips</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="assets/imgs/news/thumb-4.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Lifestyle</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="assets/imgs/news/thumb-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Hotel Review</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Main content -->
    <main class="bg-grey pb-30">
        <div class="container single-content">
            <div class="entry-header entry-header-style-1 mb-50 pt-50">
                <h1 class="entry-title mb-50 font-weight-900">
                    <?php echo $title?>
                </h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="entry-meta align-items-center meta-2 font-small color-muted">
                            <p class="mb-5">
                                <a class="author-avatar" href="#"><img class="img-circle" src="assets/imgs/authors/author-3.jpg" alt=""></a>
                                By <a href="author.html"><span class="author-name font-weight-bold"><?php echo $author?></span></a>
                            </p>
                            <span class="mr-10"><?php echo $date?></span>
                            <span class="has-dot"><?php echo $read_time?>  mins read</span>
                        </div>
                    </div>
                    <div class="col-md-6 text-right d-none d-md-inline">
                        <ul class="header-social-network d-inline-block list-inline mr-15">
                            <li class="list-inline-item text-muted"><span>Share this: </span></li>
                            <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                            <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                            <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end single header-->
            <figure class="image mb-30 m-auto text-center border-radius-10">
                <img class="border-radius-10" src="assets/imgs/news/news-main.jpg" alt="post-title" />
            </figure>
            <!--figure-->
            <article class="entry-wraper mb-50">
                <div class="excerpt mb-30">
                    <p><?php echo $p_ditails?></p>
                </div>
                <div class="entry-main-content dropcap wow fadeIn animated">
                  
                    <hr class="wp-block-separator is-style-dots">
                    <figure class="wp-block-gallery columns-3 wp-block-image">
                        <ul class="blocks-gallery-grid">
                            <li class="blocks-gallery-item"><a href="#"><img class="border-radius-5" src="assets/imgs/news/thumb-2.jpg" alt=""></a></li>
                            <li class="blocks-gallery-item"><a href="#"><img class="border-radius-5" src="assets/imgs/news/thumb-3.jpg" alt=""></a></li>
                            <li class="blocks-gallery-item"><a href="#"><img class="border-radius-5" src="assets/imgs/news/thumb-4.jpg" alt=""></a></li>
                        </ul>
                        <figcaption> <i class="ti-credit-card mr-5"></i>Image credit: Behance </figcaption>
                    </figure>
                    <hr class="section-divider">
                    <p>Yet more some certainly yet alas abandonedly whispered <a href="#">intriguingly</a><sup><a href="#">[2]</a></sup> well extensive one howled talkative admonishingly below a rethought overlaid dear gosh activated less <a href="#">however</a> hawk yet oh scratched ostrich some outside crud irrespective lightheartedly and much far amenably that the elephant since when.</p>
                    <h2>The Guitar Legends</h2>
                    <p>Furrowed this in the upset <a href="#">some across</a><sup><a href="#">[3]</a></sup> tiger oh loaded house gosh whispered <a href="#">faltering alas</a><sup><a href="#">[4]</a></sup> ouch cuckoo coward in scratched undid together bit fumblingly so besides salamander heron during the jeepers hello fitting jauntily much smoothly globefish darn blessedly far so along bluebird leopard and.</p>
                    <blockquote>
                        <p>Integer eu faucibus <a href="#">dolor</a><sup><a href="#">[5]</a></sup>. Ut venenatis tincidunt diam elementum imperdiet. Etiam accumsan semper nisl eu congue. Sed aliquam magna erat, ac eleifend lacus rhoncus in.</p>
                    </blockquote>
                    <p>Fretful human far recklessly while caterpillar well a well blubbered added one a some far whispered rampantly whispered while irksome far clung irrespective wailed more rosily and where saluted while black dear so yikes as considering recast to some crass until cow much less and rakishly overdrew consistent for by responsible oh one hypocritical less bastard hey oversaw zebra browbeat a well.</p>
                    <h3>Getting Crypto Rich</h3>
                    <hr class="wp-block-separator is-style-wide">
                    <div class="wp-block-image">
                        <figure class="alignleft is-resized">
                            <img class="border-radius-5" src="assets/imgs/news/thumb-11.jpg">
                            <figcaption> And far contrary smoked some contrary among stealthy </figcaption>
                        </figure>
                    </div>
                    <p>And far contrary smoked some contrary among stealthy engagingly suspiciously a cockatoo far circa sank dully lewd slick cracked llama the much gecko yikes more squirrel sniffed this and the the much within uninhibited this abominable a blubbered overdid foresaw through alas the pessimistic.</p>
                    <p>Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far bald that roadrunner python inside held shrewdly the manatee.</p>
                    <hr class="section-divider">
                    <p>Thanks sniffed in hello after in foolhardy and some far purposefully much one at the much conjointly leapt skimpily that quail sheep some goodness nightingale the instead exited expedient up far ouch mellifluous altruistic and and lighted more instead much when ferret but the.</p>
                    <!--Begin Subcrible-->
                    <div class="border-radius-10 border bg-white mb-30 p-30 wow fadeIn animated">
                        <div class="row justify-content-between">
                            <div class="col-md-5 mb-2 mb-md-0">
                                <h5 class="font-weight-bold secondfont mb-30 mt-0">Become a member</h5>
                                <p class="font-small">Get the latest news right in your inbox. We never spam!</p>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Enter your e-mail address">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <button type="submit" class="btn btn-primary btn-block">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Subcrible-->
                    <p>Yet more some certainly yet alas abandonedly whispered intriguingly well extensive one howled talkative admonishingly below a rethought overlaid dear gosh activated less however hawk yet oh scratched ostrich some outside crud irrespective lightheartedly and much far amenably that the elephant since when.</p>
                </div>
                <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
                    <div class="tags">
                        <span>Tags: </span>
                        <a href="category.html" rel="tag">deer</a>
                        <a href="category.html" rel="tag">nature</a>
                        <a href="category.html" rel="tag">conserve</a>
                    </div>
                </div>
                <div class="single-social-share clearfix wow fadeIn animated">
                    <div class="entry-meta meta-1 font-small color-grey float-left mt-10">
                        <span class="hit-count mr-15"><i class="elegant-icon icon_comment_alt mr-5"></i>182 comments</span>
                        <span class="hit-count mr-15"><i class="elegant-icon icon_like mr-5"></i>268 likes</span>
                        <span class="hit-count"><i class="elegant-icon icon_star-half_alt mr-5"></i>Rate: 9/10</span>
                    </div>
                    <ul class="header-social-network d-inline-block list-inline float-md-right mt-md-0 mt-4">
                        <li class="list-inline-item text-muted"><span>Share this: </span></li>
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                        <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                    </ul>
                </div>
                <!--author box-->
                <div class="author-bio p-30 mt-50 border-radius-10 bg-white wow fadeIn animated">
                    <div class="author-image mb-30">
                        <a href="author.html"><img src="assets/imgs/authors/author-3.jpg" alt="" class="avatar"></a>
                    </div>
                    <div class="author-info">
                        <h4 class="font-weight-bold mb-20"><span class="vcard author"><span class="fn"><a href="author.html" title="Posted by Barbara Cartland" rel="author">Barbara Cartland</a></span></span>
                        </h4>
                        <h5 class="text-muted">About author</h5>
                        <div class="author-description text-muted">You should write because you love the shape of stories and sentences and the creation of different words on a page. </div>
                        <a href="author.html" class="author-bio-link mb-md-0 mb-3">View all posts (125)</a>
                        <div class="author-social">
                            <ul class="author-social-icons">
                                <li class="author-social-link-facebook"><a href="#" target="_blank"><i class="ti-facebook"></i></a></li>
                                <li class="author-social-link-twitter"><a href="#" target="_blank"><i class="ti-twitter-alt"></i></a></li>
                                <li class="author-social-link-pinterest"><a href="#" target="_blank"><i class="ti-pinterest"></i></a></li>
                                <li class="author-social-link-instagram"><a href="#" target="_blank"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--related posts-->
                <div class="related-posts">
                    <div class="post-module-3">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Related posts</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            <article class="hover-up-2 transition-normal wow fadeInUp  animated">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-1.5.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                            </div>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="category.html"><span class="post-cat text-primary">Food</span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a href="single.html"><?php echo $r_post1?></a>
                                                <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
                                            </h5>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">7 August</span>
                                                <span class="time-reading has-dot">11 mins read</span>
                                                <span class="post-by has-dot">3k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="hover-up-2 transition-normal wow fadeInUp  animated">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-1.1.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                            </div>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="category.html"><span class="post-cat text-success">Cooking</span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a href="single.html"><?php echo $r_post2?></a>
                                            </h5>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">27 Sep</span>
                                                <span class="time-reading has-dot">10 mins read</span>
                                                <span class="post-by has-dot">22k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-1.2.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                            </div>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="category.html"><span class="post-cat text-success">Cooking</span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a href="single.html"><?php echo $r_post3?></a>
                                            </h5>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">27 Sep</span>
                                                <span class="time-reading has-dot">10 mins read</span>
                                                <span class="post-by has-dot">22k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-1.3.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                            </div>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="category.html"><span class="post-cat text-success">Cooking</span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a href="single.html"><?php echo $r_post4?></a>
                                            </h5>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">27 Sep</span>
                                                <span class="time-reading has-dot">10 mins read</span>
                                                <span class="post-by has-dot">22k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-1.4.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                            </div>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="category.html"><span class="post-cat text-success">Cooking</span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a href="single.html"><?php echo $r_post5?></a>
                                            </h5>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">27 Sep</span>
                                                <span class="time-reading has-dot">10 mins read</span>
                                                <span class="post-by has-dot">22k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <!--More posts-->
                <div class="single-more-articles border-radius-5">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">You might be interested in</h5>
                        <button class="single-more-articles-close"><i class="elegant-icon icon_close"></i></button>
                    </div>
                    <div class="post-block-list post-module-1 post-module-5">
                        <ul class="list-post">
                            <li class="mb-30">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="single.html">
                                            <img src="assets/imgs/news/thumb-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The Best Time to Travel to Cambodia</a></h6>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">27 Jan</span>
                                            <span class="post-by has-dot">13k views</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-10">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="single.html">
                                            <img src="assets/imgs/news/thumb-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">20 Photos to Inspire You to Visit Cambodia</a></h6>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">27 August</span>
                                            <span class="post-by has-dot">14k views</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Comments-->
                <div class="comments-area">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Comments</h5>
                    </div>
                    <div class="comment-list wow fadeIn animated">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="assets/imgs/authors/author-4.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Vestibulum euismod, leo eget varius gravida, eros enim interdum urna, non rutrum enim ante quis metus. Duis porta ornare nulla ut bibendum
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Rosie</a>
                                            </h5>
                                            <p class="date">6 minutes ago </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list wow fadeIn animated">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="assets/imgs/authors/author-2.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed, vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Agatha Christie</a>
                                            </h5>
                                            <p class="date">December 4, 2020 at 3:12 pm </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-comment depth-2 justify-content-between d-flex mt-50">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="assets/imgs/authors/author.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed, vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Steven</a>
                                            </h5>
                                            <p class="date">December 4, 2020 at 3:12 pm </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list wow fadeIn animated">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="assets/imgs/authors/author-3.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Donec in ullamcorper quam. Aenean vel nibh eu magna gravida fermentum. Praesent eget nisi pulvinar, sollicitudin eros vitae, tristique odio.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Danielle Steel</a>
                                            </h5>
                                            <p class="date">December 4, 2020 at 3:12 pm </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--comment form-->
                <div class="comment-form wow fadeIn animated">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Leave a Reply</h5>
                    </div>
                    <form class="form-contact comment_form" action="#" id="commentForm">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn button button-contactForm">Post Comment</button>
                        </div>
                    </form>
                </div>
            </article>
        </div>
        <!--container-->
    </main>
    <!-- End Main content -->
    <!--site-bottom-->
    <div class="site-bottom pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Destinations</h5>
                        </div>
                        <div class="post-block-list post-module-1">
                            <ul class="list-post">
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/news/thumb-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The Best Time to Travel to Cambodia</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">27 Jan</span>
                                                <span class="post-by has-dot">13k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/news/thumb-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">20 Photos to Inspire You to Visit Cambodia</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">27 August</span>
                                                <span class="post-by has-dot">14k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/news/thumb-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Epic Arts Cambodia: Charity for the Disabled</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">29 August</span>
                                                <span class="post-by has-dot">23k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Lifestyle</h5>
                        </div>
                        <div class="post-block-list post-module-1">
                            <ul class="list-post">
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/news/thumb-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">10 Ways to De-Stress Your Day Hour by Hour</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">12 August</span>
                                                <span class="post-by has-dot">3k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/news/thumb-5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">134 Free Weekly Meal Planner Printable</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">15 August</span>
                                                <span class="post-by has-dot">4.1k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/news/thumb-6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Free Printable Stickers for Your Bullet Journal</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">16 August</span>
                                                <span class="post-by has-dot">2.2k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated" data-wow-delay="0.4s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Photography</h5>
                        </div>
                        <div class="post-block-list post-module-1">
                            <ul class="list-post">
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/news/thumb-7.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Which TBA Preset Pack is Right For You?</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">06 May</span>
                                                <span class="post-by has-dot">23k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/news/thumb-8.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">How to Get Amazing Photos at the Pyramids of Giza</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">05 Jun</span>
                                                <span class="post-by has-dot">5k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="single.html">
                                                <img src="assets/imgs/news/thumb-9.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Beginner’s Guide to Travel Drone Photography</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">08 August</span>
                                                <span class="post-by has-dot">2k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-widget widget-latest-posts mb-30 mt-20 wow fadeInUp animated">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Categories</h5>
                </div>
                <div class="carausel-3-columns">
                    <div class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                        <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                            <a class="color-white" href="single.html">
                                <img src="assets/imgs/news/thumb-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-content media-body">
                            <h6> <a href="category.html">Travel Tips</a> </h6>
                            <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                        <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                            <a class="color-white" href="single.html">
                                <img src="assets/imgs/news/thumb-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-content media-body">
                            <h6><a href="category.html">Lifestyle</a></h6>
                            <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                        <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                            <a class="color-white" href="single.html">
                                <img src="assets/imgs/news/thumb-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-content media-body">
                            <h6><a href="category.html">Foody</a></h6>
                            <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                        <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                            <a class="color-white" href="single.html">
                                <img src="assets/imgs/news/thumb-4.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-content media-body">
                            <h6><a href="category.html">Entertaiment</a></h6>
                            <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--container-->
    </div>
    <!--end site-bottom-->
    <!-- Footer Start-->
    <footer class="pt-50 pb-20 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget wow fadeInUp animated mb-30">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">About me</h5>
                        </div>
                        <div class="textwidget">
                            <p>
                                Start writing, no matter what. The water does not flow until the faucet is turned on.
                            </p>
                            <p><strong class="color-black">Address</strong><br>
                                123 Main Street<br>
                                New York, NY 10001</p>
                            <p><strong class="color-black">Follow me</strong><br>
                                <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                    <li class="list-inline-item"><a class="fb" href="#" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li class="list-inline-item"><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="sidebar-widget widget_categories wow fadeInUp animated mb-30" data-wow-delay="0.1s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Quick link</h5>
                        </div>
                        <ul class="font-small">
                            <li class="cat-item cat-item-2"><a href="#">About me</a></li>
                            <li class="cat-item cat-item-4"><a href="#">Help & Support</a></li>
                            <li class="cat-item cat-item-5"><a href="#">​​Licensing Policy</a></li>
                            <li class="cat-item cat-item-6"><a href="#">Refund Policy</a></li>
                            <li class="cat-item cat-item-7"><a href="#">Hire me</a></li>
                            <li class="cat-item cat-item-7"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget widget_tagcloud wow fadeInUp animated mb-30" data-wow-delay="0.2s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Tagcloud</h5>
                        </div>
                        <div class="tagcloud mt-50">
                            <a class="tag-cloud-link" href="category.html">beautiful</a>
                            <a class="tag-cloud-link" href="category.html">New York</a>
                            <a class="tag-cloud-link" href="category.html">droll</a>
                            <a class="tag-cloud-link" href="category.html">intimate</a>
                            <a class="tag-cloud-link" href="category.html">loving</a>
                            <a class="tag-cloud-link" href="category.html">travel</a>
                            <a class="tag-cloud-link" href="category.html">fighting </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget_newsletter wow fadeInUp animated mb-30" data-wow-delay="0.3s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Newsletter</h5>
                        </div>
                        <div class="newsletter">
                            <p class="font-medium">Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                            <form class="input-group form-subcriber mt-30 d-flex">
                                <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                                <button class="btn bg-primary text-white" type="submit">Subscribe</button>
                                <label class="mt-20"> <input class="mr-5" name="name" type="checkbox" value="1" required=""> I agree to the <a href="#" target="_blank">terms &amp; conditions</a> </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
                <p class="float-md-left font-small text-muted">© 2020, Stories - Personal Blog HTML Template </p>
                <p class="float-md-right font-small text-muted">
                    Design by <a href="https://alithemes.com" target="_blank">AliThemes</a> | All rights reserved
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    <script src="./assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/vendor/popper.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.min.js"></script>
    <script src="./assets/js/vendor/jquery.slicknav.js"></script>
    <script src="./assets/js/vendor/slick.min.js"></script>
    <script src="./assets/js/vendor/wow.min.js"></script>
    <script src="./assets/js/vendor/jquery.ticker.js"></script>
    <script src="./assets/js/vendor/jquery.vticker-min.js"></script>
    <script src="./assets/js/vendor/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="./assets/js/vendor/jquery.magnific-popup.js"></script>
    <script src="./assets/js/vendor/jquery.sticky.js"></script>
    <script src="./assets/js/vendor/perfect-scrollbar.js"></script>
    <script src="./assets/js/vendor/waypoints.min.js"></script>
    <script src="./assets/js/vendor/jquery.theia.sticky.js"></script>
    <!-- NewsBoard JS -->
    <script src="./assets/js/main.js"></script>
</body>

</html>