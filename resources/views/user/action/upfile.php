<form method="POST" class="form-horizontal" enctype="multipart/form-data" action="/profile">
    {{csrf_field()}}
    <div class="text-center">
        <h6> Choose image </h6>
        <input type="file" name="avatar" class="text-center center-block well well-sm">
    </div>
 </form>