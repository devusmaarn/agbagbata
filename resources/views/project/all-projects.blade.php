<div>
    
    <h1 class="md:text-xl mb-10">Projects</h1>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-5">
        @foreach ($projects as $project)
            <a href="{{route('public.project', $project->id)}}" wire:key="{{ $project->id }}" class="card bg-base-100 shadow-xl">
                <figure>
                    <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        {{$project->title}}
                    </h2>
                        <p>{{ $project->description }}</p>
                        <div class="card-actions justify-end">
                        {{-- @if ($project->completed)
                            <div class="badge badge-outline badge-success">Completed</div>     
                        @else
                            <div class="badge badge-outline badge-primary">Ongoing</div>    
                        @endif --}}
                        
                    </div>
                </div>
            </a>
        @endforeach 
    </div>
</div>
