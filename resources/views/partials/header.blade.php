<header class="bg-light">
    <div class="container py-3 ">
        <div class="row align-items-center ">
            <div class="col-4">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logoDC" class="img-fluid">
            </div>

            <nav class="col-8">
                <ul class="d-flex list-unstyled gap-5 ms-5 mb-0">
                    <li><a href="{{ route('homepage') }}">Home</a></li>
                    <li><a href="{{ route('detailspage') }}">Details</a></li>
                    <li><a href="{{ route('comicspage') }}">Comics</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<div>
        <img id="jumbotron" class="w-100" 
             src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" 
             alt="Jumbotron DC">
    </div>