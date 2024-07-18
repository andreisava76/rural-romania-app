@extends("layouts.app")
@section("content")
    <header class="bg-success text-white text-center py-5">
        <h1>Welcome to Rural Tourism Romania</h1>
        <p>Experience the beauty and culture of rural Romania</p>
    </header>

    <section class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="path/to/image1.jpg" class="card-img-top" alt="Tourism spot 1">
                    <div class="card-body">
                        <h5 class="card-title">Beautiful Villages</h5>
                        <p class="card-text">Discover the charming villages of rural Romania.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="path/to/image2.jpg" class="card-img-top" alt="Tourism spot 2">
                    <div class="card-body">
                        <h5 class="card-title">Cultural Heritage</h5>
                        <p class="card-text">Experience the rich cultural heritage of our countryside.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="path/to/image3.jpg" class="card-img-top" alt="Tourism spot 3">
                    <div class="card-body">
                        <h5 class="card-title">Natural Beauty</h5>
                        <p class="card-text">Enjoy the stunning natural landscapes of Romania.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Rural Tourism Romania. All rights reserved.</p>
    </footer>
@endsection
@push('js')

@endpush
