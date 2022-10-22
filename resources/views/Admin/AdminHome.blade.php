@extends('layouts.AdminLayout')
@section('Admin-Contain')
    @if ($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Dashboard</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>


            <div class="row mb-5">
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">



                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block">
                                <div>
                                    <h5 class="card-title mb-0">Sales Chart</h5>
                                </div>
                                <div class="ms-auto">
                                    <ul class="list-inline text-center font-12">
                                        <li><i class="fa fa-circle text-success"></i> SITE A</li>
                                        <li><i class="fa fa-circle text-info"></i> SITE B</li>
                                        <li><i class="fa fa-circle text-primary"></i> SITE C</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="" id="sales-chart" style="height: 355px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex mb-4 no-block">
                                <h5 class="card-title mb-0 align-self-center">Our Visitors</h5>
                                <div class="ms-auto">
                                    <select class="form-select b-0">
                                        <option selected="">Today</option>
                                        <option value="1">Tomorrow</option>
                                    </select>
                                </div>
                            </div>
                            <div id="visitor" style="height:260px; width:100%;"></div>
                            <ul class="list-inline mt-4 text-center font-12">
                                <li><i class="fa fa-circle text-purple"></i> Tablet</li>
                                <li><i class="fa fa-circle text-success"></i> Desktops</li>
                                <li><i class="fa fa-circle text-info"></i> Mobile</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div>
                <div class="modal fade" id="modalAddCategory" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="{{ route('admin.cat.add') }}" method="POST" enctype="multipart/form-data"
                                class="p-5">
                                @csrf
                                <div class="form-group">
                                    <label for="name_en">Name : </label>
                                    <input type="text" name="name_en" class="form-control" id="name_en"
                                        aria-describedby="category_name">
                                </div>
                                <div class="form-group">
                                    <label for="name_ar">Name Arabic : </label>
                                    <input type="text" name="name_ar" class="form-control" id="name_ar"
                                        aria-describedby="category_name">
                                </div>
                                <div class="d-flex mt-3" style="justify-content: space-around">
                                    <textarea class="form-control col-5" placeholder="description english" name="desc_en" id="desc_en" cols="30"
                                        rows="10"></textarea>
                                    <textarea class="form-control col-5" placeholder="description arabic" name="desc_ar" id="desc_ar" cols="30"
                                        rows="10"></textarea>
                                </div>

                                <div class="input-group mb-3 mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Image</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="img" class="custom-file-input"
                                            id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Add</button>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>


                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">Projects of the Month</h5>
                                    </div>
                                    <div class="ms-auto">
                                        <button class="btn btn-success" data-toggle="modal"
                                            data-target="#modalAddCategory">Add
                                            Category</button>
                                    </div>
                                </div>
                                <div class="table-responsive mt-3 no-wrap">
                                    <table class="table vm no-th-brd pro-of-month">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Category Image</th>
                                                <th>Category Name</th>
                                                <th>ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($cats as $cat)
                                                <tr class="active">
                                                    <td><span class="round"><img
                                                                src="{{ asset('upload/cats') }}/{{ $cat->img }}"
                                                                alt="{{ $cat->name_en }}" width="50"></span></td>
                                                    <td>
                                                        <h6>{{ $cat->name_en }}</h6><small
                                                            class="text-muted">{{ $cat->name_ar }}</small>
                                                    </td>
                                                    <td>{{ $cat->desc_en }}</td>
                                                    <td>{{ $cat->id }}</td>
                                                </tr>
                                            @endforeach --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>


            <div class="row">
                <!-- Start Notification -->
                <div class="col-lg-6 col-md-12">
                    <div class="card card-body mailbox">
                        <h5 class="card-title">Notification</h5>
                        <div class="message-center" style="height: 420px !important;">
                            <!-- Message -->
                            <a href="#">
                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                <div class="mail-contnet">
                                    <h6 class="text-dark font-medium mb-0">Luanch Admin</h6> <span class="mail-desc">Just
                                        see the my new admin!</span>
                                    <span class="time">9:30 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="btn btn-success btn-circle"><i class="fa fa-calendar-check-o"></i></div>
                                <div class="mail-contnet">
                                    <h6 class="text-dark font-medium mb-0">Event today</h6> <span class="mail-desc">Just a
                                        reminder that you have
                                        event</span> <span class="time">9:10 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="btn btn-info btn-circle"><i class="fa fa-cog text-white"></i></div>
                                <div class="mail-contnet">
                                    <h6 class="text-dark font-medium mb-0">Settings</h6> <span class="mail-desc">You can
                                        customize this template as you
                                        want</span> <span class="time">9:08 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="btn btn-primary btn-circle"><i class="fa fa-user"></i></div>
                                <div class="mail-contnet">
                                    <h6 class="text-dark font-medium mb-0">Pavan kumar</h6> <span class="mail-desc">Just
                                        see the my admin!</span> <span class="time">9:02 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="btn btn-info btn-circle"><i class="fa fa-cog text-white"></i></div>
                                <div class="mail-contnet">
                                    <h6 class="text-dark font-medium mb-0">Customize Themes</h6> <span
                                        class="mail-desc">You can customize this template as you
                                        want</span> <span class="time">9:08 AM</span>
                                </div>
                            </a>
                            <!-- Message -->
                            <a href="#">
                                <div class="btn btn-primary btn-circle"><i class="fa fa-user"></i></div>
                                <div class="mail-contnet">
                                    <h6 class="text-dark font-medium mb-0">Pavan kumar</h6> <span class="mail-desc">Just
                                        see the my admin!</span> <span class="time">9:02 AM</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Feeds</h5>
                            <ul class="feeds">
                                <li>
                                    <div class="bg-light-info"><i class="fa fa-bell-o"></i></div> You have 4 pending
                                    tasks. <span class="text-muted">Just Now</span>
                                </li>
                                <li>
                                    <div class="bg-light-success"><i class="fa fa-server"></i></div> Server #1
                                    overloaded.<span class="text-muted">2 Hours ago</span>
                                </li>
                                <li>
                                    <div class="bg-light-warning"><i class="fa fa-shopping-cart"></i></div> New
                                    order received.<span class="text-muted">31 May</span>
                                </li>
                                <li>
                                    <div class="bg-light-danger"><i class="fa fa-user"></i></div> New user
                                    registered.<span class="text-muted">30 May</span>
                                </li>
                                <li>
                                    <div class="bg-light-inverse"><i class="fa fa-bell-o"></i></div> New Version
                                    just arrived. <span class="text-muted">27 May</span>
                                </li>
                                <li>
                                    <div class="bg-light-info"><i class="fa fa-bell-o"></i></div> You have 4 pending
                                    tasks. <span class="text-muted">Just Now</span>
                                </li>
                                <li>
                                    <div class="bg-light-danger"><i class="fa fa-user"></i></div> New user
                                    registered.<span class="text-muted">30 May</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Feeds -->
            </div>
            <!-- ============================================================== -->
            <!-- End Notification And Feeds -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
        </div>
    @endsection
