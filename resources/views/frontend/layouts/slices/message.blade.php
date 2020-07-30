<div class="btn-group-vertical" id="contact_group">
    <button type="button" class="btn bg1 text-white" data-toggle="modal" data-target="#exampleModalCenter"> 
        <i class="fa fa-user"></i>  
</button>
    <a href="{{ route('front.industrial.contacto') }}" class="btn bg1 text-white">
        <i class="fas fa-phone-volume"></i>
    </a>
    <a href="{{ route('front.industrial.contacto') }}" class="btn bg1 text-white">
        <i class="fas fa-map-marker-alt"></i>
    </a>
    <a href="{{ route('front.industrial.index') }}" class="btn bg1 text-white">
        <i class="fas fa-home"></i>
    </a>
    <a href="mailto:contacto@puertasveracruz.com" class="btn bg1 text-white">
        <i class="fas fa-envelope"></i>
    </a>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" class="form">
              
          </form>
        </div>
      </div>
    </div>
</div>