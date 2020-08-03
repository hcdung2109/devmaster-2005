@extends('shop.layouts.main')
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="#" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span class="navigation_page">Blog</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- row -->
            <div class="row">
                <!-- Left colunm -->
                <div class="column col-xs-12 col-sm-3" id="left_column">
                    <!-- Blog category -->
                    <div class="block left-module">
                        <p class="title_block">Blog Categories</p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered layered-category">
                                <div class="layered-content">
                                    <ul class="tree-menu">
                                        <li><span></span><a href="#">News</a></li>
                                        <li><span></span><a href="#">About Beauty</a></li>
                                        <li><span></span><a href="#">Baby &amp; Mom</a></li>
                                        <li><span></span><a href="#">Diet &amp; Fitness</a></li>
                                        <li><span></span><a href="#">Promotions</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- ./blog category  -->
                    <!-- Popular Posts -->
                    <div class="block left-module">
                        <p class="title_block">Popular Posts</p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered">
                                <div class="layered-content">
                                    <ul class="blog-list-sidebar clearfix">
                                        <li>
                                            <div class="post-thumb">
                                                <a href="#"><img src="/shop/data/blog-thumb1.jpg" alt="Blog"></a>
                                            </div>
                                            <div class="post-info">
                                                <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                                <div class="post-meta">
                                                    <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                    <span class="comment-count">
                                                    <i class="fa fa-comment-o"></i> 3
                                                </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-thumb">
                                                <a href="#"><img src="/shop/data/blog-thumb2.jpg" alt="Blog"></a>
                                            </div>
                                            <div class="post-info">
                                                <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                                <div class="post-meta">
                                                    <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                    <span class="comment-count">
                                                    <i class="fa fa-comment-o"></i> 3
                                                </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-thumb">
                                                <a href="#"><img src="/shop/data/blog-thumb3.jpg" alt="Blog"></a>
                                            </div>
                                            <div class="post-info">
                                                <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                                <div class="post-meta">
                                                    <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                    <span class="comment-count">
                                                    <i class="fa fa-comment-o"></i> 3
                                                </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- ./Popular Posts -->
                    <!-- Banner -->
                    <div class="block left-module">
                        <div class="banner-opacity">
                            <a href="#"><img src="/shop/data/slide-left.jpg" alt="ads-banner"></a>
                        </div>
                    </div>
                    <!-- ./Banner -->
                    <!-- Recent Comments -->
                    <div class="block left-module">
                        <p class="title_block">Recent Comments</p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered">
                                <div class="layered-content">
                                    <ul class="recent-comment-list">
                                        <li>
                                            <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <div class="comment">
                                                "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..."
                                            </div>
                                            <div class="author">Posted by <a href="#">Admin</a></div>
                                        </li>
                                        <li>
                                            <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <div class="comment">
                                                "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..."
                                            </div>
                                            <div class="author">Posted by <a href="#">Admin</a></div>
                                        </li>
                                        <li>
                                            <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <div class="comment">
                                                "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..."
                                            </div>
                                            <div class="author">Posted by <a href="#">Admin</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- ./Recent Comments -->
                    <!-- tags -->
                    <div class="block left-module">
                        <p class="title_block">TAGS</p>
                        <div class="block_content">
                            <div class="tags">
                                <a href="#"><span class="level1">actual</span></a>
                                <a href="#"><span class="level2">adorable</span></a>
                                <a href="#"><span class="level3">change</span></a>
                                <a href="#"><span class="level4">consider</span></a>
                                <a href="#"><span class="level3">phenomenon</span></a>
                                <a href="#"><span class="level4">span</span></a>
                                <a href="#"><span class="level1">spanegs</span></a>
                                <a href="#"><span class="level5">spanegs</span></a>
                                <a href="#"><span class="level1">actual</span></a>
                                <a href="#"><span class="level2">adorable</span></a>
                                <a href="#"><span class="level3">change</span></a>
                                <a href="#"><span class="level4">consider</span></a>
                                <a href="#"><span class="level2">gives</span></a>
                                <a href="#"><span class="level3">change</span></a>
                                <a href="#"><span class="level2">gives</span></a>
                                <a href="#"><span class="level1">good</span></a>
                                <a href="#"><span class="level3">phenomenon</span></a>
                                <a href="#"><span class="level4">span</span></a>
                                <a href="#"><span class="level1">spanegs</span></a>
                                <a href="#"><span class="level5">spanegs</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- ./tags -->
                    <!-- Banner -->
                    <div class="block left-module">
                        <div class="banner-opacity">
                            <a href="#"><img src="/shop/data/slide-left2.jpg" alt="ads-banner"></a>
                        </div>
                    </div>
                    <!-- ./Banner -->
                </div>
                <!-- ./left colunm -->
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-9" id="center_column">
                    <ul class="blog-posts">
                        @foreach($data as $item)
                            <li class="post-item">
                            <article class="entry">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="entry-thumb image-hover2">
                                            <a href="{{ route('shop.detail-article', ['slug' => $item->slug]) }}">
                                                <img src="{{ asset($item->image) }}" alt="Blog">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="entry-ci">
                                            <h3 class="entry-title"><a href="{{ route('shop.detail-article', ['slug' => $item->slug]) }}">{{ $item->title }}</a></h3>
                                            <div class="entry-meta-data">
                                                <span class="date"><i class="fa fa-calendar"></i> {{ $item->created_at }}</span>
                                            </div>
                                            <div class="entry-excerpt">
                                                {!!  $item->summary !!}
                                            </div>
                                            <div class="entry-more">
                                                <a href="{{ route('shop.detail-article', ['slug' => $item->slug]) }}">Chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        @endforeach
                    </ul>
                    <div class="sortPagiBar clearfix">
                        <div class="bottom-pagination">
                            <nav>
                                <ul class="pagination">
                                    {{ $data->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@endsection
