<div>
    <div class="flex items-center justify-between mb-5 md:mb-10">
        <h1 class="text-xl">All Projects</h1>
        
        <x-link :href="route('project.create')" text='New Project' class="btn btn-sm btn-primary" />
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($projects as $project)
            <div  wire:key="{{ $project->id }}"> 
                <a href={{ route('project.show', $project->id) }} wire::navigate class="block h-52 bg-green-200 rounded">

                </a>
                <div class="p-2 space-y-2">
                    <a href={{ route('project.show', $project->id) }} class="font-medium hover:link" wire:navigate>{{$project->title}}</a>
                </div>
            </div>
        @endforeach
    </div>

</div>
