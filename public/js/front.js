$('#pyctModal').on('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = $(event.relatedTarget)
    // Extract info from data-* attributes
    var img = button.data('whatever') 
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('#pyctImg').attr("src", img)
})

function productCollapse(){
    $('#productsCollapse').collapse('toggle');
}
