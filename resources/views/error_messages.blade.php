@if (count($errors) > 0)
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li class="ml-4">{{ $error }}</li>
        @endforeach
    </ul>
@endif

{{-- フラッシュメッセージ --}}
@if (session('flash_message'))
<div class="flash_message alert alert-danger text-center py-3 my-0">
    {{ session('flash_message') }}
</div>
@endif
