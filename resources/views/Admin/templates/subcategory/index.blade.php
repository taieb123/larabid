@extends('Admin.layouts.index')

@section('content')

@include('Admin.partials.breadcumb')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-7">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Create new Sub-category</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form action="{{ route('subcategory.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group row"><label class="col-lg-2 col-form-label">Title</label>
                            <div class="col-lg-10"><input type="text" name="title" placeholder="Title"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group row"><label class="col-lg-2 col-form-label">Description</label>

                            <div class="col-lg-10"><input type="text" name="description" placeholder="Description"
                                    class="form-control"></div>
                        </div>

                        <div class="form-group row"><label class="col-sm-2 col-form-label">Select category</label>
                            <div class="col-sm-10"><select class="form-control m-b" name="id_category">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2"></div>
                            <div class="custom-file col-lg-10">
                                <input id="logo" name="logo" type="file" class="custom-file-input">
                                <label for="logo" class="custom-file-label">Choose logo file (optional)</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary btn-sm" type="submit">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>FooTable with row toggler, sorting and pagination</h5>

                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="footable table table-stripped toggle-arrow-tiny">
                        <thead>
                            <tr>
                                <th data-toggle="true">Title</th>
                                <th>Description</th>
                                <th>Category parent</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>bmw</td>
                                <td>voiture category</td>
                                <td> voiture</td>
                                <td>
                                    <button class="btn btn-info " data-toggle="modal" data-target="#myModal2"
                                        type="button"><i class="fa fa-paste"></i> Edit</button>
                                    <button class="btn btn-warning delete_category_btn" data-id="1" type="button"><i
                                            class="fa fa-warning"></i> <span class="bold">Warning</span></button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">
                                    <ul class="pagination float-right"></ul>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal-->
<div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('subcategory.store') }}" method="POST" enctype="multipart/form-data">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Sub-category information</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group row"><label class="col-lg-2 col-form-label">Title</label>
                        <div class="col-lg-10"><input type="text" name="title" placeholder="Title" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row"><label class="col-lg-2 col-form-label">Description</label>

                        <div class="col-lg-10"><input type="text" name="description" placeholder="Description"
                                class="form-control"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Select category</label>
                        <div class="col-sm-10"><select class="form-control m-b" name="id_category">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2"></div>
                        <div class="custom-file col-lg-10">
                            <input id="logo" name="logo" type="file" class="custom-file-input">
                            <label for="logo" class="custom-file-label">Choose logo file (optional)</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
