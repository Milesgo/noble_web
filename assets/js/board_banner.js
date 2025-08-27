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
                {data: 'banner_no'},
                {data: 'banner_no'},
                {data: 'banner_name'},
                {data: 'banner_target'},
                {data: 'banner_registerdate'},
                {data: 'banner_display'}
            ],
            order: [[ 3, "desc" ]],
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
                    targets: 3,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var temp_title;
                        switch(full.banner_target) { 
                            case "URL":
                                temp_title = "링크";
                                break;
                            case "SONG":
                                temp_title = "곡";
                                break;
                            case "NOTICE":
                                temp_title = "공지사항";
                                break;
                        }
                        return temp_title;
                    },
                }, {
                    targets: 5,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var status_title, status_class;
                        switch(full.banner_display) { 
                            case "Y":
                                status_title = "공개";
                                status_class = "m-badge--info";
                                break;
                            case "N":
                                status_title = "비공개";
                                status_class = "m-badge--metal";
                                break;
                        }
                        return '<span class="m-badge ' + status_class + ' m-badge--wide">' + status_title + "</span>";
                    },
                }

            ]
        });


        $('#datatable').on('change', '.kt-group-checkable', function() {
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

        $("div.toolbar").html('<button class="btn btn-sm btn-danger" type="button" id="m_datatable_delete_all" board_id="<?=$board_id?>">삭제</button>'
            + ' &nbsp; <button class="btn btn-sm btn-success" type="button" id="m_datatable_download">다운로드</button>'
            + ' &nbsp; <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#m_modal_2"><span><i class="la la-arrows-v"></i><span>순서 조정</span></span></button>'
            + ' &nbsp; <a href="/admin/banner/upload" class="btn btn-sm btn-info"><span><i class="la la-pencil"></i><span>배너 등록</span></span></a>');


        $("#m_datatable_delete_all").on("click", function(t) { // 게시글 일괄 삭제
            var selectedNo = getSelectedNo('banner_no');

                if(selectedNo.length==0) {
                    swal({
                        text: '삭제할 항목을 선택하세요',
                        type: 'warning',
                        showCancelButton: false,
                        confirmButtonText: '확인'
                    });
                } else { 
                    swal({
                        title: '확인',
                        text: '삭제하시겠습니까?',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: '확인',
                        cancelButtonText: '취소'
                    }).then(function(e) {
            
                        if(e.value==true) { 
                            var formData = new FormData();
                            formData.append('selectedNo', selectedNo);            
                            deleteThing('banner/delete', 'banner', formData);
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

    var el = document.getElementById('bannerlist');
    var sortable = Sortable.create(el);    

    // 배너 순서 조정
    $("#btnSaveOrder").on("click", function(e) {

      e.preventDefault() ;              

      var formData = new FormData();

      $("#bannerlist").children().each(function(){
        formData.append('banner_order[]', $(this).attr("value"));
      });      

      $.ajax({
          url: "/admin/banner/order",
          type: "post",
          data: formData,
          cache: false,
          processData: false,
          contentType: false,
          success: function (res) {
              var data = JSON.parse(res) ;
              if (data.result == "SUCCESS") {
                  $("#m_modal_2").modal('toggle');
                  swal("배너 순서가 조정되었습니다") ;
              } else {
                  swal(data.message) ;
              }
          }
      }) ;
    }) ;

    $("#datatable tbody").css("cursor","pointer");
    
    $('#datatable tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        var data = $('#datatable').DataTable().row($(this).closest('tr')).data();
        $(location).attr('href', "/admin/banner/upload/"+data['banner_no']);
    } );    


    
});
