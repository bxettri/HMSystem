@include('admin/adminHeader')
<div class="adminRoom">
<h1 class="text-center">Please fill up the form to insert data.</h1>

@if(count($errors)>0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success">
    <p>{{\Session::get('success')}}</p>
</div>
@endif

@if(Session::has('roomNameExists'))
<div class="alert alert-success">
    <p>{{\Session::get('roomNameExists')}}</p>
</div>
@endif




<form method="POST" action="{{url('admin/adminRoom')}}" enctype="multipart/form-data">
        @csrf
        {{method_field('put')}}




        <div class="form-group row">
            <label for="roomType" class="col-md-4 col-form-label text-md-right">{{ __('Room Type') }}</label>

            <div class="col-md-6">
                <input id="roomType" type="text" class="form-control{{ $errors->has('roomType') ? ' is-invalid' : '' }}" name="roomType" value="{{ old('roomType') }}" required autofocus>

                @if ($errors->has('roomType'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('roomType') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group row">
                <label for="roomType" class="col-md-4 col-form-label text-md-right">{{ __('Room Type') }}</label>

                <div class="col-md-6">
                        <input type="file" class="form-control" name="roomImage">
                </div>
        </div>




        <div class="form-group row">
            <label for="roomPrice" class="col-md-4 col-form-label text-md-right">{{ __('Room Price') }}</label>

            <div class="col-md-6">
                <input id="roomPrice" type="text" class="form-control{{ $errors->has('roomPrice') ? ' is-invalid' : '' }}" name="roomPrice" value="{{ old('roomPrice') }}" required>

                @if ($errors->has('roomPrice'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('roomPrice') }}</strong>
                    </span>
                @endif
            </div>
        </div>



                         <div class="form-group row mb-0">
                             <div class="col-md-6 offset-md-4">
                                 <button type="submit" class="btn btn-primary">
                                  {{ __('Insert') }}
                                 </button>
                             </div>
                         </div>
    </form>
    <div class="clearfix">
    <table class="table table-bordered" border="1">
        <thead>
            <tr>
            <th>ID</th>
            <th>roomType</th>
            <th>roomPrice</th>
            <th>Image</th>
            <th>Action</th>
            </tr>
            <tbody>
                @if($room->count())
                @foreach($room as $key=>$rooms)
                <tr>
                <td>{!! $key + 1 !!}</td>
                <td> {!!$rooms->roomType!!}</td>
                <td> {!!$rooms->roomPrice!!}</td>


                <td><img src="/{{$rooms->roomImage}}" class="img-fluid image-thumbnail" style="height: 150px; width:200px;"></td>


                     <td>
                        <a href="{!! url('') !!}" type="button" class="btn btn-primary btn-sm">Edit</a>
                     </td>

                     <td>
                        <form action="{!! url('') !!}" method="POST">
                            @csrf
                            {!! method_field('DELETE') !!}
                            <button type="submit" class="btn btn-danger btn-sm"> Delete</button>
                        </form>
                    </td>
                @endforeach
                @endif
                </tr>
        </thead>
    </table>
</div>
</div>


