@extends('layouts.app')
@section('content')
    <div id="container"></div>
    <div class="container fly">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
					<a href="{{asset($obj->country->country_iso_code.'/'.$obj->country->country_name)}}">
					{{$obj->country->country_name}}
					</a>
					{{$obj->name}}
                    </div>

                    <div class="panel-body">
					test
                    </div>
                </div>
            </div>
    </div>
@endsection
