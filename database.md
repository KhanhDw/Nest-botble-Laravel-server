# lệnh tạo bảng trong các migration

# Tạo từng nhóm theo module để dễ rollback mà không ảnh hưởng toàn bộ hệ thống:
```
php artisan migrate --path=database/migrations/users
php artisan migrate --path=database/migrations/products
```

# Nếu cần reset chỉ 1 module:
php artisan migrate:rollback --path=database/migrations/orders



```
Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
```
```
Schema::create('products', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->integer('price');
        $table->timestamps();
    });

```