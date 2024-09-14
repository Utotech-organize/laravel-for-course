@extends('layouts.app')
@section('title','หน้าแรกของเว็บไซต์')
@section('content')
<div>
  <h2>บทความล่าสุด</h2>
  <hr>
  <div class="row">
    @foreach ($blogs as $item)
    <div class="col-md-4 mb-4 d-flex align-items-stretch">
      <div class="card shadow-sm" style="border-radius: 10px; overflow: hidden; flex-grow: 1;">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title" style="font-weight: bold; font-size: 1.25rem;">{{$item->title}}</h5>
          <p class="card-text text-muted flex-grow-1">{!! Str::limit($item->content, 100) !!}</p>
          <div class="d-flex justify-content-end">
            <a href="/detail/{{$item->id}}" class="btn btn-primary btn-sm"
              style="border-radius: 20px; padding: 5px 15px;">
              อ่านเพิ่มเติม
            </a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

</div>
@endsection