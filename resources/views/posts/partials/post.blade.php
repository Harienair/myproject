<h3><a href="{{ route('posts.show',['post'=> $post->id])  }}">{{ $post->title }}</a></h3>
<div>
    <a href="{{ route('posts.edit',['post'=> $post->id])  }}" class="btn btn-primary btn-block">Edit</a>
    <form class="d-inline" action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete" class="btn btn-primary btn-block">

    </form>
</div>
