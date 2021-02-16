@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="border border-dark mt-3">
                <p class="ml-1">お届け先</p>
                <p class="ml-3">
                    <span>〒</span>
                    {{ $zip = substr($user->zipcode,0,3) . "-" . substr($user->zipcode,3) }}
                    &nbsp;
                    {{ $user->prefecture }}{{ $user->municipality }}
                    &nbsp;
                    {{ $user->address }}
                </p>
                <div>
                    <p class="offset-sm-4">
                        {{ $user->last_name }}
                        &nbsp;
                        {{ $user->first_name }}<span>様</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h2 class="text-center mt-5">カート内に商品はありません</h2>
    </div>
</div>
@endsection
