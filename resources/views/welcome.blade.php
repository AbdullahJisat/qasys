@extends('main.main-master')
@section('content')
<div class="w3-container w3-text-black  w3-large" id="jeans">
    <p>Questions</p>
  </div>

  <!-- Product grid -->
  <div class="w3-row w3-grayscale">

    @foreach ($quesAns as $ques)
    <div class="w3-col l3 s6">
        <div class="w3-container">
          <div class="w3-display-container">
            <iframe src="{{ $ques->files[0]->file_url ?? "" }}" frameborder="0" width="100%" height="200px"></iframe>
            <span class="w3-tag w3-display-topleft">New</span>
            <div class="w3-display-middle w3-display-hover">
              <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
            </div>
          </div>
          <p><a href="{{ $ques->files[0]->file_url }}" target="_blank">{{ $ques->name }} </a><br><b>&#2547; 199</b></p>
        </div>
      </div>
    @endforeach





  </div>
@endsection
