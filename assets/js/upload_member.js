$(document).ready(function() {
     
    $("#mem_name").focus();    

    $("#acc_fromdate").datepicker( {
        todayHighlight:!0, orientation:"top right", templates: {
            leftArrow: '<i class="la la-angle-left"></i>', rightArrow: '<i class="la la-angle-right"></i>'
        }
    });


    // 회원 정보 수정
    $("#member_upload_publish").on("click", function(e) {
        e.preventDefault() ;              

        var formData = new FormData() ; 

        if (isEmpty($("#mem_name").val())) {
            swal("회원명을 입력해주세요", "", "error");
            return 0;
        }

        if (isEmpty($("#mem_email").val())) {
            swal("이메일을 입력해주세요", "", "error");
            return 0;
        }

        swal({
            title: "확인",
            text: "수정하시겠습니까?",
            type: "success",
            showCancelButton: true,
            confirmButtonText: "완료",
            cancelButtonText: "취소"
        }).then(function(e) {

            if(e.value==true) { 
              
                formData.append("mem_no", $("#mem_no").val());  
                formData.append("mem_name", $("#mem_name").val());  
                formData.append("mem_email", $("#mem_email").val());

                $.ajax({
                    url: "/admin/member/upload/process",
                    type: "post",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        var data = JSON.parse(res) ;
                        if (data.result == "SUCCESS") {
                            document.location.href = "/admin/member";
                        } else {
                            swal(data.message) ;
                        }
                    }
                }) ;
            }
        })                    

    }) ;


    // 비밀번호 초기화
    $("#member_reset_password").on("click", function(e) {
        e.preventDefault() ;              

        var formData = new FormData() ; 

        swal({
            title: "확인",
            text: "비밀번호를 1234로 초기화하겠습니까?",
            type: "success",
            showCancelButton: true,
            confirmButtonText: "확인",
            cancelButtonText: "취소"
        }).then(function(e) {

            if(e.value==true) { 
              
                formData.append("mem_no", $("#mem_no").val());  

                $.ajax({
                    url: "/admin/member/resetpassword",
                    type: "post",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        var data = JSON.parse(res) ;
                        
                        if(data.result=="SUCCESS")
                            swal("비밀번호가 초기화되었습니다");
                         else
                            swal(data.message);
                    }
                }) ;

            }

        })                    

    }) ;
    

    // 캐시 추가
    $("#btnProvideCash").on("click", function(e) {
        e.preventDefault() ;              

        var formData = new FormData() ; 

        var product_id = $("#product_id").val();

        if (product_id == 0) {
            swal("추가할 캐시를 선택해주세요", "", "error");
            return 0;
        }

        swal({
            title: "확인",
            text: "캐시를 추가하시겠습니까?",
            type: "success",
            showCancelButton: true,
            confirmButtonText: "확인",
            cancelButtonText: "취소"
        }).then(function(e) {
            if(e.value==true) { 

                formData.append("mem_no", $("#mem_no").val());  
                formData.append("product_id", product_id);  
                
                $.ajax({
                    url: "/admin/purchase/providecash",
                    type: "post",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        var data = JSON.parse(res) ;

                        if(data.result=="SUCCESS") {
                            location.reload();
                        } else
                            swal(data.message);
                    }
                }) ;

            }
        })
    });


    // 결제 취소
    $(document).on('click', '.cancel-purchase', function(e) { 
    
        e.preventDefault() ;

        var pur_no = $(this).data("pur-no");
    
        swal({
            title: "확인",
            text: "취소하시겠습니까?",
            type: "error",
            showCancelButton: true,
            confirmButtonText: "삭제",
            cancelButtonText: "취소"
        }).then(function(e) {
            if(e.value==true) {               
                var formData = new FormData() ; 
                formData.append("pur_no", pur_no);

                $.ajax({
                    url: "/admin/purchase/cancel",
                    type: "post",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        var data = JSON.parse(res) ;

                        if(data.result=="SUCCESS") {
                            location.reload();
                        } else
                            swal(data.message);
                    }
                }) ;

            }
        })
    });



    // 정액권 추가
    $("#btnProvideMembership").on("click", function(e) {
        e.preventDefault() ;              
        

        var product_id = $("#product_id_membership").val();
        var acc_fromdate = $("#acc_fromdate").val();

        if (product_id == 0) {
            swal("추가할 기간을 선택해주세요", "", "error");
            return 0;
        }

        if (isEmpty(acc_fromdate)) {
            swal("시작일을 선택해주세요", "", "error");
            return 0;
        }

        swal({
            title: "확인",
            text: "기간을 추가하시겠습니까?",
            type: "success",
            showCancelButton: true,
            confirmButtonText: "확인",
            cancelButtonText: "취소"
        }).then(function(e) {
            if(e.value==true) { 
                var formData = new FormData() ; 
                formData.append("mem_no", $("#mem_no").val());  
                formData.append("product_id", product_id);  
                formData.append("acc_fromdate", acc_fromdate);  
                
                $.ajax({
                    url: "/admin/purchase/providemembership",
                    type: "post",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        var data = JSON.parse(res) ;

                        if(data.result=="SUCCESS") {
                            location.reload();
                        } else
                            swal(data.message);
                    }
                }) ;

            }
        })

    });    

});