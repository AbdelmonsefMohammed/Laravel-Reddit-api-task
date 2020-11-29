@extends('layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Reddit
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Reddit Images</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        @include('includes.messages')

        <div class="card">
            <div class="card-header">
                Search Images
            </div>
        
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control datetime" type="text" name="query" id="query" value="{{ request()->input('query') }}" placeholder="Search query" required>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-success">
                                Search
                            </button>
                        </div>
                    </div>
                </form>
                @if($images !== null)
                @if ($user->hasRole('admin'))
                    <hr />
                    <div class="box">
                        <div class="box-body">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Title
                                        </th>
                                        <th>
                                            Image
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $counter = 1;@endphp
                                    @foreach($images->data->children as $image)
                                        <tr>
                                            <td>
                                                {{ $counter++ }}
                                            </td>
                                            <td>
                                                {{\Str::limit($image->data->title,150)}}
                                            </td>
                                            <td>
                                                <img style="width: 90px;height:90px" src="{{$image->data->thumbnail}}" alt="no image found">
                                            </td>

        
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <div class="row">
                        @foreach ($images->data->children as $image)
                        <div style="display: flex;justify-content: center;align-items: center;overflow: hidden" class="col-md-3">
                            <img style="flex-shrink: 0;min-width: 100%;max-height: 300px" src="{{$image->data->url}}" alt="no image found">
                        </div>
                        @endforeach
                        
                    </div>
                @endif
 
                @endif
            </div>
        </div>
        
    </section>
</div>

@endsection
