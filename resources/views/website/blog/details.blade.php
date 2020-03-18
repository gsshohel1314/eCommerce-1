@extends('layouts.website')
@section('title','bolg details')
@section('content')
   <section id="about">
       <div class="container">
           <div class="row">
               <div class="about-heading text-center">
                   <h2>Blog Details</h2>
                   <p><a href="index.html">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>Blog Details</span></p>
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
                                           <h3>E-feri is the qualityful E-commerce</h3>
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
                   <div class="row blog-side-bar blog-grid-list blog-details-page">
                       <div class="col-md-12 col-sm-12">
                           <div class="blog-item">
                               <div class="blog-img">
                                   <img src="{{asset('contents/website')}}/images/blog-details-img.jpg" alt="blog-img" class="img-responsive">
                                   </div>
                                   <div class="blog-details">
                                   <h3>Finding New Buildings in the Dust of the Old Never Seen Before</h3>
                                   <p><span><i class="fa fa-user"></i> By: Admin </span>
                                      <b><span><i class="fa fa-user"></i>  2.5k Likes </span> <span><i class="fa fa-comment"></i> 1.5k comments </span></b>
                                   </p>
                                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsumas been the duy's stadard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrabled it to make a typeen book. It has survived not only five centuries, but also the leap into electronicting. Lorem Ipsum is simply dummy xt of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsumas been the duy's stadard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrabled it to make a typeen book. It has survived not only five centuries, but also the leap into electroing. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsumas been the duy's stadard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrabled it to make a typeen book. It has survived not only five centuries, but also the leap into electronicting. Lorem </p>
                                   <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsumas been the duy's stadard dummy text ever since the 1500s, when an unknown printer took a galley.</h4>
                                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsumas been the duy's stadard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrabled it to make a typeen book. It has survived not only five centuries, but also the leap into electronicting. Lorem Ipsum is simply dummyext of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsumas been the duy's stadard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrabled it to make a typeen book. It has survived not only five centuries, but also the leap into electroing.</p>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-12 post-comments">
                               <div class="comments-heading">
                                   <h3>14 comments</h3>
                               </div>
                               <div class="all-comments">
                                   <div class="col-md-2 pl0">
                                       <img src="{{asset('contents/website')}}/images/comment-img1.jpg" alt="coment-img1" class="img-responsive">
                                   </div>
                                   <div class="com-md-10">
                                       <h3>mahadi tahsan <span>Posted on: 26 October 2017</span></h3>
                                       <p>hen after before symphony book.Lorem Ipsum has beenry's staardummy text ever since the.Lom Ipsum is simply dummy text of thenting  and we typng industry.</p>
                                       <a href="#"><i class="fa fa-reply-all"></i> reply</a>
                                   </div>
                               </div>
                               <div class="all-comments">
                                   <div class="col-md-2 pl0 col-md-offset-2">
                                       <img src="{{asset('contents/website')}}/images/comment-img2.jpg" alt="coment-img1" class="img-responsive">
                                   </div>
                                   <div class="com-md-8">
                                       <h3>Abs Uzzal <span>Posted on: 26 October 2017</span></h3>
                                       <p>hen after before symphony book.Lorem Ipsum has beenry's staardummy text ever since the.Lom Ipsum is simply dummy text of thenting  and we typng industry.</p>
                                       <a href="#"><i class="fa fa-reply-all"></i> reply</a>
                                   </div>
                               </div>
                               <div class="all-comments br-top">
                                   <div class="col-md-2 pl0">
                                       <img src="{{asset('contents/website')}}/images/comment-img3.jpg" alt="coment-img1" class="img-responsive">
                                   </div>
                                   <div class="com-md-10">
                                       <h3>Shahin Alom <span>Posted on: 26 October 2017</span></h3>
                                       <p>hen after before symphony book.Lorem Ipsum has beenry's staardummy text ever since the.Lom Ipsum is simply dummy text of thenting  and we typng industry.</p>
                                       <a href="#"><i class="fa fa-reply-all"></i> reply</a>
                                   </div>
                               </div>
                           </div>
                           <div class="clearfix"></div>
                           <div class="reply-comments">
                               <h3>Leave a reply</h3>
                               <form>
                               <div class="reply-form">
                                   <div class="col-md-6">
                                       <div class="form-group">
                                            <input type="text" class="form-control" id="name2" name="name" placeholder="Name" required>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                       <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Email" required>
                                        </div>
                                   </div>
                                   <div class="col-md-12">
                                       <div class="form-group">
                                            <textarea class="form-control" id="message" placeholder="Your Message" maxlength="140" rows="7"></textarea>
                                        </div>
                                   </div>
                                   <div class="col-md-12">
                                       <button type="submit" class="btn btn-primary">submit</button>
                                   </div>
                               </div>
                               </form>
                           </div>
                       <div class="clearfix"></div>
                   </div>
                </div>
           </div>
       </div>
   </section>
@endsection
