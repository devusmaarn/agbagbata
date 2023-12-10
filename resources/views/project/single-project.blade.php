<div class="space-y-5">
    <figure>
        <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" />
    </figure>
    <h1 class="text-3xl capitalize">{{ $project->title}}</h1>

    <p>{{ $project->description }}</p>

    <div class="">
        <h4 class="text-lg font-bold">Donations</h4>

        <div class="overflow-x-auto">
            <table class="table table-zebra">
                <!-- head -->
                <thead>
                <tr>
                    <th>Donor</th>
                    <th>Donation</th>
                    <th>Fulfilled</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($project->donations as $donation)
                        <tr>
                            <th>{{$donation->donor}}</th>
                            @if ($donation->item === 'money')
                                <td>N{{number_format($donation->quantity)}}</td>
                            @else
                                <td>{{$donation->quantity}} of {{$donation->item}}</td>
                            @endif
                            <td>
                                @if ($donation->fulfilled)
                                    <div className="badge badge-success badge-outline">fulfilled</div>
                                @else
                                    <div className="badge badge-error badge-outline">not fulfilled</div>
                                @endifq
                            </td>
                        </tr>
                    @endforeach      
                </tbody>
            </table>
        </div>
    </div>
</div>
