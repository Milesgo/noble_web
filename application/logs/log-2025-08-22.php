<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-08-22 19:53:41 --> Config Class Initialized
INFO - 2025-08-22 19:53:41 --> Hooks Class Initialized
DEBUG - 2025-08-22 19:53:41 --> UTF-8 Support Enabled
INFO - 2025-08-22 19:53:41 --> Utf8 Class Initialized
INFO - 2025-08-22 19:53:41 --> URI Class Initialized
DEBUG - 2025-08-22 19:53:41 --> No URI present. Default controller set.
INFO - 2025-08-22 19:53:41 --> Router Class Initialized
INFO - 2025-08-22 19:53:41 --> Output Class Initialized
INFO - 2025-08-22 19:53:41 --> Security Class Initialized
DEBUG - 2025-08-22 19:53:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 19:53:41 --> Input Class Initialized
INFO - 2025-08-22 19:53:41 --> Language Class Initialized
INFO - 2025-08-22 19:53:41 --> Loader Class Initialized
INFO - 2025-08-22 19:53:41 --> Helper loaded: url_helper
INFO - 2025-08-22 19:53:41 --> Database Driver Class Initialized
INFO - 2025-08-22 19:53:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 19:53:41 --> Controller Class Initialized
INFO - 2025-08-22 19:53:41 --> Final output sent to browser
DEBUG - 2025-08-22 19:53:41 --> Total execution time: 0.0033
INFO - 2025-08-22 19:54:53 --> Config Class Initialized
INFO - 2025-08-22 19:54:53 --> Hooks Class Initialized
DEBUG - 2025-08-22 19:54:53 --> UTF-8 Support Enabled
INFO - 2025-08-22 19:54:53 --> Utf8 Class Initialized
INFO - 2025-08-22 19:54:53 --> URI Class Initialized
INFO - 2025-08-22 19:54:53 --> Router Class Initialized
INFO - 2025-08-22 19:54:53 --> Output Class Initialized
INFO - 2025-08-22 19:54:53 --> Security Class Initialized
DEBUG - 2025-08-22 19:54:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 19:54:53 --> Input Class Initialized
INFO - 2025-08-22 19:54:53 --> Language Class Initialized
INFO - 2025-08-22 19:54:53 --> Loader Class Initialized
INFO - 2025-08-22 19:54:53 --> Helper loaded: url_helper
INFO - 2025-08-22 19:54:53 --> Database Driver Class Initialized
INFO - 2025-08-22 19:54:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 19:54:53 --> Controller Class Initialized
INFO - 2025-08-22 19:54:53 --> Model Class Initialized
INFO - 2025-08-22 19:54:53 --> Model Class Initialized
INFO - 2025-08-22 19:54:53 --> Model Class Initialized
INFO - 2025-08-22 19:54:53 --> Model Class Initialized
INFO - 2025-08-22 19:54:53 --> Model Class Initialized
INFO - 2025-08-22 19:54:53 --> Model Class Initialized
INFO - 2025-08-22 19:54:53 --> Model Class Initialized
INFO - 2025-08-22 19:54:53 --> Model Class Initialized
INFO - 2025-08-22 19:54:53 --> Model Class Initialized
INFO - 2025-08-22 19:54:53 --> Model Class Initialized
INFO - 2025-08-22 19:54:53 --> Model Class Initialized
INFO - 2025-08-22 19:54:53 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 19:54:53 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 19:54:53 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 19:54:53 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 19:54:53 --> Encryption Class Initialized
INFO - 2025-08-22 19:54:53 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 19:54:53 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 19:54:53 --> Final output sent to browser
DEBUG - 2025-08-22 19:54:53 --> Total execution time: 0.1439
INFO - 2025-08-22 19:55:33 --> Config Class Initialized
INFO - 2025-08-22 19:55:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 19:55:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 19:55:33 --> Utf8 Class Initialized
INFO - 2025-08-22 19:55:33 --> URI Class Initialized
INFO - 2025-08-22 19:55:33 --> Router Class Initialized
INFO - 2025-08-22 19:55:33 --> Output Class Initialized
INFO - 2025-08-22 19:55:33 --> Security Class Initialized
DEBUG - 2025-08-22 19:55:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 19:55:33 --> Input Class Initialized
INFO - 2025-08-22 19:55:33 --> Language Class Initialized
INFO - 2025-08-22 19:55:33 --> Loader Class Initialized
INFO - 2025-08-22 19:55:33 --> Helper loaded: url_helper
INFO - 2025-08-22 19:55:33 --> Database Driver Class Initialized
INFO - 2025-08-22 19:55:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 19:55:33 --> Controller Class Initialized
INFO - 2025-08-22 19:55:33 --> Model Class Initialized
INFO - 2025-08-22 19:55:33 --> Model Class Initialized
INFO - 2025-08-22 19:55:33 --> Model Class Initialized
INFO - 2025-08-22 19:55:33 --> Model Class Initialized
INFO - 2025-08-22 19:55:33 --> Model Class Initialized
INFO - 2025-08-22 19:55:33 --> Model Class Initialized
INFO - 2025-08-22 19:55:33 --> Model Class Initialized
INFO - 2025-08-22 19:55:33 --> Model Class Initialized
INFO - 2025-08-22 19:55:33 --> Model Class Initialized
INFO - 2025-08-22 19:55:33 --> Model Class Initialized
INFO - 2025-08-22 19:55:33 --> Model Class Initialized
INFO - 2025-08-22 19:55:33 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 19:55:42 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 19:55:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 19:55:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 19:55:42 --> Encryption Class Initialized
INFO - 2025-08-22 19:55:42 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 19:55:42 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 19:55:42 --> Final output sent to browser
DEBUG - 2025-08-22 19:55:42 --> Total execution time: 8.9577
INFO - 2025-08-22 19:59:05 --> Config Class Initialized
INFO - 2025-08-22 19:59:05 --> Hooks Class Initialized
DEBUG - 2025-08-22 19:59:05 --> UTF-8 Support Enabled
INFO - 2025-08-22 19:59:05 --> Utf8 Class Initialized
INFO - 2025-08-22 19:59:05 --> URI Class Initialized
INFO - 2025-08-22 19:59:05 --> Router Class Initialized
INFO - 2025-08-22 19:59:05 --> Output Class Initialized
INFO - 2025-08-22 19:59:05 --> Security Class Initialized
DEBUG - 2025-08-22 19:59:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 19:59:05 --> Input Class Initialized
INFO - 2025-08-22 19:59:05 --> Language Class Initialized
INFO - 2025-08-22 19:59:05 --> Loader Class Initialized
INFO - 2025-08-22 19:59:05 --> Helper loaded: url_helper
INFO - 2025-08-22 19:59:05 --> Database Driver Class Initialized
INFO - 2025-08-22 19:59:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 19:59:05 --> Controller Class Initialized
INFO - 2025-08-22 19:59:05 --> Model Class Initialized
INFO - 2025-08-22 19:59:05 --> Model Class Initialized
INFO - 2025-08-22 19:59:05 --> Model Class Initialized
INFO - 2025-08-22 19:59:05 --> Model Class Initialized
INFO - 2025-08-22 19:59:05 --> Model Class Initialized
INFO - 2025-08-22 19:59:05 --> Model Class Initialized
INFO - 2025-08-22 19:59:05 --> Model Class Initialized
INFO - 2025-08-22 19:59:05 --> Model Class Initialized
INFO - 2025-08-22 19:59:05 --> Model Class Initialized
INFO - 2025-08-22 19:59:05 --> Model Class Initialized
INFO - 2025-08-22 19:59:05 --> Model Class Initialized
INFO - 2025-08-22 19:59:05 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 19:59:05 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 19:59:05 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 19:59:05 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 19:59:05 --> Encryption Class Initialized
INFO - 2025-08-22 19:59:05 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 19:59:05 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 19:59:05 --> Final output sent to browser
DEBUG - 2025-08-22 19:59:05 --> Total execution time: 0.1447
INFO - 2025-08-22 20:13:46 --> Config Class Initialized
INFO - 2025-08-22 20:13:46 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:13:46 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:13:46 --> Utf8 Class Initialized
INFO - 2025-08-22 20:13:46 --> URI Class Initialized
INFO - 2025-08-22 20:13:46 --> Router Class Initialized
INFO - 2025-08-22 20:13:46 --> Output Class Initialized
INFO - 2025-08-22 20:13:46 --> Security Class Initialized
DEBUG - 2025-08-22 20:13:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:13:46 --> Input Class Initialized
INFO - 2025-08-22 20:13:46 --> Language Class Initialized
INFO - 2025-08-22 20:13:46 --> Loader Class Initialized
INFO - 2025-08-22 20:13:46 --> Helper loaded: url_helper
INFO - 2025-08-22 20:13:46 --> Database Driver Class Initialized
INFO - 2025-08-22 20:13:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:13:46 --> Controller Class Initialized
INFO - 2025-08-22 20:13:46 --> Model Class Initialized
INFO - 2025-08-22 20:13:46 --> Model Class Initialized
INFO - 2025-08-22 20:13:46 --> Model Class Initialized
INFO - 2025-08-22 20:13:46 --> Model Class Initialized
INFO - 2025-08-22 20:13:46 --> Model Class Initialized
INFO - 2025-08-22 20:13:46 --> Model Class Initialized
INFO - 2025-08-22 20:13:46 --> Model Class Initialized
INFO - 2025-08-22 20:13:46 --> Model Class Initialized
INFO - 2025-08-22 20:13:46 --> Model Class Initialized
INFO - 2025-08-22 20:13:46 --> Model Class Initialized
INFO - 2025-08-22 20:13:46 --> Model Class Initialized
INFO - 2025-08-22 20:13:46 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 20:13:46 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:13:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:13:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:13:46 --> Encryption Class Initialized
INFO - 2025-08-22 20:13:46 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:13:46 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 20:13:46 --> Final output sent to browser
DEBUG - 2025-08-22 20:13:46 --> Total execution time: 0.1443
INFO - 2025-08-22 20:14:29 --> Config Class Initialized
INFO - 2025-08-22 20:14:29 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:14:29 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:14:29 --> Utf8 Class Initialized
INFO - 2025-08-22 20:14:29 --> URI Class Initialized
INFO - 2025-08-22 20:14:29 --> Router Class Initialized
INFO - 2025-08-22 20:14:29 --> Output Class Initialized
INFO - 2025-08-22 20:14:29 --> Security Class Initialized
DEBUG - 2025-08-22 20:14:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:14:29 --> Input Class Initialized
INFO - 2025-08-22 20:14:29 --> Language Class Initialized
INFO - 2025-08-22 20:14:29 --> Loader Class Initialized
INFO - 2025-08-22 20:14:29 --> Helper loaded: url_helper
INFO - 2025-08-22 20:14:29 --> Database Driver Class Initialized
INFO - 2025-08-22 20:14:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:14:29 --> Controller Class Initialized
INFO - 2025-08-22 20:14:29 --> Model Class Initialized
INFO - 2025-08-22 20:14:29 --> Model Class Initialized
INFO - 2025-08-22 20:14:29 --> Model Class Initialized
INFO - 2025-08-22 20:14:29 --> Model Class Initialized
INFO - 2025-08-22 20:14:29 --> Model Class Initialized
INFO - 2025-08-22 20:14:29 --> Model Class Initialized
INFO - 2025-08-22 20:14:29 --> Model Class Initialized
INFO - 2025-08-22 20:14:29 --> Model Class Initialized
INFO - 2025-08-22 20:14:29 --> Model Class Initialized
INFO - 2025-08-22 20:14:29 --> Model Class Initialized
INFO - 2025-08-22 20:14:29 --> Model Class Initialized
INFO - 2025-08-22 20:14:29 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 20:14:29 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:14:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:14:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:14:29 --> Encryption Class Initialized
INFO - 2025-08-22 20:14:29 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:14:29 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 20:14:29 --> Final output sent to browser
DEBUG - 2025-08-22 20:14:29 --> Total execution time: 0.1450
INFO - 2025-08-22 20:16:15 --> Config Class Initialized
INFO - 2025-08-22 20:16:15 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:16:15 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:16:15 --> Utf8 Class Initialized
INFO - 2025-08-22 20:16:15 --> URI Class Initialized
INFO - 2025-08-22 20:16:15 --> Router Class Initialized
INFO - 2025-08-22 20:16:15 --> Output Class Initialized
INFO - 2025-08-22 20:16:15 --> Security Class Initialized
DEBUG - 2025-08-22 20:16:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:16:15 --> Input Class Initialized
INFO - 2025-08-22 20:16:15 --> Language Class Initialized
INFO - 2025-08-22 20:16:15 --> Loader Class Initialized
INFO - 2025-08-22 20:16:15 --> Helper loaded: url_helper
INFO - 2025-08-22 20:16:15 --> Database Driver Class Initialized
INFO - 2025-08-22 20:16:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:16:15 --> Controller Class Initialized
INFO - 2025-08-22 20:16:15 --> Model Class Initialized
INFO - 2025-08-22 20:16:15 --> Model Class Initialized
INFO - 2025-08-22 20:16:15 --> Model Class Initialized
INFO - 2025-08-22 20:16:15 --> Model Class Initialized
INFO - 2025-08-22 20:16:15 --> Model Class Initialized
INFO - 2025-08-22 20:16:15 --> Model Class Initialized
INFO - 2025-08-22 20:16:15 --> Model Class Initialized
INFO - 2025-08-22 20:16:15 --> Model Class Initialized
INFO - 2025-08-22 20:16:15 --> Model Class Initialized
INFO - 2025-08-22 20:16:15 --> Model Class Initialized
INFO - 2025-08-22 20:16:15 --> Model Class Initialized
INFO - 2025-08-22 20:16:15 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 20:16:15 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:16:15 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:16:15 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:16:15 --> Encryption Class Initialized
INFO - 2025-08-22 20:16:15 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:16:15 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 20:16:15 --> Final output sent to browser
DEBUG - 2025-08-22 20:16:15 --> Total execution time: 0.1423
INFO - 2025-08-22 20:27:56 --> Config Class Initialized
INFO - 2025-08-22 20:27:56 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:27:56 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:27:56 --> Utf8 Class Initialized
INFO - 2025-08-22 20:27:56 --> URI Class Initialized
INFO - 2025-08-22 20:27:56 --> Router Class Initialized
INFO - 2025-08-22 20:27:56 --> Output Class Initialized
INFO - 2025-08-22 20:27:56 --> Security Class Initialized
DEBUG - 2025-08-22 20:27:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:27:56 --> Input Class Initialized
INFO - 2025-08-22 20:27:56 --> Language Class Initialized
ERROR - 2025-08-22 20:27:56 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 20:27:56 --> Config Class Initialized
INFO - 2025-08-22 20:27:56 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:27:56 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:27:56 --> Utf8 Class Initialized
INFO - 2025-08-22 20:27:56 --> URI Class Initialized
INFO - 2025-08-22 20:27:56 --> Router Class Initialized
INFO - 2025-08-22 20:27:56 --> Output Class Initialized
INFO - 2025-08-22 20:27:56 --> Security Class Initialized
DEBUG - 2025-08-22 20:27:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:27:56 --> Input Class Initialized
INFO - 2025-08-22 20:27:56 --> Language Class Initialized
ERROR - 2025-08-22 20:27:56 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 20:28:10 --> Config Class Initialized
INFO - 2025-08-22 20:28:10 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:28:10 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:28:10 --> Utf8 Class Initialized
INFO - 2025-08-22 20:28:10 --> URI Class Initialized
INFO - 2025-08-22 20:28:10 --> Router Class Initialized
INFO - 2025-08-22 20:28:10 --> Output Class Initialized
INFO - 2025-08-22 20:28:10 --> Security Class Initialized
DEBUG - 2025-08-22 20:28:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:28:10 --> Input Class Initialized
INFO - 2025-08-22 20:28:10 --> Language Class Initialized
INFO - 2025-08-22 20:28:10 --> Loader Class Initialized
INFO - 2025-08-22 20:28:10 --> Helper loaded: url_helper
INFO - 2025-08-22 20:28:10 --> Database Driver Class Initialized
INFO - 2025-08-22 20:28:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:28:10 --> Controller Class Initialized
INFO - 2025-08-22 20:28:10 --> Model Class Initialized
INFO - 2025-08-22 20:28:10 --> Model Class Initialized
INFO - 2025-08-22 20:28:10 --> Model Class Initialized
INFO - 2025-08-22 20:28:10 --> Model Class Initialized
INFO - 2025-08-22 20:28:10 --> Model Class Initialized
INFO - 2025-08-22 20:28:10 --> Model Class Initialized
INFO - 2025-08-22 20:28:10 --> Model Class Initialized
INFO - 2025-08-22 20:28:10 --> Model Class Initialized
INFO - 2025-08-22 20:28:10 --> Model Class Initialized
INFO - 2025-08-22 20:28:10 --> Model Class Initialized
INFO - 2025-08-22 20:28:10 --> Model Class Initialized
INFO - 2025-08-22 20:28:10 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 20:28:10 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:28:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:28:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:28:10 --> Encryption Class Initialized
INFO - 2025-08-22 20:28:10 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:28:10 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 20:28:10 --> Final output sent to browser
DEBUG - 2025-08-22 20:28:10 --> Total execution time: 0.1445
INFO - 2025-08-22 20:28:11 --> Config Class Initialized
INFO - 2025-08-22 20:28:11 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:28:11 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:28:11 --> Utf8 Class Initialized
INFO - 2025-08-22 20:28:11 --> URI Class Initialized
INFO - 2025-08-22 20:28:11 --> Router Class Initialized
INFO - 2025-08-22 20:28:11 --> Output Class Initialized
INFO - 2025-08-22 20:28:11 --> Security Class Initialized
DEBUG - 2025-08-22 20:28:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:28:11 --> Input Class Initialized
INFO - 2025-08-22 20:28:11 --> Language Class Initialized
ERROR - 2025-08-22 20:28:11 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 20:28:11 --> Config Class Initialized
INFO - 2025-08-22 20:28:11 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:28:11 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:28:11 --> Utf8 Class Initialized
INFO - 2025-08-22 20:28:11 --> URI Class Initialized
INFO - 2025-08-22 20:28:11 --> Router Class Initialized
INFO - 2025-08-22 20:28:11 --> Output Class Initialized
INFO - 2025-08-22 20:28:11 --> Security Class Initialized
DEBUG - 2025-08-22 20:28:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:28:11 --> Input Class Initialized
INFO - 2025-08-22 20:28:11 --> Language Class Initialized
ERROR - 2025-08-22 20:28:11 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 20:28:11 --> Config Class Initialized
INFO - 2025-08-22 20:28:11 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:28:11 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:28:11 --> Utf8 Class Initialized
INFO - 2025-08-22 20:28:11 --> URI Class Initialized
INFO - 2025-08-22 20:28:11 --> Router Class Initialized
INFO - 2025-08-22 20:28:11 --> Output Class Initialized
INFO - 2025-08-22 20:28:11 --> Security Class Initialized
DEBUG - 2025-08-22 20:28:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:28:11 --> Input Class Initialized
INFO - 2025-08-22 20:28:11 --> Language Class Initialized
ERROR - 2025-08-22 20:28:11 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 20:28:36 --> Config Class Initialized
INFO - 2025-08-22 20:28:36 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:28:36 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:28:36 --> Utf8 Class Initialized
INFO - 2025-08-22 20:28:36 --> URI Class Initialized
INFO - 2025-08-22 20:28:36 --> Router Class Initialized
INFO - 2025-08-22 20:28:36 --> Output Class Initialized
INFO - 2025-08-22 20:28:36 --> Security Class Initialized
DEBUG - 2025-08-22 20:28:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:28:36 --> Input Class Initialized
INFO - 2025-08-22 20:28:36 --> Language Class Initialized
INFO - 2025-08-22 20:28:36 --> Loader Class Initialized
INFO - 2025-08-22 20:28:36 --> Helper loaded: url_helper
INFO - 2025-08-22 20:28:36 --> Database Driver Class Initialized
INFO - 2025-08-22 20:28:36 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:28:36 --> Controller Class Initialized
INFO - 2025-08-22 20:28:36 --> Model Class Initialized
INFO - 2025-08-22 20:28:36 --> Model Class Initialized
INFO - 2025-08-22 20:28:36 --> Model Class Initialized
INFO - 2025-08-22 20:28:36 --> Model Class Initialized
INFO - 2025-08-22 20:28:36 --> Model Class Initialized
INFO - 2025-08-22 20:28:36 --> Model Class Initialized
INFO - 2025-08-22 20:28:36 --> Model Class Initialized
INFO - 2025-08-22 20:28:36 --> Model Class Initialized
INFO - 2025-08-22 20:28:36 --> Model Class Initialized
INFO - 2025-08-22 20:28:36 --> Model Class Initialized
INFO - 2025-08-22 20:28:36 --> Model Class Initialized
INFO - 2025-08-22 20:28:37 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 20:28:37 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:28:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:28:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:28:37 --> Encryption Class Initialized
INFO - 2025-08-22 20:28:37 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:28:37 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 20:28:37 --> Final output sent to browser
DEBUG - 2025-08-22 20:28:37 --> Total execution time: 0.1420
INFO - 2025-08-22 20:28:37 --> Config Class Initialized
INFO - 2025-08-22 20:28:37 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:28:37 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:28:37 --> Utf8 Class Initialized
INFO - 2025-08-22 20:28:37 --> URI Class Initialized
INFO - 2025-08-22 20:28:37 --> Router Class Initialized
INFO - 2025-08-22 20:28:37 --> Output Class Initialized
INFO - 2025-08-22 20:28:37 --> Security Class Initialized
DEBUG - 2025-08-22 20:28:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:28:37 --> Input Class Initialized
INFO - 2025-08-22 20:28:37 --> Language Class Initialized
ERROR - 2025-08-22 20:28:37 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 20:28:37 --> Config Class Initialized
INFO - 2025-08-22 20:28:37 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:28:37 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:28:37 --> Utf8 Class Initialized
INFO - 2025-08-22 20:28:37 --> URI Class Initialized
INFO - 2025-08-22 20:28:37 --> Router Class Initialized
INFO - 2025-08-22 20:28:37 --> Output Class Initialized
INFO - 2025-08-22 20:28:37 --> Security Class Initialized
DEBUG - 2025-08-22 20:28:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:28:37 --> Input Class Initialized
INFO - 2025-08-22 20:28:37 --> Language Class Initialized
ERROR - 2025-08-22 20:28:37 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 20:29:11 --> Config Class Initialized
INFO - 2025-08-22 20:29:11 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:29:11 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:29:11 --> Utf8 Class Initialized
INFO - 2025-08-22 20:29:11 --> URI Class Initialized
INFO - 2025-08-22 20:29:11 --> Router Class Initialized
INFO - 2025-08-22 20:29:11 --> Output Class Initialized
INFO - 2025-08-22 20:29:11 --> Security Class Initialized
DEBUG - 2025-08-22 20:29:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:29:11 --> Input Class Initialized
INFO - 2025-08-22 20:29:11 --> Language Class Initialized
INFO - 2025-08-22 20:29:11 --> Loader Class Initialized
INFO - 2025-08-22 20:29:11 --> Helper loaded: url_helper
INFO - 2025-08-22 20:29:11 --> Database Driver Class Initialized
INFO - 2025-08-22 20:29:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:29:11 --> Controller Class Initialized
INFO - 2025-08-22 20:29:11 --> Model Class Initialized
INFO - 2025-08-22 20:29:11 --> Model Class Initialized
INFO - 2025-08-22 20:29:11 --> Model Class Initialized
INFO - 2025-08-22 20:29:11 --> Model Class Initialized
INFO - 2025-08-22 20:29:11 --> Model Class Initialized
INFO - 2025-08-22 20:29:11 --> Model Class Initialized
INFO - 2025-08-22 20:29:11 --> Model Class Initialized
INFO - 2025-08-22 20:29:11 --> Model Class Initialized
INFO - 2025-08-22 20:29:11 --> Model Class Initialized
INFO - 2025-08-22 20:29:11 --> Model Class Initialized
INFO - 2025-08-22 20:29:11 --> Model Class Initialized
INFO - 2025-08-22 20:29:11 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 20:29:11 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:29:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:29:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:29:11 --> Encryption Class Initialized
INFO - 2025-08-22 20:29:11 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:29:11 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 20:29:11 --> Final output sent to browser
DEBUG - 2025-08-22 20:29:11 --> Total execution time: 0.1501
INFO - 2025-08-22 20:29:11 --> Config Class Initialized
INFO - 2025-08-22 20:29:11 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:29:11 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:29:11 --> Utf8 Class Initialized
INFO - 2025-08-22 20:29:11 --> URI Class Initialized
INFO - 2025-08-22 20:29:11 --> Router Class Initialized
INFO - 2025-08-22 20:29:11 --> Output Class Initialized
INFO - 2025-08-22 20:29:11 --> Security Class Initialized
DEBUG - 2025-08-22 20:29:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:29:11 --> Input Class Initialized
INFO - 2025-08-22 20:29:11 --> Language Class Initialized
ERROR - 2025-08-22 20:29:11 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 20:29:11 --> Config Class Initialized
INFO - 2025-08-22 20:29:11 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:29:11 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:29:11 --> Utf8 Class Initialized
INFO - 2025-08-22 20:29:11 --> URI Class Initialized
INFO - 2025-08-22 20:29:11 --> Router Class Initialized
INFO - 2025-08-22 20:29:11 --> Output Class Initialized
INFO - 2025-08-22 20:29:11 --> Security Class Initialized
DEBUG - 2025-08-22 20:29:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:29:11 --> Input Class Initialized
INFO - 2025-08-22 20:29:11 --> Language Class Initialized
ERROR - 2025-08-22 20:29:11 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 20:29:19 --> Config Class Initialized
INFO - 2025-08-22 20:29:19 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:29:19 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:29:19 --> Utf8 Class Initialized
INFO - 2025-08-22 20:29:19 --> URI Class Initialized
INFO - 2025-08-22 20:29:19 --> Router Class Initialized
INFO - 2025-08-22 20:29:19 --> Output Class Initialized
INFO - 2025-08-22 20:29:19 --> Security Class Initialized
DEBUG - 2025-08-22 20:29:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:29:19 --> Input Class Initialized
INFO - 2025-08-22 20:29:19 --> Language Class Initialized
INFO - 2025-08-22 20:29:19 --> Loader Class Initialized
INFO - 2025-08-22 20:29:19 --> Helper loaded: url_helper
INFO - 2025-08-22 20:29:19 --> Database Driver Class Initialized
INFO - 2025-08-22 20:29:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:29:19 --> Controller Class Initialized
INFO - 2025-08-22 20:29:19 --> Model Class Initialized
INFO - 2025-08-22 20:29:19 --> Model Class Initialized
INFO - 2025-08-22 20:29:19 --> Model Class Initialized
INFO - 2025-08-22 20:29:19 --> Model Class Initialized
INFO - 2025-08-22 20:29:19 --> Model Class Initialized
INFO - 2025-08-22 20:29:19 --> Model Class Initialized
INFO - 2025-08-22 20:29:19 --> Model Class Initialized
INFO - 2025-08-22 20:29:19 --> Model Class Initialized
INFO - 2025-08-22 20:29:19 --> Model Class Initialized
INFO - 2025-08-22 20:29:19 --> Model Class Initialized
INFO - 2025-08-22 20:29:19 --> Model Class Initialized
INFO - 2025-08-22 20:29:19 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 20:29:19 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:29:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:29:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:29:19 --> Encryption Class Initialized
INFO - 2025-08-22 20:29:19 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:29:19 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 20:29:19 --> Final output sent to browser
DEBUG - 2025-08-22 20:29:19 --> Total execution time: 0.1437
INFO - 2025-08-22 20:29:19 --> Config Class Initialized
INFO - 2025-08-22 20:29:19 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:29:19 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:29:19 --> Utf8 Class Initialized
INFO - 2025-08-22 20:29:19 --> URI Class Initialized
INFO - 2025-08-22 20:29:19 --> Router Class Initialized
INFO - 2025-08-22 20:29:19 --> Output Class Initialized
INFO - 2025-08-22 20:29:19 --> Security Class Initialized
DEBUG - 2025-08-22 20:29:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:29:19 --> Input Class Initialized
INFO - 2025-08-22 20:29:19 --> Language Class Initialized
ERROR - 2025-08-22 20:29:19 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 20:29:19 --> Config Class Initialized
INFO - 2025-08-22 20:29:19 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:29:19 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:29:19 --> Utf8 Class Initialized
INFO - 2025-08-22 20:29:19 --> URI Class Initialized
INFO - 2025-08-22 20:29:19 --> Router Class Initialized
INFO - 2025-08-22 20:29:19 --> Output Class Initialized
INFO - 2025-08-22 20:29:19 --> Security Class Initialized
DEBUG - 2025-08-22 20:29:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:29:19 --> Input Class Initialized
INFO - 2025-08-22 20:29:19 --> Language Class Initialized
ERROR - 2025-08-22 20:29:19 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 20:30:25 --> Config Class Initialized
INFO - 2025-08-22 20:30:25 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:30:25 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:30:25 --> Utf8 Class Initialized
INFO - 2025-08-22 20:30:25 --> URI Class Initialized
DEBUG - 2025-08-22 20:30:25 --> No URI present. Default controller set.
INFO - 2025-08-22 20:30:25 --> Router Class Initialized
INFO - 2025-08-22 20:30:25 --> Output Class Initialized
INFO - 2025-08-22 20:30:25 --> Security Class Initialized
DEBUG - 2025-08-22 20:30:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:30:25 --> Input Class Initialized
INFO - 2025-08-22 20:30:25 --> Language Class Initialized
INFO - 2025-08-22 20:30:25 --> Loader Class Initialized
INFO - 2025-08-22 20:30:25 --> Helper loaded: url_helper
INFO - 2025-08-22 20:30:25 --> Database Driver Class Initialized
INFO - 2025-08-22 20:30:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:30:25 --> Controller Class Initialized
INFO - 2025-08-22 20:30:25 --> Final output sent to browser
DEBUG - 2025-08-22 20:30:25 --> Total execution time: 0.0029
INFO - 2025-08-22 20:30:26 --> Config Class Initialized
INFO - 2025-08-22 20:30:26 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:30:26 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:30:26 --> Utf8 Class Initialized
INFO - 2025-08-22 20:30:26 --> URI Class Initialized
DEBUG - 2025-08-22 20:30:26 --> No URI present. Default controller set.
INFO - 2025-08-22 20:30:26 --> Router Class Initialized
INFO - 2025-08-22 20:30:26 --> Output Class Initialized
INFO - 2025-08-22 20:30:26 --> Security Class Initialized
DEBUG - 2025-08-22 20:30:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:30:26 --> Input Class Initialized
INFO - 2025-08-22 20:30:26 --> Language Class Initialized
INFO - 2025-08-22 20:30:26 --> Loader Class Initialized
INFO - 2025-08-22 20:30:26 --> Helper loaded: url_helper
INFO - 2025-08-22 20:30:26 --> Database Driver Class Initialized
INFO - 2025-08-22 20:30:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:30:26 --> Controller Class Initialized
INFO - 2025-08-22 20:30:26 --> Final output sent to browser
DEBUG - 2025-08-22 20:30:26 --> Total execution time: 0.0031
INFO - 2025-08-22 20:30:26 --> Config Class Initialized
INFO - 2025-08-22 20:30:26 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:30:26 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:30:26 --> Utf8 Class Initialized
INFO - 2025-08-22 20:30:26 --> URI Class Initialized
INFO - 2025-08-22 20:30:26 --> Router Class Initialized
INFO - 2025-08-22 20:30:26 --> Output Class Initialized
INFO - 2025-08-22 20:30:26 --> Security Class Initialized
DEBUG - 2025-08-22 20:30:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:30:26 --> Input Class Initialized
INFO - 2025-08-22 20:30:26 --> Language Class Initialized
ERROR - 2025-08-22 20:30:26 --> 404 Page Not Found: Faviconico/index
INFO - 2025-08-22 20:51:42 --> Config Class Initialized
INFO - 2025-08-22 20:51:42 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:51:42 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:51:42 --> Utf8 Class Initialized
INFO - 2025-08-22 20:51:42 --> URI Class Initialized
INFO - 2025-08-22 20:51:42 --> Router Class Initialized
INFO - 2025-08-22 20:51:42 --> Output Class Initialized
INFO - 2025-08-22 20:51:42 --> Security Class Initialized
DEBUG - 2025-08-22 20:51:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:51:42 --> Input Class Initialized
INFO - 2025-08-22 20:51:42 --> Language Class Initialized
INFO - 2025-08-22 20:51:42 --> Loader Class Initialized
INFO - 2025-08-22 20:51:42 --> Helper loaded: url_helper
INFO - 2025-08-22 20:51:42 --> Database Driver Class Initialized
INFO - 2025-08-22 20:51:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:51:42 --> Controller Class Initialized
INFO - 2025-08-22 20:51:42 --> Model Class Initialized
INFO - 2025-08-22 20:51:42 --> Model Class Initialized
INFO - 2025-08-22 20:51:42 --> Model Class Initialized
INFO - 2025-08-22 20:51:42 --> Model Class Initialized
INFO - 2025-08-22 20:51:42 --> Model Class Initialized
INFO - 2025-08-22 20:51:42 --> Model Class Initialized
INFO - 2025-08-22 20:51:42 --> Model Class Initialized
INFO - 2025-08-22 20:51:42 --> Model Class Initialized
INFO - 2025-08-22 20:51:42 --> Model Class Initialized
INFO - 2025-08-22 20:51:42 --> Model Class Initialized
INFO - 2025-08-22 20:51:42 --> Model Class Initialized
INFO - 2025-08-22 20:51:42 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 20:51:42 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:51:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:51:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:51:42 --> Encryption Class Initialized
INFO - 2025-08-22 20:51:42 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:51:42 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 20:51:42 --> Final output sent to browser
DEBUG - 2025-08-22 20:51:42 --> Total execution time: 0.1423
INFO - 2025-08-22 20:51:42 --> Config Class Initialized
INFO - 2025-08-22 20:51:42 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:51:42 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:51:42 --> Utf8 Class Initialized
INFO - 2025-08-22 20:51:42 --> URI Class Initialized
INFO - 2025-08-22 20:51:42 --> Router Class Initialized
INFO - 2025-08-22 20:51:42 --> Output Class Initialized
INFO - 2025-08-22 20:51:42 --> Security Class Initialized
DEBUG - 2025-08-22 20:51:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:51:42 --> Input Class Initialized
INFO - 2025-08-22 20:51:42 --> Language Class Initialized
ERROR - 2025-08-22 20:51:42 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 20:51:42 --> Config Class Initialized
INFO - 2025-08-22 20:51:42 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:51:42 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:51:42 --> Utf8 Class Initialized
INFO - 2025-08-22 20:51:42 --> URI Class Initialized
INFO - 2025-08-22 20:51:42 --> Router Class Initialized
INFO - 2025-08-22 20:51:42 --> Output Class Initialized
INFO - 2025-08-22 20:51:42 --> Security Class Initialized
DEBUG - 2025-08-22 20:51:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:51:42 --> Input Class Initialized
INFO - 2025-08-22 20:51:42 --> Language Class Initialized
ERROR - 2025-08-22 20:51:42 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 20:51:52 --> Config Class Initialized
INFO - 2025-08-22 20:51:52 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:51:52 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:51:52 --> Utf8 Class Initialized
INFO - 2025-08-22 20:51:52 --> URI Class Initialized
INFO - 2025-08-22 20:51:52 --> Router Class Initialized
INFO - 2025-08-22 20:51:52 --> Output Class Initialized
INFO - 2025-08-22 20:51:52 --> Security Class Initialized
DEBUG - 2025-08-22 20:51:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:51:52 --> Input Class Initialized
INFO - 2025-08-22 20:51:52 --> Language Class Initialized
ERROR - 2025-08-22 20:51:52 --> 404 Page Not Found: Faviconico/index
INFO - 2025-08-22 20:51:54 --> Config Class Initialized
INFO - 2025-08-22 20:51:54 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:51:54 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:51:54 --> Utf8 Class Initialized
INFO - 2025-08-22 20:51:54 --> URI Class Initialized
INFO - 2025-08-22 20:51:54 --> Router Class Initialized
INFO - 2025-08-22 20:51:54 --> Output Class Initialized
INFO - 2025-08-22 20:51:54 --> Security Class Initialized
DEBUG - 2025-08-22 20:51:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:51:54 --> Input Class Initialized
INFO - 2025-08-22 20:51:54 --> Language Class Initialized
INFO - 2025-08-22 20:51:54 --> Loader Class Initialized
INFO - 2025-08-22 20:51:54 --> Helper loaded: url_helper
INFO - 2025-08-22 20:51:54 --> Database Driver Class Initialized
INFO - 2025-08-22 20:51:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:51:54 --> Controller Class Initialized
INFO - 2025-08-22 20:51:54 --> Model Class Initialized
INFO - 2025-08-22 20:51:54 --> Model Class Initialized
INFO - 2025-08-22 20:51:54 --> Model Class Initialized
INFO - 2025-08-22 20:51:54 --> Model Class Initialized
INFO - 2025-08-22 20:51:54 --> Model Class Initialized
INFO - 2025-08-22 20:51:54 --> Model Class Initialized
INFO - 2025-08-22 20:51:54 --> Model Class Initialized
INFO - 2025-08-22 20:51:54 --> Model Class Initialized
INFO - 2025-08-22 20:51:54 --> Model Class Initialized
INFO - 2025-08-22 20:51:54 --> Model Class Initialized
INFO - 2025-08-22 20:51:54 --> Model Class Initialized
INFO - 2025-08-22 20:51:54 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 20:51:54 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:51:54 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:51:54 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:51:54 --> Encryption Class Initialized
INFO - 2025-08-22 20:51:54 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:51:54 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 20:51:54 --> Final output sent to browser
DEBUG - 2025-08-22 20:51:54 --> Total execution time: 0.1429
INFO - 2025-08-22 20:51:54 --> Config Class Initialized
INFO - 2025-08-22 20:51:54 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:51:54 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:51:54 --> Utf8 Class Initialized
INFO - 2025-08-22 20:51:54 --> URI Class Initialized
INFO - 2025-08-22 20:51:54 --> Router Class Initialized
INFO - 2025-08-22 20:51:54 --> Output Class Initialized
INFO - 2025-08-22 20:51:54 --> Security Class Initialized
DEBUG - 2025-08-22 20:51:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:51:54 --> Input Class Initialized
INFO - 2025-08-22 20:51:54 --> Language Class Initialized
ERROR - 2025-08-22 20:51:54 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 20:51:54 --> Config Class Initialized
INFO - 2025-08-22 20:51:54 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:51:54 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:51:54 --> Utf8 Class Initialized
INFO - 2025-08-22 20:51:54 --> URI Class Initialized
INFO - 2025-08-22 20:51:54 --> Router Class Initialized
INFO - 2025-08-22 20:51:54 --> Output Class Initialized
INFO - 2025-08-22 20:51:54 --> Security Class Initialized
DEBUG - 2025-08-22 20:51:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:51:54 --> Input Class Initialized
INFO - 2025-08-22 20:51:54 --> Language Class Initialized
ERROR - 2025-08-22 20:51:54 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 20:52:40 --> Config Class Initialized
INFO - 2025-08-22 20:52:40 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:52:40 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:52:40 --> Utf8 Class Initialized
INFO - 2025-08-22 20:52:40 --> URI Class Initialized
DEBUG - 2025-08-22 20:52:40 --> No URI present. Default controller set.
INFO - 2025-08-22 20:52:40 --> Router Class Initialized
INFO - 2025-08-22 20:52:40 --> Output Class Initialized
INFO - 2025-08-22 20:52:40 --> Security Class Initialized
DEBUG - 2025-08-22 20:52:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:52:40 --> Input Class Initialized
INFO - 2025-08-22 20:52:40 --> Language Class Initialized
INFO - 2025-08-22 20:52:40 --> Loader Class Initialized
INFO - 2025-08-22 20:52:40 --> Helper loaded: url_helper
INFO - 2025-08-22 20:52:40 --> Database Driver Class Initialized
INFO - 2025-08-22 20:52:40 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:52:40 --> Controller Class Initialized
INFO - 2025-08-22 20:52:40 --> Final output sent to browser
DEBUG - 2025-08-22 20:52:40 --> Total execution time: 0.0029
INFO - 2025-08-22 20:52:40 --> Config Class Initialized
INFO - 2025-08-22 20:52:40 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:52:40 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:52:40 --> Utf8 Class Initialized
INFO - 2025-08-22 20:52:40 --> URI Class Initialized
INFO - 2025-08-22 20:52:40 --> Router Class Initialized
INFO - 2025-08-22 20:52:40 --> Output Class Initialized
INFO - 2025-08-22 20:52:40 --> Security Class Initialized
DEBUG - 2025-08-22 20:52:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:52:40 --> Input Class Initialized
INFO - 2025-08-22 20:52:40 --> Language Class Initialized
ERROR - 2025-08-22 20:52:40 --> 404 Page Not Found: Faviconico/index
INFO - 2025-08-22 20:52:46 --> Config Class Initialized
INFO - 2025-08-22 20:52:46 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:52:46 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:52:46 --> Utf8 Class Initialized
INFO - 2025-08-22 20:52:46 --> URI Class Initialized
INFO - 2025-08-22 20:52:46 --> Router Class Initialized
INFO - 2025-08-22 20:52:46 --> Output Class Initialized
INFO - 2025-08-22 20:52:46 --> Security Class Initialized
DEBUG - 2025-08-22 20:52:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:52:46 --> Input Class Initialized
INFO - 2025-08-22 20:52:46 --> Language Class Initialized
INFO - 2025-08-22 20:52:46 --> Loader Class Initialized
INFO - 2025-08-22 20:52:46 --> Helper loaded: url_helper
INFO - 2025-08-22 20:52:46 --> Database Driver Class Initialized
INFO - 2025-08-22 20:52:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:52:46 --> Controller Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:52:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:52:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:52:46 --> Encryption Class Initialized
INFO - 2025-08-22 20:52:46 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:52:46 --> Config Class Initialized
INFO - 2025-08-22 20:52:46 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:52:46 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:52:46 --> Utf8 Class Initialized
INFO - 2025-08-22 20:52:46 --> URI Class Initialized
INFO - 2025-08-22 20:52:46 --> Router Class Initialized
INFO - 2025-08-22 20:52:46 --> Output Class Initialized
INFO - 2025-08-22 20:52:46 --> Security Class Initialized
DEBUG - 2025-08-22 20:52:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:52:46 --> Input Class Initialized
INFO - 2025-08-22 20:52:46 --> Language Class Initialized
INFO - 2025-08-22 20:52:46 --> Loader Class Initialized
INFO - 2025-08-22 20:52:46 --> Helper loaded: url_helper
INFO - 2025-08-22 20:52:46 --> Database Driver Class Initialized
INFO - 2025-08-22 20:52:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:52:46 --> Controller Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> Model Class Initialized
INFO - 2025-08-22 20:52:46 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 20:52:49 --> Config Class Initialized
INFO - 2025-08-22 20:52:49 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:52:49 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:52:49 --> Utf8 Class Initialized
INFO - 2025-08-22 20:52:49 --> URI Class Initialized
INFO - 2025-08-22 20:52:49 --> Router Class Initialized
INFO - 2025-08-22 20:52:49 --> Output Class Initialized
INFO - 2025-08-22 20:52:49 --> Security Class Initialized
DEBUG - 2025-08-22 20:52:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:52:49 --> Input Class Initialized
INFO - 2025-08-22 20:52:49 --> Language Class Initialized
INFO - 2025-08-22 20:52:49 --> Loader Class Initialized
INFO - 2025-08-22 20:52:49 --> Helper loaded: url_helper
INFO - 2025-08-22 20:52:49 --> Database Driver Class Initialized
INFO - 2025-08-22 20:52:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:52:49 --> Controller Class Initialized
INFO - 2025-08-22 20:52:49 --> Model Class Initialized
INFO - 2025-08-22 20:52:49 --> Model Class Initialized
INFO - 2025-08-22 20:52:49 --> Model Class Initialized
INFO - 2025-08-22 20:52:49 --> Model Class Initialized
INFO - 2025-08-22 20:52:49 --> Model Class Initialized
INFO - 2025-08-22 20:52:49 --> Model Class Initialized
INFO - 2025-08-22 20:52:49 --> Model Class Initialized
INFO - 2025-08-22 20:52:49 --> Model Class Initialized
INFO - 2025-08-22 20:52:49 --> Model Class Initialized
INFO - 2025-08-22 20:52:49 --> Model Class Initialized
INFO - 2025-08-22 20:52:49 --> Model Class Initialized
INFO - 2025-08-22 20:52:49 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 20:52:55 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:52:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:52:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:52:55 --> Encryption Class Initialized
INFO - 2025-08-22 20:52:55 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:52:55 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 20:52:58 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:52:58 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:52:58 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:52:58 --> Encryption Class Initialized
INFO - 2025-08-22 20:52:58 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:52:58 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 20:52:58 --> Final output sent to browser
DEBUG - 2025-08-22 20:52:58 --> Total execution time: 9.3016
INFO - 2025-08-22 20:53:21 --> Config Class Initialized
INFO - 2025-08-22 20:53:21 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:53:21 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:53:21 --> Utf8 Class Initialized
INFO - 2025-08-22 20:53:21 --> URI Class Initialized
INFO - 2025-08-22 20:53:21 --> Router Class Initialized
INFO - 2025-08-22 20:53:21 --> Output Class Initialized
INFO - 2025-08-22 20:53:21 --> Security Class Initialized
DEBUG - 2025-08-22 20:53:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:53:21 --> Input Class Initialized
INFO - 2025-08-22 20:53:21 --> Language Class Initialized
ERROR - 2025-08-22 20:53:21 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 20:53:21 --> Config Class Initialized
INFO - 2025-08-22 20:53:21 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:53:21 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:53:21 --> Utf8 Class Initialized
INFO - 2025-08-22 20:53:21 --> URI Class Initialized
INFO - 2025-08-22 20:53:21 --> Router Class Initialized
INFO - 2025-08-22 20:53:21 --> Output Class Initialized
INFO - 2025-08-22 20:53:21 --> Security Class Initialized
DEBUG - 2025-08-22 20:53:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:53:21 --> Input Class Initialized
INFO - 2025-08-22 20:53:21 --> Language Class Initialized
ERROR - 2025-08-22 20:53:21 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 20:53:35 --> Config Class Initialized
INFO - 2025-08-22 20:53:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:53:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:53:35 --> Utf8 Class Initialized
INFO - 2025-08-22 20:53:35 --> URI Class Initialized
INFO - 2025-08-22 20:53:35 --> Router Class Initialized
INFO - 2025-08-22 20:53:35 --> Output Class Initialized
INFO - 2025-08-22 20:53:35 --> Security Class Initialized
DEBUG - 2025-08-22 20:53:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:53:35 --> Input Class Initialized
INFO - 2025-08-22 20:53:35 --> Language Class Initialized
INFO - 2025-08-22 20:53:35 --> Loader Class Initialized
INFO - 2025-08-22 20:53:35 --> Helper loaded: url_helper
INFO - 2025-08-22 20:53:35 --> Database Driver Class Initialized
INFO - 2025-08-22 20:53:35 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:53:35 --> Controller Class Initialized
INFO - 2025-08-22 20:53:35 --> Model Class Initialized
INFO - 2025-08-22 20:53:35 --> Model Class Initialized
INFO - 2025-08-22 20:53:35 --> Model Class Initialized
INFO - 2025-08-22 20:53:35 --> Model Class Initialized
INFO - 2025-08-22 20:53:35 --> Model Class Initialized
INFO - 2025-08-22 20:53:35 --> Model Class Initialized
INFO - 2025-08-22 20:53:35 --> Model Class Initialized
INFO - 2025-08-22 20:53:35 --> Model Class Initialized
INFO - 2025-08-22 20:53:35 --> Model Class Initialized
INFO - 2025-08-22 20:53:35 --> Model Class Initialized
INFO - 2025-08-22 20:53:35 --> Model Class Initialized
INFO - 2025-08-22 20:53:35 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 20:53:35 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:53:35 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:53:35 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:53:35 --> Encryption Class Initialized
INFO - 2025-08-22 20:53:35 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:53:35 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 20:53:35 --> Final output sent to browser
DEBUG - 2025-08-22 20:53:35 --> Total execution time: 0.1418
INFO - 2025-08-22 20:53:35 --> Config Class Initialized
INFO - 2025-08-22 20:53:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:53:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:53:35 --> Utf8 Class Initialized
INFO - 2025-08-22 20:53:35 --> URI Class Initialized
INFO - 2025-08-22 20:53:35 --> Router Class Initialized
INFO - 2025-08-22 20:53:35 --> Output Class Initialized
INFO - 2025-08-22 20:53:35 --> Security Class Initialized
DEBUG - 2025-08-22 20:53:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:53:35 --> Input Class Initialized
INFO - 2025-08-22 20:53:35 --> Language Class Initialized
ERROR - 2025-08-22 20:53:35 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 20:53:35 --> Config Class Initialized
INFO - 2025-08-22 20:53:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:53:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:53:35 --> Utf8 Class Initialized
INFO - 2025-08-22 20:53:35 --> URI Class Initialized
INFO - 2025-08-22 20:53:35 --> Router Class Initialized
INFO - 2025-08-22 20:53:35 --> Output Class Initialized
INFO - 2025-08-22 20:53:35 --> Security Class Initialized
DEBUG - 2025-08-22 20:53:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:53:35 --> Input Class Initialized
INFO - 2025-08-22 20:53:35 --> Language Class Initialized
ERROR - 2025-08-22 20:53:35 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 20:58:06 --> Config Class Initialized
INFO - 2025-08-22 20:58:06 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:58:06 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:58:06 --> Utf8 Class Initialized
INFO - 2025-08-22 20:58:06 --> URI Class Initialized
DEBUG - 2025-08-22 20:58:06 --> No URI present. Default controller set.
INFO - 2025-08-22 20:58:06 --> Router Class Initialized
INFO - 2025-08-22 20:58:06 --> Output Class Initialized
INFO - 2025-08-22 20:58:06 --> Security Class Initialized
DEBUG - 2025-08-22 20:58:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:58:06 --> Input Class Initialized
INFO - 2025-08-22 20:58:06 --> Language Class Initialized
INFO - 2025-08-22 20:58:06 --> Loader Class Initialized
INFO - 2025-08-22 20:58:06 --> Helper loaded: url_helper
INFO - 2025-08-22 20:58:06 --> Database Driver Class Initialized
INFO - 2025-08-22 20:58:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:58:06 --> Controller Class Initialized
INFO - 2025-08-22 20:58:06 --> Final output sent to browser
DEBUG - 2025-08-22 20:58:06 --> Total execution time: 0.0032
INFO - 2025-08-22 20:58:06 --> Config Class Initialized
INFO - 2025-08-22 20:58:06 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:58:06 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:58:06 --> Utf8 Class Initialized
INFO - 2025-08-22 20:58:06 --> URI Class Initialized
INFO - 2025-08-22 20:58:06 --> Router Class Initialized
INFO - 2025-08-22 20:58:06 --> Output Class Initialized
INFO - 2025-08-22 20:58:06 --> Security Class Initialized
DEBUG - 2025-08-22 20:58:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:58:06 --> Input Class Initialized
INFO - 2025-08-22 20:58:06 --> Language Class Initialized
ERROR - 2025-08-22 20:58:06 --> 404 Page Not Found: Faviconico/index
INFO - 2025-08-22 20:58:12 --> Config Class Initialized
INFO - 2025-08-22 20:58:12 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:58:12 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:58:12 --> Utf8 Class Initialized
INFO - 2025-08-22 20:58:12 --> URI Class Initialized
INFO - 2025-08-22 20:58:12 --> Router Class Initialized
INFO - 2025-08-22 20:58:12 --> Output Class Initialized
INFO - 2025-08-22 20:58:12 --> Security Class Initialized
DEBUG - 2025-08-22 20:58:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:58:12 --> Input Class Initialized
INFO - 2025-08-22 20:58:12 --> Language Class Initialized
INFO - 2025-08-22 20:58:12 --> Loader Class Initialized
INFO - 2025-08-22 20:58:12 --> Helper loaded: url_helper
INFO - 2025-08-22 20:58:12 --> Database Driver Class Initialized
INFO - 2025-08-22 20:58:12 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:58:12 --> Controller Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:58:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:58:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:58:12 --> Encryption Class Initialized
INFO - 2025-08-22 20:58:12 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:58:12 --> Config Class Initialized
INFO - 2025-08-22 20:58:12 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:58:12 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:58:12 --> Utf8 Class Initialized
INFO - 2025-08-22 20:58:12 --> URI Class Initialized
INFO - 2025-08-22 20:58:12 --> Router Class Initialized
INFO - 2025-08-22 20:58:12 --> Output Class Initialized
INFO - 2025-08-22 20:58:12 --> Security Class Initialized
DEBUG - 2025-08-22 20:58:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:58:12 --> Input Class Initialized
INFO - 2025-08-22 20:58:12 --> Language Class Initialized
INFO - 2025-08-22 20:58:12 --> Loader Class Initialized
INFO - 2025-08-22 20:58:12 --> Helper loaded: url_helper
INFO - 2025-08-22 20:58:12 --> Database Driver Class Initialized
INFO - 2025-08-22 20:58:12 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:58:12 --> Controller Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> Model Class Initialized
INFO - 2025-08-22 20:58:12 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 20:58:15 --> Config Class Initialized
INFO - 2025-08-22 20:58:15 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:58:15 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:58:15 --> Utf8 Class Initialized
INFO - 2025-08-22 20:58:15 --> URI Class Initialized
INFO - 2025-08-22 20:58:15 --> Router Class Initialized
INFO - 2025-08-22 20:58:15 --> Output Class Initialized
INFO - 2025-08-22 20:58:15 --> Security Class Initialized
DEBUG - 2025-08-22 20:58:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:58:15 --> Input Class Initialized
INFO - 2025-08-22 20:58:15 --> Language Class Initialized
INFO - 2025-08-22 20:58:15 --> Loader Class Initialized
INFO - 2025-08-22 20:58:15 --> Helper loaded: url_helper
INFO - 2025-08-22 20:58:15 --> Database Driver Class Initialized
INFO - 2025-08-22 20:58:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:58:15 --> Controller Class Initialized
INFO - 2025-08-22 20:58:15 --> Model Class Initialized
INFO - 2025-08-22 20:58:15 --> Model Class Initialized
INFO - 2025-08-22 20:58:15 --> Model Class Initialized
INFO - 2025-08-22 20:58:15 --> Model Class Initialized
INFO - 2025-08-22 20:58:15 --> Model Class Initialized
INFO - 2025-08-22 20:58:15 --> Model Class Initialized
INFO - 2025-08-22 20:58:15 --> Model Class Initialized
INFO - 2025-08-22 20:58:15 --> Model Class Initialized
INFO - 2025-08-22 20:58:15 --> Model Class Initialized
INFO - 2025-08-22 20:58:15 --> Model Class Initialized
INFO - 2025-08-22 20:58:15 --> Model Class Initialized
INFO - 2025-08-22 20:58:15 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 20:58:22 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:58:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:58:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:58:22 --> Encryption Class Initialized
INFO - 2025-08-22 20:58:22 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:58:22 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 20:58:25 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:58:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:58:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:58:25 --> Encryption Class Initialized
INFO - 2025-08-22 20:58:25 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:58:25 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 20:58:25 --> Final output sent to browser
DEBUG - 2025-08-22 20:58:25 --> Total execution time: 9.3146
INFO - 2025-08-22 20:58:56 --> Config Class Initialized
INFO - 2025-08-22 20:58:56 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:58:56 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:58:56 --> Utf8 Class Initialized
INFO - 2025-08-22 20:58:56 --> URI Class Initialized
INFO - 2025-08-22 20:58:56 --> Router Class Initialized
INFO - 2025-08-22 20:58:56 --> Output Class Initialized
INFO - 2025-08-22 20:58:56 --> Security Class Initialized
DEBUG - 2025-08-22 20:58:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:58:56 --> Input Class Initialized
INFO - 2025-08-22 20:58:56 --> Language Class Initialized
ERROR - 2025-08-22 20:58:56 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 20:58:56 --> Config Class Initialized
INFO - 2025-08-22 20:58:56 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:58:56 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:58:56 --> Utf8 Class Initialized
INFO - 2025-08-22 20:58:56 --> URI Class Initialized
INFO - 2025-08-22 20:58:56 --> Router Class Initialized
INFO - 2025-08-22 20:58:56 --> Output Class Initialized
INFO - 2025-08-22 20:58:56 --> Security Class Initialized
DEBUG - 2025-08-22 20:58:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:58:56 --> Input Class Initialized
INFO - 2025-08-22 20:58:56 --> Language Class Initialized
ERROR - 2025-08-22 20:58:56 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 20:59:00 --> Config Class Initialized
INFO - 2025-08-22 20:59:00 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:59:00 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:59:00 --> Utf8 Class Initialized
INFO - 2025-08-22 20:59:00 --> URI Class Initialized
INFO - 2025-08-22 20:59:00 --> Router Class Initialized
INFO - 2025-08-22 20:59:00 --> Output Class Initialized
INFO - 2025-08-22 20:59:00 --> Security Class Initialized
DEBUG - 2025-08-22 20:59:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:59:00 --> Input Class Initialized
INFO - 2025-08-22 20:59:00 --> Language Class Initialized
INFO - 2025-08-22 20:59:00 --> Loader Class Initialized
INFO - 2025-08-22 20:59:00 --> Helper loaded: url_helper
INFO - 2025-08-22 20:59:00 --> Database Driver Class Initialized
INFO - 2025-08-22 20:59:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 20:59:00 --> Controller Class Initialized
INFO - 2025-08-22 20:59:00 --> Model Class Initialized
INFO - 2025-08-22 20:59:00 --> Model Class Initialized
INFO - 2025-08-22 20:59:00 --> Model Class Initialized
INFO - 2025-08-22 20:59:00 --> Model Class Initialized
INFO - 2025-08-22 20:59:00 --> Model Class Initialized
INFO - 2025-08-22 20:59:00 --> Model Class Initialized
INFO - 2025-08-22 20:59:00 --> Model Class Initialized
INFO - 2025-08-22 20:59:00 --> Model Class Initialized
INFO - 2025-08-22 20:59:00 --> Model Class Initialized
INFO - 2025-08-22 20:59:00 --> Model Class Initialized
INFO - 2025-08-22 20:59:00 --> Model Class Initialized
INFO - 2025-08-22 20:59:00 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 20:59:01 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 20:59:01 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 20:59:01 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 20:59:01 --> Encryption Class Initialized
INFO - 2025-08-22 20:59:01 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 20:59:01 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 20:59:01 --> Final output sent to browser
DEBUG - 2025-08-22 20:59:01 --> Total execution time: 0.1420
INFO - 2025-08-22 20:59:01 --> Config Class Initialized
INFO - 2025-08-22 20:59:01 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:59:01 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:59:01 --> Utf8 Class Initialized
INFO - 2025-08-22 20:59:01 --> URI Class Initialized
INFO - 2025-08-22 20:59:01 --> Router Class Initialized
INFO - 2025-08-22 20:59:01 --> Output Class Initialized
INFO - 2025-08-22 20:59:01 --> Security Class Initialized
DEBUG - 2025-08-22 20:59:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:59:01 --> Input Class Initialized
INFO - 2025-08-22 20:59:01 --> Language Class Initialized
ERROR - 2025-08-22 20:59:01 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 20:59:01 --> Config Class Initialized
INFO - 2025-08-22 20:59:01 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:59:01 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:59:01 --> Utf8 Class Initialized
INFO - 2025-08-22 20:59:01 --> URI Class Initialized
INFO - 2025-08-22 20:59:01 --> Router Class Initialized
INFO - 2025-08-22 20:59:01 --> Output Class Initialized
INFO - 2025-08-22 20:59:01 --> Security Class Initialized
DEBUG - 2025-08-22 20:59:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:59:01 --> Input Class Initialized
INFO - 2025-08-22 20:59:01 --> Language Class Initialized
ERROR - 2025-08-22 20:59:01 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 20:59:01 --> Config Class Initialized
INFO - 2025-08-22 20:59:01 --> Hooks Class Initialized
DEBUG - 2025-08-22 20:59:01 --> UTF-8 Support Enabled
INFO - 2025-08-22 20:59:01 --> Utf8 Class Initialized
INFO - 2025-08-22 20:59:01 --> URI Class Initialized
INFO - 2025-08-22 20:59:01 --> Router Class Initialized
INFO - 2025-08-22 20:59:01 --> Output Class Initialized
INFO - 2025-08-22 20:59:01 --> Security Class Initialized
DEBUG - 2025-08-22 20:59:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 20:59:01 --> Input Class Initialized
INFO - 2025-08-22 20:59:01 --> Language Class Initialized
ERROR - 2025-08-22 20:59:01 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:01:26 --> Config Class Initialized
INFO - 2025-08-22 21:01:26 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:01:26 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:01:26 --> Utf8 Class Initialized
INFO - 2025-08-22 21:01:26 --> URI Class Initialized
INFO - 2025-08-22 21:01:26 --> Router Class Initialized
INFO - 2025-08-22 21:01:26 --> Output Class Initialized
INFO - 2025-08-22 21:01:26 --> Security Class Initialized
DEBUG - 2025-08-22 21:01:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:01:26 --> Input Class Initialized
INFO - 2025-08-22 21:01:26 --> Language Class Initialized
INFO - 2025-08-22 21:01:26 --> Loader Class Initialized
INFO - 2025-08-22 21:01:26 --> Helper loaded: url_helper
INFO - 2025-08-22 21:01:26 --> Database Driver Class Initialized
INFO - 2025-08-22 21:01:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:01:26 --> Controller Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 21:01:26 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:01:26 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:01:26 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:01:26 --> Encryption Class Initialized
INFO - 2025-08-22 21:01:26 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:01:26 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 21:01:26 --> Final output sent to browser
DEBUG - 2025-08-22 21:01:26 --> Total execution time: 0.1482
INFO - 2025-08-22 21:01:26 --> Config Class Initialized
INFO - 2025-08-22 21:01:26 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:01:26 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:01:26 --> Utf8 Class Initialized
INFO - 2025-08-22 21:01:26 --> URI Class Initialized
INFO - 2025-08-22 21:01:26 --> Router Class Initialized
INFO - 2025-08-22 21:01:26 --> Output Class Initialized
INFO - 2025-08-22 21:01:26 --> Security Class Initialized
DEBUG - 2025-08-22 21:01:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:01:26 --> Input Class Initialized
INFO - 2025-08-22 21:01:26 --> Language Class Initialized
ERROR - 2025-08-22 21:01:26 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:01:26 --> Config Class Initialized
INFO - 2025-08-22 21:01:26 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:01:26 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:01:26 --> Utf8 Class Initialized
INFO - 2025-08-22 21:01:26 --> URI Class Initialized
INFO - 2025-08-22 21:01:26 --> Router Class Initialized
INFO - 2025-08-22 21:01:26 --> Output Class Initialized
INFO - 2025-08-22 21:01:26 --> Security Class Initialized
DEBUG - 2025-08-22 21:01:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:01:26 --> Input Class Initialized
INFO - 2025-08-22 21:01:26 --> Language Class Initialized
ERROR - 2025-08-22 21:01:26 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:01:26 --> Config Class Initialized
INFO - 2025-08-22 21:01:26 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:01:26 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:01:26 --> Utf8 Class Initialized
INFO - 2025-08-22 21:01:26 --> URI Class Initialized
INFO - 2025-08-22 21:01:26 --> Router Class Initialized
INFO - 2025-08-22 21:01:26 --> Output Class Initialized
INFO - 2025-08-22 21:01:26 --> Security Class Initialized
DEBUG - 2025-08-22 21:01:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:01:26 --> Input Class Initialized
INFO - 2025-08-22 21:01:26 --> Language Class Initialized
INFO - 2025-08-22 21:01:26 --> Loader Class Initialized
INFO - 2025-08-22 21:01:26 --> Helper loaded: url_helper
INFO - 2025-08-22 21:01:26 --> Database Driver Class Initialized
INFO - 2025-08-22 21:01:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:01:26 --> Controller Class Initialized
DEBUG - 2025-08-22 21:01:26 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:01:26 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> Model Class Initialized
INFO - 2025-08-22 21:01:26 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:01:26 --> Config Class Initialized
INFO - 2025-08-22 21:01:26 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:01:26 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:01:26 --> Utf8 Class Initialized
INFO - 2025-08-22 21:01:26 --> URI Class Initialized
INFO - 2025-08-22 21:01:26 --> Router Class Initialized
INFO - 2025-08-22 21:01:26 --> Output Class Initialized
INFO - 2025-08-22 21:01:26 --> Security Class Initialized
DEBUG - 2025-08-22 21:01:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:01:26 --> Input Class Initialized
INFO - 2025-08-22 21:01:26 --> Language Class Initialized
ERROR - 2025-08-22 21:01:26 --> 404 Page Not Found: Faviconico/index
INFO - 2025-08-22 21:01:26 --> Final output sent to browser
DEBUG - 2025-08-22 21:01:26 --> Total execution time: 0.1109
INFO - 2025-08-22 21:04:11 --> Config Class Initialized
INFO - 2025-08-22 21:04:11 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:04:11 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:04:11 --> Utf8 Class Initialized
INFO - 2025-08-22 21:04:11 --> URI Class Initialized
INFO - 2025-08-22 21:04:11 --> Router Class Initialized
INFO - 2025-08-22 21:04:11 --> Output Class Initialized
INFO - 2025-08-22 21:04:11 --> Security Class Initialized
DEBUG - 2025-08-22 21:04:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:04:11 --> Input Class Initialized
INFO - 2025-08-22 21:04:11 --> Language Class Initialized
INFO - 2025-08-22 21:04:11 --> Loader Class Initialized
INFO - 2025-08-22 21:04:11 --> Helper loaded: url_helper
INFO - 2025-08-22 21:04:11 --> Database Driver Class Initialized
INFO - 2025-08-22 21:04:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:04:11 --> Controller Class Initialized
INFO - 2025-08-22 21:04:11 --> Model Class Initialized
INFO - 2025-08-22 21:04:11 --> Model Class Initialized
INFO - 2025-08-22 21:04:11 --> Model Class Initialized
INFO - 2025-08-22 21:04:11 --> Model Class Initialized
INFO - 2025-08-22 21:04:11 --> Model Class Initialized
INFO - 2025-08-22 21:04:11 --> Model Class Initialized
INFO - 2025-08-22 21:04:11 --> Model Class Initialized
INFO - 2025-08-22 21:04:11 --> Model Class Initialized
INFO - 2025-08-22 21:04:11 --> Model Class Initialized
INFO - 2025-08-22 21:04:11 --> Model Class Initialized
INFO - 2025-08-22 21:04:11 --> Model Class Initialized
INFO - 2025-08-22 21:04:11 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 21:04:11 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:04:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:04:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:04:11 --> Encryption Class Initialized
INFO - 2025-08-22 21:04:11 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:04:11 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 21:04:11 --> Final output sent to browser
DEBUG - 2025-08-22 21:04:11 --> Total execution time: 0.1434
INFO - 2025-08-22 21:04:11 --> Config Class Initialized
INFO - 2025-08-22 21:04:11 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:04:11 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:04:11 --> Utf8 Class Initialized
INFO - 2025-08-22 21:04:11 --> URI Class Initialized
INFO - 2025-08-22 21:04:11 --> Router Class Initialized
INFO - 2025-08-22 21:04:11 --> Output Class Initialized
INFO - 2025-08-22 21:04:11 --> Security Class Initialized
DEBUG - 2025-08-22 21:04:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:04:11 --> Input Class Initialized
INFO - 2025-08-22 21:04:11 --> Language Class Initialized
ERROR - 2025-08-22 21:04:11 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:04:11 --> Config Class Initialized
INFO - 2025-08-22 21:04:11 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:04:11 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:04:11 --> Utf8 Class Initialized
INFO - 2025-08-22 21:04:11 --> URI Class Initialized
INFO - 2025-08-22 21:04:11 --> Router Class Initialized
INFO - 2025-08-22 21:04:11 --> Output Class Initialized
INFO - 2025-08-22 21:04:11 --> Security Class Initialized
DEBUG - 2025-08-22 21:04:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:04:11 --> Input Class Initialized
INFO - 2025-08-22 21:04:11 --> Language Class Initialized
ERROR - 2025-08-22 21:04:11 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:04:23 --> Config Class Initialized
INFO - 2025-08-22 21:04:23 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:04:23 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:04:23 --> Utf8 Class Initialized
INFO - 2025-08-22 21:04:23 --> URI Class Initialized
INFO - 2025-08-22 21:04:23 --> Router Class Initialized
INFO - 2025-08-22 21:04:23 --> Output Class Initialized
INFO - 2025-08-22 21:04:23 --> Security Class Initialized
DEBUG - 2025-08-22 21:04:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:04:23 --> Input Class Initialized
INFO - 2025-08-22 21:04:23 --> Language Class Initialized
INFO - 2025-08-22 21:04:23 --> Loader Class Initialized
INFO - 2025-08-22 21:04:23 --> Helper loaded: url_helper
INFO - 2025-08-22 21:04:23 --> Database Driver Class Initialized
INFO - 2025-08-22 21:04:23 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:04:23 --> Controller Class Initialized
INFO - 2025-08-22 21:04:23 --> Model Class Initialized
INFO - 2025-08-22 21:04:23 --> Model Class Initialized
INFO - 2025-08-22 21:04:23 --> Model Class Initialized
INFO - 2025-08-22 21:04:23 --> Model Class Initialized
INFO - 2025-08-22 21:04:23 --> Model Class Initialized
INFO - 2025-08-22 21:04:23 --> Model Class Initialized
INFO - 2025-08-22 21:04:23 --> Model Class Initialized
INFO - 2025-08-22 21:04:23 --> Model Class Initialized
INFO - 2025-08-22 21:04:23 --> Model Class Initialized
INFO - 2025-08-22 21:04:23 --> Model Class Initialized
INFO - 2025-08-22 21:04:23 --> Model Class Initialized
INFO - 2025-08-22 21:04:23 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 21:04:23 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:04:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:04:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:04:23 --> Encryption Class Initialized
INFO - 2025-08-22 21:04:23 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:04:23 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 21:04:23 --> Final output sent to browser
DEBUG - 2025-08-22 21:04:23 --> Total execution time: 0.1433
INFO - 2025-08-22 21:04:24 --> Config Class Initialized
INFO - 2025-08-22 21:04:24 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:04:24 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:04:24 --> Utf8 Class Initialized
INFO - 2025-08-22 21:04:24 --> URI Class Initialized
INFO - 2025-08-22 21:04:24 --> Router Class Initialized
INFO - 2025-08-22 21:04:24 --> Output Class Initialized
INFO - 2025-08-22 21:04:24 --> Security Class Initialized
DEBUG - 2025-08-22 21:04:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:04:24 --> Input Class Initialized
INFO - 2025-08-22 21:04:24 --> Language Class Initialized
ERROR - 2025-08-22 21:04:24 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:04:24 --> Config Class Initialized
INFO - 2025-08-22 21:04:24 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:04:24 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:04:24 --> Utf8 Class Initialized
INFO - 2025-08-22 21:04:24 --> URI Class Initialized
INFO - 2025-08-22 21:04:24 --> Router Class Initialized
INFO - 2025-08-22 21:04:24 --> Output Class Initialized
INFO - 2025-08-22 21:04:24 --> Security Class Initialized
DEBUG - 2025-08-22 21:04:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:04:24 --> Input Class Initialized
INFO - 2025-08-22 21:04:24 --> Language Class Initialized
ERROR - 2025-08-22 21:04:24 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:04:24 --> Config Class Initialized
INFO - 2025-08-22 21:04:24 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:04:24 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:04:24 --> Utf8 Class Initialized
INFO - 2025-08-22 21:04:24 --> URI Class Initialized
INFO - 2025-08-22 21:04:24 --> Router Class Initialized
INFO - 2025-08-22 21:04:24 --> Output Class Initialized
INFO - 2025-08-22 21:04:24 --> Security Class Initialized
DEBUG - 2025-08-22 21:04:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:04:24 --> Input Class Initialized
INFO - 2025-08-22 21:04:24 --> Language Class Initialized
INFO - 2025-08-22 21:04:24 --> Loader Class Initialized
INFO - 2025-08-22 21:04:24 --> Helper loaded: url_helper
INFO - 2025-08-22 21:04:24 --> Database Driver Class Initialized
INFO - 2025-08-22 21:04:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:04:24 --> Controller Class Initialized
DEBUG - 2025-08-22 21:04:24 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:04:24 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:04:24 --> Model Class Initialized
INFO - 2025-08-22 21:04:24 --> Model Class Initialized
INFO - 2025-08-22 21:04:24 --> Model Class Initialized
INFO - 2025-08-22 21:04:24 --> Model Class Initialized
INFO - 2025-08-22 21:04:24 --> Model Class Initialized
INFO - 2025-08-22 21:04:24 --> Model Class Initialized
INFO - 2025-08-22 21:04:24 --> Model Class Initialized
INFO - 2025-08-22 21:04:24 --> Model Class Initialized
INFO - 2025-08-22 21:04:24 --> Model Class Initialized
INFO - 2025-08-22 21:04:24 --> Model Class Initialized
INFO - 2025-08-22 21:04:24 --> Model Class Initialized
INFO - 2025-08-22 21:04:24 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:04:24 --> Config Class Initialized
INFO - 2025-08-22 21:04:24 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:04:24 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:04:24 --> Utf8 Class Initialized
INFO - 2025-08-22 21:04:24 --> URI Class Initialized
INFO - 2025-08-22 21:04:24 --> Router Class Initialized
INFO - 2025-08-22 21:04:24 --> Output Class Initialized
INFO - 2025-08-22 21:04:24 --> Security Class Initialized
DEBUG - 2025-08-22 21:04:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:04:24 --> Input Class Initialized
INFO - 2025-08-22 21:04:24 --> Language Class Initialized
ERROR - 2025-08-22 21:04:24 --> 404 Page Not Found: Faviconico/index
INFO - 2025-08-22 21:04:24 --> Final output sent to browser
DEBUG - 2025-08-22 21:04:24 --> Total execution time: 0.1115
INFO - 2025-08-22 21:04:29 --> Config Class Initialized
INFO - 2025-08-22 21:04:29 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:04:29 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:04:29 --> Utf8 Class Initialized
INFO - 2025-08-22 21:04:29 --> URI Class Initialized
INFO - 2025-08-22 21:04:29 --> Router Class Initialized
INFO - 2025-08-22 21:04:29 --> Output Class Initialized
INFO - 2025-08-22 21:04:29 --> Security Class Initialized
DEBUG - 2025-08-22 21:04:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:04:29 --> Input Class Initialized
INFO - 2025-08-22 21:04:29 --> Language Class Initialized
INFO - 2025-08-22 21:04:29 --> Loader Class Initialized
INFO - 2025-08-22 21:04:29 --> Helper loaded: url_helper
INFO - 2025-08-22 21:04:29 --> Database Driver Class Initialized
INFO - 2025-08-22 21:04:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:04:29 --> Controller Class Initialized
DEBUG - 2025-08-22 21:04:29 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:04:29 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:04:29 --> Model Class Initialized
INFO - 2025-08-22 21:04:29 --> Model Class Initialized
INFO - 2025-08-22 21:04:29 --> Model Class Initialized
INFO - 2025-08-22 21:04:29 --> Model Class Initialized
INFO - 2025-08-22 21:04:29 --> Model Class Initialized
INFO - 2025-08-22 21:04:29 --> Model Class Initialized
INFO - 2025-08-22 21:04:29 --> Model Class Initialized
INFO - 2025-08-22 21:04:29 --> Model Class Initialized
INFO - 2025-08-22 21:04:29 --> Model Class Initialized
INFO - 2025-08-22 21:04:29 --> Model Class Initialized
INFO - 2025-08-22 21:04:29 --> Model Class Initialized
INFO - 2025-08-22 21:04:29 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:04:29 --> Final output sent to browser
DEBUG - 2025-08-22 21:04:29 --> Total execution time: 0.1107
INFO - 2025-08-22 21:04:33 --> Config Class Initialized
INFO - 2025-08-22 21:04:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:04:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:04:33 --> Utf8 Class Initialized
INFO - 2025-08-22 21:04:33 --> URI Class Initialized
INFO - 2025-08-22 21:04:33 --> Router Class Initialized
INFO - 2025-08-22 21:04:33 --> Output Class Initialized
INFO - 2025-08-22 21:04:33 --> Security Class Initialized
DEBUG - 2025-08-22 21:04:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:04:33 --> Input Class Initialized
INFO - 2025-08-22 21:04:33 --> Language Class Initialized
INFO - 2025-08-22 21:04:33 --> Loader Class Initialized
INFO - 2025-08-22 21:04:33 --> Helper loaded: url_helper
INFO - 2025-08-22 21:04:33 --> Database Driver Class Initialized
INFO - 2025-08-22 21:04:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:04:33 --> Controller Class Initialized
DEBUG - 2025-08-22 21:04:33 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:04:33 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:04:33 --> Model Class Initialized
INFO - 2025-08-22 21:04:33 --> Model Class Initialized
INFO - 2025-08-22 21:04:33 --> Model Class Initialized
INFO - 2025-08-22 21:04:33 --> Model Class Initialized
INFO - 2025-08-22 21:04:33 --> Model Class Initialized
INFO - 2025-08-22 21:04:33 --> Model Class Initialized
INFO - 2025-08-22 21:04:33 --> Model Class Initialized
INFO - 2025-08-22 21:04:33 --> Model Class Initialized
INFO - 2025-08-22 21:04:33 --> Model Class Initialized
INFO - 2025-08-22 21:04:33 --> Model Class Initialized
INFO - 2025-08-22 21:04:33 --> Model Class Initialized
INFO - 2025-08-22 21:04:33 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:04:33 --> Final output sent to browser
DEBUG - 2025-08-22 21:04:33 --> Total execution time: 0.1094
INFO - 2025-08-22 21:04:39 --> Config Class Initialized
INFO - 2025-08-22 21:04:39 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:04:39 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:04:39 --> Utf8 Class Initialized
INFO - 2025-08-22 21:04:39 --> URI Class Initialized
INFO - 2025-08-22 21:04:39 --> Router Class Initialized
INFO - 2025-08-22 21:04:39 --> Output Class Initialized
INFO - 2025-08-22 21:04:39 --> Security Class Initialized
DEBUG - 2025-08-22 21:04:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:04:39 --> Input Class Initialized
INFO - 2025-08-22 21:04:39 --> Language Class Initialized
INFO - 2025-08-22 21:04:39 --> Loader Class Initialized
INFO - 2025-08-22 21:04:39 --> Helper loaded: url_helper
INFO - 2025-08-22 21:04:39 --> Database Driver Class Initialized
INFO - 2025-08-22 21:04:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:04:39 --> Controller Class Initialized
INFO - 2025-08-22 21:04:39 --> Model Class Initialized
INFO - 2025-08-22 21:04:39 --> Model Class Initialized
INFO - 2025-08-22 21:04:39 --> Model Class Initialized
INFO - 2025-08-22 21:04:39 --> Model Class Initialized
INFO - 2025-08-22 21:04:39 --> Model Class Initialized
INFO - 2025-08-22 21:04:39 --> Model Class Initialized
INFO - 2025-08-22 21:04:39 --> Model Class Initialized
INFO - 2025-08-22 21:04:39 --> Model Class Initialized
INFO - 2025-08-22 21:04:39 --> Model Class Initialized
INFO - 2025-08-22 21:04:39 --> Model Class Initialized
INFO - 2025-08-22 21:04:39 --> Model Class Initialized
INFO - 2025-08-22 21:04:39 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:04:48 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:04:48 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:04:48 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:04:48 --> Encryption Class Initialized
INFO - 2025-08-22 21:04:48 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:04:48 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:04:48 --> Final output sent to browser
DEBUG - 2025-08-22 21:04:48 --> Total execution time: 8.9702
INFO - 2025-08-22 21:04:48 --> Config Class Initialized
INFO - 2025-08-22 21:04:48 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:04:48 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:04:48 --> Utf8 Class Initialized
INFO - 2025-08-22 21:04:48 --> URI Class Initialized
INFO - 2025-08-22 21:04:48 --> Router Class Initialized
INFO - 2025-08-22 21:04:48 --> Output Class Initialized
INFO - 2025-08-22 21:04:48 --> Security Class Initialized
DEBUG - 2025-08-22 21:04:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:04:48 --> Input Class Initialized
INFO - 2025-08-22 21:04:48 --> Language Class Initialized
ERROR - 2025-08-22 21:04:48 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:04:48 --> Config Class Initialized
INFO - 2025-08-22 21:04:48 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:04:48 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:04:48 --> Utf8 Class Initialized
INFO - 2025-08-22 21:04:48 --> URI Class Initialized
INFO - 2025-08-22 21:04:48 --> Router Class Initialized
INFO - 2025-08-22 21:04:48 --> Output Class Initialized
INFO - 2025-08-22 21:04:48 --> Security Class Initialized
DEBUG - 2025-08-22 21:04:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:04:48 --> Input Class Initialized
INFO - 2025-08-22 21:04:48 --> Language Class Initialized
ERROR - 2025-08-22 21:04:48 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:05:05 --> Config Class Initialized
INFO - 2025-08-22 21:05:05 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:05:05 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:05:05 --> Utf8 Class Initialized
INFO - 2025-08-22 21:05:05 --> URI Class Initialized
INFO - 2025-08-22 21:05:05 --> Router Class Initialized
INFO - 2025-08-22 21:05:05 --> Output Class Initialized
INFO - 2025-08-22 21:05:05 --> Security Class Initialized
DEBUG - 2025-08-22 21:05:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:05:05 --> Input Class Initialized
INFO - 2025-08-22 21:05:05 --> Language Class Initialized
INFO - 2025-08-22 21:05:05 --> Loader Class Initialized
INFO - 2025-08-22 21:05:05 --> Helper loaded: url_helper
INFO - 2025-08-22 21:05:05 --> Database Driver Class Initialized
INFO - 2025-08-22 21:05:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:05:05 --> Controller Class Initialized
INFO - 2025-08-22 21:05:05 --> Model Class Initialized
INFO - 2025-08-22 21:05:05 --> Model Class Initialized
INFO - 2025-08-22 21:05:05 --> Model Class Initialized
INFO - 2025-08-22 21:05:05 --> Model Class Initialized
INFO - 2025-08-22 21:05:05 --> Model Class Initialized
INFO - 2025-08-22 21:05:05 --> Model Class Initialized
INFO - 2025-08-22 21:05:05 --> Model Class Initialized
INFO - 2025-08-22 21:05:05 --> Model Class Initialized
INFO - 2025-08-22 21:05:05 --> Model Class Initialized
INFO - 2025-08-22 21:05:05 --> Model Class Initialized
INFO - 2025-08-22 21:05:05 --> Model Class Initialized
INFO - 2025-08-22 21:05:05 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:05:14 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:05:14 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:05:14 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:05:14 --> Encryption Class Initialized
INFO - 2025-08-22 21:05:14 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:05:14 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:05:14 --> Final output sent to browser
DEBUG - 2025-08-22 21:05:14 --> Total execution time: 8.9264
INFO - 2025-08-22 21:05:14 --> Config Class Initialized
INFO - 2025-08-22 21:05:14 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:05:14 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:05:14 --> Utf8 Class Initialized
INFO - 2025-08-22 21:05:14 --> URI Class Initialized
INFO - 2025-08-22 21:05:14 --> Router Class Initialized
INFO - 2025-08-22 21:05:14 --> Output Class Initialized
INFO - 2025-08-22 21:05:14 --> Security Class Initialized
DEBUG - 2025-08-22 21:05:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:05:14 --> Input Class Initialized
INFO - 2025-08-22 21:05:14 --> Language Class Initialized
ERROR - 2025-08-22 21:05:14 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:05:14 --> Config Class Initialized
INFO - 2025-08-22 21:05:14 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:05:14 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:05:14 --> Utf8 Class Initialized
INFO - 2025-08-22 21:05:14 --> URI Class Initialized
INFO - 2025-08-22 21:05:14 --> Router Class Initialized
INFO - 2025-08-22 21:05:14 --> Output Class Initialized
INFO - 2025-08-22 21:05:14 --> Security Class Initialized
DEBUG - 2025-08-22 21:05:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:05:14 --> Input Class Initialized
INFO - 2025-08-22 21:05:14 --> Language Class Initialized
ERROR - 2025-08-22 21:05:14 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:05:14 --> Config Class Initialized
INFO - 2025-08-22 21:05:14 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:05:14 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:05:14 --> Utf8 Class Initialized
INFO - 2025-08-22 21:05:14 --> URI Class Initialized
INFO - 2025-08-22 21:05:14 --> Router Class Initialized
INFO - 2025-08-22 21:05:14 --> Output Class Initialized
INFO - 2025-08-22 21:05:14 --> Security Class Initialized
DEBUG - 2025-08-22 21:05:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:05:14 --> Input Class Initialized
INFO - 2025-08-22 21:05:14 --> Language Class Initialized
INFO - 2025-08-22 21:05:14 --> Loader Class Initialized
INFO - 2025-08-22 21:05:14 --> Helper loaded: url_helper
INFO - 2025-08-22 21:05:14 --> Database Driver Class Initialized
INFO - 2025-08-22 21:05:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:05:14 --> Controller Class Initialized
DEBUG - 2025-08-22 21:05:14 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:05:14 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:05:14 --> Model Class Initialized
INFO - 2025-08-22 21:05:14 --> Model Class Initialized
INFO - 2025-08-22 21:05:14 --> Model Class Initialized
INFO - 2025-08-22 21:05:14 --> Model Class Initialized
INFO - 2025-08-22 21:05:14 --> Model Class Initialized
INFO - 2025-08-22 21:05:14 --> Model Class Initialized
INFO - 2025-08-22 21:05:14 --> Model Class Initialized
INFO - 2025-08-22 21:05:14 --> Model Class Initialized
INFO - 2025-08-22 21:05:14 --> Model Class Initialized
INFO - 2025-08-22 21:05:14 --> Model Class Initialized
INFO - 2025-08-22 21:05:14 --> Model Class Initialized
INFO - 2025-08-22 21:05:14 --> Config Class Initialized
INFO - 2025-08-22 21:05:14 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:05:14 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:05:14 --> Utf8 Class Initialized
INFO - 2025-08-22 21:05:14 --> URI Class Initialized
INFO - 2025-08-22 21:05:14 --> Router Class Initialized
INFO - 2025-08-22 21:05:14 --> Output Class Initialized
INFO - 2025-08-22 21:05:14 --> Security Class Initialized
DEBUG - 2025-08-22 21:05:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:05:14 --> Input Class Initialized
INFO - 2025-08-22 21:05:14 --> Language Class Initialized
ERROR - 2025-08-22 21:05:14 --> 404 Page Not Found: Faviconico/index
INFO - 2025-08-22 21:05:23 --> Final output sent to browser
DEBUG - 2025-08-22 21:05:23 --> Total execution time: 9.0431
INFO - 2025-08-22 21:07:42 --> Config Class Initialized
INFO - 2025-08-22 21:07:42 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:07:42 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:07:42 --> Utf8 Class Initialized
INFO - 2025-08-22 21:07:42 --> URI Class Initialized
INFO - 2025-08-22 21:07:42 --> Router Class Initialized
INFO - 2025-08-22 21:07:42 --> Output Class Initialized
INFO - 2025-08-22 21:07:42 --> Security Class Initialized
DEBUG - 2025-08-22 21:07:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:07:42 --> Input Class Initialized
INFO - 2025-08-22 21:07:42 --> Language Class Initialized
INFO - 2025-08-22 21:07:42 --> Loader Class Initialized
INFO - 2025-08-22 21:07:42 --> Helper loaded: url_helper
INFO - 2025-08-22 21:07:42 --> Database Driver Class Initialized
INFO - 2025-08-22 21:07:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:07:42 --> Controller Class Initialized
INFO - 2025-08-22 21:07:42 --> Model Class Initialized
INFO - 2025-08-22 21:07:42 --> Model Class Initialized
INFO - 2025-08-22 21:07:42 --> Model Class Initialized
INFO - 2025-08-22 21:07:42 --> Model Class Initialized
INFO - 2025-08-22 21:07:42 --> Model Class Initialized
INFO - 2025-08-22 21:07:42 --> Model Class Initialized
INFO - 2025-08-22 21:07:42 --> Model Class Initialized
INFO - 2025-08-22 21:07:42 --> Model Class Initialized
INFO - 2025-08-22 21:07:42 --> Model Class Initialized
INFO - 2025-08-22 21:07:42 --> Model Class Initialized
INFO - 2025-08-22 21:07:42 --> Model Class Initialized
INFO - 2025-08-22 21:07:42 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:07:51 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:07:51 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:07:51 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:07:51 --> Encryption Class Initialized
INFO - 2025-08-22 21:07:51 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:07:51 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:07:51 --> Final output sent to browser
DEBUG - 2025-08-22 21:07:51 --> Total execution time: 8.9451
INFO - 2025-08-22 21:07:51 --> Config Class Initialized
INFO - 2025-08-22 21:07:51 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:07:51 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:07:51 --> Utf8 Class Initialized
INFO - 2025-08-22 21:07:51 --> URI Class Initialized
INFO - 2025-08-22 21:07:51 --> Router Class Initialized
INFO - 2025-08-22 21:07:51 --> Output Class Initialized
INFO - 2025-08-22 21:07:51 --> Security Class Initialized
DEBUG - 2025-08-22 21:07:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:07:51 --> Input Class Initialized
INFO - 2025-08-22 21:07:51 --> Language Class Initialized
ERROR - 2025-08-22 21:07:51 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:07:52 --> Config Class Initialized
INFO - 2025-08-22 21:07:52 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:07:52 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:07:52 --> Utf8 Class Initialized
INFO - 2025-08-22 21:07:52 --> URI Class Initialized
INFO - 2025-08-22 21:07:52 --> Router Class Initialized
INFO - 2025-08-22 21:07:52 --> Output Class Initialized
INFO - 2025-08-22 21:07:52 --> Security Class Initialized
DEBUG - 2025-08-22 21:07:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:07:52 --> Input Class Initialized
INFO - 2025-08-22 21:07:52 --> Language Class Initialized
ERROR - 2025-08-22 21:07:52 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:07:52 --> Config Class Initialized
INFO - 2025-08-22 21:07:52 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:07:52 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:07:52 --> Utf8 Class Initialized
INFO - 2025-08-22 21:07:52 --> URI Class Initialized
INFO - 2025-08-22 21:07:52 --> Router Class Initialized
INFO - 2025-08-22 21:07:52 --> Output Class Initialized
INFO - 2025-08-22 21:07:52 --> Security Class Initialized
DEBUG - 2025-08-22 21:07:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:07:52 --> Input Class Initialized
INFO - 2025-08-22 21:07:52 --> Language Class Initialized
INFO - 2025-08-22 21:07:52 --> Loader Class Initialized
INFO - 2025-08-22 21:07:52 --> Helper loaded: url_helper
INFO - 2025-08-22 21:07:52 --> Database Driver Class Initialized
INFO - 2025-08-22 21:07:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:07:52 --> Controller Class Initialized
DEBUG - 2025-08-22 21:07:52 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:07:52 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:07:52 --> Model Class Initialized
INFO - 2025-08-22 21:07:52 --> Model Class Initialized
INFO - 2025-08-22 21:07:52 --> Model Class Initialized
INFO - 2025-08-22 21:07:52 --> Model Class Initialized
INFO - 2025-08-22 21:07:52 --> Model Class Initialized
INFO - 2025-08-22 21:07:52 --> Model Class Initialized
INFO - 2025-08-22 21:07:52 --> Model Class Initialized
INFO - 2025-08-22 21:07:52 --> Model Class Initialized
INFO - 2025-08-22 21:07:52 --> Model Class Initialized
INFO - 2025-08-22 21:07:52 --> Model Class Initialized
INFO - 2025-08-22 21:07:52 --> Model Class Initialized
INFO - 2025-08-22 21:07:56 --> Config Class Initialized
INFO - 2025-08-22 21:07:56 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:07:56 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:07:56 --> Utf8 Class Initialized
INFO - 2025-08-22 21:07:56 --> URI Class Initialized
INFO - 2025-08-22 21:07:56 --> Router Class Initialized
INFO - 2025-08-22 21:07:56 --> Output Class Initialized
INFO - 2025-08-22 21:07:56 --> Security Class Initialized
DEBUG - 2025-08-22 21:07:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:07:56 --> Input Class Initialized
INFO - 2025-08-22 21:07:56 --> Language Class Initialized
INFO - 2025-08-22 21:07:56 --> Loader Class Initialized
INFO - 2025-08-22 21:07:56 --> Helper loaded: url_helper
INFO - 2025-08-22 21:07:56 --> Database Driver Class Initialized
INFO - 2025-08-22 21:07:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:07:56 --> Controller Class Initialized
INFO - 2025-08-22 21:07:56 --> Model Class Initialized
INFO - 2025-08-22 21:07:56 --> Model Class Initialized
INFO - 2025-08-22 21:07:56 --> Model Class Initialized
INFO - 2025-08-22 21:07:56 --> Model Class Initialized
INFO - 2025-08-22 21:07:56 --> Model Class Initialized
INFO - 2025-08-22 21:07:56 --> Model Class Initialized
INFO - 2025-08-22 21:07:56 --> Model Class Initialized
INFO - 2025-08-22 21:07:56 --> Model Class Initialized
INFO - 2025-08-22 21:07:56 --> Model Class Initialized
INFO - 2025-08-22 21:07:56 --> Model Class Initialized
INFO - 2025-08-22 21:07:56 --> Model Class Initialized
INFO - 2025-08-22 21:07:56 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 21:07:57 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:07:57 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:07:57 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:07:57 --> Encryption Class Initialized
INFO - 2025-08-22 21:07:57 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:07:57 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 21:07:57 --> Final output sent to browser
DEBUG - 2025-08-22 21:07:57 --> Total execution time: 0.1536
INFO - 2025-08-22 21:07:57 --> Config Class Initialized
INFO - 2025-08-22 21:07:57 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:07:57 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:07:57 --> Utf8 Class Initialized
INFO - 2025-08-22 21:07:57 --> URI Class Initialized
INFO - 2025-08-22 21:07:57 --> Router Class Initialized
INFO - 2025-08-22 21:07:57 --> Output Class Initialized
INFO - 2025-08-22 21:07:57 --> Security Class Initialized
DEBUG - 2025-08-22 21:07:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:07:57 --> Input Class Initialized
INFO - 2025-08-22 21:07:57 --> Language Class Initialized
ERROR - 2025-08-22 21:07:57 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:07:57 --> Config Class Initialized
INFO - 2025-08-22 21:07:57 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:07:57 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:07:57 --> Utf8 Class Initialized
INFO - 2025-08-22 21:07:57 --> URI Class Initialized
INFO - 2025-08-22 21:07:57 --> Router Class Initialized
INFO - 2025-08-22 21:07:57 --> Output Class Initialized
INFO - 2025-08-22 21:07:57 --> Security Class Initialized
DEBUG - 2025-08-22 21:07:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:07:57 --> Input Class Initialized
INFO - 2025-08-22 21:07:57 --> Language Class Initialized
ERROR - 2025-08-22 21:07:57 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:07:57 --> Config Class Initialized
INFO - 2025-08-22 21:07:57 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:07:57 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:07:57 --> Utf8 Class Initialized
INFO - 2025-08-22 21:07:57 --> URI Class Initialized
INFO - 2025-08-22 21:07:57 --> Router Class Initialized
INFO - 2025-08-22 21:07:57 --> Output Class Initialized
INFO - 2025-08-22 21:07:57 --> Security Class Initialized
DEBUG - 2025-08-22 21:07:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:07:57 --> Input Class Initialized
INFO - 2025-08-22 21:07:57 --> Language Class Initialized
INFO - 2025-08-22 21:07:57 --> Loader Class Initialized
INFO - 2025-08-22 21:07:57 --> Helper loaded: url_helper
INFO - 2025-08-22 21:07:57 --> Database Driver Class Initialized
INFO - 2025-08-22 21:07:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:07:57 --> Controller Class Initialized
DEBUG - 2025-08-22 21:07:57 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:07:57 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:07:57 --> Model Class Initialized
INFO - 2025-08-22 21:07:57 --> Model Class Initialized
INFO - 2025-08-22 21:07:57 --> Model Class Initialized
INFO - 2025-08-22 21:07:57 --> Model Class Initialized
INFO - 2025-08-22 21:07:57 --> Model Class Initialized
INFO - 2025-08-22 21:07:57 --> Model Class Initialized
INFO - 2025-08-22 21:07:57 --> Model Class Initialized
INFO - 2025-08-22 21:07:57 --> Model Class Initialized
INFO - 2025-08-22 21:07:57 --> Model Class Initialized
INFO - 2025-08-22 21:07:57 --> Model Class Initialized
INFO - 2025-08-22 21:07:57 --> Model Class Initialized
INFO - 2025-08-22 21:07:57 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:07:57 --> Final output sent to browser
DEBUG - 2025-08-22 21:07:57 --> Total execution time: 0.1147
INFO - 2025-08-22 21:08:01 --> Config Class Initialized
INFO - 2025-08-22 21:08:01 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:08:01 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:08:01 --> Utf8 Class Initialized
INFO - 2025-08-22 21:08:01 --> URI Class Initialized
INFO - 2025-08-22 21:08:01 --> Router Class Initialized
INFO - 2025-08-22 21:08:01 --> Output Class Initialized
INFO - 2025-08-22 21:08:01 --> Security Class Initialized
DEBUG - 2025-08-22 21:08:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:08:01 --> Input Class Initialized
INFO - 2025-08-22 21:08:01 --> Language Class Initialized
INFO - 2025-08-22 21:08:01 --> Loader Class Initialized
INFO - 2025-08-22 21:08:01 --> Helper loaded: url_helper
INFO - 2025-08-22 21:08:01 --> Database Driver Class Initialized
INFO - 2025-08-22 21:08:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:08:01 --> Controller Class Initialized
DEBUG - 2025-08-22 21:08:01 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:08:01 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:08:01 --> Model Class Initialized
INFO - 2025-08-22 21:08:01 --> Model Class Initialized
INFO - 2025-08-22 21:08:01 --> Model Class Initialized
INFO - 2025-08-22 21:08:01 --> Model Class Initialized
INFO - 2025-08-22 21:08:01 --> Model Class Initialized
INFO - 2025-08-22 21:08:01 --> Model Class Initialized
INFO - 2025-08-22 21:08:01 --> Model Class Initialized
INFO - 2025-08-22 21:08:01 --> Model Class Initialized
INFO - 2025-08-22 21:08:01 --> Model Class Initialized
INFO - 2025-08-22 21:08:01 --> Model Class Initialized
INFO - 2025-08-22 21:08:01 --> Model Class Initialized
INFO - 2025-08-22 21:08:01 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:08:01 --> Final output sent to browser
DEBUG - 2025-08-22 21:08:01 --> Total execution time: 0.1169
INFO - 2025-08-22 21:08:01 --> Final output sent to browser
DEBUG - 2025-08-22 21:08:01 --> Total execution time: 9.0639
INFO - 2025-08-22 21:08:02 --> Config Class Initialized
INFO - 2025-08-22 21:08:02 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:08:02 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:08:02 --> Utf8 Class Initialized
INFO - 2025-08-22 21:08:02 --> URI Class Initialized
INFO - 2025-08-22 21:08:02 --> Router Class Initialized
INFO - 2025-08-22 21:08:02 --> Output Class Initialized
INFO - 2025-08-22 21:08:02 --> Security Class Initialized
DEBUG - 2025-08-22 21:08:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:08:02 --> Input Class Initialized
INFO - 2025-08-22 21:08:02 --> Language Class Initialized
INFO - 2025-08-22 21:08:02 --> Loader Class Initialized
INFO - 2025-08-22 21:08:02 --> Helper loaded: url_helper
INFO - 2025-08-22 21:08:02 --> Database Driver Class Initialized
INFO - 2025-08-22 21:08:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:08:02 --> Controller Class Initialized
INFO - 2025-08-22 21:08:02 --> Model Class Initialized
INFO - 2025-08-22 21:08:02 --> Model Class Initialized
INFO - 2025-08-22 21:08:02 --> Model Class Initialized
INFO - 2025-08-22 21:08:02 --> Model Class Initialized
INFO - 2025-08-22 21:08:02 --> Model Class Initialized
INFO - 2025-08-22 21:08:02 --> Model Class Initialized
INFO - 2025-08-22 21:08:02 --> Model Class Initialized
INFO - 2025-08-22 21:08:02 --> Model Class Initialized
INFO - 2025-08-22 21:08:02 --> Model Class Initialized
INFO - 2025-08-22 21:08:02 --> Model Class Initialized
INFO - 2025-08-22 21:08:02 --> Model Class Initialized
INFO - 2025-08-22 21:08:02 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:08:02 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:08:02 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:08:02 --> Encryption Class Initialized
INFO - 2025-08-22 21:08:02 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:08:02 --> File loaded: /var/www/noble/application/views/admin/song_upload_v.php
INFO - 2025-08-22 21:08:02 --> Final output sent to browser
DEBUG - 2025-08-22 21:08:02 --> Total execution time: 0.0049
INFO - 2025-08-22 21:08:02 --> Config Class Initialized
INFO - 2025-08-22 21:08:02 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:08:02 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:08:02 --> Utf8 Class Initialized
INFO - 2025-08-22 21:08:02 --> URI Class Initialized
INFO - 2025-08-22 21:08:02 --> Router Class Initialized
INFO - 2025-08-22 21:08:02 --> Output Class Initialized
INFO - 2025-08-22 21:08:02 --> Security Class Initialized
DEBUG - 2025-08-22 21:08:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:08:02 --> Input Class Initialized
INFO - 2025-08-22 21:08:02 --> Language Class Initialized
ERROR - 2025-08-22 21:08:02 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:08:06 --> Config Class Initialized
INFO - 2025-08-22 21:08:06 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:08:06 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:08:06 --> Utf8 Class Initialized
INFO - 2025-08-22 21:08:06 --> URI Class Initialized
INFO - 2025-08-22 21:08:06 --> Router Class Initialized
INFO - 2025-08-22 21:08:06 --> Output Class Initialized
INFO - 2025-08-22 21:08:06 --> Security Class Initialized
DEBUG - 2025-08-22 21:08:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:08:06 --> Input Class Initialized
INFO - 2025-08-22 21:08:06 --> Language Class Initialized
INFO - 2025-08-22 21:08:06 --> Loader Class Initialized
INFO - 2025-08-22 21:08:06 --> Helper loaded: url_helper
INFO - 2025-08-22 21:08:06 --> Database Driver Class Initialized
INFO - 2025-08-22 21:08:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:08:06 --> Controller Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 21:08:06 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:08:06 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:08:06 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:08:06 --> Encryption Class Initialized
INFO - 2025-08-22 21:08:06 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:08:06 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 21:08:06 --> Final output sent to browser
DEBUG - 2025-08-22 21:08:06 --> Total execution time: 0.1418
INFO - 2025-08-22 21:08:06 --> Config Class Initialized
INFO - 2025-08-22 21:08:06 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:08:06 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:08:06 --> Utf8 Class Initialized
INFO - 2025-08-22 21:08:06 --> URI Class Initialized
INFO - 2025-08-22 21:08:06 --> Router Class Initialized
INFO - 2025-08-22 21:08:06 --> Output Class Initialized
INFO - 2025-08-22 21:08:06 --> Security Class Initialized
DEBUG - 2025-08-22 21:08:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:08:06 --> Input Class Initialized
INFO - 2025-08-22 21:08:06 --> Language Class Initialized
ERROR - 2025-08-22 21:08:06 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:08:06 --> Config Class Initialized
INFO - 2025-08-22 21:08:06 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:08:06 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:08:06 --> Utf8 Class Initialized
INFO - 2025-08-22 21:08:06 --> URI Class Initialized
INFO - 2025-08-22 21:08:06 --> Router Class Initialized
INFO - 2025-08-22 21:08:06 --> Output Class Initialized
INFO - 2025-08-22 21:08:06 --> Security Class Initialized
DEBUG - 2025-08-22 21:08:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:08:06 --> Input Class Initialized
INFO - 2025-08-22 21:08:06 --> Language Class Initialized
ERROR - 2025-08-22 21:08:06 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:08:06 --> Config Class Initialized
INFO - 2025-08-22 21:08:06 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:08:06 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:08:06 --> Utf8 Class Initialized
INFO - 2025-08-22 21:08:06 --> URI Class Initialized
INFO - 2025-08-22 21:08:06 --> Router Class Initialized
INFO - 2025-08-22 21:08:06 --> Output Class Initialized
INFO - 2025-08-22 21:08:06 --> Security Class Initialized
DEBUG - 2025-08-22 21:08:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:08:06 --> Input Class Initialized
INFO - 2025-08-22 21:08:06 --> Language Class Initialized
INFO - 2025-08-22 21:08:06 --> Loader Class Initialized
INFO - 2025-08-22 21:08:06 --> Helper loaded: url_helper
INFO - 2025-08-22 21:08:06 --> Database Driver Class Initialized
INFO - 2025-08-22 21:08:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:08:06 --> Controller Class Initialized
DEBUG - 2025-08-22 21:08:06 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:08:06 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> Model Class Initialized
INFO - 2025-08-22 21:08:06 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:08:06 --> Final output sent to browser
DEBUG - 2025-08-22 21:08:06 --> Total execution time: 0.1078
INFO - 2025-08-22 21:08:09 --> Config Class Initialized
INFO - 2025-08-22 21:08:09 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:08:09 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:08:09 --> Utf8 Class Initialized
INFO - 2025-08-22 21:08:09 --> URI Class Initialized
INFO - 2025-08-22 21:08:09 --> Router Class Initialized
INFO - 2025-08-22 21:08:09 --> Output Class Initialized
INFO - 2025-08-22 21:08:09 --> Security Class Initialized
DEBUG - 2025-08-22 21:08:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:08:09 --> Input Class Initialized
INFO - 2025-08-22 21:08:09 --> Language Class Initialized
INFO - 2025-08-22 21:08:09 --> Loader Class Initialized
INFO - 2025-08-22 21:08:09 --> Helper loaded: url_helper
INFO - 2025-08-22 21:08:09 --> Database Driver Class Initialized
INFO - 2025-08-22 21:08:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:08:09 --> Controller Class Initialized
DEBUG - 2025-08-22 21:08:09 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:08:09 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:08:09 --> Model Class Initialized
INFO - 2025-08-22 21:08:09 --> Model Class Initialized
INFO - 2025-08-22 21:08:09 --> Model Class Initialized
INFO - 2025-08-22 21:08:09 --> Model Class Initialized
INFO - 2025-08-22 21:08:09 --> Model Class Initialized
INFO - 2025-08-22 21:08:09 --> Model Class Initialized
INFO - 2025-08-22 21:08:09 --> Model Class Initialized
INFO - 2025-08-22 21:08:09 --> Model Class Initialized
INFO - 2025-08-22 21:08:09 --> Model Class Initialized
INFO - 2025-08-22 21:08:09 --> Model Class Initialized
INFO - 2025-08-22 21:08:09 --> Model Class Initialized
INFO - 2025-08-22 21:08:09 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:08:10 --> Final output sent to browser
DEBUG - 2025-08-22 21:08:10 --> Total execution time: 0.1105
INFO - 2025-08-22 21:08:11 --> Config Class Initialized
INFO - 2025-08-22 21:08:11 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:08:11 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:08:11 --> Utf8 Class Initialized
INFO - 2025-08-22 21:08:11 --> URI Class Initialized
INFO - 2025-08-22 21:08:11 --> Router Class Initialized
INFO - 2025-08-22 21:08:11 --> Output Class Initialized
INFO - 2025-08-22 21:08:11 --> Security Class Initialized
DEBUG - 2025-08-22 21:08:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:08:11 --> Input Class Initialized
INFO - 2025-08-22 21:08:11 --> Language Class Initialized
INFO - 2025-08-22 21:08:11 --> Loader Class Initialized
INFO - 2025-08-22 21:08:11 --> Helper loaded: url_helper
INFO - 2025-08-22 21:08:11 --> Database Driver Class Initialized
INFO - 2025-08-22 21:08:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:08:11 --> Controller Class Initialized
INFO - 2025-08-22 21:08:11 --> Model Class Initialized
INFO - 2025-08-22 21:08:11 --> Model Class Initialized
INFO - 2025-08-22 21:08:11 --> Model Class Initialized
INFO - 2025-08-22 21:08:11 --> Model Class Initialized
INFO - 2025-08-22 21:08:11 --> Model Class Initialized
INFO - 2025-08-22 21:08:11 --> Model Class Initialized
INFO - 2025-08-22 21:08:11 --> Model Class Initialized
INFO - 2025-08-22 21:08:11 --> Model Class Initialized
INFO - 2025-08-22 21:08:11 --> Model Class Initialized
INFO - 2025-08-22 21:08:11 --> Model Class Initialized
INFO - 2025-08-22 21:08:11 --> Model Class Initialized
INFO - 2025-08-22 21:08:11 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:08:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:08:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:08:11 --> Encryption Class Initialized
INFO - 2025-08-22 21:08:11 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:08:11 --> File loaded: /var/www/noble/application/views/admin/song_upload_v.php
INFO - 2025-08-22 21:08:11 --> Final output sent to browser
DEBUG - 2025-08-22 21:08:11 --> Total execution time: 0.0048
INFO - 2025-08-22 21:08:11 --> Config Class Initialized
INFO - 2025-08-22 21:08:11 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:08:11 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:08:11 --> Utf8 Class Initialized
INFO - 2025-08-22 21:08:11 --> URI Class Initialized
INFO - 2025-08-22 21:08:11 --> Router Class Initialized
INFO - 2025-08-22 21:08:11 --> Output Class Initialized
INFO - 2025-08-22 21:08:11 --> Security Class Initialized
DEBUG - 2025-08-22 21:08:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:08:11 --> Input Class Initialized
INFO - 2025-08-22 21:08:11 --> Language Class Initialized
ERROR - 2025-08-22 21:08:11 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:08:14 --> Config Class Initialized
INFO - 2025-08-22 21:08:14 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:08:14 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:08:14 --> Utf8 Class Initialized
INFO - 2025-08-22 21:08:14 --> URI Class Initialized
INFO - 2025-08-22 21:08:14 --> Router Class Initialized
INFO - 2025-08-22 21:08:14 --> Output Class Initialized
INFO - 2025-08-22 21:08:14 --> Security Class Initialized
DEBUG - 2025-08-22 21:08:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:08:14 --> Input Class Initialized
INFO - 2025-08-22 21:08:14 --> Language Class Initialized
INFO - 2025-08-22 21:08:14 --> Loader Class Initialized
INFO - 2025-08-22 21:08:14 --> Helper loaded: url_helper
INFO - 2025-08-22 21:08:14 --> Database Driver Class Initialized
INFO - 2025-08-22 21:08:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:08:14 --> Controller Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 21:08:14 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:08:14 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:08:14 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:08:14 --> Encryption Class Initialized
INFO - 2025-08-22 21:08:14 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:08:14 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 21:08:14 --> Final output sent to browser
DEBUG - 2025-08-22 21:08:14 --> Total execution time: 0.1417
INFO - 2025-08-22 21:08:14 --> Config Class Initialized
INFO - 2025-08-22 21:08:14 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:08:14 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:08:14 --> Utf8 Class Initialized
INFO - 2025-08-22 21:08:14 --> URI Class Initialized
INFO - 2025-08-22 21:08:14 --> Router Class Initialized
INFO - 2025-08-22 21:08:14 --> Output Class Initialized
INFO - 2025-08-22 21:08:14 --> Security Class Initialized
DEBUG - 2025-08-22 21:08:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:08:14 --> Input Class Initialized
INFO - 2025-08-22 21:08:14 --> Language Class Initialized
ERROR - 2025-08-22 21:08:14 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:08:14 --> Config Class Initialized
INFO - 2025-08-22 21:08:14 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:08:14 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:08:14 --> Utf8 Class Initialized
INFO - 2025-08-22 21:08:14 --> URI Class Initialized
INFO - 2025-08-22 21:08:14 --> Router Class Initialized
INFO - 2025-08-22 21:08:14 --> Output Class Initialized
INFO - 2025-08-22 21:08:14 --> Security Class Initialized
DEBUG - 2025-08-22 21:08:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:08:14 --> Input Class Initialized
INFO - 2025-08-22 21:08:14 --> Language Class Initialized
ERROR - 2025-08-22 21:08:14 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:08:14 --> Config Class Initialized
INFO - 2025-08-22 21:08:14 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:08:14 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:08:14 --> Utf8 Class Initialized
INFO - 2025-08-22 21:08:14 --> URI Class Initialized
INFO - 2025-08-22 21:08:14 --> Router Class Initialized
INFO - 2025-08-22 21:08:14 --> Output Class Initialized
INFO - 2025-08-22 21:08:14 --> Security Class Initialized
DEBUG - 2025-08-22 21:08:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:08:14 --> Input Class Initialized
INFO - 2025-08-22 21:08:14 --> Language Class Initialized
INFO - 2025-08-22 21:08:14 --> Loader Class Initialized
INFO - 2025-08-22 21:08:14 --> Helper loaded: url_helper
INFO - 2025-08-22 21:08:14 --> Database Driver Class Initialized
INFO - 2025-08-22 21:08:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:08:14 --> Controller Class Initialized
DEBUG - 2025-08-22 21:08:14 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:08:14 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> Model Class Initialized
INFO - 2025-08-22 21:08:14 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:08:14 --> Final output sent to browser
DEBUG - 2025-08-22 21:08:14 --> Total execution time: 0.1118
INFO - 2025-08-22 21:12:01 --> Config Class Initialized
INFO - 2025-08-22 21:12:01 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:12:01 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:12:01 --> Utf8 Class Initialized
INFO - 2025-08-22 21:12:01 --> URI Class Initialized
DEBUG - 2025-08-22 21:12:01 --> No URI present. Default controller set.
INFO - 2025-08-22 21:12:01 --> Router Class Initialized
INFO - 2025-08-22 21:12:01 --> Output Class Initialized
INFO - 2025-08-22 21:12:01 --> Security Class Initialized
DEBUG - 2025-08-22 21:12:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:12:01 --> Input Class Initialized
INFO - 2025-08-22 21:12:01 --> Language Class Initialized
INFO - 2025-08-22 21:12:01 --> Loader Class Initialized
INFO - 2025-08-22 21:12:01 --> Helper loaded: url_helper
INFO - 2025-08-22 21:12:01 --> Database Driver Class Initialized
INFO - 2025-08-22 21:12:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:12:01 --> Controller Class Initialized
INFO - 2025-08-22 21:12:01 --> Final output sent to browser
DEBUG - 2025-08-22 21:12:01 --> Total execution time: 0.0033
INFO - 2025-08-22 21:12:01 --> Config Class Initialized
INFO - 2025-08-22 21:12:01 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:12:01 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:12:01 --> Utf8 Class Initialized
INFO - 2025-08-22 21:12:01 --> URI Class Initialized
INFO - 2025-08-22 21:12:01 --> Router Class Initialized
INFO - 2025-08-22 21:12:01 --> Output Class Initialized
INFO - 2025-08-22 21:12:01 --> Security Class Initialized
DEBUG - 2025-08-22 21:12:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:12:01 --> Input Class Initialized
INFO - 2025-08-22 21:12:01 --> Language Class Initialized
ERROR - 2025-08-22 21:12:01 --> 404 Page Not Found: Faviconico/index
INFO - 2025-08-22 21:12:07 --> Config Class Initialized
INFO - 2025-08-22 21:12:07 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:12:07 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:12:07 --> Utf8 Class Initialized
INFO - 2025-08-22 21:12:07 --> URI Class Initialized
INFO - 2025-08-22 21:12:07 --> Router Class Initialized
INFO - 2025-08-22 21:12:07 --> Output Class Initialized
INFO - 2025-08-22 21:12:07 --> Security Class Initialized
DEBUG - 2025-08-22 21:12:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:12:07 --> Input Class Initialized
INFO - 2025-08-22 21:12:07 --> Language Class Initialized
INFO - 2025-08-22 21:12:07 --> Loader Class Initialized
INFO - 2025-08-22 21:12:07 --> Helper loaded: url_helper
INFO - 2025-08-22 21:12:07 --> Database Driver Class Initialized
INFO - 2025-08-22 21:12:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:12:07 --> Controller Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:12:07 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:12:07 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:12:07 --> Encryption Class Initialized
INFO - 2025-08-22 21:12:07 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:12:07 --> Config Class Initialized
INFO - 2025-08-22 21:12:07 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:12:07 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:12:07 --> Utf8 Class Initialized
INFO - 2025-08-22 21:12:07 --> URI Class Initialized
INFO - 2025-08-22 21:12:07 --> Router Class Initialized
INFO - 2025-08-22 21:12:07 --> Output Class Initialized
INFO - 2025-08-22 21:12:07 --> Security Class Initialized
DEBUG - 2025-08-22 21:12:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:12:07 --> Input Class Initialized
INFO - 2025-08-22 21:12:07 --> Language Class Initialized
INFO - 2025-08-22 21:12:07 --> Loader Class Initialized
INFO - 2025-08-22 21:12:07 --> Helper loaded: url_helper
INFO - 2025-08-22 21:12:07 --> Database Driver Class Initialized
INFO - 2025-08-22 21:12:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:12:07 --> Controller Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> Model Class Initialized
INFO - 2025-08-22 21:12:07 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:12:10 --> Config Class Initialized
INFO - 2025-08-22 21:12:10 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:12:10 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:12:10 --> Utf8 Class Initialized
INFO - 2025-08-22 21:12:10 --> URI Class Initialized
INFO - 2025-08-22 21:12:10 --> Router Class Initialized
INFO - 2025-08-22 21:12:10 --> Output Class Initialized
INFO - 2025-08-22 21:12:10 --> Security Class Initialized
DEBUG - 2025-08-22 21:12:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:12:10 --> Input Class Initialized
INFO - 2025-08-22 21:12:10 --> Language Class Initialized
INFO - 2025-08-22 21:12:10 --> Loader Class Initialized
INFO - 2025-08-22 21:12:10 --> Helper loaded: url_helper
INFO - 2025-08-22 21:12:10 --> Database Driver Class Initialized
INFO - 2025-08-22 21:12:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:12:10 --> Controller Class Initialized
INFO - 2025-08-22 21:12:10 --> Model Class Initialized
INFO - 2025-08-22 21:12:10 --> Model Class Initialized
INFO - 2025-08-22 21:12:10 --> Model Class Initialized
INFO - 2025-08-22 21:12:10 --> Model Class Initialized
INFO - 2025-08-22 21:12:10 --> Model Class Initialized
INFO - 2025-08-22 21:12:10 --> Model Class Initialized
INFO - 2025-08-22 21:12:10 --> Model Class Initialized
INFO - 2025-08-22 21:12:10 --> Model Class Initialized
INFO - 2025-08-22 21:12:10 --> Model Class Initialized
INFO - 2025-08-22 21:12:10 --> Model Class Initialized
INFO - 2025-08-22 21:12:10 --> Model Class Initialized
INFO - 2025-08-22 21:12:10 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:12:16 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:12:16 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:12:16 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:12:16 --> Encryption Class Initialized
INFO - 2025-08-22 21:12:16 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:12:16 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:12:19 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:12:19 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:12:19 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:12:19 --> Encryption Class Initialized
INFO - 2025-08-22 21:12:19 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:12:19 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:12:19 --> Final output sent to browser
DEBUG - 2025-08-22 21:12:19 --> Total execution time: 9.4904
INFO - 2025-08-22 21:12:19 --> Config Class Initialized
INFO - 2025-08-22 21:12:19 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:12:19 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:12:19 --> Utf8 Class Initialized
INFO - 2025-08-22 21:12:19 --> URI Class Initialized
INFO - 2025-08-22 21:12:19 --> Router Class Initialized
INFO - 2025-08-22 21:12:19 --> Output Class Initialized
INFO - 2025-08-22 21:12:19 --> Security Class Initialized
DEBUG - 2025-08-22 21:12:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:12:19 --> Input Class Initialized
INFO - 2025-08-22 21:12:19 --> Language Class Initialized
INFO - 2025-08-22 21:12:19 --> Loader Class Initialized
INFO - 2025-08-22 21:12:19 --> Helper loaded: url_helper
INFO - 2025-08-22 21:12:19 --> Database Driver Class Initialized
INFO - 2025-08-22 21:12:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:12:19 --> Controller Class Initialized
DEBUG - 2025-08-22 21:12:19 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:12:19 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:12:19 --> Model Class Initialized
INFO - 2025-08-22 21:12:19 --> Model Class Initialized
INFO - 2025-08-22 21:12:19 --> Model Class Initialized
INFO - 2025-08-22 21:12:19 --> Model Class Initialized
INFO - 2025-08-22 21:12:19 --> Model Class Initialized
INFO - 2025-08-22 21:12:19 --> Model Class Initialized
INFO - 2025-08-22 21:12:19 --> Model Class Initialized
INFO - 2025-08-22 21:12:19 --> Model Class Initialized
INFO - 2025-08-22 21:12:19 --> Model Class Initialized
INFO - 2025-08-22 21:12:19 --> Model Class Initialized
INFO - 2025-08-22 21:12:19 --> Model Class Initialized
INFO - 2025-08-22 21:12:21 --> Config Class Initialized
INFO - 2025-08-22 21:12:21 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:12:21 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:12:21 --> Utf8 Class Initialized
INFO - 2025-08-22 21:12:21 --> URI Class Initialized
INFO - 2025-08-22 21:12:21 --> Router Class Initialized
INFO - 2025-08-22 21:12:21 --> Output Class Initialized
INFO - 2025-08-22 21:12:21 --> Security Class Initialized
DEBUG - 2025-08-22 21:12:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:12:21 --> Input Class Initialized
INFO - 2025-08-22 21:12:21 --> Language Class Initialized
ERROR - 2025-08-22 21:12:21 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:12:21 --> Config Class Initialized
INFO - 2025-08-22 21:12:21 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:12:21 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:12:21 --> Utf8 Class Initialized
INFO - 2025-08-22 21:12:21 --> URI Class Initialized
INFO - 2025-08-22 21:12:21 --> Router Class Initialized
INFO - 2025-08-22 21:12:21 --> Output Class Initialized
INFO - 2025-08-22 21:12:21 --> Security Class Initialized
DEBUG - 2025-08-22 21:12:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:12:21 --> Input Class Initialized
INFO - 2025-08-22 21:12:21 --> Language Class Initialized
ERROR - 2025-08-22 21:12:21 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:12:27 --> Config Class Initialized
INFO - 2025-08-22 21:12:27 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:12:27 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:12:27 --> Utf8 Class Initialized
INFO - 2025-08-22 21:12:27 --> URI Class Initialized
DEBUG - 2025-08-22 21:12:27 --> No URI present. Default controller set.
INFO - 2025-08-22 21:12:27 --> Router Class Initialized
INFO - 2025-08-22 21:12:27 --> Output Class Initialized
INFO - 2025-08-22 21:12:27 --> Security Class Initialized
DEBUG - 2025-08-22 21:12:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:12:27 --> Input Class Initialized
INFO - 2025-08-22 21:12:27 --> Language Class Initialized
INFO - 2025-08-22 21:12:27 --> Loader Class Initialized
INFO - 2025-08-22 21:12:27 --> Helper loaded: url_helper
INFO - 2025-08-22 21:12:27 --> Database Driver Class Initialized
INFO - 2025-08-22 21:12:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:12:27 --> Controller Class Initialized
INFO - 2025-08-22 21:12:27 --> Final output sent to browser
DEBUG - 2025-08-22 21:12:27 --> Total execution time: 0.0031
INFO - 2025-08-22 21:12:28 --> Final output sent to browser
DEBUG - 2025-08-22 21:12:28 --> Total execution time: 9.0167
INFO - 2025-08-22 21:12:46 --> Config Class Initialized
INFO - 2025-08-22 21:12:46 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:12:46 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:12:46 --> Utf8 Class Initialized
INFO - 2025-08-22 21:12:46 --> URI Class Initialized
INFO - 2025-08-22 21:12:46 --> Router Class Initialized
INFO - 2025-08-22 21:12:46 --> Output Class Initialized
INFO - 2025-08-22 21:12:46 --> Security Class Initialized
DEBUG - 2025-08-22 21:12:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:12:46 --> Input Class Initialized
INFO - 2025-08-22 21:12:46 --> Language Class Initialized
ERROR - 2025-08-22 21:12:46 --> 404 Page Not Found: Env/index
INFO - 2025-08-22 21:12:47 --> Config Class Initialized
INFO - 2025-08-22 21:12:47 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:12:47 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:12:47 --> Utf8 Class Initialized
INFO - 2025-08-22 21:12:47 --> URI Class Initialized
DEBUG - 2025-08-22 21:12:47 --> No URI present. Default controller set.
INFO - 2025-08-22 21:12:47 --> Router Class Initialized
INFO - 2025-08-22 21:12:47 --> Output Class Initialized
INFO - 2025-08-22 21:12:47 --> Security Class Initialized
DEBUG - 2025-08-22 21:12:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:12:47 --> Input Class Initialized
INFO - 2025-08-22 21:12:47 --> Language Class Initialized
INFO - 2025-08-22 21:12:47 --> Loader Class Initialized
INFO - 2025-08-22 21:12:47 --> Helper loaded: url_helper
INFO - 2025-08-22 21:12:47 --> Database Driver Class Initialized
INFO - 2025-08-22 21:12:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:12:47 --> Controller Class Initialized
INFO - 2025-08-22 21:12:47 --> Final output sent to browser
DEBUG - 2025-08-22 21:12:47 --> Total execution time: 0.0031
INFO - 2025-08-22 21:12:53 --> Config Class Initialized
INFO - 2025-08-22 21:12:53 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:12:53 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:12:53 --> Utf8 Class Initialized
INFO - 2025-08-22 21:12:53 --> URI Class Initialized
INFO - 2025-08-22 21:12:53 --> Router Class Initialized
INFO - 2025-08-22 21:12:53 --> Output Class Initialized
INFO - 2025-08-22 21:12:53 --> Security Class Initialized
DEBUG - 2025-08-22 21:12:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:12:53 --> Input Class Initialized
INFO - 2025-08-22 21:12:53 --> Language Class Initialized
INFO - 2025-08-22 21:12:53 --> Loader Class Initialized
INFO - 2025-08-22 21:12:53 --> Helper loaded: url_helper
INFO - 2025-08-22 21:12:53 --> Database Driver Class Initialized
INFO - 2025-08-22 21:12:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:12:53 --> Controller Class Initialized
DEBUG - 2025-08-22 21:12:53 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:12:53 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:12:53 --> Model Class Initialized
INFO - 2025-08-22 21:12:53 --> Model Class Initialized
INFO - 2025-08-22 21:12:53 --> Model Class Initialized
INFO - 2025-08-22 21:12:53 --> Model Class Initialized
INFO - 2025-08-22 21:12:53 --> Model Class Initialized
INFO - 2025-08-22 21:12:53 --> Model Class Initialized
INFO - 2025-08-22 21:12:53 --> Model Class Initialized
INFO - 2025-08-22 21:12:53 --> Model Class Initialized
INFO - 2025-08-22 21:12:53 --> Model Class Initialized
INFO - 2025-08-22 21:12:53 --> Model Class Initialized
INFO - 2025-08-22 21:12:53 --> Model Class Initialized
INFO - 2025-08-22 21:13:02 --> Final output sent to browser
DEBUG - 2025-08-22 21:13:02 --> Total execution time: 9.0191
INFO - 2025-08-22 21:13:04 --> Config Class Initialized
INFO - 2025-08-22 21:13:04 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:13:04 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:13:04 --> Utf8 Class Initialized
INFO - 2025-08-22 21:13:04 --> URI Class Initialized
INFO - 2025-08-22 21:13:04 --> Router Class Initialized
INFO - 2025-08-22 21:13:04 --> Output Class Initialized
INFO - 2025-08-22 21:13:04 --> Security Class Initialized
DEBUG - 2025-08-22 21:13:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:13:04 --> Input Class Initialized
INFO - 2025-08-22 21:13:04 --> Language Class Initialized
INFO - 2025-08-22 21:13:04 --> Loader Class Initialized
INFO - 2025-08-22 21:13:04 --> Helper loaded: url_helper
INFO - 2025-08-22 21:13:04 --> Database Driver Class Initialized
INFO - 2025-08-22 21:13:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:13:04 --> Controller Class Initialized
DEBUG - 2025-08-22 21:13:04 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:13:04 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:13:04 --> Model Class Initialized
INFO - 2025-08-22 21:13:04 --> Model Class Initialized
INFO - 2025-08-22 21:13:04 --> Model Class Initialized
INFO - 2025-08-22 21:13:04 --> Model Class Initialized
INFO - 2025-08-22 21:13:04 --> Model Class Initialized
INFO - 2025-08-22 21:13:04 --> Model Class Initialized
INFO - 2025-08-22 21:13:04 --> Model Class Initialized
INFO - 2025-08-22 21:13:04 --> Model Class Initialized
INFO - 2025-08-22 21:13:04 --> Model Class Initialized
INFO - 2025-08-22 21:13:04 --> Model Class Initialized
INFO - 2025-08-22 21:13:04 --> Model Class Initialized
INFO - 2025-08-22 21:13:13 --> Final output sent to browser
DEBUG - 2025-08-22 21:13:13 --> Total execution time: 9.0633
INFO - 2025-08-22 21:13:20 --> Config Class Initialized
INFO - 2025-08-22 21:13:20 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:13:20 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:13:20 --> Utf8 Class Initialized
INFO - 2025-08-22 21:13:20 --> URI Class Initialized
INFO - 2025-08-22 21:13:20 --> Router Class Initialized
INFO - 2025-08-22 21:13:20 --> Output Class Initialized
INFO - 2025-08-22 21:13:20 --> Security Class Initialized
DEBUG - 2025-08-22 21:13:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:13:20 --> Input Class Initialized
INFO - 2025-08-22 21:13:20 --> Language Class Initialized
INFO - 2025-08-22 21:13:20 --> Loader Class Initialized
INFO - 2025-08-22 21:13:20 --> Helper loaded: url_helper
INFO - 2025-08-22 21:13:20 --> Database Driver Class Initialized
INFO - 2025-08-22 21:13:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:13:20 --> Controller Class Initialized
DEBUG - 2025-08-22 21:13:20 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:13:20 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:13:20 --> Model Class Initialized
INFO - 2025-08-22 21:13:20 --> Model Class Initialized
INFO - 2025-08-22 21:13:20 --> Model Class Initialized
INFO - 2025-08-22 21:13:20 --> Model Class Initialized
INFO - 2025-08-22 21:13:20 --> Model Class Initialized
INFO - 2025-08-22 21:13:20 --> Model Class Initialized
INFO - 2025-08-22 21:13:20 --> Model Class Initialized
INFO - 2025-08-22 21:13:20 --> Model Class Initialized
INFO - 2025-08-22 21:13:20 --> Model Class Initialized
INFO - 2025-08-22 21:13:20 --> Model Class Initialized
INFO - 2025-08-22 21:13:20 --> Model Class Initialized
INFO - 2025-08-22 21:13:29 --> Final output sent to browser
DEBUG - 2025-08-22 21:13:29 --> Total execution time: 9.0295
INFO - 2025-08-22 21:13:38 --> Config Class Initialized
INFO - 2025-08-22 21:13:38 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:13:38 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:13:38 --> Utf8 Class Initialized
INFO - 2025-08-22 21:13:38 --> URI Class Initialized
INFO - 2025-08-22 21:13:38 --> Router Class Initialized
INFO - 2025-08-22 21:13:38 --> Output Class Initialized
INFO - 2025-08-22 21:13:38 --> Security Class Initialized
DEBUG - 2025-08-22 21:13:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:13:38 --> Input Class Initialized
INFO - 2025-08-22 21:13:38 --> Language Class Initialized
INFO - 2025-08-22 21:13:38 --> Loader Class Initialized
INFO - 2025-08-22 21:13:38 --> Helper loaded: url_helper
INFO - 2025-08-22 21:13:38 --> Database Driver Class Initialized
INFO - 2025-08-22 21:13:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:13:38 --> Controller Class Initialized
DEBUG - 2025-08-22 21:13:38 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:13:38 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:13:38 --> Model Class Initialized
INFO - 2025-08-22 21:13:38 --> Model Class Initialized
INFO - 2025-08-22 21:13:38 --> Model Class Initialized
INFO - 2025-08-22 21:13:38 --> Model Class Initialized
INFO - 2025-08-22 21:13:38 --> Model Class Initialized
INFO - 2025-08-22 21:13:38 --> Model Class Initialized
INFO - 2025-08-22 21:13:38 --> Model Class Initialized
INFO - 2025-08-22 21:13:38 --> Model Class Initialized
INFO - 2025-08-22 21:13:38 --> Model Class Initialized
INFO - 2025-08-22 21:13:38 --> Model Class Initialized
INFO - 2025-08-22 21:13:38 --> Model Class Initialized
INFO - 2025-08-22 21:13:47 --> Final output sent to browser
DEBUG - 2025-08-22 21:13:47 --> Total execution time: 9.1211
INFO - 2025-08-22 21:13:52 --> Config Class Initialized
INFO - 2025-08-22 21:13:52 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:13:52 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:13:52 --> Utf8 Class Initialized
INFO - 2025-08-22 21:13:52 --> URI Class Initialized
INFO - 2025-08-22 21:13:52 --> Router Class Initialized
INFO - 2025-08-22 21:13:52 --> Output Class Initialized
INFO - 2025-08-22 21:13:52 --> Security Class Initialized
DEBUG - 2025-08-22 21:13:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:13:52 --> Input Class Initialized
INFO - 2025-08-22 21:13:52 --> Language Class Initialized
INFO - 2025-08-22 21:13:52 --> Loader Class Initialized
INFO - 2025-08-22 21:13:52 --> Helper loaded: url_helper
INFO - 2025-08-22 21:13:52 --> Database Driver Class Initialized
INFO - 2025-08-22 21:13:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:13:52 --> Controller Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 21:13:52 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:13:52 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:13:52 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:13:52 --> Encryption Class Initialized
INFO - 2025-08-22 21:13:52 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:13:52 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 21:13:52 --> Final output sent to browser
DEBUG - 2025-08-22 21:13:52 --> Total execution time: 0.1416
INFO - 2025-08-22 21:13:52 --> Config Class Initialized
INFO - 2025-08-22 21:13:52 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:13:52 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:13:52 --> Utf8 Class Initialized
INFO - 2025-08-22 21:13:52 --> URI Class Initialized
INFO - 2025-08-22 21:13:52 --> Router Class Initialized
INFO - 2025-08-22 21:13:52 --> Output Class Initialized
INFO - 2025-08-22 21:13:52 --> Security Class Initialized
DEBUG - 2025-08-22 21:13:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:13:52 --> Input Class Initialized
INFO - 2025-08-22 21:13:52 --> Language Class Initialized
ERROR - 2025-08-22 21:13:52 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:13:52 --> Config Class Initialized
INFO - 2025-08-22 21:13:52 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:13:52 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:13:52 --> Utf8 Class Initialized
INFO - 2025-08-22 21:13:52 --> URI Class Initialized
INFO - 2025-08-22 21:13:52 --> Router Class Initialized
INFO - 2025-08-22 21:13:52 --> Output Class Initialized
INFO - 2025-08-22 21:13:52 --> Security Class Initialized
DEBUG - 2025-08-22 21:13:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:13:52 --> Input Class Initialized
INFO - 2025-08-22 21:13:52 --> Language Class Initialized
ERROR - 2025-08-22 21:13:52 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:13:52 --> Config Class Initialized
INFO - 2025-08-22 21:13:52 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:13:52 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:13:52 --> Utf8 Class Initialized
INFO - 2025-08-22 21:13:52 --> URI Class Initialized
INFO - 2025-08-22 21:13:52 --> Router Class Initialized
INFO - 2025-08-22 21:13:52 --> Output Class Initialized
INFO - 2025-08-22 21:13:52 --> Security Class Initialized
DEBUG - 2025-08-22 21:13:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:13:52 --> Input Class Initialized
INFO - 2025-08-22 21:13:52 --> Language Class Initialized
INFO - 2025-08-22 21:13:52 --> Loader Class Initialized
INFO - 2025-08-22 21:13:52 --> Helper loaded: url_helper
INFO - 2025-08-22 21:13:52 --> Database Driver Class Initialized
INFO - 2025-08-22 21:13:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:13:52 --> Controller Class Initialized
DEBUG - 2025-08-22 21:13:52 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:13:52 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> Model Class Initialized
INFO - 2025-08-22 21:13:52 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:13:52 --> Final output sent to browser
DEBUG - 2025-08-22 21:13:52 --> Total execution time: 0.1117
INFO - 2025-08-22 21:14:00 --> Config Class Initialized
INFO - 2025-08-22 21:14:00 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:00 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:00 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:00 --> URI Class Initialized
INFO - 2025-08-22 21:14:00 --> Router Class Initialized
INFO - 2025-08-22 21:14:00 --> Output Class Initialized
INFO - 2025-08-22 21:14:00 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:00 --> Input Class Initialized
INFO - 2025-08-22 21:14:00 --> Language Class Initialized
INFO - 2025-08-22 21:14:00 --> Loader Class Initialized
INFO - 2025-08-22 21:14:00 --> Helper loaded: url_helper
INFO - 2025-08-22 21:14:00 --> Database Driver Class Initialized
INFO - 2025-08-22 21:14:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:14:00 --> Controller Class Initialized
DEBUG - 2025-08-22 21:14:00 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:14:00 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:14:00 --> Model Class Initialized
INFO - 2025-08-22 21:14:00 --> Model Class Initialized
INFO - 2025-08-22 21:14:00 --> Model Class Initialized
INFO - 2025-08-22 21:14:00 --> Model Class Initialized
INFO - 2025-08-22 21:14:00 --> Model Class Initialized
INFO - 2025-08-22 21:14:00 --> Model Class Initialized
INFO - 2025-08-22 21:14:00 --> Model Class Initialized
INFO - 2025-08-22 21:14:00 --> Model Class Initialized
INFO - 2025-08-22 21:14:00 --> Model Class Initialized
INFO - 2025-08-22 21:14:00 --> Model Class Initialized
INFO - 2025-08-22 21:14:00 --> Model Class Initialized
INFO - 2025-08-22 21:14:00 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:14:00 --> Final output sent to browser
DEBUG - 2025-08-22 21:14:00 --> Total execution time: 0.1085
INFO - 2025-08-22 21:14:09 --> Config Class Initialized
INFO - 2025-08-22 21:14:09 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:09 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:09 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:09 --> URI Class Initialized
INFO - 2025-08-22 21:14:09 --> Router Class Initialized
INFO - 2025-08-22 21:14:09 --> Output Class Initialized
INFO - 2025-08-22 21:14:09 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:09 --> Input Class Initialized
INFO - 2025-08-22 21:14:09 --> Language Class Initialized
INFO - 2025-08-22 21:14:09 --> Loader Class Initialized
INFO - 2025-08-22 21:14:09 --> Helper loaded: url_helper
INFO - 2025-08-22 21:14:09 --> Database Driver Class Initialized
INFO - 2025-08-22 21:14:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:14:09 --> Controller Class Initialized
DEBUG - 2025-08-22 21:14:09 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:14:09 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:14:09 --> Model Class Initialized
INFO - 2025-08-22 21:14:09 --> Model Class Initialized
INFO - 2025-08-22 21:14:09 --> Model Class Initialized
INFO - 2025-08-22 21:14:09 --> Model Class Initialized
INFO - 2025-08-22 21:14:09 --> Model Class Initialized
INFO - 2025-08-22 21:14:09 --> Model Class Initialized
INFO - 2025-08-22 21:14:09 --> Model Class Initialized
INFO - 2025-08-22 21:14:09 --> Model Class Initialized
INFO - 2025-08-22 21:14:09 --> Model Class Initialized
INFO - 2025-08-22 21:14:09 --> Model Class Initialized
INFO - 2025-08-22 21:14:09 --> Model Class Initialized
INFO - 2025-08-22 21:14:09 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:14:09 --> Final output sent to browser
DEBUG - 2025-08-22 21:14:09 --> Total execution time: 0.1113
INFO - 2025-08-22 21:14:16 --> Config Class Initialized
INFO - 2025-08-22 21:14:16 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:16 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:16 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:16 --> URI Class Initialized
INFO - 2025-08-22 21:14:16 --> Router Class Initialized
INFO - 2025-08-22 21:14:16 --> Output Class Initialized
INFO - 2025-08-22 21:14:16 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:16 --> Input Class Initialized
INFO - 2025-08-22 21:14:16 --> Language Class Initialized
INFO - 2025-08-22 21:14:16 --> Loader Class Initialized
INFO - 2025-08-22 21:14:16 --> Helper loaded: url_helper
INFO - 2025-08-22 21:14:16 --> Database Driver Class Initialized
INFO - 2025-08-22 21:14:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:14:16 --> Controller Class Initialized
DEBUG - 2025-08-22 21:14:16 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:14:16 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:14:16 --> Model Class Initialized
INFO - 2025-08-22 21:14:16 --> Model Class Initialized
INFO - 2025-08-22 21:14:16 --> Model Class Initialized
INFO - 2025-08-22 21:14:16 --> Model Class Initialized
INFO - 2025-08-22 21:14:16 --> Model Class Initialized
INFO - 2025-08-22 21:14:16 --> Model Class Initialized
INFO - 2025-08-22 21:14:16 --> Model Class Initialized
INFO - 2025-08-22 21:14:16 --> Model Class Initialized
INFO - 2025-08-22 21:14:16 --> Model Class Initialized
INFO - 2025-08-22 21:14:16 --> Model Class Initialized
INFO - 2025-08-22 21:14:16 --> Model Class Initialized
INFO - 2025-08-22 21:14:16 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:14:16 --> Final output sent to browser
DEBUG - 2025-08-22 21:14:16 --> Total execution time: 0.1085
INFO - 2025-08-22 21:14:18 --> Config Class Initialized
INFO - 2025-08-22 21:14:18 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:18 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:18 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:18 --> URI Class Initialized
INFO - 2025-08-22 21:14:18 --> Router Class Initialized
INFO - 2025-08-22 21:14:18 --> Output Class Initialized
INFO - 2025-08-22 21:14:18 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:18 --> Input Class Initialized
INFO - 2025-08-22 21:14:18 --> Language Class Initialized
INFO - 2025-08-22 21:14:18 --> Loader Class Initialized
INFO - 2025-08-22 21:14:18 --> Helper loaded: url_helper
INFO - 2025-08-22 21:14:18 --> Database Driver Class Initialized
INFO - 2025-08-22 21:14:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:14:18 --> Controller Class Initialized
DEBUG - 2025-08-22 21:14:18 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:14:18 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:14:18 --> Model Class Initialized
INFO - 2025-08-22 21:14:18 --> Model Class Initialized
INFO - 2025-08-22 21:14:18 --> Model Class Initialized
INFO - 2025-08-22 21:14:18 --> Model Class Initialized
INFO - 2025-08-22 21:14:18 --> Model Class Initialized
INFO - 2025-08-22 21:14:18 --> Model Class Initialized
INFO - 2025-08-22 21:14:18 --> Model Class Initialized
INFO - 2025-08-22 21:14:18 --> Model Class Initialized
INFO - 2025-08-22 21:14:18 --> Model Class Initialized
INFO - 2025-08-22 21:14:18 --> Model Class Initialized
INFO - 2025-08-22 21:14:18 --> Model Class Initialized
INFO - 2025-08-22 21:14:18 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:14:18 --> Final output sent to browser
DEBUG - 2025-08-22 21:14:18 --> Total execution time: 0.1084
INFO - 2025-08-22 21:14:20 --> Config Class Initialized
INFO - 2025-08-22 21:14:20 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:20 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:20 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:20 --> URI Class Initialized
INFO - 2025-08-22 21:14:20 --> Router Class Initialized
INFO - 2025-08-22 21:14:20 --> Output Class Initialized
INFO - 2025-08-22 21:14:20 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:20 --> Input Class Initialized
INFO - 2025-08-22 21:14:20 --> Language Class Initialized
INFO - 2025-08-22 21:14:20 --> Loader Class Initialized
INFO - 2025-08-22 21:14:20 --> Helper loaded: url_helper
INFO - 2025-08-22 21:14:20 --> Database Driver Class Initialized
INFO - 2025-08-22 21:14:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:14:20 --> Controller Class Initialized
INFO - 2025-08-22 21:14:20 --> Model Class Initialized
INFO - 2025-08-22 21:14:20 --> Model Class Initialized
INFO - 2025-08-22 21:14:20 --> Model Class Initialized
INFO - 2025-08-22 21:14:20 --> Model Class Initialized
INFO - 2025-08-22 21:14:20 --> Model Class Initialized
INFO - 2025-08-22 21:14:20 --> Model Class Initialized
INFO - 2025-08-22 21:14:20 --> Model Class Initialized
INFO - 2025-08-22 21:14:20 --> Model Class Initialized
INFO - 2025-08-22 21:14:20 --> Model Class Initialized
INFO - 2025-08-22 21:14:20 --> Model Class Initialized
INFO - 2025-08-22 21:14:20 --> Model Class Initialized
INFO - 2025-08-22 21:14:20 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:14:20 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:14:20 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:14:20 --> Encryption Class Initialized
INFO - 2025-08-22 21:14:20 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:14:20 --> File loaded: /var/www/noble/application/views/admin/song_upload_v.php
INFO - 2025-08-22 21:14:20 --> Final output sent to browser
DEBUG - 2025-08-22 21:14:20 --> Total execution time: 0.0057
INFO - 2025-08-22 21:14:21 --> Config Class Initialized
INFO - 2025-08-22 21:14:21 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:21 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:21 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:21 --> URI Class Initialized
INFO - 2025-08-22 21:14:21 --> Router Class Initialized
INFO - 2025-08-22 21:14:21 --> Output Class Initialized
INFO - 2025-08-22 21:14:21 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:21 --> Input Class Initialized
INFO - 2025-08-22 21:14:21 --> Language Class Initialized
ERROR - 2025-08-22 21:14:21 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:14:23 --> Config Class Initialized
INFO - 2025-08-22 21:14:23 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:23 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:23 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:23 --> URI Class Initialized
INFO - 2025-08-22 21:14:23 --> Router Class Initialized
INFO - 2025-08-22 21:14:23 --> Output Class Initialized
INFO - 2025-08-22 21:14:23 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:23 --> Input Class Initialized
INFO - 2025-08-22 21:14:23 --> Language Class Initialized
INFO - 2025-08-22 21:14:23 --> Loader Class Initialized
INFO - 2025-08-22 21:14:23 --> Helper loaded: url_helper
INFO - 2025-08-22 21:14:23 --> Database Driver Class Initialized
INFO - 2025-08-22 21:14:23 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:14:23 --> Controller Class Initialized
INFO - 2025-08-22 21:14:23 --> Model Class Initialized
INFO - 2025-08-22 21:14:23 --> Model Class Initialized
INFO - 2025-08-22 21:14:23 --> Model Class Initialized
INFO - 2025-08-22 21:14:23 --> Model Class Initialized
INFO - 2025-08-22 21:14:23 --> Model Class Initialized
INFO - 2025-08-22 21:14:23 --> Model Class Initialized
INFO - 2025-08-22 21:14:23 --> Model Class Initialized
INFO - 2025-08-22 21:14:23 --> Model Class Initialized
INFO - 2025-08-22 21:14:23 --> Model Class Initialized
INFO - 2025-08-22 21:14:23 --> Model Class Initialized
INFO - 2025-08-22 21:14:23 --> Model Class Initialized
INFO - 2025-08-22 21:14:23 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:14:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:14:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:14:23 --> Encryption Class Initialized
INFO - 2025-08-22 21:14:23 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:14:23 --> File loaded: /var/www/noble/application/views/admin/board_list_v.php
INFO - 2025-08-22 21:14:23 --> Final output sent to browser
DEBUG - 2025-08-22 21:14:23 --> Total execution time: 0.0072
INFO - 2025-08-22 21:14:23 --> Config Class Initialized
INFO - 2025-08-22 21:14:23 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:23 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:23 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:23 --> URI Class Initialized
INFO - 2025-08-22 21:14:23 --> Router Class Initialized
INFO - 2025-08-22 21:14:23 --> Output Class Initialized
INFO - 2025-08-22 21:14:23 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:23 --> Input Class Initialized
INFO - 2025-08-22 21:14:23 --> Language Class Initialized
ERROR - 2025-08-22 21:14:23 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:14:23 --> Config Class Initialized
INFO - 2025-08-22 21:14:23 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:23 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:23 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:23 --> URI Class Initialized
INFO - 2025-08-22 21:14:23 --> Router Class Initialized
INFO - 2025-08-22 21:14:23 --> Output Class Initialized
INFO - 2025-08-22 21:14:23 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:23 --> Input Class Initialized
INFO - 2025-08-22 21:14:23 --> Language Class Initialized
ERROR - 2025-08-22 21:14:23 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:14:27 --> Config Class Initialized
INFO - 2025-08-22 21:14:27 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:27 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:27 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:27 --> URI Class Initialized
INFO - 2025-08-22 21:14:27 --> Router Class Initialized
INFO - 2025-08-22 21:14:27 --> Output Class Initialized
INFO - 2025-08-22 21:14:27 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:27 --> Input Class Initialized
INFO - 2025-08-22 21:14:27 --> Language Class Initialized
INFO - 2025-08-22 21:14:27 --> Loader Class Initialized
INFO - 2025-08-22 21:14:27 --> Helper loaded: url_helper
INFO - 2025-08-22 21:14:27 --> Database Driver Class Initialized
INFO - 2025-08-22 21:14:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:14:27 --> Controller Class Initialized
INFO - 2025-08-22 21:14:27 --> Model Class Initialized
INFO - 2025-08-22 21:14:27 --> Model Class Initialized
INFO - 2025-08-22 21:14:27 --> Model Class Initialized
INFO - 2025-08-22 21:14:27 --> Model Class Initialized
INFO - 2025-08-22 21:14:27 --> Model Class Initialized
INFO - 2025-08-22 21:14:27 --> Model Class Initialized
INFO - 2025-08-22 21:14:27 --> Model Class Initialized
INFO - 2025-08-22 21:14:27 --> Model Class Initialized
INFO - 2025-08-22 21:14:27 --> Model Class Initialized
INFO - 2025-08-22 21:14:27 --> Model Class Initialized
INFO - 2025-08-22 21:14:27 --> Model Class Initialized
INFO - 2025-08-22 21:14:27 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:14:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:14:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:14:27 --> Encryption Class Initialized
INFO - 2025-08-22 21:14:27 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:14:27 --> File loaded: /var/www/noble/application/views/admin/board_list_v.php
INFO - 2025-08-22 21:14:27 --> Final output sent to browser
DEBUG - 2025-08-22 21:14:27 --> Total execution time: 0.0051
INFO - 2025-08-22 21:14:27 --> Config Class Initialized
INFO - 2025-08-22 21:14:27 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:27 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:27 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:27 --> URI Class Initialized
INFO - 2025-08-22 21:14:27 --> Router Class Initialized
INFO - 2025-08-22 21:14:27 --> Output Class Initialized
INFO - 2025-08-22 21:14:27 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:27 --> Input Class Initialized
INFO - 2025-08-22 21:14:27 --> Language Class Initialized
ERROR - 2025-08-22 21:14:27 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:14:28 --> Config Class Initialized
INFO - 2025-08-22 21:14:28 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:28 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:28 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:28 --> URI Class Initialized
INFO - 2025-08-22 21:14:28 --> Router Class Initialized
INFO - 2025-08-22 21:14:28 --> Output Class Initialized
INFO - 2025-08-22 21:14:28 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:28 --> Input Class Initialized
INFO - 2025-08-22 21:14:28 --> Language Class Initialized
ERROR - 2025-08-22 21:14:28 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:14:28 --> Config Class Initialized
INFO - 2025-08-22 21:14:28 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:28 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:28 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:28 --> URI Class Initialized
INFO - 2025-08-22 21:14:28 --> Router Class Initialized
INFO - 2025-08-22 21:14:28 --> Output Class Initialized
INFO - 2025-08-22 21:14:28 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:28 --> Input Class Initialized
INFO - 2025-08-22 21:14:28 --> Language Class Initialized
INFO - 2025-08-22 21:14:28 --> Loader Class Initialized
INFO - 2025-08-22 21:14:28 --> Helper loaded: url_helper
INFO - 2025-08-22 21:14:28 --> Database Driver Class Initialized
INFO - 2025-08-22 21:14:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:14:28 --> Controller Class Initialized
DEBUG - 2025-08-22 21:14:28 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:14:28 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:14:28 --> Model Class Initialized
INFO - 2025-08-22 21:14:28 --> Model Class Initialized
INFO - 2025-08-22 21:14:28 --> Model Class Initialized
INFO - 2025-08-22 21:14:28 --> Model Class Initialized
INFO - 2025-08-22 21:14:28 --> Model Class Initialized
INFO - 2025-08-22 21:14:28 --> Model Class Initialized
INFO - 2025-08-22 21:14:28 --> Model Class Initialized
INFO - 2025-08-22 21:14:28 --> Model Class Initialized
INFO - 2025-08-22 21:14:28 --> Model Class Initialized
INFO - 2025-08-22 21:14:28 --> Model Class Initialized
INFO - 2025-08-22 21:14:28 --> Model Class Initialized
INFO - 2025-08-22 21:14:28 --> Final output sent to browser
DEBUG - 2025-08-22 21:14:28 --> Total execution time: 0.0043
INFO - 2025-08-22 21:14:28 --> Config Class Initialized
INFO - 2025-08-22 21:14:28 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:28 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:28 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:28 --> URI Class Initialized
INFO - 2025-08-22 21:14:28 --> Router Class Initialized
INFO - 2025-08-22 21:14:28 --> Output Class Initialized
INFO - 2025-08-22 21:14:28 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:28 --> Input Class Initialized
INFO - 2025-08-22 21:14:28 --> Language Class Initialized
ERROR - 2025-08-22 21:14:28 --> 404 Page Not Found: Faviconico/index
INFO - 2025-08-22 21:14:29 --> Config Class Initialized
INFO - 2025-08-22 21:14:29 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:29 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:29 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:29 --> URI Class Initialized
INFO - 2025-08-22 21:14:29 --> Router Class Initialized
INFO - 2025-08-22 21:14:29 --> Output Class Initialized
INFO - 2025-08-22 21:14:29 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:29 --> Input Class Initialized
INFO - 2025-08-22 21:14:29 --> Language Class Initialized
INFO - 2025-08-22 21:14:29 --> Loader Class Initialized
INFO - 2025-08-22 21:14:29 --> Helper loaded: url_helper
INFO - 2025-08-22 21:14:29 --> Database Driver Class Initialized
INFO - 2025-08-22 21:14:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:14:29 --> Controller Class Initialized
INFO - 2025-08-22 21:14:29 --> Model Class Initialized
INFO - 2025-08-22 21:14:29 --> Model Class Initialized
INFO - 2025-08-22 21:14:29 --> Model Class Initialized
INFO - 2025-08-22 21:14:29 --> Model Class Initialized
INFO - 2025-08-22 21:14:29 --> Model Class Initialized
INFO - 2025-08-22 21:14:29 --> Model Class Initialized
INFO - 2025-08-22 21:14:29 --> Model Class Initialized
INFO - 2025-08-22 21:14:29 --> Model Class Initialized
INFO - 2025-08-22 21:14:29 --> Model Class Initialized
INFO - 2025-08-22 21:14:29 --> Model Class Initialized
INFO - 2025-08-22 21:14:29 --> Model Class Initialized
INFO - 2025-08-22 21:14:29 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:14:29 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:14:29 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:14:29 --> Encryption Class Initialized
INFO - 2025-08-22 21:14:29 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:14:29 --> File loaded: /var/www/noble/application/views/admin/board_upload_v.php
INFO - 2025-08-22 21:14:29 --> Final output sent to browser
DEBUG - 2025-08-22 21:14:29 --> Total execution time: 0.0049
INFO - 2025-08-22 21:14:29 --> Config Class Initialized
INFO - 2025-08-22 21:14:29 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:29 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:29 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:29 --> URI Class Initialized
INFO - 2025-08-22 21:14:29 --> Router Class Initialized
INFO - 2025-08-22 21:14:29 --> Output Class Initialized
INFO - 2025-08-22 21:14:29 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:29 --> Input Class Initialized
INFO - 2025-08-22 21:14:29 --> Language Class Initialized
ERROR - 2025-08-22 21:14:29 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:14:53 --> Config Class Initialized
INFO - 2025-08-22 21:14:53 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:53 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:53 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:53 --> URI Class Initialized
INFO - 2025-08-22 21:14:53 --> Router Class Initialized
INFO - 2025-08-22 21:14:53 --> Output Class Initialized
INFO - 2025-08-22 21:14:53 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:53 --> Input Class Initialized
INFO - 2025-08-22 21:14:53 --> Language Class Initialized
ERROR - 2025-08-22 21:14:53 --> 404 Page Not Found: Assets/labouright
INFO - 2025-08-22 21:14:55 --> Config Class Initialized
INFO - 2025-08-22 21:14:55 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:55 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:55 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:55 --> URI Class Initialized
INFO - 2025-08-22 21:14:55 --> Router Class Initialized
INFO - 2025-08-22 21:14:55 --> Output Class Initialized
INFO - 2025-08-22 21:14:55 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:55 --> Input Class Initialized
INFO - 2025-08-22 21:14:55 --> Language Class Initialized
INFO - 2025-08-22 21:14:55 --> Loader Class Initialized
INFO - 2025-08-22 21:14:55 --> Helper loaded: url_helper
INFO - 2025-08-22 21:14:55 --> Database Driver Class Initialized
INFO - 2025-08-22 21:14:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:14:55 --> Controller Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Helper loaded: cookie_helper
INFO - 2025-08-22 21:14:55 --> Config Class Initialized
INFO - 2025-08-22 21:14:55 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:14:55 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:14:55 --> Utf8 Class Initialized
INFO - 2025-08-22 21:14:55 --> URI Class Initialized
INFO - 2025-08-22 21:14:55 --> Router Class Initialized
INFO - 2025-08-22 21:14:55 --> Output Class Initialized
INFO - 2025-08-22 21:14:55 --> Security Class Initialized
DEBUG - 2025-08-22 21:14:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:14:55 --> Input Class Initialized
INFO - 2025-08-22 21:14:55 --> Language Class Initialized
INFO - 2025-08-22 21:14:55 --> Loader Class Initialized
INFO - 2025-08-22 21:14:55 --> Helper loaded: url_helper
INFO - 2025-08-22 21:14:55 --> Database Driver Class Initialized
INFO - 2025-08-22 21:14:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:14:55 --> Controller Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Model Class Initialized
INFO - 2025-08-22 21:14:55 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:14:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:14:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:14:55 --> Encryption Class Initialized
INFO - 2025-08-22 21:14:55 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:14:55 --> File loaded: /var/www/noble/application/views/admin/login_v.php
INFO - 2025-08-22 21:14:55 --> Final output sent to browser
DEBUG - 2025-08-22 21:14:55 --> Total execution time: 0.0031
INFO - 2025-08-22 21:15:01 --> Config Class Initialized
INFO - 2025-08-22 21:15:01 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:01 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:01 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:01 --> URI Class Initialized
INFO - 2025-08-22 21:15:01 --> Router Class Initialized
INFO - 2025-08-22 21:15:01 --> Output Class Initialized
INFO - 2025-08-22 21:15:01 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:01 --> Input Class Initialized
INFO - 2025-08-22 21:15:01 --> Language Class Initialized
INFO - 2025-08-22 21:15:01 --> Loader Class Initialized
INFO - 2025-08-22 21:15:01 --> Helper loaded: url_helper
INFO - 2025-08-22 21:15:01 --> Database Driver Class Initialized
INFO - 2025-08-22 21:15:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:15:01 --> Controller Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:15:01 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:15:01 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:15:01 --> Encryption Class Initialized
INFO - 2025-08-22 21:15:01 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:15:01 --> Final output sent to browser
DEBUG - 2025-08-22 21:15:01 --> Total execution time: 0.0056
INFO - 2025-08-22 21:15:01 --> Config Class Initialized
INFO - 2025-08-22 21:15:01 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:01 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:01 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:01 --> URI Class Initialized
INFO - 2025-08-22 21:15:01 --> Router Class Initialized
INFO - 2025-08-22 21:15:01 --> Output Class Initialized
INFO - 2025-08-22 21:15:01 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:01 --> Input Class Initialized
INFO - 2025-08-22 21:15:01 --> Language Class Initialized
INFO - 2025-08-22 21:15:01 --> Loader Class Initialized
INFO - 2025-08-22 21:15:01 --> Helper loaded: url_helper
INFO - 2025-08-22 21:15:01 --> Database Driver Class Initialized
INFO - 2025-08-22 21:15:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:15:01 --> Controller Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:15:01 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:15:01 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:15:01 --> Encryption Class Initialized
INFO - 2025-08-22 21:15:01 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:15:01 --> Config Class Initialized
INFO - 2025-08-22 21:15:01 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:01 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:01 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:01 --> URI Class Initialized
INFO - 2025-08-22 21:15:01 --> Router Class Initialized
INFO - 2025-08-22 21:15:01 --> Output Class Initialized
INFO - 2025-08-22 21:15:01 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:01 --> Input Class Initialized
INFO - 2025-08-22 21:15:01 --> Language Class Initialized
INFO - 2025-08-22 21:15:01 --> Loader Class Initialized
INFO - 2025-08-22 21:15:01 --> Helper loaded: url_helper
INFO - 2025-08-22 21:15:01 --> Database Driver Class Initialized
INFO - 2025-08-22 21:15:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:15:01 --> Controller Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> Model Class Initialized
INFO - 2025-08-22 21:15:01 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:15:04 --> Config Class Initialized
INFO - 2025-08-22 21:15:04 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:04 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:04 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:04 --> URI Class Initialized
INFO - 2025-08-22 21:15:04 --> Router Class Initialized
INFO - 2025-08-22 21:15:04 --> Output Class Initialized
INFO - 2025-08-22 21:15:04 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:04 --> Input Class Initialized
INFO - 2025-08-22 21:15:04 --> Language Class Initialized
INFO - 2025-08-22 21:15:04 --> Loader Class Initialized
INFO - 2025-08-22 21:15:04 --> Helper loaded: url_helper
INFO - 2025-08-22 21:15:04 --> Database Driver Class Initialized
INFO - 2025-08-22 21:15:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:15:04 --> Controller Class Initialized
INFO - 2025-08-22 21:15:04 --> Model Class Initialized
INFO - 2025-08-22 21:15:04 --> Model Class Initialized
INFO - 2025-08-22 21:15:04 --> Model Class Initialized
INFO - 2025-08-22 21:15:04 --> Model Class Initialized
INFO - 2025-08-22 21:15:04 --> Model Class Initialized
INFO - 2025-08-22 21:15:04 --> Model Class Initialized
INFO - 2025-08-22 21:15:04 --> Model Class Initialized
INFO - 2025-08-22 21:15:04 --> Model Class Initialized
INFO - 2025-08-22 21:15:04 --> Model Class Initialized
INFO - 2025-08-22 21:15:04 --> Model Class Initialized
INFO - 2025-08-22 21:15:04 --> Model Class Initialized
INFO - 2025-08-22 21:15:04 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:15:11 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:15:11 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:15:11 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:15:11 --> Encryption Class Initialized
INFO - 2025-08-22 21:15:11 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:15:11 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:15:14 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:15:14 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:15:14 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:15:14 --> Encryption Class Initialized
INFO - 2025-08-22 21:15:14 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:15:14 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:15:14 --> Final output sent to browser
DEBUG - 2025-08-22 21:15:14 --> Total execution time: 9.5281
INFO - 2025-08-22 21:15:14 --> Config Class Initialized
INFO - 2025-08-22 21:15:14 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:14 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:14 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:14 --> URI Class Initialized
INFO - 2025-08-22 21:15:14 --> Router Class Initialized
INFO - 2025-08-22 21:15:14 --> Output Class Initialized
INFO - 2025-08-22 21:15:14 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:14 --> Input Class Initialized
INFO - 2025-08-22 21:15:14 --> Language Class Initialized
ERROR - 2025-08-22 21:15:14 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:15:14 --> Config Class Initialized
INFO - 2025-08-22 21:15:14 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:14 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:14 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:14 --> URI Class Initialized
INFO - 2025-08-22 21:15:14 --> Router Class Initialized
INFO - 2025-08-22 21:15:14 --> Output Class Initialized
INFO - 2025-08-22 21:15:14 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:14 --> Input Class Initialized
INFO - 2025-08-22 21:15:14 --> Language Class Initialized
ERROR - 2025-08-22 21:15:14 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:15:14 --> Config Class Initialized
INFO - 2025-08-22 21:15:14 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:14 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:14 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:14 --> URI Class Initialized
INFO - 2025-08-22 21:15:14 --> Router Class Initialized
INFO - 2025-08-22 21:15:14 --> Output Class Initialized
INFO - 2025-08-22 21:15:14 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:14 --> Input Class Initialized
INFO - 2025-08-22 21:15:14 --> Language Class Initialized
ERROR - 2025-08-22 21:15:14 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:15:14 --> Config Class Initialized
INFO - 2025-08-22 21:15:14 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:14 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:14 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:14 --> URI Class Initialized
INFO - 2025-08-22 21:15:14 --> Router Class Initialized
INFO - 2025-08-22 21:15:14 --> Output Class Initialized
INFO - 2025-08-22 21:15:14 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:14 --> Input Class Initialized
INFO - 2025-08-22 21:15:14 --> Language Class Initialized
INFO - 2025-08-22 21:15:14 --> Loader Class Initialized
INFO - 2025-08-22 21:15:14 --> Helper loaded: url_helper
INFO - 2025-08-22 21:15:14 --> Database Driver Class Initialized
INFO - 2025-08-22 21:15:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:15:14 --> Controller Class Initialized
DEBUG - 2025-08-22 21:15:14 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:15:14 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:15:14 --> Model Class Initialized
INFO - 2025-08-22 21:15:14 --> Model Class Initialized
INFO - 2025-08-22 21:15:14 --> Model Class Initialized
INFO - 2025-08-22 21:15:14 --> Model Class Initialized
INFO - 2025-08-22 21:15:14 --> Model Class Initialized
INFO - 2025-08-22 21:15:14 --> Model Class Initialized
INFO - 2025-08-22 21:15:14 --> Model Class Initialized
INFO - 2025-08-22 21:15:14 --> Model Class Initialized
INFO - 2025-08-22 21:15:14 --> Model Class Initialized
INFO - 2025-08-22 21:15:14 --> Model Class Initialized
INFO - 2025-08-22 21:15:14 --> Model Class Initialized
INFO - 2025-08-22 21:15:23 --> Final output sent to browser
DEBUG - 2025-08-22 21:15:23 --> Total execution time: 9.0385
INFO - 2025-08-22 21:15:25 --> Config Class Initialized
INFO - 2025-08-22 21:15:25 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:25 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:25 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:25 --> URI Class Initialized
INFO - 2025-08-22 21:15:25 --> Router Class Initialized
INFO - 2025-08-22 21:15:25 --> Output Class Initialized
INFO - 2025-08-22 21:15:25 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:25 --> Input Class Initialized
INFO - 2025-08-22 21:15:25 --> Language Class Initialized
INFO - 2025-08-22 21:15:25 --> Loader Class Initialized
INFO - 2025-08-22 21:15:25 --> Helper loaded: url_helper
INFO - 2025-08-22 21:15:25 --> Database Driver Class Initialized
INFO - 2025-08-22 21:15:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:15:25 --> Controller Class Initialized
INFO - 2025-08-22 21:15:25 --> Model Class Initialized
INFO - 2025-08-22 21:15:25 --> Model Class Initialized
INFO - 2025-08-22 21:15:25 --> Model Class Initialized
INFO - 2025-08-22 21:15:25 --> Model Class Initialized
INFO - 2025-08-22 21:15:25 --> Model Class Initialized
INFO - 2025-08-22 21:15:25 --> Model Class Initialized
INFO - 2025-08-22 21:15:25 --> Model Class Initialized
INFO - 2025-08-22 21:15:25 --> Model Class Initialized
INFO - 2025-08-22 21:15:25 --> Model Class Initialized
INFO - 2025-08-22 21:15:25 --> Model Class Initialized
INFO - 2025-08-22 21:15:25 --> Model Class Initialized
INFO - 2025-08-22 21:15:25 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 21:15:26 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:15:26 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:15:26 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:15:26 --> Encryption Class Initialized
INFO - 2025-08-22 21:15:26 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:15:26 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 21:15:26 --> Final output sent to browser
DEBUG - 2025-08-22 21:15:26 --> Total execution time: 0.1478
INFO - 2025-08-22 21:15:26 --> Config Class Initialized
INFO - 2025-08-22 21:15:26 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:26 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:26 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:26 --> URI Class Initialized
INFO - 2025-08-22 21:15:26 --> Router Class Initialized
INFO - 2025-08-22 21:15:26 --> Output Class Initialized
INFO - 2025-08-22 21:15:26 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:26 --> Input Class Initialized
INFO - 2025-08-22 21:15:26 --> Language Class Initialized
ERROR - 2025-08-22 21:15:26 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:15:26 --> Config Class Initialized
INFO - 2025-08-22 21:15:26 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:26 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:26 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:26 --> URI Class Initialized
INFO - 2025-08-22 21:15:26 --> Router Class Initialized
INFO - 2025-08-22 21:15:26 --> Output Class Initialized
INFO - 2025-08-22 21:15:26 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:26 --> Input Class Initialized
INFO - 2025-08-22 21:15:26 --> Language Class Initialized
ERROR - 2025-08-22 21:15:26 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:15:26 --> Config Class Initialized
INFO - 2025-08-22 21:15:26 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:26 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:26 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:26 --> URI Class Initialized
INFO - 2025-08-22 21:15:26 --> Router Class Initialized
INFO - 2025-08-22 21:15:26 --> Output Class Initialized
INFO - 2025-08-22 21:15:26 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:26 --> Input Class Initialized
INFO - 2025-08-22 21:15:26 --> Language Class Initialized
INFO - 2025-08-22 21:15:26 --> Loader Class Initialized
INFO - 2025-08-22 21:15:26 --> Helper loaded: url_helper
INFO - 2025-08-22 21:15:26 --> Database Driver Class Initialized
INFO - 2025-08-22 21:15:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:15:26 --> Controller Class Initialized
DEBUG - 2025-08-22 21:15:26 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:15:26 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:15:26 --> Model Class Initialized
INFO - 2025-08-22 21:15:26 --> Model Class Initialized
INFO - 2025-08-22 21:15:26 --> Model Class Initialized
INFO - 2025-08-22 21:15:26 --> Model Class Initialized
INFO - 2025-08-22 21:15:26 --> Model Class Initialized
INFO - 2025-08-22 21:15:26 --> Model Class Initialized
INFO - 2025-08-22 21:15:26 --> Model Class Initialized
INFO - 2025-08-22 21:15:26 --> Model Class Initialized
INFO - 2025-08-22 21:15:26 --> Model Class Initialized
INFO - 2025-08-22 21:15:26 --> Model Class Initialized
INFO - 2025-08-22 21:15:26 --> Model Class Initialized
INFO - 2025-08-22 21:15:26 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:15:26 --> Final output sent to browser
DEBUG - 2025-08-22 21:15:26 --> Total execution time: 0.1090
INFO - 2025-08-22 21:15:33 --> Config Class Initialized
INFO - 2025-08-22 21:15:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:33 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:33 --> URI Class Initialized
INFO - 2025-08-22 21:15:33 --> Router Class Initialized
INFO - 2025-08-22 21:15:33 --> Output Class Initialized
INFO - 2025-08-22 21:15:33 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:33 --> Input Class Initialized
INFO - 2025-08-22 21:15:33 --> Language Class Initialized
INFO - 2025-08-22 21:15:33 --> Loader Class Initialized
INFO - 2025-08-22 21:15:33 --> Helper loaded: url_helper
INFO - 2025-08-22 21:15:33 --> Database Driver Class Initialized
INFO - 2025-08-22 21:15:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:15:33 --> Controller Class Initialized
INFO - 2025-08-22 21:15:33 --> Model Class Initialized
INFO - 2025-08-22 21:15:33 --> Model Class Initialized
INFO - 2025-08-22 21:15:33 --> Model Class Initialized
INFO - 2025-08-22 21:15:33 --> Model Class Initialized
INFO - 2025-08-22 21:15:33 --> Model Class Initialized
INFO - 2025-08-22 21:15:33 --> Model Class Initialized
INFO - 2025-08-22 21:15:33 --> Model Class Initialized
INFO - 2025-08-22 21:15:33 --> Model Class Initialized
INFO - 2025-08-22 21:15:33 --> Model Class Initialized
INFO - 2025-08-22 21:15:33 --> Model Class Initialized
INFO - 2025-08-22 21:15:33 --> Model Class Initialized
INFO - 2025-08-22 21:15:36 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:15:36 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:15:36 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:15:36 --> Encryption Class Initialized
INFO - 2025-08-22 21:15:36 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:15:36 --> File loaded: /var/www/noble/application/views/admin/purchase_list_v.php
INFO - 2025-08-22 21:15:36 --> Final output sent to browser
DEBUG - 2025-08-22 21:15:36 --> Total execution time: 3.5327
INFO - 2025-08-22 21:15:36 --> Config Class Initialized
INFO - 2025-08-22 21:15:36 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:36 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:36 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:36 --> URI Class Initialized
INFO - 2025-08-22 21:15:36 --> Router Class Initialized
INFO - 2025-08-22 21:15:36 --> Output Class Initialized
INFO - 2025-08-22 21:15:36 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:36 --> Input Class Initialized
INFO - 2025-08-22 21:15:36 --> Language Class Initialized
ERROR - 2025-08-22 21:15:36 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:15:36 --> Config Class Initialized
INFO - 2025-08-22 21:15:36 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:36 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:36 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:36 --> URI Class Initialized
INFO - 2025-08-22 21:15:36 --> Router Class Initialized
INFO - 2025-08-22 21:15:36 --> Output Class Initialized
INFO - 2025-08-22 21:15:36 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:36 --> Input Class Initialized
INFO - 2025-08-22 21:15:36 --> Language Class Initialized
ERROR - 2025-08-22 21:15:36 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:15:36 --> Config Class Initialized
INFO - 2025-08-22 21:15:36 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:36 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:36 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:36 --> URI Class Initialized
INFO - 2025-08-22 21:15:36 --> Router Class Initialized
INFO - 2025-08-22 21:15:36 --> Output Class Initialized
INFO - 2025-08-22 21:15:36 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:36 --> Input Class Initialized
INFO - 2025-08-22 21:15:36 --> Language Class Initialized
INFO - 2025-08-22 21:15:36 --> Loader Class Initialized
INFO - 2025-08-22 21:15:36 --> Helper loaded: url_helper
INFO - 2025-08-22 21:15:36 --> Database Driver Class Initialized
INFO - 2025-08-22 21:15:36 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:15:36 --> Controller Class Initialized
DEBUG - 2025-08-22 21:15:36 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:15:36 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:15:36 --> Model Class Initialized
INFO - 2025-08-22 21:15:36 --> Model Class Initialized
INFO - 2025-08-22 21:15:36 --> Model Class Initialized
INFO - 2025-08-22 21:15:36 --> Model Class Initialized
INFO - 2025-08-22 21:15:36 --> Model Class Initialized
INFO - 2025-08-22 21:15:36 --> Model Class Initialized
INFO - 2025-08-22 21:15:36 --> Model Class Initialized
INFO - 2025-08-22 21:15:36 --> Model Class Initialized
INFO - 2025-08-22 21:15:36 --> Model Class Initialized
INFO - 2025-08-22 21:15:36 --> Model Class Initialized
INFO - 2025-08-22 21:15:36 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Config Class Initialized
INFO - 2025-08-22 21:15:37 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:37 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:37 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:37 --> URI Class Initialized
INFO - 2025-08-22 21:15:37 --> Router Class Initialized
INFO - 2025-08-22 21:15:37 --> Output Class Initialized
INFO - 2025-08-22 21:15:37 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:37 --> Input Class Initialized
INFO - 2025-08-22 21:15:37 --> Language Class Initialized
INFO - 2025-08-22 21:15:37 --> Loader Class Initialized
INFO - 2025-08-22 21:15:37 --> Helper loaded: url_helper
INFO - 2025-08-22 21:15:37 --> Database Driver Class Initialized
INFO - 2025-08-22 21:15:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:15:37 --> Controller Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:15:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:15:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:15:37 --> Encryption Class Initialized
INFO - 2025-08-22 21:15:37 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:15:37 --> File loaded: /var/www/noble/application/views/admin/board_list_v.php
INFO - 2025-08-22 21:15:37 --> Final output sent to browser
DEBUG - 2025-08-22 21:15:37 --> Total execution time: 0.0064
INFO - 2025-08-22 21:15:37 --> Config Class Initialized
INFO - 2025-08-22 21:15:37 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:37 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:37 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:37 --> URI Class Initialized
INFO - 2025-08-22 21:15:37 --> Router Class Initialized
INFO - 2025-08-22 21:15:37 --> Output Class Initialized
INFO - 2025-08-22 21:15:37 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:37 --> Input Class Initialized
INFO - 2025-08-22 21:15:37 --> Language Class Initialized
ERROR - 2025-08-22 21:15:37 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:15:37 --> Config Class Initialized
INFO - 2025-08-22 21:15:37 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:37 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:37 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:37 --> URI Class Initialized
INFO - 2025-08-22 21:15:37 --> Router Class Initialized
INFO - 2025-08-22 21:15:37 --> Output Class Initialized
INFO - 2025-08-22 21:15:37 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:37 --> Input Class Initialized
INFO - 2025-08-22 21:15:37 --> Language Class Initialized
ERROR - 2025-08-22 21:15:37 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:15:37 --> Config Class Initialized
INFO - 2025-08-22 21:15:37 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:37 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:37 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:37 --> URI Class Initialized
INFO - 2025-08-22 21:15:37 --> Router Class Initialized
INFO - 2025-08-22 21:15:37 --> Output Class Initialized
INFO - 2025-08-22 21:15:37 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:37 --> Input Class Initialized
INFO - 2025-08-22 21:15:37 --> Language Class Initialized
INFO - 2025-08-22 21:15:37 --> Loader Class Initialized
INFO - 2025-08-22 21:15:37 --> Helper loaded: url_helper
INFO - 2025-08-22 21:15:37 --> Database Driver Class Initialized
INFO - 2025-08-22 21:15:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:15:37 --> Controller Class Initialized
DEBUG - 2025-08-22 21:15:37 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:15:37 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Model Class Initialized
INFO - 2025-08-22 21:15:37 --> Final output sent to browser
DEBUG - 2025-08-22 21:15:37 --> Total execution time: 0.0055
INFO - 2025-08-22 21:15:41 --> Config Class Initialized
INFO - 2025-08-22 21:15:41 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:41 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:41 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:41 --> URI Class Initialized
INFO - 2025-08-22 21:15:41 --> Router Class Initialized
INFO - 2025-08-22 21:15:41 --> Output Class Initialized
INFO - 2025-08-22 21:15:41 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:41 --> Input Class Initialized
INFO - 2025-08-22 21:15:41 --> Language Class Initialized
INFO - 2025-08-22 21:15:41 --> Loader Class Initialized
INFO - 2025-08-22 21:15:41 --> Helper loaded: url_helper
INFO - 2025-08-22 21:15:41 --> Database Driver Class Initialized
INFO - 2025-08-22 21:15:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:15:41 --> Controller Class Initialized
INFO - 2025-08-22 21:15:41 --> Model Class Initialized
INFO - 2025-08-22 21:15:41 --> Model Class Initialized
INFO - 2025-08-22 21:15:41 --> Model Class Initialized
INFO - 2025-08-22 21:15:41 --> Model Class Initialized
INFO - 2025-08-22 21:15:41 --> Model Class Initialized
INFO - 2025-08-22 21:15:41 --> Model Class Initialized
INFO - 2025-08-22 21:15:41 --> Model Class Initialized
INFO - 2025-08-22 21:15:41 --> Model Class Initialized
INFO - 2025-08-22 21:15:41 --> Model Class Initialized
INFO - 2025-08-22 21:15:41 --> Model Class Initialized
INFO - 2025-08-22 21:15:41 --> Model Class Initialized
INFO - 2025-08-22 21:15:41 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 21:15:41 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:15:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:15:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:15:41 --> Encryption Class Initialized
INFO - 2025-08-22 21:15:41 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:15:41 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 21:15:41 --> Final output sent to browser
DEBUG - 2025-08-22 21:15:41 --> Total execution time: 0.1439
INFO - 2025-08-22 21:15:42 --> Config Class Initialized
INFO - 2025-08-22 21:15:42 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:42 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:42 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:42 --> URI Class Initialized
INFO - 2025-08-22 21:15:42 --> Router Class Initialized
INFO - 2025-08-22 21:15:42 --> Output Class Initialized
INFO - 2025-08-22 21:15:42 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:42 --> Input Class Initialized
INFO - 2025-08-22 21:15:42 --> Language Class Initialized
ERROR - 2025-08-22 21:15:42 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:15:42 --> Config Class Initialized
INFO - 2025-08-22 21:15:42 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:42 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:42 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:42 --> URI Class Initialized
INFO - 2025-08-22 21:15:42 --> Router Class Initialized
INFO - 2025-08-22 21:15:42 --> Output Class Initialized
INFO - 2025-08-22 21:15:42 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:42 --> Input Class Initialized
INFO - 2025-08-22 21:15:42 --> Language Class Initialized
ERROR - 2025-08-22 21:15:42 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:15:42 --> Config Class Initialized
INFO - 2025-08-22 21:15:42 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:42 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:42 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:42 --> URI Class Initialized
INFO - 2025-08-22 21:15:42 --> Router Class Initialized
INFO - 2025-08-22 21:15:42 --> Output Class Initialized
INFO - 2025-08-22 21:15:42 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:42 --> Input Class Initialized
INFO - 2025-08-22 21:15:42 --> Language Class Initialized
INFO - 2025-08-22 21:15:42 --> Loader Class Initialized
INFO - 2025-08-22 21:15:42 --> Helper loaded: url_helper
INFO - 2025-08-22 21:15:42 --> Database Driver Class Initialized
INFO - 2025-08-22 21:15:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:15:42 --> Controller Class Initialized
DEBUG - 2025-08-22 21:15:42 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:15:42 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:15:42 --> Model Class Initialized
INFO - 2025-08-22 21:15:42 --> Model Class Initialized
INFO - 2025-08-22 21:15:42 --> Model Class Initialized
INFO - 2025-08-22 21:15:42 --> Model Class Initialized
INFO - 2025-08-22 21:15:42 --> Model Class Initialized
INFO - 2025-08-22 21:15:42 --> Model Class Initialized
INFO - 2025-08-22 21:15:42 --> Model Class Initialized
INFO - 2025-08-22 21:15:42 --> Model Class Initialized
INFO - 2025-08-22 21:15:42 --> Model Class Initialized
INFO - 2025-08-22 21:15:42 --> Model Class Initialized
INFO - 2025-08-22 21:15:42 --> Model Class Initialized
INFO - 2025-08-22 21:15:42 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:15:42 --> Final output sent to browser
DEBUG - 2025-08-22 21:15:42 --> Total execution time: 0.1116
INFO - 2025-08-22 21:15:44 --> Config Class Initialized
INFO - 2025-08-22 21:15:44 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:44 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:44 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:44 --> URI Class Initialized
INFO - 2025-08-22 21:15:44 --> Router Class Initialized
INFO - 2025-08-22 21:15:44 --> Output Class Initialized
INFO - 2025-08-22 21:15:44 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:44 --> Input Class Initialized
INFO - 2025-08-22 21:15:44 --> Language Class Initialized
INFO - 2025-08-22 21:15:44 --> Loader Class Initialized
INFO - 2025-08-22 21:15:44 --> Helper loaded: url_helper
INFO - 2025-08-22 21:15:44 --> Database Driver Class Initialized
INFO - 2025-08-22 21:15:44 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:15:44 --> Controller Class Initialized
INFO - 2025-08-22 21:15:44 --> Model Class Initialized
INFO - 2025-08-22 21:15:44 --> Model Class Initialized
INFO - 2025-08-22 21:15:44 --> Model Class Initialized
INFO - 2025-08-22 21:15:44 --> Model Class Initialized
INFO - 2025-08-22 21:15:44 --> Model Class Initialized
INFO - 2025-08-22 21:15:44 --> Model Class Initialized
INFO - 2025-08-22 21:15:44 --> Model Class Initialized
INFO - 2025-08-22 21:15:44 --> Model Class Initialized
INFO - 2025-08-22 21:15:44 --> Model Class Initialized
INFO - 2025-08-22 21:15:44 --> Model Class Initialized
INFO - 2025-08-22 21:15:44 --> Model Class Initialized
INFO - 2025-08-22 21:15:44 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:15:53 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:15:53 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:15:53 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:15:53 --> Encryption Class Initialized
INFO - 2025-08-22 21:15:53 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:15:53 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:15:53 --> Final output sent to browser
DEBUG - 2025-08-22 21:15:53 --> Total execution time: 8.9847
INFO - 2025-08-22 21:15:53 --> Config Class Initialized
INFO - 2025-08-22 21:15:53 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:53 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:53 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:53 --> URI Class Initialized
INFO - 2025-08-22 21:15:53 --> Router Class Initialized
INFO - 2025-08-22 21:15:53 --> Output Class Initialized
INFO - 2025-08-22 21:15:53 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:53 --> Input Class Initialized
INFO - 2025-08-22 21:15:53 --> Language Class Initialized
ERROR - 2025-08-22 21:15:53 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:15:53 --> Config Class Initialized
INFO - 2025-08-22 21:15:53 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:53 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:53 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:53 --> URI Class Initialized
INFO - 2025-08-22 21:15:53 --> Router Class Initialized
INFO - 2025-08-22 21:15:53 --> Output Class Initialized
INFO - 2025-08-22 21:15:53 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:53 --> Input Class Initialized
INFO - 2025-08-22 21:15:53 --> Language Class Initialized
ERROR - 2025-08-22 21:15:53 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:15:53 --> Config Class Initialized
INFO - 2025-08-22 21:15:53 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:15:53 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:15:53 --> Utf8 Class Initialized
INFO - 2025-08-22 21:15:53 --> URI Class Initialized
INFO - 2025-08-22 21:15:53 --> Router Class Initialized
INFO - 2025-08-22 21:15:53 --> Output Class Initialized
INFO - 2025-08-22 21:15:53 --> Security Class Initialized
DEBUG - 2025-08-22 21:15:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:15:53 --> Input Class Initialized
INFO - 2025-08-22 21:15:53 --> Language Class Initialized
INFO - 2025-08-22 21:15:53 --> Loader Class Initialized
INFO - 2025-08-22 21:15:53 --> Helper loaded: url_helper
INFO - 2025-08-22 21:15:53 --> Database Driver Class Initialized
INFO - 2025-08-22 21:15:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:15:53 --> Controller Class Initialized
DEBUG - 2025-08-22 21:15:53 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:15:53 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:15:53 --> Model Class Initialized
INFO - 2025-08-22 21:15:53 --> Model Class Initialized
INFO - 2025-08-22 21:15:53 --> Model Class Initialized
INFO - 2025-08-22 21:15:53 --> Model Class Initialized
INFO - 2025-08-22 21:15:53 --> Model Class Initialized
INFO - 2025-08-22 21:15:53 --> Model Class Initialized
INFO - 2025-08-22 21:15:53 --> Model Class Initialized
INFO - 2025-08-22 21:15:53 --> Model Class Initialized
INFO - 2025-08-22 21:15:53 --> Model Class Initialized
INFO - 2025-08-22 21:15:53 --> Model Class Initialized
INFO - 2025-08-22 21:15:53 --> Model Class Initialized
INFO - 2025-08-22 21:16:02 --> Final output sent to browser
DEBUG - 2025-08-22 21:16:02 --> Total execution time: 9.0335
INFO - 2025-08-22 21:16:18 --> Config Class Initialized
INFO - 2025-08-22 21:16:18 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:16:18 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:16:18 --> Utf8 Class Initialized
INFO - 2025-08-22 21:16:18 --> URI Class Initialized
INFO - 2025-08-22 21:16:18 --> Router Class Initialized
INFO - 2025-08-22 21:16:18 --> Output Class Initialized
INFO - 2025-08-22 21:16:18 --> Security Class Initialized
DEBUG - 2025-08-22 21:16:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:16:18 --> Input Class Initialized
INFO - 2025-08-22 21:16:18 --> Language Class Initialized
INFO - 2025-08-22 21:16:18 --> Loader Class Initialized
INFO - 2025-08-22 21:16:18 --> Helper loaded: url_helper
INFO - 2025-08-22 21:16:18 --> Database Driver Class Initialized
INFO - 2025-08-22 21:16:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:16:18 --> Controller Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:16:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:16:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:16:18 --> Encryption Class Initialized
INFO - 2025-08-22 21:16:18 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:16:18 --> File loaded: /var/www/noble/application/views/admin/board_list_v.php
INFO - 2025-08-22 21:16:18 --> Final output sent to browser
DEBUG - 2025-08-22 21:16:18 --> Total execution time: 0.0047
INFO - 2025-08-22 21:16:18 --> Config Class Initialized
INFO - 2025-08-22 21:16:18 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:16:18 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:16:18 --> Utf8 Class Initialized
INFO - 2025-08-22 21:16:18 --> URI Class Initialized
INFO - 2025-08-22 21:16:18 --> Router Class Initialized
INFO - 2025-08-22 21:16:18 --> Output Class Initialized
INFO - 2025-08-22 21:16:18 --> Security Class Initialized
DEBUG - 2025-08-22 21:16:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:16:18 --> Input Class Initialized
INFO - 2025-08-22 21:16:18 --> Language Class Initialized
ERROR - 2025-08-22 21:16:18 --> 404 Page Not Found: Assets/polo
INFO - 2025-08-22 21:16:18 --> Config Class Initialized
INFO - 2025-08-22 21:16:18 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:16:18 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:16:18 --> Utf8 Class Initialized
INFO - 2025-08-22 21:16:18 --> URI Class Initialized
INFO - 2025-08-22 21:16:18 --> Router Class Initialized
INFO - 2025-08-22 21:16:18 --> Output Class Initialized
INFO - 2025-08-22 21:16:18 --> Security Class Initialized
DEBUG - 2025-08-22 21:16:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:16:18 --> Input Class Initialized
INFO - 2025-08-22 21:16:18 --> Language Class Initialized
ERROR - 2025-08-22 21:16:18 --> 404 Page Not Found: Assets/js
INFO - 2025-08-22 21:16:18 --> Config Class Initialized
INFO - 2025-08-22 21:16:18 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:16:18 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:16:18 --> Utf8 Class Initialized
INFO - 2025-08-22 21:16:18 --> URI Class Initialized
INFO - 2025-08-22 21:16:18 --> Router Class Initialized
INFO - 2025-08-22 21:16:18 --> Output Class Initialized
INFO - 2025-08-22 21:16:18 --> Security Class Initialized
DEBUG - 2025-08-22 21:16:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:16:18 --> Input Class Initialized
INFO - 2025-08-22 21:16:18 --> Language Class Initialized
INFO - 2025-08-22 21:16:18 --> Loader Class Initialized
INFO - 2025-08-22 21:16:18 --> Helper loaded: url_helper
INFO - 2025-08-22 21:16:18 --> Database Driver Class Initialized
INFO - 2025-08-22 21:16:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:16:18 --> Controller Class Initialized
DEBUG - 2025-08-22 21:16:18 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:16:18 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Model Class Initialized
INFO - 2025-08-22 21:16:18 --> Final output sent to browser
DEBUG - 2025-08-22 21:16:18 --> Total execution time: 0.0038
INFO - 2025-08-22 21:16:38 --> Config Class Initialized
INFO - 2025-08-22 21:16:38 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:16:38 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:16:38 --> Utf8 Class Initialized
INFO - 2025-08-22 21:16:38 --> URI Class Initialized
INFO - 2025-08-22 21:16:38 --> Router Class Initialized
INFO - 2025-08-22 21:16:38 --> Output Class Initialized
INFO - 2025-08-22 21:16:38 --> Security Class Initialized
DEBUG - 2025-08-22 21:16:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:16:38 --> Input Class Initialized
INFO - 2025-08-22 21:16:38 --> Language Class Initialized
INFO - 2025-08-22 21:16:38 --> Loader Class Initialized
INFO - 2025-08-22 21:16:38 --> Helper loaded: url_helper
INFO - 2025-08-22 21:16:38 --> Database Driver Class Initialized
INFO - 2025-08-22 21:16:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:16:38 --> Controller Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 21:16:38 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:16:38 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:16:38 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:16:38 --> Encryption Class Initialized
INFO - 2025-08-22 21:16:38 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:16:38 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 21:16:38 --> Final output sent to browser
DEBUG - 2025-08-22 21:16:38 --> Total execution time: 0.1527
INFO - 2025-08-22 21:16:38 --> Config Class Initialized
INFO - 2025-08-22 21:16:38 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:16:38 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:16:38 --> Utf8 Class Initialized
INFO - 2025-08-22 21:16:38 --> URI Class Initialized
INFO - 2025-08-22 21:16:38 --> Router Class Initialized
INFO - 2025-08-22 21:16:38 --> Output Class Initialized
INFO - 2025-08-22 21:16:38 --> Security Class Initialized
DEBUG - 2025-08-22 21:16:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:16:38 --> Input Class Initialized
INFO - 2025-08-22 21:16:38 --> Language Class Initialized
INFO - 2025-08-22 21:16:38 --> Loader Class Initialized
INFO - 2025-08-22 21:16:38 --> Helper loaded: url_helper
INFO - 2025-08-22 21:16:38 --> Database Driver Class Initialized
INFO - 2025-08-22 21:16:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:16:38 --> Controller Class Initialized
DEBUG - 2025-08-22 21:16:38 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:16:38 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> Model Class Initialized
INFO - 2025-08-22 21:16:38 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:16:38 --> Final output sent to browser
DEBUG - 2025-08-22 21:16:38 --> Total execution time: 0.1132
INFO - 2025-08-22 21:16:53 --> Config Class Initialized
INFO - 2025-08-22 21:16:53 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:16:53 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:16:53 --> Utf8 Class Initialized
INFO - 2025-08-22 21:16:53 --> URI Class Initialized
INFO - 2025-08-22 21:16:53 --> Router Class Initialized
INFO - 2025-08-22 21:16:53 --> Output Class Initialized
INFO - 2025-08-22 21:16:53 --> Security Class Initialized
DEBUG - 2025-08-22 21:16:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:16:53 --> Input Class Initialized
INFO - 2025-08-22 21:16:53 --> Language Class Initialized
INFO - 2025-08-22 21:16:53 --> Loader Class Initialized
INFO - 2025-08-22 21:16:53 --> Helper loaded: url_helper
INFO - 2025-08-22 21:16:53 --> Database Driver Class Initialized
INFO - 2025-08-22 21:16:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:16:53 --> Controller Class Initialized
DEBUG - 2025-08-22 21:16:53 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:16:53 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:16:53 --> Model Class Initialized
INFO - 2025-08-22 21:16:53 --> Model Class Initialized
INFO - 2025-08-22 21:16:53 --> Model Class Initialized
INFO - 2025-08-22 21:16:53 --> Model Class Initialized
INFO - 2025-08-22 21:16:53 --> Model Class Initialized
INFO - 2025-08-22 21:16:53 --> Model Class Initialized
INFO - 2025-08-22 21:16:53 --> Model Class Initialized
INFO - 2025-08-22 21:16:53 --> Model Class Initialized
INFO - 2025-08-22 21:16:53 --> Model Class Initialized
INFO - 2025-08-22 21:16:53 --> Model Class Initialized
INFO - 2025-08-22 21:16:53 --> Model Class Initialized
INFO - 2025-08-22 21:16:53 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:16:53 --> Final output sent to browser
DEBUG - 2025-08-22 21:16:53 --> Total execution time: 0.1099
INFO - 2025-08-22 21:16:56 --> Config Class Initialized
INFO - 2025-08-22 21:16:56 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:16:56 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:16:56 --> Utf8 Class Initialized
INFO - 2025-08-22 21:16:56 --> URI Class Initialized
INFO - 2025-08-22 21:16:56 --> Router Class Initialized
INFO - 2025-08-22 21:16:56 --> Output Class Initialized
INFO - 2025-08-22 21:16:56 --> Security Class Initialized
DEBUG - 2025-08-22 21:16:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:16:56 --> Input Class Initialized
INFO - 2025-08-22 21:16:56 --> Language Class Initialized
INFO - 2025-08-22 21:16:56 --> Loader Class Initialized
INFO - 2025-08-22 21:16:56 --> Helper loaded: url_helper
INFO - 2025-08-22 21:16:56 --> Database Driver Class Initialized
INFO - 2025-08-22 21:16:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:16:56 --> Controller Class Initialized
DEBUG - 2025-08-22 21:16:56 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:16:56 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:16:56 --> Model Class Initialized
INFO - 2025-08-22 21:16:56 --> Model Class Initialized
INFO - 2025-08-22 21:16:56 --> Model Class Initialized
INFO - 2025-08-22 21:16:56 --> Model Class Initialized
INFO - 2025-08-22 21:16:56 --> Model Class Initialized
INFO - 2025-08-22 21:16:56 --> Model Class Initialized
INFO - 2025-08-22 21:16:56 --> Model Class Initialized
INFO - 2025-08-22 21:16:56 --> Model Class Initialized
INFO - 2025-08-22 21:16:56 --> Model Class Initialized
INFO - 2025-08-22 21:16:56 --> Model Class Initialized
INFO - 2025-08-22 21:16:56 --> Model Class Initialized
INFO - 2025-08-22 21:16:56 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:16:56 --> Final output sent to browser
DEBUG - 2025-08-22 21:16:56 --> Total execution time: 0.1102
INFO - 2025-08-22 21:17:04 --> Config Class Initialized
INFO - 2025-08-22 21:17:04 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:17:04 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:17:04 --> Utf8 Class Initialized
INFO - 2025-08-22 21:17:04 --> URI Class Initialized
INFO - 2025-08-22 21:17:04 --> Router Class Initialized
INFO - 2025-08-22 21:17:04 --> Output Class Initialized
INFO - 2025-08-22 21:17:04 --> Security Class Initialized
DEBUG - 2025-08-22 21:17:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:17:04 --> Input Class Initialized
INFO - 2025-08-22 21:17:04 --> Language Class Initialized
INFO - 2025-08-22 21:17:04 --> Loader Class Initialized
INFO - 2025-08-22 21:17:04 --> Helper loaded: url_helper
INFO - 2025-08-22 21:17:04 --> Database Driver Class Initialized
INFO - 2025-08-22 21:17:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:17:04 --> Controller Class Initialized
DEBUG - 2025-08-22 21:17:04 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:17:04 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:17:04 --> Model Class Initialized
INFO - 2025-08-22 21:17:04 --> Model Class Initialized
INFO - 2025-08-22 21:17:04 --> Model Class Initialized
INFO - 2025-08-22 21:17:04 --> Model Class Initialized
INFO - 2025-08-22 21:17:04 --> Model Class Initialized
INFO - 2025-08-22 21:17:04 --> Model Class Initialized
INFO - 2025-08-22 21:17:04 --> Model Class Initialized
INFO - 2025-08-22 21:17:04 --> Model Class Initialized
INFO - 2025-08-22 21:17:04 --> Model Class Initialized
INFO - 2025-08-22 21:17:04 --> Model Class Initialized
INFO - 2025-08-22 21:17:04 --> Model Class Initialized
INFO - 2025-08-22 21:17:04 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:17:04 --> Final output sent to browser
DEBUG - 2025-08-22 21:17:04 --> Total execution time: 0.1139
INFO - 2025-08-22 21:17:05 --> Config Class Initialized
INFO - 2025-08-22 21:17:05 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:17:05 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:17:05 --> Utf8 Class Initialized
INFO - 2025-08-22 21:17:05 --> URI Class Initialized
INFO - 2025-08-22 21:17:05 --> Router Class Initialized
INFO - 2025-08-22 21:17:05 --> Output Class Initialized
INFO - 2025-08-22 21:17:05 --> Security Class Initialized
DEBUG - 2025-08-22 21:17:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:17:05 --> Input Class Initialized
INFO - 2025-08-22 21:17:05 --> Language Class Initialized
INFO - 2025-08-22 21:17:05 --> Loader Class Initialized
INFO - 2025-08-22 21:17:05 --> Helper loaded: url_helper
INFO - 2025-08-22 21:17:05 --> Database Driver Class Initialized
INFO - 2025-08-22 21:17:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:17:05 --> Controller Class Initialized
DEBUG - 2025-08-22 21:17:05 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:17:05 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:17:05 --> Model Class Initialized
INFO - 2025-08-22 21:17:05 --> Model Class Initialized
INFO - 2025-08-22 21:17:05 --> Model Class Initialized
INFO - 2025-08-22 21:17:05 --> Model Class Initialized
INFO - 2025-08-22 21:17:05 --> Model Class Initialized
INFO - 2025-08-22 21:17:05 --> Model Class Initialized
INFO - 2025-08-22 21:17:05 --> Model Class Initialized
INFO - 2025-08-22 21:17:05 --> Model Class Initialized
INFO - 2025-08-22 21:17:05 --> Model Class Initialized
INFO - 2025-08-22 21:17:05 --> Model Class Initialized
INFO - 2025-08-22 21:17:05 --> Model Class Initialized
INFO - 2025-08-22 21:17:05 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:17:06 --> Final output sent to browser
DEBUG - 2025-08-22 21:17:06 --> Total execution time: 0.1134
INFO - 2025-08-22 21:17:07 --> Config Class Initialized
INFO - 2025-08-22 21:17:07 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:17:07 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:17:07 --> Utf8 Class Initialized
INFO - 2025-08-22 21:17:07 --> URI Class Initialized
INFO - 2025-08-22 21:17:07 --> Router Class Initialized
INFO - 2025-08-22 21:17:07 --> Output Class Initialized
INFO - 2025-08-22 21:17:07 --> Security Class Initialized
DEBUG - 2025-08-22 21:17:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:17:07 --> Input Class Initialized
INFO - 2025-08-22 21:17:07 --> Language Class Initialized
INFO - 2025-08-22 21:17:07 --> Loader Class Initialized
INFO - 2025-08-22 21:17:07 --> Helper loaded: url_helper
INFO - 2025-08-22 21:17:07 --> Database Driver Class Initialized
INFO - 2025-08-22 21:17:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:17:07 --> Controller Class Initialized
DEBUG - 2025-08-22 21:17:07 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:17:07 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:17:07 --> Model Class Initialized
INFO - 2025-08-22 21:17:07 --> Model Class Initialized
INFO - 2025-08-22 21:17:07 --> Model Class Initialized
INFO - 2025-08-22 21:17:07 --> Model Class Initialized
INFO - 2025-08-22 21:17:07 --> Model Class Initialized
INFO - 2025-08-22 21:17:07 --> Model Class Initialized
INFO - 2025-08-22 21:17:07 --> Model Class Initialized
INFO - 2025-08-22 21:17:07 --> Model Class Initialized
INFO - 2025-08-22 21:17:07 --> Model Class Initialized
INFO - 2025-08-22 21:17:07 --> Model Class Initialized
INFO - 2025-08-22 21:17:07 --> Model Class Initialized
INFO - 2025-08-22 21:17:07 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:17:07 --> Final output sent to browser
DEBUG - 2025-08-22 21:17:07 --> Total execution time: 0.1123
INFO - 2025-08-22 21:17:13 --> Config Class Initialized
INFO - 2025-08-22 21:17:13 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:17:13 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:17:13 --> Utf8 Class Initialized
INFO - 2025-08-22 21:17:13 --> URI Class Initialized
INFO - 2025-08-22 21:17:13 --> Router Class Initialized
INFO - 2025-08-22 21:17:13 --> Output Class Initialized
INFO - 2025-08-22 21:17:13 --> Security Class Initialized
DEBUG - 2025-08-22 21:17:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:17:13 --> Input Class Initialized
INFO - 2025-08-22 21:17:13 --> Language Class Initialized
INFO - 2025-08-22 21:17:13 --> Loader Class Initialized
INFO - 2025-08-22 21:17:13 --> Helper loaded: url_helper
INFO - 2025-08-22 21:17:13 --> Database Driver Class Initialized
INFO - 2025-08-22 21:17:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:17:13 --> Controller Class Initialized
DEBUG - 2025-08-22 21:17:13 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:17:13 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:17:13 --> Model Class Initialized
INFO - 2025-08-22 21:17:13 --> Model Class Initialized
INFO - 2025-08-22 21:17:13 --> Model Class Initialized
INFO - 2025-08-22 21:17:13 --> Model Class Initialized
INFO - 2025-08-22 21:17:13 --> Model Class Initialized
INFO - 2025-08-22 21:17:13 --> Model Class Initialized
INFO - 2025-08-22 21:17:13 --> Model Class Initialized
INFO - 2025-08-22 21:17:13 --> Model Class Initialized
INFO - 2025-08-22 21:17:13 --> Model Class Initialized
INFO - 2025-08-22 21:17:13 --> Model Class Initialized
INFO - 2025-08-22 21:17:13 --> Model Class Initialized
INFO - 2025-08-22 21:17:13 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:17:13 --> Final output sent to browser
DEBUG - 2025-08-22 21:17:13 --> Total execution time: 0.1086
INFO - 2025-08-22 21:17:15 --> Config Class Initialized
INFO - 2025-08-22 21:17:15 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:17:15 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:17:15 --> Utf8 Class Initialized
INFO - 2025-08-22 21:17:15 --> URI Class Initialized
INFO - 2025-08-22 21:17:15 --> Router Class Initialized
INFO - 2025-08-22 21:17:15 --> Output Class Initialized
INFO - 2025-08-22 21:17:15 --> Security Class Initialized
DEBUG - 2025-08-22 21:17:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:17:15 --> Input Class Initialized
INFO - 2025-08-22 21:17:15 --> Language Class Initialized
INFO - 2025-08-22 21:17:15 --> Loader Class Initialized
INFO - 2025-08-22 21:17:15 --> Helper loaded: url_helper
INFO - 2025-08-22 21:17:15 --> Database Driver Class Initialized
INFO - 2025-08-22 21:17:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:17:15 --> Controller Class Initialized
DEBUG - 2025-08-22 21:17:15 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:17:15 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:17:15 --> Model Class Initialized
INFO - 2025-08-22 21:17:15 --> Model Class Initialized
INFO - 2025-08-22 21:17:15 --> Model Class Initialized
INFO - 2025-08-22 21:17:15 --> Model Class Initialized
INFO - 2025-08-22 21:17:15 --> Model Class Initialized
INFO - 2025-08-22 21:17:15 --> Model Class Initialized
INFO - 2025-08-22 21:17:15 --> Model Class Initialized
INFO - 2025-08-22 21:17:15 --> Model Class Initialized
INFO - 2025-08-22 21:17:15 --> Model Class Initialized
INFO - 2025-08-22 21:17:15 --> Model Class Initialized
INFO - 2025-08-22 21:17:15 --> Model Class Initialized
INFO - 2025-08-22 21:17:15 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:17:15 --> Final output sent to browser
DEBUG - 2025-08-22 21:17:15 --> Total execution time: 0.1089
INFO - 2025-08-22 21:17:27 --> Config Class Initialized
INFO - 2025-08-22 21:17:27 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:17:27 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:17:27 --> Utf8 Class Initialized
INFO - 2025-08-22 21:17:27 --> URI Class Initialized
INFO - 2025-08-22 21:17:27 --> Router Class Initialized
INFO - 2025-08-22 21:17:27 --> Output Class Initialized
INFO - 2025-08-22 21:17:27 --> Security Class Initialized
DEBUG - 2025-08-22 21:17:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:17:27 --> Input Class Initialized
INFO - 2025-08-22 21:17:27 --> Language Class Initialized
INFO - 2025-08-22 21:17:27 --> Loader Class Initialized
INFO - 2025-08-22 21:17:27 --> Helper loaded: url_helper
INFO - 2025-08-22 21:17:27 --> Database Driver Class Initialized
INFO - 2025-08-22 21:17:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:17:27 --> Controller Class Initialized
DEBUG - 2025-08-22 21:17:27 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:17:27 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:17:27 --> Model Class Initialized
INFO - 2025-08-22 21:17:27 --> Model Class Initialized
INFO - 2025-08-22 21:17:27 --> Model Class Initialized
INFO - 2025-08-22 21:17:27 --> Model Class Initialized
INFO - 2025-08-22 21:17:27 --> Model Class Initialized
INFO - 2025-08-22 21:17:27 --> Model Class Initialized
INFO - 2025-08-22 21:17:27 --> Model Class Initialized
INFO - 2025-08-22 21:17:27 --> Model Class Initialized
INFO - 2025-08-22 21:17:27 --> Model Class Initialized
INFO - 2025-08-22 21:17:27 --> Model Class Initialized
INFO - 2025-08-22 21:17:27 --> Model Class Initialized
INFO - 2025-08-22 21:17:27 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:17:28 --> Final output sent to browser
DEBUG - 2025-08-22 21:17:28 --> Total execution time: 0.1103
INFO - 2025-08-22 21:17:32 --> Config Class Initialized
INFO - 2025-08-22 21:17:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:17:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:17:32 --> Utf8 Class Initialized
INFO - 2025-08-22 21:17:32 --> URI Class Initialized
INFO - 2025-08-22 21:17:32 --> Router Class Initialized
INFO - 2025-08-22 21:17:32 --> Output Class Initialized
INFO - 2025-08-22 21:17:32 --> Security Class Initialized
DEBUG - 2025-08-22 21:17:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:17:32 --> Input Class Initialized
INFO - 2025-08-22 21:17:32 --> Language Class Initialized
INFO - 2025-08-22 21:17:32 --> Loader Class Initialized
INFO - 2025-08-22 21:17:32 --> Helper loaded: url_helper
INFO - 2025-08-22 21:17:32 --> Database Driver Class Initialized
INFO - 2025-08-22 21:17:32 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:17:32 --> Controller Class Initialized
INFO - 2025-08-22 21:17:32 --> Model Class Initialized
INFO - 2025-08-22 21:17:32 --> Model Class Initialized
INFO - 2025-08-22 21:17:32 --> Model Class Initialized
INFO - 2025-08-22 21:17:32 --> Model Class Initialized
INFO - 2025-08-22 21:17:32 --> Model Class Initialized
INFO - 2025-08-22 21:17:32 --> Model Class Initialized
INFO - 2025-08-22 21:17:32 --> Model Class Initialized
INFO - 2025-08-22 21:17:32 --> Model Class Initialized
INFO - 2025-08-22 21:17:32 --> Model Class Initialized
INFO - 2025-08-22 21:17:32 --> Model Class Initialized
INFO - 2025-08-22 21:17:32 --> Model Class Initialized
INFO - 2025-08-22 21:17:32 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:17:41 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:17:41 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:17:41 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:17:41 --> Encryption Class Initialized
INFO - 2025-08-22 21:17:41 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:17:41 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:17:41 --> Final output sent to browser
DEBUG - 2025-08-22 21:17:41 --> Total execution time: 9.0186
INFO - 2025-08-22 21:17:41 --> Config Class Initialized
INFO - 2025-08-22 21:17:41 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:17:41 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:17:41 --> Utf8 Class Initialized
INFO - 2025-08-22 21:17:41 --> URI Class Initialized
INFO - 2025-08-22 21:17:41 --> Router Class Initialized
INFO - 2025-08-22 21:17:41 --> Output Class Initialized
INFO - 2025-08-22 21:17:41 --> Security Class Initialized
DEBUG - 2025-08-22 21:17:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:17:41 --> Input Class Initialized
INFO - 2025-08-22 21:17:41 --> Language Class Initialized
INFO - 2025-08-22 21:17:41 --> Loader Class Initialized
INFO - 2025-08-22 21:17:41 --> Helper loaded: url_helper
INFO - 2025-08-22 21:17:41 --> Database Driver Class Initialized
INFO - 2025-08-22 21:17:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:17:41 --> Controller Class Initialized
DEBUG - 2025-08-22 21:17:41 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:17:41 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:17:41 --> Model Class Initialized
INFO - 2025-08-22 21:17:41 --> Model Class Initialized
INFO - 2025-08-22 21:17:41 --> Model Class Initialized
INFO - 2025-08-22 21:17:41 --> Model Class Initialized
INFO - 2025-08-22 21:17:41 --> Model Class Initialized
INFO - 2025-08-22 21:17:41 --> Model Class Initialized
INFO - 2025-08-22 21:17:41 --> Model Class Initialized
INFO - 2025-08-22 21:17:41 --> Model Class Initialized
INFO - 2025-08-22 21:17:41 --> Model Class Initialized
INFO - 2025-08-22 21:17:41 --> Model Class Initialized
INFO - 2025-08-22 21:17:41 --> Model Class Initialized
INFO - 2025-08-22 21:17:50 --> Final output sent to browser
DEBUG - 2025-08-22 21:17:50 --> Total execution time: 9.0315
INFO - 2025-08-22 21:18:55 --> Config Class Initialized
INFO - 2025-08-22 21:18:55 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:18:55 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:18:55 --> Utf8 Class Initialized
INFO - 2025-08-22 21:18:55 --> URI Class Initialized
INFO - 2025-08-22 21:18:55 --> Router Class Initialized
INFO - 2025-08-22 21:18:55 --> Output Class Initialized
INFO - 2025-08-22 21:18:55 --> Security Class Initialized
DEBUG - 2025-08-22 21:18:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:18:55 --> Input Class Initialized
INFO - 2025-08-22 21:18:55 --> Language Class Initialized
ERROR - 2025-08-22 21:18:55 --> 404 Page Not Found: Version/index
INFO - 2025-08-22 21:19:16 --> Config Class Initialized
INFO - 2025-08-22 21:19:16 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:19:16 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:19:16 --> Utf8 Class Initialized
INFO - 2025-08-22 21:19:16 --> URI Class Initialized
INFO - 2025-08-22 21:19:16 --> Router Class Initialized
INFO - 2025-08-22 21:19:16 --> Output Class Initialized
INFO - 2025-08-22 21:19:16 --> Security Class Initialized
DEBUG - 2025-08-22 21:19:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:19:16 --> Input Class Initialized
INFO - 2025-08-22 21:19:16 --> Language Class Initialized
INFO - 2025-08-22 21:19:16 --> Loader Class Initialized
INFO - 2025-08-22 21:19:16 --> Helper loaded: url_helper
INFO - 2025-08-22 21:19:16 --> Database Driver Class Initialized
INFO - 2025-08-22 21:19:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:19:16 --> Controller Class Initialized
INFO - 2025-08-22 21:19:16 --> Model Class Initialized
INFO - 2025-08-22 21:19:16 --> Model Class Initialized
INFO - 2025-08-22 21:19:16 --> Model Class Initialized
INFO - 2025-08-22 21:19:16 --> Model Class Initialized
INFO - 2025-08-22 21:19:16 --> Model Class Initialized
INFO - 2025-08-22 21:19:16 --> Model Class Initialized
INFO - 2025-08-22 21:19:16 --> Model Class Initialized
INFO - 2025-08-22 21:19:16 --> Model Class Initialized
INFO - 2025-08-22 21:19:16 --> Model Class Initialized
INFO - 2025-08-22 21:19:16 --> Model Class Initialized
INFO - 2025-08-22 21:19:16 --> Model Class Initialized
INFO - 2025-08-22 21:19:16 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:19:25 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:19:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:19:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:19:25 --> Encryption Class Initialized
INFO - 2025-08-22 21:19:25 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:19:25 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:19:25 --> Final output sent to browser
DEBUG - 2025-08-22 21:19:25 --> Total execution time: 8.9752
INFO - 2025-08-22 21:19:25 --> Config Class Initialized
INFO - 2025-08-22 21:19:25 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:19:25 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:19:25 --> Utf8 Class Initialized
INFO - 2025-08-22 21:19:25 --> URI Class Initialized
INFO - 2025-08-22 21:19:25 --> Router Class Initialized
INFO - 2025-08-22 21:19:25 --> Output Class Initialized
INFO - 2025-08-22 21:19:25 --> Security Class Initialized
DEBUG - 2025-08-22 21:19:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:19:25 --> Input Class Initialized
INFO - 2025-08-22 21:19:25 --> Language Class Initialized
INFO - 2025-08-22 21:19:25 --> Loader Class Initialized
INFO - 2025-08-22 21:19:25 --> Helper loaded: url_helper
INFO - 2025-08-22 21:19:25 --> Database Driver Class Initialized
INFO - 2025-08-22 21:19:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:19:25 --> Controller Class Initialized
DEBUG - 2025-08-22 21:19:25 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:19:25 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:19:25 --> Model Class Initialized
INFO - 2025-08-22 21:19:25 --> Model Class Initialized
INFO - 2025-08-22 21:19:25 --> Model Class Initialized
INFO - 2025-08-22 21:19:25 --> Model Class Initialized
INFO - 2025-08-22 21:19:25 --> Model Class Initialized
INFO - 2025-08-22 21:19:25 --> Model Class Initialized
INFO - 2025-08-22 21:19:25 --> Model Class Initialized
INFO - 2025-08-22 21:19:25 --> Model Class Initialized
INFO - 2025-08-22 21:19:25 --> Model Class Initialized
INFO - 2025-08-22 21:19:25 --> Model Class Initialized
INFO - 2025-08-22 21:19:25 --> Model Class Initialized
ERROR - 2025-08-22 21:19:25 --> Severity: Notice --> Undefined variable: pagination /var/www/noble/application/models/Member_m.php 319
ERROR - 2025-08-22 21:19:25 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/noble/application/models/Member_m.php 319
ERROR - 2025-08-22 21:19:25 --> Severity: Notice --> Undefined variable: pagination /var/www/noble/application/models/Member_m.php 319
ERROR - 2025-08-22 21:19:25 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/noble/application/models/Member_m.php 319
ERROR - 2025-08-22 21:19:25 --> Severity: Notice --> Undefined variable: pagination /var/www/noble/application/models/Member_m.php 319
ERROR - 2025-08-22 21:19:25 --> Severity: Notice --> Trying to access array offset on value of type null /var/www/noble/application/models/Member_m.php 319
ERROR - 2025-08-22 21:19:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIMIT ,' at line 18 - Invalid query: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
				, m.mem_joindate
				, m.mem_islive
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		 WHERE  ifnull(m.mem_outdate, 0) = 0  GROUP BY mem_no ORDER BY  LIMIT , 
INFO - 2025-08-22 21:19:25 --> Language file loaded: language/english/db_lang.php
ERROR - 2025-08-22 21:19:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/noble/system/core/Exceptions.php:272) /var/www/noble/system/core/Common.php 573
INFO - 2025-08-22 21:19:32 --> Config Class Initialized
INFO - 2025-08-22 21:19:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:19:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:19:32 --> Utf8 Class Initialized
INFO - 2025-08-22 21:19:32 --> URI Class Initialized
INFO - 2025-08-22 21:19:32 --> Router Class Initialized
INFO - 2025-08-22 21:19:32 --> Output Class Initialized
INFO - 2025-08-22 21:19:32 --> Security Class Initialized
DEBUG - 2025-08-22 21:19:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:19:32 --> Input Class Initialized
INFO - 2025-08-22 21:19:32 --> Language Class Initialized
INFO - 2025-08-22 21:19:32 --> Loader Class Initialized
INFO - 2025-08-22 21:19:32 --> Helper loaded: url_helper
INFO - 2025-08-22 21:19:32 --> Database Driver Class Initialized
INFO - 2025-08-22 21:19:32 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:19:32 --> Controller Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 21:19:32 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:19:32 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:19:32 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:19:32 --> Encryption Class Initialized
INFO - 2025-08-22 21:19:32 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:19:32 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 21:19:32 --> Final output sent to browser
DEBUG - 2025-08-22 21:19:32 --> Total execution time: 0.1421
INFO - 2025-08-22 21:19:32 --> Config Class Initialized
INFO - 2025-08-22 21:19:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:19:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:19:32 --> Utf8 Class Initialized
INFO - 2025-08-22 21:19:32 --> URI Class Initialized
INFO - 2025-08-22 21:19:32 --> Router Class Initialized
INFO - 2025-08-22 21:19:32 --> Output Class Initialized
INFO - 2025-08-22 21:19:32 --> Security Class Initialized
DEBUG - 2025-08-22 21:19:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:19:32 --> Input Class Initialized
INFO - 2025-08-22 21:19:32 --> Language Class Initialized
INFO - 2025-08-22 21:19:32 --> Loader Class Initialized
INFO - 2025-08-22 21:19:32 --> Helper loaded: url_helper
INFO - 2025-08-22 21:19:32 --> Database Driver Class Initialized
INFO - 2025-08-22 21:19:32 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:19:32 --> Controller Class Initialized
DEBUG - 2025-08-22 21:19:32 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:19:32 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> Model Class Initialized
INFO - 2025-08-22 21:19:32 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:19:32 --> Final output sent to browser
DEBUG - 2025-08-22 21:19:32 --> Total execution time: 0.1114
INFO - 2025-08-22 21:20:07 --> Config Class Initialized
INFO - 2025-08-22 21:20:07 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:20:07 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:20:07 --> Utf8 Class Initialized
INFO - 2025-08-22 21:20:07 --> URI Class Initialized
INFO - 2025-08-22 21:20:07 --> Router Class Initialized
INFO - 2025-08-22 21:20:07 --> Output Class Initialized
INFO - 2025-08-22 21:20:07 --> Security Class Initialized
DEBUG - 2025-08-22 21:20:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:20:07 --> Input Class Initialized
INFO - 2025-08-22 21:20:07 --> Language Class Initialized
ERROR - 2025-08-22 21:20:07 --> 404 Page Not Found: Assets/labouright
INFO - 2025-08-22 21:20:08 --> Config Class Initialized
INFO - 2025-08-22 21:20:08 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:20:08 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:20:08 --> Utf8 Class Initialized
INFO - 2025-08-22 21:20:08 --> URI Class Initialized
INFO - 2025-08-22 21:20:08 --> Router Class Initialized
INFO - 2025-08-22 21:20:08 --> Output Class Initialized
INFO - 2025-08-22 21:20:08 --> Security Class Initialized
DEBUG - 2025-08-22 21:20:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:20:08 --> Input Class Initialized
INFO - 2025-08-22 21:20:08 --> Language Class Initialized
INFO - 2025-08-22 21:20:08 --> Loader Class Initialized
INFO - 2025-08-22 21:20:08 --> Helper loaded: url_helper
INFO - 2025-08-22 21:20:08 --> Database Driver Class Initialized
INFO - 2025-08-22 21:20:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:20:08 --> Controller Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Helper loaded: cookie_helper
INFO - 2025-08-22 21:20:08 --> Config Class Initialized
INFO - 2025-08-22 21:20:08 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:20:08 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:20:08 --> Utf8 Class Initialized
INFO - 2025-08-22 21:20:08 --> URI Class Initialized
INFO - 2025-08-22 21:20:08 --> Router Class Initialized
INFO - 2025-08-22 21:20:08 --> Output Class Initialized
INFO - 2025-08-22 21:20:08 --> Security Class Initialized
DEBUG - 2025-08-22 21:20:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:20:08 --> Input Class Initialized
INFO - 2025-08-22 21:20:08 --> Language Class Initialized
INFO - 2025-08-22 21:20:08 --> Loader Class Initialized
INFO - 2025-08-22 21:20:08 --> Helper loaded: url_helper
INFO - 2025-08-22 21:20:08 --> Database Driver Class Initialized
INFO - 2025-08-22 21:20:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:20:08 --> Controller Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Model Class Initialized
INFO - 2025-08-22 21:20:08 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:20:08 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:20:08 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:20:08 --> Encryption Class Initialized
INFO - 2025-08-22 21:20:08 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:20:08 --> File loaded: /var/www/noble/application/views/admin/login_v.php
INFO - 2025-08-22 21:20:08 --> Final output sent to browser
DEBUG - 2025-08-22 21:20:08 --> Total execution time: 0.0030
INFO - 2025-08-22 21:20:13 --> Config Class Initialized
INFO - 2025-08-22 21:20:13 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:20:13 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:20:13 --> Utf8 Class Initialized
INFO - 2025-08-22 21:20:13 --> URI Class Initialized
INFO - 2025-08-22 21:20:13 --> Router Class Initialized
INFO - 2025-08-22 21:20:13 --> Output Class Initialized
INFO - 2025-08-22 21:20:13 --> Security Class Initialized
DEBUG - 2025-08-22 21:20:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:20:13 --> Input Class Initialized
INFO - 2025-08-22 21:20:13 --> Language Class Initialized
INFO - 2025-08-22 21:20:13 --> Loader Class Initialized
INFO - 2025-08-22 21:20:13 --> Helper loaded: url_helper
INFO - 2025-08-22 21:20:13 --> Database Driver Class Initialized
INFO - 2025-08-22 21:20:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:20:13 --> Controller Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:20:13 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:20:13 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:20:13 --> Encryption Class Initialized
INFO - 2025-08-22 21:20:13 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:20:13 --> Final output sent to browser
DEBUG - 2025-08-22 21:20:13 --> Total execution time: 0.0051
INFO - 2025-08-22 21:20:13 --> Config Class Initialized
INFO - 2025-08-22 21:20:13 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:20:13 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:20:13 --> Utf8 Class Initialized
INFO - 2025-08-22 21:20:13 --> URI Class Initialized
INFO - 2025-08-22 21:20:13 --> Router Class Initialized
INFO - 2025-08-22 21:20:13 --> Output Class Initialized
INFO - 2025-08-22 21:20:13 --> Security Class Initialized
DEBUG - 2025-08-22 21:20:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:20:13 --> Input Class Initialized
INFO - 2025-08-22 21:20:13 --> Language Class Initialized
INFO - 2025-08-22 21:20:13 --> Loader Class Initialized
INFO - 2025-08-22 21:20:13 --> Helper loaded: url_helper
INFO - 2025-08-22 21:20:13 --> Database Driver Class Initialized
INFO - 2025-08-22 21:20:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:20:13 --> Controller Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:20:13 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:20:13 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:20:13 --> Encryption Class Initialized
INFO - 2025-08-22 21:20:13 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:20:13 --> Config Class Initialized
INFO - 2025-08-22 21:20:13 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:20:13 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:20:13 --> Utf8 Class Initialized
INFO - 2025-08-22 21:20:13 --> URI Class Initialized
INFO - 2025-08-22 21:20:13 --> Router Class Initialized
INFO - 2025-08-22 21:20:13 --> Output Class Initialized
INFO - 2025-08-22 21:20:13 --> Security Class Initialized
DEBUG - 2025-08-22 21:20:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:20:13 --> Input Class Initialized
INFO - 2025-08-22 21:20:13 --> Language Class Initialized
INFO - 2025-08-22 21:20:13 --> Loader Class Initialized
INFO - 2025-08-22 21:20:13 --> Helper loaded: url_helper
INFO - 2025-08-22 21:20:13 --> Database Driver Class Initialized
INFO - 2025-08-22 21:20:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:20:13 --> Controller Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> Model Class Initialized
INFO - 2025-08-22 21:20:13 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:20:16 --> Config Class Initialized
INFO - 2025-08-22 21:20:16 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:20:16 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:20:16 --> Utf8 Class Initialized
INFO - 2025-08-22 21:20:16 --> URI Class Initialized
INFO - 2025-08-22 21:20:16 --> Router Class Initialized
INFO - 2025-08-22 21:20:16 --> Output Class Initialized
INFO - 2025-08-22 21:20:16 --> Security Class Initialized
DEBUG - 2025-08-22 21:20:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:20:16 --> Input Class Initialized
INFO - 2025-08-22 21:20:16 --> Language Class Initialized
INFO - 2025-08-22 21:20:16 --> Loader Class Initialized
INFO - 2025-08-22 21:20:16 --> Helper loaded: url_helper
INFO - 2025-08-22 21:20:16 --> Database Driver Class Initialized
INFO - 2025-08-22 21:20:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:20:16 --> Controller Class Initialized
INFO - 2025-08-22 21:20:16 --> Model Class Initialized
INFO - 2025-08-22 21:20:16 --> Model Class Initialized
INFO - 2025-08-22 21:20:16 --> Model Class Initialized
INFO - 2025-08-22 21:20:16 --> Model Class Initialized
INFO - 2025-08-22 21:20:16 --> Model Class Initialized
INFO - 2025-08-22 21:20:16 --> Model Class Initialized
INFO - 2025-08-22 21:20:16 --> Model Class Initialized
INFO - 2025-08-22 21:20:16 --> Model Class Initialized
INFO - 2025-08-22 21:20:16 --> Model Class Initialized
INFO - 2025-08-22 21:20:16 --> Model Class Initialized
INFO - 2025-08-22 21:20:16 --> Model Class Initialized
INFO - 2025-08-22 21:20:16 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:20:22 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:20:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:20:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:20:22 --> Encryption Class Initialized
INFO - 2025-08-22 21:20:22 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:20:22 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:20:25 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:20:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:20:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:20:25 --> Encryption Class Initialized
INFO - 2025-08-22 21:20:25 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:20:25 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:20:25 --> Final output sent to browser
DEBUG - 2025-08-22 21:20:25 --> Total execution time: 9.3846
INFO - 2025-08-22 21:20:25 --> Config Class Initialized
INFO - 2025-08-22 21:20:25 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:20:25 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:20:25 --> Utf8 Class Initialized
INFO - 2025-08-22 21:20:25 --> URI Class Initialized
INFO - 2025-08-22 21:20:25 --> Router Class Initialized
INFO - 2025-08-22 21:20:25 --> Output Class Initialized
INFO - 2025-08-22 21:20:25 --> Security Class Initialized
DEBUG - 2025-08-22 21:20:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:20:25 --> Input Class Initialized
INFO - 2025-08-22 21:20:25 --> Language Class Initialized
INFO - 2025-08-22 21:20:25 --> Loader Class Initialized
INFO - 2025-08-22 21:20:25 --> Helper loaded: url_helper
INFO - 2025-08-22 21:20:25 --> Database Driver Class Initialized
INFO - 2025-08-22 21:20:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:20:25 --> Controller Class Initialized
DEBUG - 2025-08-22 21:20:25 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:20:25 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:20:25 --> Model Class Initialized
INFO - 2025-08-22 21:20:25 --> Model Class Initialized
INFO - 2025-08-22 21:20:25 --> Model Class Initialized
INFO - 2025-08-22 21:20:25 --> Model Class Initialized
INFO - 2025-08-22 21:20:25 --> Model Class Initialized
INFO - 2025-08-22 21:20:25 --> Model Class Initialized
INFO - 2025-08-22 21:20:25 --> Model Class Initialized
INFO - 2025-08-22 21:20:25 --> Model Class Initialized
INFO - 2025-08-22 21:20:25 --> Model Class Initialized
INFO - 2025-08-22 21:20:25 --> Model Class Initialized
INFO - 2025-08-22 21:20:25 --> Model Class Initialized
INFO - 2025-08-22 21:20:34 --> Final output sent to browser
DEBUG - 2025-08-22 21:20:34 --> Total execution time: 9.0277
INFO - 2025-08-22 21:23:25 --> Config Class Initialized
INFO - 2025-08-22 21:23:25 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:23:25 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:23:25 --> Utf8 Class Initialized
INFO - 2025-08-22 21:23:25 --> URI Class Initialized
INFO - 2025-08-22 21:23:25 --> Router Class Initialized
INFO - 2025-08-22 21:23:25 --> Output Class Initialized
INFO - 2025-08-22 21:23:25 --> Security Class Initialized
DEBUG - 2025-08-22 21:23:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:23:25 --> Input Class Initialized
INFO - 2025-08-22 21:23:25 --> Language Class Initialized
INFO - 2025-08-22 21:23:25 --> Loader Class Initialized
INFO - 2025-08-22 21:23:25 --> Helper loaded: url_helper
INFO - 2025-08-22 21:23:25 --> Database Driver Class Initialized
INFO - 2025-08-22 21:23:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:23:25 --> Controller Class Initialized
INFO - 2025-08-22 21:23:25 --> Model Class Initialized
INFO - 2025-08-22 21:23:25 --> Model Class Initialized
INFO - 2025-08-22 21:23:25 --> Model Class Initialized
INFO - 2025-08-22 21:23:25 --> Model Class Initialized
INFO - 2025-08-22 21:23:25 --> Model Class Initialized
INFO - 2025-08-22 21:23:25 --> Model Class Initialized
INFO - 2025-08-22 21:23:25 --> Model Class Initialized
INFO - 2025-08-22 21:23:25 --> Model Class Initialized
INFO - 2025-08-22 21:23:25 --> Model Class Initialized
INFO - 2025-08-22 21:23:25 --> Model Class Initialized
INFO - 2025-08-22 21:23:25 --> Model Class Initialized
INFO - 2025-08-22 21:23:25 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:23:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:23:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:23:25 --> Encryption Class Initialized
INFO - 2025-08-22 21:23:25 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:23:25 --> File loaded: /var/www/noble/application/views/admin/stat_member_v.php
INFO - 2025-08-22 21:23:25 --> Final output sent to browser
DEBUG - 2025-08-22 21:23:25 --> Total execution time: 0.0254
INFO - 2025-08-22 21:25:17 --> Config Class Initialized
INFO - 2025-08-22 21:25:17 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:25:17 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:25:17 --> Utf8 Class Initialized
INFO - 2025-08-22 21:25:17 --> URI Class Initialized
INFO - 2025-08-22 21:25:17 --> Router Class Initialized
INFO - 2025-08-22 21:25:17 --> Output Class Initialized
INFO - 2025-08-22 21:25:17 --> Security Class Initialized
DEBUG - 2025-08-22 21:25:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:25:17 --> Input Class Initialized
INFO - 2025-08-22 21:25:17 --> Language Class Initialized
INFO - 2025-08-22 21:25:17 --> Loader Class Initialized
INFO - 2025-08-22 21:25:17 --> Helper loaded: url_helper
INFO - 2025-08-22 21:25:17 --> Database Driver Class Initialized
INFO - 2025-08-22 21:25:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:25:17 --> Controller Class Initialized
INFO - 2025-08-22 21:25:17 --> Model Class Initialized
INFO - 2025-08-22 21:25:17 --> Model Class Initialized
INFO - 2025-08-22 21:25:17 --> Model Class Initialized
INFO - 2025-08-22 21:25:17 --> Model Class Initialized
INFO - 2025-08-22 21:25:17 --> Model Class Initialized
INFO - 2025-08-22 21:25:17 --> Model Class Initialized
INFO - 2025-08-22 21:25:17 --> Model Class Initialized
INFO - 2025-08-22 21:25:17 --> Model Class Initialized
INFO - 2025-08-22 21:25:17 --> Model Class Initialized
INFO - 2025-08-22 21:25:17 --> Model Class Initialized
INFO - 2025-08-22 21:25:17 --> Model Class Initialized
INFO - 2025-08-22 21:25:17 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:25:26 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:25:26 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:25:26 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:25:26 --> Encryption Class Initialized
INFO - 2025-08-22 21:25:26 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:25:26 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:25:26 --> Final output sent to browser
DEBUG - 2025-08-22 21:25:26 --> Total execution time: 8.9996
INFO - 2025-08-22 21:25:26 --> Config Class Initialized
INFO - 2025-08-22 21:25:26 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:25:26 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:25:26 --> Utf8 Class Initialized
INFO - 2025-08-22 21:25:26 --> URI Class Initialized
INFO - 2025-08-22 21:25:26 --> Router Class Initialized
INFO - 2025-08-22 21:25:26 --> Output Class Initialized
INFO - 2025-08-22 21:25:26 --> Security Class Initialized
DEBUG - 2025-08-22 21:25:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:25:26 --> Input Class Initialized
INFO - 2025-08-22 21:25:26 --> Language Class Initialized
INFO - 2025-08-22 21:25:26 --> Loader Class Initialized
INFO - 2025-08-22 21:25:26 --> Helper loaded: url_helper
INFO - 2025-08-22 21:25:26 --> Database Driver Class Initialized
INFO - 2025-08-22 21:25:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:25:26 --> Controller Class Initialized
DEBUG - 2025-08-22 21:25:26 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:25:26 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:25:26 --> Model Class Initialized
INFO - 2025-08-22 21:25:26 --> Model Class Initialized
INFO - 2025-08-22 21:25:26 --> Model Class Initialized
INFO - 2025-08-22 21:25:26 --> Model Class Initialized
INFO - 2025-08-22 21:25:26 --> Model Class Initialized
INFO - 2025-08-22 21:25:26 --> Model Class Initialized
INFO - 2025-08-22 21:25:26 --> Model Class Initialized
INFO - 2025-08-22 21:25:26 --> Model Class Initialized
INFO - 2025-08-22 21:25:26 --> Model Class Initialized
INFO - 2025-08-22 21:25:26 --> Model Class Initialized
INFO - 2025-08-22 21:25:26 --> Model Class Initialized
INFO - 2025-08-22 21:25:26 --> member list sql for board : 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
				, m.mem_joindate
				, m.mem_islive
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		 WHERE  ifnull(m.mem_outdate, 0) = 0  GROUP BY mem_no 
INFO - 2025-08-22 21:25:35 --> Final output sent to browser
DEBUG - 2025-08-22 21:25:35 --> Total execution time: 9.0922
INFO - 2025-08-22 21:27:22 --> Config Class Initialized
INFO - 2025-08-22 21:27:22 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:27:22 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:27:22 --> Utf8 Class Initialized
INFO - 2025-08-22 21:27:22 --> URI Class Initialized
INFO - 2025-08-22 21:27:22 --> Router Class Initialized
INFO - 2025-08-22 21:27:22 --> Output Class Initialized
INFO - 2025-08-22 21:27:22 --> Security Class Initialized
DEBUG - 2025-08-22 21:27:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:27:22 --> Input Class Initialized
INFO - 2025-08-22 21:27:22 --> Language Class Initialized
INFO - 2025-08-22 21:27:22 --> Loader Class Initialized
INFO - 2025-08-22 21:27:22 --> Helper loaded: url_helper
INFO - 2025-08-22 21:27:22 --> Database Driver Class Initialized
INFO - 2025-08-22 21:27:22 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:27:22 --> Controller Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 21:27:22 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:27:22 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:27:22 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:27:22 --> Encryption Class Initialized
INFO - 2025-08-22 21:27:22 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:27:22 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 21:27:22 --> Final output sent to browser
DEBUG - 2025-08-22 21:27:22 --> Total execution time: 0.1453
INFO - 2025-08-22 21:27:22 --> Config Class Initialized
INFO - 2025-08-22 21:27:22 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:27:22 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:27:22 --> Utf8 Class Initialized
INFO - 2025-08-22 21:27:22 --> URI Class Initialized
INFO - 2025-08-22 21:27:22 --> Router Class Initialized
INFO - 2025-08-22 21:27:22 --> Output Class Initialized
INFO - 2025-08-22 21:27:22 --> Security Class Initialized
DEBUG - 2025-08-22 21:27:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:27:22 --> Input Class Initialized
INFO - 2025-08-22 21:27:22 --> Language Class Initialized
INFO - 2025-08-22 21:27:22 --> Loader Class Initialized
INFO - 2025-08-22 21:27:22 --> Helper loaded: url_helper
INFO - 2025-08-22 21:27:22 --> Database Driver Class Initialized
INFO - 2025-08-22 21:27:22 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:27:22 --> Controller Class Initialized
DEBUG - 2025-08-22 21:27:22 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:27:22 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> Model Class Initialized
INFO - 2025-08-22 21:27:22 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:27:22 --> Final output sent to browser
DEBUG - 2025-08-22 21:27:22 --> Total execution time: 0.1123
INFO - 2025-08-22 21:27:40 --> Config Class Initialized
INFO - 2025-08-22 21:27:40 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:27:40 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:27:40 --> Utf8 Class Initialized
INFO - 2025-08-22 21:27:40 --> URI Class Initialized
INFO - 2025-08-22 21:27:40 --> Router Class Initialized
INFO - 2025-08-22 21:27:40 --> Output Class Initialized
INFO - 2025-08-22 21:27:40 --> Security Class Initialized
DEBUG - 2025-08-22 21:27:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:27:40 --> Input Class Initialized
INFO - 2025-08-22 21:27:40 --> Language Class Initialized
INFO - 2025-08-22 21:27:40 --> Loader Class Initialized
INFO - 2025-08-22 21:27:40 --> Helper loaded: url_helper
INFO - 2025-08-22 21:27:40 --> Database Driver Class Initialized
INFO - 2025-08-22 21:27:40 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:27:40 --> Controller Class Initialized
INFO - 2025-08-22 21:27:40 --> Model Class Initialized
INFO - 2025-08-22 21:27:40 --> Model Class Initialized
INFO - 2025-08-22 21:27:40 --> Model Class Initialized
INFO - 2025-08-22 21:27:40 --> Model Class Initialized
INFO - 2025-08-22 21:27:40 --> Model Class Initialized
INFO - 2025-08-22 21:27:40 --> Model Class Initialized
INFO - 2025-08-22 21:27:40 --> Model Class Initialized
INFO - 2025-08-22 21:27:40 --> Model Class Initialized
INFO - 2025-08-22 21:27:40 --> Model Class Initialized
INFO - 2025-08-22 21:27:40 --> Model Class Initialized
INFO - 2025-08-22 21:27:40 --> Model Class Initialized
INFO - 2025-08-22 21:27:40 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:27:44 --> Config Class Initialized
INFO - 2025-08-22 21:27:44 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:27:44 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:27:44 --> Utf8 Class Initialized
INFO - 2025-08-22 21:27:44 --> URI Class Initialized
INFO - 2025-08-22 21:27:44 --> Router Class Initialized
INFO - 2025-08-22 21:27:44 --> Output Class Initialized
INFO - 2025-08-22 21:27:44 --> Security Class Initialized
DEBUG - 2025-08-22 21:27:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:27:44 --> Input Class Initialized
INFO - 2025-08-22 21:27:44 --> Language Class Initialized
INFO - 2025-08-22 21:27:44 --> Loader Class Initialized
INFO - 2025-08-22 21:27:44 --> Helper loaded: url_helper
INFO - 2025-08-22 21:27:44 --> Database Driver Class Initialized
INFO - 2025-08-22 21:27:44 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:27:44 --> Controller Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:27:44 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:27:44 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:27:44 --> Encryption Class Initialized
INFO - 2025-08-22 21:27:44 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:27:44 --> File loaded: /var/www/noble/application/views/admin/board_list_v.php
INFO - 2025-08-22 21:27:44 --> Final output sent to browser
DEBUG - 2025-08-22 21:27:44 --> Total execution time: 0.0070
INFO - 2025-08-22 21:27:44 --> Config Class Initialized
INFO - 2025-08-22 21:27:44 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:27:44 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:27:44 --> Utf8 Class Initialized
INFO - 2025-08-22 21:27:44 --> URI Class Initialized
INFO - 2025-08-22 21:27:44 --> Router Class Initialized
INFO - 2025-08-22 21:27:44 --> Output Class Initialized
INFO - 2025-08-22 21:27:44 --> Security Class Initialized
DEBUG - 2025-08-22 21:27:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:27:44 --> Input Class Initialized
INFO - 2025-08-22 21:27:44 --> Language Class Initialized
INFO - 2025-08-22 21:27:44 --> Loader Class Initialized
INFO - 2025-08-22 21:27:44 --> Helper loaded: url_helper
INFO - 2025-08-22 21:27:44 --> Database Driver Class Initialized
INFO - 2025-08-22 21:27:44 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:27:44 --> Controller Class Initialized
DEBUG - 2025-08-22 21:27:44 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:27:44 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Model Class Initialized
INFO - 2025-08-22 21:27:44 --> Final output sent to browser
DEBUG - 2025-08-22 21:27:44 --> Total execution time: 0.0042
INFO - 2025-08-22 21:27:47 --> Config Class Initialized
INFO - 2025-08-22 21:27:47 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:27:47 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:27:47 --> Utf8 Class Initialized
INFO - 2025-08-22 21:27:47 --> URI Class Initialized
INFO - 2025-08-22 21:27:47 --> Router Class Initialized
INFO - 2025-08-22 21:27:47 --> Output Class Initialized
INFO - 2025-08-22 21:27:47 --> Security Class Initialized
DEBUG - 2025-08-22 21:27:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:27:47 --> Input Class Initialized
INFO - 2025-08-22 21:27:47 --> Language Class Initialized
INFO - 2025-08-22 21:27:47 --> Loader Class Initialized
INFO - 2025-08-22 21:27:47 --> Helper loaded: url_helper
INFO - 2025-08-22 21:27:47 --> Database Driver Class Initialized
INFO - 2025-08-22 21:27:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:27:47 --> Controller Class Initialized
INFO - 2025-08-22 21:27:47 --> Model Class Initialized
INFO - 2025-08-22 21:27:47 --> Model Class Initialized
INFO - 2025-08-22 21:27:47 --> Model Class Initialized
INFO - 2025-08-22 21:27:47 --> Model Class Initialized
INFO - 2025-08-22 21:27:47 --> Model Class Initialized
INFO - 2025-08-22 21:27:47 --> Model Class Initialized
INFO - 2025-08-22 21:27:47 --> Model Class Initialized
INFO - 2025-08-22 21:27:47 --> Model Class Initialized
INFO - 2025-08-22 21:27:47 --> Model Class Initialized
INFO - 2025-08-22 21:27:47 --> Model Class Initialized
INFO - 2025-08-22 21:27:47 --> Model Class Initialized
INFO - 2025-08-22 21:27:47 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:27:49 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:27:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:27:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:27:49 --> Encryption Class Initialized
INFO - 2025-08-22 21:27:49 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:27:49 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:27:56 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:27:56 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:27:56 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:27:56 --> Encryption Class Initialized
INFO - 2025-08-22 21:27:56 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:27:56 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:27:56 --> Final output sent to browser
DEBUG - 2025-08-22 21:27:56 --> Total execution time: 9.2000
INFO - 2025-08-22 21:27:56 --> Config Class Initialized
INFO - 2025-08-22 21:27:56 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:27:56 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:27:56 --> Utf8 Class Initialized
INFO - 2025-08-22 21:27:56 --> URI Class Initialized
INFO - 2025-08-22 21:27:56 --> Router Class Initialized
INFO - 2025-08-22 21:27:56 --> Output Class Initialized
INFO - 2025-08-22 21:27:56 --> Security Class Initialized
DEBUG - 2025-08-22 21:27:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:27:56 --> Input Class Initialized
INFO - 2025-08-22 21:27:56 --> Language Class Initialized
INFO - 2025-08-22 21:27:56 --> Loader Class Initialized
INFO - 2025-08-22 21:27:56 --> Helper loaded: url_helper
INFO - 2025-08-22 21:27:56 --> Database Driver Class Initialized
INFO - 2025-08-22 21:27:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:27:56 --> Controller Class Initialized
DEBUG - 2025-08-22 21:27:56 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:27:56 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:27:56 --> Model Class Initialized
INFO - 2025-08-22 21:27:56 --> Model Class Initialized
INFO - 2025-08-22 21:27:56 --> Model Class Initialized
INFO - 2025-08-22 21:27:56 --> Model Class Initialized
INFO - 2025-08-22 21:27:56 --> Model Class Initialized
INFO - 2025-08-22 21:27:56 --> Model Class Initialized
INFO - 2025-08-22 21:27:56 --> Model Class Initialized
INFO - 2025-08-22 21:27:56 --> Model Class Initialized
INFO - 2025-08-22 21:27:56 --> Model Class Initialized
INFO - 2025-08-22 21:27:56 --> Model Class Initialized
INFO - 2025-08-22 21:27:56 --> Model Class Initialized
INFO - 2025-08-22 21:27:56 --> member list sql for board : 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
				, m.mem_joindate
				, m.mem_islive
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		 WHERE  ifnull(m.mem_outdate, 0) = 0  GROUP BY mem_no 
INFO - 2025-08-22 21:28:05 --> Final output sent to browser
DEBUG - 2025-08-22 21:28:05 --> Total execution time: 9.0306
INFO - 2025-08-22 21:29:26 --> Config Class Initialized
INFO - 2025-08-22 21:29:26 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:29:26 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:29:26 --> Utf8 Class Initialized
INFO - 2025-08-22 21:29:26 --> URI Class Initialized
INFO - 2025-08-22 21:29:26 --> Router Class Initialized
INFO - 2025-08-22 21:29:26 --> Output Class Initialized
INFO - 2025-08-22 21:29:26 --> Security Class Initialized
DEBUG - 2025-08-22 21:29:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:29:26 --> Input Class Initialized
INFO - 2025-08-22 21:29:26 --> Language Class Initialized
INFO - 2025-08-22 21:29:26 --> Loader Class Initialized
INFO - 2025-08-22 21:29:26 --> Helper loaded: url_helper
INFO - 2025-08-22 21:29:26 --> Database Driver Class Initialized
INFO - 2025-08-22 21:29:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:29:26 --> Controller Class Initialized
DEBUG - 2025-08-22 21:29:26 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:29:26 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:29:26 --> Model Class Initialized
INFO - 2025-08-22 21:29:26 --> Model Class Initialized
INFO - 2025-08-22 21:29:26 --> Model Class Initialized
INFO - 2025-08-22 21:29:26 --> Model Class Initialized
INFO - 2025-08-22 21:29:26 --> Model Class Initialized
INFO - 2025-08-22 21:29:26 --> Model Class Initialized
INFO - 2025-08-22 21:29:26 --> Model Class Initialized
INFO - 2025-08-22 21:29:26 --> Model Class Initialized
INFO - 2025-08-22 21:29:26 --> Model Class Initialized
INFO - 2025-08-22 21:29:26 --> Model Class Initialized
INFO - 2025-08-22 21:29:26 --> Model Class Initialized
INFO - 2025-08-22 21:29:26 --> member list sql for board : 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
				, m.mem_joindate
				, m.mem_islive
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		 WHERE  ifnull(m.mem_outdate, 0) = 0  GROUP BY mem_no 
INFO - 2025-08-22 21:29:32 --> Config Class Initialized
INFO - 2025-08-22 21:29:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:29:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:29:32 --> Utf8 Class Initialized
INFO - 2025-08-22 21:29:32 --> URI Class Initialized
INFO - 2025-08-22 21:29:32 --> Router Class Initialized
INFO - 2025-08-22 21:29:32 --> Output Class Initialized
INFO - 2025-08-22 21:29:32 --> Security Class Initialized
DEBUG - 2025-08-22 21:29:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:29:32 --> Input Class Initialized
INFO - 2025-08-22 21:29:32 --> Language Class Initialized
INFO - 2025-08-22 21:29:32 --> Loader Class Initialized
INFO - 2025-08-22 21:29:32 --> Helper loaded: url_helper
INFO - 2025-08-22 21:29:32 --> Database Driver Class Initialized
INFO - 2025-08-22 21:29:32 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:29:32 --> Controller Class Initialized
INFO - 2025-08-22 21:29:32 --> Model Class Initialized
INFO - 2025-08-22 21:29:32 --> Model Class Initialized
INFO - 2025-08-22 21:29:32 --> Model Class Initialized
INFO - 2025-08-22 21:29:32 --> Model Class Initialized
INFO - 2025-08-22 21:29:32 --> Model Class Initialized
INFO - 2025-08-22 21:29:32 --> Model Class Initialized
INFO - 2025-08-22 21:29:32 --> Model Class Initialized
INFO - 2025-08-22 21:29:32 --> Model Class Initialized
INFO - 2025-08-22 21:29:32 --> Model Class Initialized
INFO - 2025-08-22 21:29:32 --> Model Class Initialized
INFO - 2025-08-22 21:29:32 --> Model Class Initialized
INFO - 2025-08-22 21:29:32 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:29:32 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:29:32 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:29:32 --> Encryption Class Initialized
INFO - 2025-08-22 21:29:32 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:29:32 --> File loaded: /var/www/noble/application/views/admin/member_upload_v.php
INFO - 2025-08-22 21:29:32 --> Final output sent to browser
DEBUG - 2025-08-22 21:29:32 --> Total execution time: 0.0319
INFO - 2025-08-22 21:29:35 --> Final output sent to browser
DEBUG - 2025-08-22 21:29:35 --> Total execution time: 9.0509
INFO - 2025-08-22 21:29:37 --> Config Class Initialized
INFO - 2025-08-22 21:29:37 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:29:37 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:29:37 --> Utf8 Class Initialized
INFO - 2025-08-22 21:29:37 --> URI Class Initialized
INFO - 2025-08-22 21:29:37 --> Router Class Initialized
INFO - 2025-08-22 21:29:37 --> Output Class Initialized
INFO - 2025-08-22 21:29:37 --> Security Class Initialized
DEBUG - 2025-08-22 21:29:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:29:37 --> Input Class Initialized
INFO - 2025-08-22 21:29:37 --> Language Class Initialized
INFO - 2025-08-22 21:29:37 --> Loader Class Initialized
INFO - 2025-08-22 21:29:37 --> Helper loaded: url_helper
INFO - 2025-08-22 21:29:37 --> Database Driver Class Initialized
INFO - 2025-08-22 21:29:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:29:37 --> Controller Class Initialized
INFO - 2025-08-22 21:29:37 --> Model Class Initialized
INFO - 2025-08-22 21:29:37 --> Model Class Initialized
INFO - 2025-08-22 21:29:37 --> Model Class Initialized
INFO - 2025-08-22 21:29:37 --> Model Class Initialized
INFO - 2025-08-22 21:29:37 --> Model Class Initialized
INFO - 2025-08-22 21:29:37 --> Model Class Initialized
INFO - 2025-08-22 21:29:37 --> Model Class Initialized
INFO - 2025-08-22 21:29:37 --> Model Class Initialized
INFO - 2025-08-22 21:29:37 --> Model Class Initialized
INFO - 2025-08-22 21:29:37 --> Model Class Initialized
INFO - 2025-08-22 21:29:37 --> Model Class Initialized
INFO - 2025-08-22 21:29:37 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:29:46 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:29:46 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:29:46 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:29:46 --> Encryption Class Initialized
INFO - 2025-08-22 21:29:46 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:29:46 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:29:46 --> Final output sent to browser
DEBUG - 2025-08-22 21:29:46 --> Total execution time: 9.0206
INFO - 2025-08-22 21:29:46 --> Config Class Initialized
INFO - 2025-08-22 21:29:46 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:29:46 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:29:46 --> Utf8 Class Initialized
INFO - 2025-08-22 21:29:46 --> URI Class Initialized
INFO - 2025-08-22 21:29:46 --> Router Class Initialized
INFO - 2025-08-22 21:29:46 --> Output Class Initialized
INFO - 2025-08-22 21:29:46 --> Security Class Initialized
DEBUG - 2025-08-22 21:29:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:29:46 --> Input Class Initialized
INFO - 2025-08-22 21:29:46 --> Language Class Initialized
INFO - 2025-08-22 21:29:46 --> Loader Class Initialized
INFO - 2025-08-22 21:29:46 --> Helper loaded: url_helper
INFO - 2025-08-22 21:29:46 --> Database Driver Class Initialized
INFO - 2025-08-22 21:29:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:29:46 --> Controller Class Initialized
DEBUG - 2025-08-22 21:29:46 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:29:46 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:29:46 --> Model Class Initialized
INFO - 2025-08-22 21:29:46 --> Model Class Initialized
INFO - 2025-08-22 21:29:46 --> Model Class Initialized
INFO - 2025-08-22 21:29:46 --> Model Class Initialized
INFO - 2025-08-22 21:29:46 --> Model Class Initialized
INFO - 2025-08-22 21:29:46 --> Model Class Initialized
INFO - 2025-08-22 21:29:46 --> Model Class Initialized
INFO - 2025-08-22 21:29:46 --> Model Class Initialized
INFO - 2025-08-22 21:29:46 --> Model Class Initialized
INFO - 2025-08-22 21:29:46 --> Model Class Initialized
INFO - 2025-08-22 21:29:46 --> Model Class Initialized
INFO - 2025-08-22 21:29:46 --> member list sql for board : 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
				, m.mem_joindate
				, m.mem_islive
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		 WHERE  ifnull(m.mem_outdate, 0) = 0  GROUP BY mem_no 
INFO - 2025-08-22 21:29:55 --> Final output sent to browser
DEBUG - 2025-08-22 21:29:55 --> Total execution time: 9.0534
INFO - 2025-08-22 21:31:36 --> Config Class Initialized
INFO - 2025-08-22 21:31:36 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:31:36 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:31:36 --> Utf8 Class Initialized
INFO - 2025-08-22 21:31:36 --> URI Class Initialized
INFO - 2025-08-22 21:31:36 --> Router Class Initialized
INFO - 2025-08-22 21:31:36 --> Output Class Initialized
INFO - 2025-08-22 21:31:36 --> Security Class Initialized
DEBUG - 2025-08-22 21:31:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:31:36 --> Input Class Initialized
INFO - 2025-08-22 21:31:36 --> Language Class Initialized
INFO - 2025-08-22 21:31:36 --> Loader Class Initialized
INFO - 2025-08-22 21:31:36 --> Helper loaded: url_helper
INFO - 2025-08-22 21:31:36 --> Database Driver Class Initialized
INFO - 2025-08-22 21:31:36 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:31:36 --> Controller Class Initialized
INFO - 2025-08-22 21:31:36 --> Model Class Initialized
INFO - 2025-08-22 21:31:36 --> Model Class Initialized
INFO - 2025-08-22 21:31:36 --> Model Class Initialized
INFO - 2025-08-22 21:31:36 --> Model Class Initialized
INFO - 2025-08-22 21:31:36 --> Model Class Initialized
INFO - 2025-08-22 21:31:36 --> Model Class Initialized
INFO - 2025-08-22 21:31:36 --> Model Class Initialized
INFO - 2025-08-22 21:31:36 --> Model Class Initialized
INFO - 2025-08-22 21:31:36 --> Model Class Initialized
INFO - 2025-08-22 21:31:36 --> Model Class Initialized
INFO - 2025-08-22 21:31:36 --> Model Class Initialized
INFO - 2025-08-22 21:31:36 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:31:45 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:31:45 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:31:45 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:31:45 --> Encryption Class Initialized
INFO - 2025-08-22 21:31:45 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:31:45 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:31:45 --> Final output sent to browser
DEBUG - 2025-08-22 21:31:45 --> Total execution time: 8.9667
INFO - 2025-08-22 21:31:45 --> Config Class Initialized
INFO - 2025-08-22 21:31:45 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:31:45 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:31:45 --> Utf8 Class Initialized
INFO - 2025-08-22 21:31:45 --> URI Class Initialized
INFO - 2025-08-22 21:31:45 --> Router Class Initialized
INFO - 2025-08-22 21:31:45 --> Output Class Initialized
INFO - 2025-08-22 21:31:45 --> Security Class Initialized
DEBUG - 2025-08-22 21:31:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:31:45 --> Input Class Initialized
INFO - 2025-08-22 21:31:45 --> Language Class Initialized
INFO - 2025-08-22 21:31:45 --> Loader Class Initialized
INFO - 2025-08-22 21:31:45 --> Helper loaded: url_helper
INFO - 2025-08-22 21:31:45 --> Database Driver Class Initialized
INFO - 2025-08-22 21:31:45 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:31:45 --> Controller Class Initialized
DEBUG - 2025-08-22 21:31:45 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:31:45 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:31:45 --> Model Class Initialized
INFO - 2025-08-22 21:31:45 --> Model Class Initialized
INFO - 2025-08-22 21:31:45 --> Model Class Initialized
INFO - 2025-08-22 21:31:45 --> Model Class Initialized
INFO - 2025-08-22 21:31:45 --> Model Class Initialized
INFO - 2025-08-22 21:31:45 --> Model Class Initialized
INFO - 2025-08-22 21:31:45 --> Model Class Initialized
INFO - 2025-08-22 21:31:45 --> Model Class Initialized
INFO - 2025-08-22 21:31:45 --> Model Class Initialized
INFO - 2025-08-22 21:31:45 --> Model Class Initialized
INFO - 2025-08-22 21:31:45 --> Model Class Initialized
INFO - 2025-08-22 21:31:45 --> member list sql for board : 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
				, m.mem_joindate
				, m.mem_islive
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		 WHERE  ifnull(m.mem_outdate, 0) = 0  GROUP BY mem_no 
INFO - 2025-08-22 21:31:54 --> Final output sent to browser
DEBUG - 2025-08-22 21:31:54 --> Total execution time: 9.0283
INFO - 2025-08-22 21:32:02 --> Config Class Initialized
INFO - 2025-08-22 21:32:02 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:02 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:02 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:02 --> URI Class Initialized
INFO - 2025-08-22 21:32:02 --> Router Class Initialized
INFO - 2025-08-22 21:32:02 --> Output Class Initialized
INFO - 2025-08-22 21:32:02 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:02 --> Input Class Initialized
INFO - 2025-08-22 21:32:02 --> Language Class Initialized
INFO - 2025-08-22 21:32:02 --> Loader Class Initialized
INFO - 2025-08-22 21:32:02 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:02 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:02 --> Controller Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 21:32:02 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:32:02 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:32:02 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:32:02 --> Encryption Class Initialized
INFO - 2025-08-22 21:32:02 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:32:02 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 21:32:02 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:02 --> Total execution time: 0.1416
INFO - 2025-08-22 21:32:02 --> Config Class Initialized
INFO - 2025-08-22 21:32:02 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:02 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:02 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:02 --> URI Class Initialized
INFO - 2025-08-22 21:32:02 --> Router Class Initialized
INFO - 2025-08-22 21:32:02 --> Output Class Initialized
INFO - 2025-08-22 21:32:02 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:02 --> Input Class Initialized
INFO - 2025-08-22 21:32:02 --> Language Class Initialized
INFO - 2025-08-22 21:32:02 --> Loader Class Initialized
INFO - 2025-08-22 21:32:02 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:02 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:02 --> Controller Class Initialized
DEBUG - 2025-08-22 21:32:02 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:32:02 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> Model Class Initialized
INFO - 2025-08-22 21:32:02 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:32:03 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:03 --> Total execution time: 0.1079
INFO - 2025-08-22 21:32:10 --> Config Class Initialized
INFO - 2025-08-22 21:32:10 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:10 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:10 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:10 --> URI Class Initialized
INFO - 2025-08-22 21:32:10 --> Router Class Initialized
INFO - 2025-08-22 21:32:10 --> Output Class Initialized
INFO - 2025-08-22 21:32:10 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:10 --> Input Class Initialized
INFO - 2025-08-22 21:32:10 --> Language Class Initialized
INFO - 2025-08-22 21:32:10 --> Loader Class Initialized
INFO - 2025-08-22 21:32:10 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:10 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:10 --> Controller Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:32:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:32:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:32:10 --> Encryption Class Initialized
INFO - 2025-08-22 21:32:10 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:32:10 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:10 --> Total execution time: 0.0499
INFO - 2025-08-22 21:32:10 --> Config Class Initialized
INFO - 2025-08-22 21:32:10 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:10 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:10 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:10 --> URI Class Initialized
INFO - 2025-08-22 21:32:10 --> Router Class Initialized
INFO - 2025-08-22 21:32:10 --> Output Class Initialized
INFO - 2025-08-22 21:32:10 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:10 --> Input Class Initialized
INFO - 2025-08-22 21:32:10 --> Language Class Initialized
INFO - 2025-08-22 21:32:10 --> Loader Class Initialized
INFO - 2025-08-22 21:32:10 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:10 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:10 --> Controller Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> Model Class Initialized
INFO - 2025-08-22 21:32:10 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 21:32:10 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:32:10 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:32:10 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:32:10 --> Encryption Class Initialized
INFO - 2025-08-22 21:32:10 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:32:10 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 21:32:10 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:10 --> Total execution time: 0.1411
INFO - 2025-08-22 21:32:11 --> Config Class Initialized
INFO - 2025-08-22 21:32:11 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:11 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:11 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:11 --> URI Class Initialized
INFO - 2025-08-22 21:32:11 --> Router Class Initialized
INFO - 2025-08-22 21:32:11 --> Output Class Initialized
INFO - 2025-08-22 21:32:11 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:11 --> Input Class Initialized
INFO - 2025-08-22 21:32:11 --> Language Class Initialized
INFO - 2025-08-22 21:32:11 --> Loader Class Initialized
INFO - 2025-08-22 21:32:11 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:11 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:11 --> Controller Class Initialized
DEBUG - 2025-08-22 21:32:11 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:32:11 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:32:11 --> Model Class Initialized
INFO - 2025-08-22 21:32:11 --> Model Class Initialized
INFO - 2025-08-22 21:32:11 --> Model Class Initialized
INFO - 2025-08-22 21:32:11 --> Model Class Initialized
INFO - 2025-08-22 21:32:11 --> Model Class Initialized
INFO - 2025-08-22 21:32:11 --> Model Class Initialized
INFO - 2025-08-22 21:32:11 --> Model Class Initialized
INFO - 2025-08-22 21:32:11 --> Model Class Initialized
INFO - 2025-08-22 21:32:11 --> Model Class Initialized
INFO - 2025-08-22 21:32:11 --> Model Class Initialized
INFO - 2025-08-22 21:32:11 --> Model Class Initialized
INFO - 2025-08-22 21:32:11 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:32:11 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:11 --> Total execution time: 0.1073
INFO - 2025-08-22 21:32:14 --> Config Class Initialized
INFO - 2025-08-22 21:32:14 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:14 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:14 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:14 --> URI Class Initialized
INFO - 2025-08-22 21:32:14 --> Router Class Initialized
INFO - 2025-08-22 21:32:14 --> Output Class Initialized
INFO - 2025-08-22 21:32:14 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:14 --> Input Class Initialized
INFO - 2025-08-22 21:32:14 --> Language Class Initialized
INFO - 2025-08-22 21:32:14 --> Loader Class Initialized
INFO - 2025-08-22 21:32:14 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:14 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:14 --> Controller Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:32:14 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:32:14 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:32:14 --> Encryption Class Initialized
INFO - 2025-08-22 21:32:14 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:32:14 --> File loaded: /var/www/noble/application/views/admin/board_list_v.php
INFO - 2025-08-22 21:32:14 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:14 --> Total execution time: 0.0043
INFO - 2025-08-22 21:32:14 --> Config Class Initialized
INFO - 2025-08-22 21:32:14 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:14 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:14 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:14 --> URI Class Initialized
INFO - 2025-08-22 21:32:14 --> Router Class Initialized
INFO - 2025-08-22 21:32:14 --> Output Class Initialized
INFO - 2025-08-22 21:32:14 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:14 --> Input Class Initialized
INFO - 2025-08-22 21:32:14 --> Language Class Initialized
INFO - 2025-08-22 21:32:14 --> Loader Class Initialized
INFO - 2025-08-22 21:32:14 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:14 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:14 --> Controller Class Initialized
DEBUG - 2025-08-22 21:32:14 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:32:14 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Model Class Initialized
INFO - 2025-08-22 21:32:14 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:14 --> Total execution time: 0.0034
INFO - 2025-08-22 21:32:18 --> Config Class Initialized
INFO - 2025-08-22 21:32:18 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:18 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:18 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:18 --> URI Class Initialized
INFO - 2025-08-22 21:32:18 --> Router Class Initialized
INFO - 2025-08-22 21:32:18 --> Output Class Initialized
INFO - 2025-08-22 21:32:18 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:18 --> Input Class Initialized
INFO - 2025-08-22 21:32:18 --> Language Class Initialized
INFO - 2025-08-22 21:32:18 --> Loader Class Initialized
INFO - 2025-08-22 21:32:18 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:18 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:18 --> Controller Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:32:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:32:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:32:18 --> Encryption Class Initialized
INFO - 2025-08-22 21:32:18 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:32:18 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:18 --> Total execution time: 0.0049
INFO - 2025-08-22 21:32:18 --> Config Class Initialized
INFO - 2025-08-22 21:32:18 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:18 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:18 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:18 --> URI Class Initialized
INFO - 2025-08-22 21:32:18 --> Router Class Initialized
INFO - 2025-08-22 21:32:18 --> Output Class Initialized
INFO - 2025-08-22 21:32:18 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:18 --> Input Class Initialized
INFO - 2025-08-22 21:32:18 --> Language Class Initialized
INFO - 2025-08-22 21:32:18 --> Loader Class Initialized
INFO - 2025-08-22 21:32:18 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:18 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:18 --> Controller Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Model Class Initialized
INFO - 2025-08-22 21:32:18 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:32:18 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:32:18 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:32:18 --> Encryption Class Initialized
INFO - 2025-08-22 21:32:18 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:32:18 --> File loaded: /var/www/noble/application/views/admin/board_list_v.php
INFO - 2025-08-22 21:32:18 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:18 --> Total execution time: 0.0038
INFO - 2025-08-22 21:32:19 --> Config Class Initialized
INFO - 2025-08-22 21:32:19 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:19 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:19 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:19 --> URI Class Initialized
INFO - 2025-08-22 21:32:19 --> Router Class Initialized
INFO - 2025-08-22 21:32:19 --> Output Class Initialized
INFO - 2025-08-22 21:32:19 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:19 --> Input Class Initialized
INFO - 2025-08-22 21:32:19 --> Language Class Initialized
INFO - 2025-08-22 21:32:19 --> Loader Class Initialized
INFO - 2025-08-22 21:32:19 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:19 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:19 --> Controller Class Initialized
DEBUG - 2025-08-22 21:32:19 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:32:19 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:32:19 --> Model Class Initialized
INFO - 2025-08-22 21:32:19 --> Model Class Initialized
INFO - 2025-08-22 21:32:19 --> Model Class Initialized
INFO - 2025-08-22 21:32:19 --> Model Class Initialized
INFO - 2025-08-22 21:32:19 --> Model Class Initialized
INFO - 2025-08-22 21:32:19 --> Model Class Initialized
INFO - 2025-08-22 21:32:19 --> Model Class Initialized
INFO - 2025-08-22 21:32:19 --> Model Class Initialized
INFO - 2025-08-22 21:32:19 --> Model Class Initialized
INFO - 2025-08-22 21:32:19 --> Model Class Initialized
INFO - 2025-08-22 21:32:19 --> Model Class Initialized
INFO - 2025-08-22 21:32:19 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:19 --> Total execution time: 0.0035
INFO - 2025-08-22 21:32:23 --> Config Class Initialized
INFO - 2025-08-22 21:32:23 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:23 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:23 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:23 --> URI Class Initialized
INFO - 2025-08-22 21:32:23 --> Router Class Initialized
INFO - 2025-08-22 21:32:23 --> Output Class Initialized
INFO - 2025-08-22 21:32:23 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:23 --> Input Class Initialized
INFO - 2025-08-22 21:32:23 --> Language Class Initialized
INFO - 2025-08-22 21:32:23 --> Loader Class Initialized
INFO - 2025-08-22 21:32:23 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:23 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:23 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:23 --> Controller Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 21:32:23 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:32:23 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:32:23 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:32:23 --> Encryption Class Initialized
INFO - 2025-08-22 21:32:23 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:32:23 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 21:32:23 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:23 --> Total execution time: 0.1414
INFO - 2025-08-22 21:32:23 --> Config Class Initialized
INFO - 2025-08-22 21:32:23 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:23 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:23 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:23 --> URI Class Initialized
INFO - 2025-08-22 21:32:23 --> Router Class Initialized
INFO - 2025-08-22 21:32:23 --> Output Class Initialized
INFO - 2025-08-22 21:32:23 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:23 --> Input Class Initialized
INFO - 2025-08-22 21:32:23 --> Language Class Initialized
INFO - 2025-08-22 21:32:23 --> Loader Class Initialized
INFO - 2025-08-22 21:32:23 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:23 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:23 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:23 --> Controller Class Initialized
DEBUG - 2025-08-22 21:32:23 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:32:23 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> Model Class Initialized
INFO - 2025-08-22 21:32:23 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:32:24 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:24 --> Total execution time: 0.1103
INFO - 2025-08-22 21:32:27 --> Config Class Initialized
INFO - 2025-08-22 21:32:27 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:27 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:27 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:27 --> URI Class Initialized
INFO - 2025-08-22 21:32:27 --> Router Class Initialized
INFO - 2025-08-22 21:32:27 --> Output Class Initialized
INFO - 2025-08-22 21:32:27 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:27 --> Input Class Initialized
INFO - 2025-08-22 21:32:27 --> Language Class Initialized
INFO - 2025-08-22 21:32:27 --> Loader Class Initialized
INFO - 2025-08-22 21:32:27 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:27 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:27 --> Controller Class Initialized
INFO - 2025-08-22 21:32:27 --> Model Class Initialized
INFO - 2025-08-22 21:32:27 --> Model Class Initialized
INFO - 2025-08-22 21:32:27 --> Model Class Initialized
INFO - 2025-08-22 21:32:27 --> Model Class Initialized
INFO - 2025-08-22 21:32:27 --> Model Class Initialized
INFO - 2025-08-22 21:32:27 --> Model Class Initialized
INFO - 2025-08-22 21:32:27 --> Model Class Initialized
INFO - 2025-08-22 21:32:27 --> Model Class Initialized
INFO - 2025-08-22 21:32:27 --> Model Class Initialized
INFO - 2025-08-22 21:32:27 --> Model Class Initialized
INFO - 2025-08-22 21:32:27 --> Model Class Initialized
INFO - 2025-08-22 21:32:27 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:32:27 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:32:27 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:32:27 --> Encryption Class Initialized
INFO - 2025-08-22 21:32:27 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:32:27 --> File loaded: /var/www/noble/application/views/admin/banner_list_v.php
INFO - 2025-08-22 21:32:27 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:27 --> Total execution time: 0.0049
INFO - 2025-08-22 21:32:28 --> Config Class Initialized
INFO - 2025-08-22 21:32:28 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:28 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:28 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:28 --> URI Class Initialized
INFO - 2025-08-22 21:32:28 --> Router Class Initialized
INFO - 2025-08-22 21:32:28 --> Output Class Initialized
INFO - 2025-08-22 21:32:28 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:28 --> Input Class Initialized
INFO - 2025-08-22 21:32:28 --> Language Class Initialized
INFO - 2025-08-22 21:32:28 --> Loader Class Initialized
INFO - 2025-08-22 21:32:28 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:28 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:28 --> Controller Class Initialized
INFO - 2025-08-22 21:32:28 --> Model Class Initialized
INFO - 2025-08-22 21:32:28 --> Model Class Initialized
INFO - 2025-08-22 21:32:28 --> Model Class Initialized
INFO - 2025-08-22 21:32:28 --> Model Class Initialized
INFO - 2025-08-22 21:32:28 --> Model Class Initialized
INFO - 2025-08-22 21:32:28 --> Model Class Initialized
INFO - 2025-08-22 21:32:28 --> Model Class Initialized
INFO - 2025-08-22 21:32:28 --> Model Class Initialized
INFO - 2025-08-22 21:32:28 --> Model Class Initialized
INFO - 2025-08-22 21:32:28 --> Model Class Initialized
INFO - 2025-08-22 21:32:28 --> Model Class Initialized
INFO - 2025-08-22 21:32:28 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:32:28 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:32:28 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:32:28 --> Encryption Class Initialized
INFO - 2025-08-22 21:32:28 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:32:28 --> File loaded: /var/www/noble/application/views/admin/board_list_v.php
INFO - 2025-08-22 21:32:28 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:28 --> Total execution time: 0.0038
INFO - 2025-08-22 21:32:29 --> Config Class Initialized
INFO - 2025-08-22 21:32:29 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:29 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:29 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:29 --> URI Class Initialized
INFO - 2025-08-22 21:32:29 --> Router Class Initialized
INFO - 2025-08-22 21:32:29 --> Output Class Initialized
INFO - 2025-08-22 21:32:29 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:29 --> Input Class Initialized
INFO - 2025-08-22 21:32:29 --> Language Class Initialized
INFO - 2025-08-22 21:32:29 --> Loader Class Initialized
INFO - 2025-08-22 21:32:29 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:29 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:29 --> Controller Class Initialized
DEBUG - 2025-08-22 21:32:29 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:32:29 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:32:29 --> Model Class Initialized
INFO - 2025-08-22 21:32:29 --> Model Class Initialized
INFO - 2025-08-22 21:32:29 --> Model Class Initialized
INFO - 2025-08-22 21:32:29 --> Model Class Initialized
INFO - 2025-08-22 21:32:29 --> Model Class Initialized
INFO - 2025-08-22 21:32:29 --> Model Class Initialized
INFO - 2025-08-22 21:32:29 --> Model Class Initialized
INFO - 2025-08-22 21:32:29 --> Model Class Initialized
INFO - 2025-08-22 21:32:29 --> Model Class Initialized
INFO - 2025-08-22 21:32:29 --> Model Class Initialized
INFO - 2025-08-22 21:32:29 --> Model Class Initialized
INFO - 2025-08-22 21:32:29 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:29 --> Total execution time: 0.0035
INFO - 2025-08-22 21:32:38 --> Config Class Initialized
INFO - 2025-08-22 21:32:38 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:38 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:38 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:38 --> URI Class Initialized
INFO - 2025-08-22 21:32:38 --> Router Class Initialized
INFO - 2025-08-22 21:32:38 --> Output Class Initialized
INFO - 2025-08-22 21:32:38 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:38 --> Input Class Initialized
INFO - 2025-08-22 21:32:38 --> Language Class Initialized
INFO - 2025-08-22 21:32:38 --> Loader Class Initialized
INFO - 2025-08-22 21:32:38 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:38 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:38 --> Controller Class Initialized
INFO - 2025-08-22 21:32:38 --> Model Class Initialized
INFO - 2025-08-22 21:32:38 --> Model Class Initialized
INFO - 2025-08-22 21:32:38 --> Model Class Initialized
INFO - 2025-08-22 21:32:38 --> Model Class Initialized
INFO - 2025-08-22 21:32:38 --> Model Class Initialized
INFO - 2025-08-22 21:32:38 --> Model Class Initialized
INFO - 2025-08-22 21:32:38 --> Model Class Initialized
INFO - 2025-08-22 21:32:38 --> Model Class Initialized
INFO - 2025-08-22 21:32:38 --> Model Class Initialized
INFO - 2025-08-22 21:32:38 --> Model Class Initialized
INFO - 2025-08-22 21:32:38 --> Model Class Initialized
INFO - 2025-08-22 21:32:38 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:32:47 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:32:47 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:32:47 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:32:47 --> Encryption Class Initialized
INFO - 2025-08-22 21:32:47 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:32:47 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:32:47 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:47 --> Total execution time: 8.9041
INFO - 2025-08-22 21:32:47 --> Config Class Initialized
INFO - 2025-08-22 21:32:47 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:32:47 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:32:47 --> Utf8 Class Initialized
INFO - 2025-08-22 21:32:47 --> URI Class Initialized
INFO - 2025-08-22 21:32:47 --> Router Class Initialized
INFO - 2025-08-22 21:32:47 --> Output Class Initialized
INFO - 2025-08-22 21:32:47 --> Security Class Initialized
DEBUG - 2025-08-22 21:32:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:32:47 --> Input Class Initialized
INFO - 2025-08-22 21:32:47 --> Language Class Initialized
INFO - 2025-08-22 21:32:47 --> Loader Class Initialized
INFO - 2025-08-22 21:32:47 --> Helper loaded: url_helper
INFO - 2025-08-22 21:32:47 --> Database Driver Class Initialized
INFO - 2025-08-22 21:32:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:32:47 --> Controller Class Initialized
DEBUG - 2025-08-22 21:32:47 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:32:47 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:32:47 --> Model Class Initialized
INFO - 2025-08-22 21:32:47 --> Model Class Initialized
INFO - 2025-08-22 21:32:47 --> Model Class Initialized
INFO - 2025-08-22 21:32:47 --> Model Class Initialized
INFO - 2025-08-22 21:32:47 --> Model Class Initialized
INFO - 2025-08-22 21:32:47 --> Model Class Initialized
INFO - 2025-08-22 21:32:47 --> Model Class Initialized
INFO - 2025-08-22 21:32:47 --> Model Class Initialized
INFO - 2025-08-22 21:32:47 --> Model Class Initialized
INFO - 2025-08-22 21:32:47 --> Model Class Initialized
INFO - 2025-08-22 21:32:47 --> Model Class Initialized
INFO - 2025-08-22 21:32:47 --> member list sql for board : 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
				, m.mem_joindate
				, m.mem_islive
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		 WHERE  ifnull(m.mem_outdate, 0) = 0  GROUP BY mem_no 
INFO - 2025-08-22 21:32:56 --> Final output sent to browser
DEBUG - 2025-08-22 21:32:56 --> Total execution time: 9.0224
INFO - 2025-08-22 21:33:16 --> Config Class Initialized
INFO - 2025-08-22 21:33:16 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:33:16 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:33:16 --> Utf8 Class Initialized
INFO - 2025-08-22 21:33:16 --> URI Class Initialized
INFO - 2025-08-22 21:33:16 --> Router Class Initialized
INFO - 2025-08-22 21:33:16 --> Output Class Initialized
INFO - 2025-08-22 21:33:16 --> Security Class Initialized
DEBUG - 2025-08-22 21:33:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:33:16 --> Input Class Initialized
INFO - 2025-08-22 21:33:16 --> Language Class Initialized
INFO - 2025-08-22 21:33:16 --> Loader Class Initialized
INFO - 2025-08-22 21:33:16 --> Helper loaded: url_helper
INFO - 2025-08-22 21:33:16 --> Database Driver Class Initialized
INFO - 2025-08-22 21:33:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:33:16 --> Controller Class Initialized
INFO - 2025-08-22 21:33:16 --> Model Class Initialized
INFO - 2025-08-22 21:33:16 --> Model Class Initialized
INFO - 2025-08-22 21:33:16 --> Model Class Initialized
INFO - 2025-08-22 21:33:16 --> Model Class Initialized
INFO - 2025-08-22 21:33:16 --> Model Class Initialized
INFO - 2025-08-22 21:33:16 --> Model Class Initialized
INFO - 2025-08-22 21:33:16 --> Model Class Initialized
INFO - 2025-08-22 21:33:16 --> Model Class Initialized
INFO - 2025-08-22 21:33:16 --> Model Class Initialized
INFO - 2025-08-22 21:33:16 --> Model Class Initialized
INFO - 2025-08-22 21:33:16 --> Model Class Initialized
INFO - 2025-08-22 21:33:16 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:33:25 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:33:25 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:33:25 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:33:25 --> Encryption Class Initialized
INFO - 2025-08-22 21:33:25 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:33:25 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:33:25 --> Final output sent to browser
DEBUG - 2025-08-22 21:33:25 --> Total execution time: 8.9078
INFO - 2025-08-22 21:33:25 --> Config Class Initialized
INFO - 2025-08-22 21:33:25 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:33:25 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:33:25 --> Utf8 Class Initialized
INFO - 2025-08-22 21:33:25 --> URI Class Initialized
INFO - 2025-08-22 21:33:25 --> Router Class Initialized
INFO - 2025-08-22 21:33:25 --> Output Class Initialized
INFO - 2025-08-22 21:33:25 --> Security Class Initialized
DEBUG - 2025-08-22 21:33:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:33:25 --> Input Class Initialized
INFO - 2025-08-22 21:33:25 --> Language Class Initialized
INFO - 2025-08-22 21:33:25 --> Loader Class Initialized
INFO - 2025-08-22 21:33:25 --> Helper loaded: url_helper
INFO - 2025-08-22 21:33:25 --> Database Driver Class Initialized
INFO - 2025-08-22 21:33:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:33:26 --> Controller Class Initialized
DEBUG - 2025-08-22 21:33:26 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:33:26 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:33:26 --> Model Class Initialized
INFO - 2025-08-22 21:33:26 --> Model Class Initialized
INFO - 2025-08-22 21:33:26 --> Model Class Initialized
INFO - 2025-08-22 21:33:26 --> Model Class Initialized
INFO - 2025-08-22 21:33:26 --> Model Class Initialized
INFO - 2025-08-22 21:33:26 --> Model Class Initialized
INFO - 2025-08-22 21:33:26 --> Model Class Initialized
INFO - 2025-08-22 21:33:26 --> Model Class Initialized
INFO - 2025-08-22 21:33:26 --> Model Class Initialized
INFO - 2025-08-22 21:33:26 --> Model Class Initialized
INFO - 2025-08-22 21:33:26 --> Model Class Initialized
INFO - 2025-08-22 21:33:26 --> member list sql for board : 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
				, m.mem_joindate
				, m.mem_islive
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		 WHERE  ifnull(m.mem_outdate, 0) = 0  GROUP BY mem_no 
INFO - 2025-08-22 21:33:35 --> Final output sent to browser
DEBUG - 2025-08-22 21:33:35 --> Total execution time: 9.0208
INFO - 2025-08-22 21:33:37 --> Config Class Initialized
INFO - 2025-08-22 21:33:37 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:33:37 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:33:37 --> Utf8 Class Initialized
INFO - 2025-08-22 21:33:37 --> URI Class Initialized
INFO - 2025-08-22 21:33:37 --> Router Class Initialized
INFO - 2025-08-22 21:33:37 --> Output Class Initialized
INFO - 2025-08-22 21:33:37 --> Security Class Initialized
DEBUG - 2025-08-22 21:33:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:33:37 --> Input Class Initialized
INFO - 2025-08-22 21:33:37 --> Language Class Initialized
INFO - 2025-08-22 21:33:37 --> Loader Class Initialized
INFO - 2025-08-22 21:33:37 --> Helper loaded: url_helper
INFO - 2025-08-22 21:33:37 --> Database Driver Class Initialized
INFO - 2025-08-22 21:33:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:33:37 --> Controller Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> song list sql: 
			SELECT
				s.song_no
				, s.song_no as song_no2, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		
			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY  song_no DESC 
			LIMIT 0, 20
			
INFO - 2025-08-22 21:33:37 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:33:37 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:33:37 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:33:37 --> Encryption Class Initialized
INFO - 2025-08-22 21:33:37 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:33:37 --> File loaded: /var/www/noble/application/views/admin/song_list_v.php
INFO - 2025-08-22 21:33:37 --> Final output sent to browser
DEBUG - 2025-08-22 21:33:37 --> Total execution time: 0.1409
INFO - 2025-08-22 21:33:37 --> Config Class Initialized
INFO - 2025-08-22 21:33:37 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:33:37 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:33:37 --> Utf8 Class Initialized
INFO - 2025-08-22 21:33:37 --> URI Class Initialized
INFO - 2025-08-22 21:33:37 --> Router Class Initialized
INFO - 2025-08-22 21:33:37 --> Output Class Initialized
INFO - 2025-08-22 21:33:37 --> Security Class Initialized
DEBUG - 2025-08-22 21:33:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:33:37 --> Input Class Initialized
INFO - 2025-08-22 21:33:37 --> Language Class Initialized
INFO - 2025-08-22 21:33:37 --> Loader Class Initialized
INFO - 2025-08-22 21:33:37 --> Helper loaded: url_helper
INFO - 2025-08-22 21:33:37 --> Database Driver Class Initialized
INFO - 2025-08-22 21:33:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:33:37 --> Controller Class Initialized
DEBUG - 2025-08-22 21:33:37 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:33:37 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> Model Class Initialized
INFO - 2025-08-22 21:33:37 --> song list for board: 
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

			FROM 
				SONG s
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		 GROUP BY song_no  ORDER BY song_no DESC
INFO - 2025-08-22 21:33:37 --> Final output sent to browser
DEBUG - 2025-08-22 21:33:37 --> Total execution time: 0.1094
INFO - 2025-08-22 21:33:40 --> Config Class Initialized
INFO - 2025-08-22 21:33:40 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:33:40 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:33:40 --> Utf8 Class Initialized
INFO - 2025-08-22 21:33:40 --> URI Class Initialized
INFO - 2025-08-22 21:33:40 --> Router Class Initialized
INFO - 2025-08-22 21:33:40 --> Output Class Initialized
INFO - 2025-08-22 21:33:40 --> Security Class Initialized
DEBUG - 2025-08-22 21:33:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:33:40 --> Input Class Initialized
INFO - 2025-08-22 21:33:40 --> Language Class Initialized
INFO - 2025-08-22 21:33:40 --> Loader Class Initialized
INFO - 2025-08-22 21:33:40 --> Helper loaded: url_helper
INFO - 2025-08-22 21:33:40 --> Database Driver Class Initialized
INFO - 2025-08-22 21:33:40 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:33:40 --> Controller Class Initialized
INFO - 2025-08-22 21:33:40 --> Model Class Initialized
INFO - 2025-08-22 21:33:40 --> Model Class Initialized
INFO - 2025-08-22 21:33:40 --> Model Class Initialized
INFO - 2025-08-22 21:33:40 --> Model Class Initialized
INFO - 2025-08-22 21:33:40 --> Model Class Initialized
INFO - 2025-08-22 21:33:40 --> Model Class Initialized
INFO - 2025-08-22 21:33:40 --> Model Class Initialized
INFO - 2025-08-22 21:33:40 --> Model Class Initialized
INFO - 2025-08-22 21:33:40 --> Model Class Initialized
INFO - 2025-08-22 21:33:40 --> Model Class Initialized
INFO - 2025-08-22 21:33:40 --> Model Class Initialized
INFO - 2025-08-22 21:33:40 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:33:40 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:33:40 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:33:40 --> Encryption Class Initialized
INFO - 2025-08-22 21:33:40 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:33:40 --> File loaded: /var/www/noble/application/views/admin/stat_member_v.php
INFO - 2025-08-22 21:33:40 --> Final output sent to browser
DEBUG - 2025-08-22 21:33:40 --> Total execution time: 0.0221
INFO - 2025-08-22 21:33:48 --> Config Class Initialized
INFO - 2025-08-22 21:33:48 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:33:48 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:33:48 --> Utf8 Class Initialized
INFO - 2025-08-22 21:33:48 --> URI Class Initialized
INFO - 2025-08-22 21:33:48 --> Router Class Initialized
INFO - 2025-08-22 21:33:48 --> Output Class Initialized
INFO - 2025-08-22 21:33:48 --> Security Class Initialized
DEBUG - 2025-08-22 21:33:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:33:48 --> Input Class Initialized
INFO - 2025-08-22 21:33:48 --> Language Class Initialized
INFO - 2025-08-22 21:33:48 --> Loader Class Initialized
INFO - 2025-08-22 21:33:48 --> Helper loaded: url_helper
INFO - 2025-08-22 21:33:48 --> Database Driver Class Initialized
INFO - 2025-08-22 21:33:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:33:48 --> Controller Class Initialized
INFO - 2025-08-22 21:33:48 --> Model Class Initialized
INFO - 2025-08-22 21:33:48 --> Model Class Initialized
INFO - 2025-08-22 21:33:48 --> Model Class Initialized
INFO - 2025-08-22 21:33:48 --> Model Class Initialized
INFO - 2025-08-22 21:33:48 --> Model Class Initialized
INFO - 2025-08-22 21:33:48 --> Model Class Initialized
INFO - 2025-08-22 21:33:48 --> Model Class Initialized
INFO - 2025-08-22 21:33:48 --> Model Class Initialized
INFO - 2025-08-22 21:33:48 --> Model Class Initialized
INFO - 2025-08-22 21:33:48 --> Model Class Initialized
INFO - 2025-08-22 21:33:48 --> Model Class Initialized
INFO - 2025-08-22 21:33:52 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:33:52 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:33:52 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:33:52 --> Encryption Class Initialized
INFO - 2025-08-22 21:33:52 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:33:52 --> File loaded: /var/www/noble/application/views/admin/purchase_list_v.php
INFO - 2025-08-22 21:33:52 --> Final output sent to browser
DEBUG - 2025-08-22 21:33:52 --> Total execution time: 3.5148
INFO - 2025-08-22 21:33:52 --> Config Class Initialized
INFO - 2025-08-22 21:33:52 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:33:52 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:33:52 --> Utf8 Class Initialized
INFO - 2025-08-22 21:33:52 --> URI Class Initialized
INFO - 2025-08-22 21:33:52 --> Router Class Initialized
INFO - 2025-08-22 21:33:52 --> Output Class Initialized
INFO - 2025-08-22 21:33:52 --> Security Class Initialized
DEBUG - 2025-08-22 21:33:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:33:52 --> Input Class Initialized
INFO - 2025-08-22 21:33:52 --> Language Class Initialized
INFO - 2025-08-22 21:33:52 --> Loader Class Initialized
INFO - 2025-08-22 21:33:52 --> Helper loaded: url_helper
INFO - 2025-08-22 21:33:52 --> Database Driver Class Initialized
INFO - 2025-08-22 21:33:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:33:52 --> Controller Class Initialized
DEBUG - 2025-08-22 21:33:52 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:33:52 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:33:52 --> Model Class Initialized
INFO - 2025-08-22 21:33:52 --> Model Class Initialized
INFO - 2025-08-22 21:33:52 --> Model Class Initialized
INFO - 2025-08-22 21:33:52 --> Model Class Initialized
INFO - 2025-08-22 21:33:52 --> Model Class Initialized
INFO - 2025-08-22 21:33:52 --> Model Class Initialized
INFO - 2025-08-22 21:33:52 --> Model Class Initialized
INFO - 2025-08-22 21:33:52 --> Model Class Initialized
INFO - 2025-08-22 21:33:52 --> Model Class Initialized
INFO - 2025-08-22 21:33:52 --> Model Class Initialized
INFO - 2025-08-22 21:33:52 --> Model Class Initialized
INFO - 2025-08-22 21:33:53 --> Final output sent to browser
DEBUG - 2025-08-22 21:33:53 --> Total execution time: 1.7031
INFO - 2025-08-22 21:36:22 --> Config Class Initialized
INFO - 2025-08-22 21:36:22 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:36:22 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:36:22 --> Utf8 Class Initialized
INFO - 2025-08-22 21:36:22 --> URI Class Initialized
DEBUG - 2025-08-22 21:36:22 --> No URI present. Default controller set.
INFO - 2025-08-22 21:36:22 --> Router Class Initialized
INFO - 2025-08-22 21:36:22 --> Output Class Initialized
INFO - 2025-08-22 21:36:22 --> Security Class Initialized
DEBUG - 2025-08-22 21:36:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:36:22 --> Input Class Initialized
INFO - 2025-08-22 21:36:22 --> Language Class Initialized
INFO - 2025-08-22 21:36:22 --> Loader Class Initialized
INFO - 2025-08-22 21:36:22 --> Helper loaded: url_helper
INFO - 2025-08-22 21:36:22 --> Database Driver Class Initialized
INFO - 2025-08-22 21:36:22 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:36:22 --> Controller Class Initialized
INFO - 2025-08-22 21:36:22 --> Final output sent to browser
DEBUG - 2025-08-22 21:36:22 --> Total execution time: 0.0029
INFO - 2025-08-22 21:36:22 --> Config Class Initialized
INFO - 2025-08-22 21:36:22 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:36:22 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:36:22 --> Utf8 Class Initialized
INFO - 2025-08-22 21:36:22 --> URI Class Initialized
INFO - 2025-08-22 21:36:22 --> Router Class Initialized
INFO - 2025-08-22 21:36:22 --> Output Class Initialized
INFO - 2025-08-22 21:36:22 --> Security Class Initialized
DEBUG - 2025-08-22 21:36:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:36:22 --> Input Class Initialized
INFO - 2025-08-22 21:36:22 --> Language Class Initialized
ERROR - 2025-08-22 21:36:22 --> 404 Page Not Found: Faviconico/index
INFO - 2025-08-22 21:36:30 --> Config Class Initialized
INFO - 2025-08-22 21:36:30 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:36:30 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:36:30 --> Utf8 Class Initialized
INFO - 2025-08-22 21:36:30 --> URI Class Initialized
INFO - 2025-08-22 21:36:30 --> Router Class Initialized
INFO - 2025-08-22 21:36:30 --> Output Class Initialized
INFO - 2025-08-22 21:36:30 --> Security Class Initialized
DEBUG - 2025-08-22 21:36:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:36:30 --> Input Class Initialized
INFO - 2025-08-22 21:36:30 --> Language Class Initialized
INFO - 2025-08-22 21:36:30 --> Loader Class Initialized
INFO - 2025-08-22 21:36:30 --> Helper loaded: url_helper
INFO - 2025-08-22 21:36:30 --> Database Driver Class Initialized
INFO - 2025-08-22 21:36:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:36:30 --> Controller Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:36:30 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:36:30 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:36:30 --> Encryption Class Initialized
INFO - 2025-08-22 21:36:30 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:36:30 --> Config Class Initialized
INFO - 2025-08-22 21:36:30 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:36:30 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:36:30 --> Utf8 Class Initialized
INFO - 2025-08-22 21:36:30 --> URI Class Initialized
INFO - 2025-08-22 21:36:30 --> Router Class Initialized
INFO - 2025-08-22 21:36:30 --> Output Class Initialized
INFO - 2025-08-22 21:36:30 --> Security Class Initialized
DEBUG - 2025-08-22 21:36:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:36:30 --> Input Class Initialized
INFO - 2025-08-22 21:36:30 --> Language Class Initialized
INFO - 2025-08-22 21:36:30 --> Loader Class Initialized
INFO - 2025-08-22 21:36:30 --> Helper loaded: url_helper
INFO - 2025-08-22 21:36:30 --> Database Driver Class Initialized
INFO - 2025-08-22 21:36:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:36:30 --> Controller Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> Model Class Initialized
INFO - 2025-08-22 21:36:30 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:36:33 --> Config Class Initialized
INFO - 2025-08-22 21:36:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:36:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:36:33 --> Utf8 Class Initialized
INFO - 2025-08-22 21:36:33 --> URI Class Initialized
INFO - 2025-08-22 21:36:33 --> Router Class Initialized
INFO - 2025-08-22 21:36:33 --> Output Class Initialized
INFO - 2025-08-22 21:36:33 --> Security Class Initialized
DEBUG - 2025-08-22 21:36:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:36:33 --> Input Class Initialized
INFO - 2025-08-22 21:36:33 --> Language Class Initialized
INFO - 2025-08-22 21:36:33 --> Loader Class Initialized
INFO - 2025-08-22 21:36:33 --> Helper loaded: url_helper
INFO - 2025-08-22 21:36:33 --> Database Driver Class Initialized
INFO - 2025-08-22 21:36:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:36:33 --> Controller Class Initialized
INFO - 2025-08-22 21:36:33 --> Model Class Initialized
INFO - 2025-08-22 21:36:33 --> Model Class Initialized
INFO - 2025-08-22 21:36:33 --> Model Class Initialized
INFO - 2025-08-22 21:36:33 --> Model Class Initialized
INFO - 2025-08-22 21:36:33 --> Model Class Initialized
INFO - 2025-08-22 21:36:33 --> Model Class Initialized
INFO - 2025-08-22 21:36:33 --> Model Class Initialized
INFO - 2025-08-22 21:36:33 --> Model Class Initialized
INFO - 2025-08-22 21:36:33 --> Model Class Initialized
INFO - 2025-08-22 21:36:33 --> Model Class Initialized
INFO - 2025-08-22 21:36:33 --> Model Class Initialized
INFO - 2025-08-22 21:36:33 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:36:39 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:36:39 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:36:39 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:36:39 --> Encryption Class Initialized
INFO - 2025-08-22 21:36:39 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:36:39 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:36:42 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:36:42 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:36:42 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:36:42 --> Encryption Class Initialized
INFO - 2025-08-22 21:36:42 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:36:42 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:36:42 --> Final output sent to browser
DEBUG - 2025-08-22 21:36:42 --> Total execution time: 9.0015
INFO - 2025-08-22 21:36:42 --> Config Class Initialized
INFO - 2025-08-22 21:36:42 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:36:42 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:36:42 --> Utf8 Class Initialized
INFO - 2025-08-22 21:36:42 --> URI Class Initialized
INFO - 2025-08-22 21:36:42 --> Router Class Initialized
INFO - 2025-08-22 21:36:42 --> Output Class Initialized
INFO - 2025-08-22 21:36:42 --> Security Class Initialized
DEBUG - 2025-08-22 21:36:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:36:42 --> Input Class Initialized
INFO - 2025-08-22 21:36:42 --> Language Class Initialized
INFO - 2025-08-22 21:36:42 --> Loader Class Initialized
INFO - 2025-08-22 21:36:42 --> Helper loaded: url_helper
INFO - 2025-08-22 21:36:42 --> Database Driver Class Initialized
INFO - 2025-08-22 21:36:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:36:42 --> Controller Class Initialized
DEBUG - 2025-08-22 21:36:42 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:36:42 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:36:42 --> Model Class Initialized
INFO - 2025-08-22 21:36:42 --> Model Class Initialized
INFO - 2025-08-22 21:36:42 --> Model Class Initialized
INFO - 2025-08-22 21:36:42 --> Model Class Initialized
INFO - 2025-08-22 21:36:42 --> Model Class Initialized
INFO - 2025-08-22 21:36:42 --> Model Class Initialized
INFO - 2025-08-22 21:36:42 --> Model Class Initialized
INFO - 2025-08-22 21:36:42 --> Model Class Initialized
INFO - 2025-08-22 21:36:42 --> Model Class Initialized
INFO - 2025-08-22 21:36:42 --> Model Class Initialized
INFO - 2025-08-22 21:36:42 --> Model Class Initialized
INFO - 2025-08-22 21:36:42 --> member list sql for board : 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
				, m.mem_joindate
				, m.mem_islive
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		 WHERE  ifnull(m.mem_outdate, 0) = 0  GROUP BY mem_no 
INFO - 2025-08-22 21:36:51 --> Final output sent to browser
DEBUG - 2025-08-22 21:36:51 --> Total execution time: 9.0072
INFO - 2025-08-22 21:36:54 --> Config Class Initialized
INFO - 2025-08-22 21:36:54 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:36:54 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:36:54 --> Utf8 Class Initialized
INFO - 2025-08-22 21:36:54 --> URI Class Initialized
INFO - 2025-08-22 21:36:54 --> Router Class Initialized
INFO - 2025-08-22 21:36:54 --> Output Class Initialized
INFO - 2025-08-22 21:36:54 --> Security Class Initialized
DEBUG - 2025-08-22 21:36:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:36:54 --> Input Class Initialized
INFO - 2025-08-22 21:36:54 --> Language Class Initialized
ERROR - 2025-08-22 21:36:54 --> 404 Page Not Found: Assets/labouright
INFO - 2025-08-22 21:36:55 --> Config Class Initialized
INFO - 2025-08-22 21:36:55 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:36:55 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:36:55 --> Utf8 Class Initialized
INFO - 2025-08-22 21:36:55 --> URI Class Initialized
INFO - 2025-08-22 21:36:55 --> Router Class Initialized
INFO - 2025-08-22 21:36:55 --> Output Class Initialized
INFO - 2025-08-22 21:36:55 --> Security Class Initialized
DEBUG - 2025-08-22 21:36:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:36:55 --> Input Class Initialized
INFO - 2025-08-22 21:36:55 --> Language Class Initialized
INFO - 2025-08-22 21:36:55 --> Loader Class Initialized
INFO - 2025-08-22 21:36:55 --> Helper loaded: url_helper
INFO - 2025-08-22 21:36:55 --> Database Driver Class Initialized
INFO - 2025-08-22 21:36:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:36:55 --> Controller Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Helper loaded: cookie_helper
INFO - 2025-08-22 21:36:55 --> Config Class Initialized
INFO - 2025-08-22 21:36:55 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:36:55 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:36:55 --> Utf8 Class Initialized
INFO - 2025-08-22 21:36:55 --> URI Class Initialized
INFO - 2025-08-22 21:36:55 --> Router Class Initialized
INFO - 2025-08-22 21:36:55 --> Output Class Initialized
INFO - 2025-08-22 21:36:55 --> Security Class Initialized
DEBUG - 2025-08-22 21:36:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:36:55 --> Input Class Initialized
INFO - 2025-08-22 21:36:55 --> Language Class Initialized
INFO - 2025-08-22 21:36:55 --> Loader Class Initialized
INFO - 2025-08-22 21:36:55 --> Helper loaded: url_helper
INFO - 2025-08-22 21:36:55 --> Database Driver Class Initialized
INFO - 2025-08-22 21:36:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:36:55 --> Controller Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Model Class Initialized
INFO - 2025-08-22 21:36:55 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:36:55 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:36:55 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:36:55 --> Encryption Class Initialized
INFO - 2025-08-22 21:36:55 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:36:55 --> File loaded: /var/www/noble/application/views/admin/login_v.php
INFO - 2025-08-22 21:36:55 --> Final output sent to browser
DEBUG - 2025-08-22 21:36:55 --> Total execution time: 0.0027
INFO - 2025-08-22 21:37:00 --> Config Class Initialized
INFO - 2025-08-22 21:37:00 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:37:00 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:37:00 --> Utf8 Class Initialized
INFO - 2025-08-22 21:37:00 --> URI Class Initialized
INFO - 2025-08-22 21:37:00 --> Router Class Initialized
INFO - 2025-08-22 21:37:00 --> Output Class Initialized
INFO - 2025-08-22 21:37:00 --> Security Class Initialized
DEBUG - 2025-08-22 21:37:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:37:00 --> Input Class Initialized
INFO - 2025-08-22 21:37:00 --> Language Class Initialized
INFO - 2025-08-22 21:37:00 --> Loader Class Initialized
INFO - 2025-08-22 21:37:00 --> Helper loaded: url_helper
INFO - 2025-08-22 21:37:00 --> Database Driver Class Initialized
INFO - 2025-08-22 21:37:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:37:00 --> Controller Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:37:00 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:37:00 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:37:00 --> Encryption Class Initialized
INFO - 2025-08-22 21:37:00 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:37:00 --> Final output sent to browser
DEBUG - 2025-08-22 21:37:00 --> Total execution time: 0.0048
INFO - 2025-08-22 21:37:00 --> Config Class Initialized
INFO - 2025-08-22 21:37:00 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:37:00 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:37:00 --> Utf8 Class Initialized
INFO - 2025-08-22 21:37:00 --> URI Class Initialized
INFO - 2025-08-22 21:37:00 --> Router Class Initialized
INFO - 2025-08-22 21:37:00 --> Output Class Initialized
INFO - 2025-08-22 21:37:00 --> Security Class Initialized
DEBUG - 2025-08-22 21:37:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:37:00 --> Input Class Initialized
INFO - 2025-08-22 21:37:00 --> Language Class Initialized
INFO - 2025-08-22 21:37:00 --> Loader Class Initialized
INFO - 2025-08-22 21:37:00 --> Helper loaded: url_helper
INFO - 2025-08-22 21:37:00 --> Database Driver Class Initialized
INFO - 2025-08-22 21:37:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:37:00 --> Controller Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:37:00 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:37:00 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:37:00 --> Encryption Class Initialized
INFO - 2025-08-22 21:37:00 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:37:00 --> Config Class Initialized
INFO - 2025-08-22 21:37:00 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:37:00 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:37:00 --> Utf8 Class Initialized
INFO - 2025-08-22 21:37:00 --> URI Class Initialized
INFO - 2025-08-22 21:37:00 --> Router Class Initialized
INFO - 2025-08-22 21:37:00 --> Output Class Initialized
INFO - 2025-08-22 21:37:00 --> Security Class Initialized
DEBUG - 2025-08-22 21:37:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:37:00 --> Input Class Initialized
INFO - 2025-08-22 21:37:00 --> Language Class Initialized
INFO - 2025-08-22 21:37:00 --> Loader Class Initialized
INFO - 2025-08-22 21:37:00 --> Helper loaded: url_helper
INFO - 2025-08-22 21:37:00 --> Database Driver Class Initialized
INFO - 2025-08-22 21:37:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:37:00 --> Controller Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> Model Class Initialized
INFO - 2025-08-22 21:37:00 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:37:03 --> Config Class Initialized
INFO - 2025-08-22 21:37:03 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:37:03 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:37:03 --> Utf8 Class Initialized
INFO - 2025-08-22 21:37:03 --> URI Class Initialized
INFO - 2025-08-22 21:37:03 --> Router Class Initialized
INFO - 2025-08-22 21:37:03 --> Output Class Initialized
INFO - 2025-08-22 21:37:03 --> Security Class Initialized
DEBUG - 2025-08-22 21:37:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:37:03 --> Input Class Initialized
INFO - 2025-08-22 21:37:03 --> Language Class Initialized
INFO - 2025-08-22 21:37:03 --> Loader Class Initialized
INFO - 2025-08-22 21:37:03 --> Helper loaded: url_helper
INFO - 2025-08-22 21:37:03 --> Database Driver Class Initialized
INFO - 2025-08-22 21:37:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:37:03 --> Controller Class Initialized
INFO - 2025-08-22 21:37:03 --> Model Class Initialized
INFO - 2025-08-22 21:37:03 --> Model Class Initialized
INFO - 2025-08-22 21:37:03 --> Model Class Initialized
INFO - 2025-08-22 21:37:03 --> Model Class Initialized
INFO - 2025-08-22 21:37:03 --> Model Class Initialized
INFO - 2025-08-22 21:37:03 --> Model Class Initialized
INFO - 2025-08-22 21:37:03 --> Model Class Initialized
INFO - 2025-08-22 21:37:03 --> Model Class Initialized
INFO - 2025-08-22 21:37:03 --> Model Class Initialized
INFO - 2025-08-22 21:37:03 --> Model Class Initialized
INFO - 2025-08-22 21:37:03 --> Model Class Initialized
INFO - 2025-08-22 21:37:03 --> member list sql: 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		
			GROUP BY mem_no
			ORDER BY
				 m.mem_no DESC 
		
			LIMIT 0, 10
			
INFO - 2025-08-22 21:37:09 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:37:09 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:37:09 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:37:09 --> Encryption Class Initialized
INFO - 2025-08-22 21:37:09 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:37:09 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:37:12 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:37:12 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:37:12 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:37:12 --> Encryption Class Initialized
INFO - 2025-08-22 21:37:12 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:37:12 --> File loaded: /var/www/noble/application/views/admin/member_list_v.php
INFO - 2025-08-22 21:37:12 --> Final output sent to browser
DEBUG - 2025-08-22 21:37:12 --> Total execution time: 9.0140
INFO - 2025-08-22 21:37:13 --> Config Class Initialized
INFO - 2025-08-22 21:37:13 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:37:13 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:37:13 --> Utf8 Class Initialized
INFO - 2025-08-22 21:37:13 --> URI Class Initialized
INFO - 2025-08-22 21:37:13 --> Router Class Initialized
INFO - 2025-08-22 21:37:13 --> Output Class Initialized
INFO - 2025-08-22 21:37:13 --> Security Class Initialized
DEBUG - 2025-08-22 21:37:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:37:13 --> Input Class Initialized
INFO - 2025-08-22 21:37:13 --> Language Class Initialized
INFO - 2025-08-22 21:37:13 --> Loader Class Initialized
INFO - 2025-08-22 21:37:13 --> Helper loaded: url_helper
INFO - 2025-08-22 21:37:13 --> Database Driver Class Initialized
INFO - 2025-08-22 21:37:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:37:13 --> Controller Class Initialized
DEBUG - 2025-08-22 21:37:13 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:37:13 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:37:13 --> Model Class Initialized
INFO - 2025-08-22 21:37:13 --> Model Class Initialized
INFO - 2025-08-22 21:37:13 --> Model Class Initialized
INFO - 2025-08-22 21:37:13 --> Model Class Initialized
INFO - 2025-08-22 21:37:13 --> Model Class Initialized
INFO - 2025-08-22 21:37:13 --> Model Class Initialized
INFO - 2025-08-22 21:37:13 --> Model Class Initialized
INFO - 2025-08-22 21:37:13 --> Model Class Initialized
INFO - 2025-08-22 21:37:13 --> Model Class Initialized
INFO - 2025-08-22 21:37:13 --> Model Class Initialized
INFO - 2025-08-22 21:37:13 --> Model Class Initialized
INFO - 2025-08-22 21:37:13 --> member list sql for board : 
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
				, m.mem_joindate
				, m.mem_islive
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		 WHERE  ifnull(m.mem_outdate, 0) = 0  GROUP BY mem_no 
INFO - 2025-08-22 21:37:22 --> Final output sent to browser
DEBUG - 2025-08-22 21:37:22 --> Total execution time: 9.0097
INFO - 2025-08-22 21:37:45 --> Config Class Initialized
INFO - 2025-08-22 21:37:45 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:37:45 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:37:45 --> Utf8 Class Initialized
INFO - 2025-08-22 21:37:45 --> URI Class Initialized
INFO - 2025-08-22 21:37:45 --> Router Class Initialized
INFO - 2025-08-22 21:37:45 --> Output Class Initialized
INFO - 2025-08-22 21:37:45 --> Security Class Initialized
DEBUG - 2025-08-22 21:37:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:37:45 --> Input Class Initialized
INFO - 2025-08-22 21:37:45 --> Language Class Initialized
INFO - 2025-08-22 21:37:45 --> Loader Class Initialized
INFO - 2025-08-22 21:37:45 --> Helper loaded: url_helper
INFO - 2025-08-22 21:37:45 --> Database Driver Class Initialized
INFO - 2025-08-22 21:37:45 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:37:45 --> Controller Class Initialized
INFO - 2025-08-22 21:37:45 --> Model Class Initialized
INFO - 2025-08-22 21:37:45 --> Model Class Initialized
INFO - 2025-08-22 21:37:45 --> Model Class Initialized
INFO - 2025-08-22 21:37:45 --> Model Class Initialized
INFO - 2025-08-22 21:37:45 --> Model Class Initialized
INFO - 2025-08-22 21:37:45 --> Model Class Initialized
INFO - 2025-08-22 21:37:45 --> Model Class Initialized
INFO - 2025-08-22 21:37:45 --> Model Class Initialized
INFO - 2025-08-22 21:37:45 --> Model Class Initialized
INFO - 2025-08-22 21:37:45 --> Model Class Initialized
INFO - 2025-08-22 21:37:45 --> Model Class Initialized
INFO - 2025-08-22 21:37:49 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:37:49 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:37:49 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:37:49 --> Encryption Class Initialized
INFO - 2025-08-22 21:37:49 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:37:49 --> File loaded: /var/www/noble/application/views/admin/purchase_list_v.php
INFO - 2025-08-22 21:37:49 --> Final output sent to browser
DEBUG - 2025-08-22 21:37:49 --> Total execution time: 3.5080
INFO - 2025-08-22 21:37:49 --> Config Class Initialized
INFO - 2025-08-22 21:37:49 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:37:49 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:37:49 --> Utf8 Class Initialized
INFO - 2025-08-22 21:37:49 --> URI Class Initialized
INFO - 2025-08-22 21:37:49 --> Router Class Initialized
INFO - 2025-08-22 21:37:49 --> Output Class Initialized
INFO - 2025-08-22 21:37:49 --> Security Class Initialized
DEBUG - 2025-08-22 21:37:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:37:49 --> Input Class Initialized
INFO - 2025-08-22 21:37:49 --> Language Class Initialized
INFO - 2025-08-22 21:37:49 --> Loader Class Initialized
INFO - 2025-08-22 21:37:49 --> Helper loaded: url_helper
INFO - 2025-08-22 21:37:49 --> Database Driver Class Initialized
INFO - 2025-08-22 21:37:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:37:49 --> Controller Class Initialized
DEBUG - 2025-08-22 21:37:49 --> Config file loaded: /var/www/noble/application/config/rest.php
INFO - 2025-08-22 21:37:49 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2025-08-22 21:37:49 --> Model Class Initialized
INFO - 2025-08-22 21:37:49 --> Model Class Initialized
INFO - 2025-08-22 21:37:49 --> Model Class Initialized
INFO - 2025-08-22 21:37:49 --> Model Class Initialized
INFO - 2025-08-22 21:37:49 --> Model Class Initialized
INFO - 2025-08-22 21:37:49 --> Model Class Initialized
INFO - 2025-08-22 21:37:49 --> Model Class Initialized
INFO - 2025-08-22 21:37:49 --> Model Class Initialized
INFO - 2025-08-22 21:37:49 --> Model Class Initialized
INFO - 2025-08-22 21:37:49 --> Model Class Initialized
INFO - 2025-08-22 21:37:49 --> Model Class Initialized
INFO - 2025-08-22 21:37:50 --> Final output sent to browser
DEBUG - 2025-08-22 21:37:50 --> Total execution time: 1.7004
INFO - 2025-08-22 21:38:06 --> Config Class Initialized
INFO - 2025-08-22 21:38:06 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:38:06 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:38:06 --> Utf8 Class Initialized
INFO - 2025-08-22 21:38:06 --> URI Class Initialized
DEBUG - 2025-08-22 21:38:06 --> No URI present. Default controller set.
INFO - 2025-08-22 21:38:06 --> Router Class Initialized
INFO - 2025-08-22 21:38:06 --> Output Class Initialized
INFO - 2025-08-22 21:38:06 --> Security Class Initialized
DEBUG - 2025-08-22 21:38:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:38:06 --> Input Class Initialized
INFO - 2025-08-22 21:38:06 --> Language Class Initialized
INFO - 2025-08-22 21:38:06 --> Loader Class Initialized
INFO - 2025-08-22 21:38:06 --> Helper loaded: url_helper
INFO - 2025-08-22 21:38:06 --> Database Driver Class Initialized
INFO - 2025-08-22 21:38:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:38:06 --> Controller Class Initialized
INFO - 2025-08-22 21:38:06 --> Final output sent to browser
DEBUG - 2025-08-22 21:38:06 --> Total execution time: 0.0027
INFO - 2025-08-22 21:38:12 --> Config Class Initialized
INFO - 2025-08-22 21:38:12 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:38:12 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:38:12 --> Utf8 Class Initialized
INFO - 2025-08-22 21:38:12 --> URI Class Initialized
INFO - 2025-08-22 21:38:12 --> Router Class Initialized
INFO - 2025-08-22 21:38:12 --> Output Class Initialized
INFO - 2025-08-22 21:38:12 --> Security Class Initialized
DEBUG - 2025-08-22 21:38:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:38:12 --> Input Class Initialized
INFO - 2025-08-22 21:38:12 --> Language Class Initialized
ERROR - 2025-08-22 21:38:12 --> 404 Page Not Found: Env/index
INFO - 2025-08-22 21:38:49 --> Config Class Initialized
INFO - 2025-08-22 21:38:49 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:38:49 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:38:49 --> Utf8 Class Initialized
INFO - 2025-08-22 21:38:49 --> URI Class Initialized
INFO - 2025-08-22 21:38:49 --> Router Class Initialized
INFO - 2025-08-22 21:38:49 --> Output Class Initialized
INFO - 2025-08-22 21:38:49 --> Security Class Initialized
DEBUG - 2025-08-22 21:38:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:38:49 --> Input Class Initialized
INFO - 2025-08-22 21:38:49 --> Language Class Initialized
ERROR - 2025-08-22 21:38:49 --> 404 Page Not Found: Assets/labouright
INFO - 2025-08-22 21:38:50 --> Config Class Initialized
INFO - 2025-08-22 21:38:50 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:38:50 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:38:50 --> Utf8 Class Initialized
INFO - 2025-08-22 21:38:50 --> URI Class Initialized
INFO - 2025-08-22 21:38:50 --> Router Class Initialized
INFO - 2025-08-22 21:38:50 --> Output Class Initialized
INFO - 2025-08-22 21:38:50 --> Security Class Initialized
DEBUG - 2025-08-22 21:38:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:38:50 --> Input Class Initialized
INFO - 2025-08-22 21:38:50 --> Language Class Initialized
INFO - 2025-08-22 21:38:50 --> Loader Class Initialized
INFO - 2025-08-22 21:38:50 --> Helper loaded: url_helper
INFO - 2025-08-22 21:38:50 --> Database Driver Class Initialized
INFO - 2025-08-22 21:38:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:38:50 --> Controller Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Helper loaded: cookie_helper
INFO - 2025-08-22 21:38:50 --> Config Class Initialized
INFO - 2025-08-22 21:38:50 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:38:50 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:38:50 --> Utf8 Class Initialized
INFO - 2025-08-22 21:38:50 --> URI Class Initialized
INFO - 2025-08-22 21:38:50 --> Router Class Initialized
INFO - 2025-08-22 21:38:50 --> Output Class Initialized
INFO - 2025-08-22 21:38:50 --> Security Class Initialized
DEBUG - 2025-08-22 21:38:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:38:50 --> Input Class Initialized
INFO - 2025-08-22 21:38:50 --> Language Class Initialized
INFO - 2025-08-22 21:38:50 --> Loader Class Initialized
INFO - 2025-08-22 21:38:50 --> Helper loaded: url_helper
INFO - 2025-08-22 21:38:50 --> Database Driver Class Initialized
INFO - 2025-08-22 21:38:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:38:50 --> Controller Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Model Class Initialized
INFO - 2025-08-22 21:38:50 --> Helper loaded: cookie_helper
DEBUG - 2025-08-22 21:38:50 --> Encryption: Auto-configured driver 'openssl'.
INFO - 2025-08-22 21:38:50 --> Encryption: OpenSSL initialized with method AES-128-CBC.
INFO - 2025-08-22 21:38:50 --> Encryption Class Initialized
INFO - 2025-08-22 21:38:50 --> Encryption: OpenSSL initialized with method AES-256-CTR.
INFO - 2025-08-22 21:38:50 --> File loaded: /var/www/noble/application/views/admin/login_v.php
INFO - 2025-08-22 21:38:50 --> Final output sent to browser
DEBUG - 2025-08-22 21:38:50 --> Total execution time: 0.0026
INFO - 2025-08-22 21:56:31 --> Config Class Initialized
INFO - 2025-08-22 21:56:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 21:56:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 21:56:31 --> Utf8 Class Initialized
INFO - 2025-08-22 21:56:31 --> URI Class Initialized
DEBUG - 2025-08-22 21:56:31 --> No URI present. Default controller set.
INFO - 2025-08-22 21:56:31 --> Router Class Initialized
INFO - 2025-08-22 21:56:31 --> Output Class Initialized
INFO - 2025-08-22 21:56:31 --> Security Class Initialized
DEBUG - 2025-08-22 21:56:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 21:56:31 --> Input Class Initialized
INFO - 2025-08-22 21:56:31 --> Language Class Initialized
INFO - 2025-08-22 21:56:31 --> Loader Class Initialized
INFO - 2025-08-22 21:56:31 --> Helper loaded: url_helper
INFO - 2025-08-22 21:56:31 --> Database Driver Class Initialized
INFO - 2025-08-22 21:56:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 21:56:31 --> Controller Class Initialized
INFO - 2025-08-22 21:56:31 --> Final output sent to browser
DEBUG - 2025-08-22 21:56:31 --> Total execution time: 0.0030
INFO - 2025-08-22 22:36:51 --> Config Class Initialized
INFO - 2025-08-22 22:36:51 --> Hooks Class Initialized
DEBUG - 2025-08-22 22:36:51 --> UTF-8 Support Enabled
INFO - 2025-08-22 22:36:51 --> Utf8 Class Initialized
INFO - 2025-08-22 22:36:51 --> URI Class Initialized
DEBUG - 2025-08-22 22:36:51 --> No URI present. Default controller set.
INFO - 2025-08-22 22:36:51 --> Router Class Initialized
INFO - 2025-08-22 22:36:51 --> Output Class Initialized
INFO - 2025-08-22 22:36:51 --> Security Class Initialized
DEBUG - 2025-08-22 22:36:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 22:36:51 --> Input Class Initialized
INFO - 2025-08-22 22:36:51 --> Language Class Initialized
INFO - 2025-08-22 22:36:51 --> Loader Class Initialized
INFO - 2025-08-22 22:36:51 --> Helper loaded: url_helper
INFO - 2025-08-22 22:36:51 --> Database Driver Class Initialized
INFO - 2025-08-22 22:36:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 22:36:51 --> Controller Class Initialized
INFO - 2025-08-22 22:36:51 --> Final output sent to browser
DEBUG - 2025-08-22 22:36:51 --> Total execution time: 0.0030
INFO - 2025-08-22 22:43:41 --> Config Class Initialized
INFO - 2025-08-22 22:43:41 --> Hooks Class Initialized
DEBUG - 2025-08-22 22:43:41 --> UTF-8 Support Enabled
INFO - 2025-08-22 22:43:41 --> Utf8 Class Initialized
INFO - 2025-08-22 22:43:41 --> URI Class Initialized
INFO - 2025-08-22 22:43:41 --> Router Class Initialized
INFO - 2025-08-22 22:43:41 --> Output Class Initialized
INFO - 2025-08-22 22:43:41 --> Security Class Initialized
DEBUG - 2025-08-22 22:43:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 22:43:41 --> Input Class Initialized
INFO - 2025-08-22 22:43:41 --> Language Class Initialized
ERROR - 2025-08-22 22:43:41 --> 404 Page Not Found: Env/index
INFO - 2025-08-22 22:43:42 --> Config Class Initialized
INFO - 2025-08-22 22:43:42 --> Hooks Class Initialized
DEBUG - 2025-08-22 22:43:42 --> UTF-8 Support Enabled
INFO - 2025-08-22 22:43:42 --> Utf8 Class Initialized
INFO - 2025-08-22 22:43:42 --> URI Class Initialized
DEBUG - 2025-08-22 22:43:42 --> No URI present. Default controller set.
INFO - 2025-08-22 22:43:42 --> Router Class Initialized
INFO - 2025-08-22 22:43:42 --> Output Class Initialized
INFO - 2025-08-22 22:43:42 --> Security Class Initialized
DEBUG - 2025-08-22 22:43:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 22:43:42 --> Input Class Initialized
INFO - 2025-08-22 22:43:42 --> Language Class Initialized
INFO - 2025-08-22 22:43:42 --> Loader Class Initialized
INFO - 2025-08-22 22:43:42 --> Helper loaded: url_helper
INFO - 2025-08-22 22:43:42 --> Database Driver Class Initialized
INFO - 2025-08-22 22:43:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 22:43:42 --> Controller Class Initialized
INFO - 2025-08-22 22:43:42 --> Final output sent to browser
DEBUG - 2025-08-22 22:43:42 --> Total execution time: 0.0029
INFO - 2025-08-22 23:36:18 --> Config Class Initialized
INFO - 2025-08-22 23:36:18 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:36:18 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:36:18 --> Utf8 Class Initialized
INFO - 2025-08-22 23:36:18 --> URI Class Initialized
DEBUG - 2025-08-22 23:36:18 --> No URI present. Default controller set.
INFO - 2025-08-22 23:36:18 --> Router Class Initialized
INFO - 2025-08-22 23:36:18 --> Output Class Initialized
INFO - 2025-08-22 23:36:18 --> Security Class Initialized
DEBUG - 2025-08-22 23:36:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:36:18 --> Input Class Initialized
INFO - 2025-08-22 23:36:18 --> Language Class Initialized
INFO - 2025-08-22 23:36:18 --> Loader Class Initialized
INFO - 2025-08-22 23:36:18 --> Helper loaded: url_helper
INFO - 2025-08-22 23:36:18 --> Database Driver Class Initialized
INFO - 2025-08-22 23:36:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-08-22 23:36:18 --> Controller Class Initialized
INFO - 2025-08-22 23:36:18 --> Final output sent to browser
DEBUG - 2025-08-22 23:36:18 --> Total execution time: 0.0030
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Envbackup/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Credentialsjson/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Localsettingsjson/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Awsyml/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Applicationyml/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Secretsjson/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Gitignore/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Git/hooks
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Env/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Settingspy/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Awsjson/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Envprod/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Git/objects
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Git/hooks
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Envstaging/index
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Envtest/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Firebasejson/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Envproduction/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Envlocal/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Envdevelopment/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Configjson/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Google_servicesjson/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Dbsql/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Databasejson/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Dbini/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Docker_composeprodyml/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Dockerenv/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Helm_configyaml/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Azure_pipelinesyml/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Travisyml/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Droneyml/index
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Github/workflows
INFO - 2025-08-22 23:51:31 --> Config Class Initialized
INFO - 2025-08-22 23:51:31 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:31 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:31 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:31 --> URI Class Initialized
INFO - 2025-08-22 23:51:31 --> Router Class Initialized
INFO - 2025-08-22 23:51:31 --> Output Class Initialized
INFO - 2025-08-22 23:51:31 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:31 --> Input Class Initialized
INFO - 2025-08-22 23:51:31 --> Language Class Initialized
ERROR - 2025-08-22 23:51:31 --> 404 Page Not Found: Appveyoryml/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Firebaseconfigjs/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Google_cloudjson/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Azure_configjson/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Databaseyml/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Circleci/config.yml
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Db_backupsql/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Bitbucket_pipelinesyml/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Docker_composeyml/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Httpdconf/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Databaseconf/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Apacheconf/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Jenkinsfile/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Webconfig/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Nginxconf/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Circleyml/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Dockerfile/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: K8syaml/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Appsettingsjson/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Docker_composeoverrideyml/index
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Gitlab_ciyml/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Db_configjson/index
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Github/workflows
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Dbconf/index
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Codeship_stepsyml/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Configjs/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Kubernetesyaml/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Backuptargz/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Backuptar/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Dumprdb/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Ansible_vaultyml/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Backupzip/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Backupsql/index
INFO - 2025-08-22 23:51:32 --> Config Class Initialized
INFO - 2025-08-22 23:51:32 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:32 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:32 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:32 --> URI Class Initialized
INFO - 2025-08-22 23:51:32 --> Router Class Initialized
INFO - 2025-08-22 23:51:32 --> Output Class Initialized
INFO - 2025-08-22 23:51:32 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:32 --> Input Class Initialized
INFO - 2025-08-22 23:51:32 --> Language Class Initialized
ERROR - 2025-08-22 23:51:32 --> 404 Page Not Found: Config/credentials.yml
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Verceljson/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Terraformtfvars/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Installsh/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Secretsvault/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: S3cfg/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Terraformlockhcl/index
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Serverlessyml/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Deployps1/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Pipfilelock/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Dockerconfigjson/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Config/secrets.yml
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Backup7z/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Aws/config
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Gemfilelock/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Netlifytoml/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Deploysh/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Package_lockjson/index
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Npmrc/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Docker/config.json
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Yarnlock/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Aws/credentials
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Terraformtfstate/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Setupsh/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Npmrc/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Vaultyml/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Config/database.yml
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Backupdump/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Composerlock/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Src/config.json
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Keysjson/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Src/secrets.json
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Certificatepem/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Id_rsa/index
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Src/credentials.json
INFO - 2025-08-22 23:51:33 --> Config Class Initialized
INFO - 2025-08-22 23:51:33 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:33 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:33 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:33 --> URI Class Initialized
INFO - 2025-08-22 23:51:33 --> Router Class Initialized
INFO - 2025-08-22 23:51:33 --> Output Class Initialized
INFO - 2025-08-22 23:51:33 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:33 --> Input Class Initialized
INFO - 2025-08-22 23:51:33 --> Language Class Initialized
ERROR - 2025-08-22 23:51:33 --> 404 Page Not Found: Privatekey/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Ssh/config
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Oauthjson/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Ssh/known_hosts
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Oauth_credentialsjson/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Id_dsa/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Saml_configxml/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Ssh/authorized_keys
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Ldap_configjson/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Debuglog/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Jwt_secretkey/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Accesslog/index
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Openid_configjson/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Errorlog/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Idea/workspace.xml
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Vscode/settings.json
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Project/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Shadow/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Authlog/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Group/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Hosts/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Opensslcnf/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Sshd_config/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Passwd/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Sslconf/index
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: App/config
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Sudoers/index
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Config/initializers
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Applicationproperties/index
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Mycnf/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Settingsgradle/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Buildgradle/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Pomxml/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Application_devproperties/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: GoogleService_Infoplist/index
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Application_prodproperties/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Infoplist/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: AndroidManifestxml/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Sentryproperties/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: AppDelegateswift/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Newrelicjs/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: AppDelegatem/index
INFO - 2025-08-22 23:51:34 --> Config Class Initialized
INFO - 2025-08-22 23:51:34 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:34 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:34 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:34 --> URI Class Initialized
INFO - 2025-08-22 23:51:34 --> Router Class Initialized
INFO - 2025-08-22 23:51:34 --> Output Class Initialized
INFO - 2025-08-22 23:51:34 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:34 --> Input Class Initialized
INFO - 2025-08-22 23:51:34 --> Language Class Initialized
ERROR - 2025-08-22 23:51:34 --> 404 Page Not Found: Stripejson/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Newrelicini/index
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Paypalconf/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Email_settingsjson/index
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Mailconfig/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Datadogyaml/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Grafanaini/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Smtpconf/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Braintreejson/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Gethconf/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Kibanayml/index
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Bitcoinconf/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Securityyml/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Mongodconf/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Postgresqlconf/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Redisconf/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Mysqlconf/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Truffle_configjs/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Elasticsearchyml/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Logstashconf/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Permissionsjson/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Authconf/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Rolesjson/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Usersjson/index
INFO - 2025-08-22 23:51:35 --> Config Class Initialized
INFO - 2025-08-22 23:51:35 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:35 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:35 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:35 --> URI Class Initialized
INFO - 2025-08-22 23:51:35 --> Router Class Initialized
INFO - 2025-08-22 23:51:35 --> Output Class Initialized
INFO - 2025-08-22 23:51:35 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:35 --> Input Class Initialized
INFO - 2025-08-22 23:51:35 --> Language Class Initialized
ERROR - 2025-08-22 23:51:35 --> 404 Page Not Found: Acljson/index
INFO - 2025-08-22 23:51:36 --> Config Class Initialized
INFO - 2025-08-22 23:51:36 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:36 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:36 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:36 --> URI Class Initialized
INFO - 2025-08-22 23:51:36 --> Router Class Initialized
INFO - 2025-08-22 23:51:36 --> Output Class Initialized
INFO - 2025-08-22 23:51:36 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:36 --> Input Class Initialized
INFO - 2025-08-22 23:51:36 --> Language Class Initialized
ERROR - 2025-08-22 23:51:36 --> 404 Page Not Found: Git/refs
INFO - 2025-08-22 23:51:36 --> Config Class Initialized
INFO - 2025-08-22 23:51:36 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:36 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:36 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:36 --> URI Class Initialized
INFO - 2025-08-22 23:51:36 --> Router Class Initialized
INFO - 2025-08-22 23:51:36 --> Output Class Initialized
INFO - 2025-08-22 23:51:36 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:36 --> Input Class Initialized
INFO - 2025-08-22 23:51:36 --> Language Class Initialized
ERROR - 2025-08-22 23:51:36 --> 404 Page Not Found: Git/refs
INFO - 2025-08-22 23:51:36 --> Config Class Initialized
INFO - 2025-08-22 23:51:36 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:36 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:36 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:36 --> URI Class Initialized
INFO - 2025-08-22 23:51:36 --> Router Class Initialized
INFO - 2025-08-22 23:51:36 --> Output Class Initialized
INFO - 2025-08-22 23:51:36 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:36 --> Input Class Initialized
INFO - 2025-08-22 23:51:36 --> Language Class Initialized
ERROR - 2025-08-22 23:51:36 --> 404 Page Not Found: Git/logs
INFO - 2025-08-22 23:51:36 --> Config Class Initialized
INFO - 2025-08-22 23:51:36 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:36 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:36 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:36 --> URI Class Initialized
INFO - 2025-08-22 23:51:36 --> Router Class Initialized
INFO - 2025-08-22 23:51:36 --> Output Class Initialized
INFO - 2025-08-22 23:51:36 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:36 --> Input Class Initialized
INFO - 2025-08-22 23:51:36 --> Language Class Initialized
ERROR - 2025-08-22 23:51:36 --> 404 Page Not Found: Git/logs
INFO - 2025-08-22 23:51:36 --> Config Class Initialized
INFO - 2025-08-22 23:51:36 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:36 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:36 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:36 --> URI Class Initialized
INFO - 2025-08-22 23:51:36 --> Router Class Initialized
INFO - 2025-08-22 23:51:36 --> Output Class Initialized
INFO - 2025-08-22 23:51:36 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:36 --> Input Class Initialized
INFO - 2025-08-22 23:51:36 --> Language Class Initialized
ERROR - 2025-08-22 23:51:36 --> 404 Page Not Found: Git/refs
INFO - 2025-08-22 23:51:36 --> Config Class Initialized
INFO - 2025-08-22 23:51:36 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:36 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:36 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:36 --> URI Class Initialized
INFO - 2025-08-22 23:51:36 --> Router Class Initialized
INFO - 2025-08-22 23:51:36 --> Output Class Initialized
INFO - 2025-08-22 23:51:36 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:36 --> Input Class Initialized
INFO - 2025-08-22 23:51:36 --> Language Class Initialized
ERROR - 2025-08-22 23:51:36 --> 404 Page Not Found: Git/packed_refs
INFO - 2025-08-22 23:51:36 --> Config Class Initialized
INFO - 2025-08-22 23:51:36 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:36 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:36 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:36 --> URI Class Initialized
INFO - 2025-08-22 23:51:36 --> Router Class Initialized
INFO - 2025-08-22 23:51:36 --> Output Class Initialized
INFO - 2025-08-22 23:51:36 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:36 --> Input Class Initialized
INFO - 2025-08-22 23:51:36 --> Language Class Initialized
ERROR - 2025-08-22 23:51:36 --> 404 Page Not Found: Git/info
INFO - 2025-08-22 23:51:36 --> Config Class Initialized
INFO - 2025-08-22 23:51:36 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:36 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:36 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:36 --> URI Class Initialized
INFO - 2025-08-22 23:51:36 --> Router Class Initialized
INFO - 2025-08-22 23:51:36 --> Output Class Initialized
INFO - 2025-08-22 23:51:36 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:36 --> Input Class Initialized
INFO - 2025-08-22 23:51:36 --> Language Class Initialized
ERROR - 2025-08-22 23:51:36 --> 404 Page Not Found: Git/refs
INFO - 2025-08-22 23:51:36 --> Config Class Initialized
INFO - 2025-08-22 23:51:36 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:36 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:36 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:36 --> URI Class Initialized
INFO - 2025-08-22 23:51:36 --> Router Class Initialized
INFO - 2025-08-22 23:51:36 --> Output Class Initialized
INFO - 2025-08-22 23:51:36 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:36 --> Input Class Initialized
INFO - 2025-08-22 23:51:36 --> Language Class Initialized
ERROR - 2025-08-22 23:51:36 --> 404 Page Not Found: Git/ORIG_HEAD
INFO - 2025-08-22 23:51:36 --> Config Class Initialized
INFO - 2025-08-22 23:51:36 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:36 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:36 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:36 --> URI Class Initialized
INFO - 2025-08-22 23:51:36 --> Router Class Initialized
INFO - 2025-08-22 23:51:36 --> Output Class Initialized
INFO - 2025-08-22 23:51:36 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:36 --> Input Class Initialized
INFO - 2025-08-22 23:51:36 --> Language Class Initialized
ERROR - 2025-08-22 23:51:36 --> 404 Page Not Found: Git/refs
INFO - 2025-08-22 23:51:36 --> Config Class Initialized
INFO - 2025-08-22 23:51:36 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:36 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:36 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:36 --> URI Class Initialized
INFO - 2025-08-22 23:51:36 --> Router Class Initialized
INFO - 2025-08-22 23:51:36 --> Output Class Initialized
INFO - 2025-08-22 23:51:36 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:36 --> Input Class Initialized
INFO - 2025-08-22 23:51:36 --> Language Class Initialized
ERROR - 2025-08-22 23:51:36 --> 404 Page Not Found: Git/logs
INFO - 2025-08-22 23:51:43 --> Config Class Initialized
INFO - 2025-08-22 23:51:43 --> Hooks Class Initialized
DEBUG - 2025-08-22 23:51:43 --> UTF-8 Support Enabled
INFO - 2025-08-22 23:51:43 --> Utf8 Class Initialized
INFO - 2025-08-22 23:51:43 --> URI Class Initialized
INFO - 2025-08-22 23:51:43 --> Router Class Initialized
INFO - 2025-08-22 23:51:43 --> Output Class Initialized
INFO - 2025-08-22 23:51:43 --> Security Class Initialized
DEBUG - 2025-08-22 23:51:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-08-22 23:51:43 --> Input Class Initialized
INFO - 2025-08-22 23:51:43 --> Language Class Initialized
ERROR - 2025-08-22 23:51:43 --> 404 Page Not Found: Git/objects
