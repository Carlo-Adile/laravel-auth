@extends('layouts.admin')

@section('content')
{{-- @dd($project) --}}

	<header class="py-3">
		<div class="container">
			<h1>{{ $project->title }}</h1>
		</div>
	</header>

	<section class="py-4">
		<div class="container">
			<img src="{{ $project->cover_image }}" alt="{{ $project->title }}" width="240">
			<p>{{ $project->content }}</p>
		</div>
	</section>
@endsection
