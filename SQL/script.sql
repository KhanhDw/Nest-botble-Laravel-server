USE test;

-- Tạo bảng 'KhachHang'
CREATE TABLE KhachHang (
    MaKH INT PRIMARY KEY AUTO_INCREMENT,
    TenKH NVARCHAR(255) NOT NULL
);

-- Tạo bảng 'SanPham'
CREATE TABLE SanPham (
    MaSP INT PRIMARY KEY AUTO_INCREMENT,
    TenSP NVARCHAR(255) NOT NULL
);


-- Thêm dữ liệu vào bảng 'KhachHang'
INSERT INTO KhachHang (TenKH) VALUES
    ('Nguyễn Văn A'),
    ('Trần Thị B'),
    ('Lê Văn C');

-- Thêm dữ liệu vào bảng 'SanPham'
INSERT INTO SanPham (TenSP) VALUES
    ('Máy tính xách tay'),
    ('Điện thoại di động'),
    ('Tai nghe không dây');