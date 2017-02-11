@extends('layouts.default')

@section('content')

@include('layouts.mainsite')
<script type="text/javascript">
$(document).ready(function(){
  setTimeout(function(){ show_popup('login-form');}, 500);
});
</script>
@endsection