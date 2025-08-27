	    <!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->		    		
    		<!--begin::Base Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
	<script src="<?=SERVERURL?>/assets/js/vendors.bundle.js" type="text/javascript"></script>
	<script src="<?=SERVERURL?>/assets/js/scripts.bundle.js" type="text/javascript"></script>
	<script src="<?=SERVERURL?>/assets/js/func.js" type="text/javascript"></script>
	
	<!-- DataTables localStorage 관리 스크립트 -->
	<script type="text/javascript">
	$(document).ready(function() {
	    // 로그아웃 링크 클릭 시 localStorage 클리어
	    $('a[href*="/admin/logout"]').on('click', function() {
	        console.log('로그아웃 클릭 - DataTables localStorage 초기화 시작');
	        
	        // DataTables 관련 localStorage 항목들을 찾아서 삭제
	        var keysToRemove = [];
	        for (var i = 0; i < localStorage.length; i++) {
	            var key = localStorage.key(i);
	            if (key && (key.startsWith('DataTables_') || key.includes('datatable'))) {
	                keysToRemove.push(key);
	            }
	        }
	        
	        // 찾은 키들 삭제
	        keysToRemove.forEach(function(key) {
	            console.log('삭제하는 localStorage 키:', key);
	            localStorage.removeItem(key);
	        });
	        
	        console.log('localStorage 초기화 완료. 총 ' + keysToRemove.length + '개 항목 삭제');
	    });
	});
	</script>
		<!--end::Base Scripts -->   
