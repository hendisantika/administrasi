// File Input 
$(document).on('ready', function () {
    $("#foto").fileinput({
        showCaption: false,
        previewFileType: "Image",
        browseClass: "btn btn-success",
        browseLabel: "Pilih Foto Antum",
        browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
        removeClass: "btn btn-danger",
        removeLabel: "Delete",
        removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
        uploadClass: "btn btn-info",
        uploadLabel: "Upload",
        uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i> "
    });
});

// Script Autocomplete-->
$(document).ready(function () {
    $("#nama1").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
    $("#nama2").autocomplete({
        source: "../anggota/get_anggota" // name of controller followed by function
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
        return $("<li></li>")
                .data("item.autocomplete", item)
                .append(inner_html)
                .appendTo(ul);
    };
});