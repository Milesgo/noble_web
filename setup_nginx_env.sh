#!/bin/bash
# AWS 환경변수 설정을 위한 임시 스크립트

# 현재 설정 파일 백업
sudo cp /etc/nginx/sites-available/default /etc/nginx/sites-available/default.$(date +%Y%m%d_%H%M%S)

# 환경변수를 추가하는 설정 적용
sudo sed -i '/fastcgi_param SCRIPT_FILENAME/a\\tfastcgi_param AWS_ACCESS_KEY_ID "AKIAVWACO6WCTKIPDEP5";' /etc/nginx/sites-available/default
sudo sed -i '/fastcgi_param AWS_ACCESS_KEY_ID/a\\tfastcgi_param AWS_SECRET_ACCESS_KEY "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";' /etc/nginx/sites-available/default

# Nginx 설정 테스트
sudo nginx -t

# 설정이 정상이면 재시작
if [ $? -eq 0 ]; then
    sudo systemctl reload nginx
    echo "Nginx 설정이 성공적으로 적용되었습니다."
else
    echo "Nginx 설정에 오류가 있습니다. 백업에서 복원하세요."
fi
