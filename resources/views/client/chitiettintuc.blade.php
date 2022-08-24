@extends('client.layout-client')

@section('title')
{{$chitiet[0]->tieude}}
@endsection


@section('main')
  <main>
    @php
      $imgbanner = 'assets/images/banner-1.jpg';
      $titlebanner = 'Bài viết';
    @endphp

    @include('components.banner')

    <div class="detail-wrapper mb-40">
      <div class="container">
        <h1 class="title-detail">{{$chitiet[0]->tieude}}</h1>
        <div class="content">
          {!!$chitiet[0]->noidung!!}
        </div>

        <h2 class="title-category">Danh sách bình luận</h2>
        <div class="list-comment">
          <div class="item-comment">
            <div class="item-comment">
              <div class="name">Nguyễn Văn A</div>
              <div class="content">
                Reprehenderit adipisicing cillum consectetur cupidatat aliquip magna tempor veniam dolore ipsum.
              </div>
            </div>
            <div class="item-comment">
              <div class="name">Nguyễn Văn A</div>
              <div class="content">
                Reprehenderit adipisicing cillum consectetur cupidatat aliquip magna tempor veniam dolore ipsum.
              </div>
            </div>
          </div>
        </div>

        <div class="comment-form">
            <form method="post" action="">
              <h2>Bình luận</h2>
              <input type="hidden" name="postId" value="vv" />
              <div class="form-group">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input id="email" class="form-control" name="email" required />
              </div>
              <div class="form-group">
                <label for="content">Nội dung</label>
                <textarea class="form-control" name="content" rows="3" required></textarea>
              </div>
              <div class="form-group text-right">
                <button class="btn btn-info" type="submit" name="submit_comment">Gửi bình luận</button>
              </div>
            </form>
        </div>
      </div>
    </div>

  </main>
@endsection