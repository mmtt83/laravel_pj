 @extends('layouts.app')
 @section('content')
    <!-- Bootstrapの定形コード… -->
    <img src='{{ asset('storage/mv.jpg') }}' class="img-fluid mv" alt="...">
    <div class="container">
        <div class="content_title">
            <h1 class="title_en text-center">New</h1>
            <p class="title_ja text-center">新着トーク</p>
        </div>
        
        <div class="row">     
            
            <!-- 既に登録されてる投稿リスト -->
            @if (count($posts) > 0)
                @foreach($posts as $post)
                    <div class="card col-sm-4" style="width: 18rem;">
                        <a href="{{ url('detail/'.$post->id) }}">
                            <!--画像を表示-->
                            <img src="/upload/{{ $post->cover_img}}" class="card-img-top" width="100">
                            <div class="card-body">
                                <!--投稿のカテゴリを表示-->
                                <h5 class="card-title">{{ $post->post_title }}</h5>
                                <!--投稿のカテゴリを表示-->
                                <span class="category">{{ $post->category->name }}</span>
                            </div>
                        </a>
                    </div>
                @endforeach	
            @endif
        </div><!--End .row-->
    
    </div><!--End .container-->

 @endsection