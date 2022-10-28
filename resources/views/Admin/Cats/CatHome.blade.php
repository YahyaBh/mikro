@extends('layouts.AdminLayout')
@section('Admin-Contain')
    <div>
        <div class="modal fade" id="modalAddCategory" tabindex="-1" role="dialog" aria-labelledby="modalAddCategory"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{ route('admin.cat.add') }}" method="POST" enctype="multipart/form-data" class="p-5">
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
                                <input type="file" name="img" class="custom-file-input" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01">
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


        <div class="row" style="padding-left: 240px;">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-flex">
                            <div>
                                <h5 class="card-title">Projects of the Month</h5>
                            </div>
                            <div class="ms-auto">
                                <button class="btn btn-success" style="margin-top: 80px" data-toggle="modal"
                                    data-target="#modalAddCategory">Add
                                    Category</button>
                            </div>
                        </div>
                        <div class="table-responsive mt-3 no-wrap">
                            <table
                                style="z-index: 21;
                            position: relative;
                            background-color: white;
                            margin-top: 130px;"
                                class="table vm no-th-brd pro-of-month">
                                <thead>
                                    <tr>
                                        <th colspan="2">Category Image</th>
                                        <th>Category Name</th>
                                        <th>Index</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($cats as $cat)
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
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
