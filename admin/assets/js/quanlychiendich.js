$(document).ready(function() {
    $('#inputForm').bootstrapValidator({
          feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            tenChienDich: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập tên chiến dịch'
                    },
                }
            },
            maChienDich: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập mã chiến dịch'
                    }
                }
            },
            moTa: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập mô tả'
                    },
                }
            }
        }
    });
});