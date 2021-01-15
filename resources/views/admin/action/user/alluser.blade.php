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
                                                class="custom-select custom-select-sm form-control form-control-sm"
                                                id="showuser">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="50">50</option>
                                                <option value="-1">All</option>
                                            </select> entries</label></div>
                                    <div id="hoverable-data-table_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" id="search-field" class="form-control form-control-sm"
                                                placeholder="" aria-controls="hoverable-data-table"></label></div>
                                </div>
                                <div class="show-table">
                                    @include('admin/action/user/paginationuser')
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    jQuery.support.cors = true;

    function search(txtSearch, shownumber) {
        $.ajax({
            url: "{{route('searchUser')}}",
            method: "post",
            data: {
                _token: '{{csrf_token()}}',
                txtSearch: txtSearch,
                shownumber: shownumber,
            },
            success: function(data) {
                $('.show-table').html(data)
            }
        })
    }
    $('#search-field').on('keyup', function() {
        var txtSearch = $('#search-field').val();
        var shownumber = $("#showuser option:selected").attr('value');
        search(txtSearch,shownumber);
    });
    $('#showuser').on('change', function() {
        var shownumber = $("#showuser option:selected").attr('value');
        var txtSearch = $('#search-field').val();
        search(txtSearch, shownumber);
    })
    </script>
    @stop

</body>

</html>