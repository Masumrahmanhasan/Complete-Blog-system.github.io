@extends('layouts.backend.app')

@section('title', 'Settings')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Settings
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">face</i> Update Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#profile_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">change_history</i> Change Password
                                </a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                 <form class="form-horizontal" method="POST" action="{{route('author.profile.update')}}" enctype="multipart/form-data">
                                     @csrf
                                     @method('PUt')
                                     <div class="row clearfix">
                                         <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                             <label for="name">Name</label>
                                         </div>
                                         <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                             <div class="form-group">
                                                 <div class="form-line">
                                                     <input name="name" type="text" id="name" class="form-control" value="{{ Auth::user()->name }}" placeholder="Enter your email address">
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email_address_2">Email Address</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="email" value="{{  Auth::user()->email }}" type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row clearfix">
                                         <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                             <label for="email_address_2">Image</label>
                                         </div>
                                         <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                             <div class="form-group">
                                                 <div class="form-line">
                                                     <input name="image"  type="file" >
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="row clearfix">
                                         <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                             <label for="email_address_2">About</label>
                                         </div>
                                         <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                             <div class="form-group">
                                                 <div class="form-line">
                                                     <textarea rows="5" name="about" class="form-control">{{ Auth::user()->about }}</textarea>
                                                  </div>
                                             </div>
                                         </div>
                                     </div>



                                    <div class="row clearfix">
                                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                <form class="form-horizontal" method="POST" action="{{route('author.password.update')}}" >
                                    @csrf
                                    @method('PUt')
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="name">Old Password:</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="old_password" type="password" id="old_password" class="form-control"  placeholder="Enter Old Password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password">New Password:</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="password" type="password" id="password" class="form-control"  placeholder="Enter New Password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="confirm_password">Confirm Password:</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="password_confirmation" type="password" id="password_confirmation" class="form-control"  placeholder="Confirm New  Password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('js')

@endpush