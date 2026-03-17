@extends('layout.app')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="text-center">

                <!-- Thank You Message -->
                <h1 class="display-4 fw-bold text-dark mb-4">Thank You for Your Order! 🎉</h1>
                
                <div class="card shadow-lg border-0 p-4 mb-4">
                    <div class="card-body">
                        <h3 class="fw-semibold text-primary mb-3">Your Order Has Been Successfully Placed!</h3>
                        
                        <p class="lead text-muted mb-4">
                            We have received your order and our team is already working on it. 
                            You will receive a confirmation call within the next 24 hours to confirm your order details.
                        </p>

                        <div class="row text-start">
                            <div class="col-md-6 mb-3">
                                <h5 class="fw-bold text-dark">📞 What's Next?</h5>
                                <ul class="list-unstyled text-muted">
                                    <li>• Order confirmation call</li>
                                    <li>• Processing (1-2 days)</li>
                                    <li>• Fast delivery to your doorstep</li>
                                </ul>
                            </div>
                            <div class="col-md-6 mb-3">
                                <h5 class="fw-bold text-dark">🚚 Delivery Info</h5>
                                <ul class="list-unstyled text-muted">
                                    <li>• Free delivery nationwide</li>
                                    <li>• 3-5 business days</li>
                                    <li>• Cash on delivery available</li>
                                </ul>
                            </div>
                        </div>

                        <div class="alert alert-info mt-4">
                            <strong>💡 Important:</strong> Keep your phone accessible as our representative will contact you soon to confirm your order and delivery details.
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="{{ url('/') }}" class="btn btn-outline-primary btn-lg px-4">
                        <i class="fas fa-home me-2"></i>Continue Shopping
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Custom CSS for animations -->
<style>
.success-checkmark {
    animation: scaleIn 0.5s ease-in-out;
}

@keyframes scaleIn {
    0% {
        transform: scale(0);
        opacity: 0;
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}

.card {
    animation: fadeInUp 0.6s ease-out;
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
@endsection