@extends('layouts.master')
@section('content')

<div class="container mt-4 text-center">
        <div class="row row-cols-3">
            @foreach($movies as $curItem)
                <div class="col mb-4">
                    <div class="card h-100 w-100">
                      <div class="card-body">
                        <h3 class="card-title">{{$curItem['title']}}</h3>
                        <h4 class="card-subtitle mb-2 text-muted">({{$curItem['original_title']}})</h4>
                        <p>{{$curItem['nationality']}}</p>
                        <p>{{$curItem['date']}}</p>
                        <p>
                            @php
                                $stars = round($curItem['vote']);
                            @endphp
                            @for ($i = 0; $i < 10; $i++)
                                @if ($i < $stars)
                                    <i class="fas fa-star text-warning"></i>
                                @else
                                    <i class="far fa-star text-warning"></i>
                                @endif
                            @endfor
                            ({{$curItem['vote']}})
                        </p>
                      </div>
                    </div>
                </div>
            @endforeach
        </div>
   </div>

@endsection