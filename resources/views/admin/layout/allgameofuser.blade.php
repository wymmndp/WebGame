@extends('admin/layout/headeradmin')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tất cả Trò Chơi</title>
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
                        <h2>Tất cả Trò Chơi</h2>
                    </div>
                    <div class="card-body">
                        <div class="hoverable-data-table">
                            <div id="hoverable-data-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row justify-content-between top-information">
                                    <div class="dataTables_length" id="hoverable-data-table_length"><label>Show <select
                                                name="hoverable-data-table_length" aria-controls="hoverable-data-table"
                                                class="custom-select custom-select-sm form-control form-control-sm" id="showgame">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="50">50</option>
                                                <option value="-1">All</option>
                                            </select> entries</label></div>
                                    <div id="hoverable-data-table_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" id="search-field" class="form-control form-control-sm" placeholder=""
                                                aria-controls="hoverable-data-table"></label></div>
                                </div>
                                <div class="show-table">
                                    @include('admin/action/game/paginationgame')
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