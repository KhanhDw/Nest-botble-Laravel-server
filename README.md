Cài đặt Backend (Laravel server)
📂 B1. Clone code server

````
git clone https://github.com/KhanhDw/Nest-botble-Laravel-server.git
cd Nest-botble-Laravel-server
````
📦 B2. Cài thư viện PHP

````
composer install
````
⚙ B3. Cấu hình .env
````
cái này làm rồi nên khổi đọc thôi
``````
```
cp .env.example .env
Mở .env và chỉnh thông tin MySQL của XAMPP:

env
Sao chép
Chỉnh sửa
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nest_botble
DB_USERNAME=root
DB_PASSWORD=
```
🗄 B4. Tạo database trong phpMyAdmin
````
Truy cập http://localhost/phpmyadmin
````
Tạo database tên nest_botble

📊 B5. Tạo bảng và dữ liệu mẫu

````
php artisan migrate --seed
````
▶ B6. Chạy server Laravel

````
php artisan serve
Server chạy tại: http://127.0.0.1:8000
````

