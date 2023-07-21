@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Music Studio Homepage') }}</div>

                <div class="card-body">
                    @auth
                    <div class="card">
                        <div class="card-header">{{ __('User Information') }}</div>
                        <div class="card-body">
                            <p><strong>Nom:</strong> {{ Auth::user()->nom }}</p>
                            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                            <!-- Vous pouvez ajouter d'autres informations de l'utilisateur ici -->
                        </div>
                    </div>
                    @endauth
                    <h1>Welcome to Our Music Studio</h1>
                    <img src="path_to_your_image.jpg" alt="Music Studio Image" style="width: 100%; height: auto;">
                    <br><br>
                    <p>
                        Welcome to our music studio website! Here you can book studio sessions and photo shoots for your musical projects.
                        We offer top-notch recording equipment and professional services to help you achieve your creative vision.
                    </p>
                    <a href="{{ route('reservation') }}" class="btn btn-primary">Book a Session</a>
                    <br><br>
                    <h2>Recording Studio Session</h2>
                    <p>
                        Our recording studio offers state-of-the-art equipment and a comfortable environment for your music projects.
                        Whether you're a solo artist or a band, our experienced team will be there to guide you through the recording process,
                        ensuring that you get the best sound quality possible.
                    </p>
                    <br>
                    <h2>Photo Shoot Studio Session</h2>
                    <p>
                        Our photo shoot studio is perfect for capturing stunning images for your album covers, promotional materials,
                        and social media. Our professional photographers will work with you to bring your artistic vision to life,
                        providing high-quality images that resonate with your audience.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection