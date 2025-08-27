"use strict";
var KTDatatables = function() {

    var initTable = function() {
        var table = $('#datatable');

        // begin first table
        table.DataTable({
            responsive: true,
            scrollX: false,
            autoWidth: false,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            stateSave: true,
            dom: '<"toolbar">frtlip',
            select: {
                style: 'multi',
                selector: '.kt-checkable',
            },
            ajax: "/api_datatable/BoardpostNew/" + $("#board_id").val(),
            columns: [
                {data: 'mem_no'},
                {data: 'mem_no'},
                {data: 'mem_name', width: '140px'},
                {data: 'mem_email'},
                {data: 'mem_jointype'},
                {data: 'mem_cash'},
                {data: 'mem_totime'},
                {data: 'mem_joindate'},
                {data: 'mem_islive'}
            ],
            order: [[ 1, "desc" ]],
            pageLength: 25,
            headerCallback: function(thead, data, start, end, display) {
                thead.getElementsByTagName('th')[0].innerHTML = `
                    <label class="kt-checkbox kt-checkbox--single kt-checkbox--solid kt-checkbox--brand">
                        <input type="checkbox" value="" class="kt-group-checkable">
                        <span></span>
                    </label>`;
            },
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return `
                        <label class="kt-checkbox kt-checkbox--single kt-checkbox--solid kt-checkbox--brand">
                            <input type="checkbox" value="" class="kt-checkable">
                            <span></span>
                        </label>`;
                    },
                }, {
                    targets: 4,
                    width: 70,
                    orderable: true,
                    render: function(data, type, full, meta) {                        
                        var temp_title;
                        switch(full.mem_jointype) { 
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
                    },
                }, {
                    targets: 5,
                    orderable: true,
                    width: 100,
                    render: function(data, type, full, meta) {                        
                        return full.mem_cash.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                    },
                }, {
                    targets: 6,
                    orderable: true,
                    width: 130,
                    render: function(data, type, full, meta) {                        
                        return (full.mem_totime == '') ? '무료회원' : full.mem_totime;
                    },
                }, {
                    targets: 7,
                    orderable: true,
                    width: 130,
                    render: function(data, type, full, meta) {                        
                        return full.mem_joindate;
                    },
                }, {
                    targets: 8,
                    orderable: true,
                    width: 60,
                    render: function(data, type, full, meta) {                        
                        var status_title, status_class;
                        switch(full.mem_islive) { 
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
                    },
                }
            ]
        });


        $(document).on('change', '.kt-group-checkable', function(e) { 
            if ($(this).is(':checked')) {                
                $('.kt-checkable').prop('checked', true);
                $('#datatable').DataTable().rows({ search: 'applied' }).select();
            } else {
                $('.kt-checkable').prop('checked', false);    
                $('#datatable').DataTable().rows({ search: 'applied' }).deselect();
            }
        });
    
        $('#datatable').on('change', '.kt-checkable', function() {
            var allRows = $('#datatable').DataTable().rows({ search: 'applied' }).count(); // get total count of rows
            var selectedRows = $('#datatable').DataTable().rows({ selected: true, search: 'applied' }).count(); // get total count of selected rows

            $(this).parent().parent().trigger("click");
            
            if(allRows == selectedRows)
                $('.kt-group-checkable').prop('checked', true);
            else
                $('.kt-group-checkable').prop('checked', false);
        });    

        $("#datatable_filter > label > input").unbind().keyup( function (e) {
            if (e.keyCode == 13) {
                $('#datatable').DataTable().search( this.value ).draw();
            }
        } );

        $("div.toolbar").html('<button class="btn btn-sm btn-danger" type="button" id="m_datatable_delete_all" board_id="<?=$board_id?>">삭제</button> &nbsp; '
            + '<button class="btn btn-sm btn-success" type="button" id="m_datatable_download">다운로드</button>');

        $("#m_datatable_delete_all").on("click", function(t) { // 게시글 일괄 삭제
            var selectedNo = getSelectedNo('mem_no');

                if(selectedNo.length==0) {
                    swal({
                        text: '탈퇴 처리할 회원을 선택하세요',
                        type: 'warning',
                        showCancelButton: false,
                        confirmButtonText: '확인'
                    });
                } else { 
                    swal({
                        title: '확인',
                        text: '탈퇴 처리하시겠습니까?',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: '확인',
                        cancelButtonText: '취소'
                    }).then(function(e) {
            
                        if(e.value==true) { 
                            var formData = new FormData();
                            formData.append('selectedNo', selectedNo);            
                            deleteThing('member/delete', 'member', formData);
                        }
                    })  
                }
        });

        $('#m_datatable_download').on("click", function(t) {
            location.href="/download?board_id="+$("#board_id").val()+"&keyword="+$('.dataTables_filter input').val();
        });
    };


    return {
        //main function to initiate the module
        init: function() {
            initTable();
        },
    };
}();


jQuery(document).ready(function() {
    KTDatatables.init();    
    
    $("#datatable tbody").css("cursor","pointer");
    
    $('#datatable tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        var data = $('#datatable').DataTable().row($(this).closest('tr')).data();
        $(location).attr('href', "/admin/member/upload/"+data['mem_no']);
    } );    


    
});
