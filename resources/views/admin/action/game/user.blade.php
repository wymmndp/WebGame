<table id="hoverable-data-table" class="table table-hover nowrap dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="hoverable-data-table_info">
    <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Last name: activate to sort column descending" style="width: 67px;"><input id="selectAll" type="checkbox">
            </th>
            <th class="sorting" tabindex="0" aria-controls="hoverable-data-table" rowspan="1" colspan="1" aria-label="User name: activate to sort column ascending" style="width: 66px;">Username</th>
        </tr>
    </thead>

    <tbody class="show-data">
        @foreach($allaccount as $account)
        <tr role="row" class="odd">
            <td><input type="checkbox" data-username="{{$account->username}}" value="{{$account->username}}" class="check"></td>
            <td class="sorting_1" style="color: #1b223c;font-weight: 500;font-size: 14px;">{{$account->username}}</td>
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