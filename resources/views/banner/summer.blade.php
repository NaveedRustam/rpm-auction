@extends('layout.app')

@section('title' , 'home')

@section('content')

        <section class="text-white w-100 justify-content-center hero" >
    <div class="owl-carousel owl-theme">
        @foreach($banners as $banner)
        <div class="item">
            <div class="w-100" style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image:  url('{{ asset($banner->image) }}');">
                <!-- Desktop -->
                <div class="w-60 d-none d-lg-block ps-5 py-5">
                    <h1 class="fw-semibold">{{ $banner->title }}</h1>
                    <p class="lead">{{ $banner->description }}</p>
                    <a href="#shop" class="btn rounded-pill">Shop Now</a>
                </div>
                <!-- Mobile -->
                <div class="d-50 d-sm-block d-lg-none ps-2 py-3">
                    <h1 class="fw-semibold">{{ $banner->title }}</h1>
                    <p class="lead">{{ $banner->description }}</p>
                    <a href="#shop" class="btn rounded-pill">Shop Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section>
    <div class="container">
        <div class="section-header col-lg-12 col-md-12 col-ms-12">
            <h2>Trending Products</h2>
            <p>
                Revamp your wardrobe with PakStyle's featured collection
                at unbeatable prices online in Pakistan. Discover trendy
                pieces that won't break the bank, and step up your style
                game without compromising on quality!
            </p>
        </div>

        <div class="products-grid col-lg-12 col-ms-10">
            @foreach($categories as $category)
            <div class="product-card">
                <div class="product-image">
                    <a href="{{ route('product.show', $category->id) }}">
                        <img src="{{ asset($category->thumbnail) }}" 
                             alt="{{ $category->heading }}">
                    </a>

                    @if($category->discount > 0 && $category->price > 0)
                        @php
                            $discountPercent = round(($category->discount / $category->price) * 100);
                        @endphp
                        <div class="product-badge">-{{ $discountPercent }}%</div>
                    @endif


                    <div class="product-actions">
                        <button class="quick-view-btn"
                                data-bs-toggle="modal"
                                data-bs-target="#orderModal"
                                data-title="{{ $category->heading }}"
                                data-price="{{ $category->price }}"
                                data-id="{{ $category->id}}"
                                data-oldprice="{{ $category->price + $category->discount  }}"
                                data-discount="-{{ $category->discount }}%"
                                data-image="{{ asset($category->thumbnail) }}">
                            <i class="fas fa-shopping-cart"></i> Quick Shop
                        </button>
                    </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title">
                        <a href="{{ route('product.show', $category->id) }}">
                            {{ $category->heading }}
                        </a>
                    </h3>
                    <div class="product-price">
                        <span class="current-price">Rs.{{ $category->price - $category->discount  }}</span>
                        @if($category->discount)
                            <span class="original-price">
                                Rs.{{ $category->price }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- <div class="load-more">
            <button class="load-more-btn">Load More Products</button>
        </div> -->
    </div>
</section>
        <!-- Reusable Product Modal -->
        <div class="modal fade" id="orderModal" tabindex="-1">
            <div class="modal-dialog modal-ms modal-dialog-centered">
                <div class="modal-content p-0">
                    <div class="modal-header border-0">
                        <h5 class="modal-title">Order Now</h5>
                        <button type="button" class="btn-close"
                            data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <!-- Product Info -->
                            <div class="col-md-12 text-center">
                                <div class="col-md justify-content-start">
                                    <img id="modalProductImg" src
                                        class="img-fluid rounded w-50 justify-content-start"
                                        alt="Product">
                                </div>
                                <div class="col-md justify-content-end ">
                                    <h6 class="mt-2"
                                        id="modalProductTitle"></h6>
                                    <p>
                                        <span
                                            class="text-muted text-decoration-line-through"
                                            id="modalOldPrice"></span>
                                        <span class="fw-bold text-danger"
                                            id="modalNewPrice"></span>
                                        <span class="badge bg-danger"
                                            id="modalDiscount"></span>
                                    </p>
                                </div>

                            </div>

                            <!-- Form -->
                            <div class="col-md-12">
                                <form  action="{{ route('orders.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" id="total_order" name="total_order" value="1">
                                    <input type="hidden" id="category_id" name="category_id">
                                    <div class="mb-2">
                                        <input type="text" class="form-control"
                                            placeholder="Name نام *" name="customer_name" required>
                                    </div>
                                    <div class="mb-2">
                                        <input type="email" class="form-control"
                                            placeholder="Email ای میل *" name="email"
                                            required>
                                    </div>
                                    <div class="mb-2">
                                        <input type="tel" class="form-control"
                                            placeholder="Phone موبائل نمبر *" name="phone"
                                            required>
                                    </div>
                                    <div class="mb-2">
                                        <input type="text" class="form-control" name="city"
                                            placeholder="City شہر">
                                    </div>
                                    <div class="mb-2">
                                        <textarea class="form-control" rows="2" name="address"
                                            placeholder="Address مکمل پتہ *"
                                            required></textarea>
                                    </div>
                                    <div class="mb-2">
                                        <textarea class="form-control" rows="2"
                                            placeholder="Color, Size, Comments ہدایات" name="comments"></textarea>
                                    </div>
                                    <!-- Quantity Selector -->
                                    <div
                                        class="d-flex flex-wrap justify-content-center gap-2 mb-3">
                                        <button type="button"
                                            class="btn btn-outline-secondary rounded-circle px-3"
                                            id="qtyMinus">-</button>

                                        <input type="number" id="productQty"
                                            class="form-control text-center"
                                            style="width:70px;" value="1" min="1">

                                        <button type="button" class="btn btn-outline-secondary"
                                            id="qtyPlus">+</button>
                                    </div>
                                    <div
                                        class="mb-2 d-flex justify-content-center align-items-center">
                                        <button type="submit" class="btn ">Place
                                            Order</button>
                                    </div>
                                </form>
                                <!-- View Details Link -->
                                <div class="text-center g-3">
                                    <a href="product-details.html"
                                        class="text-success fw-bold">View full
                                        details
                                        →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection