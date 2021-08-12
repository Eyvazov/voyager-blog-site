<div class="category-owl">
    @if($categories)
        @foreach($categories as $category)
            <div class="category-item">
                <div class="category-bg" style="background-image: url('{{Voyager::image($category['photo']) ? Voyager::image($category['photo']) : Voyager::image('categories/images.png')}}');"></div>
                <div class="category-info">
                    <a href="{{$category->slug}}">{{$category['name']}}</a>
                    <span class="count">6 Posts</span>
                </div>
                <div class="overlay">
                    <a href="{{$category->slug}}"><i class="fa fa-plus"></i></a>
                </div>
            </div>
        @endforeach
    @endif
</div>
