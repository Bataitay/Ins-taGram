@extends('Front-End.master')
@section('content')
    <section class="main">
        <div class="wrapper">
            <div class="left-col">
                    <div class="status-wrapper">
                        <div class="status-card">
                            <div class="profile-pic"><img src="{{ asset('assets/images/cover 1.png ') }}" alt=""></div>
                            <p class="username">user_name_1</p>
                        </div>
                        <div class="status-card">
                            <div class="profile-pic"><img src="{{ asset('assets/images/cover 2.png ') }}" alt="">
                            </div>
                            <p class="username">user_name_2</p>
                        </div>
                        <div class="status-card">
                            <div class="profile-pic"><img src="{{ asset('assets/images/cover 3.png ') }}" alt="">
                            </div>
                            <p class="username">user_name_3</p>
                        </div>
                        // +5 more status card elements.
                    </div>


                    <div class="post">
                        <div class="info">
                            <div class="user">
                                <div class="profile-pic"><img src="{{ asset('assets/images/cover 1.png ') }}"
                                        alt=""></div>
                                <p class="username">modern_web_channel</p>
                            </div>
                            <img src="{{ asset('assets/images/option.PNG') }}" class="options" alt="">
                        </div>
                        <img src="{{ asset('assets/images/cover 1.png ') }}" class="post-image" alt="">
                        <div class="post-content">
                            <div class="reaction-wrapper">
                                <img src="{{ asset('assets/images/like.PNG') }}" class="icon" alt="">
                                <img src="{{ asset('assets/images/comment.PNG') }}" class="icon" alt="">
                                <img src="{{ asset('assets/images/send.PNG') }}" class="icon" alt="">
                                <img src="{{ asset('assets/images/save.PNG ') }}" class="save icon" alt="">
                            </div>
                            <p class="likes">1,012 likes</p>
                            <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur,
                                adipisicing
                                elit. Pariatur tenetur veritatis placeat, molestiae impedit aut provident eum quo natus
                                molestias?</p>
                            <p class="post-time">2 minutes ago</p>
                        </div>
                        <div class="comment-wrapper">
                            <img src="{{ asset('assets/images/smile.PNG') }}" class="icon" alt="">
                            <input type="text" class="comment-box" placeholder="Add a comment">
                            <button class="comment-btn">post</button>
                        </div>
                    </div>
                    <div class="post">
                        <div class="info">
                            <div class="user">
                                <div class="profile-pic"><img src="{{ asset('assets/images/cover 2.png') }}"
                                        alt="">
                                </div>
                                <p class="username">modern_web_channel</p>
                            </div>
                            <img src="{{ asset('assets/images/option.PNG ') }}" class="options" alt="">
                        </div>
                        <img src="{{ asset('assets/images/cover 2.png ') }}" class="post-image" alt="">
                        <div class="post-content">
                            <div class="reaction-wrapper">
                                <img src="{{ asset('assets/images/like.PNG') }}" class="icon" alt="">
                                <img src="{{ asset('assets/images/comment.PNG') }}" class="icon" alt="">
                                <img src="{{ asset('assets/images/send.PNG') }}" class="icon" alt="">
                                <img src="{{ asset('assets/images/save.PNG') }}" class="save icon" alt="">
                            </div>
                            <p class="likes">1,012 likes</p>
                            <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur,
                                adipisicing
                                elit. Pariatur tenetur veritatis placeat, molestiae impedit aut provident eum quo natus
                                molestias?</p>
                            <p class="post-time">2 minutes ago</p>
                        </div>
                        <div class="comment-wrapper">
                            <img src="{{ asset('assets/images/smile.PNG') }}" class="icon" alt="">
                            <input type="text" class="comment-box" placeholder="Add a comment">
                            <button class="comment-btn">post</button>
                        </div>
                    </div>
                    // +5 more post elements
                </div>

                <div class="right-col">
                    <div class="profile-card">
                        <div class="profile-pic">
                            <img src="{{ asset('assets/images/profile-pic.png') }}" alt="">
                        </div>
                        <div>
                            <p class="username">{{Auth::user()->name}}</p>
                            <p class="sub-text">kunaal </p>
                        </div>
                        <button class="action-btn">switch</button>
                    </div>
                    <p class="suggestion-text">Suggestions for you</p>
                    <div class="profile-card">
                        <div class="profile-pic">
                            <img src="{{ asset('assets/images/cover 9.png') }}" alt="">
                        </div>
                        <div>
                            <p class="username">modern_web_channel</p>
                            <p class="sub-text">followed bu user</p>
                        </div>
                        <button class="action-btn">follow</button>
                    </div>
                    <div class="profile-card">
                        <div class="profile-pic">
                            <img src="{{ asset('assets/images/cover 10.png') }}" alt="">
                        </div>
                        <div>
                            <p class="username">modern_web_channel</p>
                            <p class="sub-text">followed bu user</p>
                        </div>
                        <button class="action-btn">follow</button>
                    </div>
                    <div class="profile-card">
                        <div class="profile-pic">
                            <img src="{{ asset('assets/images/cover 11.png') }}" alt="">
                        </div>
                        <div>
                            <p class="username">modern_web_channel</p>
                            <p class="sub-text">followed bu user</p>
                        </div>
                        <button class="action-btn">follow</button>
                    </div>
                    <div class="profile-card">
                        <div class="profile-pic">
                            <img src="{{ asset('assets/images/cover 12.png') }}" alt="">
                        </div>
                        <div>
                            <p class="username">modern_web_channel</p>
                            <p class="sub-text">followed bu user</p>
                        </div>
                        <button class="action-btn">follow</button>
                    </div>
                    <div class="profile-card">
                        <div class="profile-pic">
                            <img src="{{ asset('assets/images/cover 13.png') }}" alt="">
                        </div>
                        <div>
                            <p class="username">modern_web_channel</p>
                            <p class="sub-text">followed bu user</p>
                        </div>
                        <button class="action-btn">follow</button>
                    </div>
                </div>
            </div>
    </section>
@endsection
