@extends('layouts.navarplantilla')


@section('capcelera')
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('css/galeria.css')}}">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

@endsection



@section('body')


<div class="tz-gallery">
    <h1>Galeria</h1>
    <div class="gallery">

      
      
        @foreach ($imatges as $imatge)

        <a class="lightbox" href="/storage/galeria/{{$imatge->image_path}}" >
            <img src="/storage/galeria/{{$imatge->image_path}}" alt="imatge">
        </a>
        @endforeach
    </div>
    <div class="card-footer">
        {{$imatges->links()}}
    </div>
</div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
@endsection
