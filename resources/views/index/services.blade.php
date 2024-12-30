<section class="ftco-section" id="services-section">
    <div class="container">
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Services</h1>
                <h2 class="mb-4">Services</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row">
            @foreach($services as $service)
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a class="services-1" href="#">
							<span class="icon">
								@svg($service->icon,  ['style' => 'width: 50%; color: #ffffff'])
							</span>
                        <div class="desc">
                            <h3 class="mb-5">{{ $service->title }}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
