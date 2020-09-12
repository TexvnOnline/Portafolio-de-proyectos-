<div class="from-group">
    {!! Form::label('text1','Texto 1:') !!}
    {!! Form::text('text1', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('text2','Texto 2:') !!}
    {!! Form::text('text2', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('button1','Botón 1:') !!}
    {!! Form::text('button1', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('button2','Botón 2:') !!}
    {!! Form::text('button2', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('imagen','Imagen de carrusel:') !!}
    {!! Form::file('imagen') !!}
    <small class="form-text text-muted">
        Solo archivos de imágenes de dimensiones 1600x800 px.
    </small>
</div>
<div class="from-group">
    <div class="text-center">
        <img style="width:70%; height:70%;"  src="{{$slider->image->url}}" class="rounded" alt="...">
      </div>
</div>