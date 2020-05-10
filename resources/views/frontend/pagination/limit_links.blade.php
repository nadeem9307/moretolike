<?php
$link_limit = 10; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>

@if ($paginator->lastPage() > 1)
    <div id="product_paginate" class="dataTables_paginate paging_simple_numbers">
        <ul class="pagination">
            <li id="news_previous" class="paginate_button page-item previous {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                <a class="page-link" page="{{'1'}}" tabindex="0" href="{{ $paginator->url(1) }}">Previous</a>
            </li>
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <?php
                    $half_total_links = floor($link_limit / 2);
                    $from = $paginator->currentPage() - $half_total_links;
                    $to = $paginator->currentPage() + $half_total_links;
                    if ($paginator->currentPage() < $half_total_links) {
                        $to += $half_total_links - $paginator->currentPage();
                    }
                    if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                        $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
                    }
                ?>
                @if ($from < $i && $i < $to)
                    <li class="paginate_button page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                        <a class="page-link" page="{{$i}}" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                    </li>
                @endif
            @endfor
            <li id="news_next" class="paginate_button page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                @if($paginator->currentPage() == $paginator->lastPage())
                    <a class="page-link" tabindex="0" page="{{$paginator->currentPage()}}" href="{{ $paginator->url($paginator->currentPage()) }}" >End</a>
                @else
                    <a class="page-link" page="{{$paginator->currentPage()+1}}" tabindex="0" href="{{ $paginator->url($paginator->currentPage()+1) }}" >Next</a>
                @endif
            </li>
        </ul>
    </div>
@endif