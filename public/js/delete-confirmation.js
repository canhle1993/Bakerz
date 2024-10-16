function confirmDelete(userId, formId = null) {
    Swal.fire({
        title: "Are you sure?",
        text: "This will move the admin to the blacklist and restrict their access!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            if (formId) {
                document.getElementById(formId).submit();
            } else {
                document.getElementById("delete-form-" + userId).submit();
            }
        }
    });
}
