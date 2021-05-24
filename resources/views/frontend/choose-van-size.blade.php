@extends('frontend.layout.masterlayout')



@section('mainbody')
<div class="container mx-cont">
@includeif('frontend.forms.form1')
@includeif('frontend.forms.form2')
@includeif('frontend.forms.form3')
@includeif('frontend.forms.form4')
@includeif('frontend.forms.form5')
@includeif('frontend.forms.form6')
</div>

@endsection
@section('jquery')
<script>
// onload=function(){
//     location.reload();
//     }
</script>
@stack('javascript')
@endsection
