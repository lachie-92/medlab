@if(count($filtered_practitioners))
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Select</th>
                <th>Practitioner</th>
                <th>Clinic</th>
                <th>Address</th>
                <th>Suburb</th>
            </tr>
        </thead>
        <tbody>
            @foreach($filtered_practitioners as $practitioner)
                <?php
                    $company_address = $practitioner->company->company_addresses->where('type', 'Physical')->first();
                ?>
                <tr>
                    <td>
                        <input type="radio" name="practitioner_id" value="{{ $practitioner->id }}" style="margin-left: 20px"></input>
                    </td>
                    <td>{{ $practitioner->user->customer->name }}</td>
                    <td>{{ $practitioner->company->name }}</td>
                    <td>@if(count($company_address) > 0){{ $practitioner->company->company_addresses->where('type', 'Physical')->first()->address }}@endif</td>
                    <td>@if(count($company_address) > 0){{ $practitioner->company->company_addresses->where('type', 'Physical')->first()->suburb }}@endif</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p style="text-align: center; margin-top: 30px;">
        No Practitioner found under the search criteria.
    </p>
@endif
