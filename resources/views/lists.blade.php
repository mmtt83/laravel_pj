 @extends('layouts.app')
 @section('content')
     <!-- Bootstrapの定形コード… -->
     <div class="card-body">
         <div class="card-title">
             投稿一覧
         </div>
         
     </div>
     <!-- Book: 既に登録されてる投稿リスト -->
     @if (count($posts) > 0)
          @foreach($posts as $post)
            <div class="card-body">
                <a class="btn btn-info" href="{{ url('detail/'.$post->id) }}">
                    <!--画像を表示-->
                    <div><img src="/upload/{{ $post->cover_img}}" width="100"></div>
                    <!--投稿者名の表示-->
                    <div>{{$post->user->name}}</div>
                    <!--投稿のカテゴリを表示-->
                    <div>{{ $post->category->name }}</div>
                    <!--投稿のタイトルを表示-->
                    <div>{{ $post->post_title }}</div>
                    <!--投稿の本文を表示-->
                    <div>{{ $post->post_body }}</div>
                    <!--会話時間を表示-->
                    <div>{{ $post->select_time }}分</div>
                </a>
            </div>
        @endforeach	
    @endif
 @endsection