@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Companies</div>


                    <div class="panel-body">
                        <form method="post" action="{{ url('company/create') }}">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Company name" class="form-control" required/>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Company</button>
                            </div>
                        </form>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Company data</th>
                                <th>Action</th>
                            </tr>
                            @foreach($companies as $company)
                                <tr>
                                    <td>{{ $company }}</td>
                                    <td>
                                        <a href="{{ url('company/' . $company->id)  }}">view</a>
                                        <a href="{{ url('company/remove/' . $company->id)  }}">remove</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection