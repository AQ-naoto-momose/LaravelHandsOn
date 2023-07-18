# ECS + Fargate + CI/CD

## ローカル環境構成
- Nginx 1.20.2
- MySQL 8.0
- Composer latest(固定バージョンに修正予定)
- PHP 8.1
- Laravel 10.8
- Node TLS(固定バージョンに修正予定)

## ローカル環境構築手順
### 初回時
1. リポジトリを任意のディレクトリでcloneする
```
git clone https://github.com/ryo-okazaki/ecs-fargate-cicd-handson.git
```

2. 必要なパッケージをインストールし、環境を構築する
```
make install
```

3. ブラウザを確認する  
   home：http://localhost:80/
   Car List：http://localhost:80/cars

### 2回目以降
```
make up
```