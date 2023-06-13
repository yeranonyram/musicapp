<x-app-layout>
	<x-slot name="header">
		<div class="flex justify-between">
			<h2 >
				Listado de canciones
			</h2>
			<!--tracks.create hace trabajar al TrackController en los controladores-->
			<a href="{{route('tracks.create')}}" class="bg-blue-500 rounded px-4 py-2">
				Nueva cancion
			</a>
		</div>
	</x-slot>
	<div>
		<div class="grid grid-cols-8 gap-2">
			@foreach($tracks as $track)
				<div class="rounded bg-blue-200 p-4">
					{{$track->title}}
				</div>
			@endforeach
		</div>
	</div>
</x-app-layout>
