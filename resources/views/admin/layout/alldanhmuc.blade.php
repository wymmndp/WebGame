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
    <link rel="stylesheet" href="{{asset('admin_css/alldanhmuc.css')}}">
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
                                        <a href="#addCategory" id=""  class="btn btn-success"
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
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"
                                                style="color: #1b223c;font-weight: 500;font-size: 14px;">1</td>
                                            <td colspan="2">Hành động</td>
                                            <td>
                                                <a href="#updateCategory" class="edit" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Edit">&#xE254;</i></a>
                                            </td>
                                            <td>
                                                <a href="#deleteCategory" class="delete" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Delete">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"
                                                style="color: #1b223c;font-weight: 500;font-size: 14px;">2</td>
                                            <td colspan="2">Phiêu Lưu</td>
                                            <td>
                                                <a href="#updateCategory" class="edit" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Edit">&#xE254;</i></a>
                                            </td>
                                            <td>
                                                <a href="#deleteCategory" class="delete" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Delete">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"
                                                style="color: #1b223c;font-weight: 500;font-size: 14px;">3</td>
                                            <td colspan="2">Chiến Thuật</td>
                                            <td>
                                                <a href="#updateCategory" class="edit" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Edit">&#xE254;</i></a>
                                            </td>
                                            <td>
                                                <a href="#deleteCategory" class="delete" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Delete">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"
                                                style="color: #1b223c;font-weight: 500;font-size: 14px;">4</td>
                                            <td colspan="2">Thể Thao</td>
                                            <td>
                                                <a href="#updateCategory" class="edit" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Edit">&#xE254;</i></a>
                                            </td>
                                            <td>
                                                <a href="#deleteCategory" class="delete" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Delete">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"
                                                style="color: #1b223c;font-weight: 500;font-size: 14px;">5</td>
                                            <td colspan="2">Bắn súng</td>
                                            <td>
                                                <a href="#updateCategory" class="edit" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Edit">&#xE254;</i></a>
                                            </td>
                                            <td>
                                                <a href="#deleteCategory" class="delete" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Delete">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"
                                                style="color: #1b223c;font-weight: 500;font-size: 14px;">6</td>
                                            <td colspan="2">Góc nhìn thứ nhất</td>
                                            <td>
                                                <a href="#updateCategory" class="edit" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Edit">&#xE254;</i></a>
                                            </td>
                                            <td>
                                                <a href="#deleteCategory" class="delete" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Delete">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"
                                                style="color: #1b223c;font-weight: 500;font-size: 14px;">7</td>
                                            <td colspan="2">Hoạt hình</td>
                                            <td>
                                                <a href="#updateCategory" class="edit" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Edit">&#xE254;</i></a>
                                            </td>
                                            <td>
                                                <a href="#deleteCategory" class="delete" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Delete">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"
                                                style="color: #1b223c;font-weight: 500;font-size: 14px;">8</td>
                                            <td colspan="2">Đua xe</td>
                                            <td>
                                                <a href="#updateCategory" class="edit" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Edit">&#xE254;</i></a>
                                            </td>
                                            <td>
                                                <a href="#deleteCategory" class="delete" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Delete">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"
                                                style="color: #1b223c;font-weight: 500;font-size: 14px;">9</td>
                                            <td colspan="2">Thẻ bài</td>
                                            <td>
                                                <a href="#updateCategory" class="edit" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Edit">&#xE254;</i></a>
                                            </td>
                                            <td>
                                                <a href="#deleteCategory" class="delete" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Delete">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"
                                                style="color: #1b223c;font-weight: 500;font-size: 14px;">10</td>
                                            <td colspan="2">Giải đố</td>
                                            <td>
                                                <a href="#updateCategory" class="edit" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Edit">&#xE254;</i></a>
                                            </td>
                                            <td>
                                                <a href="#deleteCategory" class="delete" data-toggle="modal"><i
                                                        class="material-icons" data-toggle="tooltip"
                                                        title="Delete">&#xE872;</i></a>
                                            </td>
                                        </tr>
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
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Thêm danh mục</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input type="text" class="form-control edit-category-add" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success add-category-btn" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="updateCategory" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Sửa danh mục</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input type="text" class="form-control edit-category-update" value="Hành động" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info update-category-btn" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteCategory" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Xoá danh mục</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Bạn có chắc muốn xoá danh mục này?</p>
                        <p class="text-warning"><small>Việc xoá này không thể hoàn lại.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#addCategory').on('click','.add-category-btn',function() {
                var namecategory = $('.edit-category-add').val();
                alert(namecategory);
            })
            $('#updateCategory').on('click','.update-category-btn',function() {
                var namecategory = $('.edit-category-update').val();
                alert(namecategory);
            })
        })
    </script>
    @stop

</body>

</html>