
<div class="card">
    <div class="card-image">
        <figure class="image is-4by3">
        <a href={{asset('storage/images/'. $file->name . '.' . $file->extension)}}>
            <img src="{{asset('storage/images/'. $file->name . '.' . $file->extension)}}" alt={{$file->name}}>
        </a>
        </figure>
    </div>
    <div class="card-content">
        <div class="media">
            <div class="media-content">
                <p class="title is-4">{{$file->name}}</p>
                <p class="subtitle is-6">@username</p>
            </div>
        </div>

        <div class="content">
            <span>Size: <strong>{{$file->size}}</strong></span>
            <span>Extension: <strong>{{$file->extension}}</strong></span>
            <br>
            <time datetime={{$file->created_at}}>{{$file->created_at}}</time>
        </div>
    </div>
</div>

