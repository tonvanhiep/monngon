@extends('admin.layout_admin')



@section('title')
    Quản lý đơn hàng
@endsection



@section('content')
    <div class="right-sidebar">
        <h3 class="title-category mb-40">QUẢN LÝ ĐƠN HÀNG</h3>

        <div class="options">
            <div>
                <label for="option-filter">Bộ lọc</label>
                <select id="option-filter">
                    <option>Tất cả đơn hàng</option>
                    <option>Đơn hàng chưa xem</option>
                    <option>Đơn hàng chờ xác nhận</option>
                    <option>Đơn hàng được đánh dấu</option>
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
                    <input type="search" placeholder="Tìm kiếm đơn hàng, người đặt, số đt...">
                    <button type="submit" class="icon-search btn-search"></button>
                </form>
            </div>
            <div class="filter">
                <label for="option-sort">Sắp xếp theo</label>
                <select id="option-sort">
                    <option>Đơn hàng mới nhất</option>
                    <option>Đơn hàng cũ nhất</option>
                    <option>Tổng tiền tăng dần</option>
                    <option>Tổng tiền giảm dần</option>
                </select>
            </div>
        </div>

        <div>
            <table class="table table-hover table-condensed"> 
                <thead> 
                    <tr> 
                        <th style="width:5%"></th> 
                        <th style="width:7%">ID</th> 
                        <th style="width:15%">Người đặt</th>
                        <th style="width:8%">Tổng tiền</th> 
                        <th style="width:10%">Số đt</th> 
                        <th style="width:20%">Email</th> 
                        <th style="width:12%">Ngày đặt</th> 
                        <th style="width:10%">Trạng thái</th> 
                        <th style="width:10%">Ghi chú</th> 
                        <th style="width:3%"></th> 
                    </tr> 
                </thead> 
                <tbody>
                    <tr style="font-weight: bold;"> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-unchecked"></div>
                        </td>
                        <td data-th="ID"> #4737 </td>
                        <td data-th="Name"> Tôn Văn Hiệp </td>
                        <td data-th="Total"> 564.460 </td> 
                        <td data-th="Subtotal" class="Tel"> 036.303.8485 </td> 
                        <td class="actions" data-th="Email"> tonvanhiepdragon@gmail.com </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td class="actions" data-th="Status"> Chờ xác nhận </td>
                        <td data-th="Note"> - </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>
                    </tr>
                    <tr> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-unchecked"></div>
                        </td>
                        <td data-th="ID"> #5754 </td>
                        <td data-th="Name"> T . V . H </td>
                        <td data-th="Total"> 112.000 </td> 
                        <td data-th="Subtotal" class="Tel"> 036.303.8485 </td> 
                        <td class="actions" data-th="Email"> tvh@gmail.com </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td class="actions" data-th="Status"> Chuẩn bị hàng </td>
                        <td data-th="Note"> - </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>
                    </tr>
                    <tr style="font-weight: bold;"> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-checked"></div>
                        </td>
                        <td data-th="ID"> #2535 </td>
                        <td data-th="Name"> T . V . H </td>
                        <td data-th="Total"> 654.000 </td> 
                        <td data-th="Subtotal" class="Tel"> 036.303.8485 </td> 
                        <td class="actions" data-th="Email"> tvh@gmail.com </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td class="actions" data-th="Status"> Chờ xác nhận </td>
                        <td data-th="Note"> Không liên lạc được </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>

                    </tr>
                    <tr> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-unchecked"></div>
                        </td>
                        <td data-th="ID"> #6845 </td>
                        <td data-th="Name"> T . V . H </td>
                        <td data-th="Total"> 66.000 </td> 
                        <td data-th="Subtotal" class="Tel"> 036.303.8485 </td> 
                        <td class="actions" data-th="Email"> tvh@gmail.com </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td class="actions" data-th="Status"> Chuẩn bị hàng </td>
                        <td data-th="Note"> - </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>
                    </tr>
                    <tr> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-unchecked"></div>
                        </td>
                        <td data-th="ID"> #6845 </td>
                        <td data-th="Name"> T . V . H </td>
                        <td data-th="Total"> 66.000 </td> 
                        <td data-th="Subtotal" class="Tel"> 036.303.8485 </td> 
                        <td class="actions" data-th="Email"> tvh@gmail.com </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td class="actions" data-th="Status"> Chờ xác nhận </td>
                        <td data-th="Note"> Gọi lại sau 11h </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>
                    </tr>
                    <tr> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-unchecked"></div>
                        </td>
                        <td data-th="ID"> #6845 </td>
                        <td data-th="Name"> T . V . H </td>
                        <td data-th="Total"> 66.000 </td> 
                        <td data-th="Subtotal" class="Tel"> 036.303.8485 </td> 
                        <td class="actions" data-th="Email"> tvh@gmail.com </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td class="actions" data-th="Status"> Đang giao hàng </td>
                        <td data-th="Note"> - </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>
                    </tr>
                    <tr> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-unchecked"></div>
                        </td>
                        <td data-th="ID"> #6845 </td>
                        <td data-th="Name"> T . V . H </td>
                        <td data-th="Total"> 66.000 </td> 
                        <td data-th="Subtotal" class="Tel"> 036.303.8485 </td> 
                        <td class="actions" data-th="Email"> tvh@gmail.com </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td class="actions" data-th="Status"> Đang giao hàng </td>
                        <td data-th="Note"> - </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>
                    </tr>
                    <tr> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-unchecked"></div>
                        </td>
                        <td data-th="ID"> #6845 </td>
                        <td data-th="Name"> T . V . H </td>
                        <td data-th="Total"> 66.000 </td> 
                        <td data-th="Subtotal" class="Tel"> 036.303.8485 </td> 
                        <td class="actions" data-th="Email"> tvh@gmail.com </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td class="actions" data-th="Status"> Đã hoàn thành </td>
                        <td data-th="Note"> - </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>
                    </tr>
                    <tr style="font-weight: bold;"> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-checked"></div>
                        </td>
                        <td data-th="ID"> #2535 </td>
                        <td data-th="Name"> T . V . H </td>
                        <td data-th="Total"> 654.000 </td> 
                        <td data-th="Subtotal" class="Tel"> 036.303.8485 </td> 
                        <td class="actions" data-th="Email"> tvh@gmail.com </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td class="actions" data-th="Status"> Đã hoàn thành </td>
                        <td data-th="Note"> - </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>

                    </tr>
                    <tr style="font-weight: bold;"> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-checked"></div>
                        </td>
                        <td data-th="ID"> #2535 </td>
                        <td data-th="Name"> T . V . H </td>
                        <td data-th="Total"> 654.000 </td> 
                        <td data-th="Subtotal" class="Tel"> 036.303.8485 </td> 
                        <td class="actions" data-th="Email"> tvh@gmail.com </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td class="actions" data-th="Status"> Đã hủy </td>
                        <td data-th="Note"> Không liên lạc được </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>

                    </tr>
                    <tr style="font-weight: bold;"> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-checked"></div>
                        </td>
                        <td data-th="ID"> #2535 </td>
                        <td data-th="Name"> T . V . H </td>
                        <td data-th="Total"> 654.000 </td> 
                        <td data-th="Subtotal" class="Tel"> 036.303.8485 </td> 
                        <td class="actions" data-th="Email"> tvh@gmail.com </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td class="actions" data-th="Status"> Đã hoàn thành </td>
                        <td data-th="Note"> - </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>

                    </tr>
                    <tr> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-unchecked"></div>
                        </td>
                        <td data-th="ID"> #6845 </td>
                        <td data-th="Name"> T . V . H </td>
                        <td data-th="Total"> 66.000 </td> 
                        <td data-th="Subtotal" class="Tel"> 036.303.8485 </td> 
                        <td class="actions" data-th="Email"> tvh@gmail.com </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td class="actions" data-th="Status"> Đã hoàn thành </td>
                        <td data-th="Note"> - </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>
                    </tr>
                    <tr> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-unchecked"></div>
                        </td>
                        <td data-th="ID"> #6845 </td>
                        <td data-th="Name"> T . V . H </td>
                        <td data-th="Total"> 66.000 </td> 
                        <td data-th="Subtotal" class="Tel"> 036.303.8485 </td> 
                        <td class="actions" data-th="Email"> tvh@gmail.com </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td class="actions" data-th="Status"> Đã hủy </td>
                        <td data-th="Note"> Trả hàng </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>
                    </tr>
                    <tr> 
                        <td data-th="Mark">
                            <div class="icon-checkbox-unchecked"></div>
                        </td>
                        <td data-th="ID"> #6845 </td>
                        <td data-th="Name"> T . V . H </td>
                        <td data-th="Total"> 66.000 </td> 
                        <td data-th="Subtotal" class="Tel"> 036.303.8485 </td> 
                        <td class="actions" data-th="Email"> tvh@gmail.com </td>
                        <td class="actions" data-th="Datetime"> 19:20:08 22/8/2022 </td>
                        <td class="actions" data-th="Status"> Đã hoàn thành </td>
                        <td data-th="Note"> - </td>
                        <td data-th="_Note"> <div class="icon-pencil"></div> </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection