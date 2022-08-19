<div class="row">
    <div class="col-lg-7 text-white">
        <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h3 data-aos="zoom-in" class="animate-charcter teks-box">What Can I DO?</h3>
              </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 text-white">
        @foreach ($skills as $skill)
            <div data-aos="fade-up"
            data-aos-anchor-placement="center-bottom" class="container-fluid mb-1 align-items-center mt-5 ml-5">
                <div class="row">
                    <div class="col-2">
                        {{ $loop->iteration }}.
                    </div>
                    <div class="col-10">
                        <h2>{{$skill->name}}</h2>
                        <p>{{ $skill->desc }}</p> <br>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
