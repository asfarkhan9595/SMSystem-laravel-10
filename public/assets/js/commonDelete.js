// commonDelete.js
function showDeleteConfirmation(id, url) {
    event.preventDefault();

    Swal.fire({
        title: 'Are you sure?',
        text: 'You won\'t be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            // If confirmed, submit the form
            document.getElementById('delete-form-' + id).action = url;
            document.getElementById('delete-form-' + id).submit();
        }
    });
}
