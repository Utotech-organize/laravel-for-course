@extends('layouts.app')
@section('title', 'บทความทั้งหมด')
@section('content')
@if (count($blogs) > 0)

<div class="d-flex justify-content-between align-items-center mb-4">
  <!-- Left-aligned button -->
  <a href="javascript:history.back()" class="btn btn-secondary btn-sm" style="border-radius: 20px; padding: 5px 15px;">
    ← กลับไปหน้าก่อนหน้า
  </a>

  <!-- Centered title -->
  <h2 class="mx-auto text-center">บทความทั้งหมด</h2>
</div>

<div class="table-responsive">

</div>

<div class="d-flex justify-content-center">
  {{$blogs->links()}}
</div>

@else
<h2 class="text text-center py-2">ไม่มีบทความในระบบ</h2>
@endif
@endsection