<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('style/grid.css')}}" type="text/css">
    <style type="text/css">
        body{
          /* background: linear-gradient(90deg, #FFBE98 0%, #ebd9b4 100%); */
          background: url('assets/bg.jpg');
		      color: #4d4b4b;
        }
    </style>
</head>
<body>
  <x-navbar/>
  <div class="ms-3 me-3 mt-3">
    <section class="flex" id="photos">
    @foreach ($foto as $a)
      <a href="detail/{{$a['id']}}">
        <div class="overflow-y-hidden">
            <img src="@php echo asset($a['lokasi_file']);@endphp" class="img-fluid-border" alt="..." style="border-radius: 25px">
        </div>
      </a>
    @endforeach
    </section>
  </div>
  <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
  </script>
  <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
	</script>
</body>
</html>