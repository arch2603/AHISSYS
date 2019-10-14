<div class="row">
  @php
    $index = 0;
  @endphp
  @foreach ($attributes as $attr)
      {{--{{dd($items)}}--}}
    {{--<pre>--}}
         {{--{{ var_dump($attributes) . " " . "array output" }}--}}
    {{--</pre>--}}

    <div class="col-md-6">
      <div class="form-group">
          @php
              $stringformat = "";
              //convert the string into lowercase
              $stringtolower = strtolower($attr);
              //extract the first and last word in the string and store it
              $firstword = trim(strstr($stringtolower, ' ', true));
              $secondword = trim(strstr($stringtolower, ' '));

              //check which word is being stored from step two above
              if(strcmp($firstword, 'user') == 0)
              {
                $stringformat = $firstword.'_'.$secondword;
                //print $firstword;
                //print $stringformat;
              }
              elseif (strcmp($firstword, 'first') == 0)
              {
                 $stringformat = 'u_'.trim(substr($firstword,-5, 1)).trim($secondword);
                //print $firstword;
                 //print $stringformat;
                //print " First";
              }
               elseif (strcmp($firstword, 'last') == 0)
              {
                 $stringformat = 'u_'.trim(substr($firstword,-4, 1)).trim($secondword);
                //print $firstword;
                 //print $stringformat;
                //print " First";
              }


              //if the word is for instance first, this means it is the first name
              //
              //$stringformat =  strtolower(str_replace(' ', '', $attr));
              //print $stringformat;
          @endphp
          {{--{{ dd($stringFormat) }}--}}
          {{--<pre>--}}
              {{--{{print "String Format Output: ".$stringFormat}}--}}
          {{--</pre>--}}

          <label for="input<?=$stringformat?>" class="col-sm-3 control-label">{{$attr}}</label>
          {{--@php--}}
            {{--print $stringformat;--}}
          {{--@endphp--}}
          {{--{{ dd($fields) }}--}}
          <div class="col-sm-9">

              <input value="{{isset($oldvalues) ? $oldvalues[$index] : ''}}" type="text" class="form-control" name="<?=$stringformat?>" id="input<?=$stringformat?>" placeholder="{{$attr}}">
              {{--{{ print $oldvalues[$index] }}--}}
              {{--{{print_r($oldvalues)}}--}}
              {{--{{ var_dump($oldvalues) }}--}}
              {{--{{ dd($stringFormat) }}--}}
              {{--{{ dd($old_values) }}--}}
          </div>
      </div>
    </div>
  @php
    $index++;
  @endphp
  @endforeach
</div>