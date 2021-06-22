@extends('layouts.app')

@section('content')

<div class="container">
	<h1 class="text-center py-5">全国特産品ECサイト</h1>
		<div class="row">
			<div class="col-xs-12 col-md-6 text-center mt-5">
				<h5>まだアカウントを<br>お持ちでない方はこちら</h5>
				<div class="col-xs-12 col-md-12 text-center mt-4">
					<a href="{{ route('auth.register') }}" class="btn btn-primary btn-md">新規登録</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 text-center mt-5">
				<h5>すでにアカウントを<br>お持ちの方はこちら</h5>
					<div class="col-xs-12 col-md-12 text-center mt-4">
						<button type="button" class="btn btn-primary btn-md">ログイン</button>
					</div>
			</div>
		</div>
</div>

@endsection

