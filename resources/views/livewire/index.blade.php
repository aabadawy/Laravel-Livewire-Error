<div>
    <table>
        <tr>
            <th>Name</th>
            <th>Last Name</th>
        </tr>
        <tr>
            @foreach ($collection as $item)
                <tr>
                    <td>{{data_get($item,'name')}}</td>
                    <td>{{data_get($item,'lastName')}}</td>
                </tr>
            @endforeach
        </tr>
    </table>
    <br><br>
    <button type="button" wire:click="fakeRequest">Click Me to fake a Livewire Request</button>
</div>
