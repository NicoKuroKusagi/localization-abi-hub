<?php

//Registration, Sign-Up
define("ABI_UI_WELCOME_HEADER", "커뮤니티 허브에 로그인");
define("ABI_UI_WELCOME_HEADER_PWRESET", "암호 재생성");
define("ABI_UI_WELCOME_HEADER_REGISTER", "계정 생성");

define("ABI_UI_WELCOME_INFO_NOACCOUNT", "아직 계정이 없으신가요?");
define("ABI_UI_WELCOME_INFO_PWRESET", "암호 재생성을 위해서 이메일을 적어주세요.");
define("ABI_UI_WELCOME_INFO_CREATE", "새 계정을 만들기 위해 아래 내용을 입력해 주세요.");
define("ABI_UI_WELCOME_INFO_AGREEBOX", "체크시 동의합니다.");

define("ABI_UI_WELCOME_HEADER_PWRESET_SENT", "요청이 전송되었습니다!");
define("ABI_UI_WELCOME_INFO_PWRESET_SENT", "이메일 주소에 따라서 이메일이 늦게 올 수도 있습니다.");

define("ABI_UI_WELCOME_HEADER_PWRESET_COMPLETE", "암호 재생성이 완료되었습니다!");
define("ABI_UI_WELCOME_INFO_PWRESET_COMPLETE", "암호가 변경되었습니다.");

define("ABI_UI_WELCOME_HEADER_PW_NO_MATCH", "암호가 일치하지 않습니다!");
define("ABI_UI_WELCOME_INFO_PW_NO_MATCH", "입력된 암호가 일치하지 않습니다.");

define("ABI_UI_WELCOME_HEADER_PW_TOO_WEAK", "암호가 너무 취약합니다!");
define("ABI_UI_WELCOME_INFO_PW_TOO_WEAK", "암호가 너무 취약합니다. 계정의 안전을 위해서, 더 강한 암호를 사용해 주세요.");

define("ABI_UI_WELCOME_HEADER_EMAIL_INVALID", "이메일이 유효하지 않습니다!");
define("ABI_UI_WELCOME_INFO_EMAIL_INVALID", "입력된 이메일이 유효하지 않습니다. 오타가 없는지 확인하세요.");

define("ABI_UI_WELCOME_HEADER_ACCOUNT_AWAIT_CONFIRM", "ABI에 오신 걸 환영합니다!");
define("ABI_UI_WELCOME_INFO_ACCOUNT_AWAIT_CONFIRM", "유저 계정이 만들어졌고, 이메일 확인을 기다리고 있습니다. 이메일을 확인해 주세요. 만일 이메일이 안 왔다면, 스팸 메일함이나 프로모션 메일함을 확인해 보세요.");

define("ABI_UI_WELCOME_HEADER_ACCOUNT_CONFIRMED", "ABI에 오신 걸 환영합니다!");
define("ABI_UI_WELCOME_INFO_ACCOUNT_CONFIRMED", "계정이 활성화되었으며, 지금부터 로그인이 가능합니다.");

define("ABI_UI_WELCOME_HEADER_REGISTER_DISABLED", "계정 등록이 비활성화 되었습니다!");
define("ABI_UI_WELCOME_INFO_REGISTER_DISABLED", "지금은 계정 등록이 불가능합니다.");

define("ABI_UI_WELCOME_HEADER_LOGIN_DISABLED", "로그인이 비활성화 되었습니다!");
define("ABI_UI_WELCOME_INFO_LOGIN_DISABLED", "지금은 로그인이 불가능합니다.");

define("ABI_UI_WELCOME_HEADER_LEGAL_CHECKBOXES", "필수 정보가 동의되지 않았습니다!");
define("ABI_UI_WELCOME_INFO_LEGAL_CHECKBOXES", "계정을 만들기 위해서는, 이용약관과 개인정보 처리방침에 동의해야 합니다.");

define("ABI_UI_WELCOME_HEADER_SECURITY_CSRF", "계정 등록 세션이 만료되었습니다.");
define("ABI_UI_WELCOME_INFO_SECURITY_CSRF", "등록 과정이 너무 오래 걸렸습니다. 페이지를 새로고침하고 다시 시도해 보세요.");

define("ABI_UI_WELCOME_HEADER_CONFIRM_TOKEN_UNKNOWN", "알려지지 않은 토큰이 감지되었습니다.");
define("ABI_UI_WELCOME_INFO_CONFIRM_TOKEN_UNKNOWN", "부정확한 계정 활성 토큰이 감지되었습니다. 이메일로 온 링크를 누르시거나, ABI 도우미 팀에 연락하세요.");

define("ABI_UI_WELCOME_HEADER_USER_ILLEGAL", "사용할 수 없는 유저명입니다.");
define("ABI_UI_WELCOME_INFO_USER_ILLEGAL", "유저명에는 알파벳 대문자, 소문자와 마이너스 기호, 밑줄, 숫자만 사용 가능합니다.");

define("ABI_UI_WELCOME_HEADER_USER_TAKEN", "사용 중인 유저명입니다.");
define("ABI_UI_WELCOME_INFO_USER_TAKEN", "이 유저명은 사용중입니다. 다른 이름을 사용해 주세요.");

define("ABI_UI_WELCOME_HEADER_EMAIL_TAKEN", "사용 중인 이메일입니다.");
define("ABI_UI_WELCOME_INFO_EMAIL_TAKEN", "해당 이메일로 다른 계정이 이미 등록되었습니다.");

define("ABI_UI_WELCOME_HEADER_CREDS_INVALID", "정확하지 않은 내용이 입력되었습니다.");
define("ABI_UI_WELCOME_INFO_CREDS_INVALID", "team@abinteractive.net에 연락해 도움을 받으세요.");

define("ABI_UI_WELCOME_HEADER_CONFIRM_PENDING", "계정이 활성화되지 않았습니다.");
define("ABI_UI_WELCOME_INFO_CONFIRM_PENDING", "계정이 활성화되는 것을 기다리고 있습니다. 아래 버튼을 눌러서 확인 이메일을 다시 보낼 수 있습니다.");
define("ABI_UI_WELCOME_BUTTON_CONFIRM_PENDING", "확인 이메일 재전송");

define("ABI_UI_WELCOME_HEADER_CONFIRM_RESENT", "요청이 전송되었습니다!");
define("ABI_UI_WELCOME_INFO_CONFIRM_RESENT", "확인 이메일이 재전송되었습니다. 스팸 메일함과 프로모션 메일함을 확인해 주세요.");

define("ABI_UI_WELCOME_PLACEHOLDER_USER", "유저명");
define("ABI_UI_WELCOME_PLACEHOLDER_EMAIL", "이메일");
define("ABI_UI_WELCOME_PLACEHOLDER_PASSWORD", "암호");
define("ABI_UI_WELCOME_PLACEHOLDER_PASSWORDCONFIRM", "암호 확인");

define("ABI_UI_WELCOME_BUTTON_SIGNIN", "로그인");
define("ABI_UI_WELCOME_BUTTON_SIGNUP", "계정 생성");
define("ABI_UI_WELCOME_BUTTON_RESETPW", "암호 재생성");
define("ABI_UI_WELCOME_BUTTON_RESETPWSUBMIT", "암호 재생성 요청");
define("ABI_UI_WELCOME_BUTTON_BACKTOLOGIN", "로그인 화면으로");

define("ABI_UI_WELCOME_BOX_TERMS", "이용약관");
define("ABI_UI_WELCOME_BOX_PRIVACY", "개인정보 취급방침");
