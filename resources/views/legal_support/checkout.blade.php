<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 2</title>
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
          <h2 class="name">{{ Auth::user()->name }}</h2>
          <div class="address">{{ Auth::user()->phone }}</div>
          <div class="email"><a href="#">{{ Auth::user()->email }}</a></div>
        </div>
        <div id="invoice">
          <h1> Invoice No:: #0{{ count($invoices) + 1 }}</h1>
          <div class="date">Date of Invoice : {{ $date = now()->toDayDateTimeString() }}</div>
          <div class="date"> Due Date : {{ now()->addyear()->toDayDateTimeString() }}</div>
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
            <td class="desc"><h3>PLAN</h3>{{ strtoupper($categories->package->name) }}</td>
            <td class="unit">{{ strtoupper($categories->Name) }}</td>
            <td class="desc">&cent{{ $categories->Price }}</td>
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
            <td>&cent0.00</td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks">Thank you!</div>

      <div id="notices">
        <div>MODE OF PAYMENT</div>
        <div class="notice">Payment is through mobile money</div>
        <p><strong>Momo Number (MTN) : +2331234567</strong></p>
      </div>
    </main>

    <div style="float:right" class = "no-print";>
        <button style = "font-size: 20px;" onclick="jsPrintAll()">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-printer" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 2H5a1 1 0 0 0-1 1v2H3V3a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h-1V3a1 1 0 0 0-1-1zm3 4H2a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h1v1H2a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1z"/>
            <path fill-rule="evenodd" d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM5 8a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H5z"/>
            <path d="M3 7.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
          </svg> Print
        </button>
        <button style = "font-size: 20px;"><a href="/user/dashboard">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
            <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
          </svg> Dashboard</a>
        </button>
      </div>   
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