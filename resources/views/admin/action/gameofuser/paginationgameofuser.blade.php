<table id="hoverable-data-table" class="table table-hover nowrap dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="hoverable-data-table_info">
    <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="1" style="width: 67px;">ID</th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="2" style="width: 66px;">Tên trò chơi</th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="1" style="width: 66px;">Video</th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="2" style="width: 66px;">Simmer Link</th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="1" style="width: 66px;">Coin</th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="2" style="width: 66px;">Ngày thêm</th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="1" style="width: 66px;">Duyệt</th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="2" style="width: 66px;">Từ chối</th>

        </tr>
    </thead>
    <tbody>
        @foreach($allgame as $game)
        <tr role="row" class="odd">
            <td class="sorting_1" style="color: #1b223c;font-weight: 500;font-size: 14px;">{{$game->idupgame}}</td>
            <td colspan="2"><a href="{{URL::to('admin/detailgame/' . $game->id)}}">{{$game->namegame}}</a></td>
            <td><a href="#playVideo" data-toggle="modal"><i class="fas fa-play" style="color: blue;" data-linkvideo="{{$game->videoplay}}"></i></a></td>
            <td colspan="2">{{$game->linkgame}}</td>
            <td>{{$game->coin}}</td>
            <td colspan="2">{{$game->time}}</td>
            <td><a href="#acceptGame" data-idaccept="{{$game->id}}" data-toggle="modal" class="accept"><i class="fas fa-check" style="color: greenyellow;cursor: pointer;"></i></a></td>
            <td colspan="2"><a href="#refuseGame" data-idrefuse="{{$game->id}}" data-toggle="modal" class="refuse"><i class="fas fa-trash" style="color: red;cursor:pointer"></i></a></td>
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