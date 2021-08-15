@if($paginator->hasPages())
    @if($paginator->onFirstPage())
        <span aria-current="page" class="page-numbers">«</span>

    @else
        <a href="{{$paginator->previousPageUrl()}}" class="page-numbers">«</a>
    @endif
    @if($paginator->hasMorePages())
        <a href="{{$paginator->nextPageUrl()}}" class="next page-numbers">»</a>
    @else

    @endif
@endif
