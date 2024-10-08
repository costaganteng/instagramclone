@extends('layouts.index')
@section('title', 'Instagram')
@section('content')
    <div class="second_container">
        <!--***** posts_container start ****** -->
        <div class="main_section">
            <div class="posts_container">
                <div class="stories">
                    <div class="owl-carousel items">
                    </div>
                </div>

                <div class="posts">
                    @foreach ($posts as $post)
                        <x-post :post="$post" />
                    @endforeach
                    <div class="text-center row w-100">
                        {{ $posts->links() }}
                    </div>
                </div>

            </div>
        </div>
        <!--***** posts_container end ****** -->

        <!--***** followers_container start ****** -->
        <div class="followers_container">
            <div>
                <div class="cart">
                    <div>
                        <div class="img">
                            <img src="{{ asset('images/logock.png') }}" alt="">
                        </div>
                        <div class="info">
                            <p class="name">Costa</p>
                            <p class="second_name">costa02</p>
                        </div>
                    </div>
                    <div class="switch">
                        <a href="#">Switch</a>
                    </div>
                </div>
                <div class="suggestions">
                    <div class="title">
                        <h4>Suggestions for you</h4>
                        <a class="dark" href="#">See All</a>
                    </div>
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="{{ asset('images/th.jpeg') }}" alt="">
                            </div>
                            <div class="info">
                                <p class="name">Candra</p>
                                <p class="second_name">CandraLi</p>
                            </div>
                        </div>
                        <div class="switch">
                            <button class="follow_text" href="#">follow</button>
                        </div>
                    </div>
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="{{ asset('images/joel.jpg') }}" alt="">
                            </div>
                            <div class="info">
                                <p class="name">Joel Hudson</p>
                                <p class="second_name">Joel Hudson56</p>
                            </div>
                        </div>
                        <div class="switch">
                            <button class="follow_text" href="#">follow</button>
                        </div>
                    </div>
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="{{ asset('images/profile_img.jpg') }}"" alt="">
                            </div>
                            <div class=" info">
                                <p class="name">Sasha</p>
                                <p class="second_name">Sashaaa</p>
                            </div>
                        </div>
                        <div class="switch">
                            <button class="follow_text" href="#">follow</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--***** followers_container end ****** -->
    </div>
@endsection

@section('scripts')
    <script src="./js/home.js"></script>
    <script src="./js/post-handlers.js"></script>
@endsection
