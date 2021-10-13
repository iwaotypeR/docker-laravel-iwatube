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
<h1>IWATUBE</h1>  
<div>
    <video controls width="500px" height="300px">
    <source src="{{asset('Movies/'.$movie->movie_name)}}">
    </video>
</div>