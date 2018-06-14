@extends('app')

@section('content')
<div class="container">
    <div class="col-xs-12">
        <div class="panel well">
            @if (Session::has('message'))
            <div class="alert alert-info" role="alert">{{ Session::get('message') }}</div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Jurisdiction</th>
                        <th>Application Number</th>
                        <th>Filing Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($patents as $patent)
                    <tr>
                        <td>{{ $patent->product }}</td>
                        <td>{{ $patent->jurisdiction }}</td>
                        <td>{{ $patent->application_number }}</td>
                        <td>{{ $patent->filing_date }}</td>
                        <td>{{ $patent->status }}</td>
                        <td>
                            <form action="{{ route('admin.patents.destroy', $patent) }}" method="POST" onSubmit="return confirm('Are you sure? This cannot be undone.')">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.patents.edit', $patent) }}" class="btn btn-default">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $patents->render() !!}
            <br /><br />
            <div class="pull-right">
                <a href="{{ route('admin.patents.create') }}" class="btn btn-primary">New Patent</a>
            </div>
            <br /><br />
        </div>
    </div>
</div>

@endsection

