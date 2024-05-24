@extends('layouts.admin')

@section('content')
	<header class="py-3">
		<div class="container d-flex justify-content-between align-items-center">
			<h1>Projects</h1>

			<a href="{{route('admin.projects.create')}}" class="btn btn-primary">
				Add a new project
				<i class="fa-solid fa-pencil"></i>
			</a>
		</div>
	</header>

	<section class="py-4">
		<div class="container">
			<h4 class="p-3">All projects</h4>
			<div class="table-responsive">
				<table class="table table-light">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Cover Image</th>
							<th scope="col">Title</th>
							<th scope="col">Slug</th>
							<th scope="col">Actions</th>
						</tr>
					</thead>

					<tbody>
						{{-- @dd($projects) --}}
						@forelse($projects as $project)
						<tr class="">



							<td scope="row">{{ $project->id }}</td>
							<td><img src="{{ $project->cover_image }}" alt="{{ $project->title }}" width="140"></td>
							<td>{{ $project->title }}</td>
							<td>{{ $project->slug }}</td>
							<td>
								<a class="btn" href="{{ route('admin.projects.show', $project) }}">
									<i class="fa-solid fa-eye"></i>
								</a>
								{{-- <a href="{{route('admin.projects.edit')}}" class="btn">
									<i class="fa-solid fa-pencil"></i>
								</a> --}}
								/edit/delete</td>
						</tr>
							
						@empty
							<tr class="">
								<td scope="row" colspan="5">No projects added yet!</td>
							</tr>
						@endforelse

					</tbody>
				</table>
			</div>

		</div>
	</section>
@endsection
