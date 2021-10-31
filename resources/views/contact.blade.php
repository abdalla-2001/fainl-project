<html>
<head>
<title>Docuoment</title>

</head>
<body>
<ul>
@foreach ($tasks as $index=>$task)
<li>{{++$index}}</li>
<li>{{$task}}</li>

@endforeach
</ul>




</body>


</html>