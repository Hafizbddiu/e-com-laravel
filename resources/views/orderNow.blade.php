@extends('master')
@section("content")
<div class="container custom-product">
     <div class="col-sm-10">
        <table class="table">

            <tbody>
              <tr>

                <td>Amount</td>
                <td>${{$total}}</td>

              </tr>
              <tr>

                <td>tax</td>
                <td>$ 0</td>

              </tr>
              <tr>

                <td>Delivary</td>
                <td>$ 10</td>

              </tr>
              <tr>

                <td >Total Amount</td>
                <td>${{$total+10}}</td>
              </tr>
            </tbody>
          </table>

          <form action="/orderPlace" method="POST">
              @csrf
            <div class="mb-3">

              <textarea name="address" placeholder="Enter Your address" class="form-control" aria-describedby="emailHelp"></textarea>

            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Payment Method</label><br><br>
              <input type="radio" value="cash" name="payment"><span> Online Payment</span><br><br>
              <input type="radio" value="cash" name="payment"><span> EMI Payment</span><br><br>
              <input type="radio" value="cash" name="payment"><span> Payment On Delivary</span><br><br>

            </div>

            <button type="submit" class="btn btn-primary">Order Now</button>
          </form>
     </div>
</div>
@endsection
