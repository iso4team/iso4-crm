$(document).ready(function (e) {
    e.preventDefault;

    //$('.select-search').selectpicker({"liveSearch": true});
    
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
    
    $('.datatable tfoot th').each( function () {//  ajout filtres recherches par colonne
          var title = $(this).text();
          $(this).html( '<input type="text" placeholder=" '+title+'" />' );
      } );
    $(".datatable").DataTable({
        /*"ajax": {
            "url": baseUrl + $(this).attr("data-url"),
            "cache": true
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }*/
    }).columns().every(function () {
        var b = this;
        $("input", this.header()).on("keyup change", function () {
            b.search() !== this.value && b.search(this.value).draw();
        });
    });
    
});

$.extend({
    sendGETRequest: function (url) {
        var result = null;
        $.ajax({
            type: 'GET',
            url: url,
            cache: false,
            async: false,
            success: function (a) {
                result = a;
            },
            error: function (a) {
                result = a;
            }
        });
        console.log(result);
        return result;
    }
});

$.extend({
    sendPOSTRequest: function (url, data) {
        var result = null;
        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            dataType: "json",
            cache: false,
            async: false,
            success: function (a) {
                result = a;
            },
            error: function (a) {
                result = a;
            }
        });
        console.log(result);
        return result;
    }
});

$.extend({
    sendAjaxGETRequest: function (url) {
        var result = null;
        $.ajax({
            type: 'GET',
            url: url,
            dataType: "json",
            async: false,
            success: function (a) {
                console.log(a);
                result = a;
            },
            error: function (a) {
                console.log(a);
                result = a;
            }
        });
        return result;
    }
});

$.extend({
    sendAjaxPOSTRequest: function (url, d) {
        var result = null;
        $.ajax({
            type: 'POST',
            url: url,
            data: d,
            dataType: "json",
            processData: 0,
            contentType: 0,
            async: false,
            success: function (a) {
                console.log(a);
                result = a;
            },
            error: function (a) {
                console.log(a);
                result = a;
            }
        });
        return result;
    }
});

function getClass4showDocument(url) {
    console.log(url);
    if (url === null) {
        return "";
    }
    if (url.indexOf('.') === -1) {
        return "";
    }
    var parse = url.split('.');
    if ((parse[1] === 'pdf') || (parse[1] === 'PDF')) {
        return "class='showDocumentDialog'";
    } else {
        return "class='showDocumentImgBtn'";
    }
}

function showDocumentDialog(fileName, w, h) {
    $("#dialog").dialog({
        modal: true,
        title: "Visualisation",
        width: w,
        height: h,
        position: [300, 28],

        open: function () {
            var object = '<object data="{FileName}" type="' + getMimeType(fileName) + '" width="100%" height="100%">';
            object += 'If you are unable to view file, you can download from <a href = "{FileName}">here</a>';
            object += ' or download <a target = "_blank" href = "http://get.adobe.com/reader/">Adobe PDF Reader</a> to view the file.';
            object += "</object>";
            object = object.replace(/{FileName}/g, fileName);
            $("#dialog").html(object);
        }
    });
}

function getMimeType(fileName) {
    var mimet = "application/pdf";
    var parse = fileName.split('.');

    console.log(parse[0] + " " + parse[1]);

    if ((parse[1] === 'doc') || (parse[1] === 'dot')) {
        mimet = 'application/msword';
    }
    if (parse[1] === 'docx') {
        mimet = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
    }
    if (parse[1] === 'dotx') {
        mimet = 'application/vnd.openxmlformats-officedocument.wordprocessingml.template';
    }
    if (parse[1] === 'docm') {
        mimet = 'application/vnd.ms-word.document.macroEnabled.12';
    }
    if (parse[1] === 'dotm') {
        mimet = 'application/vnd.ms-word.template.macroEnabled.12';
    }
    if (parse[1] === 'pdf') {
        mimet = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
    }
    return mimet;
}

function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $("#documentImgModal .modal-dialog");
    $dialog.css("margin-top", 0);
    $dialog.css("margin-left", 300);
}
