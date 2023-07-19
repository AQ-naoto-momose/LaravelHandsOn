# ECS + Fargate + CI/CD

## ローカル環境構成
- Nginx 1.25.1
- MySQL 8.0
- Composer 2.5.8
- PHP 8.2
- Laravel 10.8
- Node 18.16.1
- npm 9.5.1

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