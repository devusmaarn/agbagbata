<div>
   <h1 class="text-xl mb-5">Create New Project</h1>

    <form wire:submit='create' class="space-y-5">
        <x-forms.input name='title' label='Project Title' wire:model='title' />
        <x-forms.textarea name='description' rows='10' label='Description' wire:model='description' />
        <x-forms.button label='Create Project' />
    </form>

</div>
