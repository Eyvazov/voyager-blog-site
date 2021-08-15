<div class="random-posts">
    @foreach($posts as $post)
        <div class="item-box">
            <div class="overlay">
                <div class="post-thumbnail">
                    <a href="single.html">
                        <img class="img-responsive" src="{{Voyager::image($post->image) ? Voyager::image($post->image) : Voyager::image('posts/images.png')}}" alt="{{$post->title}}" >
                    </a>
                </div>
                <div class="item-box-content">
                    <div class="categories">
                        <div class="post-category">
                            <ul class="post-categories">
                                <li>
                                    <a href="category.html">{{$post->category->name}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="post-title">
                        <a href="single.html">{{$post->title}}</a>
                    </h3>
                    <div class="author-info">
                                <span class="author-avatar">
                                    <img class="img-responsive" src="{{Voyager::image($post->authorId->avatar)}}" alt="{{$post->title}}" >
                                </span>
                        <span class="author-name">
									<a href="#">{{$post->authorId->name}}</a>
                                </span>
                    </div>
                    <span class="post-date">
                                <i class="fa fa-calendar"></i>
								<a href="#">{{$post->created_at->diffForHumans()}}</a>
                            </span>
                    <span class="post-comments">
                                <i class="fa fa-comments-o"></i>
								<a href="single.html#respond" class="comment-url">2</a>
                            </span>
                </div>
            </div>
        </div>
    @endforeach
</div>
