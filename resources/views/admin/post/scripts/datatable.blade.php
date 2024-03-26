<script>
    function searchColumsDataTable(datatable) {
        datatable.api().columns([1, 2, 3, 4, 5,6,7]).every(function() {
            var column = this;
            var input = document.createElement("input");
            if (column.selector.cols == 6 ||column.selector.cols == 7 ) {
                input.setAttribute('type', 'date');
            } else if (column.selector.cols == 2) {
                input = document.createElement("select");
                createSelectColumnUniqueDatatableAll(input, @json($status))
            }
            else if ( column.selector.cols == 3) {
                input = document.createElement("select");
                createSelectColumnUniqueDatatableAll(input, @json($featured))
            }

            input.setAttribute('placeholder', 'Nhập từ khóa');
            input.setAttribute('class', 'form-control');

            $(input).appendTo($(column.footer()).empty())
                .on('change', function() {
                    column.search($(this).val(), false, false, true).draw();
                });
        });
    }
    $(document).ready(function() {
        // define columns for the datatables
        columns = window.LaravelDataTables["adminTable"].columns();
        toggleColumnsDatatable(columns);
    });
</script>
