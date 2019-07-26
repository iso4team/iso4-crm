$(document).ready(function (e) {
    e.preventDefault;

     var location = window.location;
    var hostname = location.hostname;
    console.log(hostname);
    var baseUrl = "";
    if ((hostname !== 'localhost') && (hostname !== '12.0.0.1')) {
        baseUrl = location.protocol + "//" + hostname + "/iso4-crm/";
    } else {
        baseUrl = location.protocol + "//" + hostname + "/iso4-crm/";
    }
    console.log("baseUrl [" + baseUrl + "]");

    // - Ajout
    $("form.form-add").on("submit", function (e) {
        e.preventDefault();

        if (confirm("Voulez-vous confirmer l'ajout ?")) {
            $(".loading-div").show();

            var donnees = new FormData($(this)[0]);
            var actionU = baseUrl + $(this).attr('action');
            $.ajax({
                type: "POST",
                url: actionU,
                data: donnees,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    $(".loading-div").hide();
                    alert(data);
                    location.reload();
                },
                error: function (data) {
                    console.log(data);
                    $(".loading-div").hide();
                }
            });
        }
        return false;
    });


    $('#loadFile').on('show.bs.modal', function (e) {
        var button = e.relatedTarget;
        if (button !== null){
            $("form#loadForm").attr("action", button.id);
        }
    });
});
