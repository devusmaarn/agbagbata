<div class="space-y-5">

    <div class="bg-green-100">
        <img src="{{ $project->thumbnail }}" alt="">
    </div>

    <h1 class="text-4xl capitalize">{{ $project->title }}</h1>

    <p class="text-lg">{{ $project->description }}</p>

    <div role="tablist" class="tabs tabs-lifted">
        <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Donations" checked />
        <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
            <div class="overflow-x-auto">
                <table class="table table-zebra">
                    <thead>
                        <tr>
                            <th>Donor</th>
                            <th>Donation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($donations as $donation)
                            <tr>
                                <th>{{ $donation->donor }}</th>
                                @if ($donation->item === 'money')
                                        {{number_format($donation->quantity)}}
                                @else
                                    <td>{{$donation->quantity}} of {{$donation->item}}</td>
                                @endif
                                <td>
                                    <div class="text-xs font-medium link link-primary">Edit</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
        
                    @if($donations->count() < 1)
                        <tfoot>
                            <tr><td colspan="6" class="text-center p-5">Oops!  No Donations Yet.</td></tr>
                        </tfoot>
                    @endif
                </table>
            </div>
        </div>

        <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Promises" />
        <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
             <div class="overflow-x-auto">
                <table class="table table-zebra">
                    <thead>
                        <tr>
                            <th>Promiser</th>
                            <th>Promise</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($promises as $promise)
                            <tr>
                                <th>{{ $promise->donor }}</th>
                                @if ($promise->item === 'money')
                                    <td>N{{number_format($promise->quantity)}}</td>
                                @else
                                    <td>{{$promise->quantity}} of {{$promise->item}}</td>
                                @endif
                                <td>
                                    <div class="text-xs font-medium link link-primary">Fulfilled</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
        
                    @if($promises->count() < 1)
                        <tfoot>
                            <tr><td colspan="6" class="text-center p-5">Oops!  No Promises Yet.</td></tr>
                        </tfoot>
                    @endif
                </table>
            </div>
        </div>
    </div>

    <form class="mt-10 p-3" wire:submit='add_donation'>
        <h4 class="mb-5 font-semibold">New Donation</h4>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-3">

            <x-forms.input name='form.donor' wire:model='form.donor' label='Donor' />
            
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text-alt">Item</span>
                </div>
                <select class="select select-bordered @error('form.item') select-error @enderror" wire:model='form.item'>
                    <option value="money">Money</option>
                    <option value="block">Block</option>
                    <option value="cement">Cement</option>
                    <option value="sand">Sand</option>
                </select>
                <div class="label">
                    <x-forms.error error='form.item' />
                </div>
            </label>

            <x-forms.input name='form.quantity' label='Quantity/Amount' 
                wire:model='form.quantity' />

            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text-alt">Fulfilled</span>
                </div>
                <select class="select select-bordered @error('form.fulfilled') select-error @enderror" wire:model='form.fulfilled'>
                    <option value="0" selected>Not Fulfilled</option>
                    <option value="1">Fulfilled</option>
                </select>
                <div class="label">
                    <x-forms.error error='form.fulfilled' />
                </div>
            </label>

            <x-forms.button label='Add Promise' />
        </div>
    </form>

</div>
