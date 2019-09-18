@extends('layouts.principal.principal-master')

@section('content')
    <header id="master-header" class="bg" style="background-image: url({{ asset($post->thumb_path) }});">
        <div class="bg-overlay"></div>
        <div class="top-header">
            <div class="container">

                <h1 id="logo">
                    <a href="{{ route('/') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="T{{ env('APP_NAME') }}">
                    </a>
                </h1>

                <!-- ============ Main Navigation - START ============ -->

                <a id="nav-toggle" href="#"><span></span></a>
            @include('principal.partials.content-menu')
            <!-- ============ Main Navigation - END ============ -->

            </div>
        </div>

        <h2 id="page-title">{{ $post->title }}</h2>
        <div class="header-meta post-meta">
            <span class="date">{{ $post->created_at_formatted }}</span>
            <span class="author">
                @if($post->user->name != 'Admin')
                    {{ $post->user->name }}
                @else
                    Eder Tattoo
                @endif
            </span>
            <span class="category">{{ $post->category->name }}</span>
        </div>
    </header>

    <main>
    @include('components.notifications')
    <!-- ============ Contacts Bar - START ============ -->

    @include('principal.partials.contacts-bar')

        <div class="section">

            <div class="container">

                <div class="row">

                    <!-- ============ Post Content - START ============ -->

                    <div class="primary col-md-8">

                        <div class="post-content">

                            <img class="thumb" src="{{ asset($post->thumb_path) }}" alt="Post Image">
                            {{ $post->content }}

                        </div>
                    </div>

                    <!-- ============ Post Content - END ============ -->

                    <!-- ============ Widgets Sidebar - START ============ -->

                    @include('principal.blog.aside-post')

                    <!-- ============ Widgets Sidebar - END ============ -->

                </div>

            </div>

        </div>

        <a class="instagram-bar" href="{{ setting('instagram') }}">Veja os meus trabalhos no <strong>Instagram</strong>!</a>

        <!-- ============ Instagram Banner - END ============ -->

    </main>
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
@endpush
