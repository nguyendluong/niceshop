$(document).ready(function () {
    // variable declaration
    var newsTable;
    var suppliersTable;
    var productsTable;

    // datatable initialization
    if ($("#js-list-news-datatable").length > 0) {
        newsTable = $("#js-list-news-datatable").DataTable({
            'columnDefs': [{
                "orderable": false,
                "targets": [3]
            }]
        });
    };

    if ($("#js-supplier-list-datatable").length > 0) {
        suppliersTable = $("#js-supplier-list-datatable").DataTable({
            'columnDefs': [{
                "orderable": false,
                "targets": [5]
            }]
        });
    };

    if ($("#js-list-product-datatable").length > 0) {
        productsTable = $("#js-list-product-datatable").DataTable({
            'columnDefs': [{
                "orderable": false,
                "targets": [6]
            }]
        });
    };
});