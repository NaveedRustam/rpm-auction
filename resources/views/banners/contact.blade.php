@extends('rpm_layout.app')

@section('title', 'Contact Us')

@section('content')
    <section class="py-5 text-white position-relative"
        style="background: linear-gradient(rgba(35, 35, 35, 0.72), rgba(35, 35, 35, 0.82)), url('{{ asset('images/hero-bg3.jpg') }}') center/cover no-repeat;">
        <div class="container py-5" data-aos="fade-up">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <span class="badge rounded-pill px-3 py-2 mb-3"
                        style="background-color: rgba(255, 199, 211, 0.2); color: #fff;">
                        Customer Support
                    </span>
                    <h1 class="display-4 fw-bold mb-3">Contact RPM Auction</h1>
                    <p class="lead mb-4 text-white-50">
                        Reach out for help with auctions, inventory questions, account guidance, or general support.
                        Our team is here to make the process clearer and easier to manage.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="mailto:info@example.com" class="btn btn-custom px-4 py-2">Email Support</a>
                        <a href="{{ route('about') }}" class="btn btn-outline-light px-4 py-2">Learn About Us</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="rounded-4 shadow-lg p-4"
                        style="background-color: rgba(255, 255, 255, 0.12); backdrop-filter: blur(4px);">
                        <h3 class="fw-semibold mb-3">Quick Contact Details</h3>
                        <div class="d-flex align-items-start mb-3">
                            <div class="me-3 fs-4"><i class="fa-solid fa-envelope"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Email</h6>
                                <a href="mailto:info@example.com" class="text-white text-decoration-none">info@example.com</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <div class="me-3 fs-4"><i class="fa-solid fa-headset"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Support</h6>
                                <p class="mb-0 text-white-50">Customer support for auction and account-related questions.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="me-3 fs-4"><i class="fa-solid fa-clock"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Response Window</h6>
                                <p class="mb-0 text-white-50">Most inquiries can be reviewed within one business day.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container" data-aos="fade-up">
            <div class="row g-4">
                <div class="col-md-6 col-xl-3">
                    <div class="h-100 rounded-4 border shadow-sm p-4 text-center" style="border-top: 3px solid rgb(146, 41, 64) !important;">
                        <div class="fs-2 mb-3" style="color: rgb(146, 41, 64);">
                            <i class="fa-solid fa-envelope-open-text"></i>
                        </div>
                        <h5 class="fw-bold">General Inquiries</h5>
                        <p class="text-muted mb-2">Questions about RPM Auction and platform support.</p>
                        <a href="mailto:info@example.com" class="text-decoration-none"
                            style="color: rgb(146, 41, 64);">info@example.com</a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="h-100 rounded-4 border shadow-sm p-4 text-center" style="border-top: 3px solid rgb(146, 41, 64) !important;">
                        <div class="fs-2 mb-3" style="color: rgb(146, 41, 64);">
                            <i class="fa-solid fa-gavel"></i>
                        </div>
                        <h5 class="fw-bold">Auction Help</h5>
                        <p class="text-muted mb-0">Guidance for browsing listings, understanding inventory, and bidding.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="h-100 rounded-4 border shadow-sm p-4 text-center" style="border-top: 3px solid rgb(146, 41, 64) !important;">
                        <div class="fs-2 mb-3" style="color: rgb(146, 41, 64);">
                            <i class="fa-solid fa-user-gear"></i>
                        </div>
                        <h5 class="fw-bold">Account Support</h5>
                        <p class="text-muted mb-0">Need help with sign-in or account access? Contact the support team.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="h-100 rounded-4 border shadow-sm p-4 text-center" style="border-top: 3px solid rgb(146, 41, 64) !important;">
                        <div class="fs-2 mb-3" style="color: rgb(146, 41, 64);">
                            <i class="fa-solid fa-comments"></i>
                        </div>
                        <h5 class="fw-bold">Customer Care</h5>
                        <p class="text-muted mb-0">We aim to provide direct and practical answers for every inquiry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5"
        style="background-image: url('{{ asset('images/pro-bg.png') }}'); background-repeat: no-repeat; background-size: cover; background-color: #F6F0FA;">
        <div class="container" data-aos="fade-up">
            <div class="row g-5 align-items-start">
                <div class="col-lg-7">
                    <div class="bg-white rounded-4 shadow-sm p-4 p-lg-5 border">
                        <span class="text-uppercase fw-semibold small bt1">Send a message</span>
                        <div class="mt-2 mb-3">
                            <h2 class="fw-semibold bt1 d-inline">Tell us how we can</h2>
                            <h2 class="d-inline fst-italic ms-1 font1">help</h2>
                        </div>
                        <p class="text-muted mb-4">
                            Use the form below to share your question. This page currently provides the front-end
                            contact layout, so messages are not yet connected to a backend submission flow.
                        </p>
                        <form onsubmit="event.preventDefault();">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="contact_name" class="form-label fw-semibold">Full Name</label>
                                    <input type="text" id="contact_name" class="form-control form-control-lg"
                                        placeholder="Enter your name">
                                </div>
                                <div class="col-md-6">
                                    <label for="contact_email" class="form-label fw-semibold">Email Address</label>
                                    <input type="email" id="contact_email" class="form-control form-control-lg"
                                        placeholder="Enter your email">
                                </div>
                                <div class="col-md-6">
                                    <label for="contact_phone" class="form-label fw-semibold">Phone Number</label>
                                    <input type="text" id="contact_phone" class="form-control form-control-lg"
                                        placeholder="Optional phone number">
                                </div>
                                <div class="col-md-6">
                                    <label for="contact_subject" class="form-label fw-semibold">Subject</label>
                                    <input type="text" id="contact_subject" class="form-control form-control-lg"
                                        placeholder="How can we help?">
                                </div>
                                <div class="col-12">
                                    <label for="contact_message" class="form-label fw-semibold">Message</label>
                                    <textarea id="contact_message" class="form-control form-control-lg" rows="6"
                                        placeholder="Write your message here"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-custom px-4 py-3">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-white rounded-4 shadow-sm p-4 border mb-4">
                        <span class="text-uppercase fw-semibold small bt1">Support details</span>
                        <div class="mt-2 mb-3">
                            <h3 class="fw-semibold bt1 d-inline">How to reach</h3>
                            <h3 class="d-inline fst-italic ms-1 font1">us</h3>
                        </div>
                        <div class="border rounded-4 p-3 mb-3">
                            <h6 class="fw-bold mb-1">Email Support</h6>
                            <p class="text-muted mb-1">Best for account, listing, and general platform questions.</p>
                            <a href="mailto:info@example.com" class="text-decoration-none"
                                style="color: rgb(146, 41, 64);">info@example.com</a>
                        </div>
                        <div class="border rounded-4 p-3 mb-3">
                            <h6 class="fw-bold mb-1">Customer Support</h6>
                            <p class="text-muted mb-0">Available to help guide buyers through auction-related steps.</p>
                        </div>
                        <div class="border rounded-4 p-3">
                            <h6 class="fw-bold mb-1">Inventory Sections</h6>
                            <p class="text-muted mb-0">Need help choosing? Browse run and drive or salvage categories before contacting us.</p>
                        </div>
                    </div>

                    <div class="rounded-4 text-white p-4 shadow-sm"
                        style="background: rgb(146, 41, 64) url('{{ asset('images/Group 2032.png') }}') center/cover no-repeat;">
                        <h4 class="fw-bold mb-3">Need a faster starting point?</h4>
                        <p class="text-white-50 mb-4">
                            Review our main inventory sections first, then contact support if you want help narrowing
                            down the right options.
                        </p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="{{ route('drive') }}" class="btn btn-custom">Run and Drive</a>
                            <a href="{{ route('salvage') }}" class="btn btn-outline-light">Salvage Cars</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container" data-aos="fade-up">
            <div class="text-center mb-5">
                <span class="text-uppercase fw-semibold small bt1">FAQ</span>
                <div class="mt-2">
                    <h2 class="fw-semibold bt1 d-inline">Common support</h2>
                    <h2 class="d-inline fst-italic ms-1 font1">questions</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="accordion-item active rounded-4 border shadow-sm mb-3 overflow-hidden">
                        <div class="accordion-header bg-white px-4 py-3 d-flex justify-content-between">
                            <span class="fw-semibold">How should I contact RPM Auction for general help?</span>
                            <span>-</span>
                        </div>
                        <div class="accordion-body px-4 py-3 bg-white">
                            Email is the clearest way to share details about your question. Use
                            <a href="mailto:info@example.com" class="text-decoration-none"
                                style="color: rgb(146, 41, 64);">info@example.com</a>
                            for general inquiries.
                        </div>
                    </div>
                    <div class="accordion-item rounded-4 border shadow-sm mb-3 overflow-hidden">
                        <div class="accordion-header bg-white px-4 py-3 d-flex justify-content-between">
                            <span class="fw-semibold">Can I ask about specific auction inventory?</span>
                            <span>+</span>
                        </div>
                        <div class="accordion-body px-4 py-3 bg-white">
                            Yes. Share the listing details or inventory type you are interested in, and support can
                            guide you to the relevant section.
                        </div>
                    </div>
                    <div class="accordion-item rounded-4 border shadow-sm overflow-hidden">
                        <div class="accordion-header bg-white px-4 py-3 d-flex justify-content-between">
                            <span class="fw-semibold">Is the contact form connected to backend submission?</span>
                            <span>+</span>
                        </div>
                        <div class="accordion-body px-4 py-3 bg-white">
                            Not yet. The page now includes the complete contact layout and fields, but a backend form
                            handler still needs to be added if you want messages stored or emailed automatically.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
