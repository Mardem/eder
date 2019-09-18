@extends('layouts.principal.principal-master')

@section('content')
    <header id="master-header" class="bg" style="background-image: url({{ asset('img/bg/bg05.jpg') }});">
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

        <h2 id="page-title">Blog</h2>
    </header>

    <main>
    @include('components.notifications')
    <!-- ============ Contacts Bar - START ============ -->

    @include('principal.partials.contacts-bar')

    <!-- ============ Contacts Bar - END ============ -->
        <div class="section">
            <div class="container">
                <div class="row">

                    <!-- ============ Posts list - START ============ -->

                    <div class="primary clear col-md-8">

                        @foreach($posts as $post)
                            <article class="post">

                                <a class="thumb" href="{{ route('blog.show', $post->slug) }}"><img src="{{ $post->thumb_path == '' ? asset('img/loader.jpg') : asset($post->thumb_path) }}" alt="Imagem principal da publicação {{ $post->title }}"></a>
                                <div class="post-meta">
                                    <span class="date">{{ $post->created_at_formatted }}</span>
                                    <span class="author">
                                        @if($post->user->name != 'Admin')
                                            {{ $post->user->name }}
                                            @else
                                            Eder Tattoo
                                        @endif
                                    </span>
                                    <span class="category">
                                        {{ $post->category->name }}
                                    </span>
                                </div>
                                <h3 class="post-title"><a href="blog-post">{{ \Illuminate\Support\Str::limit($post->title, 115) }}</a></h3>
                                <p>
                                    {{ \Illuminate\Support\Str::limit(strip_tags($post->content), 250) }}
                                </p>

                            </article>
                        @endforeach

                        {{ $posts->appends(request()->query())->links() }}
                    </div>

                    <!-- ============ Posts list - END ============ -->

                    <!-- ============ Widgets Sidebar - START ============ -->
                    @include('principal.blog.aside-post')
                    <!-- ============ Widgets Sidebar - END ============ -->

                </div>
            </div>
        </div>

        <!-- ============ Instagram Banner - START ============ -->

        <a class="instagram-bar" href="{{ setting('instagram') }}">Veja os meus trabalhos no <strong>Instagram</strong>!</a>

        <!-- ============ Instagram Banner - END ============ -->

    </main>
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
@endpush
