@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact Us</div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <h2>Get in Touch</h2>
                    <p>We would love to hear from you! Whether you have a question about our platform, need assistance, or just want to share your thoughts, feel free to reach out to us.</p>

                    <form action="{{ route('contacts.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
                        </div>
                        <button type="submit" class="btn mt-2 btn-primary">Send Message</button>
                    </form>

                    <h3>Our Contact Information</h3>
                    <p>
                        <strong>Address:</strong> 123 Basketball St, London, UK<br>
                        <strong>Email:</strong> info@basketballinfohub.com<br>
                        <strong>Phone:</strong> +44 20 7946 0958
                    </p>

                    <h3>Follow Us</h3>
                    <p>Stay connected with us through social media:</p>
                    <p>
                        <a href="#" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
