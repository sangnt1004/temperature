$(document).ready(function() {
    $('#inputForm').bootstrapValidator({
          feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
             tenBox: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập tên box'
                    },
                }
            },
            moTa: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập mô tả'
                    },
                }
            },
            // 'input-file-2': {
            //     validators: {
            //         notEmpty: {
            //             message: 'Vui lòng chọn hình ảnh'
            //         }
            //     }
            // }
        }
    });
});