@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Edit Petition</h1>
            <br>
            <div class="box box-warning">
                <div class="box-body">
                    <form role="form" method="post" action="{{url('petitions/'.$petition->id)}}">
                        {{csrf_field()}}
                            {{method_field('put')}}
                        <!-- text input -->
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" value="{{$petition->title}}" placeholder="Enter title" name="title">
                        </div>

                        <!-- textarea -->
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="4" placeholder="Enter description" name="body">{{$petition->body}}</textarea>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-warning btn-block" type="submit" value="Update Petition">
                        </div>

                    </form>
                </div>
            </div>

            <a href="{{url('petitions/'.$petition->id)}}" class="btn btn-default">Back</a>

        </div>
    </div>

@endsection