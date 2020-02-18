@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Oferta Académica
        </div>
        <div class="card-body">

          <svg width="1200" height="450">
              @foreach($data['blocks'] as $item)
                <rect x="{{ (($item['col']-1)*80)+2 }}" y="{{ (($item['row']-1)*50)+2 }}" width="70" height="40" style="fill: blue; stroke: pink; stroke-width: 5; fill-opacity: 0.1; stroke-opacity: 0.9;">
                </rect>
              @endforeach

              @foreach($data['blocks'] as $item)
              <text x="{{ (($item['col']-1)*80)+2 }}" y="{{ (($item['row']-1)*50)+20 }}" width="70" height="40" fill='black'>{{ $item['text'] }}
              </text>
              @endforeach

              @foreach($data['lines'] as $item)
    {{--             <line x1="{{ (($item['col1']-1)*80)+42 }}" y1="{{ (($item['row1']-1)*50)+20 }}" x2="{{ (($item['col2']-1)*80)+42 }}" y2="{{ (($item['row2']-1)*50)+20 }}" style="stroke:rgb(255,0,0);stroke-width:2">
              </line> --}}
                <polyline points="{{ (($item['col1'])*80-10) }},{{ (($item['row1']-1)*50)+20 }} {{ (($item['col2']-1)*80) }},{{ (($item['row2']-1)*50)+20 }}" style="fill:white;stroke:red;stroke-width:2" />
              @endforeach



          </svg>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
