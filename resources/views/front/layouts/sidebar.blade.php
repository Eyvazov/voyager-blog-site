<div class="col-md-4 col-sm-12">
    <div class="sidebar">
        <div class="widget about-widget">
            <h3 class="widget-title">About Me</h3>
            <div class="author-image">
                <img class="img-responsive" src="https://via.placeholder.com/251x251" alt="" height="107" width="107">
            </div>
            <div class="author-info">
                <h3 class="author-name">Hi I'm <span>Leila Smith</span></h3>
                <p class="author-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maxi mus orci ac condiorci mentum efficitur suspendi potentio fuscestas ut eleifend.</p>
            </div>
        </div>
        <div class="widget categories-widget">
            <h3 class="widget-title">{{__('Kateqoriyalar')}}</h3>
            @foreach($categories as $category)
                <div class="category-item">
                    <a href="{{$category['slug']}}">{{$category['name']}}</a>
                    <span class="count">(4)</span>
                </div>
            @endforeach
        </div>
        <div class="widget recent-posts-widget">
            <h3 class="widget-title">Recent Posts</h3>
            <div class="recent-post-item">
                <div class="recent-post-widget-thumbnail">
                    <a href="single.html">
                        <img class="img-responsive" src="https://via.placeholder.com/1170x780" alt="" >
                    </a>
                </div>
                <div class="recent-post-widget-content">
                    <h4 class="recent-post-widget-title">
                        <a href="single.html">How To Dress in Red Style</a>
                    </h4>
                    <div class="recent-post-widget-info">
										     <span class="author">
											     <a href="author.html">Leila Smith</a>
										     </span>
                        <span class="date">
											     <a href="archive.html">October 21, 2020</a>
										     </span>
                    </div>
                </div>
            </div>
            <div class="recent-post-item">
                <div class="recent-post-widget-thumbnail">
                    <a href="single.html">
                        <img class="img-responsive" src="https://via.placeholder.com/1170x780" alt="" >
                    </a>
                </div>
                <div class="recent-post-widget-content">
                    <h4 class="recent-post-widget-title">
                        <a href="single.html">Awesome Breathtaking Places</a>
                    </h4>
                    <div class="recent-post-widget-info">
										     <span class="author">
											     <a href="author.html">Leila Smith</a>
										     </span>
                        <span class="date">
											     <a href="archive.html">October 21, 2020</a>
										     </span>
                    </div>
                </div>
            </div>
            <div class="recent-post-item">
                <div class="recent-post-widget-thumbnail">
                    <a href="single.html">
                        <img class="img-responsive" src="https://via.placeholder.com/1170x780" alt="" >
                    </a>
                </div>
                <div class="recent-post-widget-content">
                    <h4 class="recent-post-widget-title">
                        <a href="single.html">5 Easy Party Dessert Recipes</a>
                    </h4>
                    <div class="recent-post-widget-info">
										   <span class="author">
											   <a href="author.html">Leila Smith</a>
										   </span>
                        <span class="date">
											   <a href="archive.html">October 21, 2020</a>
										   </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget newsletter">
            <div class="widget widget_mc4wp_form_widget">
                <h3 class="widget-title">Subscribe</h3>
                <form class="mc4wp-form mc4wp-form-101" method="post" action="#">
                    <div class="mc4wp-form-fields">
                        <label>Fill your email below to subscribe to my newsletter</label>
                        <input type="email" name="EMAIL" placeholder="Your email address" required="">
                        <input type="submit" value="Subscribe">
                    </div>
                </form>
            </div>
        </div>
        <div class="widget tags-widget">
            <h3 class="widget-title">Tags</h3>
            <ul class="tags-list list-unstyled">
                <li><a href="tag.html">Culture</a></li>
                <li><a href="tag.html">Explortion</a></li>
                <li><a href="tag.html">Fashion</a></li>
                <li><a href="tag.html">Food</a></li>
                <li><a href="tag.html">Lifestyle</a></li>
                <li><a href="tag.html">Mode</a></li>
                <li><a href="tag.html">Self-confidence</a></li>
                <li><a href="tag.html">Stories</a></li>
                <li><a href="tag.html">Travel</a></li>
                <li><a href="tag.html">Trends</a></li>
                <li><a href="tag.html">Trip</a></li>
            </ul>
        </div>
        <div class="widget follow-widget">
            <h3 class="widget-title">Follow Us</h3>
            <ul class="social-icons-menu list-unstyled">
                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</div>
