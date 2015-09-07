@if(count($filtered_practitioners))
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Select</th>
                <th>Practitioner</th>
                <th>Clinic</th>
                <th>Address</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            @foreach($filtered_practitioners as $practitioner)
                <tr>
                    <td>
                        <input type="radio" name="practitioner_id" value="{{ $practitioner->id }}" style="margin-left: 20px"></input>
                    </td>
                    <td>{{ $practitioner->user->customer->name }}</td>
                    <td>{{ $practitioner->company->name }}</td>
                    <td>{{ $practitioner->company->company_addresses->where('type', 'Main Address')->first()->address }}</td>
                    <td>{{ $practitioner->company->company_addresses->where('type', 'Main Address')->first()->country }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p style="text-align: center; margin-top: 30px;">
        No Practitioner found under the search criteria.
    </p>
@endif
