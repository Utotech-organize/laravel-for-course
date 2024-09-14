@extends('layouts.app')
@section('title', 'เขียนบทความ')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
  <!-- Left-aligned button -->
  <a href="javascript:history.back()" class="btn btn-secondary btn-sm" style="border-radius: 20px; padding: 5px 15px;">
    ← กลับไปหน้าก่อนหน้า
  </a>

  <!-- Centered title -->
  <h2 class="mx-auto text-center">เขียนบทความใหม่</h2>
</div>

<form method="POST" action="/author/insert">
  @csrf
  <div class="form-group">
    <label for="title">ชื่อบทความ</label>
    <input type="text" name="title" class="form-control">
  </div>
  @error('title')
  <div class="my-2">
    <span class="text-danger">{{$message}}</span>
  </div>
  @enderror
  <div class="form-group">
    <label for="content">เนื้อหาบทความ</label>
    <textarea name="content" cols="30" rows="5" class="form-control" id="content"></textarea>
  </div>
  @error('content')
  <div class="my-2">
    <span class="text-danger">{{$message}}</span>
  </div>
  @enderror
  <input type="submit" value="บันทึก" class="btn btn-primary my-3">
  <a href="/author/blog" class="btn btn-success">บทความทั้งหมด</a>
</form>
<script>
ClassicEditor
  .create(document.querySelector('#content'))
  .catch(error => {
    console.error(error);
  });
</script>
@endsection