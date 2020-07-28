<!-- DataTable Bootstrap -->
<link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

<style>
    #dataTableBuilder_wrapper table {
        width: 100% !important
    }

    #dataTableBuilder_wrapper .form-group a i,
    #dataTableBuilder  .btn-group a i,
    #dataTableBuilder  .btn-group button i,
    #dataTableBuilder_wrapper .form-group button i {
        font-size: 17px !important;
    }

    #dataTableBuilder_wrapper .form-group a,
    #dataTableBuilder_wrapper .form-group button,
    #dataTableBuilder  .btn-group  a,
    #dataTableBuilder  .btn-group button {
        width: 43px;
        height: 38px;
        margin: 5px;
        font-size: 12px !important;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 10px;
    }

    #dataTableBuilder_wrapper thead th[title="Action"] {
        width: 195px !important;
    }

    table.dataTable tbody th,
    table.dataTable tbody td {
        vertical-align: baseline;
        text-align: center
    }
    table.dataTable thead th, table.dataTable tfoot th {
        text-align: center
    }
    #dataTableBuilder_info,
    #dataTableBuilder_paginate {
        margin: 10px 0;
        padding: 0 20px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover,
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: linear-gradient(to bottom, #17a2b8 0%, #20c997 100%);
        color: #fff !important;
        border: 0;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        border: 0
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled ,
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active{
        cursor: default;
        color: #000000 !important;
        border: 1px solid transparent;
        background: #a6a6a64d;
        box-shadow: none;
        border: 0
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        border: 0
    }

    #dataTableBuilder_wrapper {
        padding: 10px
    }
    #dataTableBuilder_filter input[type="search"] {
        border: 1px solid #DDD;
        margin: 0 10px;
        width: 201px;
    }
    #dataTableBuilder_wrapper .dt-buttons button {
        margin: 0 5px 5px

    }
    .buttons-create {
        background-color: #007bff;
        color: #FFF;
        border-color: #007bff;
    }
    .buttons-export {
        background-color: #01a8c9;
        color: #FFF;
        border-color: #01a8c9;
    }
    .buttons-print {
        background-color: #d81b60;
        color: #FFF;
        border-color: #d81b60;
    }
    .buttons-reset {
        background-color: #df4235;
        color: #FFF;
        border-color: #df4235;
    }
    .buttons-reload {
        background-color: #8368fc;
        color: #FFF;
        border-color: #8368fc;
    }
</style>
<?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/layouts/datatables_css.blade.php ENDPATH**/ ?>