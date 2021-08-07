@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center py-5">ユーザー情報修正</h1>
    <form class="edit_user" enctype="multipart/form-data" action="{{ route('users.update', $user->id) }}" accept-charset="UTF-8" method="post">
    @csrf
    @method('PUT')
        <div class="form-group row">
            <label class="col-sm-2 text-sm-center offset-sm-1">氏名</label>
            <label class="col-sm-1 text-sm-right col-2 col-form-label">姓</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" value="{{ old('last_name') }}" name="last_name" placeholder="{{ $user->last_name }}">
            </div>
            <label class="col-sm-1 text-sm-right col-2 col-form-label">名</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" value="{{ old('first_name') }}" name="first_name" placeholder="{{ $user->first_name }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 text-sm-center col-12 col-form-label offset-sm-1">住所</label>
            <label class="col-sm-1 text-right col-2 col-form-label">〒</label>
            <div class="col-sm-3 col-8">
                <input type="text" class="form-control" value="{{ old('zipcode') }}" name="zipcode" placeholder="{{ $user->zipcode }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label text-sm-right">都道府県</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" value="{{ old('prefecture') }}" name="prefecture" placeholder="{{ $user->prefecture }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label text-sm-right">市町村区</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" value="{{ old('municipality') }}" name="municipality" placeholder="{{ $user->municipality }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label text-sm-right">番地</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" value="{{ old('address') }}" name="address" placeholder="{{ $user->address }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label text-sm-right">マンション部屋番号</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" value="{{ old('apartments') }}" name="apartments" placeholder="{{ $user->apartments }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label text-sm-center">メールアドレス</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="{{ old('email') }}" name="email" placeholder="{{ $user->email }}">
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-sm-4 col-form-label text-sm-center">電話番号</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="{{ old('phone_number') }}" name="phone_number" placeholder="{{ $user->phone_number }}">
            </div>
        </div>

        <div class="d-flex justify-content-around py-5 col-sm-8 col-auto container">
            <input type="submit" class="btn btn-primary px-1 col-md-2 col-2" value="修正"></input>
        
    </form>
        
    <form class="delete_user" enctype="multipart/form-data" action="{{ route('users.destroy', $user->id) }}" accept-charset="UTF-8" method="post">
    @csrf
    @method('DELETE')
        <input type="submit" class="btn btn-danger px-5 -col-md-2 col-15" value="退会" onclick="return Check()"></input>
    </form>
    </div>

</div>

<!-- 退会ボタン押下後、退会をするのか再確認する処理 -->
<script type="text/javascript">
    function Check(){
        var checked = confirm("本当に退会してもよろしいですか？");
        if (checked == true) {
            return true;
        } else {
            return false;
        }
    }
</script>

@endsection