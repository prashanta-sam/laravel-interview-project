@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<style>

    ul li{
        margin-bottom: 10px !important;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success text-center mt-3 mb-3" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <table class="table table-bordered yajra-datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Posts</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($data))
                                @foreach($data as $val)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$val->name}}</td>
                                        <td>
                                            @if(isset( $val->blogs_count ))
                                                {{ $val->blogs_count }}
                                            @else
                                                0
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>

                    </table>
                    <div>

                        {{ $data->links('pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
