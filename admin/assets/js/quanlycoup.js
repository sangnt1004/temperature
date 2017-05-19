$(document).ready(function(){
    $('#inputForm').bootstrapValidator({
        feedbackIcons:{
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields:{
            applicationObject:{
                validators:{
                    notEmpty:{
                        message:'vui lòng nhập đối tượng'
                    }
                }
            }, applicationNumber:{
                validators:{
                    notEmpty:{
                        message:'vui lòng nhập đối tượng'
                    }
                }
            },  miniValue:{
                validators:{
                    notEmpty:{
                        message:'vui lòng nhập giá trị tối thiểu'
                    }
                }
            }, applicationGround:{
                validators:{
                    notEmpty:{
                        message:'vui lòng nhập đối tượng'
                    }
                }
           
            }, coupCode:{
                validators:{
                    notEmpty:{
                        message:'vui lòng nhập đối tượng'
                    }
                }
            }
        }
    });
});