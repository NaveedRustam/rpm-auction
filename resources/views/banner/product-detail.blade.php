@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Left Gallery -->
                <div
                    class="col-md-6 d-flex flex-md-row flex-column ">
                    <!-- Thumbnails Column -->
                    <div
                        class="d-flex flex-md-column flex-row me-md-2 mb-3 mb-md-0 order-2 order-md-1">
                        
                            @foreach($images as $img)
                                <img src="{{ asset($img) }}" 
                                    class="img-fluid m-1 thumb rounded-3"
                                    style="width: 70px; height: 80px;" alt>
                            @endforeach 
                    </div>

                    <!-- Main Big Image -->
                    <div
                        class="flex-grow-1 text-center order-1 order-md-2 mb-3 mb-md-0">
                        <img src="{{ asset($category->thumbnail) }}"
                            class="img-fluid rounded-3 w-100"
                            id="modalProductImg" alt="{{ $category->heading }}">
                    </div>
                </div>

        <!-- Right Info -->
                <div class="col-md-6">
                    <h3>{{ $category->heading }}</h3>
                    <div class="product-price">
                        @if($category->discount)
                            <span class="old-price">Rs.{{ $category->price}}</span>
                        @endif
                            <span class="new-price">discount Rs.{{ $category->discount }}</span>
                            <span class="text-primary">+Rs.{{ $category->ship_charges }} Delivery Charges</span>
                            <span class="new-price">Actual Rs.{{ $category->price - $category->discount + $category->ship_charges }}</span>
                    </div>
                    <p class="mt-3">{{ $category->delivery_description ?? 'No description available.' }}</p>

            <!-- Quantity + Order -->
    
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

                <button class="btn flex-grow-1" data-bs-toggle="modal"
                    data-bs-target="#orderModal">
                    ORDER NOW
                </button>
            </div>

            <!-- Seller Info -->
            <div class="mt-4">
                <p><b>Seller:</b> PakStyle</p>
                <p><b>Brand:</b> {{ $category->brand_name ?? 'N/A' }}</p>
                <p><b>Availability:</b> 
                    @if($category->stock > 0)
                        <span class="text-success">In Stock</span>
                    @else
                        <span class="text-danger">Out of Stock</span>
                    @endif
                </p>
                <p><b>Delivery:</b> 2–7 working days</p>
            </div>
        </div>
    </div>
</div>

<!-- Tabs Section -->

        <div class="tabs-section pt-5 mt-4 mb-0"
            style="background-color: #f8f9fa;">
            <ul class="nav  d-flex justify-content-center align-items-center"
                id="myTab" role="tablist">
                <li class="nav-item " role="presentation">

                    <a href="#" class="nav-link active rounded-pill links "
                        id="desc-tab" data-bs-toggle="tab"
                        data-bs-target="#desc">Description</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#" class="nav-link rounded-pill links"
                        id="ship-tab" data-bs-toggle="tab"
                        data-bs-target="#ship">Shipping
                        & Delivery</a>
                </li>
                {{-- <li class="nav-item" role="presentation">
                    <a href="#" class="nav-link rounded-pill links"
                        id="review-tab" data-bs-toggle="tab"
                        data-bs-target="#review">Reviews</a>

                </li> --}}
            </ul>
            <div class="tab-content mt-3">
                <div class="tab-pane fade show active" id="desc"
                    role="tabpanel">
                    <div class="product-highlights pt-2 ">
                        <h5 class="fw-bold ms-3">{{$category->heading}}</h5>
                        <ul class="pt-3 pb-4 mb-0">
                            <li>Unstitched Embroidered Chiffon Dresses
                                Online</li>
                            <li>Zari, Thread, & Sequins Embroidery Work</li>
                            <li>Heavy Embroidered Neck</li>
                            <li>Embroidered Chiffon Front & Back</li>
                            <li>Embroidered Sleeves with Patches</li>
                            <li>Embroidered Dupatta</li>
                            <li>Crepe/Malai Trouser</li>
                            <li>High Quality Material</li>
                            <li>Occasions: Party, Wedding</li>
                            <li>Cash on Delivery Nationwide</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade ps-3 pt-2" id="ship" role="tabpanel">
                    <h5 class="fw-bold ms-3">Shipping & Delivery:</h5>
                    <p class=" pt-3 ms-3">Delivery time: 2–7 working days
                        nationwide. Cash on
                        Delivery available.</p>
                    <h4 class="ms-3">Shipping Charges
                    </h4>
                    <ul class="pt-3 pb-4 mb-0">
                        <li>Shipping Charges: Rs.{{ $category->ship_charges }} | shipping & handling charges usually
                            applied per item.
                        </li>
                        <li>Zari, Thread, & Sequins Embroidery Work</li>

                    </ul>
                    <h4 class="ms-3">Delivery Time</h4>
                    <ul class="pt-3 pb-4 mb-0">
                        <li>2 to 3 business days in major cities like Karachi,
                            Lahore, Islamabad etc.
                        </li>
                        <li>3 to 5 business days in small towns and cities.</li>
                        <li>5 to 8 business days in Chak & Villages.</li>

                    </ul>
                </div>
                {{-- <div class="tab-pane fade ps-3 pt-2" id="review"
                    role="tabpanel">
                    <p>No reviews yet. Be the first to review!</p>
                </div> --}}
            </div>
        </div>

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
                            <!-- Product Info
                            <div class="col-md-12 text-center">
                                <div class="col-md justify-content-start">
                                    <img id="modalProductImg" src=""
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

                            </div> -->
                            <!-- Form -->
                            <div class="col-md-12">
                                <form  action="{{ route('orders.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" id="total_order" name="total_order" value="1">
                                    <input type="hidden" id="category_id" name="category_id" value={{$category->id}}>
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
                                    <div
                                        class="mb-2 d-flex justify-content-center align-items-center">
                                        <button type="submit" class="btn ">Place
                                            Order</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
