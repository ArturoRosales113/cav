$('#familyDestroyModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var route = button.data('route')
    var title = button.data('title')
    var id = button.data('id')
    var modal = $(this)
    modal.find('#familyDestroyModalForm').attr('action', route)
    modal.find('#familyDestroyModalLabel').text('Eliminar ' + title)
    modal.find('#FamilyDestroyTitle').text(title)
    modal.find('#familyDestroyModalFormSelect option[value="' + id + '"]').attr("disabled", true)
})
$('#familyDestroyModal').on('hidden.bs.modal', function (event) {
    var modal = $(this)
    modal.find('#familyDestroyModalForm').attr('action', '')
    modal.find('#familyDestroyModalLabel').text('Eliminar ')
    modal.find('#FamilyDestroyTitle').text('')
    modal.find('#familyDestroyModalFormSelect option').prop('selected', false).attr('disabled', false)
})
$('#familyDestroyModal input[name="transfer"]').on('click', function () {
    var radio = $(this)
    if (radio.prop('value') == 'false') {
        console.log('falso')
        $('#familyDestroyModalFormSelect').attr('disabled', true)

    } else {
        $('#familyDestroyModalFormSelect').attr('disabled', false)
        console.log('verdadero')
    }
})

//Preview thumbnail de logo y de imagen en formularios de creacion y edicion de todos los modelos
$('input[name="logo"]').change(function (e) {
    var reader = new FileReader();
    reader.onload = function (e) {

        $('#familyFormLogoPreview').prop('src', e.target.result)
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
})


//Preview thumbnail de logo y de imagen en formularios de creacion y edicion de todos los modelos
$('input[name="photo"]').change(function (e) {
    var reader = new FileReader();
    reader.onload = function (e) {

        $('#familyFormPhotoPreview').prop('src', e.target.result)
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
})
