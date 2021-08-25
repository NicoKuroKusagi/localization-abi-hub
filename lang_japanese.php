<?php

//Registration, Sign-Up
define("ABI_UI_WELCOME_HEADER", "コミュニティハブにログイン");
define("ABI_UI_WELCOME_HEADER_PWRESET", "パスワードリセット");
define("ABI_UI_WELCOME_HEADER_REGISTER", "アカウント作成");

define("ABI_UI_WELCOME_INFO_NOACCOUNT", "ABIアカウントを未登録ですか?");
define("ABI_UI_WELCOME_INFO_PWRESET", "パスワードをリセットするには、メールアドレスを入力してください。");
define("ABI_UI_WELCOME_INFO_CREATE", "お客様の情報を入力し、アカウントを作成してください。ユーザー名には以下の文字が含まれます。[a-z] [A-Z] [0-9] [.-_]");
define("ABI_UI_WELCOME_INFO_AGREEBOX", "私は、以下に同意します");

define("ABI_UI_WELCOME_HEADER_PWRESET_SENT", "リクエストの送信!");
define("ABI_UI_WELCOME_INFO_PWRESET_SENT", "このメールアドレスが当社で把握されている場合、すぐにメールが届きます。");

define("ABI_UI_WELCOME_HEADER_PWRESET_COMPLETE", "パスワードリセット処理!");
define("ABI_UI_WELCOME_INFO_PWRESET_COMPLETE", "パスワードのリセットが処理され、パスワードが変更されました。");

define("ABI_UI_WELCOME_HEADER_PW_NO_MATCH", "パスワードが不一致!");
define("ABI_UI_WELCOME_INFO_PW_NO_MATCH", "入力されたパスワードが一致しません。");

define("ABI_UI_WELCOME_HEADER_PW_TOO_WEAK", "パスワードが簡単すぎます!");
define("ABI_UI_WELCOME_INFO_PW_TOO_WEAK", "あなたのパスワードは簡単すぎます。安全のため、より強固なパスワードを使用してください。");

define("ABI_UI_WELCOME_HEADER_EMAIL_INVALID", "メールアドレスが無効です!");
define("ABI_UI_WELCOME_INFO_EMAIL_INVALID", "入力されたメールアドレスが有効ではありません。誤字脱字がないか確認をお願いします。");

define("ABI_UI_WELCOME_HEADER_ACCOUNT_AWAIT_CONFIRM", "ABIへようこそ!");
define("ABI_UI_WELCOME_INFO_ACCOUNT_AWAIT_CONFIRM", "お客様のユーザーアカウントが作成され、現在確認されるのを待っています。メールの受信箱、迷惑メールフォルダー、プロモーションフォルダーをご確認ください。");

define("ABI_UI_WELCOME_HEADER_ACCOUNT_CONFIRMED", "ABIへようこそ!");
define("ABI_UI_WELCOME_INFO_ACCOUNT_CONFIRMED", "お客様のアカウントが有効になりましたので、ログイン出来るようになりました。");

define("ABI_UI_WELCOME_HEADER_REGISTER_DISABLED", "登録が無効化されています!");
define("ABI_UI_WELCOME_INFO_REGISTER_DISABLED", "現時点では登録する事が出来ません。");

define("ABI_UI_WELCOME_HEADER_LOGIN_DISABLED", "ログインが無効化されています!");
define("ABI_UI_WELCOME_INFO_LOGIN_DISABLED", "現時点ではログインする事は出来ません");

define("ABI_UI_WELCOME_HEADER_LEGAL_CHECKBOXES", "法的要件を満たしていません!");
define("ABI_UI_WELCOME_INFO_LEGAL_CHECKBOXES", "アカウントを作成するには、ガイドラインと個人情報保護方針に同意していただく必要があります!");

define("ABI_UI_WELCOME_HEADER_SECURITY_CSRF", "登録セッションの期限が切れました!");
define("ABI_UI_WELCOME_INFO_SECURITY_CSRF", "登録に時間がかかりすぎています。ページを更新し、もう一度お試しください。");

define("ABI_UI_WELCOME_HEADER_CONFIRM_TOKEN_UNKNOWN", "不明な確認用トークンです!");
define("ABI_UI_WELCOME_INFO_CONFIRM_TOKEN_UNKNOWN", "アクティベーショントークンが無効です。必ずメールアドレス宛に送られたリンクをご利用いただくか、ABIサポートにご連絡ください。.");

define("ABI_UI_WELCOME_HEADER_USER_ILLEGAL", "ユーザ名は使用出来ません!");
define("ABI_UI_WELCOME_INFO_USER_ILLEGAL", "指定されたユーザー名は不正なため、使用出来ません。ユーザー名には、英数字、マイナス記号、アンダースコア、ドット、数字のみを使用する事が出来ます。");

define("ABI_UI_WELCOME_HEADER_USER_TAKEN", "ユーザー名は既に使用されています!");
define("ABI_UI_WELCOME_INFO_USER_TAKEN", "このユーザー名は既に使用されています。別のユーザー名を使用してください。");

define("ABI_UI_WELCOME_HEADER_EMAIL_TAKEN", "メールアドレスは既に使用されています!");
define("ABI_UI_WELCOME_INFO_EMAIL_TAKEN", "このメールアドレスは、既に別のユーザアカウントによって登録されています。");

define("ABI_UI_WELCOME_HEADER_CREDS_INVALID", "提供された認証情報が無効です!");
define("ABI_UI_WELCOME_INFO_CREDS_INVALID", "無効なログイン情報が入力されました! 更に助けが必要な場合 team@abinteractive.net までメールを送信してください。");

define("ABI_UI_WELCOME_HEADER_CONFIRM_PENDING", "アカウントが有効化されていません!");
define("ABI_UI_WELCOME_INFO_CONFIRM_PENDING", "お客様のアカウントは、現在確認待ちです。下のボタンをクリックすると、確認メールを再送する事が出来ます。");
define("ABI_UI_WELCOME_BUTTON_CONFIRM_PENDING", "確認メールを再送信");

define("ABI_UI_WELCOME_HEADER_CONFIRM_RESENT", "リクエストを送信!");
define("ABI_UI_WELCOME_INFO_CONFIRM_RESENT", "お客様へ確認メールが再送されました。迷惑メールフォルダやプロモーションフォルダもご確認ください。");

define("ABI_UI_WELCOME_PLACEHOLDER_USER", "ユーザー名");
define("ABI_UI_WELCOME_PLACEHOLDER_EMAIL", "メールアドレス");
define("ABI_UI_WELCOME_PLACEHOLDER_PASSWORD", "パスワード");
define("ABI_UI_WELCOME_PLACEHOLDER_PASSWORDCONFIRM", "パスワードを再入力");

define("ABI_UI_WELCOME_BUTTON_SIGNIN", "ログイン");
define("ABI_UI_WELCOME_BUTTON_SIGNUP", "アカウント登録");
define("ABI_UI_WELCOME_BUTTON_RESETPW", "パスワードリセット");
define("ABI_UI_WELCOME_BUTTON_RESETPWSUBMIT", "リセットを要求する");
define("ABI_UI_WELCOME_BUTTON_BACKTOLOGIN", "ログイン画面へ戻る");

define("ABI_UI_WELCOME_BOX_TERMS", "利用規約とガイドライン");
define("ABI_UI_WELCOME_BOX_PRIVACY", "個人情報保護方針");
