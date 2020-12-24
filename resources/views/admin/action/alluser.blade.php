@extends('admin/layout/headeradmin')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    @section('content')
    <div class="content">
        
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom d-flex justify-content-between">
                        <h2>Tất cả người dùng</h2>

                    </div>

                    <div class="card-body">
                        <div class="hoverable-data-table">
                            <div id="hoverable-data-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row justify-content-between top-information">
                                    <div class="dataTables_length" id="hoverable-data-table_length"><label>Show <select
                                                name="hoverable-data-table_length" aria-controls="hoverable-data-table"
                                                class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="50">50</option>
                                                <option value="-1">All</option>
                                            </select> entries</label></div>
                                    <div id="hoverable-data-table_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" class="form-control form-control-sm" placeholder=""
                                                aria-controls="hoverable-data-table"></label></div>
                                </div>
                                <table id="hoverable-data-table" class="table table-hover nowrap dataTable no-footer"
                                    style="width: 100%;" role="grid" aria-describedby="hoverable-data-table_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="hoverable-data-table"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Last name: activate to sort column descending"
                                                style="width: 67px;">Họ</th>
                                            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table"
                                                rowspan="1" colspan="1"
                                                aria-label="First name: activate to sort column ascending"
                                                style="width: 66px;">Tên</th>
                                                <th class="sorting" tabindex="0" aria-controls="hoverable-data-table"
                                                rowspan="1" colspan="1"
                                                aria-label="User name: activate to sort column ascending"
                                                style="width: 66px;">Username</th>
                                            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table"
                                                rowspan="1" colspan="1"
                                                aria-label="Position: activate to sort column ascending"
                                                style="width: 159px;">Type</th>
                                            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table"
                                                rowspan="1" colspan="1"
                                                aria-label="Start date: activate to sort column ascending"
                                                style="width: 62px;">Ngày tạo tài khoản</th>
                                            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table"
                                                rowspan="1" colspan="1"
                                                aria-label="E-mail: activate to sort column ascending"
                                                style="width: 154px;">E-mail</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td>Nguyễn</td>
                                            <td class="sorting_1" style="color: #1b223c;font-weight: 500;font-size: 14px;">Phúc</td>
                                            <td>wymmndp</td>
                                            <td>Admin</td>
                                            <td>16/08/2020</td>
                                            <td>ndphuc.19it1@vku.udn.vn</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>Lê</td>
                                            <td class="sorting_1" style="color: #1b223c;font-weight: 500;font-size: 14px;">Hà</td>
                                            <td>hanoob</td>
                                            <td>Admin</td>
                                            <td>02/01/2020</td>
                                            <td>dlha.19it1@vku.udn.vn</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>Phạm</td>
                                            <td class="sorting_1" style="color: #1b223c;font-weight: 500;font-size: 14px;">Trung</td>
                                            <td>trungbmt</td>
                                            <td>User</td>
                                            <td>01/01/2020</td>
                                            <td>pdtrung.19it1@vku.udn.vn</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>Phạm</td>
                                            <td class="sorting_1" style="color: #1b223c;font-weight: 500;font-size: 14px;">Triêm</td>
                                            <td>Hadestrb</td>
                                            <td>User</td>
                                            <td>03/05/2020</td>
                                            <td>pttriem.19it1@vku.udn.vn</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>Hà</td>
                                            <td class="sorting_1" style="color: #1b223c;font-weight: 500;font-size: 14px;">Nhân</td>
                                            <td>nhannguu</td>
                                            <td>User</td>
                                            <td>07/08/2020</td>
                                            <td>hcnhan.19it1@vku.udn.vn</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>Nguyễn</td>
                                            <td class="sorting_1" style="color: #1b223c;font-weight: 500;font-size: 14px;">Nhung</td>
                                            <td>nhungdog</td>
                                            <td>User</td>
                                            <td>03/05/2020</td>
                                            <td>nthn.19it1@vku.udn.vn</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>Lê</td>
                                            <td class="sorting_1" style="color: #1b223c;font-weight: 500;font-size: 14px;">Kha</td>
                                            <td>levankha</td>
                                            <td>User</td>
                                            <td>09/10/2020</td>
                                            <td>lvkha.19it1@vku.udn.vn</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>Nguyễn</td>
                                            <td class="sorting_1" style="color: #1b223c;font-weight: 500;font-size: 14px;">Huy</td>
                                            <td>duchuy</td>
                                            <td>User</td>
                                            <td>10/08/2020</td>
                                            <td>ndhuy.19it1@vku.udn.vn</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>Lê</td>
                                            <td class="sorting_1" style="color: #1b223c;font-weight: 500;font-size: 14px;">Ánh</td>
                                            <td>anhxuixeo</td>
                                            <td>User</td>
                                            <td>06/08/2020</td>
                                            <td>anhle.19it1@vku.udn.vn</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>Nguyễn</td>
                                            <td class="sorting_1" style="color: #1b223c;font-weight: 500;font-size: 14px;">Thiện</td>
                                            <td>thien123</td>
                                            <td>User</td>
                                            <td>03/02/2020</td>
                                            <td>thien.19it1@vku.udn.vn</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                                <div class="row justify-content-between bottom-information">
                                    <div class="dataTables_info" id="hoverable-data-table_info" role="status"
                                        aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                    <div class="dataTables_paginate paging_simple_numbers"
                                        id="hoverable-data-table_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="hoverable-data-table_previous"><a href="#"
                                                    aria-controls="hoverable-data-table" data-dt-idx="0" tabindex="0"
                                                    class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                    aria-controls="hoverable-data-table" data-dt-idx="1" tabindex="0"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="hoverable-data-table" data-dt-idx="2" tabindex="0"
                                                    class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="hoverable-data-table" data-dt-idx="3" tabindex="0"
                                                    class="page-link">3</a></li>
                                            <li class="paginate_button page-item next" id="hoverable-data-table_next"><a
                                                    href="#" aria-controls="hoverable-data-table" data-dt-idx="4"
                                                    tabindex="0" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    @stop

</body>

</html>