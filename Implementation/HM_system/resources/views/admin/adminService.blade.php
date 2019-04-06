@include('admin/adminHeader')
<div class="adminService">
<h1 class="text-center">Please fill up the form to insert data.</h1>






<form class="col-md-12" method="POST" action="{{url('admin/adminService')}}" enctype="multipart/form-data">
        @csrf
        {{method_field('put')}}




        <div class="form-group row">
            <label for="serviceType" class="col-md-4 col-form-label text-md-right">{{ __('Room Type') }}</label>

            <div class="col-md-6">
                {{-- <input id="roomType" type="text" class="form-control{{ $errors->has('roomType') ? ' is-invalid' : '' }}" name="roomType" value="{{ old('roomType') }}" required autofocus> --}}

                <select class="form-control{{ $errors->has('serviceType') ? ' is-invalid' : '' }}" value="{{ old('serviceType') }}" name="serviceType" required>
                    <option class="" value=""> Select service Type</option>
                    @foreach($serviceType as $data)
                    <option class="" value="{{$data->serviceTypeId}}">{{$data->serviceType}}</option>
                    @endforeach
                  </select>

                <button class="btn" type="button" data-target="#addServiceType" data-toggle="modal"> Add Service Type</button>


                @if ($errors->has('serviceType'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('serviceType') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group row">
            <label for="serviceName" class="col-md-4 col-form-label text-md-right">{{ __('Service Name') }}</label>

            <div class="col-md-6">
                <input id="serviceName" type="text" class="form-control{{ $errors->has('serviceName') ? ' is-invalid' : '' }}" name="serviceName" value="{{ old('serviceName') }}" required autofocus>

                @if ($errors->has('serviceName'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('serviceName') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group row">
            <label for="servicePrice" class="col-md-4 col-form-label text-md-right">{{ __('Service Price') }}</label>

            <div class="col-md-6">
                <input id="servicePrice" type="text" class="form-control{{ $errors->has('servicePrice') ? ' is-invalid' : '' }}" name="servicePrice" value="{{ old('servicePrice') }}" required>

                @if ($errors->has('servicePrice'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('servicePrice') }}</strong>
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
                <th>Service ID</th>
                <th>Service Type ID</th>
                <th>Service Name</th>
                <th>Service Price</th>
                <th>Action</th>
                </tr>
                <tbody>
                    @if($services->count())
                    @foreach($services as $key=>$service)
                    <tr>
                    <td> {!!$service->serviceId!!}</td>
                    <td> {!!$service->serviceType!!}</td>
                    <td> {!!$service->serviceName!!}</td>
                    <td> {!!$service->servicePrice!!}</td>





                         <td>
                            <form action="{{ route('service.edit', $service->serviceId)}}" method="POST">
                                @csrf
                                {!! method_field('EDIT') !!}
                               <button type="submit" method="POST" class="btn btn-primary btn-sm" name="edit">Edit</button>

                            </form>

                            {{-- <form action="{!! url('/admin/adminRoom',[$rooms->roomId]) !!}" method="POST"> --}}
                            <form action="{{route('service.delete',$service->serviceId)}}" method="POST">
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
<div class="modal fade " id="addServiceType" role="dialog">
    <div class="modal-dialog modal-dialog-center modal-sm">
      <div class="modal-content ">
       <div class="modal-header">
        <h3 class="text-info " id="titleLogin"> Add Room Type </h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
          <div class="modal-body">
            <form method="post" action="{{url('/serviceType')}}">
              @csrf
              <div class="input-group">

                <input type="text" class="form-control{{ $errors->has('serviceType') ? ' is-invalid' : '' }}" name="serviceType" value="{{ old('serviceType') }}" placeholder="Service Type" required autofocus>
                @if ($errors->has('serviceType'))
                                      <span class="invalid-feedback" id="errorUsername" role="alert">
                                          <strong>{{ $errors->first('serviceType') }}</strong>
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


