var boardDataTable = function() {
    var t = {
        data: {
            type: "remote",
            source: {
                read: {
                    url: "https://noble.lemongstory.com/api_datatable/boardpost/" + $("#board_id").val()
                }
            },
            pageSize: 10, serverPaging: true, serverFiltering: true, serverSorting: true
        },
        layout: {
            theme: "default", class: "", scroll: false, footer: false
        },        
        sortable: true, pagination: true,
        // rows: {
        //     // auto hide columns, if rows overflow
        //     autoHide: true,
        // },
        
        // dom: 'Bfrtip',
        // buttons: [ {
        //     extend: 'excelHtml5',
        //     customize: function ( xlsx ){
        //         var sheet = xlsx.xl.worksheets['sheet1.xml'];
        //         // jQuery selector to add a border
        //         $('row c[r*="10"]', sheet).attr( 's', '25' );
        //     }
        // } ],
        columns:[ {
            field:"mem_no", title:"#", sortable:false, width:40, textAlign: "center", selector: {
                class: "m-checkbox--solid m-checkbox--brand"
                }
        }, {
            field:"idx", title:"순번", sortable:true, width:40
        }, {
            field:"mem_name", title:"회원명", sortable:true, width:100
        }, {
            field:"mem_email", title:"이메일", sortable:true, width:180
        }, {
            field:"mem_jointype", title:"가입방법", sortable:true, width:60, template: function(t) {
                    var temp_title;
                    switch(t.mem_jointype) { 
                        case "EMAIL":
                            temp_title = "이메일";
                            break;
                        case "KAKAO":
                            temp_title = "카카오톡";
                            break;
                        case "GOOGLE":
                            temp_title = "구글";
                            break;
                        case "NAVER":
                            temp_title = "네이버";
                            break;
                    }
                return temp_title;
            }
        }, {
            field:"mem_cash", title:"보유캐시", sortable:true, width:80, template:function(t, e, a) {
                return t.mem_cash.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
           }
        }, {
            field:"mem_totime", title:"유료 종료일자", sortable:true, width:140, template:function(t, e, a) {
                return (t.mem_totime == '') ? '무료회원' : t.mem_totime;
           }     
        }, {
            field:"mem_joindate", title:"가입일자", sortable:true, width:140
        }, {
            field:"mem_islive", title:"상태", sortable:false, width:70, template: function(t) {
                    var status_title, status_class;
                    switch(t.mem_islive) { 
                        case "Y":
                            status_title = "정상회원";
                            status_class = "m-badge--info";
                            break;
                        case "N":
                            status_title = "탈퇴회원";
                            status_class = "m-badge--metal";
                            break;
                    }
                return '<span class="m-badge ' + status_class + ' m-badge--wide">' + status_title + "</span>"
            }
        }, {
          field:"", width:70, title:"", sortable:false, template:function(t, e, a) {
              return'<a href="member/upload/'+t.mem_no+'" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="수정"><i class="la la-edit"></i></a><a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill delete-thing" title="삭제" board_id="'+$("#board_id").val()+'" no="'+t.mem_no+'"><i class="la la-trash"></i></a>'
          }
                }
        ]
    };
    return {
        init: function() {
                t.search = {
                    input: $("#generalSearch")
                };
                var i = $("#datatable").mDatatable(t);
                i.sort("mem_joindate","desc");
                
                $("#m_form_status").on("change", function() { // 상태 필터 변경으로 검색 쿼리 전송
                    i.search($(this).val().toLowerCase(), "Status")
                }), $("#m_form_status, #m_form_category").selectpicker(), i.on("m-datatable--on-check m-datatable--on-uncheck m-datatable--on-layout-updated", function(t) { // 상태 필터 변경시 테이블 반영
                    var e = i.rows(".m-datatable__row--active").nodes().length;
                    $("#m_datatable_selected_number").html(e), 0 < e ? $("#m_datatable_group_action_form").collapse("show") : $("#m_datatable_group_action_form").collapse("hide")
                }), $("#m_form_category").on("change", function() { // 상태 필터 변경으로 검색 쿼리 전송
                    i.search($(this).val().toLowerCase(), "Category")
                }), $("#m_datatable_delete_all").on("click", function(t) { // 게시글 일괄 삭제
                        var formData = new FormData();
                        formData.append("board_id", $(this).attr("board_id"));
                    for (var e = i.rows(".m-datatable__row--active").nodes().find('.m-checkbox--single > [type="checkbox"]').map(function(t, e) {
                            return $(e).val()
                        }), n = 0; n < e.length; n++) {

                        formData.append('mem_no[]', e[n]);
                    }

                    swal({
                        title: "확인",
                        text: "탈퇴 처리하시겠습니까? 모든 데이터가 삭제되며 복구하실 수 없습니다.",
                        type: "error",
                        showCancelButton: true,
                        confirmButtonText: "삭제",
                        cancelButtonText: "취소"
                    }).then(function(e) {
                        if(e.value==true) {
                            deleteThing('member/delete', 'member', formData);               
                        }
                    })     

                }), $('#generalSearch').unbind().bind('keyup', function(e) {
                    if(e.keyCode == 13) {

                        // i.search( this.value ).draw();
                        $("#keyword").val($('#generalSearch').val());
                        i.search( this.value );
                    }
                }), $('#btn_search').on("click", function(t) {
                    // i.search( $('#generalSearch').val() ).draw();
                    $("#keyword").val($('#generalSearch').val());
                    i.search( $('#generalSearch').val() );
                }), $('#m_datatable_download').on("click", function(t) {
                    location.href="http://121.254.254.77/mago/download?board_id="+$("#board_id").val()+"&keyword="+$("#keyword").val();
                })
        }
    }
}();

jQuery(document).ready(function() {
    boardDataTable.init();
}); 