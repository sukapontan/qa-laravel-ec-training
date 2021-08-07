@if (count($errors) > 0)
    <ul class="alert alert-danger mt-5">
        @foreach ($errors->all() as $error)
            <li class="ml-4">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<!-- フラッシュメッセージがセッションに存在する場合、フラッシュメッセージを表示 -->
@if (session('flash_message'))
    <div class="flash_message bg-danger text-center mt-3 py-3 my-0">
        {{ session('flash_message') }}
    </div>
@endif