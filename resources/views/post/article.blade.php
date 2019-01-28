  <div class="blog-post">
            <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
            <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}  <h2 href="#">By User Id = {{$post->id}}</h2></p>

           {{$post->body}}

          </div><!-- /.blog-post -->
