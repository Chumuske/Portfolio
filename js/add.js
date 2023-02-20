$(function() {
    $('#view_user_message').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var message = button.data('message');
        var modal = $(this);
        modal.find('#user_message').val(message);
    });
});