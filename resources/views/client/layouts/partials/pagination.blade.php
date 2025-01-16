 <ul>
     @if ($paginator->onFirstPage())
         <li><a class="active" href="{{ $paginator->previousPageUrl() }}">1</a></li>
     @else
         <li><a href="{{ $paginator->previousPageUrl() }}">1</a></li>
     @endif
     @if ($paginator->currentPage() > 2)
         <li><a href="{{ $paginator->url(1) }}">1</a></li>
     @endif
     @if ($paginator->currentPage() > 3)
         <li><a href="{{ $paginator->url($paginator->currentPage() - 1) }}">...</a></li>
     @endif
     @if ($paginator->currentPage() !== 1 && $paginator->currentPage() !== $paginator->lastPage())
         <li><a class="active" href="{{ $paginator->url($paginator->currentPage()) }}">{{ $paginator->currentPage() }}</a>
         </li>
     @endif
     @if ($paginator->currentPage() < $paginator->lastPage() - 2)
         <li><a href="{{ $paginator->url($paginator->currentPage() + 1) }}">...</a></li>
     @endif
     @if ($paginator->currentPage() < $paginator->lastPage() - 1)
         <li><a href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>\
     @endif
 </ul>
