@extends('layouts.app')
@section('content')
<main>
    <!-- top new products section -->
    <section id = "new-products" class = "new-products py bg-light-grey-color-shade">
        <div class = "container">
            <div class = "section-title text-center">
                <h2>Top New Product</h2>
                <p class = "lead">Produk baru dengan penjualan tertinggi.</p>
                <div class = "line"></div>
            </div>

            <div class = "new-products-content grid">
                <div class = "new-product-item">
                    <div class = "image">
                        <img src = "images/0560-01.png" alt = "">
                        <!-- <span class = "badge bg-brown text-white text-center text-uppercase">Disc</span> -->
                    </div>
                    <div class = "info">
                        <div class = "ratings text-grey">
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-light-grey"></i>
                        </div>
                        <span>(10 Reviews)</span>
                        <p class = "name">MIDCENT CHEST OF 6 DRAWERS</p>
                        <div class = "price">
                            <span class = "old text-grey">Rp 800.000</span>
                            <span class = "new text-brown">Rp 791.000</span>
                        </div>
                    </div>
                </div>

                <div class = "new-product-item">
                    <div class = "image">
                        <img src = "images/0560-02.png" alt = "">
                        <span class = "badge bg-brown text-white text-center text-uppercase">Disc</span>
                    </div>
                    <div class = "info">
                        <div class = "ratings text-grey">
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-light-grey"></i>
                        </div>
                        <span>(10 Reviews)</span>
                        <p class = "name">MIDCENT CHEST OF 6 DRAWERS</p>
                        <div class = "price">
                            <span class = "old text-grey">Rp 800.000</span>
                            <span class = "new text-brown">Rp 791.000</span>
                        </div>
                    </div>
                </div>

                <div class = "new-product-item">
                    <div class = "image">
                        <img src = "images/0560-03.png" alt = "">
                        <span class = "badge bg-brown text-white text-center text-uppercase">Disc</span>
                    </div>
                    <div class = "info">
                        <div class = "ratings text-grey">
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-light-grey"></i>
                        </div>
                        <span>(10 Reviews)</span>
                        <p class = "name">MIDCENT CHEST OF 6 DRAWERS</p>
                        <div class = "price">
                            <span class = "old text-grey">Rp 800.000</span>
                            <span class = "new text-brown">Rp 791.000</span>
                        </div>
                    </div>
                </div>

                <div class = "new-product-item">
                    <div class = "image">
                        <img src = "images/0560-04.png" alt = "">
                        <span class = "badge bg-brown text-white text-center text-uppercase">Disc</span>
                    </div>
                    <div class = "info">
                        <div class = "ratings text-grey">
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-light-grey"></i>
                        </div>
                        <span>(10 Reviews)</span>
                        <p class = "name">MIDCENT CHEST OF 6 DRAWERS</p>
                        <div class = "price">
                            <span class = "old text-grey">Rp 800.000</span>
                            <span class = "new text-brown">Rp 791.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of top new products section -->

    <!-- category section -->
    <section class = "category py bg-light-brown" id = "category">
        <div class = "container">
            <div class = "category-content grid">
                <div class = "category-item">
                    <img src = "images/0560-04.png">
                    <div class = "category-badge bg-white text-dark flex">Sofa Set</div>
                </div>
                <div class = "category-item">
                    <img src = "images/0560-05.png">
                    <div class = "category-badge bg-white text-dark flex">Sofa Set</div>
                </div>
                <div class = "category-item">
                    <img src = "images/0560-06.png">
                    <div class = "category-badge bg-white text-dark flex">Sofa Set</div>
                </div>
                <div class = "category-item">
                    <img src = "images/0560-08.png">
                    <div class = "category-badge bg-white text-dark flex">Sofa Set</div>
                </div>
                <div class = "category-item">
                    <img src = "images/0560-03.png">
                    <div class = "category-badge bg-white text-dark flex">Sofa Set</div>
                </div>
                <div class = "category-item">
                    <img src = "images/0560-07.png">
                    <div class = "category-badge bg-white text-dark flex">Sofa Set</div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of category section -->

    <!-- featured deals section -->
    <section class = "featured-deals bg-light-grey-color-shade py" id = "featured-deals">
        <div class = "container">
            <div class = "section-title text-center">
                <h2>featured deals</h2>
                <p class = "lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                <div class = "line"></div>
            </div>

            <div class = "featured-deals-content grid">
                <div class = "featured-deals-item">
                    <div class = "image">
                        <img src = "images/0666-01.png">
                    </div>
                    <div class = "info bg-white">
                        <div class = "ratings text-grey">
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-light-grey"></i>
                        </div>
                        <p class = "name">VANIA QUEEN BED SET</p>
                        <div class = "price">
                            <span class = "old text-grey">Rp 1.500.000</span>
                            <span class = "new text-brown">Rp 1.294.000</span>
                        </div>
                    </div>
                </div>

                <div class = "featured-deals-item">
                    <div class = "image">
                        <img src = "images/0667-01.png">
                    </div>
                    <div class = "info bg-white">
                        <div class = "ratings text-grey">
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-light-grey"></i>
                        </div>
                        <p class = "name">VANIA QUEEN BED SET</p>
                        <div class = "price">
                            <span class = "old text-grey">Rp 1.600.000</span>
                            <span class = "new text-brown">Rp 1.487.000</span>
                        </div>
                    </div>
                </div>

                <div class = "featured-deals-item">
                    <div class = "image">
                        <img src = "images/0668-01.png">
                    </div>
                    <div class = "info bg-white">
                        <div class = "ratings text-grey">
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-light-grey"></i>
                        </div>
                        <p class = "name">ZAHRA QUEEN BED SET</p>
                        <div class = "price">
                            <span class = "old text-grey">Rp 1.300.000</span>
                            <span class = "new text-brown">Rp 975.000</span>
                        </div>
                    </div>
                </div>

                <div class = "featured-deals-item">
                    <div class = "image">
                        <img src = "images/0669-01.png">
                    </div>
                    <div class = "info bg-white">
                        <div class = "ratings text-grey">
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-brown"></i>
                            <i class = "fas fa-star text-light-grey"></i>
                        </div>
                        <p class = "name">BELVAN QUEEN BED SET</p>
                        <div class = "price">
                            <span class = "old text-grey">Rp 1.300.000</span>
                            <span class = "new text-brown">Rp 909.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of featured deals section -->

    <!-- catalog section -->
    <section class = "catalog bg-brown" id = "catalog">
        <div class = "catalog-content grid text-center">
            <div class = "catalog-left"></div>
            <div class = "catalog-right text-white flex py">
                <div class = "section-title">
                    <h2>modern living quarters</h2>
                </div>
                <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id eaque doloribus, repellat dolor nisi nihil facilis voluptatibus porro deleniti recusandae?</p>
                <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, sequi distinctio corporis pariatur excepturi minima!</p>
            </div>
        </div>
    </section>
    <!-- end of catalog section -->

    <!-- latest news section -->
    <!-- <section class = "latest-news bg-light-grey-color-shade py" id = "latest-news">
        <div class = "container">
            <div class = "section-title text-center">
                <h2>latest news</h2>
                <p class = "lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <div class = "line"></div>
            </div>

            <div class = "latest-news-content grid">
                <article class = "latest-news-item bg-white">
                    <div class = "top">
                        <img src = "images/latest_news_img_1.png">
                        <div class = "author">
                            <img src = "images/author-1.jpg">
                        </div>
                    </div>
                    <div class = "body">
                        <span class = "date">Posted October 8, 2021</span>
                        <h3 class = "title text-uppercase">cheap budget hotel rooms</h3>
                        <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, veritatis <span>...</span></p>
                    </div>
                    <div class = "bottom"k>
                        <a href = "#" class = "text-uppercase">read more</a>
                    </div>
                </article>

                <article class = "latest-news-item bg-white">
                    <div class = "top">
                        <img src = "images/latest_news_img_2.png">
                        <div class = "author">
                            <img src = "images/author-2.jpg">
                        </div>
                    </div>
                    <div class = "body">
                        <span class = "date">Posted October 8, 2021</span>
                        <h3 class = "title text-uppercase">cheap budget hotel rooms</h3>
                        <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, veritatis <span>...</span></p>
                    </div>
                    <div class = "bottom"k>
                        <a href = "#" class = "text-uppercase">read more</a>
                    </div>
                </article>

                <article class = "latest-news-item bg-white">
                    <div class = "top">
                        <img src = "images/latest_news_img_3.png">
                        <div class = "author">
                            <img src = "images/author-3.jpg">
                        </div>
                    </div>
                    <div class = "body">
                        <span class = "date">Posted October 8, 2021</span>
                        <h3 class = "title text-uppercase">cheap budget hotel rooms</h3>
                        <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, veritatis <span>...</span></p>
                    </div>
                    <div class = "bottom"k>
                        <a href = "#" class = "text-uppercase">read more</a>
                    </div>
                </article>
            </div>
        </div>
    </section> -->
    <!-- end of latest news section -->

    <!-- feedback section -->
    <section class = "feedback py bg-light-grey-color-shade" id = "feedback">
        <div class = "container">
            <div class = "section-title text-center">
                <h2>Feedback</h2>
                <p class = "lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class = "line"></div>
            </div>

            <div class = "feedback-inner">
                <div class = "feedback-container grid">
                    <div class = "feedback-item bg-white text-center" data-id = "1">
                        <img src = "images/quote-icon-dark.png" class = "quote-icon">
                        <p class = "text text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea corporis delectus, eaque consectetur ullam rerum?</p>
                        <div class = "client">
                            <img src = "images/client-1.jpg">
                        </div>
                    </div>

                    <div class = "feedback-item bg-white text-center" data-id = "2" id = "feedback-display">
                        <img src = "images/quote-icon.png" class = "quote-icon">
                        <p class = "text text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea corporis delectus, eaque consectetur ullam rerum?</p>
                        <div class = "client">
                            <img src = "images/client-2.jpg">
                        </div>
                    </div>

                    <div class = "feedback-item bg-white text-center" data-id = "3">
                        <img src = "images/quote-icon-dark.png" class = "quote-icon">
                        <p class = "text text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea corporis delectus, eaque consectetur ullam rerum?</p>
                        <div class = "client">
                            <img src = "images/client-3.jpg">
                        </div>
                    </div>
                </div>
            </div>
            <div class = "feedback-btns flex">
                <button class = "feedback-btn feedback-active-btn"></button>
                <button class = "feedback-btn"></button>
                <button class = "feedback-btn"></button>
            </div>
        </div>
    </section>
    <!-- end of feedback section -->

    <!-- newsletter section -->
    <section class = "newsletter py bg-light-grey-color-shade" id = "newsletter">
        <div class = "container">
            <div class = "section-title text-center">
                <h2>Newsletter</h2>
                <p class = "lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class = "line"></div>
            </div>

            <div class = "newsletter-content">
                <form>
                    <div class = "input-group flex">
                        <input type = "email" class = "form-control bg-light-grey">
                        <button type = "submit" class = "btn bg-dark text-white text-uppercase">subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- end of newsletter section -->
</main>
@stop