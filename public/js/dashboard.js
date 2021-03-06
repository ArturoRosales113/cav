$('#destroyModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var route = button.data('route')
    var title = button.data('title')
    var id = button.data('id')
    var modal = $(this)
    modal.find('#destroyModalForm').attr('action', route)
    modal.find('#destroyModalLabel').text('Eliminar ' + title)
    modal.find('#destroyTitle').text(title)
    modal.find('#destroyModalFormSelect option[value="' + id + '"]').attr("disabled", true)
})

$('#destroyModal').on('hidden.bs.modal', function (event) {
    var modal = $(this)
    modal.find('#destroyModalForm').attr('action', '')
    modal.find('#destroyModalLabel').text('Eliminar ')
    modal.find('#destroyTitle').text('')
    modal.find('#destroyModalFormSelect option').prop('selected', false).attr('disabled', false)
})

$('#destroyModal input[name="transfer"]').on('click', function () {
    var radio = $(this)
    if (radio.prop('value') == 'false') {
        console.log('falso')
        $('#destroyModalFormSelect').attr('disabled', true)

    } else {
        $('#destroyModalFormSelect').attr('disabled', false)
        console.log('verdadero')
    }
})

$('#eraseModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var route = button.data('route')
    var title = button.data('title')
    var id = button.data('id')
    var modal = $(this)
    modal.find('#destroyModalForm').attr('action', route)
})

$('#eraseModal').on('hidden.bs.modal', function (event) {
    var modal = $(this)
    modal.find('#destroyModalForm').attr('action', '')
})

//Preview thumbnail de logo y de imagen en formularios de creacion y edicion de todos los modelos
$('input[name="logo"]').change(function (e) {
    var reader = new FileReader();
    reader.onload = function (e) {

        $('#formLogoPreview').prop('src', e.target.result)
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
})

//Preview thumbnail de logo y de imagen en formularios de creacion y edicion de todos los modelos
$('input[name="icon_path"]').change(function (e) {
    var reader = new FileReader();
    reader.onload = function (e) {

        $('#formIconPreview').prop('src', e.target.result)
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
})


//Preview thumbnail de logo y de imagen en formularios de creacion y edicion de todos los modelos
$('input[name="photo"]').change(function (e) {
    var reader = new FileReader();
    reader.onload = function (e) {

        $('#formPhotoPreview').prop('src', e.target.result)
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
})

$('input[name="img_path"]').change(function (e) {
    var reader = new FileReader();
    reader.onload = function (e) {

        $('#formPhotoPreview').prop('src', e.target.result)
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
})


$('input[type="file"]').change(function (e) {
    var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
})


$('input[name="pdf_path"]').change(function (e) {
    var reader = new FileReader();
    reader.onload = function (e) {

        $('#formFichaPreview').prop('src', e.target.result)
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
})

$('input[name="banner_path"]').change(function (e) {
    var reader = new FileReader();
    reader.onload = function (e) {

        $('#formBannerPreview').prop('src', e.target.result)
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
})

$('input[name="article_img_path"]').change(function (e) {
    var reader = new FileReader();
    reader.onload = function (e) {

        $('#aplication_articlePhotoPreview').prop('src', e.target.result)
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
})

CKEDITOR.replace( 'body' );

