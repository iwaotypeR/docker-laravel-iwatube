@if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
      <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">ダッシュボード</a>
    @else
      <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">ログイン</a>
      @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">アカウント作成</a>
      @endif
    @endif
  </div>
@endif
<h1><a href="{{ url('/')}}" style="text-decoration:none;">IWATUBE</a></h1>
<div>
    <h2>動画一覧</h2>
    <table border="1">
        <tr>
            <th>投稿者</th>
            <th>動画</th>
            <th>アップロード日</th>
        </tr>
        @foreach($movies as $movie)
        <tr>
            <td>{{$movie->task_name}}</td>
            <td><a href="/watch/{{$movie->id}}">{{$movie->movie_name}}</a></td>
            <td>{{$movie->created_at}}</td>
        </tr>
        @endforeach
    </table>
</div>