<h1> {{$text}} </h1>

@if($text == "add")
  Addend: {{$num1}} <br>
  Adder : {{$num2}}<br>
  Sum : {{$num1 + $num2}}

@elseif($text == "sub")
    Minuend: {{$num1}} <br>
    Subtrahend : {{$num2}}<br>
    Difference : {{$num1 - $num2}}

@elseif($text == "mul")
    Multiplicand: {{$num1}} <br>
    Multiplier : {{$num2}}<br>
    Product : {{$num1 * $num2}}

@elseif($text == "div")
    Dividend: {{$num1}} <br>
    Divisor : {{$num2}}<br>

    @if ($num2 != 0)
       Quotient : {{$num1 / $num2}}
    @else 
        Divisor should not be 0
    @endif


@endif