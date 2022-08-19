<div class="container-fluid pb-none" id="about" style="height:100%; min-height:100vh; background-color:#3C0C42; padding:none">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
          <div class="container" style="margin-bottom: -200px">
            <div class="content">
                <div class="content__container">
                    <p class="content__container__text text">
                        Hi, I am 
                    </p>
                    <ul class="content__container__list">
                        <li class="content__container__list__item">TIARA</li>
                        <li class="content__container__list__item">DEVELOPER</li>
                        <li class="content__container__list__item">DESIGNER</li>
                        <li class="content__container__list__item">LEARNER</li>
                    </ul>
                </div>
            </div>  
        </div>
      </div>
      <div class="col-md-6">
        <div class="container pt-3">
          <div class="owl-carousel owl-theme" style="">
            @foreach ($educations as $education)
            <div class="item mb-4">
              <div class="card text-center align-center" style="
                color: #fff;
                border: 1px solid rgba(255, 255,255,0.3);
                background: rgba(255, 255,255,0.2);
                border-radius: 16px;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                backdrop-filter: blur(5px); ">
                <div class="card-body">
                  <h4 class="card-title text-white" style="text-transform: uppercase">{{$education->institution}}</h4>
                  <p class="card-text text-white">{{$education->excerpt}}</p>
                </div>
                <div class="card-footer text-white" style="border-color: white">
                  {{ $education->yearin }} - {{ $education->yearout }}
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="container-fluid my-1">
        <h3 class="text-center mb-3">Post categories</h3>
          <div class="row mt-5 mr-0">
            <div class="owl-carousel owl-theme">
              @foreach ($educations as $education)
              <div class="item mb-4">
                <div class="card shadow-sm mb-none">
                  <img src="https://source.unsplash.com/500x500?{{ $education->institution }}" alt="" class="card-img-top">
                  <div class="card-body mb-none">
                      <a a class="text-decoration-none text-dark text-center">
                      <h4>{{$education->institution}}</h4>
                      </a>
                      <p>{{ $education->yearin }} - {{ $education->yearout }}</p>
                    </div>
                  </div>
              </div>
              @endforeach
          </div>
        </div>
      </div> --}}
  </div>
</div>



 