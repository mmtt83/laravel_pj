 @extends('layouts.app')
 @section('content')
     <!-- Bootstrapの定形コード… -->
     <div class="container">
         <div class="card-body">
             <div class="card-title">マッチング一覧</div>
         </div>
         <!-- 既に登録されてる投稿リスト -->
         @if(Auth::check())
            @if(count($apply_user)>0)
                <div class="card-body">
                <div class="card-body">
                    @foreach ($apply_user as $apply_user)
                       
                            <!-- 投稿タイトル -->
                            <div>{{ $apply_user->post_title }}</div>
                             <!-- 投稿詳細 -->
                            <div>{{ $apply_user->post_desc }}</div>
                            <!-- 申込者名の表示 -->
                            <div>{{ $apply_user->post_id->name }}</div>
                            <!-- 画像を表示 -->
                            <div><img src="/upload/{{ $apply_user->cover_img}}" width="100"></div>
                        
                    @endforeach
                </div>
            </div>	
            @endif
        @endif
    </div>
 @endsection