@if ($paginator->hasPages())
    <ul class="pagination justify-content-center" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
        @endif

        <?php
            $start = $paginator->currentPage() - 2; // show 3 pagination links before current
            $end = $paginator->currentPage() + 2; // show 3 pagination links after current
            if($start < 1) {
                $start = 1; // reset start to 1
                $end += 1;
            } 
            if($end >= $paginator->lastPage() ) $end = $paginator->lastPage(); // reset end to last page
        ?>

        @if($start > 1)
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url(1) }}">{{1}}</a>
            </li>
            @if($paginator->currentPage() != 4)
                {{-- "Three Dots" Separator --}}
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
            @endif
        @endif
            @for ($i = $start; $i <= $end; $i++)
                <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a class="page-link" href="{{ $paginator->url($i) }}">{{$i}}</a>
                </li>
            @endfor
        @if($end < $paginator->lastPage())
            @if($paginator->currentPage() + 3 != $paginator->lastPage())
                {{-- "Three Dots" Separator --}}
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
            @endif
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{$paginator->lastPage()}}</a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link" aria-hidden="true">&rsaquo;</span>
            </li>
        @endif
    </ul>
@endif

<style>
    .pagination {
    --bs-pagination-padding-x: 1.25rem;
    --bs-pagination-padding-y: 0.375rem;
    --bs-pagination-font-size: 1rem;
    --bs-pagination-color: var(--bs-link-color);
    --bs-pagination-bg: #fff;
    --bs-pagination-border-width: 1px;
    --bs-pagination-border-color: #dee2e6;
    --bs-pagination-border-radius: 0.375rem;
    --bs-pagination-hover-color: black; /*สีฟอนต์ตอน hover*/
    --bs-pagination-hover-bg: #e9ecef; /*สีbackgroundตอน hover*/
    --bs-pagination-hover-border-color: #dee2e6;
    --bs-pagination-focus-color: black; /*สีฟอนต์ตอนกด*/
    --bs-pagination-focus-bg: #ffffff;  /*สีbackgroundตอนกด*/
    --bs-pagination-focus-box-shadow: none; /*กรอบตอนกด*/
    --bs-pagination-active-color: #fff;
    --bs-pagination-active-bg: #194276;
    --bs-pagination-active-border-color: #194276;
    --bs-pagination-disabled-color: #6c757d;
    --bs-pagination-disabled-bg: #fff;
    --bs-pagination-disabled-border-color: #dee2e6;
    display: flex;
    padding: 0;
    list-style: none;
    margin: 20px 0 50px 0;
}
.page-link {
    position: relative;
    display: block;
    padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
    font-size: var(--bs-pagination-font-size);
    color: black; /*สีฟอนต์ตอนไม่กด*/
    text-decoration: none;
    background-color: var(--bs-pagination-bg);
    border: var(--bs-pagination-border-width) solid var(--bs-pagination-border-color);
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}


@media screen and ( max-width: 680px ){

    .pagination {
    --bs-pagination-padding-x: 1rem;
    --bs-pagination-padding-y: 0.5rem;
    --bs-pagination-font-size: 1rem;
    }
}

@media screen and ( max-width: 580px ){

    .pagination {
    --bs-pagination-padding-x: 0.8rem;
    --bs-pagination-padding-y: 0.3rem;
    --bs-pagination-font-size: 0.8rem;
    }
}

@media screen and ( max-width: 480px ){

.pagination {
--bs-pagination-padding-x: 0.5rem;
--bs-pagination-padding-y: 0.2rem;
--bs-pagination-font-size: 0.8rem;
}
}

</style>