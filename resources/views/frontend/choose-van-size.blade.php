@extends('frontend.layout.masterlayout')



@section('mainbody')
<div class="container" style="width: 655px;">
@includeif('frontend.forms.form1')
@includeif('frontend.forms.form2')
@includeif('frontend.forms.form3')
@includeif('frontend.forms.form4')
@includeif('frontend.forms.form5')
@includeif('frontend.forms.form6')
</div>

@endsection
@section('jquery')

@stack('javascript')
@endsection
