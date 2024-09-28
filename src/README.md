# お問い合わせフォーム

## 環境構築

### Docker ビルド

-   リポジトリをクローンします:
    ```bash
    git clone git@github.com:shun1019/confirmation-test.git
    ```
-   Docker コンテナをビルドして起動します:
    ```bash
    docker-compose up -d --build
    ```
-   MySQL は、OS によって起動しない場合があるため、それぞれの PC に合わせて `docker-compose.yml` ファイルを編集してください。

### Laravel 環境構築

-  `docker-compose exec php bash`

- `composer install`
- 「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.env ファイルを作成
- .env に以下の環境変数を追加

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
```

-   アプリケーションキーを生成します:
    ```bash
    php artisan key:generate
    ```
-   データベースマイグレーションを実行します:
    ```bash
    php artisan migrate
    ```
-   データベースシーディングを実行します:
    ```bash
    php artisan db:seed
    ```

## 使用技術

-   PHP: 7.4.9
-   Laravel: 8.83.8
-   MySQL: 8.0

## URL

-   開発環境: [http://localhost/](http://localhost/)
-   phpMyAdmin: [http://localhost:8080/](http://localhost:8080/)
