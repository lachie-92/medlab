@if(count($filtered_companies))
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Select</th>
                <th>Clinic</th>
                <th>Business Num.</th>
                <th>Address</th>
                <th>Suburb</th>
            </tr>
        </thead>
        <tbody>
            @foreach($filtered_companies as $company)
                <tr>
                    <td>
                        <input type="radio" name="company_id" value="{{ $company->id }}" style="margin-left: 20px"></input>
                    </td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->business_number }}</td>
                    <td>{{ $company->company_addresses->where('type', 'Physical')->first()->address }}</td>
                    <td>{{ $company->company_addresses->where('type', 'Physical')->first()->suburb }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p style="text-align: center; margin-top: 30px;">
        No Company found under the search criteria.
    </p>
@endif
