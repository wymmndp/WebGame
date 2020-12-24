$(document).ready(function() {

    const urlParams = new URLSearchParams(window.location.search);
    const code = urlParams.get('code');
    const redirect_uri = "http://localhost/projectwebgame/public/admin/newgame" // replace with your redirect_uri;
    const client_secret = "kY4g1VYCvxJ6y1_TXX7aSYV7"; // replace with your client secret
    const scope = "https://www.googleapis.com/auth/drive";
    var access_token = "https://oauth2.googleapis.com/token";
    var client_id = "886207090763-0oecgah0u70bnd7t2sq3e8cnh7dus467.apps.googleusercontent.com" // replace it with your client id;


    $.ajax({
        type: 'POST',
        url: "https://www.googleapis.com/oauth2/v4/token",
        data: {
            code: code,
            redirect_uri: redirect_uri,
            client_secret: client_secret,
            client_id: client_id,
            scope: scope,
            grant_type: "authorization_code"
        },
        dataType: "json",
        success: function(resultData) {


            localStorage.setItem("accessToken", resultData.access_token);
            localStorage.setItem("refreshToken", resultData.refreshToken);
            localStorage.setItem("expires_in", resultData.expires_in);
            window.history.pushState({}, document.title, "/GitLoginApp/" + "upload.html");




        }
    });

    function stripQueryStringAndHashFromPath(url) {
        return url.split("?")[0].split("#")[0];
    }

    var Upload = function(file) {
        this.file = file;
    };

    Upload.prototype.getType = function() {
        localStorage.setItem("type", this.file.type);
        return this.file.type;
    };
    Upload.prototype.getSize = function() {
        localStorage.setItem("size", this.file.size);
        return this.file.size;
    };
    Upload.prototype.getName = function() {
        return this.file.name;
    };
    Upload.prototype.doUpload = function() {
        var that = this;
        var formData = new FormData();

        // add assoc key values, this will be posts values
        formData.append("file", this.file, this.getName());
        formData.append("upload_file", true);

        $.ajax({
            type: "POST",
            beforeSend: function(request) {
                request.setRequestHeader("Authorization", "Bearer" + " " + localStorage
                    .getItem("accessToken"));

            },
            url: "https://www.googleapis.com/upload/drive/v2/files",
            data: {
                uploadType: "media"
            },
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) {
                    myXhr.upload.addEventListener('progress', that.progressHandling, false);
                }
                return myXhr;
            },
            success: function(data) {
                console.log(data);
            },
            error: function(error) {
                console.log(error);
            },
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            timeout: 60000
        });
    };


    $(".upload").on("click", function(e) {
        var file = $("#file-img")[0].files[0];
        var upload = new Upload(file);

        // maby check size or type here with upload.getSize() and upload.getType()

        // execute upload
        upload.doUpload();
        alert(file)
    });




});