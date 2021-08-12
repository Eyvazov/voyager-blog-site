@extends('front.layouts.master')
@section('content')


    <!-- ========== Start Main Content ========== -->

    <section class="main-content">

        <!-- ========== Start Random Posts ========== -->
        @include('front.layouts.slider')
        <!-- ========== End Random Posts ========== -->

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            @foreach($posts as $post)
                                <div class="post-item">
                                    <div class="post-thumbnail">
                                        <a href="single.html">
                                            <img class="img-responsive" src="{{Voyager::image($post->image)}}" alt="" >
                                        </a>
                                    </div>
                                    <div class="post-category">
                                        <ul class="post-categories">
                                            <li>
                                                <a href="category.html">{{$post->category->name}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-header">
                                        <h3 class="post-title">
                                            <a href="single.html">{{$post->title}}</a>
                                        </h3>
                                        <span class="post-date">
                                            <i class="fa fa-calendar"></i>
											<a href="archive.html">{{$post->created_at->diffForHumans()}}</a>
                                        </span>
                                        <span class="post-comments">
                                            <i class="fa fa-comments-o"></i>
											<a href="single.html#respond" class="comment-url">3</a>
                                        </span>
                                    </div>
                                    <div class="post-content">
                                        <p>{{$post->excerpt}}</p>
                                    </div>
                                    <div class="post-footer">
                                        <div class="author-info pull-left">
                                            <span class="author-avatar">
                                                <img class="img-responsive" src="{{Voyager::image($post->authorId->avatar)}}" alt="" >
                                            </span>
                                            <span class="author-name">
                                                <a href="author.html">{{$post->authorId->name}}</a>
                                            </span>
                                        </div>
                                        <div class="read-more pull-right">
                                            <a href="single.html">{{__('Davamını Oxu')}}<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="pagination-numbers">
                        <span aria-current="page" class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="page-numbers" href="#">3</a>
                        <a class="page-numbers" href="#">4</a>
                        <a class="next page-numbers" href="#">
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                </div>
                @include('front.layouts.sidebar')
            </div>
            @include('front.layouts.categories')
        </div>
    </section>

    <!-- ========== End Main Content ========== -->

@endsection
