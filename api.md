# Noble 오카리나 API 문서

## OpenAPI 3.0 사양

```yaml
openapi: 3.0.3
info:
  title: Noble 오카리나 API
  description: Noble 오카리나 반주기 서비스를 위한 REST API
  version: 1.0.0
  contact:
    name: Noble 개발팀
    email: jong8884@gmail.com
servers:
  - url: https://noble.nobleocarina.com
    description: 프로덕션 서버
  - url: http://noble.milestone.im
    description: 개발 서버

components:
  schemas:
    CommonResponse:
      type: object
      properties:
        result:
          type: string
          enum: [SUCCESS, FAILURE]
        message:
          type: string
          description: 결과 메시지
    
    Member:
      type: object
      properties:
        mem_no:
          type: integer
          description: 회원 번호
        mem_name:
          type: string
          description: 회원 이름
        mem_email:
          type: string
          format: email
          description: 이메일 주소
        mem_jointype:
          type: string
          enum: [EMAIL, KAKAO, NAVER, GOOGLE]
          description: 가입 유형
        mem_snsid:
          type: string
          description: SNS ID
    
    Song:
      type: object
      properties:
        song_no:
          type: integer
          description: 곡 번호
        song_title:
          type: string
          description: 곡 제목
        song_artist:
          type: string
          description: 아티스트
        song_genre:
          type: string
          description: 장르
        song_key:
          type: string
          description: 조성
        song_price:
          type: string
          enum: [FREE, PAID]
          description: 유료/무료 구분
        song_url_ar:
          type: string
          description: AR 음원 URL
        song_url_mr:
          type: string
          description: MR 음원 URL
    
    Album:
      type: object
      properties:
        alb_no:
          type: integer
          description: 앨범 번호
        alb_title:
          type: string
          description: 앨범 제목
        alb_order:
          type: integer
          description: 앨범 순서
        mem_no:
          type: integer
          description: 회원 번호

paths:
  /api/MemberJoin:
    post:
      tags:
        - 회원 관리
      summary: 회원 가입
      description: 새로운 회원을 등록합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - mem_name
                - mem_email
                - mem_jointype
              properties:
                mem_name:
                  type: string
                  description: 회원 이름
                mem_email:
                  type: string
                  format: email
                  description: 이메일 주소
                mem_password:
                  type: string
                  description: 비밀번호 (EMAIL 가입시 필수)
                mem_jointype:
                  type: string
                  enum: [EMAIL, KAKAO, NAVER, GOOGLE]
                  description: 가입 유형
                mem_snsid:
                  type: string
                  description: SNS ID (SNS 가입시 필수)
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                allOf:
                  - $ref: '#/components/schemas/CommonResponse'
                  - type: object
                    properties:
                      mem_no:
                        type: integer
                        description: 생성된 회원 번호

  /api/MemberLogin:
    post:
      tags:
        - 회원 관리
      summary: 회원 로그인
      description: 회원 로그인을 처리합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - mem_email
                - mem_jointype
              properties:
                mem_email:
                  type: string
                  format: email
                  description: 이메일 주소
                mem_password:
                  type: string
                  description: 비밀번호 (EMAIL 로그인시 필수)
                mem_jointype:
                  type: string
                  enum: [EMAIL, KAKAO, NAVER, GOOGLE]
                  description: 로그인 유형
                mem_snsid:
                  type: string
                  description: SNS ID (SNS 로그인시 필수)
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                allOf:
                  - $ref: '#/components/schemas/CommonResponse'
                  - type: object
                    properties:
                      member_info:
                        $ref: '#/components/schemas/Member'

  /api/FindPassword:
    post:
      tags:
        - 회원 관리
      summary: 비밀번호 찾기
      description: 이메일로 새로운 비밀번호를 전송합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - mem_email
              properties:
                mem_email:
                  type: string
                  format: email
                  description: 이메일 주소
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/CommonResponse'

  /api/ChangePassword:
    post:
      tags:
        - 회원 관리
      summary: 비밀번호 변경
      description: 회원의 비밀번호를 변경합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - mem_no
                - mem_password
                - new_password
              properties:
                mem_no:
                  type: integer
                  description: 회원 번호
                mem_password:
                  type: string
                  description: 현재 비밀번호
                new_password:
                  type: string
                  description: 새 비밀번호
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/CommonResponse'

  /api/GetMemberInfo:
    post:
      tags:
        - 회원 관리
      summary: 회원 정보 조회
      description: 회원의 상세 정보를 조회합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - mem_no
              properties:
                mem_no:
                  type: integer
                  description: 회원 번호
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                allOf:
                  - $ref: '#/components/schemas/CommonResponse'
                  - type: object
                    properties:
                      member_info:
                        $ref: '#/components/schemas/Member'

  /api/GetSongList:
    post:
      tags:
        - 곡 관리
      summary: 곡 목록 조회
      description: 조건에 맞는 곡 목록을 조회합니다
      requestBody:
        required: false
        content:
          application/json:
            schema:
              type: object
              properties:
                pageNumber:
                  type: integer
                  default: 1
                  description: 페이지 번호
                rowNumber:
                  type: integer
                  default: 20
                  description: 페이지당 행 수
                keyword:
                  type: string
                  description: 검색 키워드
                searchKeyfield:
                  type: string
                  description: 검색 필드
                codeInst:
                  type: string
                  description: 악기 코드
                codeGenre:
                  type: string
                  description: 장르 코드
                codeDuet:
                  type: string
                  description: 듀엣 코드
                codeKey:
                  type: string
                  description: 조성 코드
                price:
                  type: string
                  enum: [FREE, PAID]
                  description: 유료/무료 구분
                orderKey:
                  type: string
                  description: 정렬 기준
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                allOf:
                  - $ref: '#/components/schemas/CommonResponse'
                  - type: object
                    properties:
                      song_list:
                        type: array
                        items:
                          $ref: '#/components/schemas/Song'
                      total_count:
                        type: integer
                        description: 전체 곡 수

  /api/GetSongDetail:
    post:
      tags:
        - 곡 관리
      summary: 곡 상세 정보 조회
      description: 특정 곡의 상세 정보를 조회합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - song_no
              properties:
                song_no:
                  type: integer
                  description: 곡 번호
                mem_no:
                  type: integer
                  description: 회원 번호 (다운로드 권한 확인용)
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                allOf:
                  - $ref: '#/components/schemas/CommonResponse'
                  - type: object
                    properties:
                      song_info:
                        $ref: '#/components/schemas/Song'

  /api/GetAlbumList:
    post:
      tags:
        - 앨범 관리
      summary: 앨범 목록 조회
      description: 회원의 앨범 목록을 조회합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - mem_no
              properties:
                mem_no:
                  type: integer
                  description: 회원 번호
                pageNumber:
                  type: integer
                  default: 1
                  description: 페이지 번호
                rowNumber:
                  type: integer
                  default: 20
                  description: 페이지당 행 수
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                allOf:
                  - $ref: '#/components/schemas/CommonResponse'
                  - type: object
                    properties:
                      album_list:
                        type: array
                        items:
                          $ref: '#/components/schemas/Album'

  /api/AddAlbum:
    post:
      tags:
        - 앨범 관리
      summary: 앨범 추가
      description: 새로운 앨범을 생성합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - mem_no
                - alb_title
              properties:
                mem_no:
                  type: integer
                  description: 회원 번호
                alb_title:
                  type: string
                  description: 앨범 제목
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                allOf:
                  - $ref: '#/components/schemas/CommonResponse'
                  - type: object
                    properties:
                      alb_no:
                        type: integer
                        description: 생성된 앨범 번호

  /api/DeleteAlbum:
    post:
      tags:
        - 앨범 관리
      summary: 앨범 삭제
      description: 앨범을 삭제합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - alb_no
                - mem_no
              properties:
                alb_no:
                  type: integer
                  description: 앨범 번호
                mem_no:
                  type: integer
                  description: 회원 번호
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/CommonResponse'

  /api/EditAlbumName:
    post:
      tags:
        - 앨범 관리
      summary: 앨범 이름 수정
      description: 앨범의 이름을 수정합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - alb_no
                - alb_title
                - mem_no
              properties:
                alb_no:
                  type: integer
                  description: 앨범 번호
                alb_title:
                  type: string
                  description: 새 앨범 제목
                mem_no:
                  type: integer
                  description: 회원 번호
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/CommonResponse'

  /api/GetAlbumSongList:
    post:
      tags:
        - 앨범 관리
      summary: 앨범 곡 목록 조회
      description: 특정 앨범에 포함된 곡 목록을 조회합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - alb_no
                - mem_no
              properties:
                alb_no:
                  type: integer
                  description: 앨범 번호
                mem_no:
                  type: integer
                  description: 회원 번호
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                allOf:
                  - $ref: '#/components/schemas/CommonResponse'
                  - type: object
                    properties:
                      song_list:
                        type: array
                        items:
                          $ref: '#/components/schemas/Song'

  /api/AddAlbumSong:
    post:
      tags:
        - 앨범 관리
      summary: 앨범에 곡 추가
      description: 앨범에 곡을 추가합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - alb_no
                - song_no
                - mem_no
              properties:
                alb_no:
                  type: integer
                  description: 앨범 번호
                song_no:
                  type: integer
                  description: 곡 번호
                mem_no:
                  type: integer
                  description: 회원 번호
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/CommonResponse'

  /api/DeleteAlbumSong:
    post:
      tags:
        - 앨범 관리
      summary: 앨범에서 곡 삭제
      description: 앨범에서 곡을 제거합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - alb_no
                - song_no
                - mem_no
              properties:
                alb_no:
                  type: integer
                  description: 앨범 번호
                song_no:
                  type: integer
                  description: 곡 번호
                mem_no:
                  type: integer
                  description: 회원 번호
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/CommonResponse'

  /api/SetAlbumOrder:
    post:
      tags:
        - 앨범 관리
      summary: 앨범 순서 설정
      description: 앨범의 순서를 변경합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - mem_no
                - album_order
              properties:
                mem_no:
                  type: integer
                  description: 회원 번호
                album_order:
                  type: array
                  items:
                    type: integer
                  description: 앨범 번호 순서 배열
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/CommonResponse'

  /api/SetAlbumSongOrder:
    post:
      tags:
        - 앨범 관리
      summary: 앨범 내 곡 순서 설정
      description: 앨범 내 곡의 순서를 변경합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - alb_no
                - mem_no
                - song_order
              properties:
                alb_no:
                  type: integer
                  description: 앨범 번호
                mem_no:
                  type: integer
                  description: 회원 번호
                song_order:
                  type: array
                  items:
                    type: integer
                  description: 곡 번호 순서 배열
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/CommonResponse'

  /api/GetNoticeList:
    post:
      tags:
        - 공지사항
      summary: 공지사항 목록 조회
      description: 공지사항 목록을 조회합니다
      requestBody:
        required: false
        content:
          application/json:
            schema:
              type: object
              properties:
                pageNumber:
                  type: integer
                  default: 1
                  description: 페이지 번호
                rowNumber:
                  type: integer
                  default: 20
                  description: 페이지당 행 수
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                allOf:
                  - $ref: '#/components/schemas/CommonResponse'
                  - type: object
                    properties:
                      notice_list:
                        type: array
                        items:
                          type: object
                          properties:
                            post_no:
                              type: integer
                              description: 게시글 번호
                            post_title:
                              type: string
                              description: 제목
                            post_content:
                              type: string
                              description: 내용
                            post_registerdate:
                              type: string
                              format: date-time
                              description: 등록일

  /api/GetNoticeDetail:
    post:
      tags:
        - 공지사항
      summary: 공지사항 상세 조회
      description: 특정 공지사항의 상세 정보를 조회합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - post_no
              properties:
                post_no:
                  type: integer
                  description: 게시글 번호
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                allOf:
                  - $ref: '#/components/schemas/CommonResponse'
                  - type: object
                    properties:
                      notice_info:
                        type: object
                        properties:
                          post_no:
                            type: integer
                            description: 게시글 번호
                          post_title:
                            type: string
                            description: 제목
                          post_content:
                            type: string
                            description: 내용
                          post_registerdate:
                            type: string
                            format: date-time
                            description: 등록일

  /api/GetBannerList:
    post:
      tags:
        - 배너
      summary: 배너 목록 조회
      description: 활성화된 배너 목록을 조회합니다
      requestBody:
        required: false
        content:
          application/json:
            schema:
              type: object
              properties:
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                allOf:
                  - $ref: '#/components/schemas/CommonResponse'
                  - type: object
                    properties:
                      banner_list:
                        type: array
                        items:
                          type: object
                          properties:
                            banner_no:
                              type: integer
                              description: 배너 번호
                            banner_name:
                              type: string
                              description: 배너 이름
                            banner_url:
                              type: string
                              description: 배너 이미지 URL
                            banner_target:
                              type: string
                              description: 배너 타겟

  /api/PurchaseProduct:
    post:
      tags:
        - 결제
      summary: 상품 구매
      description: 상품을 구매합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - mem_no
                - product_id
                - os
              properties:
                mem_no:
                  type: integer
                  description: 회원 번호
                product_id:
                  type: string
                  description: 상품 ID
                os:
                  type: string
                  enum: [iOS, Android]
                  description: 운영체제
                purchase_token:
                  type: string
                  description: 구매 토큰
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/CommonResponse'

  /api/GetPurchaseList:
    post:
      tags:
        - 결제
      summary: 구매 내역 조회
      description: 회원의 구매 내역을 조회합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - mem_no
              properties:
                mem_no:
                  type: integer
                  description: 회원 번호
                pageNumber:
                  type: integer
                  default: 1
                  description: 페이지 번호
                rowNumber:
                  type: integer
                  default: 20
                  description: 페이지당 행 수
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                allOf:
                  - $ref: '#/components/schemas/CommonResponse'
                  - type: object
                    properties:
                      purchase_list:
                        type: array
                        items:
                          type: object
                          properties:
                            purchase_no:
                              type: integer
                              description: 구매 번호
                            product_id:
                              type: string
                              description: 상품 ID
                            product_name:
                              type: string
                              description: 상품명
                            price:
                              type: integer
                              description: 가격
                            purchase_date:
                              type: string
                              format: date-time
                              description: 구매일

  /api/GetScoreList:
    post:
      tags:
        - 악보
      summary: 악보 목록 조회
      description: 구매한 악보 목록을 조회합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - mem_no
              properties:
                mem_no:
                  type: integer
                  description: 회원 번호
                pageNumber:
                  type: integer
                  default: 1
                  description: 페이지 번호
                rowNumber:
                  type: integer
                  default: 20
                  description: 페이지당 행 수
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                allOf:
                  - $ref: '#/components/schemas/CommonResponse'
                  - type: object
                    properties:
                      score_list:
                        type: array
                        items:
                          type: object
                          properties:
                            song_no:
                              type: integer
                              description: 곡 번호
                            song_title:
                              type: string
                              description: 곡 제목
                            score_url:
                              type: string
                              description: 악보 PDF URL

  /api/CheckDownloadPdf:
    post:
      tags:
        - 악보
      summary: PDF 다운로드 권한 확인
      description: 회원의 PDF 다운로드 권한을 확인합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - mem_no
                - song_no
              properties:
                mem_no:
                  type: integer
                  description: 회원 번호
                song_no:
                  type: integer
                  description: 곡 번호
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                allOf:
                  - $ref: '#/components/schemas/CommonResponse'
                  - type: object
                    properties:
                      can_download:
                        type: boolean
                        description: 다운로드 가능 여부

  /api/LogBuyPdf:
    post:
      tags:
        - 로그
      summary: PDF 구매 로그
      description: PDF 구매 로그를 기록합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - mem_no
                - song_no
              properties:
                mem_no:
                  type: integer
                  description: 회원 번호
                song_no:
                  type: integer
                  description: 곡 번호
                price:
                  type: integer
                  description: 구매 가격
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/CommonResponse'

  /api/LogDownload:
    post:
      tags:
        - 로그
      summary: 다운로드 로그
      description: 다운로드 로그를 기록합니다
      requestBody:
        required: true
        content:
          application/json:
            schema:
              type: object
              required:
                - mem_no
                - song_no
                - download_type
              properties:
                mem_no:
                  type: integer
                  description: 회원 번호
                song_no:
                  type: integer
                  description: 곡 번호
                download_type:
                  type: string
                  enum: [AR, MR, MP3_AR, MP3_MR, PDF]
                  description: 다운로드 타입
                lang:
                  type: string
                  default: kr
                  description: 언어 설정
      responses:
        '200':
          description: 성공
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/CommonResponse'

tags:
  - name: 회원 관리
    description: 회원 가입, 로그인, 정보 관리 관련 API
  - name: 곡 관리
    description: 곡 목록 조회, 상세 정보 조회 관련 API
  - name: 앨범 관리
    description: 개인 앨범 생성, 수정, 삭제 및 곡 관리 관련 API
  - name: 공지사항
    description: 공지사항 조회 관련 API
  - name: 배너
    description: 배너 조회 관련 API
  - name: 결제
    description: 상품 구매 및 구매 내역 관리 관련 API
  - name: 악보
    description: 악보 조회 및 다운로드 관련 API
  - name: 로그
    description: 사용자 활동 로그 기록 관련 API
```

