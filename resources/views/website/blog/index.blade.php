@extends('layouts.website')
@section('title','blog home')
@section('content')
<section id="about">
   <div class="container">
       <div class="row">
           <div class="about-heading text-center">
               <h2>Blog Grid View with Sidebar</h2>
               <p><a href="index.html">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>Blog Grid View with Sidebar</span></p>
           </div>
       </div>
   </div>
</section>
<!-- About Banner End -->

<!-- Blog-item start -->
<section id="product-grid-sidebar">
   <div class="container">
       <div class="row">
           <div class="col-md-4 blog-side-categ">
             <form>
              <div class="form-group">
                  <input type="search" class="form-control" placeholder="Type Your Keywords">
              </div>
              </form>
               <div class="single category">
                    <h3 class="side-title">Categories</h3>
                    <ul class="list-unstyled">
                        <li><a href="" title="">Fashion & Beauty<span class="pull-right">13</span></a></li>
                        <li><a href="" title="">Electronics & Multimedia<span class="pull-right">23</span></a></li>
                        <li><a href="" title="">Sports & Game<span class="pull-right">33</span></a></li>
                        <li><a href="" title="">Furniture & Decoration<span class="pull-right">43</span></a></li>
                        <li><a href="" title="">Health & Food<span class="pull-right">53</span></a></li>
                        <li><a href="" title="">Fitness & Gym<span class="pull-right">63</span></a></li>
                        <li><a href="" title="">others<span class="pull-right">73</span></a></li>
                    </ul>
               </div>

               <div class="popular">
                   <div class="card2">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">popular</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Recent</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">latest</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="row blog-popular-main">
                                    <div class="col-md-4">
                                        <div class="popular-img">
                                            <img src="{{asset('contents/website')}}/images/popular1.jpg" alt="popular1" class="img-responsive">
                                            <div class="popular-overlay">
                                                <a href="blog-details.html"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 popular-intro">
                                       <h3>Best E-commerce Ever , You’ll be Apriciate</h3>
                                       <span><i class="fa fa-thumbs-o-up"></i> 2.5K Likes </span><span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                    </div>
                                </div>
                                <div class="row blog-popular-main">
                                    <div class="col-md-4">
                                        <div class="popular-img">
                                            <img src="{{asset('contents/website')}}/images/popular2.jpg" alt="popular1" class="img-responsive">
                                            <div class="popular-overlay">
                                                <a href="blog-details.html"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 popular-intro">
                                       <h3>E-feri is the qualityful E-commerce</h3>
                                       <span><i class="fa fa-thumbs-o-up"></i> 2.5K Likes </span><span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                    </div>
                                </div>
                                <div class="row blog-popular-main">
                                    <div class="col-md-4">
                                        <div class="popular-img">
                                            <img src="{{asset('contents/website')}}/images/popular3.jpg" alt="popular1" class="img-responsive">
                                            <div class="popular-overlay">
                                                <a href="blog-details.html"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 popular-intro">
                                       <h3>You’ll never be Demotivated with Our Work</h3>
                                       <span><i class="fa fa-thumbs-o-up"></i> 2.5K Likes </span><span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="row blog-popular-main">
                                    <div class="col-md-4">
                                        <div class="popular-img">
                                            <img src="{{asset('contents/website')}}/images/popular3.jpg" alt="popular1" class="img-responsive">
                                            <div class="popular-overlay">
                                                <a href="blog-details.html"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 popular-intro">
                                       <h3>E-feri is the qualityful E-commerce</h3>
                                       <span><i class="fa fa-thumbs-o-up"></i> 2.5K Likes </span><span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                    </div>
                                </div>
                                <div class="row blog-popular-main">
                                    <div class="col-md-4">
                                        <div class="popular-img">
                                            <img src="{{asset('contents/website')}}/images/popular2.jpg" alt="popular1" class="img-responsive">
                                            <div class="popular-overlay">
                                                <a href="blog-details.html"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 popular-intro">
                                       <h3>You’ll never be Demotivated with Our Work</h3>
                                       <span><i class="fa fa-thumbs-o-up"></i> 2.5K Likes </span><span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                    </div>
                                </div>
                                <div class="row blog-popular-main">
                                    <div class="col-md-4">
                                        <div class="popular-img">
                                            <img src="{{asset('contents/website')}}/images/popular1.jpg" alt="popular1" class="img-responsive">
                                            <div class="popular-overlay">
                                                <a href="blog-details.html"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 popular-intro">
                                       <h3>Best E-commerce Ever , You’ll be Apriciate</h3>
                                       <span><i class="fa fa-thumbs-o-up"></i> 2.5K Likes </span><span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <div class="row blog-popular-main">
                                    <div class="col-md-4">
                                        <div class="popular-img">
                                            <img src="{{asset('contents/website')}}/images/popular2.jpg" alt="popular1" class="img-responsive">
                                            <div class="popular-overlay">
                                                <a href="blog-details.html"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 popular-intro">
                                       <h3>You’ll never be Demotivated with Our Work</h3>
                                       <span><i class="fa fa-thumbs-o-up"></i> 2.5K Likes </span><span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                    </div>
                                </div>
                                <div class="row blog-popular-main">
                                    <div class="col-md-4">
                                        <div class="popular-img">
                                            <img src="{{asset('contents/website')}}/images/popular3.jpg" alt="popular1" class="img-responsive">
                                            <div class="popular-overlay">
                                                <a href="blog-details.html"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 popular-intro">
                                       <h3>E-Feri is the qualityful E-commerce</h3>
                                       <span><i class="fa fa-thumbs-o-up"></i> 2.5K Likes </span><span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                    </div>
                                </div>
                                <div class="row blog-popular-main">
                                    <div class="col-md-4">
                                        <div class="popular-img">
                                            <img src="{{asset('contents/website')}}/images/popular1.jpg" alt="popular1" class="img-responsive">
                                            <div class="popular-overlay">
                                                <a href="blog-details.html"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 popular-intro">
                                       <h3>Best E-commerce Ever , You’ll be Apriciate</h3>
                                       <span><i class="fa fa-thumbs-o-up"></i> 2.5K Likes </span><span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            <div class="blog-vid">
                <div class="blog-video">
                    <img src="{{asset('contents/website')}}/images/blog-video.jpg" alt="blog-vid" class="img-responsive">
                    <div class="blog-video-overly">
                        <a class="bla-2" href="https://www.youtube.com/watch?v=lSbC5ojuh7Q">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tags">
               <h3>Tags</h3>
                <p> <a href="#">fashion</a>
                    <a href="#">Furniture</a>
                    <a href="#">Sports</a>
                    <a href="#">Health</a>
                </p>
                <p>
                    <a href="#">Food</a>
                    <a href="#">electronics</a>
                    <a href="#">fitness</a>
                    <a href="#">beauty</a>
                </p>
            </div>
           </div>
           <div class="col-md-8">
              <div class="pro-grid-sidebar blog-grid-sidebar col-md-12">
                   <div class="col-md-2 col-sm-4">
                       <div class="grid-type">
                            <div class="btn-group">
                               <a href="blog-grid-view.html" id="grid" class="btn btn-default btn-sm"><span
                                class="glyphicon glyphicon-th"></span></a>
                                <a href="blog-grid-list-view.html" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                                </span></a>
                            </div>
                        </div>
                   </div>
                   <div class="col-md-4 col-sm-8 pl0 pr0">
                       <div class="sort text-right">
                           <label>Sort by</label>
                           <select>
                               <option value="Name">Name</option>
                               <option value="brand">brand</option>
                               <option value="price">price</option>
                           </select>
                           <label>Showing</label>
                           <select>
                               <option value="Name">12</option>
                               <option value="brand">18</option>
                               <option value="price">24</option>
                           </select>
                       </div>
                   </div>
                   <div class="col-md-6 col-sm-12">
                       <div class="pages text-right">
                           <ul class="pagination">
                              <li class=""><a href="#">Pages:</a></li>
                              <li class="active"><a href="#">01 <span class="sr-only">(current)</span></a></li>
                              <li><a href="#">02</a></li>
                              <li><a href="#">03</a></li>
                              <li><a href="#">04</a></li>
                              <li class="of"><a href="#">of</a></li>
                              <li><a href="#">50</a></li>
                              <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                       </div>
                   </div>
               </div>

               <div class="row blog-side-bar">
                   <div class="col-md-6 col-sm-6">
                       <div class="blog-item">
                           <div class="blog-img">
                               <img src="{{asset('contents/website')}}/images/blog2.jpg" alt="blog-img" class="img-responsive">
                                   <div class="overlay3">
                                        <h4><i class="fa fa-calendar"></i> 26 October 2017</h4>
                                        <a href="blog-details.html"><i class="fa fa-link"></i> </a>
                                        <p><span><i class="fa fa-user"></i> By: Admin </span> <span><i class="fa fa-user"></i>  2.5k Likes </span> <span><i class="fa fa-comment"></i> 1.5k comments </span><p>
                                   </div>
                               </div>
                           <div class="blog-details">
                               <h3>I’m satisfy with their services</h3>
                               <p>Lorem Ipsum is simply dummy text of the printing andg industry. Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                               <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i> </a>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6 col-sm-6">
                       <div class="blog-item">
                           <div class="blog-item">
                               <div class="blog-img">
                                   <img src="{{asset('contents/website')}}/images/blog3.jpg" alt="blog-img" class="img-responsive">
                                       <div class="overlay3">
                                            <h4><i class="fa fa-calendar"></i> 26 October 2017</h4>
                                            <a href="blog-details.html"><i class="fa fa-link"></i> </a>
                                            <p><span><i class="fa fa-user"></i> By: Admin </span> <span><i class="fa fa-user"></i>  2.5k Likes </span> <span><i class="fa fa-comment"></i> 1.5k comments </span><p>
                                       </div>
                                   </div>
                               <div class="blog-details">
                                   <h3>I’ll never forget their hospitality</h3>
                                   <p>Lorem Ipsum is simply dummy text of the printing andg industry. Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                   <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i> </a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6 col-sm-6">
                       <div class="blog-item">
                           <div class="blog-img">
                               <img src="{{asset('contents/website')}}/images/blog5.jpg" alt="blog-img" class="img-responsive">
                                   <div class="overlay3">
                                        <h4><i class="fa fa-calendar"></i> 26 October 2017</h4>
                                        <a href="blog-details.html"><i class="fa fa-link"></i> </a>
                                        <p><span><i class="fa fa-user"></i> By: Admin </span> <span><i class="fa fa-user"></i>  2.5k Likes </span> <span><i class="fa fa-comment"></i> 1.5k comments </span><p>
                                   </div>
                               </div>
                           <div class="blog-details">
                               <h3>I’m satisfy with their services</h3>
                               <p>Lorem Ipsum is simply dummy text of the printing andg industry. Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                               <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i> </a>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6 col-sm-6">
                       <div class="blog-item">
                           <div class="blog-item">
                               <div class="blog-img">
                                   <img src="{{asset('contents/website')}}/images/blog6.jpg" alt="blog-img" class="img-responsive">
                                       <div class="overlay3">
                                            <h4><i class="fa fa-calendar"></i> 26 October 2017</h4>
                                            <a href="blog-details.html"><i class="fa fa-link"></i> </a>
                                            <p><span><i class="fa fa-user"></i> By: Admin </span> <span><i class="fa fa-user"></i>  2.5k Likes </span> <span><i class="fa fa-comment"></i> 1.5k comments </span><p>
                                       </div>
                                   </div>
                               <div class="blog-details">
                                   <h3>I’ll never forget their hospitality</h3>
                                   <p>Lorem Ipsum is simply dummy text of the printing andg industry. Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                   <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i> </a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6 col-sm-6">
                       <div class="blog-item">
                           <div class="blog-img">
                               <img src="{{asset('contents/website')}}/images/blog8.jpg" alt="blog-img" class="img-responsive">
                                   <div class="overlay3">
                                        <h4><i class="fa fa-calendar"></i> 26 October 2017</h4>
                                        <a href="blog-details.html"><i class="fa fa-link"></i> </a>
                                        <p><span><i class="fa fa-user"></i> By: Admin </span> <span><i class="fa fa-user"></i>  2.5k Likes </span> <span><i class="fa fa-comment"></i> 1.5k comments </span><p>
                                   </div>
                               </div>
                           <div class="blog-details">
                               <h3>I’m satisfy with their services</h3>
                               <p>Lorem Ipsum is simply dummy text of the printing andg industry. Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                               <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i> </a>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6 col-sm-6">
                       <div class="blog-item">
                           <div class="blog-item">
                               <div class="blog-img">
                                   <img src="{{asset('contents/website')}}/images/blog9.jpg" alt="blog-img" class="img-responsive">
                                       <div class="overlay3">
                                            <h4><i class="fa fa-calendar"></i> 26 October 2017</h4>
                                            <a href="blog-details.html"><i class="fa fa-link"></i> </a>
                                            <p><span><i class="fa fa-user"></i> By: Admin </span> <span><i class="fa fa-user"></i>  2.5k Likes </span> <span><i class="fa fa-comment"></i> 1.5k comments </span><p>
                                       </div>
                                   </div>
                               <div class="blog-details">
                                   <h3>I’ll never forget their hospitality</h3>
                                   <p>Lorem Ipsum is simply dummy text of the printing andg industry. Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                   <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i> </a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="clearfix"></div>
               <div class="pages-bottom">
                   <div class="pages pages2 text-center">
                       <ul class="pagination">
                          <li class=""><a href="#">Pages:</a></li>
                          <li class="active"><a href="#">01 <span class="sr-only">(current)</span></a></li>
                          <li><a href="#">02</a></li>
                          <li><a href="#">03</a></li>
                          <li><a href="#">04</a></li>
                          <li class="of"><a href="#">of</a></li>
                          <li><a href="#">50</a></li>
                          <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
@endsection
