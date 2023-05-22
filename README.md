# SQL-injection 
1. Cài đặt công cụ thực nghiệm:
- XAMPP: https://www.apachefriends.org/download.html
Chọn phiên bản phù hợp với hệ điều hành của mình. 
2. Cài source code :
B1 : Tải file zip hoặc clone source code về :
B2 : Giai nén file để tìm file sqli.php và chuyển file sqli.php vào trong thư mục ../xampp/htdocs 
B3 : Khởi động XAMPP và truy cập http://localhost/phpmyadmin/ để thêm DATABASE 'test' và tạo TABLE 'username'
B4 : Truy cập vô trang web bằng cách nhập lên trình duyệt http://localhost/sqli.php/
3. Thử nghiệm :
Khi truy cập đường dẫn http://localhost/sqli.php/ lên ta sẽ thấy một webpage có chứa from điền . Đây sẽ là khung đầu vào để ta tiêm các mã SQL trái phép vào . Để test thử xem ta có cài đặt thành công hay không ta sẽ tiêm thử đoạn mã sau
         %' OR '0'='0 
 Nếu kết quả trả về là toàn bộ Table username thì chúc mừng bạn đã cài đặt thành công !!!
