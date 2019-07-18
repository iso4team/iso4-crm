$(document).ready(function (e) {
    e.preventDefault;

    var location = window.location;
    var hostname = location.hostname;
    console.log(hostname);
    var baseUrl = "";
    if ((hostname !== 'localhost') && (hostname !== '12.0.0.1')) {
        baseUrl = location.protocol + "//" + hostname + "/";
    } else {
        baseUrl = location.protocol + "//" + hostname + "/cursus/";
    }
    console.log("baseUrl [" + baseUrl + "]");

    $("#table-paiement").DataTable({
        "ajax": {
            "url": baseUrl + "paiement/liste",
            "cache": true
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    }).columns().every(function () {
        var b = this;
        $("input", this.header()).on("keyup change", function () {
            b.search() !== this.value && b.search(this.value).draw();
        });
    });

    $("#table-paiement thead th").each(function () {
        var b = $(this).text();
        if (b === 'INE') {
            $(this).html('<input type="" class="form-control" placeholder="' + b + '" />');
        }
    });

    $("#table-user").DataTable({
        "ajax": {
            "url": baseUrl + "users/liste",
            "cache": true
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    });

    $("#table-user thead th").each(function () {
        var b = $(this).text();
        if (b) {
            $(this).html('<input type="" class="form-control" placeholder="' + b + '" />');
        }
    });

    // - Recuperation trans
    $("#select-ine").on("change", function (e) {
        e.preventDefault();

        var idEtud = $(this).val();
        console.log(idEtud);
        var tranch = $("#select-tranche");
        var result = $.sendAjaxGETRequest(baseUrl + 'paiement/' + idEtud + '/tranches');

        tranch.empty();

        if (result.code === '000') {
            if (result.data.length === 0) {
                tranch.append('<option value="">Pas de tranches pour cet INE</option>');
            } else {
                var data = result.data;
                for (i = 0; i < data.length; i++) {
                    tranch.append('<option value="' + data[i].id + '">Tranche ' + data[i].tranche + ' ' + data[i].montant + '</option>');
                }
            }
        } else {
            console.log(result.msge);
        }
    });


    $(document).on('click', '#deleteUser', function (e) {
        e.preventDefault();
        var idUser = $(this).attr('data-token');
        console.log(idUser);
        if (confirm("Êtes vous sur de vouloir de supprimer cet utilisateur ?")) {
            var result = $.sendAjaxGETRequest('users/' + idUser + '/delete');
            alert(result.msge);
            location.reload();
        }
    });

    // - Change YEAR
    $("#select-annee").on("change", function (e) {
        e.preventDefault();
        var id = $(this).val();
        var an = $('#select-annee option:selected').text();
        console.log(id + " " + an);
        var result = $.sendAjaxGETRequest(baseUrl + 'paiement/change-year/' + id);
        alert(result.msge);
        location.reload();
    });

    // - Generate Tranche
    $("#btn-generateTranches").on("click", function (e) {
        e.preventDefault();

        var id = $('#select-annee option:selected').val();
        var an = $('#select-annee option:selected').text();
        console.log(id + " " + an);

        $('#waitDialog').modal('show');

        $.ajax({
            type: 'GET',
            url: baseUrl + 'paiement/generate-tranches/' + id,
            dataType: "json",
            success: function (a) {
                console.log(a);
                $('#waitDialog').modal('hide');
                alert(a.msge);
                location.reload();
            },
            error: function (a) {
                console.log(a);
                $('#waitDialog').modal('hide');
                alert(a.msge);
            }
        });
    });

    $(document).on('click', '.showDocumentDialog', function (e) {
        e.preventDefault();
        showDocumentDialog($(this).attr('href'), 800, 600);
    });

    $(document).on('click', '.showDocumentImgBtn', function (e) {
        e.preventDefault();
        var sr = $(this).attr('href');
        $('#documentImgModal .modal-body img').attr('src', sr);
        $('#documentImgModal').modal('show');
    });

    $('.modal').on('show.bs.modal', centerModal);
    $(window).on("resize", function () {
        $('.modal:visible').each(centerModal);
    });

    $("#editPayment").on("show.bs.modal", function (e) {
        var link = $(e.relatedTarget);
        $(this).find(".modal-body").load(link.attr("url"));
    });
});