## API 사용 가이드

### 인증
- 현재 API는 회원 번호(`mem_no`) 기반으로 인증을 처리합니다
- 모든 API는 POST 메서드를 사용하며, JSON 형태의 요청 본문을 받습니다

### 공통 응답 형식
모든 API는 다음과 같은 공통 응답 형식을 사용합니다:

```json
{
  "result": "SUCCESS" | "FAILURE",
  "message": "결과 메시지"
}
```

### 에러 처리
- `result`가 `"FAILURE"`인 경우, `message` 필드에 에러 메시지가 포함됩니다
- 언어별 메시지는 `lang` 파라미터로 제어됩니다 (기본값: "kr")

### 페이징
목록 조회 API들은 다음 파라미터를 지원합니다:
- `pageNumber`: 페이지 번호 (기본값: 1)
- `rowNumber`: 페이지당 행 수 (기본값: 20)

### 주요 API 흐름

#### 1. 회원 가입 → 로그인
```
POST /api/MemberJoin → POST /api/MemberLogin
```

#### 2. 곡 검색 → 상세 조회 → 앨범 추가
```
POST /api/GetSongList → POST /api/GetSongDetail → POST /api/AddAlbumSong
```

#### 3. 결제 → 구매 내역 확인
```
POST /api/PurchaseProduct → POST /api/GetPurchaseList
```

### 파일 업로드 및 스트리밍
- 음원 파일 URL은 S3 등 외부 스토리지를 사용
- PDF 악보는 별도 다운로드 권한 체크 후 제공

### 다국어 지원
- 모든 API에서 `lang` 파라미터 지원
- 현재 지원 언어: `kr` (한국어)
