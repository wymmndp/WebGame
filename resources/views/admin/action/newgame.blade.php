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
        <div class="bg-white border rounded">
            <div class="row no-gutters">
                <div class="col-lg-4 col-xl-3">
                    <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                        <div class="card text-center widget-profile px-0 border-0">

                        </div>
                        <hr class="w-100">
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="profile-content-right py-5">
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="settings" role="tabpanel"
                                aria-labelledby="settings-tab">
                                <div class="mt-5">
                                    <form>
                                        <div class="form-group row mb-6">
                                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Game
                                                Image</label>
                                            <div class="col-sm-8 col-lg-10">
                                                <div class="custom-file mb-1">
                                                    <input type="file" name="files" multiple class="custom-file-input"
                                                        id="file-img" required="">
                                                    <label class="custom-file-label" for="coverImage">Choose
                                                        file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="gameName">Game name</label>
                                            <input type="text" class="form-control" id="gameName"
                                                placeholder="Nhập tên game">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="description">Description</label>
                                            <div class="description" id="description"></div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="coin">Coin</label>
                                            <input type="text" class="form-control" id="coin">
                                        </div>

                                        <div class="d-flex justify-content-end mt-5">
                                            <a href="#" type="submit" class="upload btn btn-primary mb-2 btn-pill">Add
                                                New Game
                                            </a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('asset/ckeditor5-build-classic/ckeditor.js')}}"></script>
    <script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
    </script>

    <script src="{{asset('js/signingoogle.js')}}">

    </script>
    <script src="{{asset('js/upload.js')}}">
    </script>
    @stop

</body>

</html>