@section('title', 'Halaman Program')
@extends('layouts.templates.main')
@section('main-content')
<div class="layout_padding-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="img_box">
                    <figure><img src=" {{ $data->image }}" alt="#" /></figure>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 product_detail_side">
                <div class="abotext_box">
                    <div class="product-heading">
                        <h2>{{ $data->name }}</h2>
                    </div>
                    <div class="product-detail-side">
                    </div>
                    <div class="detail-contant">
                        <p>{{ $data->content }}</p>
                        <form class="cart" method="post" action="shop-cart.html">
                            <div class="quantity">
                                <input step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" type="number">
                            </div>
                            <button type="submit" class="bt_main">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="tab_bar_section">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Description</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Reviews (2)</a> </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="description" class="tab-pane active">
                                <div class="product_desc">
                                    <p>{{ $data->content }}</p>
                                </div>
                            </div>
                            <div id="reviews" class="tab-pane fade">
                                <div class="product_review">
                                    <h3>Reviews (2)</h3>
                                    <div class="commant-text row">
                                        <div class="col-lg-2 col-md-2 col-sm-4">
                                            <div class="profile">
                                                <img class="img-responsive" src="{{ asset('assets/images/lllll.png') }}" alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8">
                                            <h5>Ravi</h5>
                                            <p><span class="c_date">July 23, 2019</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                                            <span class="rating">
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star-o" aria-hidden="true"></i>
                     </span>
                                            <p class="msg">ThisThis book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, “Lorem ipsum dolor sit amet..
                                            </p>
                                        </div>
                                    </div>
                                    <div class="commant-text row">
                                        <div class="col-lg-2 col-md-2 col-sm-4">
                                            <div class="profile">
                                                <img class="img-responsive" src="{{ asset('assets/images/lllll.png') }}" alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8">
                                            <h5>Ravi</h5>
                                            <p><span class="c_date">July 23, 2019</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                                            <span class="rating">
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star-o" aria-hidden="true"></i>
                     </span>
                                            <p class="msg">Nunc augue purus, posuere in accumsan sodales ac, euismod at est. Nunc faccumsan ermentum consectetur metus placerat mattis. Praesent mollis justo felis, accumsan faucibus mi maximus et. Nam hendrerit mauris id scelerisque placerat. Nam vitae imperdiet turpis</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="full review_bt_section">
                                                <div class="float-right">

                                                    <a class="bt_main" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Leave a Review</a>

                                                </div>
                                            </div>

                                            <div class="full">

                                                <div id="collapseExample" class="full collapse commant_box">
                                                    <form accept-charset="UTF-8" action="index.html" method="post">
                                                        <input id="ratings-hidden" name="rating" type="hidden">
                                                        <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." required=""></textarea>
                                                        <div class="full_bt center">
                                                            <button class="bt_main" type="submit">Save</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

    © 2022 GitHub, Inc.

    Terms
    Privacy
    Security
    Status
    Docs
    Contact GitHub
    Pricing