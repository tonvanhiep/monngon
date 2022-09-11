<div class="comment">
    <h2 class="title-category">Danh sách bình luận</h2>
    <div class="list-comment">
        <div class="item-comment">
            <div class="item-comment">
                <div class="name">Nguyễn Văn A</div>
                <div class="content">
                    Reprehenderit adipisicing cillum consectetur cupidatat aliquip magna tempor veniam dolore ipsum.
                </div>
            </div>
            
            @isset($listbinhluan)
                @foreach ($listbinhluan as $key => $item)
                    <div class="name">{{$item->hoten}}</div>
                    <div class="content">
                        {{$item->noidung}}
                    </div>
                @endforeach
            @endisset
        </div>
    </div>

    <div class="comment-form">
        <form method="post" action="">
            <h2>Bình luận</h2>
            @csrf
            <div class="form-group">
                <label for="hoten">Họ và tên <span class="text-danger">*</span></label>
                <input id="hoten" type="text" class="form-control" name="hoten" required />
            </div>
            <div class="form-group">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input id="email" type="email" class="form-control" name="email" required />
            </div>
            <div class="form-group">
                <label for="content">Nội dung <span class="text-danger">*</span></label>
                <textarea class="form-control" name="noidung" rows="3" required></textarea>
            </div>
            <div class="form-group text-right">
                <button class="btn btn-info" type="submit" name="submit_comment">Gửi bình luận</button>
            </div>
        </form>
    </div>
</div>