<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 2</title>
    <link rel="stylesheet" href="/style.css" media="all" />
   
    
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="../assets/images/logo-2.png">
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
          <h1> Invoice No:: 0{{ count($invoice) + 1 }}</h1>
          <div class="date">Date of Invoice : {{ $date = now()->toDayDateTimeString() }}</div>
          <div class="date"> Due Date : {{ now()->addyear()->toDayDateTimeString() }}</div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">DESCRIPTION</th>
            <th class="unit">CATEGORY</th>
            <th class="desc">UNIT PRICE</th>
            <th class="unit">QUANTITY</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no">01</td>
            <td class="desc"><h3>PLAN</h3>{{ strtoupper(request()->session()->get('name')) }}</td>
            <td class="unit">{{ strtoupper(request()->session()->get('category_name')) }}</td>

            <td class="desc">{{ request()->session()->get('price') }}</td>
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
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>