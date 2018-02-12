$(function () {
    $('.js-modal-buttons .btn').on('click', function () {
        var target = $(this).data('color');
        $('#mdModal .modal-content').removeAttr('class').addClass('modal-content modal-col-' + target);
        $('#mdModal').modal('show');
    });
});