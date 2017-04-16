<!--Created by: Lê Duy
Date: 10/04/2017
-->
@extends('layouts.master')

@section('content')
	@include('utils.advertise')
	<div class="container">
		@include('utils.message')
		<div class="row list-products-thumbnail">
			<h2 class="title-section-home bd-green">Kho hàng 
			<span class="badge badge-danger">{!! $fav->total() !!}</span>
			</h2>
				@foreach($fav as $key)
					<?php
						$item = App\Models\Stock::find($key->stock_id);
						$user = $userModel->getDetailUserByUserID($item->user_id);
						$cate = $cateModel->getCateById($item->cate_id);
						$vote = $reviewModel->getAverageVote($item->user_id);
					?>
					@include('utils.contentTable',['item' => json_decode($item),'user' => json_decode($user),'cate' => json_decode($cate),'type' => 'stock','vote' => $vote])
				@endforeach
		</div>
		@if ($fav->lastPage() > 1)
		<nav aria-label="Page navigation">
			<ul class="pagination">
				@if ($fav->currentPage() != 1)
				<li class="page-item"><a class="page-link" href="{!! $fav->appends(['order' => $favO->currentPage()])->url($fav->currentPage() - 1) !!}">Trước</a></li>
				@endif
				@for ($i = 1; $i <= $fav->lastPage(); $i = $i + 1)
				<li class="page-item {!! ($fav->currentPage() == $i)?'active':'' !!}">
					<a class="page-link" href="{!! $fav->appends(['order' => $favO->currentPage()])->url($i) !!}">{!! $i !!}</a>
				</li>
				@endfor
				@if ($fav->currentPage() != $fav->lastPage())
				<li class="page-item"><a class="page-link" href="{!! $fav->appends(['order' => $favO->currentPage()])->url($fav->currentPage() + 1) !!}">Sau</a></li>
				@endif
			</ul>
		</nav>
		@endif

		<div class="row list-products-thumbnail">
			<h2 class="title-section-home bd-blue">Đơn hàng 
			<span class="badge badge-danger">{!! $favO->total() !!}</span>
			</h2>
				@foreach($favO as $key)
					<?php
						$item = App\Models\Order::find($key->order_id);
						$user = $userModel->getDetailUserByUserID($item->user_id);
						$cate = $cateModel->getCateById($item->cate_id);
						$vote = $reviewModel->getAverageVote($item->user_id);
					?>
					@include('utils.contentTable',['item' => json_decode($item),'user' => json_decode($user),'cate' => json_decode($cate),'type' => 'order','vote' => $vote])
				@endforeach
		</div>
		@if ($favO->lastPage() > 1)
		<nav aria-label="Page navigation">
			<ul class="pagination">
				@if ($favO->currentPage() != 1)
				<li class="page-item"><a class="page-link" href="{!! $favO->appends(['stock' => $fav->currentPage()])->url($favO->currentPage() - 1) !!}">Trước</a></li>
				@endif
				@for ($i = 1; $i <= $favO->lastPage(); $i = $i + 1)
				<li class="page-item {!! ($favO->currentPage() == $i)?'active':'' !!}">
					<a class="page-link" href="{!! $favO->appends(['stock' => $fav->currentPage()])->url($i) !!}">{!! $i !!}</a>
				</li>
				@endfor
				@if ($favO->currentPage() != $favO->lastPage())
				<li class="page-item"><a class="page-link" href="{!! $favO->appends(['stock' => $fav->currentPage()])->url($favO->currentPage() + 1) !!}">Sau</a></li>
				@endif
			</ul>
		</nav>
		@endif
	</div>
@endsection

@section('scripts')

@endsection