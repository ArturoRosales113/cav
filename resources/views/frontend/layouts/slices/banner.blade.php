<div class="row">
  <div class="col-12 p-0">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              @foreach ($banners as $b)
              <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                  <a href="{{ $b->url }}">
                      <img class="d-block w-100" src="{{ asset($b->img_path) }}" alt="First slide">
                  </a>
              </div>
              @endforeach
          </div>
      </div>
  </div>
</div>

<div class="row justify-content-center color1 py-4">
  @foreach ($banners as $b)
  <a data-target="#carouselExampleSlidesOnly" data-slide-to="{{ $loop->index }}" class="btn btn-sm color3 {{ $loop->first ? 'active' : '' }}">
      <i class="fas fa-circle fa-lg"></i>
  </a>
  @endforeach
</div>