
@foreach($errors->all() as $error)
    <div class="notification error closeable">
        <p><span>Error!</span> <p>{{ $error }}</p>.</p>
        <a class="close" href="#"></a>
    </div>
@endforeach
