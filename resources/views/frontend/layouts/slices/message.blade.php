<div class="btn-group-vertical" id="contact_group">
    <a href="{{ route('front.agenda') }}" class="btn btn-lg bg2 text-white">
        <i class="fa fa-calendar-alt fa-lg"></i>
    </a>
    <a href="{{ $settings->rss->whatsapp->url }}" class="btn btn-lg bg2 text-white">
        <i class="{{$settings->rss->whatsapp->icon}} fa-lg"></i>
    </a>

</div>