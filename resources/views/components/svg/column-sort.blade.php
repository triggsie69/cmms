<svg viewBox="0 0 14 14" role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <path class="
    @if ($asc)
        fill-indigo-200 group-hover:fill-indigo-500
    @else
        fill-gray-500 group-hover:fill-gray-100
    @endif
    " d="m 11.363635,5.363637 c 0,0.1477267 -0.05398,0.2755673 -0.16193,0.383522 -0.107953,0.1079547 -0.235793,0.161932 -0.38352,0.161932 l -7.63637,0 c -0.1477267,0 -0.2755667,-0.053977 -0.38352,-0.161932 -0.1079533,-0.1079547 -0.16193,-0.2357953 -0.16193,-0.383522 0,-0.147728 0.053977,-0.2755693 0.16193,-0.383524 L 6.616475,1.161932 C 6.724435,1.0539773 6.8522783,1 7.000005,1 c 0.1477267,0 0.2755667,0.053977 0.38352,0.161932 l 3.81818,3.818181 c 0.107953,0.1079547 0.16193,0.235796 0.16193,0.383524 z"></path>
    <path class="
    @if ($desc)
        fill-indigo-200 group-hover:fill-indigo-500
    @else
        fill-gray-500
        @if ($asc)
            group-hover:fill-gray-100
        @endif
    @endif
    " d="m 11.363635,8.636363 c 0,0.147728 -0.05398,0.275569 -0.16193,0.383523 l -3.81818,3.818182 C 7.2755717,12.946023 7.1477317,13 7.000005,13 6.8522783,13 6.724435,12.946023 6.616475,12.838068 L 2.798295,9.019886 C 2.6903417,8.911932 2.636365,8.784091 2.636365,8.636363 c 0,-0.1477267 0.053977,-0.2755673 0.16193,-0.383522 0.1079533,-0.1079547 0.2357933,-0.161932 0.38352,-0.161932 l 7.63637,0 c 0.147727,0 0.275567,0.053977 0.38352,0.161932 0.107953,0.1079547 0.16193,0.2357953 0.16193,0.383522 z"></path>
</svg>
