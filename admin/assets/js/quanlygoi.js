$(document).ready(function() {
    $('#inputForm').bootstrapValidator({
          feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
             tenGoi: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập tên gói'
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
            thoiHan: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập thời hạn'
                    }
                }
            },
            giaGoi: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập giá gói'
                    }
                }
            },
            giaNiemYet: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập giá niêm yết'
                    }
                }
            }
        }
    });
});