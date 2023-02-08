<!-- Page Header Start -->
@section('container-fluid bg-secondary mb-5')
    <section class="container-fluid bg-secondary mb-5">
        <div class="container-fluid bg-secondary mb-5">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
                <h1 class="font-weight-semi-bold text-uppercase mb-3">{{ $name }}</h1>
                <div class="d-inline-flex">
                    <p class="m-0"><a href="/">Home</a></p>
                    <p class="m-0 px-2">-</p>
                    <p class="m-0"><a href="/{{ $name }}">{{ $name }}</a></p>
                </div>
            </div>
        </div>
    </section>
@show
<!-- Page Header End -->
