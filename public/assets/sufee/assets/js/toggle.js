( function ( $ ) {
    $('#exampleModalCenter').on('show.bs.modal', function(e) {
        var link     = $(e.relatedTarget) ,
            modal    = $(this),
            numeroEnlace = link.data("id");
            modal.find(".modal-body #link_number").val(numeroEnlace);
    });

    /**
     * modalCenter
     */
    $('#modalCenter').on('show.bs.modal', function(e) {
        var link     = $(e.relatedTarget) ,
            modal    = $(this),
            link_number_down = link.data("linknumber");
            modal.find(".modal-body #link_number_down").val(link_number_down);
    });

} )( jQuery );
