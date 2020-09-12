<div class="from-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('slug','Slug') !!}
    {!! Form::text('slug', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('category_id','Categoría:') !!}
    {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('description','Descripción:') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('skills','Habilidades usadas:') !!}
    {!! Form::text('skills', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('client','Cliente:') !!}
    {!! Form::text('client', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('url','Enlace de demo:') !!}
    {!! Form::text('url', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('tags','Etiquetas:') !!}
    <div>
        @foreach ($tags as $tag)
        <label>
            {!! Form::checkbox('tags[]', $tag->id) !!} {{$tag->name}}
        </label>
        @endforeach
    </div>
</div>
<div class="from-group">
    {!! Form::label('image','Imagen de portada:') !!}
    {!! Form::file('image') !!}
    <small class="form-text text-muted">
        Solo archivos de imágenes de dimensiones 550x500 px.
    </small>
</div>
<div class="form-group">
    <label for="imagenes">Anadir imagenes de muestra</label>
    <input type="file" class="form-control-file" name="imagenes[]"id="imagenes[]" multiple accept="image/*">
    <small class="form-text text-muted">
        Solo archivos de imágenes de dimensiones 750x450 px.
    </small>
</div>
@section('scripts')
    <script src="{{asset('vendor/srtingToSlug/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $("#name, #slug"). stringToSlug({
                callback: function(text){
                    $("#slug").val(text);
                }
            });
        });
    </script>
@endsection  