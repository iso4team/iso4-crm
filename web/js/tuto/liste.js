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

    var tableCandidats = $("#table-candidats").DataTable({
        "ajax": {
            "url": baseUrl + "candidats/liste",
            "cache": true
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        },
        "columnDefs": [
            {
                "targets": 0,
                "checkboxes": {
                    "selectRow": true
                }
            }
        ],
        "select": {
            "style": "multi"
        },
        "order": [[1, "asc"]]
    });

    tableCandidats.columns().every(function () {
        var b = this;
        $("input", this.header()).on("keyup change", function () {
            b.search() !== this.value && b.search(this.value).draw();
        });
    });

    $("#table-candidats thead th").each(function () {
        var b = $(this).text();
        if (b === 'INE') {
            $(this).html('<input type="" class="form-control" placeholder="' + b + '" />');
        }
    });

    $("#table-tuteurs").DataTable({
        "ajax": {
            "url": baseUrl + "tuteurs/liste",
            "cache": true
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    });
    
    $("#table-stats").DataTable({
        "ajax": {
            "url": baseUrl + "home/stats",
            "cache": true
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    });

    $("#table-planning").DataTable({
        "ajax": {
            "url": baseUrl + "planning/" + $("#id-tuteur").val() + "/list",
            "cache": true
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    });


    $("#table-surve-correct").DataTable({
        "ajax": {
            "url": baseUrl + "surve-correct/" + $("#id-tuteur").val() + "/list",
            "cache": true
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    });

    $("#table-activite-admin").DataTable({
        "ajax": {
            "url": baseUrl + "activite-admin/" + $("#id-tuteur").val() + "/list",
            "cache": true
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    });

    $("#table-changements").DataTable({
        "ajax": {
            "url": baseUrl + "changements/" + $("#id-tuteur").val() + "/list",
            "cache": true
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    });

    // Handle form submission event 
    $('#btn-migrate').on('click', function (e) {
        e.preventDefault();

        var form = $("#candidats-form");
        var rows = tableCandidats.column(0).checkboxes.selected();

        var result = $.sendPOSTRequest(form.attr("action"), form.serialize() + "&candidats=" + rows.join(",") + "");
        alert(result.msge);
        console.log(result);
        //location.reload();
    });

    // - Recuperation semestres
    $("select[name='niveau']").on("change", function (e) {
        e.preventDefault();

        var idNivo = $(this).val();
        console.log(idNivo);
        var update = $("select[name='semestre']");
        var result = $.sendAjaxGETRequest(baseUrl + 'tuteurs/' + idNivo + '/semestres');

        update.empty();

        if (result.code === '000') {
            if (result.data.length === 0) {
                update.append('<option value="">Pas de semestre pour ce niveau</option>');
            } else {
                update.append('<option value="">Choisissez un semestre</option>');
                var data = result.data;
                for (i = 0; i < data.length; i++) {
                    update.append('<option value="' + data[i].id + '">' + data[i].code + ' ' + data[i].designation + '</option>');
                }
            }
        } else {
            console.log(result.msge);
        }
    });
    
    // - Recuperation specialites
    $("select[name='discipline']").on("change", function (e) {
        e.preventDefault();

        var id = $(this).val();
        console.log(id);
        var update = $("select[name='specialite']");
        var result = $.sendAjaxGETRequest(baseUrl + 'tuteurs/' + id + '/specialites');

        update.empty();

        if (result.code === '000') {
            if (result.data.length === 0) {
                update.append('<option value="">Pas de spécialités pour cette discipline</option>');
            } else {
                update.append('<option value="">Choisissez une spécialité</option>');
                var data = result.data;
                for (i = 0; i < data.length; i++) {
                    update.append('<option value="' + data[i].id + '">' + data[i].intitule + '</option>');
                }
            }
        } else {
            console.log(result.msge);
        }
    });

    // - Recuperation plateformes
    $("#select-semestre").on("change", function (e) {
        e.preventDefault();

        var donnees = $("form[name=form-addPlanning]").serialize();
        console.log(donnees);
        var update = $("#select-url");
        var result = $.sendPOSTRequest(baseUrl + 'tuteur/plateformes', donnees);

        update.empty();
        if (result.code === '000') {
            if (result.data.length === 0) {
                update.append('<option value="">Aucune plateforme trouvée</option>');
            } else {
                update.append('<option value="">Choisissez une plateforme</option>');
                var data = result.data;
                for (i = 0; i < data.length; i++) {
                    update.append('<option value="' + data[i].lien + '">' + data[i].texte + '</option>');
                }
                $(update).selectpicker({"liveSearch": true});
            }
        } else {
            console.log(result.msge);
        }
    });

    // MAJ User
    $('#addUser').on('show.bs.modal', function (event) {
        var token = $(event.relatedTarget).attr('data-token');
        console.log("token = " + token);
        if (token !== undefined) {
            var parse = token.split(';');
            $("#selectUser").empty().append('<option value="' + parse[0] + '" selected>' + parse[1] + '</option>');
        } else {
            $("#selectUser").selectpicker({"liveSearch": true});
        }
        $(event.relatedTarget).removeAttr('data-token');
    });

    $('#addUser').on('hide.bs.modal', function (e) {
        location.reload();
    });

    $(document).on('click', '.deleteActivite', function (e) {
        e.preventDefault();
        var idActivite = $(this).data('token');
        var urlActivite = $(this).data('path');
        console.log(urlActivite + " " + idActivite);
        if (confirm("Êtes-vous sur de vouloir de supprimer cette ligne ?")) {
            var result = $.sendAjaxGETRequest(baseUrl + urlActivite + '/' + idActivite + '/delete');
            alert(result.msge);
            location.reload();
        }
    });

    // MAJ Planning
    $('#addPlanning').on('show.bs.modal', function (event) {
        var token = $(event.relatedTarget).attr('data-content');
        if (token) {
            var parse = JSON.parse(token);

            console.log(token);

            $("#id-planning").val(parse.id);
        }
    });

});