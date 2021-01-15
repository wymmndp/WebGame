<table id="hoverable-data-table" class="table table-hover nowrap dataTable no-footer" style="width: 100%;" role="grid"
    aria-describedby="hoverable-data-table_info">
    <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 67px;">ID</th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="2"
                aria-label="Name game: activate to sort column ascending" style="width: 66px;">Tên trò chơi</th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="2"
                aria-label="Name category: activate to sort column ascending" style="width: 66px;">Danh Mục</th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="1"
                aria-label="Coin: activate to sort column ascending" style="width: 66px;">Coin</th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="2"
                aria-label="Date add: activate to sort column ascending" style="width: 66px;">Ngày thêm</th>

        </tr>
    </thead>
    <tbody>
        @foreach($allgame as $game)
        <tr role="row" class="odd">
            <td class="sorting_1" style="color: #1b223c;font-weight: 500;font-size: 14px;">{{$game->id}}</td>
            <td colspan="2"><a href="{{URL::to('admin/detailgame/' . $game->id)}}">{{$game->namegame}}</a></td>
            <td colspan="2">{{$game->tendanhmuc}}</td>
            <td>{{$game->coin}}</td>
            <td>{{$game->time}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="row justify-content-between bottom-information">
    <div class="dataTables_info" id="hoverable-data-table_info" role="status" aria-live="polite"></div>
    <div class="dataTables_paginate paging_simple_numbers" id="hoverable-data-table_paginate">
        {!! $allgame->links() !!}
    </div>
</div>