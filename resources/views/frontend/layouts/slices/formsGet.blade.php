<form class="form" action="{{ route('front.contacto') }}" id="contacto-form-get" method="GET">
    <input type="hidden" name="family" value="{{ $fam->name }}">
</form>

<form class="form" action="{{ route('front.nosotros') }}" id="nosotros-form-get" method="GET">
    <input type="hidden" name="family" value="{{ $fam->name }}">
</form>

<form class="form" action="{{ route('front.distribuidores') }}" id="distribuidores-form-get" method="GET">
    <input type="hidden" name="family" value="{{ $fam->name }}">
</form>

<form class="form-navbar " action="{{ route('front.certificados') }}" id="certificados-form-get" method="GET">
    <input type="hidden" name="family" value="{{ $fam->name }}">
</form>