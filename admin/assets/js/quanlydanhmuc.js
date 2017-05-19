$(document).ready(function() {
    $('#inputForm').bootstrapValidator({
          feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
             tenDanhMuc: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập tên danh mục'
                    },
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