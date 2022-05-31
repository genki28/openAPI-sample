# OpenAPI 定義の作成方法

## 設定が必要なもの

-   コントローラー
-   タグの定義
-   アクションメソッドの定義
-   リクエストボディの定義（必要ならば）
-   リクエストパラメータの定義（必要ならば）
-   レスポンスの定義
-   スキーマの定義

## 注意事項

諸々は artisan コマンドで設定可能です（TODO: 後日記載します）

## yml 自動生成方法

```
php artisan generate-openapi
```