<table id="table_id" class="table row-border cell-border hover">
    <thead class="thead-dark">
    <th>Id</th>
    <th>Nome</th>
    <th>Valor</th>
    </thead>
</table>
<script>
    $(document).ready(function() {
        $('#loaderFileExport').addClass('loader-none');
        $('#table_id').DataTable( {
            "ajax":{
                "url" : "index.php?m=Dashboard&a=getTabela",
                "type": "POST"
            },
            "ordering": true,
            "lengthMenu": [ 10, 25, 50, 75, 100 ],
            "lengthChange": false,

            "oLanguage": {
                "sProcessing": "Aguarde enquanto os dados são carregados ...",
                "sLengthMenu": "Mostrar _MENU_ registros por página",
                "sZeroRecords": "Carregando..",
                "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
                "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
                "sInfoFiltered": "",
                "sSearch": "Procurar",
                "oPaginate": {
                    "sFirst": "Primeiro",
                    "sPrevious": "Anterior",
                    "sNext": "Próximo",
                    "sLast": "Último"
                }
            },
            "responsive":true,
            "FixedHeader":true
        } );
    } );
</script>


