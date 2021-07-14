@if ($paginator->hasPages())
        <ul class="pagination custom__pagination pt-2">
    @if ($paginator->onFirstPage())
    <!--<li class="page-item">-->
    <!--  <a class="page-link" href="#" aria-label="Previous">-->
    <!--    <span aria-hidden="true">&laquo;</span>-->
    <!--    <span class="sr-only disabled">Previous</span>-->
    <!--  </a>-->
    <!--</li>-->
    @else
    <li class="page-item">
      <a class="page-link-1" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only disabled">Previous</span>
      </a>
    </li>
    @endif
    @foreach ($elements as $element)
        <!--@if (is_string($element))-->
        <!--<li class="disabled"><span>{{ $element }}</span></li>-->
        <!--@endif-->
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <li class="page-item">
                    <a class="page-link-1 active" href="{{ $url }}">{{ $page }}</a>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link-1" href="{{ $url }}">{{ $page }}</a>
                </li>
                @endif
            @endforeach
        @endif
    @endforeach
    <!--<li class="page-item"><a class="page-link" href="#">1</a></li>-->
    @if ($paginator->hasMorePages())
    <li class="page-item">
      <a class="page-link-1" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only"> > </span>
      </a>
    </li>
    @else
    <li class="page-item  disabled">
        <span class="sr-only">Next</span>
    </li>
    @endif
  </ul>
@endif