<div class="card">
    <div class="card-header card-header-primary card-header-icon">
        <div class="card-icon">
            <i class="material-icons">category</i>
        </div>

        <h3 class="card-title">Lista de Artículos
            <button style="float: right;" class="btn btn-primary btn-sm btn-new">Agregar<div class="ripple-container">
                </div></button>
        </h3>

    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover table-striped" id="list-items">
                <thead class="text-primary">
                    <!-- <th>#</th> -->
                    <th>Nombre</th>
                   
                </thead>

                <tbody>
                    <?php
                    foreach ($list as $o) {
                        echo '<tr data-item="' . $o['id'] . '" data-json=\'' . json_encode($o) . '\'>';
                       
                        acciones('delete-edit');
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require 'form.php';?>

<script>
$('#list-items').DataTable();
</script>

<script>
$('.btn-new').on('click', function() {
    $('#new_item').modal('show');
});

var select = '';

function del(e) {
    select = $(e).closest('tr');
    $('#delete_item').modal('show');
}

function edit(e) {
    select = $(e).closest('tr');
    var data = JSON.parse(JSON.stringify(select.data('json')));
    var aux = '';
    $.each(data, function(key, value) {
        aux = $('#edit_item form').find("input[name='" + key + "']");
        aux.val(value);
    });
    $('#edit_item').modal('show');
};

</script>