$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.ajax({
    type: "post",
    url: "{{  }}",
    data: "data",
    success: function (response) {
        
    }
});
function validate() {
    document.forms[0].submit();
    $(".invalid-message").removeClass('d-none');
    $(".form-control").addClass('invalid-input');
}