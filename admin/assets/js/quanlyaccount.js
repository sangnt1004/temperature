$(document).ready(function() {
    $('#inputForm').bootstrapValidator({
            feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
             email: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập email'
                    },
                    emailAddress: {
                        message: 'Email bạn nhập không đúng'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập mật khẩu'
                    },
                    stringLength: {
                        min: 4,
                        message: 'Tối thiểu 4 ký tự'
                    }
                }
            },
            fullName: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập họ & tên'
                    }
                }
            },
            // 'form-field-radio': {
            //     validators: {
            //         notEmpty: {
            //             message: 'Vui lòng chọn giới tính'
            //         }
            //     }
            // },
            cmnd:{
                validators: {
                    notEmpty:{
                        message: 'Vui lòng nhập CMND'
                    },
                    stringLength:{
                        min: 9,
                        max: 12,
                        message: 'Vui lòng nhập đúng số CMND'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập địa chỉ'
                    }
                }
            },
            phoneNumber: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập số điện thoại'
                    }
                }
            }
        }
    });
});
