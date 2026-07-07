@extends('layouts.main')

@section('content')
    <div class="BestNewBlock" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('images/{{ $news->first()->image }}'))">
        <h1>{{ $news->first()->title }}</h1>
        {!!  $news->first()->announce !!}
    </div>
    <div class="NewsList">
        <h3>Новости</h3>
        <div class="NewsBlocks">
            @php
                $newsOnPage = 4;
                $offset = $page * $newsOnPage;
                $currentPageNews = $news->slice($offset, $newsOnPage);
                $totalPages = (int) ceil(count($news) / $newsOnPage);
            @endphp
            @foreach ($currentPageNews as $new)
                <div class="NewBlock" onclick="window.location.href = '/new/{{ $new['id'] }}'">
                    <div class="NewTextBlock">
                        <div class="Timestamp">
                            <span>{{ \Carbon\Carbon::parse($new['date'])->format('d.m.Y') }}</span>
                        </div>
                        <h2>{{ $new['title'] }}</h2>
                        {!! $new['announce'] !!}
                    </div>
                    <button>Подробнее <svg class="defaultArrow" width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.707 8.07106C26.0975 7.68054 26.0975 7.04737 25.707 6.65685L19.343 0.292887C18.9525 -0.0976379 18.3193 -0.097638 17.9288 0.292886C17.5383 0.683411 17.5383 1.31658 17.9288 1.7071L23.5857 7.36395L17.9288 13.0208C17.5383 13.4113 17.5383 14.0445 17.9288 14.435C18.3193 14.8255 18.9525 14.8255 19.343 14.435L25.707 8.07106ZM-8.74228e-08 8.36395L24.9999 8.36395L24.9999 6.36395L8.74228e-08 6.36395L-8.74228e-08 8.36395Z" fill="#841844"/></svg><svg class="hoverArrow" width="27" height="15" viewBox="0 0 27 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 6.36395C0.447715 6.36395 4.82823e-08 6.81167 0 7.36395C-4.82823e-08 7.91624 0.447715 8.36395 1 8.36395L1 6.36395ZM26.707 8.07106C27.0975 7.68054 27.0975 7.04737 26.707 6.65685L20.343 0.292887C19.9525 -0.0976379 19.3193 -0.097638 18.9288 0.292886C18.5383 0.683411 18.5383 1.31658 18.9288 1.7071L24.5857 7.36395L18.9288 13.0208C18.5383 13.4113 18.5383 14.0445 18.9288 14.435C19.3193 14.8255 19.9525 14.8255 20.343 14.435L26.707 8.07106ZM1 8.36395L25.9999 8.36395L25.9999 6.36395L1 6.36395L1 8.36395Z" fill="white"/></svg></button>
                </div>
            @endforeach
            <div class="PageSelector">
                @for ($i = 0; $i < $totalPages; $i++)
                <a href="{{ request()->fullUrlWithQuery(['page' => $i]) }}" class="PageIndex @if ($page === $i) active @endif">
                    <span>{{ $i + 1 }}</span>
                </a>
                @endfor
                @if ($page < $totalPages - 1)
                <div class="PageIndex" style="padding: 16px 41px;" onclick="window.location.href='{{ request()->fullUrlWithQuery(['page' => $page + 1]) }}'">
                    <span>
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 6.36401C0.447715 6.36401 -4.82823e-08 6.81173 0 7.36401C4.82823e-08 7.9163 0.447715 8.36401 1 8.36401L1 6.36401ZM16.466 8.07112C16.8565 7.68059 16.8565 7.04743 16.466 6.65691L10.102 0.292945C9.7115 -0.0975793 9.07834 -0.0975792 8.68781 0.292945C8.29729 0.68347 8.29729 1.31663 8.68781 1.70716L14.3447 7.36401L8.68781 13.0209C8.29729 13.4114 8.29729 14.0446 8.68781 14.4351C9.07834 14.8256 9.7115 14.8256 10.102 14.4351L16.466 8.07112ZM1 8.36401L15.7589 8.36401L15.7589 6.36401L1 6.36401L1 8.36401Z" fill="#841844"/>
</svg>
                    </span>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
