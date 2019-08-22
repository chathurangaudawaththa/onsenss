<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Onsenss Technology | Admin panel</title>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style>
.f-right {
  float: left;
  margin-bottom: 1rem;
}
.zoom {
display:table;
transition: transform .8s; /* Animation */
margin: 0 auto;
}

.zoom:hover {
transform: scale(5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
