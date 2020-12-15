<div class="btn-group-vertical" id="contact_group">
    <button type="button" class="btn bg1 text-white" data-toggle="modal" data-target="#subscriberModal"> 
        <i class="fa fa-user"></i>  
</button>
    <a href="{{ route('front.contacto') }}" onclick="event.preventDefault();document.getElementById('contacto-form-get').submit();" class="btn bg1 text-white">
        <i class="fas fa-phone-volume"></i>
    </a>
    <a href="{{ route('front.contacto') }}" onclick="event.preventDefault();document.getElementById('contacto-form-get').submit();" class="btn bg1 text-white">
        <i class="fas fa-map-marker-alt"></i>
    </a>
    <a href="{{ route('welcome') }}" class="btn bg1 text-white">
        <i class="fas fa-home"></i>
    </a>
    <a href="mailto:contacto@puertasveracruz.com" class="btn bg1 text-white">
        <i class="fas fa-envelope"></i>
    </a>
</div>

