@extends('layouts/main')

@section('content')
<h1><center>Akasuna Hera | About</center></h1>
{{-- <h3><?//= $name; ?></h3> --}}
{{-- kalo pake blade ga usah pake php echo lagi, pakenya {{  }}. ini udah include htmlspecialchars jadi lebih aman dari xss --}}
<h3>{{ $name }}</h3>
<h3>{{ $email }}</h3>
<img class="img-thumbnail" width="400" src="img/{{ $img }}" alt="{{ $name }}">    
@endsection
