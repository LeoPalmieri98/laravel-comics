@php
    $navitems = config('navbadge');
    $navlinks = config('navlinks');
@endphp

        
        <header>
            <div class="bg-primary d-flex justify-content-center py-4 gap-5 h-100  ">
            @foreach ($navitems as $navitem)
                
           
            
                <div class="d-flex flex-column align-items-center text-center my-2">
                        <img class="icon-img" src="{{ Vite::asset('resources/img/' . $navitem['img']) }}" alt=" {{$navitem ["title"]}}" />
                        <p class="text-white fs-5 my-4 ">{{$navitem ["title"]}}</p>
                </div>

            @endforeach
            
            </div>


<div class="bg-footer-dark pt-5 pb-3 bg-dc-comics">
    <div class="container">
        <div class="row">
            

            <div class="col-md-7 d-flex flex-wrap gap-5">
                
                @foreach ($navlinks as $navsection)
                    <div> 
                        <h5 class="fw-bold text-white mb-3">{{ $navsection["title"] }}</h5>
                        
                        <ul class="list-unstyled">
                            @foreach ($navsection["links"] as $link)
                                <li class="mb-1">

                                    <a href="{{ $link['href'] }}" class="text-white text-opacity-75 text-decoration-none small">
                                        {{ $link["name"] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
                
            </div>

            <div class="col-md-5 d-flex justify-content-end align-items-center">
                <img class="img-fluid" 
                     src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" 
                     alt="bg-dc-foot" 
                     style="max-height: 350px; object-fit: cover; object-position: center;" />
            </div>

        </div>
    </div>
</div>
                       

            <div class="bg-dark py-3">
                <div class="container d-flex justify-content-between align-items-center py-4">
                    <button class="btn btn-outline-primary text-white fw-bold">SIGN-UP NOW!</button>
                    <div className="d-flex align-items-center gap-3">
                        <span class="text-primary fw-bold">FOLLOW US</span>
                        <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}"  alt="facebook-icon" />
                        <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}"   alt="twitter-icon" />
                        <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}"   alt="youtube-icon" />
                        <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}"   alt="pinterest-icon" />
                        <img  src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope-icon" />
                    </div>
                </div>
            </div>