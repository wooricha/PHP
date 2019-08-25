1. php 폴더가 설치된 경로를 찾는다 (C:\Bitnami\wampstack-7.3.7-1\php)
2. php 폴더에서 php.ini 파일에서 extension_dir = '위의 경로+\ext'를 설정

3. 윈도우 -> 검색 -> 시스템 환경 변수 편집 -> 환경 변수 클릭 -> 
	아래의 시스템 변수에서 'path' 편집 -> 위의 경로를 추가한 후 확인 - 모두 확인을 하고 환경변수 창을 빠져나온다.
4. 아톰에서 php 파일 우클릭 후 'php server route file'을 선택 -> 결과가 잘 나오는지 확인
5. 필요한 플러그인을 설치한다. (https://gravis.tistory.com/entry/Atom-%EC%97%90%EB%94%94%ED%84%B0%EC%9D%98-%EC%9C%A0%EC%9A%A9%ED%95%9C-%ED%94%8C%EB%9F%AC%EA%B7%B8%EC%9D%B8)
6. 플러그인 설치 목록 
 - emment 
 - sublime style column
 - highlight-selected
