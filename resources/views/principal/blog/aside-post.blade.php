<aside class="secondary col-md-4">

    <section class="widget">

        <h3 class="focus-title"><i class="fa fa-file-text-o"></i>Últimas publicações</h3>
        <ul>
            @foreach($posts as $lastPost)
                <li><a href="{{ route('blog.show', $lastPost->slug) }}">{{ \Illuminate\Support\Str::limit($lastPost->title, 87) }}</a></li>
            @endforeach
        </ul>

    </section>

    <section class="widget">

        <h3 class="focus-title"><i class="fa fa-bookmark-o"></i>Categorias</h3>
        <ul>
            @foreach($categories as $category)
                <li><a href="{{ route('blog.index', ['category' => $category->name, 'category-index' => $category->id]) }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>

    </section>
</aside>
