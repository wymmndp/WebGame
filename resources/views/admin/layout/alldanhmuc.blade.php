@extends('admin/layout/headeradmin')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tất cả Danh Mục</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    @section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom d-flex justify-content-between">
                        <h2>Tất cả danh mục</h2>
                    </div>
                    <div class="card-body">
                        <div class="hoverable-data-table">
                            <div id="hoverable-data-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row justify-content-between top-information">
                                    <div class="dataTables_length" id="hoverable-data-table_length"></div>
                                    <div id="hoverable-data-table_filter" class="dataTables_filter">
                                        <a href="#addCategory" id="btn-add-category" class="btn btn-success"
                                            data-toggle="modal"><span>Thêm danh mục</span></a>
                                    </div>
                                </div>
                                <table id="hoverable-data-table" class="table table-hover nowrap dataTable no-footer"
                                    style="width: 100%;" role="grid" aria-describedby="hoverable-data-table_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="hoverable-data-table"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="ID: activate to sort column descending"
                                                style="width: 67px;">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table"
                                                rowspan="1" colspan="2"
                                                aria-label="Name category: activate to sort column ascending"
                                                style="width: 66px;">Tên danh mục</th>
                                            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table"
                                                rowspan="1" colspan="1"
                                                aria-label="Name category: activate to sort column ascending"
                                                style="width: 66px;">Sửa</th>
                                            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table"
                                                rowspan="1" colspan="1"
                                                aria-label="Name category: activate to sort column ascending"
                                                style="width: 66px;">Xoá</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($allcategories as $category)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"
                                                style="color: #1b223c;font-weight: 500;font-size: 14px;">
                                                {{$category->iddanhmuc}}</td>
                                            <td colspan="2">{{$category->tendanhmuc}}</td>
                                            @if($category->iddanhmuc!=33) 
                                            <td>
                                                <a data-iddm="{{$category->iddanhmuc}}" href="#updateCategory"
                                                    class="edit btn-update-category" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Edit">&#xE254;</i></a>
                                            </td>
                                            <td>
                                                <a data-iddm="{{$category->iddanhmuc}}" href="#deleteCategory"
                                                    class="delete btn-delete-category" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Delete">&#xE872;</i></a>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="addCategory" class="modal fade" style="">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thêm danh mục</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input type="text" class="form-control edit-category-name-add" required>
                    </div>
                    <div class="form-group">
                        <label>Hình danh mục</label>
                        <input type="text" class="form-control edit-category-image-add" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <a type="submit" class="btn btn-success add-category-btn" style="color:white">Add</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="updateCategory" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Sửa danh mục</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <div id="edit-name">

                        </div>

                    </div>
                    <div class="form-group">
                        <label>Hình danh mục</label>
                        <div id="edit-img">

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <a href="javascript:void(0)" type="submit" class="btn btn-info update-category-btn">Save</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteCategory" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Xoá danh mục <span id="tendanhmuc"></span></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Bạn có chắc muốn xoá danh mục này?</p>
                    <p class="text-warning"><small>Việc xoá này không thể hoàn lại.Tất cả các game thuộc danh mục này sẽ
                            chuyển về danh mục Other.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <a type="submit" class="btn btn-danger delete-category-btn">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script>
    $(document).ready(function() {
        // add danh muc
        function addDanhMuc(tendanhmuc, imgdanhmuc) {
            $.ajax({
                url: "{{route('addDanhMuc')}}",
                method: "POST",
                data: {
                    _token: '{{csrf_token()}}',
                    tendanhmuc: tendanhmuc,
                    imgdanhmuc: imgdanhmuc
                },
                success: function(data) {
                    alert(data);
                    location.reload();
                }
            })
        }
        $('#btn-add-category').on('click', function() {
            $('#addCategory').on('click', '.add-category-btn', function() {
                var namecategory = $('.edit-category-name-add').val();
                var imgcategory = $('.edit-category-image-add').val();
                addDanhMuc(namecategory, imgcategory);
            })
        })
        // support 
        function getTenDanhMuc(iddm) {
            $.ajax({
                url: "{{route('getDanhMuc')}}",
                method: "POST",
                data: {
                    _token: '{{csrf_token()}}',
                    iddm: iddm
                },
                success: function(data) {
                    $("#edit-name").html(
                        '<input type="text" class="form-control edit-category-name-edit" value="' +
                        data.tendanhmuc + '" required>');
                    $("#edit-img").html(
                        '<input type="text" class="form-control edit-category-img-edit" value="' +
                        data.imgdanhmuc + '" required>');
                }
            })
        }
        // update danhmuc
        function updateDanhMuc(iddm, tenmoi, imgdanhmuc) {
            $.ajax({
                url: "{{route('updateDanhMuc')}}",
                method: "POST",
                data: {
                    _token: '{{csrf_token()}}',
                    iddm: iddm,
                    tenmoi: tenmoi,
                    imgdanhmuc: imgdanhmuc
                },
                success: function(data) {
                    alert(data);
                    location.reload();
                }
            })
        }
        $('.btn-update-category').on('click', function() {
            var id = $(this).data("iddm");
            getTenDanhMuc(id);
            $('#updateCategory').on('click', '.update-category-btn', function() {
                var namecategory = $('.edit-category-name-edit').val();
                var imgcategory = $('.edit-category-img-edit').val();
                updateDanhMuc(id, namecategory, imgcategory);
            })
        })
        // delete
        function deleteDanhMuc(iddm) {
            $.ajax({
                url: "{{route('deleteDanhMuc')}}",
                method: "post",
                data: {
                    _token: '{{csrf_token()}}',
                    iddm: iddm,
                },
                success: function(data) {
                    alert(data);
                    location.reload();
                }
            })
        }
        $('.btn-delete-category').on('click', function() {
            var id = $(this).data("iddm");
            getTenDanhMuc(id);
            $('#deleteCategory').on('click', '.delete-category-btn', function() {
                deleteDanhMuc(id);
            })
        })
    })
    </script>
    @stop

</body>

</html>