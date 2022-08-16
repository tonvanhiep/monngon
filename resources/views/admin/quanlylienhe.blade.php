@extends('admin.layout_admin')



@section('title')
    Quản lý liên hệ
@endsection



@section('content')
    <div class="right-sidebar">
        <h3 class="title-category mb-40">QUẢN LÝ LIÊN HỆ (1 chưa đọc)</h3>

        <div class="options">
            <div>
                <label for="option-filter">Bộ lọc</label>
                <select id="option-filter">
                    <option>Tất cả liên hệ</option>
                    <option>Liên hệ chưa xem</option>
                    <option>Liên hệ chờ xác nhận</option>
                    <option>Liên hệ được đánh dấu</option>
                </select>
            </div>
            <div>
                <label for="option-time">Hiển thị</label>
                <select id="option-time">
                    <option>Trong 24h</option>
                    <option>Trong 3 ngày</option>
                    <option>Trong 7 ngày</option>
                    <option>Trong 30 ngày</option>
                </select>
            </div>
            <div>
                <form>
                    <input type="search" placeholder="Tìm kiếm tiêu đề, email, số đt...">
                    <button type="submit" class="icon-search btn-search"></button>
                </form>
            </div>
            <div class="filter">
                <label for="option-sort">Sắp xếp theo</label>
                <select id="option-sort">
                    <option>Liên hệ mới nhất</option>
                    <option>Liên hệ cũ nhất</option>
                </select>
            </div>
        </div>

        <div>
            <table class="table table-hover table-condensed"> 
                <thead> 
                    <tr> 
                        <th style="width:3%"></th> 
                        <th style="width:22%">Tiêu đề</th> 
                        <th style="width:25%">Nội dung</th> 
                        <th style="width:10%">Số điện thoại</th>
                        <th style="width:15%">Email</th>
                        <th style="width:12%">Ngày gửi</th> 
                        <th style="width:10%">Ghi chú</th> 
                        <th style="width:3%"></th> 
                    </tr> 
                </thead> 
                <tbody>
                    <tr style="font-weight: bold;"> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-unchecked"></div>
                        </td>
                        <td data-th="Title"> AKJSFSN SAFNJIKA DASKDFNDW WDWDBN DWFDWFB EFBJKEF WDKB </td>
                        <td data-th="Content"> Ngày nay, dân tộc Việt vẫn luôn gìn giữ những đặc sắc văn hóa ẩm thực truyền thống mà ông cha ta để lại. Tuy nhiên, không phải vì thế mà nói nền ẩm thực của nước ta đã lỗi thời, lạc hậu. Kế thừa và phát huy truyền thống, người Việt lại tiếp tục sáng tạo và đón nhận những tinh hoa ẩm thực từ các nước để làm nên những món ăn độc đáo. </td>
                        <td data-th="Subtotal" class="Tel"> <a href="tel:0363038485">036.303.8485</a> </td> 
                        <td class="actions" data-th="Email"> <a href="mailto:tonvanhiepdragon@gmail.com">tonvanhiepdragon@gmail.com</a> </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td data-th="Note"> - </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>
                    </tr>
                    <tr> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-unchecked"></div>
                        </td>
                        <td data-th="Title"> AKJSFSN SAFNJIKA DASKDFNDW WDWDBN DWFDWFB EFBJKEF WDKB </td>
                        <td data-th="Content"> Ngày nay, dân tộc Việt vẫn luôn gìn giữ những đặc sắc văn hóa ẩm thực truyền thống mà ông cha ta để lại. Tuy nhiên, không phải vì thế mà nói nền ẩm thực của nước ta đã lỗi thời, lạc hậu. Kế thừa và phát huy truyền thống, người Việt lại tiếp tục sáng tạo và đón nhận những tinh hoa ẩm thực từ các nước để làm nên những món ăn độc đáo. </td>
                        <td data-th="Subtotal" class="Tel"> <a href="tel:0363038485">036.303.8485</a> </td> 
                        <td class="actions" data-th="Email"> <a href="mailto:tonvanhiepdragon@gmail.com">tonvanhiepdragon@gmail.com</a> </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td data-th="Note"> - </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>
                    </tr>
                    <tr style="font-weight: bold;"> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-checked"></div>
                        </td>
                        <td data-th="Title"> AKJSFSN SAFNJIKA DASKDFNDW WDWDBN DWFDWFB EFBJKEF WDKB </td>
                        <td data-th="Content"> Ngày nay, dân tộc Việt vẫn luôn gìn giữ những đặc sắc văn hóa ẩm thực truyền thống mà ông cha ta để lại. Tuy nhiên, không phải vì thế mà nói nền ẩm thực của nước ta đã lỗi thời, lạc hậu. Kế thừa và phát huy truyền thống, người Việt lại tiếp tục sáng tạo và đón nhận những tinh hoa ẩm thực từ các nước để làm nên những món ăn độc đáo. </td>
                        <td data-th="Subtotal" class="Tel"> <a href="tel:0363038485">036.303.8485</a> </td> 
                        <td class="actions" data-th="Email"> <a href="mailto:tonvanhiepdragon@gmail.com">tonvanhiepdragon@gmail.com</a> </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td data-th="Note"> - </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>
                    </tr>
                    <tr> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-unchecked"></div>
                        </td>
                        <td data-th="Title"> AKJSFSN SAFNJIKA DASKDFNDW WDWDBN DWFDWFB EFBJKEF WDKB </td>
                        <td data-th="Content"> Ngày nay, dân tộc Việt vẫn luôn gìn giữ những đặc sắc văn hóa ẩm thực truyền thống mà ông cha ta để lại. Tuy nhiên, không phải vì thế mà nói nền ẩm thực của nước ta đã lỗi thời, lạc hậu. Kế thừa và phát huy truyền thống, người Việt lại tiếp tục sáng tạo và đón nhận những tinh hoa ẩm thực từ các nước để làm nên những món ăn độc đáo. </td>
                        <td data-th="Subtotal" class="Tel"> <a href="tel:0363038485">036.303.8485</a> </td> 
                        <td class="actions" data-th="Email"> <a href="mailto:tonvanhiepdragon@gmail.com">tonvanhiepdragon@gmail.com</a> </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td data-th="Note"> - </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>
                    </tr>
                    <tr> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-unchecked"></div>
                        </td>
                        <td data-th="Title"> AKJSFSN SAFNJIKA DASKDFNDW WDWDBN DWFDWFB EFBJKEF WDKB </td>
                        <td data-th="Content"> Ngày nay, dân tộc Việt vẫn luôn gìn giữ những đặc sắc văn hóa ẩm thực truyền thống mà ông cha ta để lại. Tuy nhiên, không phải vì thế mà nói nền ẩm thực của nước ta đã lỗi thời, lạc hậu. Kế thừa và phát huy truyền thống, người Việt lại tiếp tục sáng tạo và đón nhận những tinh hoa ẩm thực từ các nước để làm nên những món ăn độc đáo. </td>
                        <td data-th="Subtotal" class="Tel"> <a href="tel:0363038485">036.303.8485</a> </td> 
                        <td class="actions" data-th="Email"> <a href="mailto:tonvanhiepdragon@gmail.com">tonvanhiepdragon@gmail.com</a> </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td data-th="Note"> - </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection