<table id="hoverable-data-table" class="table table-hover nowrap dataTable no-footer" style="width: 100%;" role="grid"
    aria-describedby="hoverable-data-table_info">
    <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="Last name: activate to sort column descending" style="width: 67px;">Họ
            </th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="1"
                aria-label="First name: activate to sort column ascending" style="width: 66px;">Tên</th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="1"
                aria-label="User name: activate to sort column ascending" style="width: 66px;">Username</th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="1"
                aria-label="Position: activate to sort column ascending" style="width: 159px;">Type</th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="1"
                aria-label="Start date: activate to sort column ascending" style="width: 62px;">Ngày tạo tài khoản</th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="1"
                aria-label="E-mail: activate to sort column ascending" style="width: 154px;">E-mail</th>
        </tr>
    </thead>

    <tbody class="show-data">
        @foreach($allaccount as $account)
        <tr role="row" class="odd">
            <td>{{$account->lastname}}</td>
            <td class="sorting_1" style="color: #1b223c;font-weight: 500;font-size: 14px;">{{$account->firstname}}</td>
            <td><a href="{{URL::to('admin/detailuser/' . $account->username)}}">{{$account->username}}</a></td>
            <td>{{$account->type}}</td>
            <td>{{$account->time}}</td>
            <td>{{$account->email}}</td>
        </tr>

        @endforeach
    </tbody>
</table>
<div class="row justify-content-between bottom-information">
    <div class="dataTables_info" id="hoverable-data-table_info" role="status" aria-live="polite"></div>
    <div class="dataTables_paginate paging_simple_numbers" id="hoverable-data-table_paginate">
        {!! $allaccount->links() !!}
    </div>
</div>