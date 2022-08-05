@if(Session::has('shortUrl'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('shortUrl') }}
    </div>
@endif