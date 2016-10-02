$(document).ready(function(){
    console.log("Fileupload script ready!");

    var file;
    //Check if the user selected an image
    $('#file-selection').on("change", function(){
        console.log("User changed the image selection, current image: " + $(this).val());
        console.log("Selected file name: " + $(this).get(0).files[0].name);

        var previewImg = $("#previewImg");
        file = document.querySelector('input[type=file]').files[0];
        var fileReader = new FileReader();

        fileReader.addEventListener("load", function(){
            previewImg.src = fileReader.result;
        }, false);

        $("#preview").removeClass("hidden");
        $("#preview").append(previewImg);

        if (file){
            fileReader.readAsDataURL(file);
        }
    });

    $("#uploadForm").on("submit", function(){
        if (file){
            var formData = new FormData();
            formData.append("picture", file);
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "fileupload",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
            }).done(function(url){
                console.log("Ajax call done! URL: " + url);
                $("#profilePicture").prop('src', url);
            }). fail(function(){
                console.log("Ajax call failed!");
            });
        }
        return false;
    })
});
