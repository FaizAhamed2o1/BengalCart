$(document).ready(function() {
    const saveButton = $('#saveSubCategory');
    const deleteButton = $('#deleteSub');
    const storeRoute = saveButton.data('store-route');
    const categoryRoute = saveButton.data('category-route');

    const errorContainer = $('#errorContainer');
    const loadingSpinner = $('#loadingSpinner');
    errorContainer.hide();

    saveButton.on('click', function() {
        loadingSpinner.removeClass('hidden');
        saveButton.prop('disabled', true);

        const formData = new FormData();
        formData.append('name', $('#sub-category-name').val());
        formData.append('category_id', $('#category-id').val());

        axios.post(storeRoute, formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
            .then(response => {
                toastr.success("Sub category saved successfully!");
                setTimeout(() => {
                    window.location.href = categoryRoute;
                }, 2000);
            })
            .catch(error => {
                let errors = error.response.data.errors;
                errorContainer.show();
                errorContainer.text("*" + Object.values(errors).join('\n'));
            })
            .finally(() => {
                loadingSpinner.addClass('hidden');
                saveButton.prop('disabled', false);
            });
    });


    // delete method

    $(document).on('click', '#deleteSub', function () {
        const button = $(this);
        const id = button.data('id');

        if( confirm("Are you sure you want to delete this sub category?") )
        {
            axios.delete(`/api/subcategories/delete/${id}`)
                .then(response => {
                    toastr.success("Category deleted successfully!");
                    button.closest('tr').remove();
                })
                .catch(error => {
                    toastr.error("Failed to delete the category. Please try again.");
                });
        }
    });


});
