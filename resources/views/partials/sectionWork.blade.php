<div data-aos="zoom-out-up">
    <section>
        <div class="content">
          <h2>PROJECTS</h2>
          <h2>PROJECTS</h2>
        </div>
    </section>
    <p class="text-center text-white" style="padding-top:none ">(Include this site)</p>
</div>
<div class="container">
    <div class="owl-carousel owl-theme ">
        @foreach($project as $projects)
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $projects->name}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $projects->name }}</h5>
            <p class="card-text">{{ $projects->desc }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
