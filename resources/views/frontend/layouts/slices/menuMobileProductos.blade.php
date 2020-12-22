<div class="nav flex-column nav-pills" id="v-menu-tab" role="tablist" aria-orientation="vertical">
    @foreach ($fam->categories as $c)
    <a class="nav-link py-1 text-truncate" href="">
        <img src="{{ $c->icon_path }}" height="20px" class="d-inline-block" alt="">
        &nbsp;
        <small class="d-inline-block text-dark text-uppercase">{{ $c->display_name }}</small>
        <span class="d-inline-block text-dark float-right">></span>
    </a>
    @endforeach
</div>