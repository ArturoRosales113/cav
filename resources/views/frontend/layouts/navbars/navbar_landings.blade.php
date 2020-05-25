<div class="fixed-top" id="rsvp-navbar">

 <!-- barra superior -->
<div class="row justify-content-end align-items-center top-bar">
  <div class="container text-right">

    @foreach ($settings->rss as $r)
      @if($r->url != '')
      <a class="btn btn-link text-white" href="{{ $r->url }}" target="_blank">
        <i class="{{ $r->icon }}"></i>
      </a>    
      @endif
    @endforeach

  </div>
 </div> 



</div>
