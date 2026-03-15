<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body>

<a class="modal-trigger" href="#modal"><img src="{{ $projet['kebab_chemin'] }}"></a>

<script>

document.addEventListener('DOMContentLoaded', function() {

    var elems = document.querySelectorAll('.modal');

    var instances = M.Modal.init(elems, {
        opacity: 0.7,
        startingTop: '4%',
        endingTop: '10%'
    });
  });


</script>
@include('test')
</body>

</html>
