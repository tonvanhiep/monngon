@if (isset($currentpage) && isset($totalpage))
    <div class="pagination-section">
        <div class="container">
            <ul class="pagination">
                @for ($i = 1; $i <= $totalpage; $i++)
                    <li class="page-item {{($i == $currentpage)?'active':''}}">
                        <a href="#">{{$i}}</a>
                    </li>
                @endfor
            </ul>
        </div>
    </div>
@endif
