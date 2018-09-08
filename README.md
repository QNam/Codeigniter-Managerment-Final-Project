# Hệ thống quản lý đăng kí, theo dõi tiến trình làm đồ án
</br>
__Tác giả__: Đoàn Quốc Nam, Bùi Thanh Nam </br>
__Giáo viên hướng dẫn__: Hoàng Văn Thông. </br>
__Công nghệ sử dụng__: CodeIgniter PHP Framework, Boostrap Css Framework, MySql <br><br>

_Do sự yếu kém về khả năng sử dụng github và sự bất cẩn của bản thân mà souce code của dự án đã bị mất. Thật sự cảm thấy xấu hổ._ 
<br>
<br>
## Mụch tiêu đồ án
- Phạm vi: Khoa CNTT.<br>
- Tự động hóa quá trình làm đồ án, giảm thiểu giấy tờ, đi lại cho sinh viên, giảng viên, đặc biệt là giúp việc trao đổi giữa sinh viên và giảng viên dễ dàng hơn.
<br>
<br>

## Phân tích yêu cầu bài toán <br>
- Hệ thống gồm 4 quyền: sinh viên, giáo viên, trưởng bộ môn, trưởng khoa. <br>
- __Sinh viên__: <br>
>> + Đăng kí được đề tài: Hệ thống sẽ cung cấp cho sinh viên danh sách giảng viên trong hướng chuyên sâu đã chọn, xem giảng viên đó còn thừa "slot" hướng dẫ sinh viên không, nếu không không cho học sinh đăng kí.<br>
>> + Quá trình làm đề tài được chia làm nhiều giai đoạn: Hệ thống cung cấp cho sinh viên thông tin về mỗi giai đoạn làm đồ án: tên, nội dung thời gian bắt đầu, kết thúc giai đoạn. <br>
>> + Xem được thông tin của giảng viên hướng dẫn, thông tin khóa, bộ môn, xem được nội dung đề cương, nội dung đề tài <br>
>> + Sinh viên trao đổi được với giảng viên, đăng được báo cáo, giản viên cũng có thể xem được báo cáo, trao đổi trực tiếp với sinh viên.<br>
>> + Sinh viên tạo đề cương theo mẫu.<br>
>> + Đề cương có được sự phê duyệt của giảng viên hướng dẫn, trưởng bộ môn, trưởng khoa sẽ được sắp xếp lịch bảo vệ, hội đồng bảo vệ.
<br>
<br>
- __Giảng viên__: <br>
>> + Xem được tất cả thông tin của sinh viên mình hướng dẫn.<br>
>> + Trao đổi với sinh viên. <br>
>> + Duyệt đề cương. <br>
<br>
<br>
- __Trưởng bộ môn__: <br>
>> + Xem được danh sách giáo viên. <br>
>> + Xem được danh sách đề cương, danh sách giáo viên, thông tin tất cả sinh viên thuộc bộ môn.<br>
>> + Duyệt đề cương sinh viên. <br>
>> + Trao đổi với sinh viên, giảng viên <br>
<br>
<br>
- __Trưởng khoa__: <br>
>> + Xem được tất cả mọi thứ.<br>
>> + Tạo đợt trong quá trình làm đề tài.<br>
>> + Duyệt đề cương đề tài. <br>
>> + Ramdom tạo hội đồng cho đề tài. <br>

_Danh sách sinh viên, giảng viên được nhập từ file Excel_
<br><br>
<image src="screen/9.jpg">
Database của đề tài (còn thiếu)
  
<image src="screen/7.png">
Giao diện đăng nhập website
  
<image src="screen/10.png">
Giao diện trang chủ khi sinh viên chưa đăng kí đề tài.
  
<image src="screen/8.png">
<image src="screen/11.png">
Giao diện đăng kí đề tài.

<image src="screen/2.png">
Thông tin giáo viên sau khi đăngg kí đề tài.
  
 <image src="screen/5.png">
Giao diện tạo đề cương tốt nghiệp.
  
 <image src="screen/14.png">
Sau khi đăng kí đề tài sinh viên có thể giao tiếp với giáo viên.
  
<image src="screen/1.png">
Danh sách đồ án trong giao diện cỉa quản trị viên.
