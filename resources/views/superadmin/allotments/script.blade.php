<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Get Flat
$(document).ready(function() {
        $('#block').change(function() {
            var blockId = $(this).val();
            if(blockId) {
                $.ajax({
                    url: '/get-flats/'+blockId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#flat_no').empty();
                        $('#flat_no').append('<option value="" selected>Select Flat No</option>');
                        $.each(data, function(key, value) {
                            $('#flat_no').append('<option value="'+ value.id +'">'+ value.flat_no +'</option>');
                        });
                    }
                });
            } else {
                $('#flat_no').empty();
                $('#flat_no').append('<option value="" selected>Select Flat No</option>');
            }
        });
    });

    // delete

    $(document).ready(function() {
    $('.delete-btn').on('click', function(event) {
        event.preventDefault();

        var $this = $(this);
        var id = $this.data('id');
        var url = '{{ route('allot.delete', ':id') }}'.replace(':id', id);


        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this item!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!'
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {

                        Swal.fire(
                            'Deleted!',
                            'Your item has been deleted.',
                            'success'
                        );


                        $this.closest('tr').fadeOut(400, function() {
                            $(this).remove();
                        });
                    },
                    error: function(xhr) {
                        Swal.fire(
                            'Error!',
                            'There was an issue deleting the item.',
                            'error'
                        );
                    }
                });
            }
        });
    });
});

function addRow() {
    var table = document.getElementById('productTable');
    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);
    
    // Sno column
    var cell1 = row.insertCell(0);
    cell1.innerHTML = rowCount + 1;

    // Invoice Type column
    var cell2 = row.insertCell(1);
    cell2.innerHTML = `<select type="text" class="form-control" name="Invoice_type[]">
                                            <option>Select Invoice Type</option>
                                                @foreach ($inv_type as $row)
                                                    <option value="{{$row->id}}">{{$row->type_name}}</option>
                                                @endforeach
                                        </select>`;

    // Amount column
    var cell3 = row.insertCell(2);
    cell3.innerHTML = '<input type="text" class="form-control" name="amount[]">';

    // Add button
    var cell4 = row.insertCell(3);
    cell4.innerHTML = '<button type="button" class="btn btn-success" onclick="addRow()">+</button>';

    // Delete button
    var cell5 = row.insertCell(4);
    cell5.innerHTML = '<button type="button" class="btn btn-danger" onclick="removeRow(this)">-</button>';
}

function removeRow(button) {
    var row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);

    // Update S.No after removing a row
    var table = document.getElementById('productTable');
    for (var i = 0; i < table.rows.length; i++) {
        table.rows[i].cells[0].innerHTML = i + 1;
    }
}

</script>