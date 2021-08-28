@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-default">
        <h2><span class="panel-heading badge badge-success mt-3 mb-2">
                @foreach($idArray as $id)
                @if($id === 'three')
                <a href="{{route('orders.all',['id'=>'all'])}}" class="text-secondary">全ての注文を表示</a>
                @endif
                @if($id === 'all')
                <a href="{{route('orders.all',['id'=>'three'])}}" class="text-dark">直近3か月の注文を表示</a>
                @endif
                @endforeach
            </span></h2>
        <div class="panel-body">
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <h2>注文履歴は存在しません</h2>
            </div>
        </div>
    </div>
</div>
@endsection