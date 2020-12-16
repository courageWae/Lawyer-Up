<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name','Lexicon Support Services') }}</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}" media="all" />
    <style>
      .print {
            display:none;
        }
        .no-print{
            display:block;
        }
        @media print{
            .print {
                display:block;
            }
            .no-print{
                display:none;
            }
        }
    </style>  
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="{{ asset('assets/images/logo-2.png') }}">
      </div>
      <div id="company">
        <h2 class="name">Lexicon Support Services</h2>
        <div>John Nii Owoo Street</div>
        <div>+233 123456789</div>
        <div><a href="#">info@Lexiconsupportservices</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <h2 class="name">@yield('user_name')</h2>
          <div class="address">@yield('user_phone')</div>
          <div class="email"><a href="#">@yield('user_email')</a></div>
        </div>
        <div id="invoice">
          <h1><span>Invoice No:: </span>
            @section('invoice_number')
              @isset($invoice)
                {{count($invoice)+ 001}} 
              @endisset  
             @show
           </h1>
          <div class="date">
            <span>Date of Invoice :</span>
            @section('invoice_date')
              {{ now()->toDayDateTimeString() }}
             @show
          </div>
          <div class="date"><span>Due Date :</span>
            @section('invoice_duration')
               {{ now()->addyear()->toDayDateTimeString() }}
              @show
            </div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc"><b>DESCRIPTION</b></th>
            <th class="unit"><b>CATEGORY</b></th>
            <th class="desc"><b>UNIT PRICE</b></th>
            <th class="unit"><b>QUANTITY</b></th>
            <th class="total"><b>TOTAL</b></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no">01</td>
            <td class="desc"><h3>PLAN</h3>@yield('package_name')</td>
            <td class="unit">@yield('category_name')</td>
            <td class="desc"><span>&cent</span>@yield('category_price')</td>
            <td class="unit">1</td>
            <td class="total">&cent0.00</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">SUBTOTAL</td>
            <td>&cent0.00</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">TAX 0%</td>
            <td>&cent 0.00</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">GRAND TOTAL</td>
            <td><span>&cent</span>@yield('category_price_2')</td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks" class="no-print">Thank you!</div>

      <div id="notices">
        <div>MODE OF PAYMENT</div>
        <div class="notice">Payment is through mobile money</div>
        <p><strong>Momo Number (MTN) : +2331234567</strong></p>
      </div>
    </main>
     @yield('print_button')
       
    <footer>
      Lexicon Legal Support Services
    </footer>
  </body>


    <script>
        var jsPrintAll = function () {
            setTimeout(function () {
                window.print();
            }, 500);
        }
    </script>
</html>