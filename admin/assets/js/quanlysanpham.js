$(document).ready(function() {
    $('#inputForm').bootstrapValidator({
          feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
             tenSanPham: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập tên sản phẩm'
                    }
                }
            },
            moTa: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập mô tả'
                    }
                }
            },
            giaGoc: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập giá gốc'
                    }
                }
            },
            giaNiemYet: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng chọn giới niêm yết'
                    }
                }
            },
            soLuong:{
                validators: {
                    notEmpty:{
                        message: 'Vui lòng nhập số lượng'
                    }
                }
            },
            soLuongHienThi: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập số lượng hiển thị'
                    }
                }
            },
        }
    });
});
