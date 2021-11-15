@extends('main.main-master')
@section('content')
<div class="w3-container">
    <h1>Payment</h1>
    <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
    <p><input class="w3-input w3-border" type="text" placeholder="Enter address" style="width:100%"></p>
    <div style="display: flex">
        <p style="margin-right: 10px"><input class="w3-input w3-border" id="bkash" type="checkbox" style="width:100%"><span>Bkash</span></p>

        <p><input class="w3-input w3-border" type="checkbox" id="cash" style="width:100%;"><span>Cash</span></p>
    </div>
    <p><input class="w3-input w3-border" type="text" id="bkash_field" placeholder="Enter transaction code" style="width:100%;display: none;"></p>
    <p><input class="w3-input w3-border" type="text" id="cash_field" placeholder="Enter amount" style="width:100%;display: none;"></p>
    <button type="button" class="w3-button w3-red w3-margin-bottom"
    onclick="document.getElementById('pay').style.display='block'">Pay</button>
  </div>
  <div id="pay" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
      <div class="w3-container w3-white w3-center">
        <i onclick="document.getElementById('pay').style.display='none'"
          class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
        <h2 class="w3-wide">Payment Successful</h2>
        <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom"
          onclick="document.getElementById('pay').style.display='none'">Thank You</button>
      </div>
    </div>
  </div>
  <script>
    document.getElementById("bkash").onclick = function() {
    if(this.checked)
        document.getElementById('bkash_field').style.display = "block";
        // document.getElementById("cash").checked = false;// Uncheck
    else
        document.getElementById('bkash_field').style.display = "none";
    }

    document.getElementById("cash").onclick = function() {
    if(this.checked)
        document.getElementById('cash_field').style.display = "block";
        // document.getElementById("bkash").checked = false;// Uncheck
    else
        document.getElementById('cash_field').style.display = "none";
    }
  </script>
@endsection
