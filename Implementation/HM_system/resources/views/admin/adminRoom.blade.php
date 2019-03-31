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




<form class="col-md-12" method="POST" action="{{url('admin/adminRoom')}}" enctype="multipart/form-data">
        @csrf
        {{method_field('put')}}




        <div class="form-group row">
            <label for="roomType" class="col-md-4 col-form-label text-md-right">{{ __('Room Type') }}</label>

            <div class="col-md-6">
                {{-- <input id="roomType" type="text" class="form-control{{ $errors->has('roomType') ? ' is-invalid' : '' }}" name="roomType" value="{{ old('roomType') }}" required autofocus> --}}

                <select class="form-control{{ $errors->has('roomType') ? ' is-invalid' : '' }}" value="{{ old('roomType') }}" name="roomType" required>
                    <option class="" value=""> Select room Type</option>
                    @foreach($roomType as $data)
                    <option class="" value="{{$data->roomTypeId}}">{{$data->roomType}}</option>
                    @endforeach
                  </select>

                <button class="btn" type="button" data-target="#addRoomType" data-toggle="modal"> Add Room Type</button>


                @if ($errors->has('roomType'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('roomType') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="roomDiscription" class="col-md-4 col-form-label text-md-right">{{ __('Room Description') }}</label>

            <div class="col-md-6">

<textarea class="form-control" name="roomDiscription" rows="6"> </textarea>
                @if ($errors->has('roomDiscription'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('roomDiscription') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group row">
            <label for="roomNumber" class="col-md-4 col-form-label text-md-right">{{ __('Room Number') }}</label>

            <div class="col-md-6">
                <input id="roomNumber" type="text" class="form-control{{ $errors->has('roomNumber') ? ' is-invalid' : '' }}" name="roomNumber" value="{{ old('roomNumber') }}" required autofocus>

                @if ($errors->has('roomNumber'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('roomNumber') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
                <label for="roomImage" class="col-md-4 col-form-label text-md-right">{{ __('Room Image') }}</label>

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


<div class="row text-center">
                         <div class="form-group row mb-0">
                             <div class="col-md-6 offset-md-4">
                                 <button type="submit" class="btn btn-primary">
                                  {{ __('Insert') }}
                                 </button>
                             </div>
                         </div>

                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                 {{ __('Update') }}
                                </button>
                            </div>
                        </div>
</div>
    </form>
    <div class="content">
    <table class="table table-bordered" border="1">
        <thead>
            <tr>
            <th>Room ID</th>
            <th>Room Type</th>
            <th>Room Discription</th>
            <th>Room Price</th>
            <th>Room Number</th>
            <th>Image</th>
            <th>Action</th>
            </tr>
            <tbody>
                @if($room->count())
                @foreach($room as $key=>$rooms)
                <tr>
                <td> {!!$rooms->roomId!!}</td>
                <td> {!!$rooms->roomType!!}</td>
                <td> {!!$rooms->roomDiscription!!}</td>
                <td> {!!$rooms->roomPrice!!}</td>
                <td> {!!$rooms->roomNum!!}</td>

                <td><img src="/{{$rooms->roomImage}}" class="img-fluid image-thumbnail" style="height: 150px; width:200px;"></td>


                     <td>
                        <form action="{{ route('room.edit', $rooms->roomId)}}" method="POST">
                            @csrf
                            {!! method_field('EDIT') !!}
                           <button type="submit" method="POST" class="btn btn-primary btn-sm" name="edit">Edit</button>

                        </form>

                        {{-- <form action="{!! url('/admin/adminRoom',[$rooms->roomId]) !!}" method="POST"> --}}
                        <form action="{{route('room.delete',$rooms->roomId)}}" method="POST">
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
<div class="modal fade " id="addRoomType" role="dialog">
    <div class="modal-dialog modal-dialog-center modal-sm">
      <div class="modal-content ">
       <div class="modal-header">
        <h3 class="text-info " id="titleLogin"> Add Room Type </h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
          <div class="modal-body">
            <form method="post" action="{{url('/roomType')}}">
              @csrf
              <div class="input-group">

                <input type="text" class="form-control{{ $errors->has('roomType') ? ' is-invalid' : '' }}" name="roomType" value="{{ old('roomType') }}" placeholder="Room Type" required autofocus>
                @if ($errors->has('roomType'))
                                      <span class="invalid-feedback" id="errorUsername" role="alert">
                                          <strong>{{ $errors->first('roomType') }}</strong>
                                      </span>
                                  @endif
              </div>

              <div class="modal-footer text-center">
          <button class="btn btn-primary-outline btn-sm" name="btnAdd" type="submit">Add</button>
          <br>

            <button type="button" class="btn btn-warning-outline btn-sm" data-dismiss="modal">Close</button>
          </div>
          </form>
          <br>
        </div>
      </div>
    </div>
  </div>


