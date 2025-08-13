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
            ajax: "https://noble.lemongstory.com/api_datatable/BoardpostNew/" + $("#board_id").val() + "/?year="+$("#year").val()+"&month="+$("#month").val(),
            columns: [
                {data: 'song_title'},
                {data: 'song_price'},
                {data: 'cnt_total'},
                {data: 'cnt_mp4ar'},
                {data: 'cnt_mp4mr'},
                {data: 'cnt_mp3ar'},
                {data: 'cnt_mp3mr'},
                {data: 'cnt_pdf'}
            ],
            order: [[ 2, "desc" ]],
            pageLength: 25,
            headerCallback: function(thead, data, start, end, display) {
                // thead.getElementsByTagName('th')[0].innerHTML = `
                //     <label class="kt-checkbox kt-checkbox--single kt-checkbox--solid kt-checkbox--brand">
                //         <input type="checkbox" value="" class="kt-group-checkable">
                //         <span></span>
                //     </label>`;
            },
            columnDefs: [
                {
                    targets: 1,
                    className: 'text-center',
                    render: function(data, type, full, meta) {
                        var temp_title;
                        switch(full.song_price) { 
                            case "PAID":
                                temp_title = "유료";
                                break;
                            case "FREE":
                                temp_title = "무료";
                                break;
                        }
                        return temp_title;
                    }
                }
            ]
        });


        // $('#datatable').on('change', '.kt-group-checkable', function() {
        //     if ($(this).is(':checked')) {
        //         $('.kt-checkable').prop('checked', true);
        //         $('#datatable').DataTable().rows({ search: 'applied' }).select();
        //     } else {
        //         $('.kt-checkable').prop('checked', false);    
        //         $('#datatable').DataTable().rows({ search: 'applied' }).deselect();
        //     }
        // });
    
        // $('#datatable').on('change', '.kt-checkable', function() {
        //     var allRows = $('#datatable').DataTable().rows({ search: 'applied' }).count(); // get total count of rows
        //     var selectedRows = $('#datatable').DataTable().rows({ selected: true, search: 'applied' }).count(); // get total count of selected rows

        //     $(this).parent().parent().trigger("click");
            
        //     if(allRows == selectedRows)
        //         $('.kt-group-checkable').prop('checked', true);
        //     else
        //         $('.kt-group-checkable').prop('checked', false);
        // });    

        $("#datatable_filter > label > input").unbind().keyup( function (e) {
            if (e.keyCode == 13) {
                $('#datatable').DataTable().search( this.value ).draw();
            }
        } );

        $("div.toolbar").html('<button class="btn btn-sm btn-success" type="button" id="m_datatable_download">다운로드</button>');

        // $("#m_datatable_delete_all").on("click", function(t) { // 게시글 일괄 삭제
        //     var selectedNo = getSelectedNo('post_no');

        //         if(selectedNo.length==0) {
        //             swal({
        //                 text: '삭제할 항목을 선택하세요',
        //                 type: 'warning',
        //                 showCancelButton: false,
        //                 confirmButtonText: '확인'
        //             });
        //         } else { 
        //             swal({
        //                 title: '확인',
        //                 text: '삭제하시겠습니까?',
        //                 type: 'warning',
        //                 showCancelButton: true,
        //                 confirmButtonText: '확인',
        //                 cancelButtonText: '취소'
        //             }).then(function(e) {
            
        //                 if(e.value==true) { 
        //                     var formData = new FormData();
        //                     formData.append('selectedNo', selectedNo);            
        //                     deleteThing('boardupload_delete', 'notice', formData);      
        //                 }
        //             })  
        //         }
        // });

        $('#m_datatable_download').on("click", function(t) {
            location.href="/download?board_id=monthly&year="+$("#year").val()+"&month="+$("#month").val();
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
    
    // $('#datatable tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
    //     var data = $('#datatable').DataTable().row($(this).closest('tr')).data();
    //     $(location).attr('href', "/admin/boardupload/notice/"+data['post_no']);
    // } );    
    
});
