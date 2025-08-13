var Summernote = {
    init: function() {
        $(".summernote").summernote({
          height: 400,
          minHeight: null,
          maxHeight: null,      
          lang: 'ko-KR',
           toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['paragraph']],
            ['insert', ['link', 'picture','video','table']],
            ['height', ['height']],
            ['misc', ['fullscreen', 'codeview','undo','redo','help']]
          ],
          fontSizes: ['8', '9', '10', '11', '12', '14', '18', '19', '20', '21', '22', '23', '24', '30', '36'],
          // fontNames: ['NanumSquare', 'Iropke Batang'],
          // fontNamesIgnoreCheck: ['NanumSquare', 'Iropke Batang'],
          fontNames: [],
          fontNamesIgnoreCheck: [],
          callbacks: {
            onImageUpload: function(files, editor, editable) {
                sendFile(files[0], editor, this);
            }            
          }          
      })
    }
};

$(document).ready(function() {
    Summernote.init();
     
    $("#post_title").focus();

    // 게시글 작성 페이지 > 작성완료
    $("#m_post_upload_publish").on("click", function(e) {
        e.preventDefault() ;              

        var formData = new FormData() ; 

        if (isEmpty($("#post_title").val())) {
            swal("제목을 입력해주세요", "", "error");
            return 0;
        }

        if (isEmpty(stripTags($('#post_content').summernote('code')))) {
            swal("내용을 입력해주세요", "", "error");
            return 0;
        }
      
        swal({
            title: "확인",
            text: "작성하시겠습니까?",
            type: "success",
            showCancelButton: true,
            confirmButtonText: "완료",
            cancelButtonText: "취소"
        }).then(function(e) {

            if(e.value==true) { 
              
                formData.append("post_no", $("#post_no").val());  
                formData.append("board_id", $("#board_id").val());  
                formData.append("post_title", $("#post_title").val());  
                formData.append("post_content", $('#post_content').summernote('code'));  
                formData.append("post_status", "PUBLISH");
                formData.append("contentsPictures", $("#contentsPictures").val());  
            

                if($("#post_thumbnail").length>0) { 
                    formData.append("post_thumbnail", $("#post_thumbnail")[0].files[0]);                
                    formData.append("pic_div", "THUMB");  
                }

                if($("#ct_no").length>0) { 
                    formData.append("ct_no", $("#ct_no").val());
                }

                $.ajax({
                    url: "/admin/boardupload_process",
                    type: "post",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        var data = JSON.parse(res) ;
                        if (data.result == "SUCCESS") {
                            document.location.href = "/admin/" + $("#board_id").val();
                        } else {
                            swal(data.message) ;
                        }
                    }
                }) ;


            }

        })                    

    }) ;


    // 게시글 작성 페이지에서 썸네일 삭제
    $(document).on('click', '.delete-thumbnail', function(e) { 
    
        e.preventDefault() ;

        var formData = new FormData() ; 
        formData.append("post_no", $(this).attr("post_no"));

        swal({
            title: "확인",
            text: "이미지를 삭제하시겠습니까?",
            type: "error",
            showCancelButton: true,
            confirmButtonText: "삭제",
            cancelButtonText: "취소"
        }).then(function(e) {

            if(e.value==true) {               
                deleteThumbnail(formData);
            }

        })

    });

    // 게시글 작성 페이지 > 임시저장
    $("#m_post_upload_save").on("click", function(e) {
        e.preventDefault() ;              

        var formData = new FormData() ; 

        if (isEmpty($("#post_title").val())) {
            swal("제목을 입력해주세요", "", "error");
            return 0;
        }

        if (isEmpty(stripTags($('#post_content').summernote('code')))) {
            swal("내용을 입력해주세요", "", "error");
            return 0;
        }

        swal({
            title: "확인",
            text: "저장하시겠습니까?",
            type: "success",
            showCancelButton: true,
            confirmButtonText: "완료",
            cancelButtonText: "취소"
        }).then(function(e) {

            if(e.value==true) { 
              
                formData.append("post_no", $("#post_no").val());  
                formData.append("board_id", $("#board_id").val());  
                formData.append("post_title", $("#post_title").val());  
                formData.append("post_content", $('#post_content').summernote('code'));  
                formData.append("post_status", "SAVE");  

                if($("#post_thumbnail").length>0) { 
                    formData.append("post_thumbnail", $("#post_thumbnail")[0].files[0]);                
                    formData.append("pic_div", "THUMB");  
                }

                if($("#ct_no").length>0) { 
                    formData.append("ct_no", $("#ct_no").val());
                }

                $.ajax({
                    url: "/admin/boardupload_process",
                    type: "post",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        var data = JSON.parse(res) ;

                        if (data.result == "SUCCESS") {
                            document.location.href = "/admin/" + $("#board_id").val();
                        } else {
                            swal(data.message) ;
                        }
                    }
                }) ;

            }

        })                    

    }) ; 


    // 게시글 작성 페이지 > 숨기기
    $("#m_post_upload_hide").on("click", function(e) {
        e.preventDefault() ;              

        var formData = new FormData() ; 

        // if (isEmpty($("#post_title").val())) {
        //     swal("제목을 입력해주세요", "", "error");
        //     return 0;
        // }

        // if (isEmpty(stripTags($('#post_content').summernote('code')))) {
        //     swal("내용을 입력해주세요", "", "error");
        //     return 0;
        // }

        swal({
            title: "확인",
            text: "저장하시겠습니까?",
            type: "success",
            showCancelButton: true,
            confirmButtonText: "완료",
            cancelButtonText: "취소"
        }).then(function(e) {

            if(e.value==true) { 
              
                formData.append("post_no", $("#post_no").val());  
                formData.append("board_id", $("#board_id").val());  
                formData.append("post_title", $("#post_title").val());  
                formData.append("post_content", $('#post_content').summernote('code'));  
                formData.append("post_status", "HIDE");  

                if($("#post_thumbnail").length>0) { 
                    formData.append("post_thumbnail", $("#post_thumbnail")[0].files[0]);                
                    formData.append("pic_div", "THUMB");  
                }

                if($("#ct_no").length>0) { 
                    formData.append("ct_no", $("#ct_no").val());
                }

                $.ajax({
                    url: "/admin/boardupload_process",
                    type: "post",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        var data = JSON.parse(res) ;

                        if (data.result == "SUCCESS") {
                            document.location.href = "/admin/" + $("#board_id").val();
                        } else {
                            swal(data.message) ;
                        }
                    }
                }) ;

            }

        })                    

    }) ;     

});


function deleteThumbnail(formData) { 

    var formData = new FormData() ; 
    formData.append("post_no", $("#post_no").val());

    $.ajax({
        url: "/admin/boardupload_delete_thumbnail",
        type: "post",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function (res) {
            var data = JSON.parse(res) ;

            if (data.result == "SUCCESS") {
                $("#img_thumbnail").remove();
            }
        }
    }) ;
}

function sendFile(file, editor, el) {         
    data = new FormData();
    data.append("post_no", $("#post_no").val()); // 신규등록시에는 post_no 0 
    data.append("pic_div", "NOTICE"); 
    data.append("picture_img_file", file);

    $.ajax({
        url: "/admin/boardupload_image/upload",
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        type: 'POST',
        success: function(data){
            data=JSON.parse(data);
            console.log("data : " + JSON.stringify(data));
            $(el).summernote('editor.insertImage', "https://noblemrplayer.s3.ap-northeast-2.amazonaws.com/notice/" + data.pic_store_name);
            $("#contentsPictures").val($("#contentsPictures").val() + data.pic_seq + ",") ;
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus+" "+errorThrown);
        }
    });
}